<?php 
    include 'controller/dbconfig.php';
    include 'controller/session.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account-Swift Overseas</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/grid.css">

</head>
<body>

<?php 

    include 'dashboardmenu.php'; 
    $toDate = date("Y/m/d");

    $userId = "".$_SESSION['id'];
    $userName = "".$_SESSION['username'];

    $sqlSendAmount = "SELECT SUM(amount) FROM `ac_moneysentandreceived` WHERE sourceId = '$userId' AND t_type_source = 1";
    $sqlSendAmountResult = mysqli_query($conn, $sqlSendAmount);

    $sqlReceived = "SELECT SUM(amount) FROM `ac_moneysentandreceived` WHERE destinationId = '$userId' AND t_type_destination = 2";
    $sqlReceivedResult = mysqli_query($conn, $sqlReceived);

    $sqlDiposit = "SELECT SUM(amount) FROM `ac_moneysentandreceived` WHERE destinationId = '$userId' AND t_type_destination = 3";
    $sqlDipositResult = mysqli_query($conn, $sqlDiposit);

    $send = mysqli_fetch_array($sqlSendAmountResult);
    $receive = mysqli_fetch_array($sqlReceivedResult);
    $diposit = mysqli_fetch_array($sqlDipositResult);

    $totalbalence = ($receive['SUM(amount)'] + $diposit['SUM(amount)']) - $send['SUM(amount)'];

?>
<section id="top-section"> </section>

<div class="custom-alert" id="customAlert">
<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } if(isset($_GET['error'])) {?> <h2 class="error text-center"><?php echo $_GET['error']; ?></h2> <?php } 
      if(isset($_GET['warning'])) {?> <h2 class="warning text-center"><?php echo $_GET['warning']; ?></h2> <?php } ?>
</div>
<br>

<!--====================================== send money section====================================================== -->

<section id="send-moneny-secion" class="send-moneny">
    <div class="container">
        <div class="row">
            <h3 class="text-center display-4 mb-4">Send Money</h3>
            <p class="lead">Account Balence: <?php echo $totalbalence."/-"; ?></p>            
            <div class="span_1_of_2">
                <form action="controller/account.php" method="GET" enctype="multipart/form-data">
                    <select name="cbxEmployee" class="form-control" id="designation">                        
                        <option selected disabled>Select Receiver Name</option>  
                        <?php 
                            $sqlData = "SELECT * FROM `tb_employee_details` ";
                            $sqlResult = mysqli_query($conn, $sqlData);
                            while($row = mysqli_fetch_array($sqlResult)){
                        ?>                      
                        <option value="<?php echo $row['id'];?>"><?php echo $row['firstName'].' '.$row['lastName']; ?></option>
                        <?php } ?>                        
                    </select>
                    <div class="form-group">
                        <label for="ammount">Enter Total Amount *</label>
                        <input type="number" name="txtAmount" required class="form-control" id="ammount" value="10" placeholder="Enter your amount">
                    </div>
                    <div class="form-group">
                        <label for="Remark">Purpose</label>
                        <textarea class="form-control" name="txtPurpose" required id="Remark" rows="3" placeholder="Enter your Remark">N/A</textarea>
                    </div>
                    <div class="text-center">
                        <button name="btnSend" type="submit" class="button-30 mt-3 btnSubmit">Send</button>                    
                    </div>
                </form>

                <div class="text-center">
                    <a href="#"><button name="btnOther" type="submit" class="button-30 mt-3">More</button></a>
                    <a href="dashboard.php"><button name="btnOther" type="submit" class="button-30 mt-3">Back</button></a>
                </div>

            </div>

            <div class="span_1_of_2 overflow-auto">
                <table class="table table-bordered text-light text-center">
                    <thead>
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Date</th>
                        <th scope="col">Reciver</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody><?php
                                $i=1;
                                $sqlDatam = "SELECT * FROM `ac_moneysentandreceived` WHERE date = '$toDate' AND sourceId = '$userId' OR destinationId = '$userId' ORDER BY id DESC";
                                $sqlMResult = mysqli_query($conn, $sqlDatam);
                                while($row = mysqli_fetch_array($sqlMResult)){
                                    $receive = $row['destinationId'];
                            ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row['date']; ?></td>
                            <?php 
                                $receive = $row['destinationId']; 
                                $sendId = $row['sourceId']; 
                                $sqlFindReceiver = "SELECT * FROM `tb_employee_details` WHERE id = '$receive'";
                                $sqlFindReceiverResult = mysqli_query($conn, $sqlFindReceiver);
                                while($rows = mysqli_fetch_array($sqlFindReceiverResult)){?>
                                    <td><?php echo $rows['firstName'].' '.$rows['lastName']; ?></td>
                            <?php    }   ?>                            
                            <td><?php echo $amount = $row['amount']; ?>/-</td> 
                            
                            <?php
                                if($receive == $userId)
                                {?>
                                    <td>Credit</td> 
                                <?php }                                 
                                else
                                {?>
                                    <td>Debit</td> 
                                <?php }
                            ?>                                         
                                                      
                        </tr>                        
                        <?php $i++; } ?>
                    </tbody>
                </table>                 
            </div>            
        </div>
    </div>
</section>
<br>
<hr>
<!-- 
<?php
    $toDate = date("Y/m/d");

    $userId = "".$_SESSION['id'];
    $userName = "".$_SESSION['username'];

    $i=1;
    $sqlDatam = "SELECT * FROM `ac_moneysentandreceived` WHERE date = '$toDate' AND sourceId = '$userId' OR destinationId = '$userId' ORDER BY id DESC";
    $sqlMResult = mysqli_query($conn, $sqlDatam);

    while($row = mysqli_fetch_array($sqlMResult))
    { 
        $receive = $row['destinationId'];

        echo "Amount: ".$row['amount']."</br>";
        echo "From: ".$row['sourceId']."</br>";
        echo "To: ".$row['destinationId']."</br>";

        if($receive == $userId)
        {
            echo "Credit Balence.</br></br>";
        }
        else
        {
            echo "Debit Balence.</br></br>";
        }
    }
?>    -->



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    window.onload = function() {
      const alertBox = document.getElementById('customAlert');
      alertBox.style.display = 'block';

      setTimeout(() => {
        alertBox.style.display = 'none';
      }, 5000);
    };
  </script>
</body>
</html>