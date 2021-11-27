<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=<?php echo base_url("adminlte/plugins/jquery/jquery.min.js");?>></script>
<!-- jQuery UI 1.11.4 -->
<script src=<?php echo base_url("adminlte/plugins/jquery-ui/jquery-ui.min.js");?>></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=<?php echo base_url("adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js");?>></script>
<!-- DataTables  & Plugins -->
<script src=<?php echo base_url("adminlte/plugins/datatables/jquery.dataTables.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/jszip/jszip.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/pdfmake/pdfmake.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/pdfmake/vfs_fonts.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/datatables-buttons/js/buttons.html5.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/datatables-buttons/js/buttons.print.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js");?>></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- ChartJS -->
<script src=<?php echo base_url("adminlte/plugins/chart.js/Chart.min.js");?>></script>
<!-- Sparkline -->
<script src=<?php echo base_url("adminlte/plugins/sparklines/sparkline.js");?>></script>
<!-- JQVMap -->
<script src=<?php echo base_url("adminlte/plugins/jqvmap/jquery.vmap.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js");?>></script>
<!-- jQuery Knob Chart -->
<script src=<?php echo base_url("adminlte/plugins/jquery-knob/jquery.knob.min.js");?>></script>
<!-- daterangepicker -->
<script src=<?php echo base_url("adminlte/plugins/moment/moment.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/daterangepicker/daterangepicker.js");?>></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=<?php echo base_url("adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js");?>></script>
<!-- Summernote -->
<script src=<?php echo base_url("adminlte/plugins/summernote/summernote-bs4.min.js");?>></script>
<!-- overlayScrollbars -->
<script src=<?php echo base_url("adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js");?>></script>
<!-- AdminLTE App -->
<script src=<?php echo base_url("adminlte/dist/js/adminlte.js");?>></script>
<!-- AdminLTE for demo purposes 
<script src=<?php echo base_url("adminlte/dist/js/demo.js");?>></script>
AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=<?php echo base_url("adminlte/dist/js/pages/dashboard.js");?>></script>
</body>
</html>
