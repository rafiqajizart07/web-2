<?php
require_once './Config/DB.php';

class TimPenelitian {
    public static function getAll() {
        $db = DB::connect();
        $stmt = $db->query("SELECT tp.*, d.nama AS dosen_nama, p.judul AS penelitian_judul
                            FROM tim_penelitian tp
                            LEFT JOIN dosen d ON tp.dosen_id = d.id
                            LEFT JOIN penelitian p ON tp.penelitian_id = p.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO tim_penelitian (dosen_id, penelitian_id) VALUES (?, ?)");
        return $stmt->execute([$data['dosen_id'], $data['penelitian_id']]);
    }

    public static function delete($id) {
        $db = DB::connect();
        $stmt = $db->prepare("DELETE FROM tim_penelitian WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
