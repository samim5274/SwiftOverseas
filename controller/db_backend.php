<?php

   include 'dbconfig.php'; 
   include 'session.php';
 
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

   if(isset($_GET['btnAddCountryCost']))
   {
      $countryName = $_GET['txtCountryName'];
      $clientCost = $_GET['txtClientCost'];
      $AgentCost = $_GET['txtB2BAgenctCost'];
      $clientAdvance = $_GET['txtClientAdvance'];
      $agentAdvacne = $_GET['txtB2BAgentAdvance'];
      $remarks = $_GET['txtRemark'];

      $sqlCountry = "INSERT INTO `tb_countrydetails`(`countryName`, `clientCost`, `clientAdvance`, `agentCost`, `agentAdvance`,`remark`) VALUES ('$countryName','$clientCost','$clientAdvance','$AgentCost','$agentAdvacne','$remarks')";
      $sqlCountryResult = mysqli_query($conn, $sqlCountry);
      $message="Country added successfully.";
      header("Location: ../countryCost.php?success=$message");
   }

   if(isset($_GET['btnCountryCostEdit']))
   {
      $id = $_GET['txtId'];
      $countryName = $_GET['txtCountryName'];
      $clientCost = $_GET['txtClientCost'];
      $AgentCost = $_GET['txtAgentCost'];
      $clientAdvance = $_GET['txtClientAdvance'];
      $agentAdvacne = $_GET['txtAgentAdvance'];
      $remarks = $_GET['txtRemak'];

      $sqlUpdateData = "UPDATE `tb_countrydetails` SET `countryName`='$countryName',`clientCost`='$clientCost',`clientAdvance`='$clientAdvance',`agentCost`='$AgentCost',`agentAdvance`='$agentAdvacne',`remark` = '$remarks' WHERE id = $id";
      $sqlUpdateResult = mysqli_query($conn, $sqlUpdateData);
      $message="Country data updated successfully.";
      header("Location: ../countryCost.php?success=$message");
   }

   if(isset($_GET['btnSubmitExpenses']))
   {
      $subGroup = $_GET['cbxSubGroup'];
      $expenser = $_GET['cbxexpenser'];
      $amount = $_GET['txtAmount'];
      $purpose = $_GET['txtPurpose'];
      $userId = $_SESSION['id'];
      $toDate = date("Y/m/d");
      $toDate2 = date("Ymd");

      if(empty($subGroup) || empty($expenser) || empty($amount) || empty($purpose))
      {
         $mess = "Please fill all the fields and try again. Thank you!";
         header("Location: ../dailyExpenses.php?warning=$mess");
         exit();
      }
      
      $group = "SELECT * FROM `ex_sub_group` WHERE id = $subGroup";
      $groupResult = mysqli_query($conn,$group);
      $groupRow = mysqli_fetch_assoc($groupResult);
      $groupid = $groupRow['group_id'];

      $sl = "SELECT COUNT(*) FROM `ex_daily_expenses` WHERE `date` = '$toDate' ";
      $slResult = mysqli_query($conn,$sl);
      $slRow = mysqli_fetch_assoc($slResult);
      $slCount = $slRow['COUNT(*)']+1;

      $invoice = "INV-".$toDate2 . $userId . $slCount;

      $sqlData = "INSERT INTO `ex_daily_expenses`(`invoice`, `date`, `group_id`, `sub_group_id`, `senderId`,`receiverId`,`purpose`,`amount`) VALUES ('$invoice','$toDate','$groupid','$subGroup','$userId','$expenser','$purpose','$amount')";
      $sqlResult = mysqli_query($conn,$sqlData);
      $mess = "Daily expenses added successfully.";
      header("Location: ../dailyExpenses.php?success=$mess");
   }

?>