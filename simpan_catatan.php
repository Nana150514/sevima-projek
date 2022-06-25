<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
session_start();
$nik = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tgl = date('d-m-Y');
$jam = date('H:i');
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];
$id_catatan = rand(0, 100000);

//format simpan file ke data_perjalanan.txt
$format = "\n$id_catatan|$nik|$nama_lengkap|$tgl|$jam|$lokasi|$suhu Celcius";

//buka file data_perjalanan.txt
$file = fopen('data_perjalanan.txt', 'a');

//tulis isian sesuai format
fwrite($file, $format);

//tutup file
fclose($file);

?>

<script type="text/javascript">
    alert('Data perjalanan berhasil disimpan.');
    window.location.assign('user.php?page=riwayat_perjalanan');
</script>