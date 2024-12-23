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

<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } if(isset($_GET['error'])) {?> <h2 class="error text-center"><?php echo $_GET['error']; ?></h2> <?php } 
      if(isset($_GET['warning'])) {?> <h2 class="warning text-center"><?php echo $_GET['warning']; ?></h2> <?php } ?>
<br>

<!--====================================== send money section====================================================== -->

<section id="send-moneny-secion" class="send-moneny">
    <div class="container">
        <div class="row">
            <!-- <div class="span_1_of_2">
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
            </div>  -->
            <div class="span_1_of_3">     
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
            <div class="span_1_of_3"> 
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




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>