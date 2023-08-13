<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Cargos_model extends CI_Model
{
    public function get_cargos()
    {
        return $this->db->get("cargo")->result();
    }
    
    public function guardar($data)
    {
        $this->db->query("ALTER TABLE cargo AUTO_INCREMENT 1");
        $this->db->insert("cargo", $data);
    }
    public function eliminar($id)
{
    // Now you can delete the cargo
    $this->db->where("id", $id);
    $this->db->delete("cargo");

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
public function actualizar($id, $data)
{
    $this->db->where("id", $id);
    $this->db->update("cargo", $data);
}

     
    public function get_cargo_by_id($id)
{
    return $this->db->get_where("cargo", ["id" => $id])->row();
}

}


?>