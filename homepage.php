<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="b-example-divider"></div>

        <!--Header of Page-->
        <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="bi me-2" src="./frontend_image/delBusLogo.png" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                    </img>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="homepage.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="aboutUs.php" class="nav-link px-2 text-secondary">About</a></li>
                    <li><a href="contactUs.php" class="nav-link px-2 text-white">Contact Us</a></li>
                    <li><a href="index.php" class="nav-link px-2 text-white">Services</a></li> 
                    <li><a href="#" class="nav-link px-2 text-white"></a></li>
                </ul>

                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
                    <ul class="dropdown-menu">
                        <div style="width:300px;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Login</div>
                                <div class="panel-heading">
                                    <form onsubmit="return false" id="login">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required/>
                                        <label for="email">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required/>
                                        <p><br/></p>
                                        <input type="submit" class="btn btn-warning" value="Login">
                                        <a href="customer_registration.php?register=1" style="color:white; text-decoration:none;">Create Account Now</a>
                                    </form>
                                </div>
                                <div class="panel-footer" id="e_msg"></div>
                            </div>
                        </div>
                    </ul>
                </li>
            </div>
        </div>
    </header>

    <main>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="home1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>TRAINED WILD CATS</strong></h4>
                        <p><strong>We Hire Professionals To Train The Wild Cats Into Becoming Friendly With Everyone.</strong></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="home5.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>CATS INTERACT WITH NATURE</strong></h4>
                        <p><strong>We Do Our Best To Ensure The Cats Have A Jungle-like Feel In Their New Habitat.</strong></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="home3.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4><strong>ADOPTION MADE EASY</strong></h4>
                        <p><strong>Sign Up or Visit Us Today, Fill A Form, And A Cub Is Legally Yours To Adopt!</strong></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>





        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing" style="margin-top: 20px;">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="lionmugshot.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Lion</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

                    <h2>Lions</h2>
                    <p>Lions are dominant and ferocious animals. The females mostly do all the...</p>
                    <p><a class="btn btn-secondary" href="lion.php">Learn More &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="leopardmugshot.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Leopard</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

                    <h2>Leopards</h2>
                    <p>Leopards are amazing tree climbers. Did you know that...</p>
                    <p><a class="btn btn-secondary" href="leopard.php">Learn More &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="tigermugshot.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Tiger</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>

                    <h2>Tigers</h2>
                    <p>Tigers are now termed as "endangered species." There is about...</p>
                    <p><a class="btn btn-secondary" href="tiger.php">Learn More &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">We Care About You. <span class="text-muted">And Your Family Also.</span></h2>
                    <p class="lead">Many kids grow up with the desire of wanting to have a Wild Cat as their pets.<br> Earlier on, we were lied to about that not being possible, but today we assure you that it is very possible. Cat World is here to bring those dreams to a reality! <br> <a href="signUp_page.php"><strong>Sign up here</strong></a> and become a proud owner of a Wild Cat! </p>
                </div>
                <div class="col-md-5">
                    <img src="portfolio10.jpg" alt="woman and child holding hands" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Visit Us Today. <span class="text-muted">See the Wildlife for yourself.</span></h2>
                    <p class="lead">Click <a href="http://v6.ashesi.edu.gh/about/contact-us.html">here</a>, and you'll be on the fastest route to finding us successfully.</p>
                </div>
                <div class="col-md-5">
                    <img src="home4.jpeg" alt="lion roaring" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">You See Animals, <span class="text-muted">We See Friends.</span></h2>
                    <p class="lead">We name every Wild Cat we receive and rescue because we believe in the importance of having friends & family.<br> To make the World a better place, you can <a href="signUp_page.php">join us</a> to make these Wild Cats feel loved!</p>
                </div>
                <div class="col-md-5">
                    <img src="home2.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>

        <div class="container py-4">

            <div class="p-5 mb-4 bg-light border rounded-3" style="background-image: url('./frontend_image/blur.jpg');">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Become A Member Today!</h1>
                    <p class="col-md-8 fs-4">Want to join this amazing family network we have established? Click the button below to sign up now!</p>
                    <a href="customer_registration.php"><button class="btn btn-primary btn-lg" type="button">Sign Up Today</button></a> 
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3" style="background-image: url('focusedlion.jpg');">
                        <h2>Check Out The Facts We've Gathered About Wild Cats!</h2>
                        <p>There are many characteristics about various wild cats that you weren't aware of. We have got you covered!</p>
                        <a href="catFacts.php"><button class="btn btn-outline-light" type="button">Go to Cat Facts</button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3" style="background-image: url('manxlion.jpg');">
                        <h2>Want to know more about our company?</h2>
                        <p>We are more than happy to tell you more about ourselves! Click the button below and find out!</p>
                        <a href="about.php"><button class="btn btn-outline-secondary" type="button">About Us</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>


   <!--Footer of the page-->
   <footer>
        <div class="b-example-divider"></div>


        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-2">
                        <h4>Navigation</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="homepage.php" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="aboutUs.php" class="nav-link p-0 text-muted">About</a></li>
                            <li class="nav-item mb-2"><a href="contactUs.php" class="nav-link p-0 text-muted">Contact Us</a></li>
                            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h4>Services</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Business Strategies</a></li>
                            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">User Experience Design</a></li>
                            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Enterprise Portfolio and Program Management</a></li>
                            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Agile and Cost Management</a></li>
                            <li class="nav-item mb-2"><a href="homepage.php" class="nav-link p-0 text-muted">Back to top</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h4>Contact Us</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="mailto: fabrice.mukarage@ashesi.edu.gh" class="nav-link p-0 text-muted">fabrice.mukarage@ashesi.edu.gh</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tel: (+233) 24 027 2500</a></li>
                            <li class="nav-item mb-2"><a href="http://v6.ashesi.edu.gh/about/contact-us.html" class="nav-link p-0 text-muted">Location: Accra-Ghana</a></li>
                        </ul>
                    </div>

                    <div class="col-4 offset-1">
                        <form>
                            <h4>Subscribe to our newsletter</h4>
                            <p>Monthly digest of whats new and exciting from us.</p>
                            <div class="d-flex w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2021 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="https://twitter.com"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="https://instagram.com"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="https://facebook.com"><svg class="bi" width="24" height="24"><use xlink:href="#meta"/></svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    </footer>
</body>

</html>