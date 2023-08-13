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
        $data['cargo'] = $this->Empleado_model->get_cargos(); // Obtener lista de cargos
        $data['sucursal'] = $this->Empleado_model->get_sucursales(); // Obtener lista de sucursales
        $this->load->view('ViewsEmpleados/Add', $data);
    }

    
        public function guardar() {
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $direccion = $this->input->post('direccion');
            $telefono = $this->input->post('telefono');
            $estado = $this->input->post('estado');
            $id_sucursal = $this->input->post('id_sucursal');
            $id_cargo = $this->input->post('id_cargo');
            $this->load->view('ViewsEmpleados/Add');

            $data = array(
                "nombre" =>$nombre,
                "apellido" =>$apellido,
                "direccion" =>$direccion,
                "telefono" =>$telefono,
                "estado" =>$estado,
                "id_sucursal" =>$id_sucursal,
                "id_cargo" =>$id_cargo,
            );
            $this->Empleado_model->guardar($data);
            $this->session->set_flashdata('success','Empleado guardado con exito');
            redirect(base_url()."empleados");

    }
}
?>
