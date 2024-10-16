<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Empleados');
        $this->verificarSesion();
    }

    // Función para comprobar si el usuario ha iniciado sesión correctamente
    private function verificarSesion() {
        if (!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }
    }

    public function index() {
        $data['empleados'] = $this->Empleados->getAll();
        $this->load->view('empleados/index', $data);
    }

    // Apartado CRUD
    public function crearUsuario() {
        $nombre = $this->input->post('nombre');
        $apellido1 = $this->input->post('apellido1');
        $apellido2 = $this->input->post('apellido2');
        $direccion = $this->input->post('direccion');

        $this->Empleados->createEmpleado($nombre, $apellido1, $apellido2, $direccion);
        redirect('empleados');
    }

    public function editarUsuario($id) {
        $data['empleado'] = $this->Empleados->getById($id);
        $this->load->view('empleados/editarUsuario', $data);
    }

    public function updateUsuario($id) {
        $nombre = $this->input->post('nombre');
        $apellido1 = $this->input->post('apellido1');
        $apellido2 = $this->input->post('apellido2');
        $direccion = $this->input->post('direccion');

        $this->Empleados->update($id, $nombre, $apellido1, $apellido2, $direccion);
        redirect('empleados');
    }

    public function deleteUsuario($id) {
        $this->Empleados->delete($id);
        redirect('empleados');
    }

    // EXTRA 1

    public function getEmployee() {
        header('Content-Type: application/json');
        $empleados = $this->Empleados->getAll();
        echo json_encode($empleados);
    }
    
}
