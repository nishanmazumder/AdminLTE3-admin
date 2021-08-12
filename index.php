<?php

include_once 'header.php';

include_once 'sidebar.php';

?>

<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header nm-main-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Overview</h1>
                </div><!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group nm-date-range float-right">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </div>
                            <input type="text" placeholder="From" id="nmDateForm">
                            <input type="text" placeholder="To" id="nmDateTo">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box nm-info-box">
                        <span class="info-box-icon"><i class="fa fa-user" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <h3 class="nm-info-box-text">Customers</h3>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <h3 class="nm-info-box-text">Saved Products</h3>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon"><i class="fas fa-pound-sign"></i></span>

                        <div class="info-box-content">
                            <h3 class="nm-info-box-text">Wish List Value</h3>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Notifications Summary</h1>
                </div><!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row nm-notification">
                <div class="col-md-2 col-sm-3 col-12">
                    <div class="info-box">
                        <span class="info-box-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <h3 class="info-box-text nm-info-box-text">Sent</h3>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-2 col-sm-3 col-12">
                    <div class="info-box">
                        <span class="info-box-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <h3 class="info-box-text nm-info-box-text">Opened</h3>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-3 col-12">
                    <div class="info-box">
                        <span class="info-box-icon"><i class="far fa-hand-point-up"></i></span>

                        <div class="info-box-content">
                            <h3 class="info-box-text nm-info-box-text">Click Through</h3>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-3 col-12">
                    <div class="info-box">
                        <span class="info-box-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>

                        <div class="info-box-content">
                            <h3 class="info-box-text nm-info-box-text">Recovered Items</h3>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-2 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon"><i class="fab fa-algolia"></i></span>

                        <div class="info-box-content">
                            <h3 class="info-box-text nm-info-box-text">Revenue</h3>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>

<?php include_once 'footer.php'; ?>