<?php
require '../../routes/web.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw_info</title>

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
                <div class="d-flex justify-content-center" >
                    <h3>รายะละเอียดการบ้าน</h3>
                </div>

            </div>
            <div class="page-content">
                <div class=" d-lg-flex justify-content-center">
                    <!--
                    <div class="card col-lg-5 col-12 mx-3">
                        <div class="container m-3">
                            //import ตารางการบ้าน
                        </div>
                    </div>-->

                    <?php require_once $model.$role_route."views_hw_detail_parent.php" ?>
                </div>
            </div>

            </section>
        </div>

        <?php //include_once "../../controllers/footer.php"; ?>
    </div>
    </div>
    <script src="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../../assets/js/pages/dashboard.js"></script>

    <script src="../../assets/js/main.js"></script>
</body>

</html>