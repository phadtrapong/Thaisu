<?php
   include("db.php");
   session_start();
   
   if(isset($_POST['btn-upload'])) {
      foreach($_POST AS $key => $value) { 
         $_POST[$key] = ($value); 
      }
   
      $query = "SELECT * FROM admin WHERE username = '{$_POST['username']}' ";
      $result = $db->query($query);
      $counts = ($result->rowCount() >0 ) ? true : false;
      if($counts) {
         $row = $result->fetch(PDO::FETCH_ASSOC);
         $dbpass = $row['password'];
         $pass = $_POST['password'];
         // verify password

         if (crypt($pass, $dbpass) == $dbpass) {
            $_SESSION['user'] = $row['username'];
            header("location: view.php");
         }
         else{
            header("location: adminLogin.php");
         }
      }
      else {
         header("location: adminLogin.php");
      }
   }
?>