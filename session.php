<?php
   session_start();
   include('db.php');
   if(!isset($_SESSION['user'])){
      header("location: adminLogin.php");
   }
   $user_check = $_SESSION['user'];
   $result = $db->query("select username from admin where username = '{$user_check}' ");
   $row = $result->fetch(PDO::FETCH_ASSOC);
   $login_session = $row['username'];
?>