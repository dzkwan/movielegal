<?php
class Genre{
    public $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getAll(){
        $sql = "SELECT * FROM genre";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO genre (nama,keterangan) VALUES (?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getGenre($id){
        $sql = "SELECT * FROM genre WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    
    public function ubah($data){
        $sql = "UPDATE genre SET nama=?, keterangan=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($data){
        $sql = "DELETE FROM genre WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}