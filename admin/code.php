<?php

require('functions.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: users.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: users.php'); 
    }    
}


if(isset($_POST['delete_btn_bookings']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM bookings WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: bookings.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: bookings.php'); 
    }    
}

if(isset($_POST['update-booking']))
{
    $booking_id = $_POST['booking_id'];
    $fullname = $_POST['fullname'];
    $number = $_POST['number'];
    $period = $_POST['period'];
    $camera = $_POST['camera'];
    $version = $_POST['version'];

    $query = "UPDATE bookings SET fullname='$fullname', number='$number', period='$period', camera='$camera', version='$version'
    WHERE id='$booking_id'";

    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status']="Edit Successfully!";
        header('Location: bookings.php');
        exit(0);
    }
}
?>