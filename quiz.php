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
                     <a href="register_project.php" class="nav-link">Register Project</a>
                  </li>
                  <li class="nav-item px-2">
                     <a href="quiz.php" class="nav-link active">Quiz</a>
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
                     <i class="fas fa-pencil-alt"></i> Personality Quiz
                  </h1>
               </div>
            </div>
         </div>
      </header>
      <!-- ACTIONS -->
      <section id="actions" class="py-4 mb-4 bg-light">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <a href="profile.php" class="btn btn-light btn-block">
                  <i class="fas fa-arrow-left"></i> Back To Home Page
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!--PERSONALITY QUIZ-->
      <section class = "container-fluid bg">
         <section class = "row justify-content-center">
            <section class = "col-12 col-sm-9 col-sm-9">
               <form action="" class="form-container" method="post">
                  <div class="form">
                  </div>
                  <!--HIDDEN INPUT-->
                  <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>" readonly>
                  </div>
                  <h6>1. I have a vivid imagination</h6>
                  <div>
                     <input type="radio" name="q1" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q1" value="F" />
                     <label>FALSE</label>
                  </div>
                  <div>
                  </div>
                  <h6>2. I complete tasks successfully</h6>
                  <div>
                     <input type="radio" name="q2" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q2" value="F" />
                     <label>FALSE</label>
                  </div>
                  <h6>3. I really enjoy coding</h6>
                  <div>
                     <input type="radio" name="q3" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q3" value="F" />
                     <label>FALSE</label>
                  </div>
                  <h6>4. I don't like things to be a mess - I like to tidy up</h6>
                  <div>
                     <input type="radio" name="q4" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q4" value="F" />
                     <label>FALSE</label>
                  </div>
                  <h6>5. I love to keep my codes short and easy to understand</h6>
                  <div>
                     <input type="radio" name="q5" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q5" value="F" />
                     <label>FALSE</label>
                  </div>
                  <h6>6. I love a good argument - a good fight</h6>
                  <div>
                     <input type="radio" name="q6" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q6" value="F" />
                     <label>FALSE</label>
                  </div>
                  <h6>7. I enjoy challenging problems</h6>
                  <div>
                     <input type="radio" name="q7" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q7" value="F" />
                     <label>FALSE</label>
                  </div>
                  <h6>8. I don't mind cheating to get ahead</h6>
                  <div>
                     <input type="radio" name="q8" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q8" value="F" />
                     <label>FALSE</label>
                  </div>
                  <h6>9. I handle tasks methodically</h6>
                  <div>
                     <input type="radio" name="q9" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q9" value="F" />
                     <label>FALSE</label>
                  </div>
                  <h6>10. I have difficulty understanding abstract ideas</h6>
                  <div>
                     <input type="radio" name="q10" value="T" />
                     <label>TRUE</label>
                  </div>
                  <div>
                     <input type="radio" name="q10" value="F" />
                     <label>FALSE</label>
                  </div>
                  <br>
                  <button type="submit" name="submit-quiz" class="btn btn-success btn-md pl-5 pr-5">
                  SUBMIT QUIZ
                  </button>
                  </div>
               </form>
            </section>
         </section>
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