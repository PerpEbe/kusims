<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Units/Curriculum</title>
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
                        <li class="breadcrumb-item active px-5 py-2"><a href="unit_registration.php">Unit Registration</a></li>
                        <li class="breadcrumb-item active px-5 py-2"><a href="unit_history.php">Unit History</a></li>
                        <li class="breadcrumb-item active px-5 py-2"><a href="curriculum.php">Curriculum</a></li>
                    </ol>
                    <form action="" method="get">
                        <div class="form-group">
                            <label for="year">Year</label>
                            <select name="year" id="" class="form-control">
                                <option value="">--select--</option>
                                <option value="1">Year 1</option>
                                <option value="2">Year 2</option>
                                <option value="3">Year 3</option>
                                <option value="4">Year 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select name="semester" id="" class="form-control">
                                <option value="">--select--</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                            </select>
                        </div>
                        <input type="submit" value="Submit" name="submit" class="btn-primary">                        
                    </form>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Title</th>
                                        <th>Year</th>
                                        <th>Semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(isset($_POST['submit'])){
                                        $year=$_POST['year'];
                                        $semester=$_POST['semester'];
                                    
                                        $result=mysqli_query($conn,"select * from `course` where year='$year' && semester='$semester'");
                                        if($result){
                                            while($row=mysqli_fetch_assoc($result)){
                                                $course_code=$row['course_code'];
                                                $course_title=$row['course_title'];
                                                $year=$row['year'];
                                                $semester=$row['semester'];
    
                                                echo '<tr>
                                                <td>'.$course_code.'</td>
                                                <td>'.$course_title.'</td>
                                                <td>'.$year.'</td>
                                                <td>'.$semester.'</td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm"><a href="edit_course_units.php?edit_id='.$course_code.'" class="text-light">Update</a></button>
                                                    <button class="btn btn-danger btn-sm"><a href="delete_agent.php?delete_id='.$course_code.'" class="text-light">Delete</a></button>
                                                </td>
                                            </tr>';
                                            }
                                        }
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