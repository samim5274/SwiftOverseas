<?php 
    include 'controller/dbconfig.php';
    include 'controller/session.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses-Swift Overseas</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/expensesFilter.css">
    <link rel="stylesheet" href="css/grid.css">

</head>
<body>

<?php 
    include 'dashboardmenu.php'; 
    $toDate = date("Y/m/d");

    $userId = "".$_SESSION['id'];
    $userName = "".$_SESSION['username'];

?>
<section id="top-section"> </section>
<div class="custom-alert" id="customAlert">
<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } if(isset($_GET['error'])) {?> <h2 class="error text-center"><?php echo $_GET['error']; ?></h2> <?php } 
      if(isset($_GET['warning'])) {?> <h2 class="warning text-center"><?php echo $_GET['warning']; ?></h2> <?php } ?>
</div>
<br>


<section id="daily-expenses" class="expenses">
    <h2 class="display-4 text-center">Group wise daily expenses filter</h2><hr>
    <div class="container ">
        <div class="row">
            <div class="span_1_of_1"><br>
                <form action="" method="GET" enctype="multipart/form-data">
                    <div class="row">
                        <div class="span_1_of_1">
                            <label for="Group">Group</label>
                            <select name="cbxGroup" class="form-control" id="Group">                        
                                <option selected disabled>Select Group</option>  
                                <?php 
                                    $sqlData = "SELECT * FROM `ex_group` ";
                                    $sqlResult = mysqli_query($conn, $sqlData);
                                    while($row = mysqli_fetch_array($sqlResult)){
                                ?>                      
                                <option value="<?php echo $row['id'];?>"><?php echo $row['group_name']; ?></option>
                                <?php } ?>                        
                            </select><br>
                        </div>
                        <div class="span_1_of_2">
                            <label for="start">Start Date</label><br>
                            <input name="dtpStart" type="date" max="<?=date('Y-m-d')?>"><br>
                        </div>
                        <div class="span_1_of_2">
                            <label for="end">End Date</label><br>
                            <input name="dtpEnd" type="date" max="<?=date('Y-m-d')?>"><br>
                        </div>                        
                        <div class="span_10_of_12">
                            <input type="submit" name="btnSearchExpenses" value="Search" class="button-30 mt-3 btnSubmit text-center">
                        </div>
                        <div class="span_2_of_12">
                            <a href="dailyExpenses.php" class="button-30 mt-3 btnSubmit text-center">Back</a>
                        </div>
                    </div>
                </form><br>
            </div>
            <div class="span_1_of_1 ">
                <div class="overflow-auto">       
                    <table class="table table-bordered text-center ">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Date</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Name</th>
                                <th scope="col">Sub-group</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        if(isset($_GET['btnSearchExpenses']))
                        {
                            $i = 1;
                            $dtpStart = $_GET['dtpStart'];
                            $dtpEnd = $_GET['dtpEnd'];
                            $cbxGroup = $_GET['cbxGroup'] ?? '0';
                            
                            if($dtpStart == "" || $dtpEnd == "" || $cbxGroup == ""){
                                echo "<script>alert('Please Select duration date. Thank you!')</script>";
                            }

                            $sqlData = "SELECT * FROM `ex_daily_expenses` WHERE  group_Id = '$cbxGroup' AND date BETWEEN '$dtpStart' AND '$dtpEnd'  ";
                            $sqlResult = mysqli_query($conn, $sqlData);
                            while($row = mysqli_fetch_array($sqlResult)){?>
                            <tr>
                                <td><?php echo  $i; ?></td>   
                                <?php $costId = $row['id']; ?>   
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['invoice']; ?></td>
                                <?php
                                    $receiverId = $row['receiverId'];
                                    $sqlData1 = "SELECT * FROM `tb_employee_details` WHERE id = '$receiverId' ";
                                    $sqlResult1 = mysqli_query($conn, $sqlData1);
                                    while($row1 = mysqli_fetch_array($sqlResult1)){?>
                                        <td><?php echo  $row1['firstName']." ".$row1['lastName']; ?></td>
                                        <?php    }
                                ?>
                                <?php
                                     $subGroup = $row['sub_group_id'];
                                    $sqlData2 = "SELECT * FROM `ex_sub_group` WHERE id = '$subGroup' ";
                                    $sqlResult2 = mysqli_query($conn, $sqlData2);
                                    while($row2 = mysqli_fetch_array($sqlResult2)){?>
                                        <td><?php echo  $row2['sub_group_name']; ?></td>
                                <?php      }
                                   ?>
                                <td><?php echo $row['amount']; ?></td>
                            </tr>
                            <?php $i++; } } ?>
                        </tbody>
                    </table>
                </div>
                <?php 
                if(isset($_GET['btnSearchExpenses']))
                {
                    $sqlData = "SELECT SUM(amount) FROM `ex_daily_expenses` WHERE date BETWEEN '$dtpStart' AND '$dtpEnd' ";
                    $sqlResult = mysqli_query($conn, $sqlData);
                    $total = 0;
                    while($row = mysqli_fetch_array($sqlResult)){
                        $total = $row['SUM(amount)'];
                    } ?>
                    <h5>Total Cost: <?= $total;?>.00/-</h5> <?php } ?>
            </div>
        </div>
    </div>
</section>



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
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("somedate")[0].setAttribute('min', today);
</script>
</body>
</html>