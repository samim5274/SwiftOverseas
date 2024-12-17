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
    $pssNum = $_GET['txtPassportNum'];
    $personalNid = $_GET['txtPersonalNum'];
    $pleaseBirth = $_GET['txtPleaseOfBirth'];
    $passIDS = $_GET['dtpPIssueDateS'];
    $passIDE = $_GET['dtpPIssueDateE'];
    $Ename = $_GET['txtEName'];
    $Erelation = $_GET['txtERelation'];
    $EPhone = $_GET['txtEPhone'];
    $EAddress = $_GET['txtEAddress'];
    $refer = $_GET['cbxRefer'];
    $CAmount = $_GET['txtCAmount'];
    $advance = $_GET['txtAdvance'];
    $destination = $_GET['txtDestinationCountry'];
    
    $sqlData = "INSERT INTO `tb_clientlist`(`fastname`, `lastname`, `phone`, `dob`, `genderid`, `address`,`passportNumber`,`nid`,`pleaseOfBirth`,`emgName`, `emgRelation`, `emdAddress`, `referid`, `ContAmount`, `advance`,`destination`,`emgPhone`) VALUES ('$fname','$lname','$phone','$dob','$genderid','$address','$pssNum','$personalNid','$pleaseBirth','$Ename','$Erelation','$EAddress','$refer','$CAmount','$advance','$destination','$EPhone')";

    $sqlResult = mysqli_query($conn, $sqlData);

    $message="New Client added successfully.";
    header("Location: ../addClinet.php?success=$message");

}

?>