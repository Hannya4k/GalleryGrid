<?php
    session_start();
    include "db_conn.php";

        $ID = $_POST['con-id'];
        $sql= "DELETE FROM content WHERE `Content_ID` = '$ID'";
        $res = mysqli_query($conn,$sql);
        header("Location: /GalleryGrid/profile.php");
        exit;
    
?>