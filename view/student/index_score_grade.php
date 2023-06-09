<?php
require '../../routes/web.php';
require $model.$role_route.'main-student.php';
$std_id = $_SESSION['user_id'];
$std_detail=std_detail($conn,$std_id);
$class_id = $std_detail['classroom_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบสั่งการบ้านที่อยากนอน</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <?php include_once $layout."sidebar.php"; ?>
        <div id="main">
            <header class="mb-3">
                <?php include_once $layout."navbar.php"; ?>
            </header>

            <div class="page-heading">

                <h3>เกรด</h3>

            </div>

            <div class="page-content">
                <section class="row">
                    <div class="row">
                        <div class="d-flex justify-content-center mx-3">
                            <div class="col-12">
                                <div class="row text-center text-lg-start">
                                    <div class="col-12 col-lg-6">
                                        <div class="card">
                                            <div class="card-header text-start">
                                                <h4>ชื่อผู้เรียน</h4>
                                            </div>
                                            <div class="card-body">
                                                <p>&nbsp;&nbsp;&nbsp;<?php echo $std_detail['name']." ".$std_detail['surname']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>เกรดเฉลี่ยสะสม</h4>
                                            </div>
                                            <div class="card-body">
                                                <p>&nbsp;&nbsp;&nbsp;</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <div class="card-body">
                                    <?php require_once "../../model/student/score_grade.php";
                                    print_grade_list_($conn,$stu_id)?>
                                </div>
                            </div>
                        </div>
                    </div>



                </section>
            </div>

            <?php // require_once "../../controllers/footer.php"; ?>
        </div>
    </div>
    <script src="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../../assets/js/pages/dashboard.js"></script>

    <script src="../../assets/js/main.js"></script>
</body>

</html>