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

    if(empty($phone) || empty($dob) || empty($genderid) || empty($address) || empty($pssNum) || empty($personalNid) || empty($pleaseBirth) || empty($passIDS) || empty($passIDE) || empty($Ename) || empty($Erelation) || empty($EPhone) || empty($EAddress) || empty($refer) || empty($CAmount) || empty($advance) || empty($destination))
    {
        $message="Some important information are missing or input field are empty. Please check and fill up the all required field. Thank you!";
        header("Location: ../addClinet.php?error=$message");
        exit();
    }
    
    $sqlData = "INSERT INTO `tb_clientlist`(`fastname`, `lastname`, `phone`, `dob`, `genderid`, `address`,`passportNumber`,`nid`,`pleaseOfBirth`, `passIssueDateStart`, `passIssueDateEnd`,`emgName`, `emgRelation`, `emdAddress`, `referid`, `ContAmount`, `advance`,`destination`,`emgPhone`) VALUES ('$fname','$lname','$phone','$dob','$genderid','$address','$pssNum','$personalNid','$pleaseBirth','$passIDS','$passIDE','$Ename','$Erelation','$EAddress','$refer','$CAmount','$advance','$destination','$EPhone')";

    $sqlResult = mysqli_query($conn, $sqlData);

    $message="New Client added successfully.";
    header("Location: ../addClinet.php?success=$message");

}

?>