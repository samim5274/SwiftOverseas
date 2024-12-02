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

   if(isset($_GET['btnEdit']))
   {
      $uid = $_GET['uid'];
      $agencyName = $_GET['agencyName'];
      $lasName = $_GET['lastname'];
      $fastName = $_GET['fastname'];
      $phone = $_GET['txtphone'];
      $email = $_GET['txtEmail'];
      $address = $_GET['txtAddress'];
      $rmNumber = $_GET['txtRM'];

      $sqlData = "UPDATE `tb_agency_info` SET `fullname`='$agencyName',`lastname`='$lasName',`firstname`='$fastName',`address`='$address',`rm`='$rmNumber',`email`='$email',`phone`='$phone' WHERE id = $uid";
      $sqlResult = mysqli_query($conn, $sqlData);
      $message="Edited B2B agency successfully.";
      header("Location: ../addAgency.php?success=$message");
   }

   if(isset($_GET['btnDelete'])){
      $uid = $_GET['uid'];
      $sqlData = "DELETE FROM `tb_agency_info` WHERE id = $uid";
      $sqlResult = mysqli_query($conn,$sqlData);
      $message="B2B agency Delete successfully.";
      header("Location: ../addAgency.php?success=$message");
   }

?>