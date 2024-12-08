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
    $pssNum = $_GET['txtPassportNum'];
    $countryCode = $_GET['txtCountryCode'];
    $passAuth = $_GET['txtPassAuthor'];
    $personalNid = $_GET['txtPersonalNum'];
    $pleaseBirth = $_GET['txtPleaseOfBirth'];
    $passIDS = $_GET['dtpPIssueDateS'];
    $passIDE = $_GET['dtpPIssueDateE'];
    $fathername = $_GET['txtFatherName'];
    $mothername = $_GET['txtMotherName'];
    $spousename = $_GET['txtSpouse'];
    $s_dob = $_GET['txtS_DOB'];
    $sAddress = $_GET['txtSAddress'];
    $Ename = $_GET['txtEName'];
    $Erelation = $_GET['txtERelation'];
    $EPhone = $_GET['txtEPhone'];
    $EAddress = $_GET['txtEAddress'];
    $refer = $_GET['cbxRefer'];
    $CAmount = $_GET['txtCAmount'];
    $advance = $_GET['txtAdvance'];
    $method = $_GET['txtPMethod'];
    $PMBname = $_GET['txtPMBName'];
    $PMBaccount = $_GET['txtPMBAccount'];
    $destination = $_GET['txtDestinationCountry'];
    $visaDuration = $_GET['txtVisaDuration'];
    $condition = $_GET['txtcondition'];
    $remark = $_GET['txtRemark'];

    $pImg = "NULL";
    $passImg = "NULL";
    $nidImg = "NULL";
    $sNidImg = "NULL";
    
    $sqlData = "INSERT INTO `tb_clientlist`(`fastname`, `lastname`, `phone`, `dob`, `genderid`, `address`, `email`, `passportNumber`, `countryCode`, `PassportAuthority`, `nid`, `pleaseOfBirth`, `passIssueDateStart`, `passIssueDateEnd`, `fatherName`, `motherName`, `spouseName`, `s_dob`, `s_address`, `emgName`, `emgRelation`, `emdAddress`, `referid`, `ContAmount`, `advance`, `payMathod`, `pmbName`, `pmbAccountNum`, `destination`, `visaDurationTime`, `pImg`, `PassImg`, `nidImg`, `SnidImg`, `condi`, `remark`, `emgPhone`) VALUES ('$fname','$lname','$phone','$dob','$genderid','$address','$email','$pssNum','$countryCode','$passAuth','$personalNid','$pleaseBirth','$passIDS','$passIDE','$fathername','$mothername','$spousename','$s_dob','$sAddress','$Ename','$Erelation','$EAddress','$refer','$CAmount','$advance','$method','$PMBname','$PMBaccount',' $destination','$visaDuration','$pImg','$passImg','$nidImg','$sNidImg','$condition','$remark','$EPhone')";

    $sqlResult = mysqli_query($conn, $sqlData);

    $message="New Client added successfully.";
    header("Location: ../addNewClient.php?success=$message");

}

?>