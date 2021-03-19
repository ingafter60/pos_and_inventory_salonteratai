<?php
include_once 'config/connectdb.php';
session_start();

if ($_SESSION['useremail'] == "") {
    header('location:index.php');
}
?>
<!-- HEAD -->
<?php include 'inc/headuser.php'; ?>

<!-- HEADER -->
<?php include 'inc/headeruser.php'; ?>

<!-- ASIDE -->
<?php include 'inc/asideuser.php'; ?>

<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <h1>
            User Dashboard
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    Level
                </a>
            </li>
            <li class="active">Here</li>
        </ol>
    </section><!-- END Content Header -->

    <!-- Main content -->
    <section class="content container-fluid">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section><!-- END Main content -->

</div><!-- END Content Wrapper -->

<!-- FOOTER -->
<?php include_once 'inc/footer.php'; ?>