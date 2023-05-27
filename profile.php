<?php 
session_start();
        include "db_conn.php";
        $name = $_SESSION["User_name"];
        $ID = $_SESSION["User_ID"];
?>
<?php include('header.php'); ?>
<?php include('modal.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
 <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> -->
</head>
<style>
img {
    max-width: 100%;
    margin-bottom: 1em;
    display: block;
    outline: 2px solid #fff;
    outline-offset: -5px;
    border-radius: 15px;
    
}

.gallery {
    columns: 5 320px;
    column-gap: 1em; 
    
}
.imgs{
    width: auto;
    height: auto;
    border-style: solid;
}

</style>

<body>
    <section class="h-100 gradient-custom-2">
        <div class="container-l py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row"
                            style="background-color: #000; height:200px;">

                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="img/D.png" alt="Generic placeholder image"
                                    class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                                    <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#EditstaticBackdrop" style=" margin-top: 30px; z-index: 1;">Edit Profile</a>
                          
                            </div>

                            <div class="ms-4" style="margin-top: 120px;">
                                <?php
                                    echo '<h4>'.$name.'</h4>';
                                    echo '<h5>#'.$ID.'</h5>';
                                ?>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                    <p class="mb-1 h5">253</p>
                                    <p class="small text-muted mb-0">Photos</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-1 h5">1026</p>
                                    <p class="small text-muted mb-0">Followers</p>
                                </div>
                                <div>
                                    <p class="mb-1 h5">478</p>
                                    <p class="small text-muted mb-0">Following</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">About</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <p class="font-italic mb-1">Web Developer</p>
                                    <p class="font-italic mb-1">Lives in New York</p>
                                    <p class="font-italic mb-0">Photographer</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0">Photos</p>
                                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                            </div>
                            <div class="gallery">
                                <?php
                                $sql= "SELECT * fROM content WHERE `User_ID` = '$ID'";
                                $res = mysqli_query($conn,$sql);
                                $images = mysqli_fetch_assoc($res);
                                if(mysqli_num_rows($res) >= 0){
                                while($images = mysqli_fetch_assoc($res)){?>
                                <div class = imgs>
                                <img src="tmp_img/<?=$images['Image']?>" title="<?=$images['Title']?>">
                                <form action="deleteImg.php" method="post" enctype="multipart/form-data">
                                    <input type = "hidden" name = "con-id" value ="<?php echo $images['Content_ID'];?>">
                                    <input class="btn btn-secondary w- 100" name="submit" type="submit" value="Delete <?=$images['Title']?>">
                                </form>
                                </div>
        
                                <?php  } }?>
                            </d>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>