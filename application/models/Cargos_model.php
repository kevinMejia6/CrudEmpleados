<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Cargos_model extends CI_Model
{
    public function get_cargos()
    {
        return $this->db->get("cargo")->result();
    }

    public function eliminar($id)
    {
        // Delete related empleados first
        $this->db->where("id_cargo", $id);
        $this->db->delete("empleado");

        // Now you can delete the cargo
        $this->db->where("id", $id);
        $this->db->delete("cargo");
    }

}


?>