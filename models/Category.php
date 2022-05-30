<?php
class Category{
    public $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getAll(){
        $sql = "SELECT * FROM category";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO category (nama,keterangan) VALUES (?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getCategory($id){
        $sql = "SELECT * FROM category WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    
    public function ubah($data){
        $sql = "UPDATE category SET nama=?, keterangan=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM category WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}