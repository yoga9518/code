<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web_App_Model extends CI_Model {

    public function getLoginData($usr, $psw)
    {
        $u = mysqli_real_escape_string($usr);
        $p = md5(mysqli_real_escape_string($psw));
        $q_cek_login = $this->db->get_where('tbl_login', array('username' => $u, 'password' => $p));
        
        if(count($q_cek_login->result())>0)
        {
            foreach($q_cek_login->result() as $qck)
            {
                if($qck->stts=="admin")
                {
                    $q_ambil_data = $this->db->get_where('tbl_admin', array('username'=>$u));
                    foreach ($q_ambil_data -> result() as $qad)
                    {
                        $sess_data['logged_in'] = 'yes';
                        $sess_data['username'] 	= $qad->username;
			$sess_data['nama'] 	= $qad->nama_lengkap;
			$sess_data['stts'] 	= 'admin';
                        $this->session->set_userdata($sess_data);
                    }
                    header('location'.index.php/admin);
                }
            }
        }
    }

}

?>