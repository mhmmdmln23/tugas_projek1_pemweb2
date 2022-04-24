<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<?php
$ar_buah = ["Jeruk", "Pier","Pisang","Jambu" ];
// cetak buah ke index ke 2
echo $ar_buah[2];
// cetak jumlah buah
echo '<br/>Jumlah Buah ' . count($ar_buah);
// cetak seluruh buah
echo '<ol>';
foreach($ar_buah as $buah){
echo '<li>'. $buah .'</li>';
}
echo '</ol>';
// tambah buah
$ar_buah[]="Semangka";
// hapus buah index ke 1
unset($ar_buah[1]);
// ubah buah index ke 2 menjadi Rambutan
$ar_buah[2]="Rambutan";
// cetak seluruh buah dengan index nya
echo '<ul>';
foreach($ar_buah as $k => $v){
echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
}
echo '</ul>';
?>

<?php
include_once 'footer.php';
?>
