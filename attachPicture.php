<?php

include 'controller/dbconfig.php';

if(isset($_GET['userid'])) {
    $uid = $_GET['userid'];
}

if(isset($_POST['btnEdit']))
{
    $fname = $_POST['txtFname'];
    $lname = $_POST['txtLname'];
    $phone = $_POST['txtphone'];
    $dob = $_POST['dob'];
    $address = $_POST['txtaddress'];
    $genderid = $_POST['cbxGender'];
    $email = $_POST['txtEmail'];
    $nid = $_POST['txtnid'];
    $passport = $_POST['txtpassportNumber'];
    $CountryCode = $_POST['txtcountryCode'];
    $passAuth = $_POST['PassportAuthority'];
    $pleaseBirth = $_POST['pleaseOfBirth'];
    $passIssuStart = $_POST['passIssueDateStart'];
    $passIssuEnd = $_POST['passIssueDateEnd'];
    $remark = $_POST['remark'];
    $father = $_POST['txtfatherName'];
    $mother = $_POST['txtmotherName'];
    $s_Name = $_POST['txtspouseName'];
    $s_Dob = $_POST['dtps_dob'];
    $s_address = $_POST['s_address'];
    $emgName = $_POST['txtemgName'];
    $emgPhone = $_POST['txtemgPhone'];
    $emgRelation = $_POST['txtemgRelation'];
    $emgAddress = $_POST['txtemdAddress'];
    $referid = $_POST['cbxRefer'];
    $pmMethod = $_POST['txtPMethod'];
    $pmbName = $_POST['txtPMBName'];
    $pmbAccount = $_POST['txtPMBAccount'];
    $contactAmount = $_POST['txtContAmount'];
    $advance = $_POST['txtadvance'];
    $destination = $_POST['txtdestination'];
    $duration = $_POST['txtvisaDurationTime'];
    $condi = "1";

    if(empty($referid))
    {
        $ex="You can not select reference. Your need to must be select reference!";
        header("Location: addClinet.php?error=$ex");
    }

    $sqlDataEdit = "UPDATE `tb_clientlist` SET `fastname`='$fname',`lastname`='$lname',`phone`='$phone',`dob`='$dob',`genderid`='$genderid',`address`='$address',`email`='$email',`passportNumber`='$passport',`countryCode`='$CountryCode',`PassportAuthority`='$passAuth',`nid`='$nid',`pleaseOfBirth`='$pleaseBirth',`passIssueDateStart`='$passIssuStart',`passIssueDateEnd`='$passIssuEnd',`fatherName`='$father',`motherName`='$mother',`spouseName`='$s_Name',`s_dob`='$s_Dob',`s_address`='$s_address',`emgName`='$emgName',`emgRelation`='$emgRelation',`emdAddress`='$emgAddress',`referid`='$referid',`ContAmount`='$contactAmount',`advance`='$advance',`payMathod`='$pmMethod',`pmbName`='$pmbName',`pmbAccountNum`='$pmbAccount',`destination`='$destination',`visaDurationTime`='$duration',`condi`=' $condi',`remark`='$remark',`emgPhone`='$emgPhone' WHERE id = '$uid'";

    $sqlDataEditResult = mysqli_query($conn, $sqlDataEdit);
    $ex="Client edited successfully!";
    header("Location: addClinet.php?success=$ex");

}

