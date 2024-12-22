<?php 

include 'dbconfig.php';
session_start();

$mess1 = "You don't have enough money on your account. Please diposit money then try again. Thank you!";
$mess3 = "You enter more then your balance. Thank you!";
$mess = "Money Transection Successfully.";
$mess2 = "You can not select destination account. Please select account, where you went to send money.";
$mess4 = "Your selectd destination account is your main account. This transection not possible. Please select another account, where you went to send money. Thanks!";

if(isset($_GET['btnSend']))
{
    $Sendid = "".$_SESSION['id'];
    $receivedId = $_GET['cbxEmployee'];
    $txtAmount = $_GET['txtAmount'];
    $purpose = $_GET['txtPurpose'];
    $toDate = date("Y/m/d");
    $transectionType = 3;

    if(empty($receivedId))
    {        
        header("Location: ../account.php?error=$mess2");
        exit();
    }

    if($Sendid == $receivedId)
    {
        header("Location: ../account.php?error=$mess4");
        exit();
    }

    $sqlSendAmount = "SELECT SUM(amount) FROM `tb_moneysentandreceived` WHERE senderId = '$Sendid' AND TransectionType = 1";
    $sqlSendAmountResult = mysqli_query($conn, $sqlSendAmount);

    $sqlReceived = "SELECT SUM(amount) FROM `tb_moneysentandreceived` WHERE senderId = '$Sendid' AND TransectionType = 2";
    $sqlReceivedResult = mysqli_query($conn, $sqlReceived);

    $sqlDiposit = "SELECT SUM(amount) FROM `tb_moneysentandreceived` WHERE senderId = '$Sendid' AND TransectionType = 3";
    $sqlDipositResult = mysqli_query($conn, $sqlDiposit);

    $send = mysqli_fetch_array($sqlSendAmountResult);
    $receive = mysqli_fetch_array($sqlReceivedResult);
    $diposit = mysqli_fetch_array($sqlDipositResult);
   
    $balence = ($diposit['SUM(amount)'] + $receive['SUM(amount)']) - $send['SUM(amount)'];

    if($balence <= 0)
    {
        echo "You don't have enough money on your account. Please diposit money then try again. Thank you!";
    }
    
    // if($balence <= 0)
    // {
    //     header("Location: ../account.php?warning=$mess1");
    // }
    // else
    // {
    //    if($balence >= $txtAmount )
    //    {
    //         $sqlData = "INSERT INTO `tb_moneysentandreceived`(`date`, `amount`, `senderId`, `receiverId`, `purpose`, `TransectionType`) VALUES ('$toDate','$txtAmount','$Sendid','$receivedId','$purpose','$transectionType')";
    //         $sqlResult = mysqli_query($conn, $sqlData);
    //         header("Location: ../account.php?success=$mess");
    //    }
    //    elseif($balence < $txtAmount)
    //    {
    //         header("Location: ../account.php?warning=$mess3");
    //    }
    //    else
    //    {
    //         header("Location: ../account.php?error=$mess3");
    //    }
    // }
}

?>