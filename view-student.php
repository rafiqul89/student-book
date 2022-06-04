<?php require('dbcon.php') ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP CRUD</title>
  </head>
  <body>
    
 
  <div class="container">
      <div class="row">
          <div class="col-md-12 py-4">
              <div class="card">
                  <div class="card-header">
                      <h4>Student Details
                          <a href="index.php" class="btn btn-danger float-end">Back</a>
                      </h4>
                  </div>
                  <div class="card-body">
                      <?php if(isset($_GET['id'])){

                          $sid =mysqli_real_escape_string($con, $_GET['id']); 
                          $query = "SELECT * FROM `student_info` WHERE id='$sid'";
                          $query_run = mysqli_query($con, $query);

                          if(mysqli_num_rows($query_run)>0){
                              $student = mysqli_fetch_array($query_run);
                                ?>
                            <form action="code.php" method="POST">
                    <div class="mb-2">
                      <label for="">Name:</label>
                       <p><?= $student['name'];?></p>
                    </div>
                    <div class="mb-2">
                      <label for="">Email:</label>
                       <p><?= $student['email'];?></p>
                    </div>
                    <div class="mb-2">
                      <label for="">Phone:</label>
                       <p><?= $student['Phone'];?></p>
                    </div>
                    <div class="mb-2">
                      <label for="">Name:</label>
                       <p><?= $student['Course'];?></p>
                    </div>
                    </form>
                          <?php
                          }else{
                              echo "No data found";
                          }
                      } ?>
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>