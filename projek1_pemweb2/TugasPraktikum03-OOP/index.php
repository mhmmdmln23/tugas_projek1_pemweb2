<?php
require_once 'class_BMI_pasien.php';
$pasien1 = new bmiPasien(1,"P001","Ahmad","Bogor","2020-09-09","ahmad@gmail.com","L",69.8,1.69,"2022-01-10");
$pasien2 = new bmiPasien(2,"P002","Rina","Bogor","2020-09-09","rina@gmail.com","P",55.3,1.65,"2022-01-10");
$pasien3 = new bmiPasien(3,"P003","Lutfi","Bogor","2020-09-09","lutfi@gmail.com","L",45.2,1.71,"2022-01-11");


$array = [$pasien1, $pasien2, $pasien3];

if(isset($_POST['submit'])){

$id = 4;
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tmp_lahir = "Bogor";
$tgl_lahir = "2000-09-09";
$email = $_POST['nama'] . "@gmail.com";
$gender = $_POST['gender'];
$berat = (int)$_POST['berat'];
$tinggi = $_POST['tinggi']/100;
$tanggal = $_POST['tanggal'];

$pasien4 = new bmiPasien($id,$kode,$nama,$tmp_lahir,$tgl_lahir,$email,$gender,$berat,$tinggi,$tanggal);
$array[] = $pasien4;


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Pasien</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h2>Tambah data pasien</h2>
            <label>Tanggal Periksa</label><br>
            <input type="date" name="tanggal"><br><br>

            <label>Kode Pasien</label><br>
            <input type="text" name="kode"><br><br>

            <label>Nama Pasien</label><br>
            <input type="text" name="nama"><br><br>

            <label>Gender</label><br>
            <select name="gender">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select><br><br>

            <label>Berat</label><br>
            <input type="text" name="berat"><br><br>

            <label>Tinggi</label><br>
            <input type="number" name="tinggi"><br><br>

            <button type="submit" name="submit">Simpan</button>
        </form>
        <br>
    <table border=1 callpadding=15 cellpadding=0>
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat (KG)</th>
            <th>Tinggi (CM)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
        <?php foreach($array as $a) : ?> 
        <tr>
            <td><?php echo $a->pasien->id; ?></td>
            <td><?php echo $a->tanggal; ?></td>
            <td><?php echo $a->pasien->kode; ?></td>
            <td><?php echo $a->pasien->nama; ?></td>
            <td><?php echo $a->pasien->gender; ?></td>
            <td><?php echo $a->berat; ?></td>
            <td><?php echo ($a->tinggi * 100);?></td>
            <td><?php echo number_format($a->nilaiBmi(),2); ?></td>
            <td><?php echo $a->statusBmi(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>