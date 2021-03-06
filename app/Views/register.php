<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PKG YPII PUSAT</title>

  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/fontawesome-free/css/all.min.css");?>>
  <!-- daterange picker -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/daterangepicker/daterangepicker.css");?>>
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css");?>>
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css");?>>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css");?>>
  <!-- Select2 -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/select2/css/select2.min.css");?>>
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css");?>>
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css");?>>
  <!-- BS Stepper -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/bs-stepper/css/bs-stepper.min.css");?>>
  <!-- dropzonejs -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/plugins/dropzone/min/dropzone.min.css");?>>
  <!-- Theme style -->
  <link rel="stylesheet" href=<?php echo base_url("adminlte/dist/css/adminlte.min.css");?>>
</head>
<body class="hold-transition login-page">
<div class="login-box" style="width:900px">
  <div class="login-logo">
    <a href="<?php echo base_url();?>"><b>PKG 2021</b>YPII Pusat</a>
  </div>
  <!-- /.login-logo -->
  <div class="card" >
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register Login / Add Data Guru</p>
      <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
      <form id="quickForm" method="post" id="add_create" name="add_create" action="<?= base_url('/addguru') ?>">
      <div class="form-group">
                    <label for="namaguru">Nama Lengkap Guru</label>
                    <input type="text" name="namaguru" class="form-control" id="namaguru" placeholder="Nama Lengkap guru" required>
                  </div>
      <div class="form-group">
                    <label for="exampleInputEmail1">Username/Email address</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
                  <label>Cabang</label>
                  <select class="form-control select2" style="width: 100%;" name="cabang">
                  <?php if($cabangs): ?>
                    <?php foreach($cabangs as $cabang): ?>
                        <?php echo '<option value="'.$cabang["id"].'">'.$cabang["nama"].'</option>' ;?>
                        <?php endforeach; ?>
                  <?php endif; ?>
                  </select>
        </div>
        <div class="form-group">
                  <label>Unit</label>
                  <select class="form-control select2" style="width: 100%;" name="unit">
                  <?php if($units): ?>
                    <?php foreach($units as $unit): ?>
                        <?php echo '<option value="'.$unit["id"].'">'.$unit["namaunit"].'</option>' ;?>
                        <?php endforeach; ?>
                  <?php endif; ?>
                  </select>
        </div>
        <div class="form-group">
                  <label>Level User</label>
                  <select class="form-control select2" style="width: 100%;" name="level">
                    <option value="admin" selected="selected">Admin</option>
                    <option value="guru">Guru</option>
                    <option value="supervisor">Supervisor</option>
                  </select>
                </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=<?php echo base_url("adminlte/plugins/jquery/jquery.min.js"); ?>></script>
<!-- Bootstrap 4 -->
<script src=<?php echo base_url("adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js");?>></script>
<!-- jquery-validation -->
<script src=<?php echo base_url("adminlte/plugins/jquery-validation/jquery.validate.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/jquery-validation/additional-methods.min.js");?>></script>
<!-- Select2 -->
<script src=<?php echo base_url("adminlte/plugins/select2/js/select2.full.min.js");?>></script>
<!-- Bootstrap4 Duallistbox -->
<script src=<?php echo base_url("adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js");?>></script>
<!-- InputMask -->
<script src=<?php echo base_url("adminlte/plugins/moment/moment.min.js");?>></script>
<script src=<?php echo base_url("adminlte/plugins/inputmask/jquery.inputmask.min.js");?>></script>
<!-- date-range-picker -->
<script src=<?php echo base_url("adminlte/plugins/daterangepicker/daterangepicker.js");?>></script>
<!-- bootstrap color picker -->
<script src=<?php echo base_url("adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js");?>></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=<?php echo base_url("adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js");?>></script>
<!-- Bootstrap Switch -->
<script src=<?php echo base_url("adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js");?>></script>
<!-- BS-Stepper -->
<script src=<?php echo base_url("adminlte/plugins/bs-stepper/js/bs-stepper.min.js");?>></script>
<!-- dropzonejs -->
<script src=<?php echo base_url("adminlte/plugins/dropzone/min/dropzone.min.js");?>></script>
<!-- AdminLTE App -->
<script src=<?php echo base_url("adminlte/dist/js/adminlte.min.js");?>></script>
<!-- AdminLTE for demo purposes 
<script src=<?php echo base_url("adminlte/dist/js/demo.js");?>></script>-->
<!-- Page specific script -->
</body>
</html>
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
      document.getElementById("quickForm").submit();
    }
  });
  $('#quickForm').validate({
    rules: {
      namaguru: {
        required: true,
      },
      email: {
        required: true,
      },
      password: {
        required: true,
        minlength: 8
      },
    },
    messages: {
      email: {
        required: "Please enter username or a email address",
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 8 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
