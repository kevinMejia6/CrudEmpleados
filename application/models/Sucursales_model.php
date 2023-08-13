<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Sucursales_model extends CI_Model
{
    public function get_sucursales()
    {
        return $this->db->get("sucursal")->result();
    }
    
    public function guardar($data)
    {
        $this->db->query("ALTER TABLE cargo AUTO_INCREMENT 1");
        $this->db->insert("cargo", $data);
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

     
    public function get_cargo_by_id($id)
{
    return $this->db->get_where("cargo", ["id" => $id])->row();
}

}


?>