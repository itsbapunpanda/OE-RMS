<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">  

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
      
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">   

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css"> 
    
    <title>OERMS</title>
</head>
<body>
  <!-- Start Navigation -->
   <nav id="navbar" class="navbar navbar-expand-sm navbar-dark bg-info pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">OE-RMS</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon "></span>              
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
   </nav> 
  <!-- End Navigation -->
  <!-- Start Header Jumbotron -->
   <header class="jumbotron back-image" style="background-image:url(images/3.jpg)">
   <div class="myclass mainHeading">   
    <h1 class="text-uppercase text-danger font-weight-bold">Welcome to <br>OE-RMS</h1> 
    <p class=" font-italic text-white">Online Electronic Repair Management System <br>Customer's Happiness is our Aim</p>
    <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>    
    <a href="#registration" class="btn btn-danger mr-4">Sign Up</a> 
   </div>
   </header>
  <!-- End Header Jumbotron  -->
  
  <!-- Start Introduction Section -->
   <div class="container">
        <div class="jumbotron">
            <h3 class="text-center">OE-RMS Services</h3>   
            <p>
            OE-RMS is  a Services in India’s leading chain of multi-brand Electronics or Electrical repair/service
            workshops offering wide array of repair/services. We focus on enhancing your uses experience by offering world-class
            Electronic Appliances maintenance services. Our sole mission is 
            “To provide Electronic Appliances careservices to keep the devices fit and healthy and customers happy and smiling”.
            <br><br>
            With well-equipped Electronic Appliances service centres and fully trained mechanics, 
            we provide quality services with excellent packages that are designed to offer you great savings.
            Our state-of-art workshops are conveniently located in many cities across the country. 
            Now you can book your service online by doing Registration.
            </p>
        </div>
    </div> 
    <!-- End Introduction Section Container -->
    <!-- Start Services Section -->
    
    <div class="container text-center border-bottom" id="Services">                       
        <h2>Our Services</h2>   
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>   
                <h4 class="mt-4">Electronic Appliances</h4>
            </div> 
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>   
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>   
                <h4 class="mt-4">Fault Repair</h4>
            </div>
        </div>
    </div> 
    <!-- End Services Section Container-->

    <!-- Start registration form -->
     <?php include('UserRegistration.php')?>
    <!-- End registration form -->
    
    <!-- Start Happy Customer -->
    <div class="jumbotron bg-info">
        <div class="container">
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6"> <!-- Start 1st Column -->   
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/1.jpg" class="img-fluid" style="border-radius:100px;" alt="1">
                            <h4 class="card-title">Ryan</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                            ducimus voluptas
                            esciunt debitis numquam.</p>    
                        </div>
                    </div>
                </div> <!-- End 1st Column -->
                <div class="col-lg-3 col-sm-6"> <!-- Start 2nd Column -->   
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/2.jpg" class="img-fluid" style="border-radius:100px;" alt="2">  
                            <h4 class="card-title">Sam</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                            ducimus voluptas
                            esciunt debitis numquam.</p>    
                        </div>
                    </div>
                </div> <!-- End 2nd Column -->
                <div class="col-lg-3 col-sm-6"> <!-- Start 3rd Column -->   
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/4.jpg" class="img-fluid" style="border-radius:100px;" alt="4">
                            <h4 class="card-title">jakie ohan</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                            ducimus voluptas
                            esciunt debitis numquam.</p>    
                        </div>
                    </div>
                </div> <!-- End 3rd Column -->
                <div class="col-lg-3 col-sm-6"> <!-- Start 4th Column -->   
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="images/5.jpg" class="img-fluid" style="border-radius:100px;" alt="5">
                            <h4 class="card-title">lilly</h4></h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                            ducimus voluptas
                            esciunt debitis numquam.</p>    
                        </div>
                    </div>
                </div> <!-- End 4th Column -->
            </div>
        </div>
    </div>

        <!-- Start Contact US -->
        <div class="container" id="Contact">           
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
        <!-- Start 1st Column -->  
            <?php include('contactform.php')  ?>
        <!-- End 1st Column -->       
        <div class="col-md-4 text-center"> <!-- Start 2nd Column -->
            <strong>Headquarter:</strong><br>
            OE-RMS pvt Ltd, <br>
            Indra Nagar, Bengaluru <br>
            Karnataka - 560073 <br>
            Phone: +91 7835978454 <br>
            <a href="#" target="_blank">www.oerms.com</a> <br>
            <br> <br> 
            <strong>Delhi Branch</strong><br>
            OE-RMS pvt Ltd, <br>
            Kalinga Nagar, Bhubaneswar <br>
            Odisha - 75207 <br>  
            Phone: +91 6489673235 <br>
            <a href="#" target="_blank">www.oerms.com</a> <br>
        </div> <!-- End 2nd Column -->
        </div>
    </div> <!-- End Contact US -->
  
    <!-- Start Footer -->  
    <footer class="container-fluid bg-dark mt-5 text-white">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6"> <!-- Start 1st Column -->
                    <span class="pr-2">Follow Us:</span>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a> 

                </div> <!-- End 1st Column -->
                <div class="col-md-6 text-right"> <!-- Start 2nd Column -->
                    <small>Designed by priyabrata panda &copy; 2024</small>
                    <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>   
                </div> <!-- End 1st Column -->    
            </div>
        </div>
    </footer>    
  
    
    <!--JavaScript -->   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>              
    <script src="js/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>            
    <script src="js/all.min.js"></script> 

</body>
</html>