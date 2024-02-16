<?php
include 'connect.php';
if(isset($_POST['admit'])){
    $student_id=$_POST['student_id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $gender=$_POST['gender'];
    $programme_id=$_POST['programme_id'];
    $doa=date("Y-m-d | H:i:s");
    $nationality=$_POST['nationality'];
    $county=$_POST['county'];
    $student_email=$_POST['student_email'];
    $dob=$_POST['dob'];
    

    $result=mysqli_query($conn,"insert into `student` (student_id,first_name,last_name,gender,programme_id,doa,nationality,county,religion,student_email,dob) values ('$student_id','$first_name','$last_name','$gender','$programme_id','$doa','$nationality','$county','$religion','$student_email','$dob')");
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
                    <h1 class="mt-4">Admission</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="admission.php">Admission(staff)</a></li>
                        <li class="breadcrumb-item"><a href="reporting.php">Reporting</a></li>
                        <li class="breadcrumb-item"><a href="deferment.php">Deferment</a></li>
                        <li class="breadcrumb-item"><a href="clearance.php">Clearance</a></li>
                    </ol>
                    <div class="container my-2 px-5">
                        <form method="post">
                            <div class="form-group">
                                <input type="text" name="student_id" placeholder="Student ID" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" name="first_name" placeholder="First Name" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" placeholder="Last Name" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <select name="gender" id="" class="form-control">
                                    <option value="">--Gender--</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Other</option>
                                </select>
                                <!-- <input type="text" name="gender" placeholder="Gender" class="form-control"
                                    autocomplete="off"> -->
                            </div>
                            <div class="form-group">
                                <input type="text" name="programme_id" placeholder="Programme ID" class="form-control"
                                    autocomplete="off">
                            </div>
                            <!-- <div class="form-group">
                                <input type="text" name="doa" placeholder="Date of Admission" class="form-control"
                                    autocomplete="off">
                            </div> -->
                            <div class="form-group">
                                <input type="text" name="nationality" placeholder="Nationality" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" name="county" placeholder="County" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <select name="religion" id="religion" class="form-control">
                                    <option value="">--Religion--</option>
                                    <option value="Christian">Christian</option>
                                    <option value="Muslim">Muslim</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Other">Other</option>
                                </select>
                                <!-- <input type="text" name="religion" placeholder="Religion" class="form-control"
                                    autocomplete="off"> -->
                            </div>
                            <div class="form-group">
                                <input type="text" name="student_email" placeholder="Email" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="date" id="datepicker" name="dob" placeholder="Date of Birth"
                                    class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="admit" value="Submit" class="form-btn btn-primary"
                                    autocomplete="off">
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>