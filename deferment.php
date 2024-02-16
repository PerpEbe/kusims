<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deferment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>

<body class="sb-nav-fixed mr-2">
    <?php
    include('navbar.php');
    ?>
    <div id="layoutSidenav">
        <?php
        include('sidenav.php');
        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                            <h2 class="mt-4">Deferment</h2>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="admission.php">
                                << </a>
                        </li>
                    </ol>
                    <div class="container-fluid"><span><button class="btn-primary"><a class="text-light"
                                    href="defer.php">Add</a></button>
                        </span></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Session</th>
                                        <th>Notes</th>
                                        <th>Reasons</th>
                                        <th>HoD Approval</th>
                                        <th>Registrar Approval</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $result=mysqli_query($conn,"select * from deferment");
                                    if($result){
                                        
                                        while($row=mysqli_fetch_assoc($result)){
                                            $session=$row['session'];
                                            $notes=$row['notes'];
                                            $reasons=$row['reasons'];

                                            echo '<tr>
                                            <td>'.$session.'</td>
                                            <td>'.$notes.'</td>
                                            <td>'.$reasons.'</td>
                                            <td></td>
                                            <td></td>
                                        </tr>';
                                        }
                                    }else{
                                        die(mysqli_error($conn));
                                    }
                                ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>