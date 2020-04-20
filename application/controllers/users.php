<?php
	defined('BASEPATH') or exit('No direct script access allowed');

class users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	// nih disini ha

    public function view($id)
    {
        $data['page_title'] = 'Member List';

         $cari = $this->user_model->cari($id);
        if (count($cari) > 0) {
            //berarti ada t ruosk langsung masuk vie
            $data['member'] = $cari[0];
            view('base_template', 'edit_member', $data);
        } else {
            // kalo idnya gk ketemu date_interval'_create_from_date_string
            redirect('dashboard', 'refresh');
        }
    }

    
    public function index()
    {
        $data['page_title'] = 'List Member | Admin';

        $data['members'] = $this->user_model->semua();
        $data['admin'] = $this->user_model->showadmin();

        view('base_template', 'list_member', $data);
    }

    
	public function list_member()
	{
		$data['page_title'] = 'Member List';
		$data['members'] = $this->user_model->semua();
		view('base_template', 'list_member', $data);
	}

	public function list_admin()
	{
		$data['page_title'] = 'Admin List';
        $data['members'] = $this->user_model->showadmin();
        view('base_template', 'list_admin', $data);
	}

    public function view_admin($id)
    {
        $data['page_title'] = 'Admin List';

        $cari = $this->user_model->cari_admin($id);
        if (count($cari) > 0) {
            $data['member'] = $cari[0];
            view('base_template', 'edit_admin', $data);
        } else {
            // kalo idnya gk ketemu date_interval'_create_from_date_string
            redirect('dashboard', 'refresh');
        }
    }


    public function editadmin()
    {
        $e = array();

        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if (!$id) {
            $e['errors'][] = "ID KOSONG";
        }
        if (!$name) {
            $e['errors'][] = "nama KOSONG";
        }
        if (!$email) {
            $e['errors'][] = "email KOSONG";
        }
        if (!$password) {
            $e['errors'][] = "password KOSONG";
        }

        if ($e) {
            die(json_encode($e));
        }

        $data = array(
            "name" => $name,
            "email" => $email,
            "password" =>password_hash($password, PASSWORD_BCRYPT),
        );

        $this->user_model->editadmin($data, $id);


        $result['redirect'] = base_url("dashboard/view_admin/$id");

        die(json_encode($result));
    }
    public function edit()
    {
        $e = array();

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $imei = $this->input->post('imei');

        if (!$id) {
            $e['errors'][] = "ID KOSONG";
        }
        if (!$nama) {
            $e['errors'][] = "ID KOSONG";
        }
        if (!$email) {
            $e['errors'][] = "ID KOSONG";
        }
        if (!$imei) {
            $e['errors'][] = "ID KOSONG";
        }

        if ($e) {
            die(json_encode($e));
        }

        $data = array(
            "nama" => $nama,
            "email" => $email,
            "IMEI" => $imei,
        );

        $this->user_model->edit($data, $id);


        $result['redirect'] = base_url("dashboard/view/$id");

        die(json_encode($result));
    }

    public function delete()
    {
        $e = array();

        $id = $this->input->post('id');

        if (!$id) {
            $e['errors'][] = "ID KOSONG";
        }

        if ($e) {
            die(json_encode($e));
        }

        $this->user_model->hapus($id);
        $result['redirect'] = base_url("dashboard/list_member");

        die(json_encode($result));
    }



}
