<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

    public function index()
    {
        $this->load->view('ViewsEmpleados/Employees'); // Carga la vista 'Employees.php'
    }
}
