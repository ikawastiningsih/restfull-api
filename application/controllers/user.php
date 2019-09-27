<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $user = $this->db->get('tb_user')->result();
        } else {
            $this->db->where('id', $id);
            $user = $this->db->get('tb_user')->result();
        }
        $this->response($user, 200);
    }

    //Masukan function selanjutnya disini
}
?>