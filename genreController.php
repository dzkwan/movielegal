<?php
require_once 'conn_db.php';
require_once 'models/Genre.php';

$nama = $_POST['nama'];
$ket = $_POST['keterangan'];
$tombol = $_POST['proses'];

$data = [
  $nama,
  $ket
];

$obj = new Genre();

if($tombol == 'simpan'){
  $obj->simpan($data);
}elseif($tombol == 'ubah'){
  $data[] = $_POST['idx'];
  $obj->ubah($data);
}elseif($tombol == 'hapus'){
  unset($data);
  $data[] = $_POST['idx'];
  $obj->hapus($data);
}

header('location:index.php?hal=genre');