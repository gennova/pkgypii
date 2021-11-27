<?php echo view('\layout\header.php');?>
<?php echo view('layout\navbar.php');?>
<?php echo view('layout\sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Master Data Cabang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
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
        <div class="col-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title"><button type="button" class="btn btn-block btn-outline-success btn-flat" data-toggle="modal" data-target="#modal-lg">Tambah data cabang</button></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form form method="post" id="update_cabang" name="update_cabang" action="<?= site_url('/update') ?>">
              <input type="hidden" name="id" id="id" value="<?php echo $cabang['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="kodecabang">Kode Cabang</label>
                    <input type="kodecabang" class="form-control"  name="kodecabang" id="kodecabang" placeholder="Kode Cabang" value="<?php echo $cabang['kode']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="namacabang">Nama Cabang</label>
                    <input type="text" class="form-control"  name="namacabang" id="namacabang" placeholder="Nama Cabang" value="<?php echo $cabang['nama']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="alamatcabang">Alamat Cabang</label>
                    <input type="text" class="form-control" name="alamatcabang"  id="alamatcabang" placeholder="Alamat Cabang" value="<?php echo $cabang['alamat']; ?>" required>
                  </div>
                </div>
                <!-- /.card-body -->             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-primary swalDefaultSuccessEdit">Save changes</button>
            </div>
            </form>
              </div>
              <!-- /.card-body -->
            </div>
          <!-- ./col -->
        </div>
        <!-- /.card -->
        </div> <!-- /.end class 12 -->
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
        <!-- /.modal -->

        <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Cabang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" id="add_create" name="add_create" action="<?= base_url('/submit-form') ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="kodecabang">Kode Cabang</label>
                    <input type="kodecabang" class="form-control"  name="kodecabang" id="kodecabang" placeholder="Kode Cabang" required>
                  </div>
                  <div class="form-group">
                    <label for="namacabang">Nama Cabang</label>
                    <input type="text" class="form-control"  name="namacabang" id="namacabang" placeholder="Nama Cabang" required>
                  </div>
                  <div class="form-group">
                    <label for="alamatcabang">Alamat Cabang</label>
                    <input type="text" class="form-control" name="alamatcabang"  id="alamatcabang" placeholder="Alamat Cabang" required>
                  </div>
                </div>
                <!-- /.card-body -->             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  <?php echo view('layout\footer.php');?>