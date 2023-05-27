         <!--search bar-->
         <li class="nav-item" data-bs-toggle="modal" data-bs-target="#UDModal">
                        <div class=" col-xs-3">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                                <button class="btn btn-secondary" type="submit" data-bs-toggle="modal"
                                    data-bs-target="#UDModal">Search</button>
                            </form>
                        </div>
                    </li>

                        <!--Upload-->
    <div class="cat modal fade" id="UploadModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="ModalLabel">UPLOAD A PHOTO</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="form-label">Title</label><br>
                            <input class="form-control" type="text" id="title" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Caption</label><br>
                            <textarea class="form-control" type="text" id="caption" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Upload an image</label><br>
                            <input class="form-control" type="file" id="image" >
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-secondary w-100" type="submit" value="UPLOAD">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!--PAGE-->
    <!--change color
        need edit-->
        <nav class="m-2">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

  


    <!--LOG IN-->
<div class="cat offcanvas offcanvas-end bg-light text-emphasis-dark" tabindex="-1" id="offcanvasLogin"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h4 id="offcanvasRightLI">LOG IN</h4>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <form action="#" method="post">
        <h2 class="text-center">Have an account?</h2>
        <div class="form-group">
            <label class="form-label">Email Address</label>
            <input class="form-control" type="email" id="email" required>
        </div>
        <div class="form-group">
            <label class="form-label">Password</label><br>
            <input class="form-control" type="password" id="password" required>
        </div>
        <div class="form-group form-check">
            <input class="form-check-input" type="checkbox" id="check">
            <label class="form-check-label">Remember me</label>
        </div>
        <input class="btn btn-secondary w-100" type="submit" value="SIGN IN">
        <div class="text-end"><a href="#" data-bs-toggle="modal" data-bs-target="#UDModal">Forgot Password</a></div>
        <br>
        <div class="text-center">
            <a href="#offcanvasRightSU" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignup"
                aria-controls="offcanvasRight">Dont have an account?</a>
        </div>
    </form>
</div>

<!--SIGN UP-->
<div class="cat offcanvas offcanvas-end" tabindex="-1" id="offcanvasSignup" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h4 id="offcanvasRightSU">SIGN UP</h4>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <form action="Form.php" method="post">
        <h3 class="text-center">Dont have an account?</h3>
        <h6 class="text-center">It's free and only takes a minute</h6>

        <div class="form-group">
            <label class="form-label">First Name</label>
            <input class="form-control" type="text" id="firstname" required>
        </div>

        <div class="form-group">
            <label class="form-label">Last Name</label>
            <input class="form-control" type="text" id="lastname" required>
        </div>

        <div class="form-group">
            <label class="form-label">Contact no.</label>
            <input class="form-control" type="tel" id="cnumber" required>
        </div>

        <div class="form-group">
            <label class="form-label">Username</label>
            <input class="form-control" type="text" id="user" required>
        </div>

        <div class="form-group">
            <label class="form-label">Email Address</label>
            <input class="form-control" type="email" id="email" required>
        </div>

        <div class="form-group">
            <label class="form-label">Password</label>
            <input class="form-control" type="password" id="password" required>
        </div>

        <div class="form-group">
            <label class="form-label">Confirm Password</label>
            <input class="form-control" type="password" id="password" required>
        </div>

        <input class="btn btn-secondary w-100" type="submit" value="SIGN UP">
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

<!--MODAL-->
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