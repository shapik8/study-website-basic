<?php
   require_once("connect.php");
   
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from user where id = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   //$login_session = $row['name'];
   $userID=$row['id'];
   //$emails = $row['email'];
   if(!isset($_SESSION['login_user'])){
        header("location: login.php");
   }
?>