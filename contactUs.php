<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h2 class="display-6">CONTACT US</h2>
                    <img src="./frontend_image/portfolio4.jpg" class="w-100 h-90 py-2" alt="many people interacting in a hall">
                </div>
            </div>
        </div>

        <div class="container-fluid padding py-5">
            <div class="row padding">
                <div class="col-md-3">
                    <div class="card">
                        <!--<img class="card-img-top" src="images/black.png">-->
                        <div class="card-body">
                            <h4 class="card-title">ZACHERY ANNANCY</h4>
                            <p class="card-text"><a href="mailto:zachery.annancy@ashesi.edu.gh">zachery.annancy@ashesi.edu.gh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <!--<img class="card-img-top" src="images/black.png">-->
                        <div class="card-body">
                            <h4 class="card-title">FABRICE MUKARAGE</h4>
                            <p class="card-text"><a href="mailto:fabrice.mukarage@ashesi.edu.gh">fabrice.mukarage@ashesi.edu.gh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <!--<img class="card-img-top" src="images/black.png">-->
                        <div class="card-body">
                            <h4 class="card-title">KWAME OSEI-TUTU</h4>
                            <p class="card-text"><a href="mailto:kwame.oseitutu@ashesi.edu.gh">kwame.oseitutu@ashesi.edu.gh</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <!--<img class="card-img-top" src="images/black.png">-->
                        <div class="card-body">
                            <h4 class="card-title">PRINCIA ISHIMWE</h4>
                            <p class="card-text"></p>
                            <p class="card-text"><a href="mailto:ishimwe.princia@ashesi.edu.gh">ishimwe.princia@ashesi.edu.gh</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center padding">
                <div class="col-12">
                        <h2>Connect with us!</h2>
                </div>
            </div>    
        </div>

    </main>
<br>
<br>
<br>
<br>
<br>
   

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
                            <li class="nav-item mb-2"><a href="contactUs.php" class="nav-link p-0 text-muted">Back to top</a></li>
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