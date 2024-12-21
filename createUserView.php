<?php
include 'controller/dbconfig.php';
include 'controller/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/createAccountEdit.css">
    <link rel="stylesheet" href="css/grid.css">

</head>
<body>

<?php 
    include 'dashboardmenu.php'; 
    $uid = $_GET['userid'];
?>
<section id="top-section"> </section><br>

<section id="stacff-edit-section" class="edit-staff">
    <div class="container inner-shadow">
        <div class="row m-4">
            <?php             
                $sqlData = "SELECT * FROM `tb_employee_details` WHERE id = '$uid'";
                $sqlResult = mysqli_query($conn, $sqlData);
                while($row = mysqli_fetch_array($sqlResult)){
            ?>
            <div class="span_1_of_3"> 
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" height="150px" src="img/staff/<?php echo $row['image']; ?>" alt="image not found...">
                <!-- <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"> -->
                <br>
                </div>
            </div>
            
            <div class="span_1_of_2 mt-4 pt-4">
                <h1 class="display-1"><?php echo $row['firstName']." ".$row['lastName']; ?></h1> 
                <h4 class="lead"><?php echo $row['designation']; ?></h4>
            </div>
            <div class="span_1_of_2">   
                <label for="name" class="labels">Date of Birth</label> 
                <input type="date" class="form-control" value="<?php echo $row['dob']; ?>"><br>  
                <label for="name" class="labels">Gendere</label>
                <input type="text" class="form-control" value="<?php  $gid = $row['genderid']; if($gid == 1){ echo "Male"; } elseif($gid == 2){echo "Female";}else {echo "Other's";} ?>"><br>     
                <label for="name" class="labels">Phone</label><input type="number" class="form-control" placeholder="Phone" value="<?php echo "0".$row['phone']; ?>"><br>
                <label for="name" class="labels">NID</label>
                <input type="text" class="form-control" placeholder="NID" value="<?php echo $row['nid']; ?>"><br>
                <label for="name" class="labels">Email</label>
                <input type="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>"><br>
                <label for="Remark">Address</label>
                    <textarea class="form-control" name="txtAddress" id="Remark" rows="3" placeholder="Enter your Address"><?php echo $row['address']; ?></textarea><br>
            </div>  
            <div class="span_1_of_2">                 
                <label for="name" class="labels">Father's Name</label>
                <input type="text" class="form-control" placeholder="Father's Name" value="<?php echo $row['fatherName']; ?>"><br>
                <label for="name" class="labels">Mother's Name</label>
                <input type="text" class="form-control" placeholder="Mother's Name" value="<?php echo $row['motherName']; ?>"><br>
                <label for="name" class="labels">Emergency Contact</label>
                <input type="text" class="form-control" placeholder="Emergency" value="<?php echo $row['emgName']; ?>"><br>
                <label for="name" class="labels">Emg. Phone</label>
                <input type="text" class="form-control" placeholder="Emg. Phone" value="<?php echo "+880 ".$row['emgPhone']; ?>"><br>
                <label for="name" class="labels">Emg. Relation</label>
                <input type="text" class="form-control" placeholder="Emg. Relation" value="<?php echo $row['emgRelation']; ?>"><br>
                <label for="name" class="labels">Emg. Address</label>
                <textarea class="form-control" name="txtAddress" id="Remark" rows="3" placeholder="Enter your Address"><?php echo $row['emgAddress']; ?></textarea><br>                
            </div>    
            <label for="name" class="labels">Username (username cann't change)*</label>
                <input type="text" class="form-control mb-4" disabled placeholder="username" value="<?php echo $row['username']; ?>"><br>
            <?php } ?>
            <a href="createAccount.php" class="btn my-4">Back</a></span>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>