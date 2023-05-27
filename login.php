<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="cat offcanvas offcanvas-end bg-light text-emphasis-dark" tabindex="-1" id="offcanvasLogin"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h4 id="offcanvasRightLI">LOG IN</h4>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <form action="loginBack.php" method="post">
            <h2 class="text-center">Have an account?</h2>
            <?php
                    if(isset($_GET['error'])){
                        echo '<p class = error>';echo $_GET['error'];'</p>';
                    }
                ?>
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input class="form-control" name = "email" type="email" id="email" required>
            </div>
            <div class="form-group">
                <label class="form-label">Password</label><br>
                <input class="form-control" name = "password" type="password" id="password" required>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label">Remember me</label>
            </div>
            <input class="btn btn-secondary w-100" type="submit" value="SIGN IN">
            
            <div class="text-end"><a href="#" data-bs-toggle="modal" data-bs-target="#UDModal">Forgot Password</a></div>
            <br>
            <div class="text-center">
                <a href="#staticBackdropLabel" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                aria-controls="staticBackdrop">Dont have an account?</a>
            </div>
        </form>
    </div>
</body>

</html>