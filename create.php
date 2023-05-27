<?php
include'db_conn.php';
if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $capt = $_POST["Caption"];
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
            echo 
            "<script> alert('Invalid Image Extension'); </script>"
            ;
        }else if($filesize > 10000){
            echo
            "<script>alert('Image Size too Large');</script>"
            ;
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            move_uploaded_file($tmpName, 'img/'. $newImageName);
            $query = "INSERT INTO `content`(`User_ID`,`Title`, `Text`, `Image`) VALUES (3,'$title','$capt','$newImageName')";
            mysqli_query($conn, $query);
            echo
            "<script>
                alert('Successfully Added');
            </script>"
            ;
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
    <title>Upload a photo</title>
</head>

<body>
    <form action = "create.php" method = "post" enctype = "multipart/form-data">
        <h1>Upload a photo</h1>
        Title <input type="text" name = "title" id = "title" required>
        Caption <input type="text" name = "Caption"> <br>
        <input type="file" name = "image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br>
        <button type="submit" name = "submit">Upload</button>
    </form>
</body>

</html>