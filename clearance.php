<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearance</title>
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
                        <li class="breadcrumb-item active"><a href="admission.php">
                                <<</a>
                        </li>
                    </ol>
                    <div class="container-fluid"><span>
                            <h2>Clearance</h2>
                        </span></div>
                    <div class="card-body">
                        <h3>Fill up the Survey</h3>
                        <form action="" method="post">
                            <label for="">How do you rate the services offered to you by the_institution on a scale of
                                1-10?</label>
                            <input type="text" name="rate" class="form-control" autocomplete="off">
                        </form>
                        <button class="btn-primary my-2"><a class="text-light" href="#">Save</a></button>
                    </div>
                    
                </div>
            </main>
        </div>
    </div>
    </div>
</body>

</html>