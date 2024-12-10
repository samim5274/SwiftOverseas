<?php

include 'dbconfig.php';

if(isset($_GET['btnSubmit']))
{
    $fname = $_GET['fastname'];
    $lname = $_GET['lastname'];
    $phone = $_GET['txtphone'];
    $dob = $_GET['dtpDOB'];
    $genderid = $_GET['cbxGender'];
    $address = $_GET['txtAddress'];
    $email = $_GET['txtEmail'];    
    $Nid = $_GET['txtNID'];
    $joinDate = $_GET['dtpJDate'];
    $fathername = $_GET['txtFatherName'];
    $mothername = $_GET['txtMotherName'];
    $Ename = $_GET['txtEName'];
    $Erelation = $_GET['txtERelation'];
    $EPhone = $_GET['txtEPhone'];
    $EAddress = $_GET['txtEAddress'];
    $remark = $_GET['txtRemark'];
    $userName = $_GET['username'];
    $userPass = $_GET['password'];

    $sqlFindUserName = "SELECT * FROM tb_employee_details WHERE `username` = '$userName'";
    $sqlFindResult = mysqli_query($conn, $sqlFindUserName);
    $row = mysqli_fetch_array($sqlFindResult);
    if(!$row['username' === $userName])
    {
        $sqlFindEmail = "SELECT * FROM tb_employee_details WHERE `email` = '$email'";
        $sqlFindEmailResult = mysqli_query($conn, $sqlFindEmail);
        $rows = mysqli_fetch_assoc($sqlFindEmailResult);
        if($rows['email'] === $email)
        {
           $mess  = "Email already taken. Please try another username ". $rows['email'].". Thank you!!";
            header("Location: ../createAccount.php?error=$mess");
        }
        else
        {
            $sqlInsertData = "INSERT INTO `tb_employee_details`( `firstName`, `lastName`, `dob`, `genderid`, `address`, `phone`, `fatherName`, `motherName`, `email`, `nit`, `emgName`, `emgPhone`, `emgRelation`, `emgAddress`, `joinDate`, `username`, `password`, `status`, `account`, `remark`) VALUES ('$fname','$lname','$dob','$genderid','$address','$phone','$fathername','$mothername','$email','$Nid','$Ename','$EPhone','$Erelation','$EAddress','$joinDate','$userName','$userPass',0,0,'$remark')";
            $sqlResult = mysqli_query($conn, $sqlInsertData);
            $mess  = "An employee account created successfully. Thank you!!";
            header("Location: ../createAccount.php?success=$mess");
        }
    }
    else
    {
        $mess  = "Username already taken. Please try another username ".$userName.". Thank you!!";
        header("Location: ../createAccount.php?error=$mess");
    }
}

?>