<body>
<br>
<div>
<form method="POST" action="Tugas_Praktikum03.php" style = "margin-left : 30%;">
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Nama Lengkap</label> 
    <div class="col-7">
      <input id="text" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" value="" style="width: 50%">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Mata Kuliah</label> 
    <div class="col-7">
      <select id="select" name="matkul" class="custom-select" style="width: 50%">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="BD1">Basis Data 1</option>
        <option value="WEB1">Pemograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nilai UTS</label> 
    <div class="col-7">
      <input id="text1" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" value="" style="width: 50%">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label">Nilai UAS</label> 
    <div class="col-7">
      <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" value="" style="width: 50%">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label">Nilai Tugas / Praktikum</label> 
    <div class="col-7">
      <input id="text3" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" value="" style="width: 50%">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-7">
      <button name="proses" value="Simpan" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<br>
<br>
<br>
<hr>

<?php
include_once 'libfungsi.php';

$Proses = isset ($_POST['proses']) ? $_POST['proses'] : '';
$Nama_siswa = isset ($_POST['nama']) ? $_POST['nama'] : '';
$Mata_kuliah = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
$Nilai_UTS = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
$Nilai_UAS = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
$Nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

    echo 'Proses : ' . $Proses;
    echo '<br>Nama Siswa : ' . $Nama_siswa;
    echo '<br>Mata Kuliah : ' . $Mata_kuliah;
    echo '<br>Nilai UTS : ' . $Nilai_UTS;
    echo '<br>Nilai UAS : ' . $Nilai_UAS;
    echo '<br>Nilai Tugas Praktikum : ' . $Nilai_tugas;

$Nilai_Akhir = presentasi($Nilai_UTS, $Nilai_UAS, $Nilai_tugas);
$Grade_Nilai = gradenilai($Nilai_Akhir);

    echo "<br/>Nilai Akhir : $Nilai_Akhir";
    echo "<br/>Status : ", kelulusan($Nilai_Akhir);
    echo "<br/>Grade Nilai : ", $Grade_Nilai;
    echo "<br/>Predikat Nilai : ", predikat_nilai($Grade_Nilai);
?>

<br>


</body>
</html>