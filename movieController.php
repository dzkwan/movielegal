<?php
require_once 'conn_db.php';
require_once 'models/Movie.php';

$nama = $_POST['nama'];
$durasi = $_POST['durasi'];
$tahun = $_POST['tahun'];
$resolusi = $_POST['resolusi'];
$genre = $_POST['genre'];
$theater = $_POST['theater'];
$foto = $_FILES['foto']['name'];
$tombol = $_POST['proses'];

$data = [
  $nama,
  $durasi,
  $tahun,
  $resolusi,
  $foto,
  $genre,
  $theater
];

$ubah = [
  $nama,
  $durasi,
  $tahun,
  $resolusi,
  $foto
];

$obj = new Movie();

if($tombol == 'simpan'){
  $obj->simpan($data);
  move_uploaded_file($_FILES['foto']['tmp_name'], "img/poster/$foto");
}elseif($tombol == 'ubah'){
  $ubah[] = $_POST['idx'];
  $obj->ubah($ubah);
  move_uploaded_file($_FILES['foto']['tmp_name'], "img/poster/$foto");
}elseif($tombol == 'hapus'){
  unset($data);
  $data[] = $_POST['idx'];
  $obj->hapus($data);
}

header('location:index.php?hal=movie');