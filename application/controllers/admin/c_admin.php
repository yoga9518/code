<?php
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
//	public function indexc() {
//            $cek  = $this->session->userdata('logged_in');
//            $stts = $this->session->userdata('stts');
//            if(!empty($cek) && $stts=="admin")
//            {
//		$data['username']       = $this->session->userdata('username');
//                $data['nama_lengkap']   = $this->session->userdata('nama_lengkap');
//                $data['act']= 0;
//                
//                $data['menu']       = $this->load->view('admin/menu',$data, true);
//                $data['profil']     = $this->load->view('admin/profil',$data, true);
//                $data['header']     = $this->load->view('admin/header',$data, true);
//                $data['isi']        = $this->load->view('admin/isi', $data,true);
//                $data['head']       = $this->load->view('admin/head', $data,true);
//		
//		$this->load->view('admin/index', $data);
//                //$this->load->view('admin/menu',$data);
//                
//            }
//            else
//            {
//                echo "<script>alert('Maaf anda tidak berhak mengakses halaman ini');history.go(-1);</script>";
//            }
//	}
//        public function pengguna() {
//            $cek  = $this->session->userdata('logged_in');
//            $stts = $this->session->userdata('stts');
//            if(!empty($cek) && $stts=="admin")
//            {
//                $data['pengguna']       = "User";
//		$data['username']       = $this->session->userdata('username');
//                $data['nama_lengkap']   = $this->session->userdata('nama_lengkap');
//                $data['act']= 1;
//                
//                $data['menu']       = $this->load->view('admin/menu',$data, true);
//                $data['profil']     = $this->load->view('admin/profil',$data, true);
//                $data['header']     = $this->load->view('admin/header',$data, true);
//                $data['head']       = $this->load->view('admin/head', $data,true); 
//                $data['script']       = $this->load->view('admin/script', $data,true); 
//		$data['isi_pengguna'] = $this->load->view('admin/isi_pengguna',$data, true);
//                
//		$this->load->view('admin/pengguna', $data);
//                //$this->load->view('admin/menu',$data);
//                
//            }
//            else
//            {
//                echo "<script>alert('Maaf anda tidak berhak mengakses halaman ini');history.go(-1);</script>";
//            }
//	}
        public function index(){
            $cek  = $this->session->userdata('logged_in');
            $stts = $this->session->userdata('stts');
            if(!empty($cek) && $stts="admin")
            {
                $data['pengguna']       = "user";
                $data['username']       = $this->session->userdata('username');
                $data['nama_lengkap']   = $this->session->userdata('nama_lengkap');
                $data['act']            = 0;
                
                $data['navbar_header']  = $this->load->view('t_admin/menu/navbar_header',$data, true);
                $data['menu']           = $this->load->view('t_admin/menu/menu',$data, true);
                $data['isi']            = $this->load->view('t_admin/isi_menu/dashboard',$data, true);
                $data['judul']          = $this->load->view('t_admin/menu/judul', $data,true); 
                $data['head']           = $this->load->view('t_admin/menu/head', $data,true); 
		$data['script_bawah']   = $this->load->view('t_admin/menu/script_bawah',$data, true);
                
                $this->load->view('test', $data);
            }
            else{
                echo "<script>alert('Maaf anda tidak berhak mengakses halaman ini');history.go(-1);</script>";
            }
            
            
        }
        public function blank(){
            $cek  = $this->session->userdata('logged_in');
            $stts = $this->session->userdata('stts');
            if(!empty($cek) && $stts=="admin")
            {
                $data['pengguna']       = "User";
		$data['username']       = $this->session->userdata('username');
                $data['nama_lengkap']   = $this->session->userdata('nama_lengkap');
                $data['act']= 1;
                
                $data['navbar_header']  = $this->load->view('t_admin/menu/navbar_header',$data, true);
                $data['menu']           = $this->load->view('t_admin/menu/menu',$data, true);
                $data['isi']            = $this->load->view('t_admin/menu/isi',$data, true);
                $data['judul']          = $this->load->view('t_admin/menu/judul', $data,true); 
                $data['head']           = $this->load->view('t_admin/menu/head', $data,true); 
		$data['script_bawah']   = $this->load->view('t_admin/menu/script_bawah',$data, true);
                
                $this->load->view('blank',$data);
        }
        }
        public function tabel(){
            $cek  = $this->session->userdata('logged_in');
            $stts = $this->session->userdata('stts');
            if(!empty($cek) && $stts=="admin")
            {
                $data['tabel']          = 'Pengguna';
		$data['username']       = $this->session->userdata('username');
                $data['nama_lengkap']   = $this->session->userdata('nama_lengkap');
                $data['act']= 2;
                
                $data['navbar_header']  = $this->load->view('t_admin/menu/navbar_header',$data, true);
                $data['menu']           = $this->load->view('t_admin/menu/menu',$data, true);
                $data['isi']            = $this->load->view('t_admin/isi_menu/isi_tabel',$data, true);
                $data['judul']          = $this->load->view('t_admin/menu/judul', $data,true); 
                $data['head']           = $this->load->view('t_admin/menu/head', $data,true); 
		$data['script_bawah']   = $this->load->view('t_admin/menu/script_bawah',$data, true);
                
                $this->load->view('blank',$data);
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