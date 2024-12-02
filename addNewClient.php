<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Clients</title>
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
            <h3 class="text-center">All Clients List</h3>
            <div class="col-md-12">
                <form action="#" method="GET">                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Full Name</span>
                        <input type="text" name="fastname" class="form-control" required placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1" >
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon4">Phone</span>
                        <input type="number" name="txtphone" class="form-control" required placeholder="Phone" aria-label="Username" aria-describedby="basic-addon4">
                        <span class="input-group-text" id="basic-addon4">Date of Birth</span>
                        <input type="date" name="dtpDOB" class="form-control" required aria-label="Username" aria-describedby="basic-addon4">
                    </div>
                    <div class="input-group mb-3">
                        <select name="cbxGender" class="form-control mt-2" id="Gender">
                            <option selected disabled>Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other's</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Father's Name</span>
                        <input type="text" name="txtFatherName" class="form-control" required placeholder="Father's Name" aria-label="Username" aria-describedby="basic-addon5" >
                        <span class="input-group-text" id="basic-addon5">Mother's Name</span>
                        <input type="text" name="txtMotherName" class="form-control" required placeholder="Mother's Name" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon6">Address</span>
                        <input type="text" name="txtAddress" class="form-control" placeholder="Full Address" aria-label="Username" aria-describedby="basic-addon6">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Email</span>
                        <input type="email" name="txtEmail" class="form-control" required placeholder="example@example.com" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <span class="input-group-text mb-3" id="basic-addon8">Spouse's Details (if required)</span>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">Spouse's Name</span>
                        <input type="text" name="txtSpouse" class="form-control" placeholder="Spouse Name" aria-label="Username" aria-describedby="basic-addon8">
                        <span class="input-group-text" id="basic-addon8">Spouse's Date of Birth</span>
                        <input type="date" name="txtS_DOB" class="form-control" aria-label="Username" aria-describedby="basic-addon8">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Spouse's Address</span>
                        <input type="text" name="txtEmail" class="form-control" required placeholder="Spouse's Address" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <span class="input-group-text mb-3" id="basic-addon8">Emergency contact (required)*</span>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">Full Name</span>
                        <input type="text" name="txtEName" class="form-control" placeholder="Emergency Full Name" aria-label="Username" aria-describedby="basic-addon8">
                        <span class="input-group-text" id="basic-addon8">Emergency Relation</span>
                        <input type="text" name="txtERelation" class="form-control" placeholder="Emergency Relation" aria-label="Username" aria-describedby="basic-addon8">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Emergency Address</span>
                        <input type="text" name="txtEAddress" class="form-control" required placeholder="Emergency Address" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    
                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Passport Number</span>
                        <input type="text" name="txt" class="form-control" required placeholder="Passport Number" aria-label="Username" aria-describedby="basic-addon5" >
                        <span class="input-group-text" id="basic-addon5">Country Code as Passport</span>
                        <input type="text" name="txt" class="form-control" required placeholder="Example: BGD" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Passport Authority</span>
                        <input type="text" name="txt" class="form-control" required placeholder="Example: DIP/DHAKA" aria-label="Username" aria-describedby="basic-addon5" >
                        <span class="input-group-text" id="basic-addon5">Personal No</span>
                        <input type="text" name="txt" class="form-control" required placeholder="Personal No" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Please of Birth</span>
                        <input type="text" name="txt" class="form-control" required placeholder="Please of Birth" aria-label="Username" aria-describedby="basic-addon5" >
                        <span class="input-group-text" id="basic-addon5"></span>
                        <input type="text" name="txt" class="form-control" required placeholder="" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Passport Issue Date Start</span>
                        <input type="date" name="txt" class="form-control" required  aria-label="Username" aria-describedby="basic-addon5" >
                        <span class="input-group-text" id="basic-addon5">Passport Issue Date End</span>
                        <input type="date" name="txt" class="form-control" required  aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5"></span>
                        <input type="text" name="txt" class="form-control" required placeholder="" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5"></span>
                        <input type="text" name="txt" class="form-control" required placeholder="" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5"></span>
                        <input type="text" name="txt" class="form-control" required placeholder="" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5"></span>
                        <input type="text" name="txt" class="form-control" required placeholder="" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5"></span>
                        <input type="text" name="txt" class="form-control" required placeholder="" aria-label="Username" aria-describedby="basic-addon5" >
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
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Agency Name</th>
                            <th scope="col">Owner Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
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
                                    <th class="text-center" scope="row"><?php echo $sl ?></th>
                                    <td><?php echo $row['fullname'] ?></td>
                                    <?php $uid = $row['id'] ?>
                                    <td><?php echo $row['firstname'].' '.$row['lastname'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td class="text-center"><a href="editAgency.php?userid=<?php echo $uid; ?>"><button class="btn btn-secondary text-light">Edit</button></a></td>
                                    <td class="text-center"><a href="editAgency.php?userid=<?php echo $uid; ?>"><button class="btn btn-danger text-light" name="btnDelete">Delete</button></a></td>
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