<?php
require_once './Config/DB.php';

class BidangIlmu {
    public static function getAll() {
        $db = DB::connect();
        return $db->query("SELECT * FROM bidang_ilmu")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = DB::connect();
        $stmt = $db->prepare("SELECT * FROM bidang_ilmu WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO bidang_ilmu (nama, deskripsi) VALUES (?, ?)");
        return $stmt->execute([$data['nama'], $data['deskripsi']]);
    }

    public static function update($id, $data) {
        $db = DB::connect();
        $stmt = $db->prepare("UPDATE bidang_ilmu SET nama = ?, deskripsi = ? WHERE id = ?");
        return $stmt->execute([$data['nama'], $data['deskripsi'], $id]);
    }

    public static function delete($id) {
        $db = DB::connect();
        $stmt = $db->prepare("DELETE FROM bidang_ilmu WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
