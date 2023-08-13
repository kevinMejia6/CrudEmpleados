<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpleadoModel extends CI_Model {
    
    public function getEmpleados(){
        $this->db->select("*");
        $this->db->from("empleado");
        $results=$this->db->get();
        return $results->result();
    }
}
?>
