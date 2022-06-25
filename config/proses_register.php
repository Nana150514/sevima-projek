<?php

$nik        = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];

//cek apakah nik sudah terdaftar atau belum

$data = file("config.txt", FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $pecah = explode("|", $value);
    if($nik==$pecah['0']){
        $cek = true;
    }
}

if($cek) { //jika nik sudah terdaftar ?>
    <script type="text/javascript">
    alert('Maaf NIK yang anda gunakan sudah terdaftar.');
    window.location.assign('register.php');
    </script>
<?php 
}else{ //jika data tidak ditemukan atau belum terdaftar
    //buat format penyimpanan ke config.txt
    $format = "\n$nik|$nama_lengkap|$no_hp|$alamat|$ttl";

    //buka file config.txt
    $file = fopen('config.txt','a');
    fwrite($file, $format);

    //tutup file
    fclose($file);
?>

    <script type="text/javascript">
    alert('Pendaftaran Berhasil Dilakukan.');
    window.location.assign('index.php');
    </script>
    
    <?php }
    ?>
