<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalleryGrid</title>
</head>

<body>
    <!--lANDING PAGE-->
    <main>
        <!--FRONT-->
        <section id="intro">
            <div class="container-lg">
                <div class="row g-4 justify-content-center align-items-center">
                    <div class="col-md-5 text-center text-md-start">
                        <h1 class="display-2">IT IS WHAT IT IS</h1>
                        <p class="lead my-4 text-muted">
                            GalleryGrid is a visual discovery engine for finding ideas like recipes, home
                            and style inspiration, and more.</p>
                    </div>
                    <div class="col-md-5 text-center d-none d-md-block">
                        <img src="img/cat.png" class="img-fluid" alt="ebook">
                    </div>
                </div>
            </div>
        </section>

        <!--ABOUT-->
        <section id="about" class="bg-light mt-5">
            <div class="container-lg">
                <div class="text-center">
                    <h2>About</h2>
                    <p class="lead text-muted">A quick glance about the GalleryGrid</p>
                </div>
                <div class="row my-5 g-5 justify-content-around align-items-center">
                    <div class="col-6 col-lg-4">
                        <img src="img/About.png" class="img-fluid" alt="ebook">
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="chapters">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1">
                                        What is GalleryGrid?
                                    </button>
                                </h2>
                                <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                    data-bs-parent="#chapters">
                                    <div class="accordion-body">
                                        <p>GalleryGrid is a visual discovery engine for finding ideas like recipes, home
                                            and style inspiration, and more.</p>

                                        <p>With billions of images on GalleryGrid, you'll always find ideas to spark
                                            inspiration. When you discover Photos you love, save them. You can also
                                            upload a Photos to share your ideas with other people on GalleryGrid.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2">
                                        Browse your home feed
                                    </button>
                                </h2>
                                <div id="chapter-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                    data-bs-parent="#chapters">
                                    <div class="accordion-body">
                                        <p>Your home feed is where you'll find Photos, people and businesses we think
                                            you'll love, based on your recent activity. We'll also show you Photos from
                                            the people. </p>

                                        <p>You can also search for Photos by typing in keywords into the search bar. Try
                                            typing "birthday party" in the search bar to see ideas for birthday party
                                            decor, party food recipes, and birthday gift ideas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#chapter-3" aria-expanded="false" aria-controls="chapter-1">
                                        Discover ideas
                                    </button>
                                </h2>
                                <div id="chapter-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                    data-bs-parent="#chapters">
                                    <div class="accordion-body">
                                        <p>Use the search bar to discover ideas, people and trends. Explore suggested
                                            topics or search for topics of your own.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#chapter-4" aria-expanded="false" aria-controls="chapter-4">
                                        Save, Download and Share
                                    </button>
                                </h2>
                                <div id="chapter-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                    data-bs-parent="#chapters">
                                    <div class="accordion-body">
                                        <p>Click the red Save button to save them to your Profile. Tried the perfect
                                            birthday cake recipe? Add a comment to tell people how it went or add
                                            helpful tips. And also you can download the Photo that you like.</p>

                                        <p>Sometimes you'll find a Photos that you know a friend will love. You can
                                            share Photos and send messages to pass the inspiration around.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#chapter-5" aria-expanded="false" aria-controls="chapter-5">
                                        View your profile
                                    </button>
                                </h2>
                                <div id="chapter-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                    data-bs-parent="#chapters">
                                    <div class="accordion-body">
                                        <p>Find all the Photos you save.
                                            You can also see who’s following you and people you follow. Only
                                            you can see your save photos when you view your own profile.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--CONTACTS-->
        <section id="contacts">
            <div class="container-lg">
                <div class="text-center">
                    <h2>Contacts</h2>
                    <p class="lead text-muted">The Developers</p>
                </div>
                <div class="row row-cols-2 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card text-center text-black bg-light mt-5">
                            <div>
                                <img src="img/A.jpg"
                                    class="card-img-top w-75 p-3 rounded mx-auto d-block img-fluid rounded-circle">
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">Karl Andoque</h4>
                                <h6 class="card-text">Frontend Developer</h6><br>
                                <p class="card-text">k.andoque.526664@umindanao.edu.ph</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card text-center text-black bg-light mt-5">
                            <div>
                                <img src="img/Jan.png"
                                    class="card-img-top w-75 p-3 rounded mx-auto d-block img-fluid rounded-circle">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Jan Dale Topacio</h4>
                                <h6 class="card-text">Backend Developer</h6><br>
                                <p class="card-text">j.topacio.526032@umindanao.edu.ph</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
    </main>

</body>

</html>