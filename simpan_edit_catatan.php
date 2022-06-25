<?php
session_start();
$nik = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$pelajaran = $_POST['pelajaran'];
$file = $_POST['file'];
$materi = $_POST['materi'];
$id_catatan = $_POST['id_catatan'];

//format simpan file ke data_perjalanan.txt
$format = "$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$pelajaran|$file|$materi";

$no = 0;
$data = file('catatan_user.txt', FILE_IGNORE_NEW_LINES);
foreach ($data as $value){ //mencari data keberapa yang akan diedit

$no++;
$pisah = explode("|", $value);
if($pisah['0']==$id_catatan){
    $line = $no-1;

    //merubah data
$data[$line] = $format;
$data = implode("\n", $data);
file_put_contents('catatan_user.txt', $data);
}
}

?>

<script>
alert("Data berhasil dirubah..")
window.location.assign("user.php?page=data_materi")
</script>

