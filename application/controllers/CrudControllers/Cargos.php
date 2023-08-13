<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Cargos extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Cargos_model"); // Load the Cargos_model
    }

    public function index()
    {
        $data["cargos"] = $this->Cargos_model->get_cargos(); // Get cargos from Cargos_model
        $this->load->view("ViewCargos/Cargos", $data); // Pass the data to the view
    }
    
     public function eliminar($id)
    {
        $this->Cargos_model->eliminar($id); // Use the Cargos_model to delete the cargo

        // Message for the alert
        $message = "Cargo eliminado con éxito";

        if ($this->input->is_ajax_request()) {
            // If it's an AJAX request, send a JSON response
            $response = ["status" => "success", "message" => $message];
            echo json_encode($response);
        } else {
            // If not an AJAX request, redirect to the cargos page with a message parameter
            redirect(base_url() . "cargos?message=" . urlencode($message));
        }
    }

     // para la funcionalidad de editar
        public function edit($id)
        {
            $data["cargo"] = $this->Cargos_model->get_cargo_by_id($id);

            $this->load->view("ViewCargos/Edit", $data);
        }
        public function guardar()
        {
            $id = $this->input->post("id_cargo");
            $data = array(
                "nombre" => $this->input->post("nombre"),
                "descripcion" => $this->input->post("descripcion")
            );

            $this->Cargos_model->actualizar($id, $data); // Llamada al método actualizar en el modelo

            redirect(base_url() . "cargos"); // Redireccionar después de guardar
        }

      


        


    
    

}

?>