<?php

    include 'dbconfig.php';
    session_start();

    $uname = $_POST['txtName'];
    $pass = $_POST['txtPass'];
    $status = 1;


    $mess1 = "Username or mail is empty. Please fill the username or mail and try again!";
    $mess2 = "Your password is empty. Please fill the password and try again!";
    $mess3 = "Username & Password invalid. Please try again!!";
    $mess4 = "Login Successfully.";
    $mess5 = "Your account can not be activated. Please contact with SWIFT Overseas authority. Thank you.";
    $mess6 = "Username and password not found. Please fill the currect username and password and try again!";


    if(empty($uname))
    {
        header("Location: ../log.php?error=".$mess1);
        exit();
    }
    elseif(empty($pass))
    {
        header("Location: ../log.php?error=".$mess2);
        exit();
    }

    $sqlData = "SELECT * FROM user_info WHERE username = '$uname' AND password = '$pass' ";
    $sqlResult = mysqli_query($conn, $sqlData);


    $count = mysqli_num_rows($sqlResult);

    if( $count == 1)
    {
        $row = mysqli_fetch_assoc($sqlResult);
        $username = $row['username'];
        $password = $row['password'];

        if(empty($username))
        {            
            header("Location: ../log.php?error=".$mess6);
            exit();
        }
        elseif(empty($password))
        {
            header("Location: ../log.php?error=".$mess6);
            exit();
        }

        if( $username == $uname && $password == $pass)
        {
            if($row['status'] == $status)
            {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];                
                header("Location: ../dashboard.php?success=".$mess4);
                exit();
            }
            else
            {
                header("Location: ../log.php?error=".$mess5);
                exit();
            }
        }
        else
        {
            header("Location ../log.php?error=".$mess3);
            exit();
        }
    }
    elseif(mysqli_num_rows($sqlResult) == 0)
    {   
        header("Location ../log.php?error=".$mess3);
        exit();
    }

?>