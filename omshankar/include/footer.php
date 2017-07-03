<div class="loader" id="loader">
 <div class="popup-loader">
 <h2><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></h2>
<p class="">Loading...</p>
 </div>
</div>
<style>
.loader {
    background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
    display: none;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
}
.popup-loader {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e1e1;
    border-radius: 4px;
    margin: auto;
    padding: 20px;
    position: relative;
    text-align: center;
    top: 20%;
    width: 300px;
}
.popup-loader i {
    color: #5595ff;
}
.popup-loader h2 {
    margin: 0 0 20px;
}
</style>
 <footer class="main-footer">        <strong>Copyright &copy; 2017 Omshankar Panel.</strong> All rights    reserved.  </footer>  <!-- Add the sidebar's background. This div must be placed       immediately after the control sidebar -->  <div class="control-sidebar-bg"></div></div><!-- ./wrapper --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><script src="plugins/jQuery/jquery-2.2.3.min.js"></script><!-- Bootstrap 3.3.6 --><script src="bootstrap/js/bootstrap.min.js"></script><!-- Select2 --><script src="plugins/select2/select2.full.min.js"></script><!-- InputMask --><script src="plugins/input-mask/jquery.inputmask.js"></script><script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script><script src="plugins/input-mask/jquery.inputmask.extensions.js"></script><!-- date-range-picker --><script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script><script src="plugins/daterangepicker/daterangepicker.js"></script><!-- bootstrap datepicker --><script src="plugins/datepicker/bootstrap-datepicker.js"></script><!-- bootstrap color picker --><script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script><!-- bootstrap time picker --><script src="plugins/timepicker/bootstrap-timepicker.min.js"></script><!-- SlimScroll 1.3.0 --><script src="plugins/slimScroll/jquery.slimscroll.min.js"></script><!-- iCheck 1.0.1 --><script src="plugins/iCheck/icheck.min.js"></script><!-- FastClick --><script src="plugins/fastclick/fastclick.js"></script><!-- AdminLTE App --><script src="dist/js/app.min.js"></script><!-- AdminLTE for demo purposes --><script src="dist/js/demo.js"></script><!-- Page script -->
 <script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
 <script>$(function () {    
 $('#datepicker').datepicker({      autoclose: true,	  format: 'dd/mm/yyyy'    });
 $('.EndDate').datepicker({      autoclose: true,	  format: 'yyyy-mm-dd'    });
 $('.StartDate').datepicker({      autoclose: true,	  format: 'yyyy-mm-dd'    });
 
 });</script>
 <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
   $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
 </body></html>