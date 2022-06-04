<?php
session_start();
require('dbcon.php');

if(isset($_POST['delete-student'])){
    $sid = mysqli_real_escape_string($con, $_POST['delete-student']);

    $query = "DELETE FROM student_info 
    WHERE id='$sid' ";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Student Deleted successfully";
        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update-student'])){
    $sid = mysqli_real_escape_string($con, $_POST['sid']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE student_info SET name='$name', email='$email', phone='$phone', course='$course' 
    WHERE id='$sid' ";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Student updated successfully";
        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student not updated";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['save-student'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO student_info(name,email,phone,course) VALUES('$name','$email','$phone','$course')";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Student created successfully";
        header("Location: student-create.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Student not created";
        header("Location: student-create.php");
        exit(0);
    }
}