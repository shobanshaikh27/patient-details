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
<div class="container1"> 
<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">

<div class="card mx-4" style="padding: 0px;">
  <img src="./images/insert.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Insert New Patient Details</h5>
    <p class="card-text">Enter the Patient details to fit in the Patient Management System</p>
    <a href="details.php" class="btn btn-primary btn-center">INSERT</a>
  </div>
</div>
<div class="card mx-4" style="padding: 0px;">
  <img src="./images/view.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">View Patient Details</h5>
    <p class="card-text">View the admitted Patient Details in our system</p>
    <a href="view.php" class="btn btn-primary btn-center">VIEW</a>
  </div>
</div>
<div class="card mx-4" style="padding: 0px;">
  <img src="./images/update.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Update Patient Details</h5>
    <p class="card-text">Update the Patient Details by providing the Patient ID</p>
    <a href="update.php" class="btn btn-primary btn-center">UPDATE</a>
  </div>
</div>

<div class="card mx-4" style="padding: 0px;">
  <img src="./images/delete.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Delete Patient Details</h5>
    <p class="card-text">Delete the Patient Details by providing the Patient ID</p>
    <a href="delete.php" class="btn btn-primary btn-center ">DELETE</a>
  </div>
</div>
</div>
</div>
</body>

</html>