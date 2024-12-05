<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Clients</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/addNewClients.css">
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


<section id="add-new-agency-section" class="">
    <div class="container">
        <h3 class="text-center">All Clients List</h3>
        <form action="controller/AddNewClient.php" method="GET" enctype="multipart/form-data">                    
            <div class="row">
                <div class="span_1_of_2">
                    <label for="">Personal Information</label><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Full Name*</span>
                        <input type="text" name="fastname" class="form-control" required placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1" >
                        <input type="text" name="lastname" class="form-control" required placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1" >
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
                    </div><br>
                    <label for="">Passport Information</label><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Passport Number</span>
                        <input type="text" name="txtPassportNum" class="form-control"  placeholder="Passport Number" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Country Code as Passport</span>
                        <input type="text" name="txtCountryCode" class="form-control"  placeholder="Example: BGD" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Passport Authority</span>
                        <input type="text" name="txtPassAuthor" class="form-control"  placeholder="Example: DIP/DHAKA" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Personal No (NID)</span>
                        <input type="text" name="txtPersonalNum" class="form-control"  placeholder="Personal No" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Please of Birth</span>
                        <input type="text" name="txtPleaseOfBirth" class="form-control"  placeholder="Please of Birth" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Passport Issue Date Start</span>
                        <input type="date" name="dtpPIssueDateS" class="form-control"   aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon5">Passport Issue Date End</span>
                        <input type="date" name="dtpPIssueDateE" class="form-control"   aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Remark (Optional)</span>
                        <input type="text" name="txtRemark" class="form-control" placeholder="Remark's" aria-label="Username" aria-describedby="basic-addon5" >
                    </div> 
                    <div class="form-check mb-3">
                        <input class="form-check-input" name="txtcondition" type="checkbox" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            <p class="lead">I accept all trams and condition and enforceability of terms and conditions is especially crucial for software as a service (SaaS) companies because they routinely collect detailed personal information from users. A terms and conditions agreement must set out the rules and regulations as to how a user can use the application without abusing it.</p>
                            </label>
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
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">Spouse's Name</span>
                        <input type="text" name="txtSpouse" class="form-control" placeholder="Spouse Name" aria-label="Username" aria-describedby="basic-addon8">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">Spouse's Date of Birth</span>
                        <input type="date" name="txtS_DOB" class="form-control" aria-label="Username" aria-describedby="basic-addon8">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Spouse's Address</span>
                        <input type="text" name="txtSAddress" class="form-control"  placeholder="Spouse's Address" aria-label="Username" aria-describedby="basic-addon5" >
                    </div><br>
                    <label for="">Emergency contact</label><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">Full Name</span>
                        <input type="text" name="txtEName" class="form-control" placeholder="Emergency Full Name" aria-label="Username" aria-describedby="basic-addon8">
                        
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon8">Emergency Relation</span>
                        <input type="text" name="txtERelation" class="form-control" placeholder="Emergency Relation" aria-label="Username" aria-describedby="basic-addon8">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Emergency Address</span>
                        <input type="text" name="txtEAddress" class="form-control"  placeholder="Emergency Address" aria-label="Username" aria-describedby="basic-addon5" >
                    </div><br>
                    <label for="">Reference & Account</label><hr>  
                    <div class="input-group mb-3">
                        <?php
                            $sqlData = "SELECT * FROM tb_agency_info";
                            $SQLResult = mysqli_query($conn,$sqlData);
                            $sl = 1;
                            ?>
                        <select name="cbxRefer" class="form-control mt-2" id="Reference">
                            <option selected disabled>Select Reference</option>
                            <?php 
                            while($row = mysqli_fetch_array($SQLResult))
                            {?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['fullname'] ?></option>
                            <?php  $sl++;  }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Contract Amount</span>
                        <input type="number" name="txtCAmount" class="form-control"  placeholder="Contract Amount" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Advance</span>
                        <input type="number" name="txtAdvance" class="form-control"  placeholder="Advance" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>   
                    <div>
                        <input type="radio" name="txtPMethod" value="1" onclick="show1();" id="cash" checked/>
                        <label for="cash">Cash</label><br>
                        <input type="radio" name="txtPMethod" value="2" onclick="show2();" id="Bank"/>
                        <label for="Bank">Bank Transfer </label><br>

                        <div class="hide" id="div1"><br>
                            <div class="input-group mb-3 " >
                                <input  type="text" name="txtPMBName" class="form-control"  placeholder="Bank Name" aria-label="Username" aria-describedby="basic-addon5" >
                                <input  type="text" name="txtPMBAccount" class="form-control"  placeholder="Account Number" aria-label="Username" aria-describedby="basic-addon5" >
                            </div>  
                        </div>
                    </div>                    
                    <br>
                    <label for="">Country Details</label><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Destination Country</span>
                        <input type="text" name="txtDestinationCountry" class="form-control" placeholder="Destination Country" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Visa Duration time</span>
                        <input type="text" name="txtVisaDuration" class="form-control" placeholder="Example: 3 or 6 month" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                </div>
                <br>                
            </div>
            <button class="btn btn-info text-light mb-3" role="button" name="btnSubmit">Submite</button>
        </form>
        <a href="dashboard"><button type="submit" class="btn btn-warning">Back</button></a>
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
                            <th scope="col">Name</th>
                            <th scope="col">Please Of Birth</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Remark</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sqlData = "SELECT * FROM tb_clientlist";
                            $SQLResult = mysqli_query($conn,$sqlData);
                            $sl = 1;
                            while($row = mysqli_fetch_array($SQLResult))
                            {?>
                                <tr>
                                    <th class="text-center" scope="row"><?php echo $sl ?></th>
                                    <td><?php echo $row['fastname'].' '. $row['lastname'] ?></td>
                                    <?php $uid = $row['id'] ?>
                                    <td><?php echo $row['pleaseOfBirth'];?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['remark'] ?></td>
                                    <td class="text-center"><a href="editClient.php?userid=<?php echo $uid; ?>"><button class="btn btn-secondary text-light">Edit</button></a></td>                                    
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