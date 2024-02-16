<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
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
                <div class="container-fluid my-3">
                    <ol class="breadcrumb g-grey ">
                        <li class="breadcrumb-item active px-5 py-2"><a href="#">Enter Marks</a>
                        </li>
                    </ol>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Student ID</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name ID</th>
                                        <th scope="col">Marks</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $result=mysqli_query($conn,"select * from `student` ");
                                        if($result){
                                            while($row=mysqli_fetch_assoc($result)){
                                                $student_id=$row['student_id'];
                                                $first_name=$row['first_name'];
                                                $last_name=$row['last_name'];
                                                
                                                echo '<tr>
                                                    <th>'.$student_id.'</th>
                                                    <td>'.$first_name .'</td>
                                                    <td>'.$last_name.'</td>
                                                    <td><input type="text" name="results" class="form-control"></td>
                                                    <td><input type="button" name="save" value="Save" class="btn-primary"></td>
                                                </tr>';                                                
                                            }
                                            
                                        }

                                    ?>

                                </tbody>
                            </table>
                        </div>
            </main>
        </div>
    </div>

</body>

</html>