<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new account</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/createAccount.css">
    <link rel="stylesheet" href="css/grid.css">

</head>
<body>

<?php 
    include 'controller/dbconfig.php';
    include 'dashboardmenu.php'; 
?>

<section id="top-section"> </section><br>

<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } if(isset($_GET['error'])) {?> <h2 class="error text-center"><?php echo $_GET['error']; ?></h2> <?php }
?>
<br>
<section id="button-group">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group item-center">
                    <button href="#add-new-agency-section" class="btn btn-info text-light" data-bs-toggle="collapse">Add +</button>
                    <a href="dashboard"><button type="submit" class="btn btn-warning">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="add-new-agency-section"  class="collapse text-light">
    <div class="container box inner-shadow" >
        <h3 class="text-center mt-4">Add New Employee!</h3><div class="spinner-grow text-warning"></div>
        <form action="controller/createAccount.php" method="GET" enctype="multipart/form-data">                    
            <div class="row">
                <div class="span_1_of_2">
                    <label for="">Personal Information</label><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Full Name*</span>
                        <input type="text" name="fastname" class="form-control" required placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1" >
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon4">Phone</span>
                        <input type="number" name="txtphone" class="form-control" required placeholder="Phone" aria-label="Username" aria-describedby="basic-addon4">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon4">Date of Birth</span>
                        <input type="date" name="dtpDOB" class="form-control"  aria-label="Username" aria-describedby="basic-addon4">
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
                        <span class="input-group-text" id="basic-addon6">Address</span>
                        <input type="text" name="txtAddress" class="form-control" placeholder="Full Address" aria-label="Username" aria-describedby="basic-addon6">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Email</span>
                        <input type="email" name="txtEmail" class="form-control" placeholder="example@example.com" aria-label="Username" aria-describedby="basic-addon5" >
                    </div><hr>                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Personal No (NID)</span>
                        <input type="text" name="txtNID" class="form-control"  placeholder="Personal No" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Join Date</span>
                        <input type="date" name="dtpJDate" class="form-control" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Designation</span>
                        <input type="text" name="txtDesignation" class="form-control" aria-label="Username" placeholder="Designation" aria-describedby="basic-addon5" >
                    </div>                                      
                </div>
                <div class="span_1_of_2">
                    <label for="">Family Info</label><hr>                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Father's Name</span>
                        <input type="text" name="txtFatherName" class="form-control"  placeholder="Father's Name" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Mother's Name</span>
                        <input type="text" name="txtMotherName" class="form-control"  placeholder="Mother's Name" aria-label="Username" aria-describedby="basic-addon5" >
                    </div><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">Full Name</span>
                        <input type="text" name="txtEName" class="form-control" placeholder="Emergency Full Name" aria-label="Username" aria-describedby="basic-addon8">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">Emergency Relation</span>
                        <input type="text" name="txtERelation" class="form-control" placeholder="Emergency Relation" aria-label="Username" aria-describedby="basic-addon8">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">Emergency Phone</span>
                        <input type="number" name="txtEPhone" class="form-control" placeholder="Emergency Phone" aria-label="Username" aria-describedby="basic-addon8">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Emergency Address</span>
                        <input type="text" name="txtEAddress" class="form-control"  placeholder="Emergency Address" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Remark (Optional)</span>
                        <input type="text" name="txtRemark" class="form-control" placeholder="Remark's" aria-label="Username" aria-describedby="basic-addon5" >
                    </div><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Image</span>
                        <input type="file" name="txtImage" class="form-control" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <br>                   
                </div>
                <br>    <hr>   
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Username & Password*</span>
                    <input type="text" name="username" class="form-control" required placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" >
                    <input type="password" name="password" class="form-control" required placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" >
                </div>      
            </div><br>
            <button class="btn btn-info text-light mb-3" role="button" name="btnSubmit">Submite</button>
        </form>
    </div>
</section>

<section id="data-show-section" class="data-show">
    <div class="container box inner-shadow">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover text-light table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Phone</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sqlData = "SELECT * FROM tb_employee_details";
                            $SQLResult = mysqli_query($conn,$sqlData);
                            $sl = 1;
                            while($row = mysqli_fetch_array($SQLResult))
                            {?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $sl ?></th>
                                    <td><?php echo $row['firstName'].' '. $row['lastName'] ?></td>
                                    <?php $uid = $row['id'] ?>
                                    <td><?php echo $row['dob'];?></td>
                                    <td><?php echo '+880 '.$row['phone'] ?></td>
                                    <td class="text-center"><a href="createUserEdit.php?userid=<?php echo $uid; ?>">Edit</a></td>                                    
                                    <td class="text-center"><a href="createUserView.php?userid=<?php echo $uid; ?>">Profile</a></td>                                    
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
<script>
    function show1(){
        document.getElementById('div1').style.display ='none';
        }
    function show2(){
        document.getElementById('div1').style.display = 'block';
        }
        </script>
</body>
</html>