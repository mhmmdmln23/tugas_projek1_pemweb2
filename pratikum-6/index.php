<?php 
require_once 'class_bmiPasien.php'; 

//create 3 default objects
$obj = new BmiPasien(1,"P001","Ahmad","Bogor","2000-01-01","2022-01-10","ahmad@mail.com","L",69.8,1.69);
$obj2 = new BmiPasien(2,"P002","Rina","Bogor","2000-01-01","2022-01-10","rina@mail.com","P",55.3,1.65);
$obj3 = new BmiPasien(3,"P003","Lutfi","Bogor","2000-01-01","2022-01-11","lutfi@mail.com","L",45.2,1.71);

//convert to array
$array = [$pasien1, $pasien2, $pasien3];

if(isset($_POST['submit'])){
    $id = 4;
    $kode = "kode";
    $nama = "nama";
    $tmp_lahir = $_POST['jakarta'];
    $tgl_lahir = $_POST['tanggal'];
    $email = $_POST['kode'];
    $gender = $_POST['nama'];
    $berat = $_POST['gender'];
    $tinggi = $_POST['berat'];
    $tanggal = $_POST['tinggi'];
    
    $pasien4 = new BmiPasien($id,$kode,$nama,$tmp_lahir,$tgl_lahir,$tanggal,$email,$gender,$berat,$tinggi);
    $array[] = $pasien4;

    //store data to array 
    // array_push($array,$data);
    $array[] = $data;
}
?>
  <!DOCTYPE html>
  <html lang="en">
  <!-- head -->
  <?php include_once '../layout/header-inside.php';?>

  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include_once '../layout/navbar.php';?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once '../layout/sidebar-inside.php';?>
    <!-- /.Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Praktikum 06 - BMI Pasien</h1>
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
          <div class="card">
              <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Berat">Berat</label>
                        <input type="number" name="berat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Tinggi">Tinggi</label>
                        <input type="text" name="tinggi" class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" name="button" class="btn btn-primary"> <i class="fas fa-check"></i> Simpan Data</button>
                    </div>
                </form>
                <div class="table-responsive">
                  <h3 class="mt-3 mb-3">Data Pasien</h3>
                    <table class="table table-border">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Berat</th>
                            <th>Tinggi</th>
                            <th>Nilai BMI</th>
                            <th>Status BMI</th>
                        </tr>
                        <?php $i = 1; foreach($array as $a) : ?>
                        <tr>
                            <td><?= $i++ ;?></td>
                            <td><?= $a->tanggal ;?></td>
                            <td><?= $a->pasien->kode ;?></td>
                            <td><?= $a->pasien->nama ;?></td>
                            <td><?= $a->pasien->gender ;?></td>
                            <td><?= $a->berat ;?> KG</td>
                            <td><?= $a->tinggi ;?> M</td>
                            <td><?= number_format($a->nilaiBmi(),2) ;?></td>
                            <td><?= $a->statusBmi() ;?></td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php include_once '../layout/script-inside.php';?>
  </body>
  </html>b