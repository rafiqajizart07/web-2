<?php
class DB {
    public static function connect() {
        return new PDO("mysql:host=localhost;dbname=db_nilai", "root", "");
    }
}
