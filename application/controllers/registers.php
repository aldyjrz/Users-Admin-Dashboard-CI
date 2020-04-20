<?php
	defined('BASEPATH') or exit('No direct script access allowed');

class registers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }


    public function index()
    {
        $data['page_title'] = 'BSH Register | Admin';
      

        view('base_template', 'add_member', $data);
    }

    //add members 
    public function add()
    {
        view('base_template', 'add_member');
    }


    public function add_admin()
    {

        $data['page_title'] = 'Add Admin'; 
        view('base_template', 'add_admin', $data);
    }

    public function tambah()
    {
        $e = array();

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $imei = $this->input->post('imei');
        $imsi = $this->input->post('imsi');
        $type = $this->input->post('type');

        if (!$nama) {
            $e['errors'][] = "ID KOSONG";
        }
        if (!$email) {
            $e['errors'][] = "ID KOSONG";
        }
        if (!$imei) {
            $e['errors'][] = "ID KOSONG";
        }
        if (!$imsi) {
            $e['errors'][] = "ID KOSONG";
        }
        if (!$type) {
            $e['errors'][] = "ID KOSONG";
        }

        if ($e) {
            die(json_encode($e));
        }

        $data = array(
            "nama" => $nama,
            "email" => $email,
            "IMEI" => $imei,
            "IMSI" => $imsi,
            "type" => $type

        );

        $q = $this->user_model->tambah($data);

        if ($q['code'] !== 0) {
            $e['errors'][] = $q['message'];
        }

        if ($e) {
            die(json_encode($e));
        }

        $result['redirect'] = base_url("users/list_member");

        die(json_encode($result));
    }

    public function tambah_admin()
    {
        $e = array();

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');


        if (!$name) {
            $e['errors'][] = "name kosong";
        }
        if (!$email) {
            $e['errors'][] = "email kosong";
        }
        if (!$password) {
            $e['errors'][] = "password kosong";
        }
        if ($e) {
            die(json_encode($e));
        }

        $data = array(
            "name" => $name,
            "email" => $email,
            "password" =>password_hash($password, PASSWORD_BCRYPT),

        );

        $q = $this->user_model->tambah_admin($data);

        if ($q['code'] !== 0) {
            $e['errors'][] = $q['message'];
        }

        if ($e) {
            die(json_encode($e));
        }

        $result['redirect'] = base_url("users/list_admin");

        die(json_encode($result));
    }



}
