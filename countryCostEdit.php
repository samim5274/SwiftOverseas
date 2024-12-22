<?php
include 'controller/dbconfig.php';
include 'controller/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Agency</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/countryCostEdit.css">
    <link rel="stylesheet" href="css/grid.css">

</head>
<body>

<?php 
    include 'dashboardmenu.php'; 
    if(isset($_GET['userid'])) 
    {
      $cid = $_GET['userid'];
    }
?>
<section id="top-section"> </section>

<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } if(isset($_GET['error'])) {?> <h2 class="error text-center"><?php echo $_GET['error']; ?></h2> <?php }
?>
<br>

<div class="" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Country Costing Details</h4>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php          
          $sqlData = "SELECT * FROM tb_countrydetails WHERE id = $cid";
          $sqlResult = mysqli_query($conn, $sqlData);
          while($row = mysqli_fetch_array($sqlResult))
          { ?>
        <form action="controller/db_backend.php" method="GET" enctype="multipart/form-data">
            <input type="number" name="txtId" hidden class="form-control" id="cn" value="<?php echo $row['id']; ?>" placeholder="Country name">
            <label for="cn">Country Name</label>
            <input type="text" name="txtCountryName" class="form-control" id="cn" value="<?php echo $row['countryName']; ?>" placeholder="Country name">
            <label for="cc">Client Cost</label>
            <input type="number" name="txtClientCost" class="form-control" id="cc" value="<?php echo $row['clientCost']; ?>" placeholder="Client Cost">
            <label for="ac">Agent Cost</label>
            <input type="number" name="txtAgentCost" class="form-control" id="ac" value="<?php echo $row['agentCost']; ?>" placeholder="Agent Cost">
            <label for="ca">Client Advance</label>
            <input type="number" name="txtClientAdvance" class="form-control" id="ca" value="<?php echo $row['clientAdvance']; ?>" placeholder="Clients Advance">
            <label for="aa">Agent Advance</label>
            <input type="number" name="txtAgentAdvance" class="form-control" id="aa" value="<?php echo $row['agentAdvance']; ?>" placeholder="Agent Advance">
            <label for="rr">Details</label>
            <textarea name="txtRemak" class="form-control" id="rr"  rows="3" placeholder="Details"><?php echo $row['remark']; ?></textarea>
            <br>
            <button type="submit" name="btnCountryCostEdit" class="btn btn-info">Edit</button>
        </form>
        <?php } ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="countryCost.php"><button type="button" class="btn btn-danger">Close</button></a>
      </div>

    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>