<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .carousel-item {
  height: 100vh;
  min-height: 300px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.carousel-caption {
  bottom: 270px;
}

.carousel-caption h5 {
  font-size: 45px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-top: 25px;
}

.carousel-caption p {
  width: 75%;
  margin: auto;
  font-size: 18px;
  line-height: 1.9;
}

.navbar-light .navbar-brand {
  color: #fff;
  font-size: 25px;
  text-transform: uppercase;
  font-weight: bold;
  letter-spacing: 2px;
}

.navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
  color: #fff;
}

.navbar-light .navbar-nav .nav-link {
  color: #fff;
}

.navbar-toggler {
  background: #fff;
}

.navbar-nav {
  text-align: center;
}

.nav-link {
  padding: .2rem 1rem;
}
a:hover{
 
  /* background-color:black; */
  color:black;
  transition : all 0.3s ease;
}

.nav-link.active,.nav-link:focus{
  color: #fff;
}

.navbar-toggler {
  padding: 1px 5px;
  font-size: 18px;
  line-height: 0.3;
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav  {
  color: #fff;
}

#home_color:hover{
  color:black;
  transition:all 0.3s ease;
}




  </style>
</head>


<!-- html -->
<!-- col -->
<!-- <body style="background-color: #8c7373;" > -->
<section  id="home">
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Tezpur University</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
<li class="nav-item active">
          <a class="nav-link" href="#home" id="home_color">Home</a>
        </li>
<li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
<!-- <li class="nav-item">
          <a class="nav-link" href="login.php">logIn</a>
        </li> -->
        <li class="nav-item dropdown">
              <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Login</a>
              <ul   class="dropdown-menu">
                <li><a class="dropdown-item" href="loginadmin.php">Admin</a></li>
                <li><a class="dropdown-item" href="loginfaculty.php">Faculty</a></li>
                <li><a class="dropdown-item" href="loginstudent.php">Student</a></li>
                
                
              </ul>
            </li>
            <!-- <li class="nav-item">
                      <a class="nav-link" href="signup.php">signup</a>
                    </li> -->
        <li class="nav-item dropdown">
              <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Signup</a>
              <ul   class="dropdown-menu">
                <li><a class="dropdown-item" href="signupadmin.php">Admin</a></li>
                <li><a class="dropdown-item" href="signupfaculty.php">Faculty</a></li>
                <li><a class="dropdown-item" href="signupstudent.php">Student</a></li>
                
                
              </ul>
            </li>




            <li class="nav-item">
                      <a class="nav-link" href="#contact">Contact</a>
                    </li>




</ul>
</div>
</div>
</nav>
</section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="photo/group.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Banner Text one</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p> -->
</div>
</div>
<div class="carousel-item">
      <img class="d-block w-100" src="photo/logo30.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Banner Text two</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p> -->
</div>
</div>
<div class="carousel-item">
      <img class="d-block w-100" src="photo/logo6.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Banner Text three</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p> -->
</div>
</div>
</div>

<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


