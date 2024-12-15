<?php

include 'controller/dbconfig.php';

if(isset($_GET['userid'])) {
    $uid = $_GET['userid'];
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
    $sqlDelete = "DELETE FROM `tb_clientlist` WHERE id = $uid";
    $sqlDeleteResult = mysqli_query($conn,$sqlDelete);
    $ex="Delete Client successfully.";
    header("Location: addClinet.php?success=$ex");
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
    // include 'dashboardmenu.php'; 
?>
<section id="top-section"> </section>

<?php if(isset($_GET['error'])) {?>
<h2 class="success text-center"><?php echo $_GET['error']; ?></h2> 
<?php } ?>
<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } ?>



<section id="attach-file" class="edit_client">
    <div class="container">
        <div class="row">          
            <div class="span_1_of_2">
                <label for="">Show Images</label><hr>
                <?php
                    $sqlImg = "SELECT `pImg`, `PassImg`, `nidImg`, `SnidImg` FROM `tb_clientlist` WHERE id = $uid";
                    $sqlRes = mysqli_query($conn,$sqlImg);
                    while($row = mysqli_fetch_assoc($sqlRes)){
                ?>
                <div class="" >
                    <img src="img/upload/<?php echo $row['pImg']; ?>" class="card-img-top" alt="Photo Not Founded...">
                    <img src="img/upload/<?php echo $row['PassImg']; ?>" class="card-img-top" alt="Photo Not Founded...">
                    <img src="img/upload/<?php echo $row['nidImg']; ?>" class="card-img-top" alt="Photo Not Founded...">
                    <img src="img/upload/<?php echo $row['SnidImg']; ?>" class="card-img-top" alt="Photo Not Founded...">
                </div>
                <?php } ?>
            </div>
            <div class="span_1_of_2">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">File Attachment Details</label><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Own Image*</span>
                        <input type="file" name="my_img" class="form-control"  required aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Passport First Page Picture</span>
                        <input type="file" name="my_img2" class="form-control"   aria-label="Username" required aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">NID</span>
                        <input type="file"  name="my_img3" class="form-control"   aria-label="Username" aria-describedby="basic-addon5" >
                    </div>              
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Spouse's NID</span>
                        <input type="file"  name="my_img4" class="form-control" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <input type="submit" name="btnSubmit" value="Submit" class="btn btn-info btn-center text-light">
                </form><br>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="submit" name="btnDelete" value="Delete" class="btn btn-danger btn-center text-light"><br>
                </form>
                <br>
                <a href="addClinet.php"><button class="btn btn-warning">Back</button></a>
            </div>  
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>