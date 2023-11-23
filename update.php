<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="./styles.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "patient_details";
    $tru = false;
    $conn = mysqli_connect($servername, $username, $password, $db);
    if (!$conn) {
        die("Sorry we Failed to Connect" . mysqli_connect_error());
    }
    else{
    if (isset($_POST['update'])) {
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
        $id = $_POST['id'];

        $sql = "UPDATE `patient_info` SET `address` = '$address' WHERE `patient_id` = '$id'";
        $sql1 = "UPDATE `patient_info` SET `phone no` = '$phonenumber' WHERE `patient_id` = '$id'";
        $result = mysqli_query($conn,$sql);
        $result1 = mysqli_query($conn,$sql1);
        if($result)
        {
        $tru = true;
        }
        if($result1)
        {
            $tru=true;
    }
    }
}
    ?>
    <div class="emp-d">
    <?php include 'navbar.php';?>
<?php
if($tru)
{
    {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo '<strong>Congratulations! Your Entry has been successfully Updated!</strong>';
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '<a href="view.php" class="mx-2">';
            echo 'View Data';
            echo '<a>';
            echo '</div>';
            
    }
}
?>
    <h1 class="hea-d">Enter Patient Details you wish to Update</h1>
<form action="#" method="POST" class="fname">
    <div class="mycontainer">
<div class="mb-3">
    <label for="emp" class="form-label">Patient ID:</label>
    <input type="number" name="id" id="emp" placeholder="Enter your Patients ID" class="form-control" required minlength="3"/>
  
  <div class="mb-3">
    <label for="address" class="form-label">Address:</label>
    <textarea id="address" name="address" class="form-control" placeholder="Enter your Address" required></textarea>
  </div>
  <div class="mb-3">
    <label for="phonenumber" class="form-label">Phone Number:</label>
    <input type="number" id="phonenumber" name="phonenumber" class="form-control" placeholder="Enter your Phone Number"  required pattern="[0-9]{10}" maxlength="10"  />
  </div>
 
  <button type="submit" name="update" class="btn btn-primary">Update</button>

  </div>
</form>
</div>
</body>
</html>