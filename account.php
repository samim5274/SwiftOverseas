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
    include 'controller/dbconfig.php';
    include 'dashboardmenu.php'; 
?>
<section id="top-section"> </section>

<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } if(isset($_GET['error'])) {?> <h2 class="error text-center"><?php echo $_GET['error']; ?></h2> <?php }
?>
<br>


<section id="daily-expenseas" class="daily-expenseas">
    <div class="container">
        <div class="row">
            <h3 class="text-center display-4 mb-4">Daily Expenses</h3>            
            <div class="span_1_of_2">
                <form action="account.php" method="GET" enctype="multipart/form-data">
                    <select name="cbxEmployee" class="form-control" id="designation">                        
                        <option selected disabled>Select Receiver Name</option>                        
                        <option value="">Samim Hossain</option>                        
                        <option value="">Samim Hossain</option>                        
                        <option value="">Samim Hossain</option>                        
                        <option value="">Samim Hossain</option>                        
                    </select>
                    <div class="form-group">
                        <label for="ammount">Enter Total Amount *</label>
                        <input type="number" name="txtAmount" class="form-control" id="ammount" placeholder="Enter your amount">
                    </div>
                    <div class="form-group">
                        <label for="Remark">Remark (Optional)</label>
                        <textarea class="form-control" name="txtRemark" id="Remark" rows="3" placeholder="Enter your Remark"></textarea>
                    </div>
                    <div class="text-center">
                    <button name="btnSend" type="submit" class="button-30 mt-3 btnSubmit">Send</button>                    
                    </div>
                </form>
                <div class="text-center">
                    <button name="btnOther" type="submit" class="button-30 mt-3">More</button>
                    <a href="dashboard.php"><button name="btnOther" type="submit" class="button-30 mt-3">Back</button></a>
                </div>
            </div>
            <div class="span_1_of_2"></div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>