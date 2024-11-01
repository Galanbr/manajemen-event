<?php
require_once  '../app/models/Peserta.php';

class PesertaController {
    protected $pesertaModel;

    public function __construct() {
        $this->pesertaModel = new PesertaModel();
    }

    public function index() {
        $peserta = $this->pesertaModel->getAllPeserta();
        require_once '../app/views/peserta/index.php';
    }

    public function create() {
        require_once '../app/views/peserta/create.php';
    }

    public function store() {
        if  ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $nama = $_POST['nama'];
                $kontak = $_POST['kontak'];

            if ($this->pesertaModel->tambahPeserta($nama, $kontak)){
                header('Location: /peserta');
                exit;
            }
        }
    }
}
