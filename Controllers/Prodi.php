<?php
require_once './Config/DB.php';

class Prodi {
    public static function getAll() {
        $db = DB::connect();
        $stmt = $db->query("SELECT * FROM prodi");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = DB::connect();
        $stmt = $db->prepare("SELECT * FROM prodi WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO prodi (kode, nama, jenjang, ketua) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['kode'], $data['nama'], $data['jenjang'], $data['ketua']]);
    }

    public static function update($id, $data) {
        $db = DB::connect();
        $stmt = $db->prepare("UPDATE prodi SET kode = ?, nama = ?, jenjang = ?, ketua = ? WHERE id = ?");
        return $stmt->execute([$data['kode'], $data['nama'], $data['jenjang'], $data['ketua'], $id]);
    }

    public static function delete($id) {
        $db = DB::connect();
        $stmt = $db->prepare("DELETE FROM prodi WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
