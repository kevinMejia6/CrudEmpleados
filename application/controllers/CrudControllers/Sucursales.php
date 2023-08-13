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
        $estadoFiltrado = $this->input->get("estado", TRUE); // Obtener el estado del filtro desde la URL

        // Si no se proporciona un estado de filtro válido, establecerlo en "activa" por defecto
        if (!in_array($estadoFiltrado, ['activa', 'Inactiva'])) {
            $estadoFiltrado = 'activa';
        }

        $data["estadoFiltrado"] = $estadoFiltrado; // Pasar el estado del filtro a la vista
        $data["sucursales"] = $this->Sucursales_model->get_sucursales($estadoFiltrado);
        $this->load->view("ViewSucursales/Sucursales", $data);
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
            $data["sucursal"] = $this->Sucursales_model->get_sucursal_by_id($id);
            $this->load->view("ViewSucursales/edit", $data);
        }

        public function actualizar($id)
        {
            $nombre = $this->input->post("nombre");
            $direccion = $this->input->post("direccion");
            $telefono = $this->input->post("telefono");

            $data = [
                "nombre" => $nombre,
                "direccion" => $direccion,
                "telefono" => $telefono,
            ];

            $this->Sucursales_model->actualizar($id, $data);
            $this->session->set_flashdata("success", "Sucursal actualizada con éxito");
            redirect(base_url() . "sucursales");
        }

         public function agregar()
            {
                $this->load->view("ViewSucursales/add");
            }
        public function guardar()
        {
            $id_sucursal = $this->input->post("id_sucursal");
            $sucursal = $this->input->post("nombre");
            $direccion = $this->input->post("direccion");
            $telefono = $this->input->post("telefono");
            $data = [
                "nombre" => $sucursal,
                "direccion" => $direccion,
                "telefono" => $telefono,
            ];

             if ($id_sucursal) {
            $this->Sucursales_model->actualizar($id_sucursal, $data);
            $this->session->set_flashdata(
                "success",
                "Sucursal actualizado con éxito"
            );
        } else {
            $this->Sucursales_model->guardar($data);
            $this->session->set_flashdata(
                "success",
                "Sucursal guardado con éxito"
            );
        }

        redirect(base_url() . "sucursales");
    }

}

?>