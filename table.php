<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="./styles.css" rel="stylesheet">
</head>

<body>
  <?php include 'navbar.php';?>
  <section class="mymain-section">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "patient_details";
    $conn = mysqli_connect($servername, $username, $password, $db);
    if (!$conn) {
      die("Sorry we Failed to Connect" . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $address = $_POST['address'];
      $phone_no = $_POST['pnum'];
      $date = $_POST['date'];
      $id = $_POST['id'];

      $sql = "INSERT INTO `patient_info` (`name`, `address`, `phone no`, `date`, `patient_id`) VALUES ('$name', '$address', '$phone_no', '$date', '$id')";
      $result = mysqli_query($conn, $sql);
      echo '<div class="fix container alert alert-warning" style="background-color:#262b33;
    color:#ededed;
    border: 1px solid #4c4b4b;
    box-shadow: 0 4px 8px #000 ;">';
      echo '<h5>Successfully Added:</h5>';
      echo '<p>Name: ' . $name . '</p>';
      echo '<p>Address: ' . $address . '</p>';
      echo '<p>Phone Number: ' . $phone_no . '</p>';
      echo '<p>Admitted Date: ' . $date . '</p>';
      echo '<p>Patient ID: ' . $id . '</p>';
      echo '<a href="view.php" class="btn btn-primary">View All Data</a>';
      echo '</div>';
    }
    ?>
  </section>
</body>

</html>