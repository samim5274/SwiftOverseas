<?php

include 'dbconfig.php';

if(isset($_GET['userid'])) {
    $uid = $_GET['userid'];
}

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
        $img_up_path = "../img/upload/".$img_new_name;
        move_uploaded_file($tem_name, $img_up_path);

        $sqlData = "UPDATE `tb_clientlist` SET `pImg`='$img_new_name' WHERE id = '$uid'";
        $sqlResult = mysqli_query($conn, $sqlData);
        $ex="Photo save successfully!";
        header("Location: addPhoto.php?error=$ex");
    }
    else
    {
        $ex="Extention not allowed!";
        header("Location: addPhoto.php?error=$ex");
    }
    
}


// if(isset($_POST['btnSubmit']))
// {

//     $img_name = $_FILES['my_img']['name'];
//     $tem_name = $_FILES['my_img']['tmp_name'];
    
//     $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
//     $img_ex_lc = strtolower($img_ex);
//     $allow_exs = array("jpg","jped","png","webp");
//     if(in_array($img_ex_lc, $allow_exs))
//     {
//         $img_new_name = uniqid("IMG-",true).'.'.$img_ex_lc;
//         $img_up_path = "../img/upload/".$img_new_name;
//         move_uploaded_file($tem_name, $img_up_path);

//         $sqlData = "INSERT INTO `tb_img`(`img`) VALUES ('$img_new_name')";
//         $sqlResult = mysqli_query($conn, $sqlData);
//         $ex="Photo save successfully!";
//         header("Location: ../editClient.php?error=$ex");
//     }
//     else
//     {
//         $ex="Extention not allowed!";
//         header("Location: addPhoto.php?error=$ex");
//     }
    
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET['success'])) {?>
    <h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
    <?php } if(isset($_GET['error'])) {?> <h2 class="error text-center"><?php echo $_GET['error']; ?></h2> <?php }
    ?>


    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="my_img">
        <input type="submit" value="submit" name="btnSubmit">
    </form>

</body>
</html>