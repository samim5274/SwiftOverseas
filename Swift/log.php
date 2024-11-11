<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Deegautex</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>

<section id="login-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                    <div class="logo">
                        <img src="img/logo.png" alt="Logo not found...">
                    </div>
                    <div class="text-center mt-4 name">
                        -Deegautex (Pvt.) Ltd.
                        <?php if(isset($_GET['error'])){ ?> <p class="error"><?php echo $_GET['error']; ?></p> <?php } ?>
                        </div>
                            <form action="loginBK" method="post" class="p-3 mt-3">
                                <div class="form-field d-flex align-items-center">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="username" id="userName" placeholder="Username or Email">
                                </div>
                                <div class="form-field d-flex align-items-center">
                                    <span class="fas fa-key"></span>
                                    <input type="password" name="password" id="pwd" placeholder="Password">
                                </div>
                                <button type="submit" name="btnLogin" class="btn mt-3">Login</button>
                            </form>
                            <div class="text-center fs-6">
                                <p><a href="#"> Forget password </a> or <a href="userCreate.php">Sing up</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>


</body>
</html>