<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado_model  extends CI_Model {
    
  
    public function get_empleados() {
        return $this->db->get('empleado')->result();
    }
    
    public function insert_empleado($data) {
        $this->db->insert('empleado', $data);
    }
}
?>
