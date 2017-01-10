<?php
class C_member extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index(){
            $cek  = $this->session->userdata('logged_in');
            $stts = $this->session->userdata('stts');
            if(!empty($cek) && $stts=='member')
            {
            	$data['username']       = $this->session->userdata('username');
                $data['nama_lengkap']   = $this->session->userdata('nama_lengkap');
                $data['password']       = $this->session->userdata('password');
                
		$this->load->view('member/index', $data);
            }
            else{
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