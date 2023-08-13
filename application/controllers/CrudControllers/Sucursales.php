<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Sucursales extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Sucursales_model"); // Load the Sucursal
    }

    public function index()
    {
        $data["sucursales"] = $this->Sucursales_model->get_sucursales(); // Get cargos from Sucursal_model
        $this->load->view("ViewSucursales/Sucursales", $data); // Pass the data to the view
    }
    
    public function eliminar($id)
        {
            $this->Sucursales_model->cambiarEstado($id, 'Inactiva'); // Cambiar el estado a 'Inactiva'
            $message = "Sucursal desactivada con éxito";

            if ($this->input->is_ajax_request()) {
                $response = ["status" => "success", "message" => $message];
                echo json_encode($response);
            } else {
                redirect(base_url() . "sucursales?message=" . urlencode($message));
            }
        }



     // para la funcionalidad de editar
        public function edit($id)
        {
            $data["cargo"] = $this->Cargos_model->get_cargo_by_id($id);

            $this->load->view("ViewCargos/Edit", $data);
        }

         public function agregar()
            {
            
                $this->load->view("ViewCargos/Add");
            }
        public function guardar()
        {
            $cargo = $this->input->post("nombre");
            $descripcion = $this->input->post("descripcion");

            $data = [
                "nombre" => $cargo,
                "descripcion" => $descripcion,
            ];

            $this->Cargos_model->guardar($data); // Llamada al método guardar en el modelo

            $this->session->set_flashdata("success", "Cargo guardado con éxito");

            redirect(base_url() . "cargos");
        }

}

?>