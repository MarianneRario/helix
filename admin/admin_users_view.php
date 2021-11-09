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
                        <a href="admin_profile_edit.php" class="dropdown-item">
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
      <!-- HEADER -->
      <header id="main-header" class="py-2 bg-info text-white">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <h1>
                  <i class="fas fa-user-lock"></i> ADMIN
                  </h1>
               </div>
               <form class="form-inline" method="post">
               
                  <input class="form-control mr-sm-1" type="search" name="id" placeholder="Search by Id" aria-label="Search">
                  <button class="btn btn-danger my-2 my-sm-0" name = "searchId" type="submit">Search</button>
               </form>
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
      <div class="container">
         <?php
            $sql = "SELECT * FROM users;";
            $result = mysqli_query($db, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
               echo "<br>";
                echo '<table class="table">';
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>FIRST NAME</th>";
                            echo "<th>LAST NAME</th>";
                            echo "<th>USERNAME</th>";
                            echo "<th>EMAIL</th>";
                            echo "<th>PROJECT NAME</th>";
                            echo "<th>PROJECT DESCRIPTION</th>";
                        echo "</tr>";
                    echo "</thead>";    
                    echo "<tbody>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['first_name'] . "</td>";
                            echo "<td>" . $row['last_name'] . "</td>";
                            echo "<td>" . $row['username'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                           echo "<td>" . $row['project_name'] . "</td>";
                            echo "<td>" . $row['project_body'] . "</td>";
                        echo "</tr>";
                    }
                echo "</table>";      
            }
            ?>
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
      <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
      <script>
         // Get the current year for the copyright
         $('#year').text(new Date().getFullYear());
         
         CKEDITOR.replace('editor1');
      </script>
   </body>
</html>