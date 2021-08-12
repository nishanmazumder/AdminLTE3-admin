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
                    <h1 class="m-0">Account Settings </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-12">

                    <!-- Profile Image -->
                    <div class="card card-warning card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="img/user4-128x128.jpg" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">Nina Mcintire</h3>

                            <p class="text-muted text-center">Software Engineer</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <a class="btn btn-warning btn-block active" href="#activity" data-toggle="tab">Information</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="btn btn-warning btn-block" href="#settings" data-toggle="tab">Change Password</a>
                                </li>
                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">

                                <!-- Basic Info -->
                                <div class="active tab-pane" id="activity">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">User Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" value="Nina Mcintire">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" value="arosh019@gmail.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills" value="Seller">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Upload Logo</label>
                                            <div class="col-sm-10">
                                                <input type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-warning">Update Information</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Password change -->
                                <div class="tab-pane" id="settings">
                                    <form>
                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-12 col-form-label">Old Password</label>
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" id="inputName" value="******">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputName" class="col-sm-12 col-form-label">New Password</label>
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" id="inputName" value="******">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-warning">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php include_once 'footer.php'; ?>