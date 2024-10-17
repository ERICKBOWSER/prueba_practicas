<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
    }

    // Login usuario
    public function login(){
        $this->load->view("admin/login");
    }

    public function loginVerificacion(){
       
        $usuario = $this->input->post("usuario");
        $pass = md5($this->input->post("contrasenia"));

        $usuarioData = $this->Usuario_model->getUsuario($usuario);

        // Si el inicio de sesión es correcto redirige a la view de empleados
        if ($usuarioData && $usuarioData->password === $pass) {
            // Datos de sesión
            $sessionData = [
                'id_usuario' => $usuarioData->id_usuario,
                'usuario' => $usuarioData->usuario,
                'logged_in' => TRUE
            ];
            $this->session->set_userdata($sessionData);

            
            // Redirigir a empleados
            redirect('Empleados_c');
        } else {
            $this->session->set_flashdata('error', 'Usuario o contraseña incorrectos'); // función de la libreria session
            $this->load->view("admin/login");
        }
    }

    public function logout() {
        // Destruimos la sesión
        $this->session->sess_destroy();
        redirect('admin/login');
    }


    // EXTRA 2

    // La funcionalidad no la he implementado
    public function apiLogin() {
        $usuario = $this->input->post('usuario');
        $contrasenia = md5($this->input->post('contrasenia')); // Encriptamos la contraseña con md5

        $usuarioData = $this->Usuario_model->getUsuario($usuario);
    
        if ($usuarioData && $usuarioData->contrasenia === $contrasenia) {
            echo json_encode(['status' => 'success', 'message' => 'Inicio de sesión exitoso']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Usuario o contraseña incorrectos']);
        }
    }
    
}