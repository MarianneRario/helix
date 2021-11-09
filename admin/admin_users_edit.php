<?php include('../server.php'); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HeLix Admin</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
         crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
         crossorigin="anonymous">
      <link rel="stylesheet" href="../css/error.css">
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
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown mr-3">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                     <i class="fas fa-user"></i> Welcome <?php echo $row['first_name'] ?>
                     </a>
                     <div class="dropdown-menu">
                        <a href="admin_profile.php" class="dropdown-item">
                        <i class="fas fa-user-circle"></i> Profile
                        </a>
                        <a href="../users/profile_data_edit.php" class="dropdown-item">
                        <i class="fas fa-cog"></i> Edit Data
                        </a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a href="../login.php" class="nav-link">
                     <i class="fas fa-user-times"></i> Logout
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <?php 
         $id_num = $_SESSION["id"];
         $sql = "SELECT * FROM users WHERE id = '$id_num'";
         $result = mysqli_query($db, $sql);
         $resultCheck = mysqli_num_rows($result);
         $row = mysqli_fetch_assoc($result);
         ?>      
      <header id="main-header" class="py-2 bg-info text-white">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1>
                  <i class="fas fa-user-edit"></i> Edit <?php echo $row['first_name'] ?>'s Data
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
                  <a href="admin_users_view.php" class="btn btn-light btn-block">
                  <i class="fas fa-arrow-left"></i> Back To Home Page
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class = "container-fluid bg">
         <section class = "row justify-content-center">
            <section class = "col-12 col-sm-6 col-sm-4">
               <form action="" class="form-container" method="post">
                  <br>
                  <div class="form">
                     <!-- display validation errors here -->
                     <?php include('../errors.php') ?>
                     <br>
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" >DATE REGISTERED</span>
                     </div>
                     <input type="text" class="form-control" name="username" value="<?php echo $row['date_registered'] ?>" readonly>
                  </div>
                  <div class="input-group mb-3" >
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">ID</span>
                     </div>
                     <input type="text" class="form-control" name="id" value="<?php echo $row['id'] ?>" readonly>
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" >QUIZ SCORE</span>
                     </div>
                     <input type="text" class="form-control" name="username" value="<?php echo $row['quiz_score'] ?>"  readonly>
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" >USERNAME</span>
                     </div>
                     <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>"  >
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">FIRST NAME</span>
                     </div>
                     <input type="text" class="form-control" name="fname" value="<?php echo $row['first_name'] ?>" >
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">LAST NAME</span>
                     </div>
                     <input type="text" class="form-control" name="lname" value="<?php echo $row['last_name'] ?>" >
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">EMAIL</span>
                     </div>
                     <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>" >
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">CHANGE PASSWORD</span>
                     </div>
                     <input type="password" class="form-control" name="password" placeholder="Change password">
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">PROJECT NAME</span>
                     </div>
                     <input type="text" class="form-control" name="pname" value="<?php echo $row['project_name'] ?>" >
                  </div>
                  <div class="form-group">
                     <label for=""><b>PROJECT DESCRIPTION</b></label>
                     <textarea class="form-control" name="editor1"><?php echo $row['project_body'] ?></textarea>
                  </div>
                  <br>
                  <button type="submit" name="save" class="btn btn-success btn-block">
                  <i class="fas fa-check"></i>
                  SAVE DATA
                  </button>
                  <!--DELETE USER BUTTON NADAGDAG-->
                  <button type="submit" name="delete" class="btn btn-danger btn-block">
                  <i class="fas fa-lock"></i>
                  DELETE USER
                  </button>
                  <br>
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