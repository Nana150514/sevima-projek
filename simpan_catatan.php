<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
session_start();
$nik = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tgl = date('d-m-Y');
$jam = date('H:i');
$pelajaran = $_POST['pelajaran'];
$file = $_POST['file'];
$materi = $_POST['materi'];
$id_catatan = rand(0, 100000);

//format simpan file ke catatan_user.txt
$format = "\n$id_catatan|$nik|$nama_lengkap|$tgl|$jam|$pelajaran|$file|$materi";

//buka file catatan_user.txt
$file = fopen('catatan_user.txt', 'a');

//tulis isian sesuai format
fwrite($file, $format);

//tutup file
fclose($file);

?>

<script type="text/javascript">
    alert('Data berhasil disimpan.');
    window.location.assign('user.php?page=data_materi');
</script>