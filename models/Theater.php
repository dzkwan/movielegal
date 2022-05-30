<?php
class Theater{
    public $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getAll(){
        $sql = "SELECT c.nama as category, t.nama, t.kode, t.id
                FROM theater t
                INNER JOIN category c ON c.id = t.category_id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO theater (nama,kode,category_id) VALUES (?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getTheater($id){
        $sql = "SELECT c.nama AS category, t.nama, t.kode, t.id
                FROM theater t
                INNER JOIN category c ON c.id = t.category_id
                WHERE t.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    
    public function ubah($data){
        $sql = "UPDATE theater SET nama=?, kode=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM theater WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}