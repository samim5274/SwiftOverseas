<?php 
    include 'dbconfig.php';
    include 'session.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account-Swift Overseas</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

</head>
<body>

<?php 
    $toDate = date("Y/m/d");

    $userId = "".$_SESSION['id'];
    $userName = "".$_SESSION['username'];

    $i=1;
    $sqlDatam = "SELECT * FROM `ac_moneysentandreceived` WHERE date = '$toDate' AND sourceId = '$userId' ORDER BY id DESC";
    $sqlMResult = mysqli_query($conn, $sqlDatam);

    $sqlDataM2 = "SELECT * FROM `ac_moneysentandreceived` WHERE date = '$toDate' AND destinationId = '$userId' ORDER BY id DESC";
    $sqlMResult2 = mysqli_query($conn, $sqlDataM2);
    

    while($row = mysqli_fetch_array($sqlMResult))
    {
        echo "Sl: ". $i." </br>";
        echo "Date: ". $row['date']." </br>";
        echo "Amount: ".$row['amount']." /- </br>";
        echo "Sender: ".$row['sourceId']." /- </br>";
        echo "Debit: ".$row['t_type_source']." /- </br></br>";

        $i++;

        while($val = mysqli_fetch_array($sqlMResult2))
        {
            echo "Sl: ". $i." </br>";
            echo "Date: ". $val['date']." </br>";
            echo "Amount: ".$val['amount']." /- </br>";
            echo "Receiver: ".$val['destinationId']." /- </br>";
            echo "Credit: ".$val['t_type_destination']." /- </br></br>";
            $i++;
        }

    }
?>       




</body>
</html>