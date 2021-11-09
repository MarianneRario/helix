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
      <!-- INAVIGATION -->
      <nav class="navbar sticky-top dark-light bg-dark">
         <a class="navbar-brand">
         <img src="images/helixLogo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
         <font color = "white"> <b>HeLix Technologies </b></font>
         </a>
      </nav>
   </head>
   <body>
      <section class = "container-fluid bg">
         <section class = "row justify-content-center">
            <section class = "col-12 col-xm-6 col-md-4">
               <form action="register.php" class="form-container" method="post">
                  <!-- display validation errors here -->
                  <?php include('errors.php') ?>
                  <br>
                  <div class="form-group">
                     <h4>REGISTER</h4>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" name="fname" placeholder="First Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" name="lname" placeholder="Last Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                     <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                     <small><a href="login.php" class="form-text text-muted">Already have an account?</a></small>
                  </div>
                  <button type="submit" name = "register" class="btn btn-danger btn-block">Submit</button>
                  <br>
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