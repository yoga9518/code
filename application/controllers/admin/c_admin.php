<?php

class C_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
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
    //    public function tambah_tabel() {
//        $cek = $this->session->userdata('logged_in');
//        $cek = $this->session->userdata('logged_in');
//        $stts = $this->session->userdata('stts');
//        if (!empty($cek) && $stts == "admin") {
//            $username = $_POST['username'];
//            $nama_lengkap = $_POST['nama_lengkap'];
//            $stts = $_POST['stts'];
//            $data = array(
//                'username' => $username,
//                'nama_lengkap' => $nama_lengkap,
//                'stts' => $stts,
//                'password' => md5($username)
//            );
//            $res = $this->model_user->insertData('ys_login', $data);
//            if ($res >= 1) {
//                $this->session->set_flashdata('pesan', "<div class='alert alert-success alert-dismissable'>
//                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
//                                Data Pengguna berhasil di Tambah
//                            </div>");
//                redirect('admin/c_admin/tabel');
//            } else {
//                echo "insert data gagal";
//            }
//        }
//    }
    public function index() {
        $cek = $this->session->userdata('logged_in');
        $stts = $this->session->userdata('stts');
        if (!empty($cek) && $stts = "admin") {
            $data['judul_menu'] = 'Dashboard Sistem';
            $data['username'] = $this->session->userdata('username');
            $data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
            $data['act'] = 0;

            $data['navbar_header'] = $this->load->view('t_admin/menu/navbar_header', $data, true);
            $data['menu'] = $this->load->view('t_admin/menu/menu', $data, true);
            $data['isi'] = $this->load->view('t_admin/isi_menu/dashboard', $data, true);
            $data['judul'] = $this->load->view('t_admin/menu/judul', $data, true);
            $data['head'] = $this->load->view('t_admin/menu/head', $data, true);
            $data['script_bawah'] = $this->load->view('t_admin/menu/script_bawah', $data, true);

            $this->load->view('t_admin', $data);
        } else {
            echo "<script>alert('Maaf anda tidak berhak mengakses halaman ini');history.go(-1);</script>";
        }
    }

    public function blank() {
        $cek = $this->session->userdata('logged_in');
        $stts = $this->session->userdata('stts');
        if (!empty($cek) && $stts == "admin") {
            $data['pengguna'] = "User";
            $data['username'] = $this->session->userdata('username');
            $data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
            $data['act'] = 1;

            $data['navbar_header'] = $this->load->view('t_admin/menu/navbar_header', $data, true);
            $data['menu'] = $this->load->view('t_admin/menu/menu', $data, true);
            $data['isi'] = $this->load->view('t_admin/menu/isi', $data, true);
            $data['judul'] = $this->load->view('t_admin/menu/judul', $data, true);
            $data['head'] = $this->load->view('t_admin/menu/head', $data, true);
            $data['script_bawah'] = $this->load->view('t_admin/menu/script_bawah', $data, true);

            $this->load->view('t_admin', $data);
        }
    }

    public function tabel() {
        $cek = $this->session->userdata('logged_in');
        $stts = $this->session->userdata('stts');
        if (!empty($cek) && $stts == "admin") {
            $data['judul_menu'] = 'Pengguna Sistem';
            $data['username'] = $this->session->userdata('username');
            $data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
            $data['act'] = 2;

            $dat = array(
                'data' => $this->model_user->orang()
            );
            $data['navbar_header'] = $this->load->view('t_admin/menu/navbar_header', $data, true);
            $data['menu'] = $this->load->view('t_admin/menu/menu', $data, true);
            $data['isi'] = $this->load->view('t_admin/isi_menu/isi_tabel', $dat, true);
            $data['judul'] = $this->load->view('t_admin/menu/judul', $data, true);
            $data['head'] = $this->load->view('t_admin/menu/head', $data, true);
            $data['script_bawah'] = $this->load->view('t_admin/menu/script_bawah', $data, true);
            //$data['m']              = $this->load->view('t_admin/isi_menu/modal_tambah',$data, true);
            //$this->load->view('view_admin', $data);
            $this->load->view('t_admin', $data);
        }
    }

    function tambah() {
        $cek = $this->session->userdata('logged_in');
        $stts = $this->session->userdata('stts');
        if (!empty($cek) && $stts == "admin") {
            $data = array(
                'username' => $this->input->post('username'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'stts' => $this->input->post('stts')
            );
            $this->model_user->tambah($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan '
                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                    . '<span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/c_admin/tabel');
        }
    }

    public function edit_user() {
        $cek = $this->session->userdata('logged_in');
        $stts = $this->session->userdata('stts');
        if (!empty($cek) && $stts == "admin") {
            $id = $this->input->post('id');
            $data = array(
                'username' => $this->input->post('username'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'stts' => $this->input->post('stts')
            );
            $this->model_user->edit($data, $id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> '
                    . 'Data Berhasil Di Update <button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                    . '<span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/c_admin/tabel');
        }
    }

    public function delete($id) {
        $where = array('id' => $id);
        $res = $this->model_user->deletedata('ys_login', $where);
        if ($res >= 1) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil Di Hapus '
                    . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                    . '<span aria-hidden="true">&times;</span></button>'
                    . '</div>');
            redirect('admin/c_admin/tabel');
        }
    }

    public function new_article() {
        $cek = $this->session->userdata('logged_in');
        $stts = $this->session->userdata('stts');
        if (!empty($cek) && $stts == "admin") {
            $data['judul_menu'] = 'Tambah Artikel';
            $data['username'] = $this->session->userdata('username');
            $data['nama_lengkap'] = $this->session->userdata('nama_lengkap');
            $data['act'] = 3;

            $data['navbar_header'] = $this->load->view('t_admin/menu/navbar_header', $data, true);
            $data['menu'] = $this->load->view('t_admin/menu/menu', $data, true);
            $data['isi'] = $this->load->view('t_admin/isi_menu/i_new_article', $data, true);
            $data['judul'] = $this->load->view('t_admin/menu/judul', $data, true);
            $data['head'] = $this->load->view('t_admin/menu/head', $data, true);
            $data['script_bawah'] = $this->load->view('t_admin/menu/script_bawah', $data, true);

            $this->load->view('t_admin', $data);
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