<?php
require "config/constants.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

                <li><a href="login_form.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
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
        <div class="container py-4">
            <div class="p-5 mb-4 bg-light border rounded-3" style="background-image: url('./frontend_image/shakehands.jpeg');">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold text-white">Subscribe and become A Member Of Delight Today!</h1>
                        <p class="col-md-8 fs-4 text-white">Want to join this amazing network we have established? Click the button below to sign up now!</p>
                        <a href="customer_registration.php?register=1"><button class="btn btn-primary btn-lg" type="button" name="register">Sign Up Today</button></a> 
                    </div>
            </div>
        

        <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">What Do We Do? <span class="text-muted">These Are Our Services</span></h2>
                    <p class="lead">
                        Delightful Business is a business consulting agency with a passion for simplicity in business advisory solutions. <br> 
                        We deliver high-quality creative solutions for a diverse audience in the corporate arena and provide: <br>
                        1. BUSINESS STRATEGIES <br>
                        You need a road map to direct your business toward the future you foresee. <br>
                        While creating a compelling vision, strategy, and overarching plan for generating competitive advantage, <br>
                        we will assist you in understanding your business and consumer insights. <br>
                        2. USER EXPERIENCE DESIGN <br>
                        To drive development, boost efficiency, and establish a culture where people specifically their needs are prioritized in <br> decision-making, 
                        we assist clients in understanding, conceptualizing, and implementing modern interactions across channels and functional areas. <br>
                        3. ENTERPRISE PORTFOLIO AND PROGRAM MANAGEMENT <br>
                        How can you speed up value realization by coordinating strategy with program execution? <br>
                        We will work with you to deliver plans and initiatives in a quick, efficient, and value-driven way, from project delivery through portfolio management. <br>
                        4. AGILE AND COST MANAGEMENT <br>
                        Agile and Cost Management is a tried-and-true method for reshaping your company, igniting innovation, and boosting profitable development. 
                        We can assist you in scaling Agile throughout your whole business to decrease time-to-market, increase quality, promote employee morale, and create a genuinely flexible business. 
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="./frontend_image/buildings.jpeg" alt="woman and child holding hands" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

                </div>
            </div>
            

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Our Values As A Team? <span class="text-muted">Simple, Take Note!</span></h2>
                    <p class="lead">
                    1. UNDERSTAND <br>
                    Always remember in the jungle there is a lot of them in there, after you overcome them, you will make it to paradise. <br>
                    2. IMAGINE <br>
                    Bringing the clients dreams into a reality and shaping their goals into strategic implementation <br>
                    3. CREATE <br>
                    Creating digital and sustainable business models that clients can use to move their business to the next level. <br>
                    4. BUILD <br>
                    We Look at the future while surrounding our clients with the best professionals, positive energy, and a well done service. <br>
                    That is our way of building a better world.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="./frontend_image/citylights.jpeg" alt="man standing before city lights" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
                </div>
            </div>

            <hr class="featurette-divider">
        </hr>
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
                            <li class="nav-item mb-2"><a href="aboutUs.php" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="aboutUs.php" class="nav-link p-0 text-muted">About</a></li>
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
                            <li class="nav-item mb-2"><a href="aboutUs.php" class="nav-link p-0 text-muted">Back to top</a></li>
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