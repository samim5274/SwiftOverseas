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

    if(empty($receivedId))
    {
        $mess = "You can not select destination account. Please select account, where you went to send money.";
        header("Location: ../account.php?error=$mess");
    }

    $sqlData = "INSERT INTO `tb_moneysentandreceived`(`date`, `amount`, `senderId`, `receiverId`, `purpose`, `TransectionType`) VALUES ('$toDate','$txtAmount','$Sendid','$receivedId','$purpose','$transectionType')";
    $sqlResult = mysqli_query($conn, $sqlData);
    $mess = "Money Transection Successfully.";
    header("Location: ../account.php?success=$mess");
}

?>