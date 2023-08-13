<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Empleados extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Empleado_model");
    }

    public function index()
    {
        $estadoFilter = $this->input->get("estado"); // Get the estado filter from query parameter
        $data["empleados"] = $this->Empleado_model->get_empleados(
            $estadoFilter
        );
        $this->load->view("ViewsEmpleados/Employees", $data);
    }

    public function agregar()
    {
        $data["cargo"] = $this->Empleado_model->get_cargos(); // Obtener lista de cargos
        $data["sucursal"] = $this->Empleado_model->get_sucursales(); // Obtener lista de sucursales
        $this->load->view("ViewsEmpleados/Add", $data);
    }

    public function guardar()
    {
        $id_empleado = $this->input->post("id_empleado");

        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $direccion = $this->input->post("direccion");
        $telefono = $this->input->post("telefono");
        $estado = $this->input->post("estado");
        $id_sucursal = $this->input->post("id_sucursal");
        $id_cargo = $this->input->post("id_cargo");

        $data = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "direccion" => $direccion,
            "telefono" => $telefono,
            "estado" => $estado,
            "id_sucursal" => $id_sucursal,
            "id_cargo" => $id_cargo,
        ];

        if ($id_empleado) {
            // Si hay un ID de empleado, actualiza los datos
            $this->Empleado_model->actualizar($id_empleado, $data);
            $this->session->set_flashdata(
                "success",
                "Empleado actualizado con éxito"
            );
        } else {
            // Si no hay un ID de empleado, realiza una inserción
            $this->Empleado_model->guardar($data);
            $this->session->set_flashdata(
                "success",
                "Empleado guardado con éxito"
            );
        }

        redirect(base_url() . "empleados");
    }

    // para la funcionalidad de editar
    public function edit($id)
    {
        $data["empleado"] = $this->Empleado_model->get_empleado($id);
        $data["cargos"] = $this->Empleado_model->get_cargos();
        $data["sucursales"] = $this->Empleado_model->get_sucursales();
        $data["estados"] = $this->Empleado_model->get_estados();

        $this->load->view("ViewsEmpleados/edit", $data);
    }

    // ELIMINAR
    public function eliminar($id)
    {
        $this->Empleado_model->eliminar($id);

        // Mensaje para la alerta
        $message = "Empleado eliminado con éxito";

        if ($this->input->is_ajax_request()) {
            // Si la solicitud es una petición AJAX, envía una respuesta JSON
            $response = ["status" => "success", "message" => $message];
            echo json_encode($response);
        } else {
            // Si no es una petición AJAX, redirige a la página de empleados con un parámetro de mensaje
            redirect(base_url() . "empleados?message=" . urlencode($message));
        }
    }
}
?>
