<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="cat offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h4 id="offcanvasRightSU">SIGN UP</h4>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <form action="regBack.php" method="post">
            <h3 class="text-center">Dont have an account?</h3>
            <h6 class="text-center">It's free and only takes a minute</h6>
            <?php
                    if(isset($_GET['error'])){
                        echo '<p class = error>';echo $_GET['error'];'</p>';
                    }
            ?>
            <div class="form-group">
                <label class="form-label">First Name</label>
                <input class="form-control" name = "fname" type="text" id="firstname" required>
            </div>

            <div class="form-group">
                <label class="form-label">Last Name</label>
                <input class="form-control" name = "lname" type="text" id="lastname" required>
            </div>

            <div class="form-group">
                <label class="form-label">Contact no.</label>
                <input class="form-control" name = "contact" type="tel" id="cnumber" required>
            </div>

            <div class="form-group">
                <label class="form-label">Username</label>
                <input class="form-control" name = "user" type="text" id="user" required>
            </div>

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input class="form-control" name = "email" type="email" id="email" required>
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input class="form-control" name = "passwords" type="password" id="password" required>
            </div>

            <input class="btn btn-secondary w-100" name = "register"type="submit" value="SIGN UP" href = "login.php">
            <p class="text-center" style="font-size: 15px;">
                By clicking the Sign Up button, you agree to our <br />
                <a href="#" data-bs-toggle="modal" data-bs-target="#MModal">Terms and Condition</a> and <a href="#"
                    data-bs-toggle="modal" data-bs-target="#PModal">Policy Privacy</a>
            </p>
            <div class="text-center">
                <a href="#offcanvasRightLI" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogin"
                    aria-controls="offcanvasRight">Already have an account?</a>
            </div>
        </form>
    </div>
</body>

</html>