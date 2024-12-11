<?php 

include 'dbconfig.php';



if(isset($_GET['btnSend']))
{
    $receivedId = $_GET['cbxEmployee'];
    $txtAmount = $_GET['txtAmount'];
    $purpose = $_GET['txtPurpose'];
    $toDate = date("Y/m/d");
    if(isset($_GET['id']))
    {
        $Sendid = $_GET['id'];
    }

    echo "sender id: ".$Sendid;
    echo "/- Receiver id: ".$receivedId;
    echo "/- Amount: ".$txtAmount;
    echo "/- Purpose: ".$purpose;
    echo "/- Date: ".$toDate;
}

?>