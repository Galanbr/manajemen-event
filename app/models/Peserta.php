<?php
require_once '../config/database.php';

class PesertaModel {
    private $db;

    public function __construct() {
        $database = new Database();
            $this->db = $database->connect();
            
            if ($this->db === null) {
                throw new Exception("Database connection failed");
            }
        }

    public function getAllPeserta() {
        $peserta = $this->db->prepare("SELECT * FROM peserta");
        $peserta->execute();
        return $peserta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPesertaById($id) {
        $peserta = $this->db->prepare("SELECT * FROM peserta WHERE id = ?");
        $peserta->execute([$id]);
        return $peserta->fetch(PDO::FETCH_ASSOC);
    }

    public function tambahPeserta($name, $contact) {
        $peserta = $this->db->prepare("INSERT INTO participants (nama, kontak) VALUES (?, ?)");
        $peserta->execute([$name, $contact]);
    }

}
