<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard &#8211; SWIFT Overseas Tours & Travels</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/dashboard.css">

</head>
<body>

<?php include 'dashboardmenu.php'; ?>

<section id="top-section"> </section>

<section id="button-group">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group item-center">
                    <a href="addNewClient.php"><button class="btn btn-info text-light">Add new client</button></a>
                    <a href="countryCost.php"><button class="btn btn-success text-light">Country Details</button></a>
                    <a href="account.php"><button class="btn btn-primary text-light">Account</button></a>
                    <a href="createAccount.php"><button class="btn btn-danger text-light">Staff</button></a>
                    <a href="dashboard"><button type="submit" class="btn btn-warning">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</section><br>

<section id="card-section" class="mt-4">
  <div class="container">
    <div class="row">
      <h2 class="display-4 head">Dashboard</h2>
      <div class="col-md-3 text-center bg-info text-white">
        <p class="lead">Customer</p>
        <h3 class="display-4">25</h3>
        <p class="lead">Agency</p>
      </div>
      <div class="col-md-3 text-center bg-danger text-white">
        <p class="lead">Today's</p>
        <h3 class="display-4">48</h3>
        <p class="lead">Phone Call's</p>
      </div>
      <div class="col-md-3 text-center bg-success text-white">
        <p class="lead">Total Visit</p>
        <h3 class="display-4">21</h3>
        <p class="lead">Person</p>
      </div>
      <div class="col-md-3 text-center bg-secondary  text-white">
        <p class="lead">Running Working Country</p>
        <h3 class="display-4">12</h3>
        <p class="lead">Country</p>
      </div>
    </div>
    <div class="row">
      <h2 class="display-4 head">Total</h2>
      <div class="col-md-3 text-center bg-primary text-white">
        <p class="lead">Total</p>
        <h3 class="display-4">25</h3>
        <p class="lead"></p>
      </div>
      <div class="col-md-3 text-center bg-warning text-white">
        <p class="lead">Total</p>
        <h3 class="display-4">48</h3>
        <p class="lead"></p>
      </div>
      <div class="col-md-3 text-center bg-dark text-white">
        <p class="lead">Total</p>
        <h3 class="display-4">21</h3>
        <p class="lead"></p>
      </div>
      <div class="col-md-3 text-center bg-info  text-white">
        <p class="lead">Total</p>
        <h3 class="display-4">12</h3>
        <p class="lead"></p>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
</body>
</html>