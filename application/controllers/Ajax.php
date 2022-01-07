<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends Veripay_Controller
{
	public function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json');
        $this->result = new StdClass();
        $this->result->status = false;
        $this->load->model($this->router->fetch_class() . '_model', 'model');
    }

    public function response()
    {
        echo json_encode($this->result);
    }

    public function contact_form()
    {
    	$post_data = new stdClass();
        $this->form_validation->set_rules('name', 'Ad Soyad', 'required|trim|xss_clean|max_length[250]');
        $this->form_validation->set_rules('email', 'E-posta', 'required|trim|xss_clean|valid_email');
        $this->form_validation->set_rules('message', 'Mesaj', 'required|trim|xss_clean|max_length[3000]');
        $this->form_validation->set_rules('confirm', 'Aydınlatma Metni', 'required|xss_clean|integer');

        if($this->form_validation->run() != false) {
        	$post_data->name = $this->input->post('name', true);
        	$post_data->email = $this->input->post('email', true);
        	$post_data->message = $this->input->post('message', true);
            $confirm = $this->input->post('confirm', true);
            $post_data->add_date = date('Y-m-d H:i:s');

            if($confirm == 1) {
                if($this->model->add_contact($post_data)) {
                    $this->result->status = true;
                } else {
                    $this->result->error = "Bir Hata Oluştu";
                }
            } else {
                $this->result->error = 'Lütfen Aydınlatma Metnini Okuyup Onaylayınız.';
            }
        } else {
        	if(form_error('name')) {
        		$this->result->error = form_error('name');
        	} elseif(form_error('email')) {
        		$this->result->error = form_error('email');
        	} elseif(form_error('message')) {
        		$this->result->error = form_error('message');
        	} elseif (form_error('confirm')) {
                $this->result->error = form_error('confirm');
            }
        }
        $this->response();
    }
}