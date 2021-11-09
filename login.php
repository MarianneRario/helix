<?php include('server.php'); ?>
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
      <!-- NAVIGATION BAR -->
      <nav class="navbar sticky-top dark-light bg-dark">
         <a class="navbar-brand">
         <img src="images/helixLogo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
         <font color = "white"><b> HeLix Technologies</b> </font>
         </a>
      </nav>
   </head>
   <body>
      <section class = "container-fluid bg">
         <section class = "row justify-content-center">
            <section class = "col-12 col-xm-6 col-md-4">
               <br>
               <br>
               <br>
               <br>
               <br>
               <form action="" class="form-container" method="post">
                  <!-- DISPLAY VALIDATION ERRORS HERE -->
                  <?php include('errors.php') ?>
                  <br>
                  <div class="form">
                     <h4>LOGIN</h4>
                  </div>
                  <div class="input-group mb-3" >
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">
                        <i class="fas fa-user"></i></span>
                     </div>
                     <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="input-group mb-3" >
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">
                        <i class="fas fa-lock"></i>
                     </div>
                     <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="form">
                     <small><a href="register.php" class="form-text text-muted">Don't have an account? Register here!</a></small>
                     <br>
                  </div>
                  <button type="submit" name="login" class="btn btn-danger btn-block">Login</button>
               </form>
            </section>
         </section>
      </section>
       <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
         crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
         crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
         crossorigin="anonymous"></script>
      <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
      <script>
   </body>
</html>