if(isset($_POST['btnSubmit']))
{
    // own
    $img_name = $_FILES['my_img']['name'];
    $tem_name = $_FILES['my_img']['tmp_name'];
    //passport
    $img_name2 = $_FILES['my_img2']['name'];
    $tem_name2 = $_FILES['my_img2']['tmp_name'];
    //nid
    $img_name3 = $_FILES['my_img3']['name'];
    $tem_name3 = $_FILES['my_img3']['tmp_name'];
    //spouse
    $img_name4 = $_FILES['my_img4']['name'];
    $tem_name4 = $_FILES['my_img4']['tmp_name'];
    
    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
    $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
    $img_ex4 = pathinfo($img_name4, PATHINFO_EXTENSION);

    $img_ex_lc = strtolower($img_ex);
    $img_ex_lc2 = strtolower($img_ex2);
    $img_ex_lc3 = strtolower($img_ex3);
    $img_ex_lc4 = strtolower($img_ex4);

    $allow_exs = array("jpg","jped","png","webp");
    if(in_array($img_ex_lc,$allow_exs))
    {
        if(in_array($img_ex_lc2, $allow_exs))
        {
            if(in_array($img_ex_lc3, $allow_exs))
            {
                if(in_array($img_ex_lc4, $allow_exs))
                {
                    $img_new_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_new_name2 = uniqid("IMG-",true).'.'.$img_ex_lc2;
                    $img_new_name3 = uniqid("IMG-",true).'.'.$img_ex_lc3;
                    $img_new_name4 = uniqid("IMG-",true).'.'.$img_ex_lc4;
                    $img_up_path = "img/upload/".$img_new_name;
                    $img_up_path2 = "img/upload/".$img_new_name2;
                    $img_up_path3 = "img/upload/".$img_new_name3;
                    $img_up_path4 = "img/upload/".$img_new_name4;
                    move_uploaded_file($tem_name, $img_up_path);
                    move_uploaded_file($tem_name2, $img_up_path2);
                    move_uploaded_file($tem_name3, $img_up_path3);
                    move_uploaded_file($tem_name4, $img_up_path4);
            
                    $sqlData = "UPDATE `tb_clientlist` SET `pImg`='$img_new_name',`PassImg`='$img_new_name2',`nidImg`='$img_new_name3',`SnidImg`='$img_new_name4' WHERE id = '$uid'";
                    $sqlResult = mysqli_query($conn, $sqlData);
                    $ex="Photo save successfully!";
                    header("Location: addClinet.php?success=$ex");
                }
                else
                {
                    $ex="Extention not allowed!";
                    header("Location: addClinet.php?error=$ex");
                }
            }
            else
            {
                $ex="Extention not allowed!";
                header("Location: addClinet.php?error=$ex");
            }
        }
        else
        {
            $ex="Extention not allowed!";
            header("Location: addClinet.php?error=$ex");
        }
    }
    else
    {
        $ex="Extention not allowed!";
        header("Location: addClinet.php?error=$ex");
    }
    
}

