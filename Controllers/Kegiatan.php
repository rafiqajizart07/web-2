<?php
require_once './Config/DB.php';

class Kegiatan {
    public static function getAll() {
        $db = DB::connect();
        $stmt = $db->query("SELECT kegiatan.*, jenis_kegiatan.nama AS jenis_nama FROM kegiatan 
                            LEFT JOIN jenis_kegiatan ON kegiatan.jenis_kegiatan_id = jenis_kegiatan.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = DB::connect();
        $stmt = $db->prepare("SELECT * FROM kegiatan WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO kegiatan (nama, tanggal_mulai, tanggal_selesai, deskripsi, jenis_kegiatan_id) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$data['nama'], $data['tanggal_mulai'], $data['tanggal_selesai'], $data['deskripsi'], $data['jenis_kegiatan_id']]);
    }

    public static function update($id, $data) {
        $db = DB::connect();
        $stmt = $db->prepare("UPDATE kegiatan SET nama = ?, tanggal_mulai = ?, tanggal_selesai = ?, deskripsi = ?, jenis_kegiatan_id = ? WHERE id = ?");
        return $stmt->execute([$data['nama'], $data['tanggal_mulai'], $data['tanggal_selesai'], $data['deskripsi'], $data['jenis_kegiatan_id'], $id]);
    }

    public static function delete($id) {
        $db = DB::connect();
        $stmt = $db->prepare("DELETE FROM kegiatan WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
