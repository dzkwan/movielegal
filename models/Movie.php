<?php
class Movie{
    public $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getAll(){
        $sql = "SELECT g.nama AS genre, t.nama AS theater,
                m.nama, m.durasi, m.tahun, m.resolusi, m.foto, m.id
                FROM movie m
                INNER JOIN genre g ON g.id = m.genre_id
                INNER JOIN theater t ON t.id = m.theater_id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getMovie($id){
        $sql = "SELECT g.nama AS genre, t.nama AS theater,
                m.nama, m.durasi, m.tahun, m.resolusi, m.foto, m.id
                FROM movie m
                INNER JOIN genre g ON g.id = m.genre_id
                INNER JOIN theater t ON t.id = m.theater_id
                WHERE m.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO movie (nama,durasi,tahun,resolusi,foto,genre_id,theater_id) VALUES (?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE movie SET nama=?, durasi=?, tahun=?, resolusi=?, foto=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    
    public function hapus($data){
        $sql = "DELETE FROM movie WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}