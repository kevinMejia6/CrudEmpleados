<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursales extends CI_Controller {

    public function index()
    {
        $this->load->view('ViewsSucursales/Sucursales'); // Carga la vista 'Sucursales.php'
    }
}
