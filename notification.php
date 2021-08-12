<?php

include_once 'header.php';

include_once 'sidebar.php';

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Automations/Notifications</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Notification 1</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subject Line">
                                </div>
                                <div class="form-group">
                                    <label>Schedule For</label>
                                    <select class="form-control select2 select2-warning" data-dropdown-css-class="select2-warning" style="width: 100%;">
                                        <option selected="selected">Select Schedule</option>
                                        <option value="None">None</option>
                                        <option value="2 Hours">2 Hours</option>
                                        <option value="4 Hours">4 Hours</option>
                                        <option value="6 Hours">6 Hours</option>
                                        <option value="8 Hours">8 Hours</option>
                                        <option value="10 Hours">10 Hours</option>
                                        <option value="12 Hours">12 Hours</option>
                                        <option value="14 Hours">14 Hours</option>
                                        <option value="16 Hours">16 Hours</option>
                                        <option value="18 Hours">18 Hours</option>
                                        <option value="20 Hours">20 Hours</option>
                                        <option value="22 Hours">22 Hours</option>
                                        <option value="24 Hours">24 Hours</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Save</button>
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                    <div class="d-grid nm-btn-full">
                        <button type="submit" class="btn btn-warning">Create New</button>
                    </div>

                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include_once 'footer.php'; ?>