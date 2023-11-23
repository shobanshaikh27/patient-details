<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="./styles.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="./images/logo1.avif" class="logo" />
            <a class="gbiz navbar-brand px-4" href="#">Patient Details</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="righ collapse navbar-collapse" id="navbarSupportedContent">
                <ul class=" navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="hom nav-item px-4">
                        <a class="hom nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="detail nav-link" href="details.php">Insert</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="detail nav-link" href="update.php">Update</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="detail nav-link" href="view.php">View</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="detail nav-link" href="delete.php">Delete</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="detail nav-link" href="#">About</a>
                    </li>
                    <button class="btn btn-primary" onclick="logout()">Log Out</button>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        const logout = () => {
            window.location.href = 'signout.php';
        }
    </script>

</body>

</html>