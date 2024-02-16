<?php
include 'connect.php';
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
                <h1 class="mt-4">Curriculum</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="course_units.php">
                            <<--Back </a>
                    </li>
                    <li class="breadcrumb-item active"><a href="add_course_units.php">Add
                            Units/Curriculum(staff)</a></li>
                </ol>
                <div class="container-fluid">

                    <div class="accordion accordion-flush mb-4" id="unitReg1-YEAR-2">
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="year1-unit-reg-heading-YEAR-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#year1-unit-reg-YEAR-2" aria-expanded="false"
                                    aria-controls="year1-unit-reg-YEAR-2">
                                    YEAR 2
                                </button>
                            </h2>

                            <div class="accordion-body">
                                <div class="accordion accordion-flush" id="year1unitReg-YEAR-2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="sem1-unit-reg-year1-heading-YEAR-2-SEMESTER-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#sem1-unit-reg-year1-YEAR-2-SEMESTER-2"
                                                aria-expanded="false"
                                                aria-controls="sem1-unit-reg-year1-YEAR-2-SEMESTER-2">
                                                SEMESTER 2
                                            </button>
                                        </h2>
                                        <div id="sem1-unit-reg-year1-YEAR-2-SEMESTER-2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="sem1-unit-reg-year1-heading-YEAR-2-SEMESTER-2"
                                            data-bs-parent="#year1unitReg-YEAR-2">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12 table-responsive">
                                                        <table class="table w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="4">SEMESTER 2</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>BIT221.</td>
                                                                    <td>Event Driven Programming</td>
                                                                    <td>CORE</td>
                                                                    <td>
                                                                        <span
                                                                            class="text-white bg-success p-1">Approved</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BIT222.</td>
                                                                    <td>Web Systems and Technologies I</td>
                                                                    <td>CORE</td>
                                                                    <td>
                                                                        <span
                                                                            class="text-white bg-success p-1">Approved</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BIT223.</td>
                                                                    <td>Networking Administration and Management
                                                                    </td>
                                                                    <td>CORE</td>
                                                                    <td>
                                                                        <span
                                                                            class="text-white bg-success p-1">Approved</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BIT224.</td>
                                                                    <td>Research Methods and Technical Writing in
                                                                        Computing</td>
                                                                    <td>CORE</td>
                                                                    <td>
                                                                        <span
                                                                            class="text-white bg-success p-1">Approved</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BIT225</td>
                                                                    <td>Data Analysis Techniques</td>
                                                                    <td>CORE</td>
                                                                    <td>
                                                                        <span
                                                                            class="text-white bg-success p-1">Approved</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BIT226</td>
                                                                    <td>Business Application Software</td>
                                                                    <td>CORE</td>
                                                                    <td>
                                                                        <span
                                                                            class="text-white bg-success p-1">Approved</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BIT227</td>
                                                                    <td>Database System Design and Development</td>
                                                                    <td>CORE</td>
                                                                    <td>
                                                                        <span
                                                                            class="text-white bg-success p-1">Approved</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>STA225</td>
                                                                    <td>Probability and Statistics II</td>
                                                                    <td>CORE</td>
                                                                    <td>
                                                                        <span
                                                                            class="text-white bg-success p-1">Approved</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sem1-unit-reg-year1-heading-YEAR-2-SEMESTER-1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#sem1-unit-reg-year1-YEAR-2-SEMESTER-1" aria-expanded="false"
                                        aria-controls="sem1-unit-reg-year1-YEAR-2-SEMESTER-1">
                                        SEMESTER 1
                                    </button>
                                </h2>
                                <div id="sem1-unit-reg-year1-YEAR-2-SEMESTER-1" class="accordion-collapse collapse"
                                    aria-labelledby="sem1-unit-reg-year1-heading-YEAR-2-SEMESTER-1"
                                    data-bs-parent="#year1unitReg-YEAR-2">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-12 table-responsive">
                                                <table class="table w-100">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="4">SEMESTER 1</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>BIT211</td>
                                                            <td>Object-Oriented Programming II</td>
                                                            <td>CORE</td>
                                                            <td>
                                                                <span class="text-white bg-success p-1">Approved</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BIT212</td>
                                                            <td>Introduction to Databases</td>
                                                            <td>CORE</td>
                                                            <td>
                                                                <span class="text-white bg-success p-1">Approved</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BIT213</td>
                                                            <td>Platform Technologies II</td>
                                                            <td>CORE</td>
                                                            <td>
                                                                <span class="text-white bg-success p-1">Approved</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BIT214</td>
                                                            <td>Computer Networking</td>
                                                            <td>CORE</td>
                                                            <td>
                                                                <span class="text-white bg-success p-1">Approved</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BIT216</td>
                                                            <td>Multimedia Technologies</td>
                                                            <td>CORE</td>
                                                            <td>
                                                                <span class="text-white bg-success p-1">Approved</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BIT217</td>
                                                            <td>Principles and Practices of IT Management</td>
                                                            <td>CORE</td>
                                                            <td>
                                                                <span class="text-white bg-success p-1">Approved</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BIT218</td>
                                                            <td>Accounting Principles for IT</td>
                                                            <td>CORE</td>
                                                            <td>
                                                                <span class="text-white bg-success p-1">Approved</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>BIT215.</td>
                                                            <td>System Analysis and Design</td>
                                                            <td>CORE</td>
                                                            <td>
                                                                <span class="text-white bg-success p-1">Approved</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    <!-- <div class="card-body">
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
                                    // $result=mysqli_query($conn,"select * from course");
                                    // if($result){
                                        
                                    //     while($row=mysqli_fetch_assoc($result)){
                                    //         $course_code=$row['course_code'];
                                    //         $course_title=$row['course_title'];
                                    //         $year=$row['year'];
                                    //         $semester=$row['semester'];

                                    //         echo '<tr>
                                    //         <td>'.$course_code.'</td>
                                    //         <td>'.$course_title.'</td>
                                    //         <td>'.$year.'</td>
                                    //         <td>'.$semester.'</td>
                                    //     </tr>';
                                    //     }
                                    // }else{
                                    //     die(mysqli_error($conn));
                                    // }
                                ?>
                                </tbody>
                            </table>
                        </div> -->
    </div>
    </main>
    </div>
    </div>
</body>

</html>