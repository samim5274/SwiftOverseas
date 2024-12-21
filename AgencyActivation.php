<?php
include 'controller/dbconfig.php';
include 'controller/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permission - <?php echo $_SESSION['E_Name'];?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/agenctyActivation.css" media="screen">
    <link rel="stylesheet" href="button89.css" media="screen">
</head>
<body>

<?php 
    include 'dashboardmenu.php'; 
?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agency Activation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="lead">Do you went to active this agency for your work?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="#"><button type="button" class="btn btn-primary">Save changes</button></a>
      </div>
    </div>
  </div>
</div>

<section id="statusPermission">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="wrapper">
                    <a href="dashboard"><button class="button-31"><i class="fa fa-angle-double-left"> Back</i></button></a>
                    <div class="text-center mb-4"><img src="img/logo.png" alt="Logo not found..."></div>              
                    
                    <p>All Agency List</p>

                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col">Agency Name</th>
                                <th scope="col">Owner Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col" colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sqlData = "SELECT * FROM tb_agency_info";
                                $SQLResult = mysqli_query($conn,$sqlData);
                                $sl = 1;
                                while($row = mysqli_fetch_array($SQLResult))
                                {?>
                                    <tr>
                                        <th class="text-center" scope="row"><?php echo $sl ?></th>
                                        <td><?php echo $row['fullname'] ?></td>
                                        <?php $uid = $row['id'] ?>
                                        <td><?php echo $row['firstname'].' '.$row['lastname'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td class="text-center"><button class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Active</button></td>
                                    </tr>
                            <?php  $sl++;  }
                            ?>
                            
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
</body>
</html>
