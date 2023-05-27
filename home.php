<?php include "db_conn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalleryGrid</title>
</head>
<style>
img {
    max-width: 100%;
    margin-bottom: 1em;
    display: block;
    outline: 2px solid #fff;
    outline-offset: -5px;
    border-radius: 15px;
    border-style: solid;
}

.gallery {
    columns: 5 320px;
    column-gap: 1em;

}

</style>

<body>

<div class="gallery">
  
    <?php
            $sql= "SELECT * fROM content ORDER BY Content_ID DESC";
            $res = mysqli_query($conn,$sql);

            if(mysqli_num_rows($res) > 0){
                while($images = mysqli_fetch_assoc($res)){?>
                    <img src = "tmp_img/<?=$images['Image']?>">
              <?php  } }?>
              </div>
             
</body>


</html>