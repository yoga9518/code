<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller{
	function index(){
		$data=array(
			'data' => $this->model_user->orang()
		);
		$this->load->view('view_admin',$data);
	}
	function tambah(){
        $data = array(
            'nama'		=> $this->input->post('nama'),
            'alamat'	=> $this->input->post('alamat'),
            'pekerjaan'	=> $this->input->post('pekerjaan')
        );
        $this->model_admin->tambah($data);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin');
    }
    function ubah(){
    	$id = $this->input->post('id');
        $data = array(
            'nama'		=> $this->input->post('nama'),
            'alamat'	=> $this->input->post('alamat'),
            'pekerjaan'	=> $this->input->post('pekerjaan')
        );
        $this->model_admin->ubah($data,$id);
        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin');
    }
}