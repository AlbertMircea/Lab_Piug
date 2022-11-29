<?php
    require('essentials.php');
    require('functions.php');
    adminLogin();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <title>Admin Panel - Bookings</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Arima+Madurai&family=Poiret+One&display=swap"
      rel="stylesheet"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="css/common.css" />

  </head>

  <body class="pagina">

  <?php require('header.php');?>

  <div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">UPDATE BOOKINGS</h3>

            <div class="card border-0 shadow-sm mb-4">
                <div class="tabel-users card-body">

                    <div class="text-end mb-4">
                    </div>

                    <?php
                    if(isset($_GET['id']))
                    {
                        $booking_id=$_GET['id'];
                        $bookings = "SELECT * FROM bookings WHERE id='$booking_id'";
                        $bookings_run = mysqli_query($conn,$bookings);

                        if(mysqli_num_rows($bookings_run) > 0)
                        {
                            foreach($bookings_run as $booking)
                            {
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="booking_id" value="<?=$booking['id'];?>">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Full Name</label>
                                            <input type="text" name="fullname" value="<?= $booking['fullname']; ?>" class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Phone Number</label>
                                            <input type="text" name="number" value="<?= $booking['number']; ?>"  class="form-control">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Period</label>
                                            <select name="period"  class="form-control" required>
                                                <option><?= $booking['period']; ?></option>
                                                <option value="1 January - 1 March 2023">1 January - 1 March 2023</option>
                                                <option value="1 March - May 2023">1 March - May 2023</option>
                                                <option value="1 May - 1 July 2023">1 May - 1 July 2023</option>
                                                <option value="1 July - 1 September 2023">1 July - 1 September 2023</option>
                                                <option value="1 September - 1 November 2023">1 September - 1 November 2023</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Camera</label>
                                            <select name="camera" class="form-control" required>
                                                <option><?= $booking['camera']; ?></option>
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="">Version</label>
                                            <select name="version" value="<?= $booking['version']; ?>"  class="form-control" required>
                                                <option><?= $booking['version']; ?></option>
                                                <option value="Physical">Physical</option>
                                                <option value="Online">Online</option>
                                            </select>
                                        </div>

                                        <div class=" submit-edit col-md-12 mb-3">
                                        <button type="submit" name="update-booking" class="btn btn-sm custom-bg text-white shadow-none">Edit</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <h4>No record found!</h4>
                            <?php
                        }
                    }
                    ?>

                    
                </div>
            </div>
        </div>
    </div>
</div>


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="scripts/users.js"></script>
  </body>
</html>