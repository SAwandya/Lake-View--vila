<?php require_once 'includes/db.php' ?>
<?php require_once 'includes/sessions.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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

<!----------- header start -------------->
    <div  class="form-con">
    <form id="main-form" class="form"  action="" method="post">
    
        <ul>
            <i onclick = "hidenmenu()" class="fa-solid fa-circle-xmark"></i>
            <li><a href="">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">CONTACT</a></li>
            <li><a href="">REGISTER</a></li>
            <li><a href="">NEWS</a></li>
        </ul>
        <input class="inputfield" type="text" name="" id="">
        <input class="search" type="button" value="search">
        <span><button class="btn_b">Book Now</button></span>
    </form>
    </div>
<!----------- header end -------------->

<!---------------- main fram start ----------------->

<section class="header">
    <i onclick="showmenu()" class="fa-solid fa-bars"></i>
    <div class="head_title">
    
        <h1>LAKE VIEW VILLA</h1>
        <h2>HAPPY AND COMFORTABLE PLACE TO LIVE</h2>
    </div>
</section>

</body>
</html>

<!---------------- main fram end ----------------->

<!---------------- Gallery start----------------------->
<div class="G-body">
    <div class="G-title"><h1>GALLARY</h1></div>
<div class="slider">
        <div class="slides">

            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">
            <input type="radio" name="radio-btn" id="radio6">
            <input type="radio" name="radio-btn" id="radio7">
            <input type="radio" name="radio-btn" id="radio8">
            <input type="radio" name="radio-btn" id="radio9">
            <input type="radio" name="radio-btn" id="radio10">
            <input type="radio" name="radio-btn" id="radio11">
            <input type="radio" name="radio-btn" id="radio12">
            <input type="radio" name="radio-btn" id="radio13">
            <input type="radio" name="radio-btn" id="radio14">
            <input type="radio" name="radio-btn" id="radio15">
            <input type="radio" name="radio-btn" id="radio16">
            <input type="radio" name="radio-btn" id="radio17">
            <input type="radio" name="radio-btn" id="radio18">
            <input type="radio" name="radio-btn" id="radio19">
           
            
            <div class="slide first">
                <img src="imgs/img1.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img2.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img3.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img4.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img5.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img6.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img7.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img8.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img9.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img10.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img11.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img12.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img13.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img14.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img15.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img16.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img17.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img17.jpeg" alt="">
            </div>
            <div class="slide">
                <img src="imgs/img19.jpeg" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
                <div class="auto-btn6"></div>
                <div class="auto-btn7"></div>
                <div class="auto-btn8"></div>
                <div class="auto-btn9"></div>
                <div class="auto-btn10"></div>
                <div class="auto-btn11"></div>
                <div class="auto-btn12"></div>
                <div class="auto-btn13"></div>
                <div class="auto-btn14"></div>
                <div class="auto-btn15"></div>
                <div class="auto-btn16"></div>
                <div class="auto-btn17"></div>
                <div class="auto-btn18"></div>
                <div class="auto-btn19"></div>
                
            </div>


        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
            <label for="radio6" class="manual-btn"></label>
            <label for="radio7" class="manual-btn"></label>
            <label for="radio8" class="manual-btn"></label>
            <label for="radio9" class="manual-btn"></label>
            <label for="radio10" class="manual-btn"></label>
            <label for="radio11" class="manual-btn"></label>
            <label for="radio12" class="manual-btn"></label>
            <label for="radio13" class="manual-btn"></label>
            <label for="radio14" class="manual-btn"></label>
            <label for="radio15" class="manual-btn"></label>
            <label for="radio16" class="manual-btn"></label>
            <label for="radio17" class="manual-btn"></label>
            <label for="radio18" class="manual-btn"></label>
            <label for="radio19" class="manual-btn"></label>
        </div>  
    </div>
</div>
<!------------- Rooms ------------->

