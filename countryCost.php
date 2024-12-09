<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Agency</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/countryCost.css">
    <link rel="stylesheet" href="css/grid.css">

</head>
<body>

<?php 
    include 'controller/dbconfig.php';
    include 'dashboardmenu.php'; 
?>
<section id="top-section"> </section>

<?php if(isset($_GET['success'])) {?>
<h2 class="success text-center"><?php echo $_GET['success']; ?></h2> 
<?php } if(isset($_GET['error'])) {?> <h2 class="error text-center"><?php echo $_GET['error']; ?></h2> <?php }
?>
<br>

<section id="add-cost-section" class="collapse add-cost">
    <div class="container">
        <form action="controller/db_backend.php" method="GET" enctype="multipart/form-data">
            <div class="form">
                <div class="title">Country Cost</div>
                <div class="subtitle">SWIFT Overseas Tours & Travels</div>
                <div class="input-container ic1">
                    <input id="countryName" required name="txtCountryName" class="input" type="text" placeholder=" " />
                    <div class="cut"></div>
                    <label for="countryName" class="placeholder">Country Name</label>
                </div>
                <div class="row">
                    <div class="span_1_of_2">
                        <div class="input-container ic2">
                            <input id="cost" class="input" name="txtClientCost" type="number" placeholder=" " />
                            <div class="cut"></div>
                            <label for="cost" class="placeholder">Client Cost</label>
                        </div>
                    </div>
                    <div class="span_1_of_2">
                        <div class="input-container ic2">
                            <input id="AgentCost" class="input" name="txtB2BAgenctCost" type="number" placeholder=" " />
                            <div class="cut cut-short"></div>
                            <label for="AgentCost" class="placeholder">B2B Agent Cost</>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span_1_of_2">
                        <div class="input-container ic2">
                            <input id="cost" class="input" name="txtClientAdvance" type="number" placeholder=" " />
                            <div class="cut"></div>
                            <label for="cost" class="placeholder">Client Advance</label>
                        </div>
                    </div>
                    <div class="span_1_of_2">
                        <div class="input-container ic2">
                            <input id="AgentCost" class="input" name="txtB2BAgentAdvance" type="number" placeholder=" " />
                            <div class="cut cut-short"></div>
                            <label for="AgentCost" class="placeholder">B2B Agent Advance</>
                        </div>
                    </div>
                </div>            
                <button type="text" name="btnAddCountryCost" class="submit">submit</button>
            </div>
        </form>
    </div>
</section>

<br>

<section id="button-section">
    <div class="container">
        <div class="row">
            <div class="span_1_of_2"><button href="#add-cost-section" class="btn btn-info text-light" data-bs-toggle="collapse">Add+</button></div>
            <div class="span_1_of_2"><a href="dashboard"><button type="submit" class="btn btn-warning">Back</button></a></div>
        </div>
    </div>
</section>
<br>

<section id="data-show-section" class="data-show">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover text-light table-bordered">
                    <thead>
                        <tr class="text-center">
                        <th scope="col" >#</th>
                        <th scope="col" >Country</th>
                        <th scope="col" >Client Cost</th>
                        <th scope="col" >Client Advance</th>
                        <th scope="col" >B2B Agent Cost</th>
                        <th scope="col" >B2B Agent Advance</th>
                        <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sl = 1;
                            $sqlData = "SELECT * FROM `tb_countrydetails`";
                            $sqlResult = mysqli_query($conn, $sqlData);
                            while($row = mysqli_fetch_array($sqlResult))
                            {?>
                        <tr>
                            <th scope="row"  class="text-center"><?php echo $sl; $cid = $row['id']; ?></th>
                            <td><?php echo $row['countryName']; ?></td>
                            <td class="text-center"><?php echo $row['clientCost']; ?>/-</td>
                            <td class="text-center"><?php echo $row['clientAdvance'] ?>/-</td>
                            <td class="text-center"><?php echo $row['agentCost'] ?>/-</td>
                            <td class="text-center"><?php echo $row['agentAdvance'] ?>/-</td>
                            <td class="text-center"><a href="countryCostEdit.php?userid=<?php echo $cid; ?>" >Edit</a></td>
                            <td class="text-center"><a href="#">Delete</a></td>
                        </tr>
                        <?php $sl++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Country Details</h4>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="">
            <label for="">Country Name</label>
            <input type="text" class="form-control" placeholder="Country name">
            <label for="">Client Cost</label>
            <input type="text" class="form-control" placeholder="Client Cost">
            <label for="">Agent Cost</label>
            <input type="text" class="form-control" placeholder="Agent Cost">
            <label for="">Client Advance</label>
            <input type="text" class="form-control" placeholder="Clients Advance">
            <label for="">Agent Advance</label>
            <input type="text" class="form-control" placeholder="Agent Advance">
            <br>
            <button type="submit" class="btn btn-info">Edit</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>