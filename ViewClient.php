<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Clients list</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/ViewClients.css">

</head>
<body>

<?php 
    include 'controller/dbconfig.php';
    include 'dashboardmenu.php'; 
?>

<section id="top-section"> </section>

<?php

if(isset($_GET['userid'])) {
    $uid = $_GET['userid'];
}

$sqlData = "SELECT * FROM `tb_clientlist` WHERE id = ' $uid'";
$SQLResult = mysqli_query($conn, $sqlData);

while($row = mysqli_fetch_array($SQLResult))
{
    $lname = $row['lastname'];
    $fname = $row['fastname'];
    $phone = $row['phone'];
    $dob = $row['dob'];
    $gender = $row['genderid'];
    $address = $row['address'];
    $email = $row['email'];
    $passNum = $row['passportNumber'];
    $countryCode = $row['countryCode'];
    $passAuth = $row['PassportAuthority'];
    $nid = $row['nid'];
    $plaseBirth = $row['pleaseOfBirth'];
    $issueDateS = $row['passIssueDateStart'];
    $issueDateE = $row['passIssueDateEnd'];
    $faname = $row['fatherName'];
    $mName = $row['motherName'];
    $sname = $row['spouseName'];
    $s_dob = $row['s_dob'];
    $s_address = $row['s_address'];
    $emgName = $row['emgName'];
    $emgRelation = $row['emgRelation'];
    $emgAddress = $row['emdAddress'];
    $referid = $row['referid'];
    $contactAccmount = $row['ContAmount'];
    $advance = $row['advance'];
    $payMathod = $row['payMathod'];
    $pmbName = $row['pmbName'];
    $pmgAccountNum = $row['pmbAccountNum'];
    $destination = $row['destination'];
    $visaDuration = $row['visaDurationTime'];
    $pimg = $row['pImg'];
    $passImg = $row['PassImg'];
    $nidImg = $row['nidImg'];
    $sNidImg = $row['SnidImg'];
    $remark = $row['remark'];
    $emgPhone = $row['emgPhone'];
}

?>

<div class="container rounded box inner-shadow mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <?php 
                    if(isset($pimg))
                    {?>
                        <img class="rounded-circle mt-5" width="150px" height="150px" src="img/upload/<?php echo $pimg; ?>" alt="image not found...">
                    <?php }
                    else
                    {
                ?>
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <?php } ?><br>

                <span class="font-weight-bold"><?php echo '+880'.$phone; ?></span>
                <span class="font-weight-bold"><?php echo $email; ?></span><br>
                <span class="font-weight-bold"></span>
                <span> <img class="rounded-circle mt-5" width="150px" height="150px" src="img/upload/<?php echo $passImg; ?>" alt="image not found..."> </span>
                <span class="font-weight-bold">Passport Image</span>
                <span>  <img class="rounded-circle mt-5" width="150px" height="150px" src="img/upload/<?php echo $nidImg; ?>" alt="image not found..."> </span>
                <span class="font-weight-bold">NID</span>
                <span> <img class="rounded-circle mt-5" width="150px" height="150px" src="img/upload/<?php echo $sNidImg; ?>" alt="image not found..."> </span>
                <span class="font-weight-bold">Spouse NID</span>
                
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4><span class="border px-3 p-1 add-experience"><a href="addNewClient.php" class="btn">Back</a></span>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $fname; ?>"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="<?php echo $lname; ?>" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo '+880'.$phone; ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address line 1" value="<?php echo $address; ?>"></div>
                    <div class="col-md-12"><label class="labels">Phone</label><input type="number" class="form-control" placeholder="enter address line 2" value="<?php echo $phone; ?>"></div>
                    <div class="col-md-12"><label class="labels">Date Of Birth</label><input type="date" class="form-control" placeholder="enter address line 2" value="<?php echo $dob; ?>"></div>
                    
                    <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php if($gender == 1){ echo "Male"; } elseif($gender == 2){ echo "Female"; } else { echo "Other's"; } ?>"></div>

                    <div class="col-md-12"><label class="labels">Passport No</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo $passNum; ?>"></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country Code</label><input type="text" class="form-control" placeholder="country" value="<?php echo $countryCode; ?>"></div>
                    <div class="col-md-6"><label class="labels">Passport Authority</label><input type="text" class="form-control" value="<?php echo $passAuth; ?>" placeholder="state"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Passport Issue Date Start</label><input type="date" class="form-control" placeholder="country" value="<?php echo $issueDateS; ?>"></div>
                    <div class="col-md-6"><label class="labels">Passport Issue Date End</label><input type="date" class="form-control" value="<?php echo $issueDateE; ?>" placeholder="state"></div>
                </div>
                <div class="col-md-12"><label class="labels">NID</label><input type="text" class="form-control" placeholder="enter  id" value="<?php echo $nid; ?>"></div>
                <div class="col-md-12"><label class="labels">Please of Birth</label><input type="text" class="form-control" placeholder="education" value="<?php echo $plaseBirth; ?>"></div>
                <div class="col-md-12"><label class="labels">Destination Country</label><input type="text" class="form-control" placeholder="education" value="<?php echo $destination; ?>"></div>
                <div class="col-md-12"><label class="labels">Visa Duration</label><input type="text" class="form-control" placeholder="education" value="<?php echo $visaDuration; ?>"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Other's Information</span></div><br>
                <div class="col-md-12"><label class="labels">Father's Name</label><input type="text" class="form-control" placeholder="experience" value="<?php echo $faname; ?>"></div> <br>
                <div class="col-md-12"><label class="labels">Mother's Name</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $mName; ?>"></div>
                <div class="col-md-12"><label class="labels">Spouse Name</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $sname; ?>"></div>
                <div class="col-md-12"><label class="labels">Spouse Date of Birth</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $s_dob; ?>"></div>
                <div class="col-md-12"><label class="labels">Spouse Address</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $s_address; ?>"></div>
                <div class="col-md-12"><label class="labels">Emergency contact name</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $emgName; ?>"></div>
                <div class="col-md-12"><label class="labels">Emergency Phone</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $emgPhone; ?>"></div>
                <div class="col-md-12"><label class="labels">Emergency Address<Address></Address></label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $emgAddress; ?>"></div>                
                <div class="col-md-12"><label class="labels">Emergency Relation</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $emgRelation; ?>"></div>
                <?php 
                    $referData = "SELECT * FROM tb_agency_info WHERE id = $referid";
                    $result = mysqli_query($conn,$referData);
                    while($row = mysqli_fetch_array($result))
                    {
                        $refername = $row['fullname'];
                    }
                ?>
                <div class="col-md-12"><label class="labels">Reference</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $refername; ?>"></div>

                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Contact Amount</label><input type="text" class="form-control" placeholder="country" value="<?php echo $contactAccmount; ?>"></div>
                    <div class="col-md-6"><label class="labels">Advance</label><input type="text" class="form-control" value="<?php echo $advance; ?>" placeholder="state"></div>
                </div>

                <div class="col-md-12"><label class="labels">Paypent Mathod</label><input type="text" class="form-control" placeholder="additional details" value="<?php if($payMathod == 1){ echo "Cash"; } else { echo "Bank Diposit"; } ?>"></div>
                
                <div class="col-md-12"><label class="labels">Bank Name</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $pmbName; ?>"></div>
                <div class="col-md-12"><label class="labels">Account Number</label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $pmgAccountNum; ?>"></div>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>