<section class="rooms-container">
    <div class="service">
    <i class="fa-solid fa-bell-concierge"></i>
        <h1>services</h1>
        <p>Executive loung access<br>Wake-up service</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-circle-info"></i>
        <h1>General</h1>
        <p>Smoking permitted<br>Fan<br>Fire extinguisher<br>Iron<br>
            Ironing facilities<br>Key access<br>Mosquito net<br>Private entrance<br>
            Safety deposit box<br>Soundproofing<br>Tile/marble floor</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-eye"></i>
        <h1>View</h1>
        <P>Garden view<br>Lake view<br>Landmark view<br>Quiet street view<br>
          View</P>
    </div>
    <div class="service">
    <i class="fa-solid fa-hand-sparkles"></i>
        <h1>Cleanliness & disinfecting</h1>
        <p>Hand sanitiser</p>
    </div>
    <div class="service">
    <i class="fa-duotone fa-hotel"></i>
        <h1>Physical distancing</h1>
        <p>Single-room air conditioning for guest accommodation</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-hand-sparkles"></i>
        <h1>Room Amenities</h1>
        <p>Adapter<br>Feather pillow<br>Socket near the bed</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-shield-halved"></i>
        <h1>Safety features</h1>
        <p>Air purifires</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-sparkles"></i>
        <h1>Entertainment and family services</h1>
        <p>Baby safety gates</p>
    </div>
    <div class="service">
        <h1>Outdoors</h1>
        <i class="fa-solid fa-grill-hot"></i>
        <p>Balcony<br>Outdoor dining area<br>Outdoor furniture<br>Terrace</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-mug-hot"></i>
        <h1>Food & Drink</h1>
        <p>Bottle of water<br>Tea/Coffee maker</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-wifi"></i>
        <h1>Media & Technology</h1>
        <p>Cable channels<br>Flat-screen TV<br>Satellite channels<br>TV</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-shop"></i>
        <h1>Building characterristics</h1>
        <p>Detched</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-bed"></i>
        <h1>Bedroom</h1>
        <p>Linen</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-face-smile"></i>
        <h1>Living Area</h1>
        <p>Dining area<br>Seating Area</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-fish"></i>
        <h1>Kitchen</h1>
        <p>Cleaning products<br>Ding table<br>Electric kettle<br>Kitchen<br>Kitchenette<br>
            Kitchenware<br>Refrigerater<br>Toaster<br>Tumble dryer<br>Washing machine<br>
            Wine glasses</p>
    </div>
    <div class="service">
    <i class="fa-solid fa-sink"></i>
        <h1>Bathroom</h1>
        <p>Additional toilet<br>Bidet<br>Body soap<br>Conditioner<br>Free toiletries<br>
            Private bathroom</p>
    </div>

    



<!-------------------  location  -------------------->

</section>
<section class="location">
    <h1>Location</h1>

    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.380057247597!2d80.499072614738!3d5.9422445956954935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae13effb8829279%3A0x51906349050cbf0c!2sLake%20View%20Villa%20Mirissa!5e0!3m2!1sen!2slk!4v1661856352572!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!------------- comment btn ---------------->
<div class="comment-btn">
<a href="comment.php"><input class="com-b" type="button" value="LEAVE US COMMENT"></a>
</div>

<!-------------- comment section ---------------->

<div class="com-rew">Custermer reviews</div>

<section class="main">
<?php
    $sql = "SELECT * FROM comments";
    $stmt = $conn->query($sql);
    while($Datarows = $stmt->fetch()){

        $Id = $Datarows["id"];
        $Name = $Datarows["name"];
        $Comment = $Datarows["comment"];
   
?>
    <div class = comment-container>
        <div class="com-name">
            <h1><?php echo $Name ?></h1>
        </div>
        <div class="com-comment">
            <p><?php echo $Comment  ?></p>
        </div>
    </div>

    </div>
    <?php } ?>
</section>

<script>
    let menu = document.getElementById("main-form");

    function hidenmenu() {
        menu.style.right = '-550px'
    };
    function showmenu() {
        menu.style.right = '0'
    }


</script>
