<?php 

    include 'dbconfig.php';
    session_start();

    $mess1 = "You don't have enough money on your account. Please diposit money then try again. Thank you!";
    $mess3 = "You enter more then your balance. Thank you!";
    $mess = "Money Transection Successfully.";
    $mess2 = "You can not select destination account. Please select account, where you went to send money.";
    $mess4 = "Your selectd destination account is your main account. This transection not possible. Please select another account, where you went to send money. Thanks!";
    $emptyGroup = "Please fill up the all and try again!.";
    $success = "Data save successfully.";
    $warning = "Group are not selected. Please select group & try again. Thanks!";

    if(isset($_GET['btnSend']))
    {
        $sourceId = "".$_SESSION['id'];
        $destinationId = $_GET['cbxEmployee'];
        $txtAmount = $_GET['txtAmount'];
        $purpose = $_GET['txtPurpose'];
        $toDate = date("Y/m/d");

        if(empty($destinationId))
        {        
            header("Location: ../account.php?warning=$mess2");
            exit();
        }

        if($sourceId == $destinationId)
        {
            header("Location: ../account.php?error=$mess4");
            exit();
        }

        $sqlSendAmount = "SELECT SUM(amount) FROM `ac_moneysentandreceived` WHERE sourceId = '$sourceId' AND t_type_source = 1";
        $sqlSendAmountResult = mysqli_query($conn, $sqlSendAmount);

        $sqlReceived = "SELECT SUM(amount) FROM `ac_moneysentandreceived` WHERE destinationId = '$sourceId' AND t_type_destination = 2";
        $sqlReceivedResult = mysqli_query($conn, $sqlReceived);

        $sqlDiposit = "SELECT SUM(amount) FROM `ac_moneysentandreceived` WHERE destinationId = '$sourceId' AND t_type_destination = 3";
        $sqlDipositResult = mysqli_query($conn, $sqlDiposit);

        $send = mysqli_fetch_array($sqlSendAmountResult);
        $receive = mysqli_fetch_array($sqlReceivedResult);
        $diposit = mysqli_fetch_array($sqlDipositResult);

        $totalbalence = ($receive['SUM(amount)'] + $diposit['SUM(amount)']) - $send['SUM(amount)'];

        if($totalbalence <= 0)
        {        
            header("Location: ../account.php?error=$mess1");
        }
        elseif($totalbalence < $txtAmount)
        {
            header("Location: ../account.php?warning=$mess3");
        }
        else
        {
            $sqlData = "INSERT INTO `ac_moneysentandreceived`(`date`, `amount`, `sourceId`, `t_type_source`, `destinationId`, `t_type_destination`, `purpose`) VALUES ('$toDate','$txtAmount','$sourceId',1,'$destinationId',2,'$purpose')";
            $sqlResult = mysqli_query($conn, $sqlData);
            header("Location: ../account.php?success=$mess");
        }
    }

    if(isset($_GET['btnSubmit']))
    {
        $groupName = $_GET['txtGroup'];

        if(empty($groupName))
        {
            header("Location: ../account.php?warning=$emptyGroup");
            exit();
        }
        else
        {
            $sqlGroup = "INSERT INTO `ex_group`( `group_name`) VALUES ('$groupName')";
            $sqlGroupResult = mysqli_query($conn, $sqlGroup);
            header("Location: ../dailyExpenses.php?success=$success");
            exit();
        }
    }

    if(isset($_GET['btnSubSubmit']))
    {
        $groupId = $_GET['cbxGroup'];
        $subGroup = $_GET['txtSubGroup'];

        if(empty($groupId))
        {
            header("Location: ../dailyExpenses.php?success=$warning");
            exit();
        }
        elseif(empty($subGroup))
        {
            header("Location: ../account.php?warning=$emptyGroup");
            exit();
        }
        else
        {
            $sqlSubGroup = "INSERT INTO `ex_sub_group`(`group_id`, `sub_group_name`) VALUES ('$groupId','$subGroup')";
            $sqlSubGroupResult = mysqli_query($conn, $sqlSubGroup);
            header("Location: ../dailyExpenses.php?success=$success");
            exit();
        }
    }

?>