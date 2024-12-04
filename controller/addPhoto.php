<?php

if(isset($_POST['btnSubmit']))
{

    $img_name = $_FILES['my_file']['name'];
    $img_size = $_FILES['my_file']['size'];
    $tem_name = $_FILES['my_file']['tmp_name'];
    $error = $_FILES['my_file']['error'];

    if($error == 0)
    {
        if($img_size > 1250000)
        {
            $ex = "Image size to big!";
            header("Location: ../addNewClient.php?error=$ex");
        }
        else
        {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exe = array('png','jpg','jpeg','webp');
            if(in_array($img_ex_lc, $allowed_exe))
            {
                $img_New_Name = uniqid("IMG-", true).'-'.$img_name.'-'.$img_ex_lc;
                $img_up_path = "../img/upload/".$img_New_Name;
                move_uploaded_file($tem_name, $img_up_path);
            }
            else
            {
                $ex = "Extention not allowed!!";
                header("Location: ../addNewClient.php?error=$ex");
            }
        }
    }
    else
    {
        $ex = "Unknown error found. Please select good picture!!!";
        header("Location: ../addNewClient.php?error=$ex");
    }
}
?>