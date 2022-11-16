<?php require_once 'includes/sessions.php'; ?>
<?php require_once 'includes/db.php'; ?>


<?php

if(isset($_POST["Submit"])){

    
    $Uname = $_POST["username"];
    $Email = $_POST["Email"];
    $comment = $_POST["Comment"];

    if(empty($Uname)||empty($Email)||empty($comment)){
        $_SESSION["error_massage"] = "All fields must be fill";
        Redirect_to("comment.php");
    }
    else{
        $sql = "INSERT INTO comments(name,email,comment) VALUES(:Name,:Email,:Comment)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':Name',$Uname);
        $stmt->bindValue(':Email',$Email);
        $stmt->bindValue(':Comment',$comment);
        $Execute = $stmt->execute();

        if($Execute){
            $_SESSION["success_massage"] = "Comment successfuly added";
        }

        
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_comments.css">
    <title>Lake View Villa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Roboto&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/db29f35685.js" crossorigin="anonymous"></script>

</head>
<body>



<section class="comment-container">


    <h1>Leave us comment</h1>
    <div class="comment">
        
        <form class="fields" action="comment.php" method = "post">
        <div class="input-group">
            <label for="name">Name</label>
            <input class="name" type="text" name="username" >
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input class="email" type="email" name="Email">
        </div>
        <div class="input-group">
            <label for="comments">Comment</label>
            <textarea class="text" name="Comment" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="input-group">
            <button class="sub-btn" type="submit" name="Submit">SUBMIT</button>
            <a href="index.php"><i class="fa-solid fa-house"></i></a>
        </div>    
        
    </div>
    <?php echo error_msg();
          echo success_msg();
    ?>
</section>
