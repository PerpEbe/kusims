<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defer</title>
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
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="deferment.php"><<--</a>
                        </li>
                    </ol>
                    <div class="container-fluid"><span>

                        </span></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="" method="post">
                                <div class="form-group">
                                    <select class="form-control" name="session" id="">
                                        <option value="">--Session--</option>
                                        <option value="semester 1">semester 1</option>
                                        <option value="semester 2">semester 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="notes" placeholder="Notes" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="reason" placeholder="Reason" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Defer" name="submit" class="btn-primary">
                                </div>

                            </form>
                            <?php
                                if(isset($_POST['submit'])){
                                    $session=$_POST['session'];
                                    $notes=$_POST['notes'];
                                    $reason=$_POST['reason'];

                                    $result=mysqli_query($conn,"insert into `deferment` (session,notes,reason) values ('$session','$notes','$reason')");
                                    if($result){
                                        echo 'Submitted successfully';
                                        // header('location:deferment.php');                                    
                                    }else{
                                        die(mysqli_error($conn));
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>