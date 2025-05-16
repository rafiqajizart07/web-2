<?php
require_once './Config/DB.php';

class Penelitian {
    public static function getAll() {
        $db = DB::connect();
        $stmt = $db->query("SELECT p.*, b.nama AS bidang_nama 
                            FROM penelitian p 
                            LEFT JOIN bidang_ilmu b ON p.bidang_ilmu_id = b.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = DB::connect();
        $stmt = $db->prepare("SELECT * FROM penelitian WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO penelitian (judul, mulai, akhir, tahun_ajaran, bidang_ilmu_id) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$data['judul'], $data['mulai'], $data['akhir'], $data['tahun_ajaran'], $data['bidang_ilmu_id']]);
    }

    public static function update($id, $data) {
        $db = DB::connect();
        $stmt = $db->prepare("UPDATE penelitian SET judul = ?, mulai = ?, akhir = ?, tahun_ajaran = ?, bidang_ilmu_id = ? WHERE id = ?");
        return $stmt->execute([$data['judul'], $data['mulai'], $data['akhir'], $data['tahun_ajaran'], $data['bidang_ilmu_id'], $id]);
    }

    public static function delete($id) {
        $db = DB::connect();
        $stmt = $db->prepare("DELETE FROM penelitian WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
