<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_user extends CI_Model {

    public function cek_user($data) {
        $query = $this->db->get_where('ys_login', $data);
        return $query;
    }

    public function getAll($data) {
        return $this->db->get($data);
    }

    public function insertData($tabelName, $data) {
        $res = $this->db->insert($tabelName, $data);
        return $res;
    }

    function orang() {
        $query = $this->db->get('ys_login');
        return $query->result_array();
    }

    function tambah($data) {
        $this->db->insert('ys_login', $data);
        return TRUE;
    }

    function edit($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('ys_login', $data);
        return TRUE;
    }

    public function deletedata($tabelName, $where) {
        $res = $this->db->delete($tabelName, $where);
        return $res;
    }

}

?>