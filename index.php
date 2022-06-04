
<?php session_start();
require('dbcon.php'); ?>

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
          <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Cousre</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $query = "SELECT * FROM student_info";
      $query_run = mysqli_query($con, $query);

      if(mysqli_num_rows($query_run)>0){
       foreach($query_run as $student){
           ?>
           <tr>
           <th><?= $student['id'];?></th>
           <th><?= $student['name'];?></th>
           <th><?= $student['email'];?></th>
           <th><?= $student['Phone'];?></th>
           <th><?= $student['Course'];?></th>
           <td class="d-flex">
               <a class="btn btn-info me-1" href="view-student.php?id=<?=  $student['id'];?>">View</a>
               <a class="btn btn-success me-1" href="edit-student.php?id=<?=  $student['id'];?>">Edit</a>
               <form action="code.php" method="POST">
                 <button class="btn btn-danger" type="submit" name="delete-student" value="<?= $student['id'];?>">Delete</button>
               </form>
           </td>
         </tr>

         <?php
       }
      }else{
          echo "No data found";
      }
      ?>
  
    
  </tbody>
</table>
          </div>
      </div>
  </div>

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>