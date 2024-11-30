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
?>
<section id="top-section"> </section>

<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } ?>

<section id="add-new-agency-section">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Add New Clients for B2B</h3>
            <div class="col-md-12">
                <form action="controller/db_backend.php" method="GET">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Name</span>
                        <input type="text" name="agencyName" class="form-control" required placeholder="Enter Your Agency Full Name" aria-label="Username" aria-describedby="basic-addon3" value="Swift Overseas Tours & Travels">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Owner Name</span>
                        <input type="text" name="fastname" class="form-control" required placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1" value="Md Ashadul">
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1" value="Islam Asad">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon4">Phone</span>
                        <input type="number" name="txtphone" class="form-control" required placeholder="Phone" aria-label="Username" aria-describedby="basic-addon4" value="1324569874">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Email</span>
                        <input type="email" name="txtEmail" class="form-control" required placeholder="example@example.com" aria-label="Username" aria-describedby="basic-addon5" value="swiftoverseas@gmail.com">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon6">Address</span>
                        <input type="text" name="txtAddress" class="form-control" placeholder="Full Address" aria-label="Username" aria-describedby="basic-addon6" value="Uttara-03, Dhaka-1230">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">RM</span>
                        <input type="text" name="txtRM" class="form-control" placeholder="RM Number" aria-label="Username" aria-describedby="basic-addon8" value="DH6548">
                    </div>
                    <div>
                        <button class="btn btn-info text-light" role="button" name="btnSubmit">Submite</button>
                    </div><br>                    
                </div>
                </form>
                <a href="dashboard"><button type="submit" class="btn btn-warning">Back</button></a>
            </div>
        </div>
    </div>
</section>

<br><hr><br>

<section id="data-show-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Agency Name</th>
                            <th scope="col">Owner Name</th>
                            <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sqlData = "SELECT * FROM tb_agency_info";
                            $SQLResult = mysqli_query($conn,$sqlData);
                            $sl = 1;
                            while($row = mysqli_fetch_array($SQLResult))
                            {?>
                                <tr>
                                    <th scope="row"><?php echo $sl ?></th>
                                    <td><?php echo $row['fullname'] ?></td>
                                    <td><?php echo $row['firstname'].' '.$row['lastname'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                </tr>
                        <?php  $sl++;  }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>