<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  include_once "php/config.php";
  $booking_id = $_SESSION['unique_id'];
  if(isset($_POST['submit'])){

    $pickup = mysqli_real_escape_string($conn, $_POST['pickup']);
    $destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $insert_query = mysqli_query($conn, "INSERT INTO booking (booking_id, unique_id, pickup, destination, date)
                        VALUES ('', {$booking_id}, '{$pickup}','{$destination}', '{$date}')");
    
    header("location:users.php");
    }
} else {
  header("location: login.php");
}
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Booking</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Pickup</label>
            <input type="text" name="pickup" placeholder="Pickup" required>
          </div>
          <div class="field input">
            <label>Destination</label>
            <input type="text" name="destination" placeholder="Destination" required>
          </div>
        </div>
        <div class="field input">
          <label>Date</label>
          <input type="date" name="date" placeholder="Date" required>
        </div>
        
        
        <div class="field button">
          <input type="submit" name="submit" value="Book the ride">
        </div>
      </form>
      <div class="link">Check all your bookings? <a href="showBookings.php">View Bookings</a></div>
      <div class="link">Want to book later? <a href="users.php">Go Back</a></div>
    </section>
  </div>


</body>

</html>