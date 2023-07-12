<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="home.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="fixed-top">
  <nav class="navbar bg-danger" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <h2><img src="logo.jpg " style="width: 100px; height:55px;" >
      ___ RESQ - restaurant-NGO food managaement ___</h2>
    </a>
  </div>
</nav>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><button type="button" class="btn btn-outline-danger">HOME</button></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="donation.php"><button type="button" class="btn btn-outline-danger">DONATE</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="availability.php"><button type="button" class="btn btn-outline-danger">CHECK AVAILABILITY</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#faq"><button type="button" class="btn btn-outline-danger">FAQs</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#foot"><button type="button" class="btn btn-outline-danger">ABOUT</button></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <button type="button" class="btn btn-outline-danger">REGISTER</button> 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="rest.php">restuarant</a></li>
            <li><a class="dropdown-item" href="ngo.php">NGO</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php"><button type="button" class="btn btn-outline-danger">LOGIN</button></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-5" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>

<hr style="color: #e1181d; border: 6px solid red;"><div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="cou1.jpeg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="don.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="bgg.jpg" class="d-block w-100" alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <section class="bg-light mt-5">
    <h4 class="display-4 text-center fw-bold text-danger p-5">Our Partners</h4>
    <h5 class="text-center mb-4">NGOs from different locations in vizag.</h5><br>
    <h5 class="text-center mb-4">The most outstanding work and all the very initiatives that the organizations like NGOs are actually<br>
       taking for our nation and for the betterment of our own society is so very commendable and very applaudable.<br>
        Thanking you for all the very efforts of all the wonderful NGOs. </h5>
  <div class="card-group">
  <div class="card" style="border-radius: 10px 100px / 120px; border-color: red; overflow: hidden;">
    <center><img src="smiles.png" class="card-img-top" alt="..." style="height: 250px;width: 250px"></center>
    <div class="card-body">
      <h5 class="card-title">Vizag Smiles</h5>
      <p class="card-text">7-1-75, Chinna Waltair, Visakhapatnam, 530003, India<br>
7306 700 700 <br>
 www.vizagsmiles.com</p>

    </div>
  </div>
  <div class="card" style="border-radius: 10px 100px / 120px; border-color: red; overflow: hidden;">
    <center><img src="mother.jpg" class="card-img-top" alt="..." style="height: 250px;width: 250px"></center>
    <div class="card-body">
      <h5 class="card-title">Mother Charitable Trust</h5>
      <p class="card-text">beside Kinnera- kameswari theatre, Maddilapalem, Visakhapatnam, 530016, India <br>
08916993999 <br>
www.mothertrust.in</p>
    </div>
  </div>
  <div class="card" style="border-radius: 10px 100px / 120px; border-color: red; overflow: hidden;">
   <center> <img src="wipe.jpg" class="card-img-top" alt="..." style="height: 250px;width: 250px"></center>
    <div class="card-body">
      <h5 class="card-title">Wipe A Tear</h5>
      <p class="card-text">seethammadhara, Visakhapatnam, 530013, India<br>
94921 65118</p>
      
    </div>
  </div>
</div>
</section>
<section class="bg-light mt-5">
<h4 class="display-4 text-center fw-bold text-danger p-5">Our Helping hands</h4>
    <h5 class="text-center mb-4">Many famous Restaurants in vizag</h5>
  <div class="card-group">
  <div class="card" style="border-radius: 10px 100px / 120px; border-color: red; overflow: hidden;">
    <img src="andhra.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">New Andhra Hotel</h5>
      <p class="card-text"> Vadlapudi, Near Meseva, Kurmannapellam, Vizag, India</p>
    </div>
  </div>
  <div class="card" style="border-radius: 10px 100px / 120px; border-color: red; overflow: hidden;">
    <img src="kamat.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hotel Kamat</h5>
      <p class="card-text">Call: 
+919988646999 <br> 
Address :
Door 47-11-11, Eswar Madhav Mansion, 1 Lane, Vizag, Dwaraka Nagar, Visakhapatnam</p>

    </div>
  </div>
  <div class="card" style="border-radius: 10px 100px / 120px; border-color: red; overflow: hidden;">
    <img src="paradise.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Paradise Biriyani</h5>
      <p class="card-text">call: +918912701540 <br>
Address: 
10-1-126/1, 80 Feet Road, Old Gajuwaka Junction, Gajuwaka, Visakhapatnam</p>
    </div>
  </div>
</div>
</section>
<section class="bg-light mt-5" id="faq">
<h4 class="display-4 text-center fw-bold text-danger p-5">Helpful FAQs</h4>
    <h5 class="text-center mb-4"> <p><b style="color:red;">How to register?</b><br>
If you want to register, click on the register button at the top of the website and choose whether you want to register as an NGO or as a restaurant.</p>

<p><b style="color:red;">How to donate?</b><br>
If you would like to donate food, make sure that you are registered and then click on the donate button on top, then fill the required details and then click on the donate button.</p>

<p><b style="color:red;">How to find restaurant that is ready to donate?</b><br>
Click on the option check availability which shows the restaurants available for donating food.</p>

<p><b style="color:red;">How to login?</b><br>
Make sure that you've already registered and then click on the login button. Enter your email id and password that you've registered.</p>

<p><b style="color:red;">How to report an issue?</b><br>
If you have any queries or any issues, go to the end of the website and click on the contact us option.</p>
</h5>
</section>
<!--footer-->
<div class="d-flex bg-danger text-light my-4" id="foot">
      <div class="container-lg">
      <div class="row justify-content-space around my-5">
      <div class="p-2 flex-fill col-lg-4 col-sm-12">
         
          <div class="h1 pb-2 mb-4  border-bottom border-warning">
              Contact Us
           </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
              <i class="bi bi-facebook"></i> <br>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
              <i class="bi bi-twitter"></i><br>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg>
                <i class="bi bi-linkedin"></i> <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                </svg>
                <i class="bi bi-youtube"></i><br>
            
         
          
      </div>
      <div class="p-2 flex-fill col-lg-4 col-sm-12">
          <div class="h1 pb-3 mb-4  border-bottom border-warning">
          About us
          
      </div>
      <p>Andhra University College of engineering for women</p>
          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>
            <i class="bi bi-geo-alt-fill"></i>
              shivajipalem</p>
              <p>visakhapatnam,Andhra pradesh 530017.</p>
              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
                <i class="bi bi-envelope"></i>
                   Email us:contact@feedneed.org.in
          </p>
</div>
      <div class="p-2 flex-fill col-lg-4 col-sm-12">
          <div class="h1 pb-3 mb-4  border-bottom border-warning">
          Objectives</div>
          <ul>
         <li> <p>Promote interest of poor</p></li>
          <li><p>Provide basic social service</p></li>
          <li><p>create awareness</p></li>
          <li><p>Advocates community development</p></li></ul>
      </div>
      </div>
      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15201.417024715389!2d83.31513921322428!3d17.727939606003773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39434300000001%3A0xf944a3f54bf97a30!2sAndhra%20University!5e0!3m2!1sen!2sin!4v1680022081470!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
</body>
</html>