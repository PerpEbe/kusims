<?php
include 'connect.php';
if(isset($_POST['admit'])){
    $student_id=$_POST['student_id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $gender=$_POST['gender'];
    $programme_id=$_POST['programme_id'];
    $doa=$_POST['doa'];
    $nationality=$_POST['nationality'];
    $county=$_POST['county'];
    $religion=$_POST['religion'];

    $result=mysqli_query($conn,"insert into `student` (student_id,first_name,last_name,gender,programme_id,doa,nationality,county,religion) values ('$student_id','$first_name','$last_name','$gender','$programme_id','$doa','$nationality','$county','$religion')");
    if($result){
        header('location:admission.php');
    }else{
        die(mysqli_error($conn));
    }
}   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
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
                    <h1 class="mt-4">Academic</h1>
                    
                    <div class="container my-2 px-5">
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>