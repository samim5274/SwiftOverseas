<?php

   include 'dbconfig.php'; 
 
   if(isset($_GET['btnSubmit']))
   {
      $agencyName = $_GET['agencyName'];
      $lasName = $_GET['lastname'];
      $fastName = $_GET['fastname'];
      $phone = $_GET['txtphone'];
      $email = $_GET['txtEmail'];
      $address = $_GET['txtAddress'];
      $rmNumber = $_GET['txtRM'];
      $status = 1;

      $sqlData = "INSERT INTO `tb_agency_info`(`fullname`, `lastname`, `firstname`, `address`, `rm`, `status`, `email`, `phone`) VALUES ('$agencyName','$lasName','$fastName','$address','$rmNumber','$status','$email','$phone')";

      $sqlResult = mysqli_query($conn,$sqlData);
      $message="New B2B agency added successfully.";
      header("Location: ../addAgency.php?success=$message");
   }

?>