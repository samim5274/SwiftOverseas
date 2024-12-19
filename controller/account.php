<?php 

include 'dbconfig.php';
session_start();

if(isset($_GET['btnSend']))
{
    $Sendid = "".$_SESSION['id'];
    $receivedId = $_GET['cbxEmployee'];
    $txtAmount = $_GET['txtAmount'];
    $purpose = $_GET['txtPurpose'];
    $toDate = date("Y/m/d");
    $transectionType = 1;

    $sqlData = "INSERT INTO `tb_moneysentandreceived`(`date`, `amount`, `senderId`, `receiverId`, `purpose`, `TransectionType`) VALUES ('$toDate','$txtAmount','$Sendid','$receivedId','$purpose','$transectionType')";
    $sqlResult = mysqli_query($conn, $sqlData);
    $mess = "Transection done Successfully.";
    header("Location: ../account.php?success=$mess");
}

?>