<?php
    session_start();
    include "db_conn.php";

    $userid = $_SESSION["User_ID"];
    if(!empty($_POST['user'])){
        $changeN = $_POST['user'];
        $sql = "UPDATE user SET User_name = '$changeN' WHERE User_ID = '$userid'";
        $res = mysqli_query($conn,$sql);
        $_SESSION["User_name"] = $changeN;
        header("Location: /GalleryGrid/profile.php");
       
    }
    else{
        echo '<script>alert("Must input one of them")</script>';
        header("Location: profile.php");
    }
?>