</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<footer class="main-footer">
    <strong>Copyright © <?php echo date("Y"); ?> <a target="_blank" href="http://">Mecato Valluno</a>.</strong> derechos reservados.    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
    </div>
</footer>



</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url ?>recursos/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url ?>recursos/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url ?>recursos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url ?>recursos/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url ?>recursos/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url ?>recursos/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url ?>recursos/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url ?>recursos/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url ?>recursos/plugins/moment/moment.min.js"></script>
<script src="<?= base_url ?>recursos/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url ?>recursos/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url ?>recursos/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url ?>recursos/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url ?>recursos/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url ?>recursos/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->

</body>
</html>
<?php
ob_end_flush();
?>
