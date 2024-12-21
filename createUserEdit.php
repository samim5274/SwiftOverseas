<?php

include 'controller/dbconfig.php';
include 'controller/session.php';

$uid = $_GET['userid'];

if(isset($_POST['btnEditStaff']))
{
    $fname = $_POST['txtFirstName'];
    $lname = $_POST['txtLastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['cbxGender'];
    $address = $_POST['txtaddress'];
    $phone = $_POST['txtphone'];
    $email = $_POST['txtemail'];
    $nid = $_POST['txtnid'];
    $designation = $_POST['txtDesignation'];
    $father = $_POST['txtfather'];
    $mother = $_POST['txtmother'];
    $emgName = $_POST['txtemgName'];
    $emgPhone = $_POST['txtemgPhone'];
    $emgRelation = $_POST['txtemgRelation'];
    $emgAddress = $_POST['txtemgAddress'];
    $joinDate = $_POST['dtpJoinDate'];
    $pass = $_POST['txtpassword'];
    $rePass = $_POST['txtRetyypePassword'];

    if($pass == $rePass)
    {
        $img_name = $_FILES['my_img']['name'];
        $tmp_name = $_FILES['my_img']['tmp_name'];
    
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    
        $img_ex_lc = strtolower($img_ex);
    
        $allow_exs = array("jpg","jped","png","webp");
    
        if(in_array($img_ex_lc, $allow_exs))
        {
            $img_new_name = uniqid("IMG-",true).'-'.$fname.'.'.$img_ex_lc;
            $img_up_path = "img/staff/".$img_new_name;
            move_uploaded_file($tmp_name, $img_up_path);

            $sqlUpData = "UPDATE `tb_employee_details` SET `firstName`='$fname',`lastName`='$lname',`dob`='$dob',`genderid`='$gender',`address`='$address',`phone`='$phone',`fatherName`='$father',`motherName`='$mother',`email`='$email',`nid`='$nid',`emgName`='$emgName',`emgPhone`='$emgPhone',`emgRelation`='$emgRelation',`emgAddress`='$emgAddress',`joinDate`='$joinDate',`password`='$rePass',`remark`='[value-21]',`image`='$img_new_name',`designation`='$designation' WHERE id = '$uid' ";
            $sqlUpResult = mysqli_query($conn,$sqlUpData);

            $ex="Employee details edited successfuly!";
            header("Location: createAccount.php?success=$ex");
        }
        else
        {
            $ex="Extention not allowed!";
            header("Location: createAccount.php?error=$ex");
        }
    }
    else
    {
        $ex="Password not match. Must be input your password and re-type password and try again. Thank you!";
        header("Location: createAccount.php?error=$ex");
    }   
}

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

</head>
<body>

<?php 
    include 'dashboardmenu.php'; 
?>
<section id="top-section"> </section><br>

<section id="staff-edit-section" class="edit-staff">
    <div class="container inner-shadow"><a href="createAccount.php" class="btn2 btn">Back</a>
        <div class="p-4 ">
            <div class="col-md-12">
            <?php          
            $sqlData = "SELECT * FROM `tb_employee_details` WHERE id = '$uid'";
            $sqlResult = mysqli_query($conn, $sqlData);
            while($row = mysqli_fetch_array($sqlResult))
            { ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <h2 class="text-center">Employee Details Edit</h2>
                    <hr>
                    <div class="col-md-6">
                        <input type="number" name="txtId" hidden class="form-control" id="cn" value="<?php echo $row['id']; ?>" >
                        <label for="cn">First name</label>
                        <input type="text" name="txtFirstName" class="form-control" id="cn" value="<?php echo $row['firstName']; ?>" ><br>
                        <label for="lastName">Last Name</label>
                        <input type="text" name="txtLastName" class="form-control" id="lastName" value="<?php echo $row['lastName']; ?>" ><br>
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" id="dob" value="<?php echo $row['dob']; ?>"><br>
                        <label for="gender">Gender</label>
                        <select name="cbxGender" class="form-control mt-2" id="Gender">
                            <option selected disabled>Select Gender</option>
                            <?php 
                                if($row['genderid'] == 1)
                                {?>
                                    <option selected value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other's</option>
                                <?php }
                                elseif($row['genderid'] == 2)
                                {?>
                                    <option  value="1">Male</option>        
                                    <option selected value="2">Female</option>
                                    <option value="3">Other's</option>
                                <?php }
                                else
                                {?>
                                    <option  value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option selected value="3">Other's</option>
                               <?php }
                            ?>
                        </select>
                        <br>
                        <label for="Address">Address</label>
                        <textarea type="text" name="txtaddress" class="form-control" id="Address" rows="5"><?php echo $row['address']; ?></textarea><br>
                        <label for="Phone">Phone</label>
                        <input type="number" name="txtphone" class="form-control" id="Phone" value="<?php echo $row['phone']; ?>" ><br>
                        <label for="email">Email</label>
                        <input type="text" name="txtemail" class="form-control" id="email" value="<?php echo $row['email']; ?>" ><br>
                        <label for="NID">NID</label>
                        <input type="number" name="txtnid" class="form-control" id="NID" value="<?php echo $row['nid']; ?>" ><br>
                        <label for="designation">Designation</label>
                        <input type="text" name="txtDesignation" class="form-control" id="designation" value="<?php echo $row['designation']; ?>" ><br>
                    </div>
                    <div class="col-md-6">
                        <label for="Father">Father's Name</label>
                        <input type="text" name="txtfather" class="form-control" id="Father" value="<?php echo $row['fatherName']; ?>"><br>
                        <label for="Mother">Mother's Name</label>
                        <input type="text" name="txtmother" class="form-control" id="Mother" value="<?php echo $row['motherName']; ?>" ><br>
                        <label for="emgName">Emergency Contact</label>
                        <input type="text" name="txtemgName" class="form-control" id="emgName" value="<?php echo $row['emgName']; ?>" ><br>
                        <label for="emgPhone">Emergency Phone</label>
                        <input type="number" name="txtemgPhone" class="form-control" id="emgPhone" value="<?php echo $row['emgPhone']; ?>" ><br>
                        <label for="emgRelation">Emergency Relation</label>
                        <input type="text" name="txtemgRelation" class="form-control" id="emgRelation" value="<?php echo $row['emgRelation']; ?>" ><br>
                        <label for="emgAddress">Emergency Address</label>
                        <textarea type="text" name="txtemgAddress" class="form-control" id="emgAddress" rows="4"><?php echo $row['emgAddress']; ?></textarea>
                        <br>
                        <label for="joinDate">Joining Date</label>
                        <input type="date" name="dtpJoinDate" class="form-control" id="joinDate" value="<?php echo $row['joinDate']; ?>" ><br>
                        <label for="username">Username</label>
                        <input type="text" name="txtUsername" disabled class="form-control" id="cc" value="<?php echo $row['username']." Note: (You can not changed username.)"; ?>" ><br>
                        <label for="password">Password</label>
                        <input type="password" name="txtpassword" class="form-control" id="password" value="<?php echo $row['password']; ?>" ><br>
                        <label for="password">Re-Type Password</label>
                        <input type="password" name="txtRetyypePassword" class="form-control" id="password" >
                    </div><br>
                        <label for="image">Image</label>
                        <input type="file" name="my_img" class="form-control" id="image" value="<?php echo $row['image']; ?>" >
                </div>                
                <br>
                <button type="submit" name="btnEditStaff" class="btn btn-info">Edit</button>
            </form>
            <?php } ?><br>
            <div class="row">
                <div class="col-md-6"><a href="createAccount.php" class="btn2 btn">Back</a></div>
                <div class="col-md-6"><a href="createAccount.php" class="btn btn-warning">Delete</a></div>
            </div>
            </div>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>