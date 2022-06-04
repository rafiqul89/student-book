<?php session_start() ?>

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
          <?php include('message.php') ?>
              <div class="card">
                  <div class="card-header">
                      <h4>Add Student
                          <a href="index.php" class="btn btn-danger float-end">Back</a>
                      </h4>
                  </div>
                  <div class="card-body">
                    <form action="code.php" method="POST">
                    <div class="mb-2">
                      <label for="">Name</label>
                      <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="mb-2">
                      <label for="">Email</label>
                      <input type="text" name="email" id="" class="form-control">
                    </div>
                    <div class="mb-2">
                      <label for="">Phone</label>
                      <input type="text" name="phone" id="" class="form-control">
                    </div>
                    <div class="mb-2">
                      <label for="">Course</label>
                      <input type="text" name="course" id="" class="form-control">
                    </div>
                    <button type="submit" name="save-student" class="btn btn-primary">Save Student</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>