<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Sucursales_model extends CI_Model
{
   public function get_sucursales($estado)
    {
        $this->db->where("LOWER(estado)", strtolower($estado)); // Convertir el estado a minúsculas antes de comparar
        return $this->db->get("sucursal")->result();
    }
    
        public function guardar($data)
        {
            $data["estado"] = "activa"; // Agregar estado activo por defecto
            $this->db->insert("sucursal", $data);
        }

        public function eliminar($id)
    {
        $data = array('nombre' => 'inactiva/o eliminada'); // Cambia el nombre del campo según tu estructura

        $this->db->where("id", $id);
        $this->db->update("sucursal", $data);

        $message = "Sucursal desactivada con éxito";

        if ($this->input->is_ajax_request()) {
            $response = ["status" => "success", "message" => $message];
            echo json_encode($response);
        } else {
            redirect(base_url() . "sucursales?message=" . urlencode($message));
        }
    }

    public function cambiarEstado($id, $nuevoEstado)
{
    $data = array('estado' => $nuevoEstado);

    $this->db->where("id", $id);
    $this->db->update("sucursal", $data);
}

public function actualizar($id, $data)
{
    $this->db->where("id", $id);
    $this->db->update("sucursal", $data);
}

     
    public function get_sucursal_by_id($id)
{
    return $this->db->get_where("sucursal", ["id" => $id])->row();
}


}


?>