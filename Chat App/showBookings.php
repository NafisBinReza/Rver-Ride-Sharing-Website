<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once "php/config.php";
}
?>

<?php include_once "header.php"; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  
<body style="background-color:black">

    <div class="wrapper">
        <table class="form">
            <thead class="text-center">
                <tr >
                    <th style="font-size:19px; padding:10px;" >Booking ID</th>
                    <th style="font-size:19px; padding:10px;">Pickup</th>
                    <th style="font-size:19px; padding:10px;">Destination</th>
                    <th style="font-size:19px; padding:10px;">Date</th>
                </tr>
            </thead >
            <tbody class="text-center">
                <?php
                $result = mysqli_query($conn, "SELECT * FROM booking where unique_id = {$_SESSION['unique_id']}");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td style="font-size:17px; padding:10px;"><?php echo $row["booking_id"]; ?></td>
                        <td style="font-size:17px; padding:10px;"><?php echo $row["pickup"]; ?></td>
                        <td style="font-size:17px; padding:10px;"><?php echo $row["destination"]; ?></td>
                        <td style="font-size:17px; padding:10px;"><?php echo $row["date"]; ?></td>
                    </tr>
                <?php
                };
                ?>
            </tbody>
        </table>
        <div class="link text-center" style="font-size:19px; padding:10px;">Want to book a ride? <a href="booking.php">Book Ride</a></div>
        <div class="link text-center" style="font-size:19px; padding:10px;">Want to go back? <a href="users.php">Go Back</a></div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


</body>

</html>