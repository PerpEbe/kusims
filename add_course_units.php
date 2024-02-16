<?php
include 'connect.php';
if(isset($_POST['add_course'])){
    $course_code=$_POST['course_code'];
    $course_title=$_POST['course_title'];
    $programme_id=$_POST['programme_id'];
    $staff_id=$_POST['staff_id'];
    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $student_id=$_POST['student_id'];

    $result=mysqli_query($conn,"insert into `course` (course_code,course_title,programme_id,staff_id,year,semester,student_id) values ('$course_code','$course_title','$programme_id','$staff_id','$year','$semester','$student_id')");
    if($result){
        header('location:course_units.php');
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
    <title>Add Units/Curriculum</title>
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
                <div class="container-fluid p-3">
                <ol class="breadcrumb mb-4 bg-light p-3">
                            <li class="breadcrumb-item active">Add Unit/Curriculum</li>
                        </ol>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="course_code" placeholder="Course Code" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="course_title" placeholder="Course Title" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="programme_id" placeholder="Programme ID" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="staff_id" placeholder="Staff ID" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="year" placeholder="Year" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="semester" placeholder="Semester" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="student_id" placeholder="Student ID" class="form-control"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="add_course" value="Add Unit/Curriculum" class="btn-primary">
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

</body>

</html>