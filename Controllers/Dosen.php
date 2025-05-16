<?php
require_once './Config/DB.php';

class Dosen {
    public static function getAll() {
        $db = DB::connect();
        $stmt = $db->query("SELECT * FROM dosen");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = DB::connect();
        $stmt = $db->prepare("SELECT * FROM dosen WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO dosen (nidn, nama, gelar_belakang, ...) VALUES (?, ?, ?, ...)");
        return $stmt->execute([]);
    }

    public static function update($id, $data) {
        $db = DB::connect();
        $stmt = $db->prepare("UPDATE dosen SET nama = ?, ... WHERE id = ?");
        return $stmt->execute([]);
    }

    public static function delete($id) {
        $db = DB::connect();
        $stmt = $db->prepare("DELETE FROM dosen WHERE id = ?");
        return $stmt->execute([$id]);
    }
 
}
