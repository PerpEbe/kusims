<?php
include 'connect.php';
$edit_id=$_GET['edit_id'];

$result=mysqli_query($conn,"select * from `course` where course_code='$edit_id'");

$row=mysqli_fetch_assoc($result);
$course_code=$row['course_code'];
$course_title=$row['course_title'];
$programme_id=$row['programme_id'];
$staff_id=$row['staff_id'];
$year=$row['year'];
$semester=$row['semester'];
$student_id=$row['student_id'];

if(isset($_POST['edit_course'])){
    $course_code=$_POST['course_code'];
    $course_title=$_POST['course_title'];
    $programme_id=$_POST['programme_id'];
    $staff_id=$_POST['staff_id'];
    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $student_id=$_POST['student_id'];

    $result=mysqli_query($conn,"update `course` set course_code='$course_code',course_title='$course_title',programme_id='$programme_id',staff_id='$staff_id',year='$year',semester='$semester',student_id='$student_id' where course_code='$edit_id'");
    if($result){
        header('location:course_units.php');
    }else{
        die(mysqli_error($conn));
    }
}
if(isset($_POST['submit'])){
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Units/Curriculum</title>
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
                <div class="container-fluid my-3 p-2">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="course_code" placeholder="Course Code" class="form-control"
                                autocomplete="off" value="<?php echo $course_code ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="course_title" placeholder="Course Title" class="form-control"
                                autocomplete="off" value="<?php echo $course_title ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="programme_id" placeholder="Programme ID" class="form-control"
                                autocomplete="off" value="<?php echo $programme_id ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="staff_id" placeholder="Staff ID" class="form-control"
                                autocomplete="off" value="<?php echo $staff_id ?>">
                        </div>
                        <div class="form-group">
                            <select name="year" id="" class="form-control">
                                <option value="">--select--</option>
                                <option value="1" <?php if($row['year']=="1"){ echo "selected"; } ?>>Year 1</option>
                                <option value="2" <?php if($row['year']=="2"){ echo "selected"; } ?>>Year 2</option>
                                <option value="3" <?php if($row['year']=="3"){ echo "selected"; } ?>>Year 3</option>
                                <option value="4" <?php if($row['year']=="4"){ echo "selected"; } ?>>Year 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <select name="semester" id="" class="form-control">
                                <option value="">--select--</option>
                                <option value="1"<?php if($row['semester']=="1"){ echo "selected"; } ?>>Semester 1</option>
                                <option value="2"<?php if($row['semester']=="2"){ echo "selected"; } ?>>Semester 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="student_id" placeholder="Student ID" class="form-control"
                                autocomplete="off" value="<?php echo $student_id ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Edit" name="edit_course" class="btn-primary">
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

</body>

</html>