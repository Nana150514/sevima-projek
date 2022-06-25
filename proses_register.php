<?php
error_reporting(0);
$nik        = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

//cek apakah nik sudah terdaftar atau belum

$data = file("config.txt", FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $pecah = explode("|", $value);
    if($nik==$pecah['0']){
        $cek = true;
    }
}

if(strlen($nik) <16) {
    echo "<script>
    alert('NIK harus 16 Digit');
    window.location.assign('register.php');
    </script>";die;

}else if (strlen($nik) >16){
    echo"<script>
    alert('NIK tidak boleh lebih dari 16 karakter');
    window.location.assign('register.php');
    </script>";die;
}

    //jika nik sudah terdaftar
if($cek) {  ?>
    <script type="text/javascript">
    alert('Maaf NIK yang anda gunakan sudah terdaftar.');
    window.location.assign('register.php');
    </script>
<?php 
}else{ 

    //jika data tidak ditemukan atau belum terdaftar
    //format data penyimpanan ke db config .txt
    $format = "\n$nik|$nama_lengkap";

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
