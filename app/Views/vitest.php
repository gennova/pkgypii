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
<div class="card card-danger" style="width:90%">
<div class="card-header">
                <h3 class="card-title">Penilaian Kinerja Guru</h3>
              </div>
  <!-- /.login-logo -->
  <div class="card" >
    <div class="card-body login-card-body">
    <div class="login-logo">
    <a href="<?php echo base_url();?>"><b>PKG 2021</b>YPII Pusat</a>
  </div>
      <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
      <form id="quickForm" method="post" id="add_create" name="add_create" action="<?= base_url('/addguru') ?>">
      <div class="form-group">
                    <label for="namaguru">Nama Lengkap Guru</label>
                    <input type="text" name="namaguru" class="form-control" id="namaguru" placeholder="Nama Lengkap guru" required>
      </div>
           <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Kompetensi Pedagogis</h3>
              </div>
            <div class="card-body" style="margin-top:-70px">
                <!-- Minimal style -->
                <table class="table table-bordered table-striped">
                      <div class="row">
                      <tr>
                          <div class="col-sm-10">
                          <td width="90%">Dari pernyataan di bawah ini mana yang terlihat / tampak dalam persiapan pembelajaran?</td>
                          </div>
                          <div class="col-sm-2">
                          <td>5</td><td>4</td><td>3</td><td>2</td><td>1</td>
                          </div>
                          </tr>
                      </div>
                <div class="row">    
                  <tr>                
                        <div class="col-sm-10">
                        <td width="90%">Mengenal dan menghargai karakteristik semua peserta didik sebagai pribadi yang unik </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="r1" checked id="radioSuccess1">
                                        <label for="radioSuccess1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" name="r1" checked>
                                        <label for="radioPrimary1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="r1" checked id="radioInfo1">
                                        <label for="radioInfo1">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="r1" checked id="radioWarning1">
                                        <label for="radioWarning1">
                                        </label>
                                    </div>      </td>                
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="r1" checked id="radioDanger1">
                                        <label for="radioDanger1">
                                        </label>
                                    </div></td>
                        </div>
                        </div>
                </div></tr>
                <div class="row">
      </tr>
                        <div class="col-sm-10">
                        <td>Memahami kondisi psikologis dan penerapannya terhadap anak sesuai dengan tingkat usianya. </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="rsss" checked id="radioSuccesssss">
                                        <label for="radioSuccesssss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimarysss" name="rsss" checked>
                                        <label for="radioPrimarysss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="rsss" checked id="radioInfosss">
                                        <label for="radioInfosss">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="rsss" checked id="radioWarningsss">
                                        <label for="radioWarningsss">
                                        </label>
                                    </div>   </td>                   
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="rsss" checked id="radioDangersss">
                                        <label for="radioDangersss">
                                        </label>
                                </div></td>
                        </div>
                        </div>
                </div>
                <div class="row">
                  <tr>
                        <div class="col-sm-10">
                        <td>Mampu memotivasi siswa dalam belajar dan memimpikan cita-citanya</td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="r3" checked id="radioSuccess3">
                                        <label for="radioSuccess3">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary3" name="r3" checked>
                                        <label for="radioPrimary3">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="r3" checked id="radioInfo3">
                                        <label for="radioInfo3">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="r3" checked id="radioWarning3">
                                        <label for="radioWarning3">
                                        </label>
                                    </div>  </td>                    
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="r3" checked id="radioDanger3">
                                        <label for="radioDanger3">
                                        </label>
                                    </div></td>
                        </div> <!-- form -->
                        </div>  <!-- col sm 2 -->
      </tr>
                </div>  <!-- row -->
                <div class="row">
                  <tr><div class="col-sm-10">
                  <td>Membimbing dan mengarahkan peserta didik menjadi insan cerdas,otentik, beriman akan PI, dan solider 
                  </td></div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="r4" checked id="radioSuccess4">
                                        <label for="radioSuccess4">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary4" name="r4" checked>
                                        <label for="radioPrimary4">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="r4" checked id="radioInfo4">
                                        <label for="radioInfo4">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="r4" checked id="radioWarning4">
                                        <label for="radioWarning4">
                                        </label>
                                    </div></td>                      
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="r4" checked id="radioDanger4">
                                        <label for="radioDanger4">
                                        </label>
                                </div></td>
                        </div>
                        </div></tr>
                </div>
                </table>
                </div>  <!-- card body -->
               </div>  <!-- card sukses -->

               <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Kompetensi Mengajar</h3>
              </div>
              <div class="card-body" style="margin-top:-173px">
                <!-- Minimal style -->
                <table class="table table-bordered table-striped">
                      <div class="row">
                      <tr>
                          <div class="col-sm-10">
                          <td> 	<b>2.A Kegiatan Pembuka</b></td><td>5</td><td>4</td><td>3</td><td>2</td><td>1</td></tr><tr>
                          <td width="90%">Apersepsi (review materi pertemuan sebelumnya, review PR siswa jika ada, kesesuaian apersepsi dengan materi yang akan dibahas/hook) </td>
                          </div>
                          <div class="col-sm-2">
                          <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="r1" checked id="radioSuccess1">
                                        <label for="radioSuccess1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" name="r1" checked>
                                        <label for="radioPrimary1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="r1" checked id="radioInfo1">
                                        <label for="radioInfo1">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="r1" checked id="radioWarning1">
                                        <label for="radioWarning1">
                                        </label>
                                    </div>      </td>                
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="r1" checked id="radioDanger1">
                                        <label for="radioDanger1">
                                        </label>
                                    </div></td>
                        </div>
                          </div>
                          </tr>
                      </div>
                <div class="row">    
                  <tr>                
                        <div class="col-sm-10">
                        <td width="90%">Guru menyampaikan isi , tujuan, langkah pembelajaran </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="r1" checked id="radioSuccess1">
                                        <label for="radioSuccess1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" name="r1" checked>
                                        <label for="radioPrimary1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="r1" checked id="radioInfo1">
                                        <label for="radioInfo1">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="r1" checked id="radioWarning1">
                                        <label for="radioWarning1">
                                        </label>
                                    </div>      </td>                
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="r1" checked id="radioDanger1">
                                        <label for="radioDanger1">
                                        </label>
                                    </div></td>
                        </div>
                        </div>
                </div></tr>
                <div class="row">
      </tr>
                        <div class="col-sm-10">
                        <td>Guru menyampaikan life skill/nilai-nilai yang perlu dan manfaatnya dalam kehidupan  </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="rsss" checked id="radioSuccesssss">
                                        <label for="radioSuccesssss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimarysss" name="rsss" checked>
                                        <label for="radioPrimarysss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="rsss" checked id="radioInfosss">
                                        <label for="radioInfosss">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="rsss" checked id="radioWarningsss">
                                        <label for="radioWarningsss">
                                        </label>
                                    </div>   </td>                   
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="rsss" checked id="radioDangersss">
                                        <label for="radioDangersss">
                                        </label>
                                </div></td>
                        </div>  <!-- form group -->
                        </div> <!-- col sm 2 -->
                </div>  <!-- row -->

                <div class="row">
                      <tr>
                          <div class="col-sm-10">
                          <td> 	<b>2.B 2B Kegiatan Inti !</b></td><td>5</td><td>4</td><td>3</td><td>2</td><td>1</td></tr><tr>
                          <td width="90%">Apersepsi (review materi pertemuan sebelumnya, review PR siswa jika ada, kesesuaian apersepsi dengan materi yang akan dibahas/hook) </td>
                          </div>
                          <div class="col-sm-2">
                          <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="r1" checked id="radioSuccess1">
                                        <label for="radioSuccess1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" name="r1" checked>
                                        <label for="radioPrimary1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="r1" checked id="radioInfo1">
                                        <label for="radioInfo1">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="r1" checked id="radioWarning1">
                                        <label for="radioWarning1">
                                        </label>
                                    </div>      </td>                
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="r1" checked id="radioDanger1">
                                        <label for="radioDanger1">
                                        </label>
                                    </div></td>
                        </div>
                          </div>
                          </tr>
                      </div>
                <div class="row">    
                  <tr>                
                        <div class="col-sm-10">
                        <td width="90%">Guru menyampaikan isi , tujuan, langkah pembelajaran </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="r1" checked id="radioSuccess1">
                                        <label for="radioSuccess1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" name="r1" checked>
                                        <label for="radioPrimary1">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="r1" checked id="radioInfo1">
                                        <label for="radioInfo1">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="r1" checked id="radioWarning1">
                                        <label for="radioWarning1">
                                        </label>
                                    </div>      </td>                
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="r1" checked id="radioDanger1">
                                        <label for="radioDanger1">
                                        </label>
                                    </div></td>
                        </div>
                        </div>
                </div></tr>
                <div class="row">
                 </tr>
                        <div class="col-sm-10">
                        <td>Guru menyampaikan life skill/nilai-nilai yang perlu dan manfaatnya dalam kehidupan  </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="rsss" checked id="radioSuccesssss">
                                        <label for="radioSuccesssss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimarysss" name="rsss" checked>
                                        <label for="radioPrimarysss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="rsss" checked id="radioInfosss">
                                        <label for="radioInfosss">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="rsss" checked id="radioWarningsss">
                                        <label for="radioWarningsss">
                                        </label>
                                    </div>   </td>                   
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="rsss" checked id="radioDangersss">
                                        <label for="radioDangersss">
                                        </label>
                                </div></td>
                        </div>  <!-- form group -->
                        </div> <!-- col sm 2 -->
                </div>  <!-- row -->
                <div class="row">
                 </tr>
                        <div class="col-sm-10">
                        <td>Guru menyampaikan life skill/nilai-nilai yang perlu dan manfaatnya dalam kehidupan  </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="rsss" checked id="radioSuccesssss">
                                        <label for="radioSuccesssss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimarysss" name="rsss" checked>
                                        <label for="radioPrimarysss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="rsss" checked id="radioInfosss">
                                        <label for="radioInfosss">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="rsss" checked id="radioWarningsss">
                                        <label for="radioWarningsss">
                                        </label>
                                    </div>   </td>                   
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="rsss" checked id="radioDangersss">
                                        <label for="radioDangersss">
                                        </label>
                                </div></td>
                        </div>  <!-- form group -->
                        </div> <!-- col sm 2 -->
                </div>  <!-- row -->
                <div class="row">
                 </tr>
                        <div class="col-sm-10">
                        <td>Guru menyampaikan life skill/nilai-nilai yang perlu dan manfaatnya dalam kehidupan  </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="rsss" checked id="radioSuccesssss">
                                        <label for="radioSuccesssss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimarysss" name="rsss" checked>
                                        <label for="radioPrimarysss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="rsss" checked id="radioInfosss">
                                        <label for="radioInfosss">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="rsss" checked id="radioWarningsss">
                                        <label for="radioWarningsss">
                                        </label>
                                    </div>   </td>                   
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="rsss" checked id="radioDangersss">
                                        <label for="radioDangersss">
                                        </label>
                                </div></td>
                        </div>  <!-- form group -->
                        </div> <!-- col sm 2 -->
                </div>  <!-- row -->
                <div class="row">
                 </tr>
                        <div class="col-sm-10">
                        <td>Guru menyampaikan life skill/nilai-nilai yang perlu dan manfaatnya dalam kehidupan  </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="rsss" checked id="radioSuccesssss">
                                        <label for="radioSuccesssss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimarysss" name="rsss" checked>
                                        <label for="radioPrimarysss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="rsss" checked id="radioInfosss">
                                        <label for="radioInfosss">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="rsss" checked id="radioWarningsss">
                                        <label for="radioWarningsss">
                                        </label>
                                    </div>   </td>                   
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="rsss" checked id="radioDangersss">
                                        <label for="radioDangersss">
                                        </label>
                                </div></td>
                        </div>  <!-- form group -->
                        </div> <!-- col sm 2 -->
                </div>  <!-- row -->
                <div class="row">
                 </tr>
                        <div class="col-sm-10">
                        <td>Guru menyampaikan life skill/nilai-nilai yang perlu dan manfaatnya dalam kehidupan  </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="rsss" checked id="radioSuccesssss">
                                        <label for="radioSuccesssss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimarysss" name="rsss" checked>
                                        <label for="radioPrimarysss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="rsss" checked id="radioInfosss">
                                        <label for="radioInfosss">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="rsss" checked id="radioWarningsss">
                                        <label for="radioWarningsss">
                                        </label>
                                    </div>   </td>                   
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="rsss" checked id="radioDangersss">
                                        <label for="radioDangersss">
                                        </label>
                                </div></td>
                        </div>  <!-- form group -->
                        </div> <!-- col sm 2 -->
                </div>  <!-- row -->
                <div class="row">
                 </tr>
                        <div class="col-sm-10">
                        <td>Guru menyampaikan life skill/nilai-nilai yang perlu dan manfaatnya dalam kehidupan  </td>
                        </div>
                        <div class="col-sm-2">
                        <div class="form-group clearfix">
                                    <td><div class="icheck-success d-inline">
                                        <input type="radio" name="rsss" checked id="radioSuccesssss">
                                        <label for="radioSuccesssss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimarysss" name="rsss" checked>
                                        <label for="radioPrimarysss">
                                        </label>
                                    </div></td>
                                    <td><div class="icheck-info d-inline">
                                        <input type="radio" name="rsss" checked id="radioInfosss">
                                        <label for="radioInfosss">
                                        </label>
                                    </div></td>

                                    <td><div class="icheck-warning d-inline">
                                        <input type="radio" name="rsss" checked id="radioWarningsss">
                                        <label for="radioWarningsss">
                                        </label>
                                    </div>   </td>                   
                                    
                                    <td><div class="icheck-danger d-inline">
                                        <input type="radio" name="rsss" checked id="radioDangersss">
                                        <label for="radioDangersss">
                                        </label>
                                </div></td>
                        </div>  <!-- form group -->
                        </div> <!-- col sm 2 -->
                </div>  <!-- row -->
                </table>
                </div>  <!-- card body -->
               </div>  <!-- card sukses -->
           </div>
            
          <!-- /.col -->

          <!-- /.col -->
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
