<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado_model  extends CI_Model {
    
  
    public function get_empleados() {
        return $this->db->get('empleado')->result();
    }
    
    public function guardar($data) {
        $this->db->query("ALTER TABLE empleado AUTO_INCREMENT 1");
        $this->db->insert("empleado",$data);
    }
}
?>
