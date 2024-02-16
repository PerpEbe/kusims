<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home | Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        
    </style>
</head>

<body class="sb-nav-fixed mr-2">
    <?php
    include ('navbar.php');
    ?>
    <div id="layoutSidenav">
        <?php
        include('sidenav.php');
        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="container-fluid-light">
                        <h2>Welcome back, get_name</h2><br>
                        <p>We are delighted to have you. Need help on system walk through navigate to the user manual on
                            the side menu</p>
                    </div>
                    Current Registered Units
                    <table class="table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">Unit Name</th>
                                <th scope="col">Unit Code</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
            <?php
            //include('footer.php');
            ?>
        </div>
    </div>

</body>

</html>