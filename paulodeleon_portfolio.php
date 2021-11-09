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
                  <img src="images/paulo_pic.jpg" alt="">
               </div>
               <div class="col-lg-8 col-md-7">
                  <div class="d-flex flex-column">
                     <div class="p-5 bg-dark text-white">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                           <h1 class="display-4">Paulo De Leon</h1>
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
                        Experienced Software Engineer
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
               <p class="lead">Repeated success directing IT projects from inception to execution, 
                  strategically allocating resources and delegating tasks to achieve on-time, on-budget delivery.
               </p>
            </div>
            <div class="card card-body py-5">
               <h3>My Skills</h3>
               <b>Innovative Software Engineer</b>
               <p>Offering experience in the full software development lifecycle - from concept through
                  delivery of next-generation applications and customizable solutions.
               </p>
               <b>Expert in advanced development methodologies</b>
               <p>Experienced in tools and processes contributing to the design and rollout of software of software 
                  applications.
               </p>
               <b>Known for excellent troubleshooting skills</b>
               <p>Able to analyze code and engineer well-researched, cost-effective and responsive solutions.</p>
               <hr>
               <h4>Java</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:90%"></div>
               </div>
               <h4>JavaScript</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:90%"></div>
               </div>
               <h4>PHP</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:80%"></div>
               </div>
               <h4>Python</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:70%"></div>
               </div>
               <h4>HTML 5</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:100%"></div>
               </div>
               <h4>BOOTSTRAP 4</h4>
               <div class="progress mb-3">
                  <div class="progress-bar bg-success" style="width:100%"></div>
               </div>
            </div>
         </div>
         <!-- RESUME -->
         <div id="resume" class="collapse">
            <div class="card card-body bg-success text-white py-5">
               <h2>My Resume</h2>
               <p class="lead">I am able to work well both in team environment as well as using own initiative. I am able to work well under pressure and adhere to strict deadlines.
               </p>
            </div>
            <div class="card card-body py-5">
               <h3>Where Have I Worked?</h3>
               <p>I'm an enthusiastic, responsible and hard working IT person. Being worked for different projects helped me to adopt to the changes quickly and made me a mature team worker.
               </p>
               <div class="card-deck">
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">GOOGLE</h4>
                        <p class="card-text">Google is an American multinational technology company that specializes 
                           in Internet-related services and products.
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Position: Software Engineer
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Phone: 1-866-246-6453
                        </p>
                     </div>
                     <div class="card-footer">
                        <h6 class="text-muted">Dates: 2015 - 2018</h6>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">IBM</h4>
                        <p class="card-text">International Business Machines Corporation is an American multinational 
                           technology and consulting company.
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Position: Full Stack Developer
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Phone: 1800-1-601-0034
                        </p>
                     </div>
                     <div class="card-footer">
                        <h6 class="text-muted">Dates: 2013 - 2015</h6>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <h4 class="card-title">MICROSOFT</h4>
                        <p class="card-text">Microsoft Corporation is a technology company that develops computer software 
                           and related services.
                        </p>
                        <p class="p-2 mb-3 bg-dark text-white">
                           Position: Web Designer
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
                        <img src = "images/p1.png" class = "img-fluid card-img-top">
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
                        <img src = "images/p2.png" class = "img-fluid card-img-top">
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
                        <img src = "images/p3.png" alt = "" class = "img-fluid card-img-top">
                        <div class="card-body">
                           <h4 class = "card-title">PROJECT 3</h4>
                           <hr>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card">
                        <img src = "images/p1.png" alt = "" class = "img-fluid card-img-top">
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
              <input class="form-control bg-dark text-white" value="Paulo De Leon" readonly/>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input class="form-control bg-dark text-white" value="paulo.deleon@my.jru.edu" readonly/>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text bg-danger text-white">
                  <i class="fas fa-pencil-alt"></i>
                </span>
              </div>
              <input class="form-control bg-dark text-white" value="(0908) 456 0654" readonly/>
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