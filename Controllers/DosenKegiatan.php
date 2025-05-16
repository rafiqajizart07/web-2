<?php
require_once './Config/DB.php';

class DosenKegiatan {
    public static function getAll() {
        $db = DB::connect();
        $stmt = $db->query("SELECT dk.*, d.nama AS dosen_nama, k.nama AS kegiatan_nama 
                            FROM dosen_kegiatan dk 
                            LEFT JOIN dosen d ON dk.dosen_id = d.id 
                            LEFT JOIN kegiatan k ON dk.kegiatan_id = k.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO dosen_kegiatan (dosen_id, kegiatan_id) VALUES (?, ?)");
        return $stmt->execute([$data['dosen_id'], $data['kegiatan_id']]);
    }

    public static function delete($id) {
        $db = DB::connect();
        $stmt = $db->prepare("DELETE FROM dosen_kegiatan WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
