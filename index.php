<?php
include 'koneksi.php';
include 'templates/header.php';
include 'templates/sidebar.php';
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <?php include 'templates/navbar.php';
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            
            <?php include 'routes.php' ; ?>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?php include 'templates/footer.php';
?>