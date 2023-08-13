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
    public function get_cargos() {
    return $this->db->get('cargo')->result();
    }

    public function get_sucursales() {
    return $this->db->get('sucursal')->result();
    }
    public function get_nombre_cargo($cargo_id) {
    $cargo = $this->db->get_where('cargo', array('id' => $cargo_id))->row();
    return $cargo ? $cargo->nombre : 'N/A';
}

public function get_nombre_sucursal($sucursal_id) {
    $sucursal = $this->db->get_where('sucursal', array('id' => $sucursal_id))->row();
    return $sucursal ? $sucursal->nombre : 'N/A';
}

    // PARA EDITAR
    public function get_empleado($id) {
        $this->db->select('empleado.*, sucursal.nombre AS nombre_sucursal, cargo.nombre AS nombre_cargo');
        $this->db->where('empleado.id', $id);
        $this->db->join('sucursal', 'empleado.id_sucursal = sucursal.id', 'left');
        $this->db->join('cargo', 'empleado.id_cargo = cargo.id', 'left');
        return $this->db->get('empleado')->row();
    }
    public function actualizar($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('empleado', $data);
    }
    public function get_estados() {
    $this->db->distinct();
    $this->db->select('estado');
    return $this->db->get('empleado')->result();
}


}
?>
