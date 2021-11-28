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
            <h1 class="m-0">Master Data Guru</h1>
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
                <a href="<?php echo base_url('/register');?>"><h3 class="card-title"><button type="button" class="btn btn-block btn-outline-success btn-flat">Tambah data guru</button></h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Cabang</th>
                    <th>Unit</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if($gurus): ?>
                    <?php foreach($gurus as $guru): ?>
                        <tr>
                    <td><?php echo $guru['id']; ?></td>
                    <td><?php echo $guru['namaguru']; ?></td>
                    <td><?php echo $guru['nama']; ?></td>
                    <td><?php echo $guru['namaunit']; ?></td>
                    <td><?php echo $guru['level']; ?></td>
                    <td><a href="<?php echo base_url('editguru/'.$guru['id']);?>"><span style="font-size: 1em; color: blue;"><i class="fas fa-clipboard"></span></a></i>&nbsp&nbsp
                        <a href="<?php echo base_url('editguru/'.$guru['id']);?>"><span style="font-size: 1em; color: orange;"><i class="fas fa-edit"></span></a></i>&nbsp&nbsp
                        <a href="<?php echo base_url('deleteguru/'.$guru['id']);?>"><span style="font-size: 1em; color: Tomato;"><i class="fas fa-trash"></span></a></i></td>&nbsp&nbsp
                  </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Nama</th>
                    <th>Cabang(s)</th>
                    <th>Unit</th>
                    <th>Level</th>
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
  <?php echo view('layout\footer.php');?>