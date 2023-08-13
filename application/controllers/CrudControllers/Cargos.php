<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargos extends CI_Controller {

    public function index()
    {
        $this->load->view('ViewCargos/Cargos'); // Carga la vista 'Cargos.php'
    }
}