if(isset($_POST['btnDelete']))
{
    $imgPimg = $_POST['imgPImg'];
    $imgPassimg = $_POST['imgPassImg'];
    $imgNid = $_POST['imgNid'];
    $imgS_Nid = $_POST['imgS_NID'];

    $sqlDelete = "DELETE FROM `tb_clientlist` WHERE id = $uid";
    $sqlDeleteResult = mysqli_query($conn,$sqlDelete);

    if($sqlDeleteResult)
    {
        unlink("img/upload/".$imgPimg);
        unlink("img/upload/".$imgPassimg);
        unlink("img/upload/".$imgNid);
        unlink("img/upload/".$imgS_Nid);

        $ex="Delete Client successfully.";
        header("Location: addClinet.php?success=$ex");
    }
    else
    {
        $ex="Delete Client un-successfully.";
        header("Location: addClinet.php?error=$ex");
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Clint List</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/attachFile.css">
    <link rel="stylesheet" href="css/grid.css">

</head>
<body>
    
<?php 
    include 'controller/dbconfig.php';
    //include 'dashboardmenu.php'; 
?>
<section id="top-section"> </section>

<?php if(isset($_GET['error'])) {?>
<h2 class="success text-center"><?php echo $_GET['error']; ?></h2> 
<?php } ?>
<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } ?>



<section id="client-edit-section" class="client-edit">
    <div class="container">   
        <h1 class="display-4 text-center">Client Information Edit</h1>  <p class="text-center text-warning">Note: Please fill up all input fields and try to edit all information.</p> <a href="addClinet.php"><button class="btn btn-outline-warning ">Back</button></a>  <hr>
        <?php
            $sqlFindData = "SELECT * FROM `tb_clientlist` WHERE id = '$uid'";
            $sqlFindResult = mysqli_query($conn, $sqlFindData);

            while($row = mysqli_fetch_assoc($sqlFindResult))
            {
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" name="txtFname" placeholder="First Name" class="form-control" required id="fname" value="<?php echo $row['fastname'] ?>" ><br>

                    <label for="lname">Last Name</label>
                    <input type="text" name="txtLname" placeholder="Last Name" class="form-control" required id="lname" value="<?php echo $row['lastname'] ?>" ><br>

                    <label for="phon">Phone</label>
                    <input type="text" name="txtphone" placeholder="Phone" class="form-control" required id="phon" value="<?php echo $row['phone'] ?>" ><br>

                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob"  class="form-control" required id="dob" value="<?php echo $row['dob'] ?>" ><br>

                    <label for="address">Permanent Address</label>
                    <textarea type="text" name="txtaddress" placeholder="Permanent Address" class="form-control" id="Address" rows="5"><?php echo $row['address']; ?></textarea><br>

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
                    
                    <label for="Email">Email</label>
                    <input type="text" name="txtEmail" placeholder="Email" class="form-control" required id="Email" value="<?php echo $row['email'] ?>" ><br>

                    <hr>
                    
                    <label for="nid">NID</label>
                    <input type="number" name="txtnid" class="form-control" placeholder="NID" required id="nid" value="<?php echo $row['nid'] ?>" ><br>

                    <label for="passportNumber">Passport Number</label>
                    <input type="text" name="txtpassportNumber" class="form-control" required id="passportNumber" placeholder="Passport No" value="<?php echo $row['passportNumber'] ?>" ><br>
                    
                    <label for="countryCode">Country Code</label>
                    <input type="text" name="txtcountryCode" class="form-control" required id="countryCode" placeholder="Example: BGD" value="<?php echo $row['countryCode'] ?>" ><br>
                    
                    <label for="PassportAuthority">Passport Authority</label>
                    <input type="text" name="PassportAuthority" class="form-control" required id="PassportAuthority" placeholder="Example: DIP/DHAKA" value="<?php echo $row['PassportAuthority'] ?>" ><br>
                    
                    <label for="pleaseOfBirth">Please Of Birth</label>
                    <input type="text" name="pleaseOfBirth" class="form-control" required id="pleaseOfBirth" placeholder="Please Of Birth" value="<?php echo $row['pleaseOfBirth'] ?>" ><br>
                    
                    <label for="passIssueDateStart">Passport Issue Date Start</label>
                    <input type="date" name="passIssueDateStart" class="form-control" required id="passIssueDateStart" value="<?php echo $row['passIssueDateStart'] ?>" ><br>
                    
                    <label for="passIssueDateEnd">Passport Issue Date End</label>
                    <input type="date" name="passIssueDateEnd" class="form-control" required id="passIssueDateEnd" value="<?php echo $row['passIssueDateEnd'] ?>" ><br>
                    
                    <label for="remark">Remark</label>
                    <input type="text" name="remark" class="form-control" required id="remark" placeholder="Remarks" value="<?php echo $row['remark'] ?>" ><br>

                </div>
                <div class="col-md-6">
                    <label for="fatherName">Father's Name</label>
                    <input type="text" name="txtfatherName" class="form-control" placeholder="Father's Name" required id="fatherName" value="<?php echo $row['fatherName'] ?>" ><br>
                    
                    <label for="motherName">Mother's Name</label>
                    <input type="text" name="txtmotherName" class="form-control" placeholder="Mother's Name" required id="motherName" value="<?php echo $row['motherName'] ?>" ><br>
                    
                    <label for="spouseName">Spouse Name (if required)</label>
                    <input type="text" name="txtspouseName" class="form-control" id="spouseName" placeholder="Spouse Name" value="<?php echo $row['spouseName'] ?>" ><br>
                    
                    <label for="s_dob">Spouse Date of Birth</label>
                    <input type="date" name="dtps_dob" class="form-control"  id="s_dob" value="<?php echo $row['s_dob'] ?>" ><br>
                    
                    <label for="s_address">Spouse Address</label>
                    <textarea type="text" name="s_address" class="form-control" placeholder="Spouse Address" id="s_address" rows="3"><?php echo $row['s_address'] ?></textarea><br>
                    
                    <label for="emgName">Emergency Contact Name</label>
                    <input type="text" name="txtemgName" class="form-control" placeholder="Emergency Contact Name" required id="emgName" value="<?php echo $row['emgName'] ?>" ><br>

                    <label for="emgPhone">Emergency Phone</label>
                    <input type="number" name="txtemgPhone" class="form-control" placeholder="Emergency Contact Phone" required id="emgPhone" value="<?php echo $row['emgPhone'] ?>" ><br>
                    
                    <label for="emgRelation">Emergency Relation</label>
                    <input type="text" name="txtemgRelation" class="form-control" placeholder="Emergency Contact Realtion" placeholder="Emergency Contact Relation" required id="emgRelation" value="<?php echo $row['emgRelation'] ?>" ><br>
                    
                    <label for="emdAddress">Emergency Address</label>
                    <textarea type="text" name="txtemdAddress" class="form-control" placeholder="Emergency Contact Address" id="emdAddress" rows="3"><?php echo $row['emdAddress']; ?></textarea><br>
                    
                    <label for="referid ">Reference : </label> 
                    <select name="cbxRefer" required class="form-control mt-2" id="Reference">
                        <option selected value="0" disabled>Select Reference</option>
                        <?php                             
                            $sqlRef = "SELECT * FROM tb_agency_info";
                            $sqlRefResult = mysqli_query($conn,$sqlRef);
                            while($ros = mysqli_fetch_array($sqlRefResult))
                            { ?>
                                <option value="<?php echo $ros['id'] ?>"><?php echo $ros['fullname'] ?></option>
                        <?php } ?>
                    </select> <br>        
                    
                    <label for="payMathod">Payment Mathod</label><hr>
                        <input type="radio" name="txtPMethod" value="1" onclick="show1();" id="cash" checked/>
                        <label for="cash">Cash</label><br>
                        <input type="radio" name="txtPMethod" value="2" onclick="show2();" id="Bank"/>
                        <label for="Bank">Bank Transfer </label><br>
                        <div>
                            <div class="hide" id="div1"><br>
                                <div class="input-group mb-3 " >
                                    <input  type="text" placeholder="Payment Bank Name" name="txtPMBName" class="form-control" value="<?php echo $row['pmbName'] ?>" placeholder="Bank Name" >
                                    <input  type="text" placeholder="Account Number" name="txtPMBAccount" class="form-control" value="<?php echo $row['pmbAccountNum'] ?>" placeholder="Account Number" >
                                </div>  
                            </div>
                        </div>
                        <br>
                
                    <label for="ContAmount">Contact Amount</label>
                    <input type="number" name="txtContAmount" class="form-control" placeholder="Contact Amount" required id="ContAmount" value="<?php echo $row['ContAmount'] ?>" ><br>
                    
                    <label for="advance">Advance</label>
                    <input type="number" name="txtadvance" class="form-control" placeholder="Advance" required id="advance" value="<?php echo $row['advance'] ?>" ><br>
                    
                    <label for="destination">Destination Country</label>
                    <input type="text" name="txtdestination" class="form-control" placeholder="Destination" id="destination" value="<?php echo $row['destination'] ?>" ><br>

                    <label for="visaDurationTime">Visa Duration Time</label>
                    <input type="text" name="txtvisaDurationTime" class="form-control" placeholder="Example: 6 or 8 month" id="visaDurationTime" value="<?php echo $row['visaDurationTime'] ?>" ><br>                   
                    
                </div>
                <div class="col-md-12">
                    <?php 
                        $condi = $row['condi'];
                        if($condi == 1){
                    ?>
                    <input class="form-check-input" name="txtCondition" required checked type="checkbox" value="1" id="condi"> 
                    <label for="condi"> I accepted all <a href="#">Terms</a> & <a href="#">Conditions</a> Template.</label>
                    <?php } else { ?>
                        <input class="form-check-input" name="txtCondition" required type="checkbox" value="1" id="condi"> 
                        <label for="condi"> I accepted all <a href="#">Terms</a> & <a href="">Conditions</a> Template.</label>
                    <?php } ?>
                </div>

            </div> <br>
            <button name="btnEdit" class="btn btn-info text-light">Edit</button>
        </form><br>
        <?php } ?>       
    </div>
</section>



<section id="attach-file" class="edit_client">
    <div class="container"><h1 class="display-4 text-center">Attach Files (Photo)*</h1>  <p class="text-center text-warning">Note: Please fill up all input fields and try to edit all information.</p>    <hr>
        <div class="row">        
            <div class="span_1_of_2">
                <label for="">Show Images</label><hr>
                <?php
                    $sqlImg = "SELECT `pImg`, `PassImg`, `nidImg`, `SnidImg` FROM `tb_clientlist` WHERE id = $uid";
                    $sqlRes = mysqli_query($conn,$sqlImg);
                    while($row = mysqli_fetch_assoc($sqlRes)){
                ?>
                <div class="" >
                    <?php
                        if(!empty($row['pImg']))
                        {?>
                            <img src="img/upload/<?php echo $row['pImg']; ?>" class="card-img-top" alt="Photo Not Founded...">
                            <?php    } else { ?>
                            <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            <?php    }  

                        if(!empty($row['PassImg']))
                        {?>
                            <img src="img/upload/<?php echo $row['PassImg']; ?>" class="card-img-top" alt="Photo Not Founded...">
                            <?php    } else { ?>
                            <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            <?php    }  
                        
                        if(!empty($row['nidImg']))
                            {?>
                            <img src="img/upload/<?php echo $row['nidImg']; ?>" class="card-img-top" alt="Photo Not Founded...">
                            <?php    } else { ?>
                            <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            <?php    } 

                        if(!empty($row['SnidImg']))
                        {?>
                            <img src="img/upload/<?php echo $row['SnidImg']; ?>" class="card-img-top" alt="Photo Not Founded...">
                            <?php    } else { ?>
                            <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                            <?php    }   
                    ?>
                    
                </div>
                <?php } ?>
            </div>
            <div class="span_1_of_2">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">File Attachment Details</label><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Own Image*</span>
                        <input type="file" name="my_img" class="form-control" required aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Passport First Page Picture</span>
                        <input type="file" name="my_img2" class="form-control" required aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">NID</span>
                        <input type="file"  name="my_img3" class="form-control" required aria-label="Username" aria-describedby="basic-addon5" >
                    </div>              
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Spouse's NID</span>
                        <input type="file"  name="my_img4" class="form-control" required aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <input type="submit" name="btnSubmit" value="Update" class="btn btn-info btn-center text-light">
                </form>           
            </div>  
        </div>
    </div>
</section>
<hr>

<a href="addClinet.php"><button class="btn btn-sm btn-warning">Back</button></a> <br><br>

<form action="" method="POST" enctype="multipart/form-data">
    <?php
        $sqlImg = "SELECT * FROM `tb_clientlist` WHERE id = $uid";
        $sqlRes = mysqli_query($conn,$sqlImg);
        while($row = mysqli_fetch_assoc($sqlRes)){
    ?>
    <input type="hidden" name="idDelete" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="imgPImg" value="<?php echo $row['pImg']; ?>"> 
    <input type="hidden" name="imgPassImg" value="<?php echo $row['PassImg']; ?>"> 
    <input type="hidden" name="imgNid" value="<?php echo $row['nidImg']; ?>"> 
    <input type="hidden" name="imgS_NID" value="<?php echo $row['SnidImg']; ?>">     
    <?php } ?>

    <input type="submit" name="btnDelete" value="Delete" onclick="window.confirm()" class="btn btn-outline-danger btn-center text-light"><br>

    <input type="submit" name="" value="Delete" onclick="window.confirm()" class="btn btn-outline-danger btn-center text-light"><br>

</form>

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