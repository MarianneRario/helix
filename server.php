<?php
   session_start();
   $username = "";
   $email = "";
   $errors = array();
   
   /**
    * CONNECT TO THE DATABASE
    */
   
   $db = mysqli_connect('localhost','root','','db_helix');
   
   /**
    * REGISTER USER
    */
   
   //IF THE REGISTER BUTTON IS CLICKED
   if(isset($_POST['register'])) {
       $fname = mysqli_real_escape_string($db, $_POST['fname']);
       $lname = mysqli_real_escape_string($db, $_POST['lname']);
       $username = mysqli_real_escape_string($db, $_POST['username']);
       $email = mysqli_real_escape_string($db, $_POST['email']);
       $password1 = mysqli_real_escape_string($db, $_POST['password']);
       $password2 = mysqli_real_escape_string($db, $_POST['confirm-password']);

       //TO AVOID DUPLICATE USERS
       $check_duplicate_username = "SELECT username FROM users WHERE username = '$username' ";
       $result = mysqli_query($db, $check_duplicate_username);
       $resultCount = mysqli_num_rows($result); //integer
       if($resultCount > 0){
            array_push($errors, "Username is already taken.");
       }

        //TO AVOID DUPLICATE EMAIL
       $check_duplicate_email = "SELECT email FROM users WHERE email = '$email' ";
       $result = mysqli_query($db, $check_duplicate_email);
       $resultCount = mysqli_num_rows($result); //integer
       if($resultCount > 0){
            array_push($errors, "Email is already taken.");
       }
   
       //ERROR MESSAGES FROM REGISTRATION PAGE
       if(empty($fname)) {
           array_push($errors, "First name is required");
       }
       if(empty($lname)) {
           array_push($errors, "Last name is required");
       }
       if(empty($username)) {
           array_push($errors, "Username is required");
       }
       if(empty($email)) {
           array_push($errors, "Email is required"); 
       }
       if(empty($password1)) {
           array_push($errors, "Password is required"); 
       }
       if($password1 != $password2){
           array_push($errors, "Password do not match");
       }
       //SAVE USER FROM THE DATABASE IF THERE IS NO ERROR
       if(count($errors) == 0){ //integer return type
           $password = md5($password1);
           $sql = "INSERT INTO users (first_name, last_name, username, email, password)
                   VALUES ('$fname', '$lname', '$username', '$email', '$password')";
           mysqli_query($db, $sql);
   
           echo"
           <div class='alert alert-dark' role='alert'>
            Successfully Registered <a href='login.php' class='alert-link'>Log in here.</a>
           </div>
           ";
       }
       
   }
   
   /**
    * LOG IN USER WITH EMAIL AND PASSWORD
    */
   
    //IF THE LOGIN BUTTON IS CLICKED
   if(isset($_POST['login'])){
       $email = mysqli_real_escape_string($db, $_POST['email']);
       $password = mysqli_real_escape_string($db, $_POST['password']);
   
       //ERROR MESSAGES FROM THE LOGIN PAGE
       if(empty($email)) {
           array_push($errors, "Email is required");
       }
       if(empty($password)) {
           array_push($errors, "Password is required"); 
       }
   
       //IF NO ERRORS
       if(count($errors) == 0){
           $password = md5($password);
           $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
           $result = mysqli_query($db, $query);
           if (mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_assoc($result);
                $user_type = $row['user_type'];
                
                //FOR ADMIN ONLY
                if($user_type == "admin"){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('location: admin/admin_users_view.php');
                }
                //FOR USER ONLY
               else {
               $_SESSION['email'] = $email;
               $_SESSION['password'] = $password;
               $_SESSION['success'] = "You are now logged in";
               header('location: profile.php');
            }
           } else{
               array_push($errors, "Incorrect email or password.");
           }
       }
   }
   
   
   /**
    * SEARCH, UPDATE, DELETE USERS DATA (FOR ADMIN ONLY)
    */
   
    //SEARCH BY ID
    if(isset($_POST['searchId'])) {
       $id = mysqli_real_escape_string($db, $_POST['id']);
   
       //ERROR MESSAGES FROM REGISTRATION PAGE
       if(empty($id)) {
        echo"";
       } else {
            $query = "SELECT * FROM users WHERE id = '$id'";
            $result = mysqli_query($db, $query);
   
            if (mysqli_num_rows($result) == 1){
                //GO TO ANOTHER PAGE
                $_SESSION['id'] = $id;
                header('location: admin_users_edit.php');
            } else{
                echo"
                <div class='alert alert-danger' role='alert'>
                <b>ERROR:</b> No data found
                </div>
                ";
            }
        } 
   }
   
   //UPDATE AND DELETE USERS' DATA (FOR ADMIN ONLY)
   if(isset($_POST['save'])) {

    $id = mysqli_real_escape_string($db, $_POST['id']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $project_name = mysqli_real_escape_string($db, $_POST['pname']);
    $project_body = mysqli_real_escape_string($db, $_POST['editor1']);

      if((empty($username)) OR (empty($fname)) OR (empty($lname)) OR (empty($email))) {
        array_push($errors, "You can't delete required here! Go to db_helix database to delete users.");
    }
   
    //UPDATE USER FROM THE DATABASE IF THERE IS NO ERROR
    if(count($errors) == 0){
        $pwd = md5($password);
        $query = "UPDATE users SET 
        first_name = '$fname', 
        last_name = '$lname', 
        username = '$username',
        email = '$email',
        password = '$pwd',
        project_name = '$project_name',
        project_body = '$project_body'
        WHERE id = '$id'";
   
        $result = mysqli_query($db, $query);
   
        if ($result){
            echo"
            <div class='alert alert-success' role='alert'>
            <b>Success:</b> Data has been successfully updated!
            </div>
            ";
   
        } else{
            echo"
            <div class='alert alert-danger' role='alert'>
            <b>ERROR:</b> Can't update the data
            </div>
            ";
            }
        }
   }
   
    //DELETE USER FOR ADMIN ONLY
    
   
    if(isset($_POST['delete'])) {
        $id = mysqli_real_escape_string($db, $_POST['id']);
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($db, $sql);
        if ($result){
            header('location: successfully_deleted.php');
        }     
    }

    if(isset($_POST['done'])) {
        header('location: admin_users_view.php');
        }     



    /**
    * EDIT INDIVIDUAL DATA
    */
   
   if(isset($_POST['save-data'])) {
   
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);

    //TO AVOID DUPLICATE USERS
    $check_duplicate_username = "SELECT username FROM users WHERE username = '$username' ";
    $result = mysqli_query($db, $check_duplicate_username);
    $resultCount = mysqli_num_rows($result);
    if($resultCount > 0){
        array_push($errors, "Username is already taken.");
    }

    //TO AVOID DUPLICATE EMAIL
    $check_duplicate_email = "SELECT email FROM users WHERE email = '$email' ";
    $result = mysqli_query($db, $check_duplicate_email);
    $resultCount = mysqli_num_rows($result);
    if($resultCount > 0){
        array_push($errors, "Email is already taken.");
    }

   
      if((empty($username)) OR (empty($fname)) OR (empty($lname))) {
        array_push($errors, "You can't delete required fields!");
    }
   
    //UPDATE USER FROM THE DATABASE IF THERE IS NO ERROR
    if(count($errors) == 0){
        
        $query = "UPDATE users SET 
        first_name = '$fname', 
        last_name = '$lname', 
        username = '$username'
        WHERE id = '$id'";
   
        $result = mysqli_query($db, $query);
        
   
        if ($result){
            echo"
            <div class='alert alert-success' role='alert'>
            <b>Success:</b> Data has been successfully updated!
            </div>
            ";
   
        } else{
            echo"
            <div class='alert alert-danger' role='alert'>
            <b>ERROR:</b> Can't update the data
            </div>
            ";
            }
        } 
   }
   
   /**
    * PROJECT PANEL THAT ENABLES USER TO EDIT THEIR PROJECT
    */
    if(isset($_POST['save-project'])) {
        if(($_POST['pname']=="") AND ($_POST['editor1']=="")){
            $id = mysqli_real_escape_string($db, $_POST['id']);
            $project_name = mysqli_real_escape_string($db, $_POST['pname']);
            $project_body = mysqli_real_escape_string($db, $_POST['editor1']);
            $query = "UPDATE users SET project_name = '$project_name', project_body = '$project_body' WHERE id = '$id'";
            $result = mysqli_query($db, $query);
        
            if ($result){
                echo"
                <div class='alert alert-success' role='alert'>
                 <b>Success:</b> Data has been successfully deleted!
                </div>
                ";
                }
            } else {
        
            $id = mysqli_real_escape_string($db, $_POST['id']);
            $project_name = mysqli_real_escape_string($db, $_POST['pname']);
            $project_body = mysqli_real_escape_string($db, $_POST['editor1']);
            $query = "UPDATE users SET project_name = '$project_name', project_body = '$project_body' WHERE id = '$id'";
            $result = mysqli_query($db, $query);
        
            if ($result)    {
                echo"
                <div class='alert alert-success' role='alert'>
                 <b>Success:</b> Data has been successfully updated!
                </div>
                ";
        
            } else  {
                echo"
                <div class='alert alert-danger' role='alert'>
                 <b>ERROR:</b> Can't update the data
                </div>
                ";
            }
        }
    }
   
    /**
    * IF REGISTERED BUTTON IS CLICKED
    */
   
    if(isset($_POST['register-project'])) {
        header('location: register_project.php');
    }
   
    /**
    * IF PROVIDE FEEDBACK BUTTON IS CLICKED
    */
   
    if(isset($_POST['provide-feedback'])) {
        header('location: feedback.php');
    }
   
    /**
    * IF SUBMIT FEEDBACK BUTTON IS CLICKED THEN SAVE IT TO THE DATABASE
    */
   
    if(isset($_POST['submit-feedback'])) {
        $id = mysqli_real_escape_string($db, $_POST['id']);
        $feedback = mysqli_real_escape_string($db, $_POST['editor1']);
        $query = "UPDATE users SET feedback = '$feedback' WHERE id = '$id'";
        $result = mysqli_query($db, $query);
        
            if ($result){
                echo"
                <div class='alert alert-success' role='alert'>
                 <b>Success:</b> Thank you for providing us your feedback!
                </div>
                ";
            } else {
                echo"
                <div class='alert alert-danger' role='alert'>
                <b>ERROR:</b> Can't provide data
                </div>
                ";
        }
   
    }
   
   
   /**
    * FOR PERSONALITY QUIZ
    */

    //IF THE START BUTTON IS CLICKED
   
    if(isset($_POST['start-quiz'])) {
        header('location: quiz.php');
        }

    if(isset($_POST['submit-quiz'])) {
         $answer1 = $_POST['q1'];
         $answer2 = $_POST['q2'];
         $answer3 = $_POST['q3'];
         $answer4 = $_POST['q4'];
         $answer5 = $_POST['q5'];
         $answer6 = $_POST['q6'];
         $answer7 = $_POST['q7'];
         $answer8 = $_POST['q8'];
         $answer9 = $_POST['q9'];
         $answer10 = $_POST['q10'];
         $error = 0;      
         $totalCorrect = 0;     
         if ($answer1 == "T") { 
             $totalCorrect++; 
            } else {
                $error++;
            }
         if ($answer2 == "T") { 
             $totalCorrect++; 
            } else {
                $error++;
            }
         if ($answer3 == "T") { 
             $totalCorrect++; 
            } else {
                $error++;
            }
         if ($answer4 == "T") { 
             $totalCorrect++; 
            } else {
                $error++;
            }
         if ($answer5 == "T") { 
             $totalCorrect++; 
            } else {
                $error++;
            }
         if ($answer6 == "T") { 
             $totalCorrect++; 
            } else {
                $error++;
            }
         if ($answer7 == "T") { 
             $totalCorrect++; 
            } else {
                $error++;
            }
         if ($answer8 == "F") { 
             $totalCorrect++; 
            } else {
                $error++;
            }
         if ($answer9 == "T") { 
             $totalCorrect++; 
            } else {
                $error++;
            }
         if ($answer10 == "F") { 
             $totalCorrect++; 
            } else {
                $error++;
            }



        $id = mysqli_real_escape_string($db, $_POST['id']);
        $score = mysqli_real_escape_string($db, $totalCorrect);
        
        $query = "UPDATE users SET quiz_score = '$score' WHERE id = '$id'";
        $result = mysqli_query($db, $query);

   
        if ($result){
            header('location: quiz_result.php');
   
        } else{
            echo"
            <div class='alert alert-danger' role='alert'>
            <b>ERROR:</b> Can't submit quiz
            </div>
            ";
            }
    }


    /**
    * INDIVIDUAL'S PORTFOLIO
    */

    //FOR ME
    if(isset($_POST['paulo-portfolio'])) {
        header('location: paulodeleon_portfolio.php');
        }
    
    //FOR PATRICK FELIPE
    if(isset($_POST['patrick-portfolio'])) {
        header('location: patrickfelipe_portfolio.php');
        }

    //FOR JUNNALD DELA CRUZ
    if(isset($_POST['junald-portfolio'])) {
    header('location: junalddelacruz_portfolio.php');
    }   

    //FOR DWIGHT VALLESTERO
    if(isset($_POST['dwight-portfolio'])) {
    header('location: dwightvallestero_portfolio.php');
    }  

    //FOR RAPHAEL CARLOS MACAPAGAL
    if(isset($_POST['raphael-portfolio'])) {
    header('location: raphaelcarlosmacapagal_portfolio.php');
    }  
   
   
   ?>