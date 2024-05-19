<?php
$koneksi = new mysqli('localhost', 'root', '', 'db_UHDDG');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>