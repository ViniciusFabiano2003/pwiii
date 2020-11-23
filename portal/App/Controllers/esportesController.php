<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\noticia;

class esportesController extends Controller {
    
    public function index() {
        //$clients = Clients::getAll();
        //$this->view('clients', ['clients' -> $clients]);
    }
    
    public function esportes($titulo) {
        $noticiaModel = new noticia();
        $noticia = $noticiaModel->getByTituloUrl($titulo);

        $this->view('esportes', ['noticia' -> $noticia]);
    }
}