<?php

$id_catatan = $_GET['id_catatan']; //mengambil id paramater yang dikirim

$no = 0;
$data = file('catatan_user.txt', FILE_IGNORE_NEW_LINES);
foreach ($data as $value){ //mencari data keberapa yang akan diedit

$no++;
$pisah = explode("|", $value);
if($pisah['0']==$id_catatan){
    $line = $no-1;


    unset($data[$line]);
    file_put_contents('catatan_user.txt', implode("\n", $data));
}
}
?>

<script type="text/javascript">
    alert('Data perjalanan berhasil dihapus.');
    window.location.assign('user.php?page=data_materi');
</script>


