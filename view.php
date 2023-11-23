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
  <div class="emp-v">
    <?php include 'navbar.php'; ?>
    <section class="main-section">
      <?php
      // Fetch and display data from the table
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "patient_details";
      $conn = mysqli_connect($servername, $username, $password, $db);
      if (!$conn) {
        die("Sorry we Failed to Connect" . mysqli_connect_error());
      }
      $sql1 = "SELECT * FROM `patient_info`";
      $result1 = mysqli_query($conn, $sql1);
      $num = mysqli_num_rows($result1);

      // Check if there is any data to display
      if ($num > 0) {
        // echo "<div class='container'>";
        echo "<div class='table-container'>";
        echo '<h1 class="hea-v">';
        echo "Patient Details";
        echo "</h1>";
        echo "<table>";
        echo "<tr>";
        echo "<th>No.</th>";
        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Phone Number</th>";
        echo "<th>Date</th>";
        echo "<th>Patient ID</th>";
        echo "</tr>";

        $no = 1;
        while ($row = mysqli_fetch_assoc($result1)) {
          echo "<tr>";
          echo "<td>" . $no . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" . $row['phone no'] . "</td>";
          echo "<td>" . $row['date'] . "</td>";
          echo "<td>" . $row['patient_id'] . "</td>";
          echo "</tr>";
          $no++;
        }

        echo "</table>";
        echo "</div>";
        // echo "</div>";
      } else {
        echo "No data found.";
      }
      ?>
    </section>
    <!-- <?php include 'footer.php'; ?> -->
</body>

</html>