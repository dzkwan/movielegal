<?php
require_once 'conn_db.php';
require_once 'models/Theater.php';

$nama = $_POST['nama'];
$kode = $_POST['kode'];
$category = $_POST['category'];
$tombol = $_POST['proses'];

$data = [
  $nama,
  $kode,
  $category
];

$ubah = [
  $nama,
  $kode
];

$obj = new Theater();

if($tombol == 'simpan'){
  $obj->simpan($data);
}elseif($tombol == 'ubah'){
  $ubah[] = $_POST['idx'];
  $obj->ubah($ubah);
}elseif($tombol == 'hapus'){
  unset($data);
  $data[] = $_POST['idx'];
  $obj->hapus($data);
}

header('location:index.php?hal=theater');