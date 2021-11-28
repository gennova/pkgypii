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
            <h1 class="m-0">Master Data Unit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Unit</li>
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Unit</th>
                    <th>Nama Unit</th>
                    <th>Alamat</th>
                    <th>Telpon</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if($units): ?>
                    <?php foreach($units as $unit): ?>
                        <tr>
                    <td><?php echo $unit['id']; ?></td>
                    <td><?php echo $unit['kodeunit']; ?></td>
                    <td><?php echo $unit['namaunit']; ?></td>
                    <td><?php echo $unit['alamatunit']; ?></td>
                    <td><?php echo $unit['telpon']; ?></td>
                    <td><?php echo $unit['email']; ?></td>
                    <td><a href="<?php echo base_url('editunit/'.$unit['id']);?>"><span style="font-size: 1em; color: blue;"><i class="fas fa-clipboard"></span></a></i>&nbsp&nbsp
                        <a href="<?php echo base_url('editunit/'.$unit['id']);?>"><span style="font-size: 1em; color: orange;"><i class="fas fa-edit"></span></a></i>&nbsp&nbsp
                        <a href="<?php echo base_url('deleteunit/'.$unit['id']);?>"><span style="font-size: 1em; color: Tomato;"><i class="fas fa-trash"></span></a></i></td>&nbsp&nbsp
                  </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Kode Unit</th>
                    <th>Nama Unit</th>
                    <th>Alamat</th>
                    <th>Telpon</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
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
              <h4 class="modal-title">Tambah Unit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method="post" id="add_create" name="add_create" action="<?= base_url('/saveunit') ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="kodeunit">Kode Cabang</label>
                    <input type="kodeunit" class="form-control"  name="kodeunit" id="kodeunit" placeholder="Kode Unit" required>
                  </div>
                  <div class="form-group">
                    <label for="namaunit">Nama Cabang</label>
                    <input type="text" class="form-control"  name="namaunit" id="namaunit" placeholder="Nama Unit" required>
                  </div>
                  <div class="form-group">
                    <label for="alamatunit">Alamat Cabang</label>
                    <input type="text" class="form-control" name="alamatunit"  id="alamatunit" placeholder="Alamat Unit" required>
                  </div>
                  <div class="form-group">
                    <label for="telpon">Telpon</label>
                    <input type="text" class="form-control" name="telpon"  id="telpon" placeholder="Telpon" >
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"  id="email" placeholder="Email Unit" >
                  </div>
                </div>
                <!-- /.card-body -->             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary swalDefaultSuccessSave">Save changes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  <?php echo view('layout\footer.php');?>