</div>
<!-- //////////////////////////// -->
<section id="about">
        <div class="heading py-5">
            <h1 class="text-center">Department of Computer Science & Engineering</h1>
            <hr class="w-25 mx-auto">
        </div>
        <div class="container">
            <div class="row row-a1">
                <div class="col-5 col-a1">
                    <h1 class="text-center">About The Department:</h1>
                    <p class="py-5">The Department of Computer Science and Engineering came into being in 2006 
                      as a result of renaming of the Department of Computer Science and Information Technology.
                       The Department of Computer Science and the Department of Information Technology were merged 
                       in 2004 and renamed as Department of Computer Science and Information Technology.
                       The Department of Computer Science was started in July, 1994 under the school of Science and Technology. 
                       It was started with the object of promoting specialized knowledge in the field of Computer Science and Computer Application.
                        In view of the world wide shortage of skilled manpower in the field of Information Technology, 
                        the Department strives to channelize talented youth of the region to this challenging and knowledge intensive field by imparting quality</p>

                </div>
                <div class="col-7 col-a2">
                    <img src="photo/logo7.jpg" width="100%" height="420px">
                </div>
            </div>
        </div>
    </section>

    <!-- About Us End -->

    <section id="about">
        <div class="heading py-5">
            <!-- <h1 class="text-center">Department of Computer Science & Engineering</h1> -->
            <hr class="w-25 mx-auto">
        </div>
        <div class="container">
            <div class="row row-a1">
            <div class="col-7 col-a1">
                    <img src="photo/logo7.jpg" width="100%" height="420px">
                </div>
                <div class="col-5 col-a2">
                    <h1 class="text-center">About The Department:</h1>
                    <p class="py-5">The Department of Computer Science and Engineering came into being in 2006 
                      as a result of renaming of the Department of Computer Science and Information Technology.
                       The Department of Computer Science and the Department of Information Technology were merged 
                       in 2004 and renamed as Department of Computer Science and Information Technology.
                       The Department of Computer Science was started in July, 1994 under the school of Science and Technology. 
                       It was started with the object of promoting specialized knowledge in the field of Computer Science and Computer Application.
                        In view of the world wide shortage of skilled manpower in the field of Information Technology, 
                        the Department strives to channelize talented youth of the region to this challenging and knowledge intensive field by imparting quality</p>

                </div>
                <!-- <div class="col-7 col-a2">
                    <img src="logo7.jpg" width="100%" height="420px">
                </div> -->
            </div>
        </div>
    </section>











    <!-- Galary Start -->

    <!-- Galary Part start -->

    <section class="container-fluid bg-light p-3 mt-5" id="gallery">

        <div class="heading my-4">
            <h1 class="text-center">Gallery</h1>
            <hr class="w-25 mx-auto">
        </div>


        <!-- Gallery -->
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="photo/logo3.jpg" height="250px" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water" />
                <img src="photo/logo3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"
                    height="250px" />
                <img src="photo/logo3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"
                    height="250px" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="photo/logo3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"
                    height="250px" />
                <img src="photo/logo3.JPG" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"
                    height="250px" />
                <img src="photo/logo3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"
                    height="250px" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="photo/logo3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"
                    height="250px" />
                <img src="photo/logo3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"
                    height="250px" />
                <img src="photo/logo3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water"
                    height="250px" />
            </div>
        </div>
        <!-- Gallery -->
    </section>



    <!-- Contact Us Start-->

    <section class="container-fluid p-3 mt-5" id="contact">

        <div class="heading my-4" id="services">
            <h1 class="text-center">Contact Us</h1>
            <hr class="w-25 mx-auto">
        </div>

        <div class="container">
            <form action="./SMS Backend/contact_us.php" method="post">
                <div class="mb-3">
                    <label for="namme" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" maxlength="30" required>
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number:</label>
                    <input type="number" class="form-control" name="phone_number" max-length="10" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" max-length="50" required>
                </div>
                <div>
                    <label for="text_about" class="form-label">Tell us about yourself:</label>
                    <textarea class="form-control mb-3" id="text_about" name="about"></textarea>
                </div>

                <!-- <div class="mb-4">
                    <label for="Gender">
                        Gender:
                    </label><br><br>
                    <input class="form-check-input" type="radio" name="Gender" value="male" id="flexRadioDefault1">
                    <label class="form-check-label" for="male">
                        Male&nbsp;
                    </label>
                    <input class="form-check-input" type="radio" name="Gender" value="female" id="flexRadioDefault1">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                    <input class="form-check-input" type="radio" name="Gender" value="others" id="flexRadioDefault1">
                    <label class="form-check-label" for="female">
                        Others
                    </label>
                </div> -->
                <div class='mb-4'>
                  <label for="male">Male</label>
                  <input type="radio" name="male" id="male">
                  <label for="male">Female</label>
                  <input type="radio" name="male" id="male">
                  <label for="male">Others</label>
                  <input type="radio" name="male" id="male">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact Us End -->


    <!-- Subscribe Us-->

    <div class="text-center my-5 bg-light py-5">
        <div class="card-body">
            <h5 class="card-title">Department of Computer Science & Engineering</h5>
            <p class="card-text">School of Engineering</p>
           <p class="card-text">Tezpur University</p>
           <p class="card-text">Napaam, Sonitpur, Assam-784 028</p>
        </div>
    </div>


    <!-- Subscribe Us -->


    <!--Google map-->
    <section class="container-fluid p-3 mt-5" id="location">

        <div class="heading my-4" id="services">
            <h1 class="text-center">Location</h1>
            <hr class="w-25 mx-auto">
        </div>

        <div id="map-container-google-1" class="z-depth-1-half map-container">
            <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=tezpur university&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0"
            style="border:0" allowfullscreen width="100%" height="700px"></iframe>
        </div>

        
    </section>
   
  
  <!--Google Maps-->

    <!-- Footer start -->

    <footer class="bd-footer py-4 py-md-5 mt-5 bg-light">
        <div class="container py-4 py-md-5 px-4 px-md-3">
            <div class="row">
                <div class="col-lg-3 mb-3">
                   <h5> <span class="fs-5">CSE Department:</span></h5>
                    </a>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-2">The Department of Information Technology was started in July, 1997 under the school of Science and Technology. The Department was established with the aim to contribute towards research in the field of Information Technology and to fulfill the increasing demand for highly qualified manpower in the field for Industries as well as academic institutions. The programmes started under this department were Master of Technology (M Tech) in Information Technology, and PhD in Information Technology.</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home">Home</a></li>
                        <li class="mb-2"><a href="#about">About Us</a></li>
                        <li class="mb-2"><a href="#gallery">Gallery</a></li>
                        <li class="mb-2"><a href="#contact">Contact Us</a></li>
                        <li class="mb-2"><a href="#location">Location</a></li>

                    </ul>
                </div>


                <div class="col-6 col-lg-2 mb-3 justify-content-end">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://github.com/Sid70"><i
                                    class="fa-brands fa-github"></i>&nbsp;Github</a></li>
                        <li class="mb-2"><a href="https://www.linkedin.com/in/siddhanta-choudhury-674869220/"><i
                                    class="fa-brands fa-linkedin"></i>&nbsp;linked In</a></li>
                        <li class="mb-2"><a href="https://www.instagram.com/siddhanta3_2/?igshid=YmMyMTA2M2Y%3D"><i
                                    class="fa-brands fa-instagram"></i>&nbsp;Instagram</a></li>
                        <li class="mb-2"><a href="https://www.twitter.com"><i
                                    class="fa-brands fa-twitter"></i>&nbsp;Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Footer end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6c4e89634a.js" crossorigin="anonymous"></script>
    <script src="/Main Page Design/JS/mainpage.js"></script>
</body>

</html>
?>
</body>
</html>






