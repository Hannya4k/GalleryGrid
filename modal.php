<?php
    include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
img {
    max-width: 100%;
    margin-bottom: 1.5em;
    display: block;
    outline: 2px solid #fff;
    border-radius: 15px;

}
</style>

<body>
    <div class="modal fade" id="UDModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">UNDER DEVELOPMENT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Oops Sorry this feature or function is under development. If have concerns please contact the
                    developers. Thank you
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="MModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">UNDER DEVELOPMENT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/TAC.jpg" />
                </div>
                <div class="modal-footer">
                    Oops Sorry this feature or function is under development. If have concerns please contact the
                    developers. Thank you
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="PModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">UNDER DEVELOPMENT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/rickroll.gif" />
                </div>
                <div class="modal-footer">
                    Oops Sorry this feature or function is under development. If have concerns please contact the
                    developers. Thank you
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="FModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">SIGNED UP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/rickroll.gif" />
                </div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="UploadstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">UPLOAD A PHOTO</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="uploadBack.php" method="post" enctype="multipart/form-data">
                        <?php
                    if(isset($_GET['error'])){
                        echo '<p class = error>';echo $_GET['error'];'</p>';
                    }
                    ?>
                        <div class="form-group">
                            <label class="form-label">Title</label><br>
                            <input class="form-control" name="title" type="text" id="title" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Caption</label><br>
                            <textarea class="form-control" name="cap" type="text" id="caption" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Upload an image</label><br>
                            <input class="form-control" name="image" type="file" id="image" accept=".jpg, .jpeg, .png"
                                value="" required>
                        </div>
                        <div class="modal-footer">
                          <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                            <input class="btn btn-secondary w-100" name="submit" type="submit" value="UPLOAD">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="EditstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel">Edit Profile</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="updateUser.php" method="post" enctype="multipart/form-data">
    
                        <div class="form-group">
                            <label class="form-label">UserName</label><br>
                            <input class="form-control" name="user" type="text" id="title" >
                        </div>
                        <div class="modal-footer">
                            <form action = "updateUser.php" method = "post" enctype="multipart/form-data"><input class="btn btn-secondary w-100" name="submit" type="submit" value="EDIT"></form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                    
</body>

</html>