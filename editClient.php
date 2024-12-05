<?php

include 'controller/dbconfig.php';

    if(isset($_POST['btnSubmit']))
    {
        
        $img_name = $_FILES['my_img']['name'];
        $tem_name = $_FILES['my_img']['tmp_name'];
        
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allow_exs = array("jpg","jped","png","webp");
        if(in_array($img_ex_lc, $allow_exs))
        {
            $img_new_name = uniqid("IMG-",true).'.'.$img_ex_lc;
            $img_up_path = "img/upload/".$img_new_name;
            move_uploaded_file($tem_name, $img_up_path);

            // $sqlData = "UPDATE `tb_clientlist` SET `pImg`='$img_new_name' WHERE id = $uid";
            $sqlResult = mysqli_query($conn, $sqlData);
            $ex="Photo save successfully!";
            header("Location: editClient.php?error=$ex");
        }
        else
        {
            $ex="Extention not allowed!";
            header("Location: addPhoto.php?error=$ex");
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

    <link rel="stylesheet" href="css/editClient.css">
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

<section id="edit-client" class="edit_client">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">File Attachment Details</label><hr>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Own Image*</span>
                        <input type="file" name="my_img" class="form-control"  placeholder="" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Passport First Page Picture</span>
                        <input type="file" name="txtPassImg" class="form-control"   aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">NID</span>
                        <input type="file" name="txtNIDImg" class="form-control"   aria-label="Username" aria-describedby="basic-addon5" >
                    </div>              
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon5">Spouse's NID</span>
                        <input type="file" name="txtSpouseNIDImg" class="form-control" aria-label="Username" aria-describedby="basic-addon5" >
                    </div>
                    <input type="submit" name="btnSubmit" value="Submit" class="btn btn-info btn-center text-light">
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>