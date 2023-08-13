<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {
    
  public function __construct()
	{
		parent::__construct();
        $this->load->model('Empleado_model');
	}


    public function index() {
        
        $data['empleados'] = $this->Empleado_model->get_empleados();
    $this->load->view('ViewsEmpleados/Employees', $data);
    }

     public function agregar() {
        $this->load->view('ViewsEmpleados/Add');
    }
        public function guardar() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'direccion' => $this->input->post('direccion'),
            'telefono' => $this->input->post('telefono'),
            'estado' => $this->input->post('estado'),
            'id_sucursal' => $this->input->post('id_sucursal'),
            'id_cargo' => $this->input->post('id_cargo')
        );
        $this->Empleado_model->insert_empleado($data);
        redirect('empleado');
    }
}
?>
