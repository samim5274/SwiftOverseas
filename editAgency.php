<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Agency</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/addAgency.css">

</head>
<body>

<?php 
    include 'controller/dbconfig.php';
    include 'dashboardmenu.php'; 
    $uid = $_GET['userid'];

    $sqlData = "SELECT * FROM `tb_agency_info` WHERE id = $uid";
    $sqlResult = mysqli_query($conn, $sqlData);
?>
<section id="top-section"> </section>

<section id="add-new-agency-section">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Edit Clients for B2B</h3>
            <div class="col-md-12">

            <?php 
                foreach($sqlResult as $row)
                {?>
                    
                    <form action="controller/db_backend.php" method="GET">
                        <div class="input-group mb-3">
                            <label for="" name="uid"></label>
                            <input type="number" hidden name="uid" value="<?php echo $uid ?>">
                            <span class="input-group-text" id="basic-addon3">Name</span>
                            <input type="text" name="agencyName" class="form-control" required placeholder="Enter Your Agency Full Name" value="<?php echo $row['fullname']; ?>" aria-label="Username" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Owner Name</span>
                            <input type="text" name="fastname" class="form-control" required placeholder="First Name" value="<?php echo $row['firstname'];?>" aria-label="Username" aria-describedby="basic-addon1" >
                            <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="<?php echo $row['lastname']; ?>" aria-label="Username" aria-describedby="basic-addon1" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon4">Phone</span>
                            <input type="number" name="txtphone" class="form-control" required placeholder="Phone" value="<?php echo $row['phone'];?>" aria-label="Username" aria-describedby="basic-addon4">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon5">Email</span>
                            <input type="email" name="txtEmail" class="form-control" required placeholder="example@example.com" value="<?php echo $row['email'];?>" aria-label="Username" aria-describedby="basic-addon5" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon6">Address</span>
                            <input type="text" name="txtAddress" class="form-control" placeholder="Full Address" value="<?php echo $row['address'];?>" aria-label="Username" aria-describedby="basic-addon6">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon8">RM</span>
                            <input type="text" name="txtRM" class="form-control" placeholder="RM Number" aria-label="Username" value="<?php echo $row['rm'];?>" aria-describedby="basic-addon8">
                        </div>
                        <div>
                            <button class="btn btn-info text-light" role="button" name="btnEdit">Edit</button>                            
                        </div><br>                    
                        <div>
                            <button class="btn btn-danger text-light" role="button" name="btnDelete">Delete</button>
                        </div><br>  
                        </div>
                    </form>

            <?php     } 
            ?>

                <a href="addAgency"><button type="submit" class="btn btn-warning"> < Back</button></a>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>