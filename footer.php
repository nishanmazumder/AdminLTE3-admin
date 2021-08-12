<!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="#">Asif</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer> -->

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="dist/plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="dist/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="dist/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="dist/js/fakeLoader.min.js"></script>
<script>
    $(window).load(function() {
        $.fakeLoader({
            bgColor: '#00000080',
            spinner: 'spinner2'
        });
    })
</script>

<script src="dist/js/kronos.js"></script>

<script>
    $('#nmDateForm').kronos({
        periodTo: '#nmDateForm'
    });
    $('#nmDateTo').kronos({
        periodFrom: '#nmDateTo'
    });
</script>

</body>

</html>