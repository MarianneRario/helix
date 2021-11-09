<?php
   include('server.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
         crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
         crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
      <link rel="stylesheet" href="css/portfolio.css">
      <title>HeLix</title>
   </head>
   <body>
   <?php 
         $e = $_SESSION["email"];
         $p = $_SESSION["password"];
         
         $sql = "SELECT * FROM users WHERE email = '$e' AND password = '$p'";
         $result = mysqli_query($db, $sql);
         $resultCheck = mysqli_num_rows($result);
         $row = mysqli_fetch_assoc($result);
         ?>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
         <div class="container">
            <a href="#" class="navbar-brand">HeLix Technologies</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <ul class="navbar-nav">
                  <li class="nav-item px-2">
                     <a href="profile.php" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item px-2">
                     <a href="register_project.php" class="nav-link ">Register Project</a>
                  </li>
                  <li class="nav-item px-2">
                     <a href="quiz.php" class="nav-link ">Quiz</a>
                  </li>
                  <li class="nav-item px-2">
                     <a href="#" class="nav-link active">About Us</a>
                  </li>
               </ul>
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown mr-3">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                     <i class="fas fa-user"></i> Welcome <?php echo $row['first_name'] ?>
                     </a>
                     <div class="dropdown-menu">
                        <a href="profile_data.php" class="dropdown-item">
                        <i class="fas fa-user-circle"></i> Profile
                        </a>
                        <a href="profile_data_edit.php" class="dropdown-item">
                        <i class="fas fa-cog"></i> Edit Data
                        </a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a href="login.php" class="nav-link">
                     <i class="fas fa-user-times"></i> Logout
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
       <!-- ACTIONS -->
       <section id="actions" class="py-4 mb-4 bg-light">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <a href="about_us.php" class="btn btn-light btn-block">
                  <i class="fas fa-arrow-left"></i> Back
                  </a>
               </div>
            </div>
         </div>
      </section>
      <div class="container">
         <header id="main-header">
            <div class="row no-gutters">
               <div class="col-lg-4 col-md-5">  
                  <img src="images/raphael_pic.jpg" alt="">
               </div>
               <div class="col-lg-8 col-md-7">
                  <div class="d-flex flex-column">
                     <div class="p-5 bg-dark text-white">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                           <h1 class="display-4">Raphael Macapagal</h1>
                           <div class="d-none d-md-block">
                              <a href="http://twitter.com" class="text-white">
                              <i class="fab fa-twitter"></i>
                              </a>
                           </div>
                           <div>
                              <a href="http://facebook.com" class="text-white">
                              <i class="fab fa-facebook"></i>
                              </a>
                           </div>
                           <div>
                              <a href="http://instagram.com" class="text-white">
                              <i class="fab fa-instagram"></i>
                              </a>
                           </div>
                           <div>
                              <a href="http://github.com" class="text-white">
                              <i class="fab fa-github"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="p-4 bg-black">
                        Project Documentation 
                     </div>
                     <div>
                        <div class="d-flex flex-row text-white align-items-stretch text-center">
                           <div class="port-item p-4 bg-primary" data-toggle="collapse" data-target="#home">
                              <i class="fas fa-home fa-2x d-block"></i>
                              <span class="d-none d-sm-block">Home</span>
                           </div>
                           <div class="port-item p-4 bg-success" data-toggle="collapse" data-target="#resume">
                              <i class="fas fa-graduation-cap fa-2x d-block"></i>
                              <span class="d-none d-sm-block">Resume</span>
                           </div>
                           <div class="port-item p-4 bg-warning" data-toggle="collapse" data-target="#work">
                              <i class="fas fa-folder-open fa-2x d-block"></i>
                              <span class="d-none d-sm-block">Work</span>
                           </div>
                           <div class="port-item p-4 bg-danger" data-toggle="collapse" data-target="#contact">
                              <i class="fas fa-envelope fa-2x d-block"></i>
                              <span class="d-none d-sm-block">Contact</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- HOME -->
         <div id="home" class="collapse show">
            <div class="card card-body bg-primary text-white py-5">
               <h2>My Profile</h2>
               <p class="lead">Designed marketing materials (print and digital) for the company and assisted with other projects 
               involving web design.
               </p>
            </div>
            <div class="card card-body py-5">
               <h3>My Skills</h3>
               <b>Web development and web design</b>
               <p>Web Developers on the other hand, take a website design and actually make a functioning website from it. 
               Web developers use HTML, CSS, Javascript, PHP and other programming languages to bring to life the design files.
               </p>
               <b>Web and mobile app development</b>
               <p>Increasingly, responsive web design is becoming the new standard for websites that are not only mobile-friendly, 
               but that can scale to any sized device - from desktop down to tablet and handheld smartphones.
               </p>
               <b>Graphic design and video Editing</b>
               <p>creates images and manipulates them. A video editor creates a story using images, titles, logo, graphs, charts, 
               maps etc.
               </p>
               <hr>
               <h4>Java</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:90%"></div>
               </div>
               <h4>PHP</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:100%"></div>
               </div>
               <h4>Javascript</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:100%"></div>
               </div>
               <h4>HTML</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:60%"></div>
               </div>
               <h4>Ruby</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:70%"></div>
               </div>
               <h4>C++</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:70%"></div>
               </div>
            </div>
         </div>
         <!-- RESUME -->
         <div id="resume" class="collapse">
            <div class="card card-body bg-success text-white py-5">
               <h2>My Resume</h2>
               <p class="lead">Extremely willing to explore and constantly develop my skills and grow professionally. 
               I am very patient, hardworking, and can easily get along with others. I would like to discover more and 
               contribute to the growth and success of a great organization.
               </p>
            </div>
            <div class="card card-body py-5">
               <h3>Where Have I Worked?</h3>
               <p>Worked closely with web developers and assisted them in group web development projects. 
               Resolved minor bug fixes and created documentation for existing development projects
               </p>
               <div class="card-deck">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">ORACLE</h4>
                        <p class="card-text">The company sells database software and technology, cloud engineered systems, and enterprise 
                        software products.
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Position: Project Documentation 
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Phone: 1-231-765-755
                        </p>
                     </div>
                     <div class="card-footer">
                        <h6 class="text-muted">Dates: 2016 - 2019</h6>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">AIRBNB</h4>
                        <p class="card-text">Airbnb, Inc. is an American vacation rental online marketplace company based on United States
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Position: Database Architect
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Phone: 1232-2-121-2311
                        </p>
                     </div>
                     <div class="card-footer">
                        <h6 class="text-muted">Dates: 2014 - 2015</h6>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">FACEBOOK</h4>
                        <p class="card-text">Facebook, Inc. is an American social media conglomerate corporation based in Menlo Park, California.
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Position: Lead Web Designer
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Phone: 1800-1-110-2363
                        </p>
                     </div>
                     <div class="card-footer">
                        <h6 class="text-muted">Dates: 2010 - 2013</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--tuloy-->
         <!-- WORK -->
         <div id="work" class="collapse">
            <div class="card card-body bg-warning text-white py-5">
               <h2>My Work</h2>
            </div>
            <div class="card card-body py-5">
               <h3>What Have I Built?</h3>
               <p class="lead">These are the projects that I've done throughout the years.</p>
               <div class="row no-gutters">
                  <div class="col-md-3">
                     <div class="card">
                        <img src = "images/photo3.jpg" class = "img-fluid card-img-top">
                        <div class="card-body">
                           <h4 class = "card-title">PROJECT 1</h4>
                           <hr>
                           <p class = "card-text">
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card">
                        <img src = "images/photo1.jpg" class = "img-fluid card-img-top">
                        <div class="card-body">
                           <h4 class = "card-title">PROJECT 2</h4>
                           <hr>
                           <p class = "card-text">
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card">
                        <img src = "images/photo2.jpg" alt = "" class = "img-fluid card-img-top">
                        <div class="card-body">
                           <h4 class = "card-title">PROJECT 3</h4>
                           <hr>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card">
                        <img src = "images/photo4.jpg" alt = "" class = "img-fluid card-img-top">
                        <div class="card-body">
                           <h4 class = "card-title">PROJECT 4</h4>
                           <hr>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- CONTACT -->
      <div id="contact" class="collapse">
      <div class="card card-body bg-danger text-white py-4">
        <h2>Contact</h2>
      </div>
      <div class="card card-body py-5">
        <h3>Get In Touch</h3>
        <br>
        <br>
        <form>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input class="form-control bg-dark text-white" value="Raphael Carlos Macapagal" readonly/>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input class="form-control bg-dark text-white" value="raphaelcarlos.macapagal@my.jru.edu" readonly/>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-pencil-alt"></i>
                </span>
              </div>
              <input class="form-control bg-dark text-white" value="(0932) 738 1422" readonly/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- FOOTER -->
      <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
         <div class="container">
            <div class="row">
               <div class="col">
                  <p class="lead text-center">
                     Copyright &copy;
                     <span id="year"></span>
                     HeLix
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
         crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
         crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
         crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
      <script>
         $('.port-item').click(function () {
           $('.collapse').collapse('hide');
         });
         
         $(document).on('click', '[data-toggle="lightbox"]', function (e) {
           e.preventDefault();
           $(this).ekkoLightbox();
         });
      </script>
   </body>
</html>