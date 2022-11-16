<?php 
session_start();

function error_msg(){
    if(isset($_SESSION["error_massage"])){
        $output = "<div class = \"alert\">";
        $output .=htmlentities($_SESSION["error_massage"]);
        $output .="</div>";
        $_SESSION["error_massage"] = null;
        return $output;
    };
}
function success_msg(){
    if(isset($_SESSION["success_massage"])){
        $output = "<div class = \"success\">";
        $output .=htmlentities($_SESSION["success_massage"]);
        $output .="</div>";
        $_SESSION["success_massage"] = null;
        return $output;
    };
}
?>

<?php
function Redirect_to($New_location){
    header("Location:".$New_location);
    exit;
}
?>