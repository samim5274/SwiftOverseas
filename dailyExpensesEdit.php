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

    if(isset($_GET['costId'])) 
    {
        $cid = $_GET['costId'];
    }
?>
<section id="top-section"> </section>

<section id="daily-expenses" class="expenses">
    <h2 class="display-4 text-center">Daily Expenses</h2><hr>
    <div class="container ">
        <div class="row">
            <div class="span_1_of_1"><br>
            <?php
                $sqlData = "SELECT * FROM ex_daily_expenses WHERE id = $cid";
                $sqlResult = mysqli_query($conn, $sqlData);
                while($rows = mysqli_fetch_array($sqlResult)) { ?>

                <form action="controller/db_backend.php" method="GET" enctype="multipart/form-data">
                    <label for="subgroup">Sub-Group</label>
                    <select name="cbxSubGroup" id="subgroup" class="form-control">  
                        <option disabled>Select sub-group</option>  
                        <?php 
                            $subid = $rows['sub_group_id'];
                            $sqlData = "SELECT * FROM `ex_sub_group` WHERE id = $subid";
                            $sqlResult = mysqli_query($conn, $sqlData);
                            while($row = mysqli_fetch_array($sqlResult)){
                        ?>                      
                        <option selected value="<?php echo $row['id'];?>"><?php echo $row['sub_group_name']; ?></option>
                        <?php } ?>                        
                    </select><br>
                    <label for="expenser">Expenser</label>
                    <select name="cbxexpenser" class="form-control" id="expenser">                        
                        <option disabled>Select Expenser</option>  
                        <?php 
                            $empid = $rows['receiverId'];
                            $sqlData = "SELECT * FROM `tb_employee_details` WHERE id = '$empid'";
                            $sqlResult = mysqli_query($conn, $sqlData);
                            while($row = mysqli_fetch_array($sqlResult)){
                        ?>                      
                        <option selected value="<?php echo $row['id'];?>"><?php echo $row['firstName']." ".$row['lastName']; ?></option>
                        <?php } ?>                        
                    </select> <br>
                    <label for="expenser">Amount</label>
                    <input type="number" name="txtAmount" required class="form-control" id="expenser" placeholder="Enter amount" value="<?= $rows['amount'];?>"><br>
                    <label for="Purpose">Purpose</label><br>
                    <textarea name="txtPurpose" id="Purpose" style="width:100%;" rows="4"><?= $rows['purpose'];?></textarea><br>
                    <input type="submit" name="btnEditExpenses" value="Edit" class="button-30 mt-3 btnSubmit text-center">
                </form>
                <?php } ?>
                <a href="dailyExpenses.php"><input type="submit"  value="Back" class="button-30 mt-3 btnSubmit text-center"></a>
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