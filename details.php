<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alice&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="./styles.css" rel="stylesheet">

</head>

<body>
  <div class="emp-d">
    <?php include 'navbar.php'; ?>

    <h1 class="hea-d my-5">Enter Patient Details</h1>
    <form action="table.php" method="POST" class="fname" id="numb" style="background-color:#0f0f1b;">
      <div class="mycontainer my-1">
        <div class="mb-3">
          <label for="emp" class="form-label">Patient ID:</label>
          <input type="number" name="id" id="emp" placeholder="Enter Patient ID" class="form-control" required minlength="3" />
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name Here" required minlength="3"/>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address:</label>
          <textarea id="address" name="address" class="form-control" placeholder="Enter your Address"
            required></textarea>
        </div>
        <div class="mb-3">
          <label for="phonenumber" class="form-label">Phone Number:</label>
          <input type="number" id="phonenumber" name="pnum" class="form-control" placeholder="Enter your Phone Number"
          required pattern="[0-9]{10}" maxlength="10" />
        </div>
        <div class="mb-3">
          <label for="joiningdate" class="form-label">Admit Date:</label>
          <input type="date" name="date" class="form-control" placeholder="Enter your Joining Date" required />
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-center">Submit</button>
      </div>
    </form>
  </div>
  <!-- <?php include 'footer.php';?> -->
</body>

</html>