<?php

class Usuario_model extends CI_Model {
    public function getUsuario($usuario) {
        return $this->db->where('usuario', $usuario)->get('admin')->row();
    }
}
