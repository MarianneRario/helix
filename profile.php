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
      <link rel="stylesheet" href="css/style.css">
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
                     <a href="profile.php" class="nav-link active">Home</a>
                  </li>
                  <li class="nav-item px-2">
                     <a href="register_project.php" class="nav-link ">Register Project</a>
                  </li>
                  <li class="nav-item px-2">
                     <a href="quiz.php" class="nav-link ">Quiz</a>
                  </li>
                  <li class="nav-item px-2">
                     <a href="about_us.php" class="nav-link">About Us</a>
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
      <!-- HEADER -->
      <header id="main-header" class="py-2 bg-info text-white">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1>
                     <i class="fas fa-user"></i> Hello, <?php echo $row['first_name'] ?>!
                  </h1>
               </div>
            </div>
         </div>
      </header>
      <!-- ACTIONS -->
      <section class="py-4 mb-4 bg-light">
         <div class="container">
         </div>
      </section>
      </div>
      </div>
      <!--dito gawa-->
      <section id = "blog" class = "py-3">
         <div class="container">
            <div class="row">
               <div class="col">
                  <form action="" method="post">
                     <div class="card-columns">
                        <div class="card">
                           <img src = "images/project.jpg" class = "img-fluid card-img-top">
                           <div class="card-body">
                              <h4 class = "card-title">Register a Project</h4>
                              <hr>
                              <p class = "card-text">Fill in the details and add the project. You can still update or delete your 
                                 project. 
                              </p>
                              <button type="submit" name="register-project" class="btn btn-lg btn-block btn-warning mt-auto">Register</button>
                           </div>
                        </div>
                        <div class="card">
                           <img src = "images/quiz.jpg" class = "img-fluid card-img-top">
                           <div class="card-body">
                              <h4 class = "card-title">Personality Quiz</h4>
                              <hr>
                              <p class = "card-text">
                                 Describe yourself, as you honestly see yourself. There is no time limit. 
                              </p>
                              <button type="submit" name="start-quiz" class="btn btn-lg btn-block btn-success mt-auto">Start Quiz</button>
                           </div>
                        </div>
                        <div class="card">
                           <img src = "images/feedback.jpg" alt = "" class = "img-fluid card-img-top">
                           <div class="card-body">
                              <h4 class = "card-title">Help us improve HeLix</h4>
                              <hr>
                              <p class = "card-text">Would you be willing to answer a few questions about your experience? 
                              </p>
                              <button type="submit" name="provide-feedback" class="btn btn-lg btn-block btn-danger mt-auto">Provide Feedback</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
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
      <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
      <script>
         // Get the current year for the copyright
         $('#year').text(new Date().getFullYear());
         
         CKEDITOR.replace('editor1');
      </script>
   </body>
</html>