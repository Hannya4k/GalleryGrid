<?php
session_start();
include'db_conn.php';
if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $capt = $_POST["cap"];
    $user = $_SESSION['User_ID'];
    if($_FILES["image"]["error"] === 4){
        echo "<script> alert ('Image Does not Exist');</script>";
    }
    else{
        $filename = $_FILES["image"]["name"];
        $filesize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg','jpeg','png'];
        $imageExtension = explode('.',$filename);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            header("Location: index1.php?error=Invalid Image Extension");
        }else if($filesize > 1000000){
            header("Location: index1.php?error=File Size Too Large");
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            move_uploaded_file($tmpName, 'tmp_img/'. $newImageName);
            $query = "INSERT INTO `content`(`User_ID`,`Title`, `Text`, `Image`) VALUES ($user,'$title','$capt','$newImageName')";
            mysqli_query($conn, $query);
            header("Location: index1.php?error=Successfully Added");
        }
    }
}
?>