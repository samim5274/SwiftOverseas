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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/expenses.css">
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

<!--====================================== send money section====================================================== -->

<!-- <section id="expenses-secion" class="expenses">
    <div class="container">
        <div class="row">
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
                    <div class="text-center">
                        <button name="btnSend" type="submit" class="button-30 mt-3 btnSubmit">Send</button>                    
                    </div>
                </form>

                <div class="text-center">
                    <a href="#"><button name="btnOther" type="submit" class="button-30 mt-3">More</button></a>
                    <a href="dashboard.php"><button name="btnOther" type="submit" class="button-30 mt-3">Back</button></a>
                </div> 
            </div> 
            <div class="span_1_of_2">     
                <h3 class="text-center display-4 mb-4">Group</h3>
                <form action="controller/account.php" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Group">Group</label>
                        <input type="text" name="txtGroup" required class="form-control" id="Group" placeholder="Enter your group">
                    </div>
                    <div class="text-center">
                        <button name="btnSubmit" type="submit" class="button-30 mt-3 btnSubmit">Submit</button>                    
                    </div>
                </form>
            </div>   
            <div class="span_1_of_2"> 
                <h3 class="text-center display-4 mb-4">Sub-Group</h3>
                <form action="controller/account.php" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="SubGroup">Group</label>
                        <select name="cbxGroup" class="form-control" id="SubGroup">                        
                            <option selected disabled>Select Group</option>  
                            <?php 
                                $sqlData = "SELECT * FROM `ex_group` ";
                                $sqlResult = mysqli_query($conn, $sqlData);
                                while($row = mysqli_fetch_array($sqlResult)){
                            ?>                      
                            <option value="<?php echo $row['id'];?>"><?php echo $row['group_name']; ?></option>
                            <?php } ?>                        
                        </select> <br>

                        <label for="Group">Seb Group</label>
                        <input type="text" name="txtSubGroup" required class="form-control" id="Group" placeholder="Enter your sub group name">
                    </div>
                    <div class="text-center">
                        <button name="btnSubSubmit" type="submit" class="button-30 mt-3 btnSubmit">Submit</button>                    
                    </div>
                </form>
            </div>              
        </div>
    </div>
</section>
<br>
<hr>

<div class="container">
    <div class="row">
        <div class="span_1_of_2">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Group</th>
                        <th scope="col">Sub-Group</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i=1;
                        $sqlData = "SELECT * FROM `ex_sub_group` ";
                        $sqlResult = mysqli_query($conn, $sqlData);
                        while($row = mysqli_fetch_array($sqlResult)){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <?php 
                            $gpid = $row['group_id']; 
                            $sqlDataGp = "SELECT * FROM `ex_group` WHERE id = '$gpid' ";
                            $sqlResultGp = mysqli_query($conn, $sqlDataGp);
                            while($rowGp = mysqli_fetch_array($sqlResultGp)){?>
                                <td><?php echo $rowGp['group_name']; ?></td>
                        <?php }
                        ?>
                        
                        <td><?php echo $row['sub_group_name']; ?></td>
                        <td><a href="#" class="text-dark">Edit</a></td>
                    </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div> -->


<section id="daily-expenses" class="expenses">
    <h2 class="display-4 text-center">Daily Expenses</h2><hr>
    <div class="container ">
        <div class="row">
            <div class="span_1_of_2"><br>
                <form action="controller/expenses.php" method="GET" enctype="multipart/form-data">
                    <label for="subgroup">Sub-Group</label>
                    <select name="cbxSubGroup" id="subgroup" class="form-control">  
                        <option selected disabled>Select sub-group</option>  
                        <?php 
                            $sqlData = "SELECT * FROM `ex_sub_group` ";
                            $sqlResult = mysqli_query($conn, $sqlData);
                            while($row = mysqli_fetch_array($sqlResult)){
                        ?>                      
                        <option value="<?php echo $row['id'];?>"><?php echo $row['sub_group_name']; ?></option>
                        <?php } ?>                        
                    </select><br>
                    <label for="expenser">Expenser</label>
                    <select name="cbxexpenser" class="form-control" id="expenser">                        
                        <option selected disabled>Select Expenser</option>  
                        <?php 
                            $sqlData = "SELECT * FROM `tb_employee_details` ";
                            $sqlResult = mysqli_query($conn, $sqlData);
                            while($row = mysqli_fetch_array($sqlResult)){
                        ?>                      
                        <option value="<?php echo $row['id'];?>"><?php echo $row['firstName']." ".$row['lastName']; ?></option>
                        <?php } ?>                        
                    </select> <br>
                    <label for="expenser">Amount</label>
                    <input type="number" name="txtAmount" required class="form-control" id="expenser" placeholder="Enter amount"><br>
                    <label for="Purpose">Purpose</label><br>
                    <textarea class="form-control" name="txtPurpose" id="Purpose" style="width:100%;" rows="4" placeholder="Enter expenses purpose details."></textarea><br>
                    <input type="submit" name="btnSubmitExpenses" value="Save" class="button-30 mt-3 btnSubmit text-center">
                    <a href="dailyExpensesFiler.php" class="button-30 mt-3 btnSubmit text-center">Filter</a>
                </form>
            </div>
            <div class="span_1_of_2 ">
                <?php 
                    $sqlData = "SELECT SUM(amount) FROM `ex_daily_expenses` WHERE date = '$toDate' ";
                    $sqlResult = mysqli_query($conn, $sqlData);
                    $total = 0;
                    while($row = mysqli_fetch_array($sqlResult)){
                        $total = $row['SUM(amount)'];
                    }
                        ?>
                    <h5>Total Cost: <?= $total;?>/-</h5>
                <div class="overflow-auto">                    
                    <table class="table table-bordered text-center ">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Amount</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i=1;
                                $sqlData = "SELECT * FROM `ex_daily_expenses` WHERE date = '$toDate' ORDER BY id DESC";
                                $sqlResult = mysqli_query($conn, $sqlData);
                                while($row = mysqli_fetch_array($sqlResult)){
                            ?>
                            <tr>
                                <td><?php echo  $i; ?></td>   
                                <?php $costId = $row['id']; ?>   
                                <td><?php echo $row['invoice']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                <td><a href="dailyExpensesEdit.php?costId=<?= $costId; ?>" class="text-dark"><i style="color:rgb(61, 61, 61);" class="fa fa-edit"></i></a></td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
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
</script>
</body>
</html>