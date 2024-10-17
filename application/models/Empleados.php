<?php

class Empleados extends CI_Model {

    public function getAll() {
        return $this->db->get('empleados')->result();
    }

    public function getById($id) {
        return $this->db->where('id_usuario', $id)->get('empleados')->row();
    }

    public function create($nombre, $apellido1, $apellido2, $direccion) {
        $data = [
            'nombre' => $nombre,
            'apellido1' => $apellido1,
            'apellido2' => $apellido2,
            'direccion' => $direccion
        ];
        $this->db->insert('empleados', $data);
    }

    public function update($id, $nombre, $apellido1, $apellido2, $direccion) {
        $data = [
            'nombre' => $nombre,
            'apellido1' => $apellido1,
            'apellido2' => $apellido2,
            'direccion' => $direccion
        ];
        $this->db->where('id_usuario', $id);
        $this->db->update('empleados', $data);
    }

    public function delete($id) {
        $this->db->where('id_usuario', $id);
        $this->db->delete('empleados');
    }
}
