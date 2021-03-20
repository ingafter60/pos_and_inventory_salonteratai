<?php
include_once 'config/connectdb.php';
session_start();

if ($_SESSION['useremail'] == "") {
    header('location:changepassword.php');
}
?>
<!-- HEAD -->
<?php include 'inc/head.php'; ?>

<!-- HEADER -->
<?php include 'inc/header.php'; ?>

<!-- ASIDE -->
<?php include 'inc/aside.php'; ?>

<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <!-- <h1>
            Change Password
            <small></small>
        </h1> -->
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section><!-- END Content Header -->

    <!-- Main content -->
    <section class="content container-fluid">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Change Password</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <!-- <div class="box-footer"> -->
                    <button type="submit" class="btn btn-primary" name="btnupdate">Update</button>
                    <!-- </div> -->
                </form>
            </div>
        </div>

        <div class="col-md-4"></div>
    </section><!-- END Main content -->

</div><!-- END Content Wrapper -->

<!-- FOOTER -->
<?php include_once 'inc/footer.php'; ?>