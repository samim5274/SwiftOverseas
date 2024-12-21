<?php
   include("dbconfig.php");
   session_start();

   if(!isset($_SESSION['username']) && !isset($_SESSION['id']))
   {
      $mess = "Need must be login. Otherwise you can not access this page. Thank you!";
      header("location:log.php?error=$mess");
   }

?>


