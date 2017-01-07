<?php
class Pengguna extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index() {
            $cek  = $this->session->userdata('logged_in');
            $stts = $this->session->userdata('stts');
            if(!empty($cek) && $stts=="admin")
            {
		$data['username']       = $this->session->userdata('username');
                $data['nama_lengkap']   = $this->session->userdata('nama_lengkap');
                $data['act']= 1;
                
                $data['menu']       = $this->load->view('admin/menu',$data, true);
                $data['profil']     = $this->load->view('admin/profil',$data, true);
                $data['header']     = $this->load->view('admin/header',$data, true);
		
		$this->load->view('admin/pengguna', $data);
                //$this->load->view('admin/menu',$data);
                
            }
            else
            {
                echo "<script>alert('Maaf anda tidak berhak mengakses halaman ini');history.go(-1);</script>";
            }
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('stts');
		session_destroy();
		redirect('auth');
	}
}
?>