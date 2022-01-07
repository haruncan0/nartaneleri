<?php
defined('BASEPATH') or exit('No direct script access allowed');
use WebPConvert\WebPConvert;
class Add_images extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}
    public function add_image()
    {
        $uploaded_images = [];
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('Upload', $config);
        if ($this->upload->do_upload('file')) {
            $image_session = $this->session->userdata('images');
            if ($image_session == false) {
                $uploaded_images = [];
            } else {
                $uploaded_images = $image_session;
            }

            $uploaded_images[] = 'assets/uploads/'.$this->upload->data('file_name');
            $this->session->set_userdata('images', $uploaded_images);
            pre($this->session->userdata('images'));
        }
        else {
            $this->session->set_userdata('image_error', $this->upload->display_errors());
            pre($this->session->set_userdata('image_error'));
        }
    }

    public function add_image_2()
    {
        $uploaded_images = [];
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('Upload', $config);
        if ($this->upload->do_upload('file')) {
            $image_session = $this->session->userdata('images_2');
            if ($image_session == false) {
                $uploaded_images = [];
            } else {
                $uploaded_images = $image_session;
            }

            $uploaded_images[] = 'assets/uploads/'.$this->upload->data('file_name');
            $this->session->set_userdata('images_2', $uploaded_images);
            pre($this->session->userdata('images_2'));
        }
        else {
            $this->session->set_userdata('image_error', $this->upload->display_errors());
            pre($this->session->set_userdata('image_error'));
        }
    }

    public function add_image_3()
    {
        $uploaded_images = [];
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('Upload', $config);
        if ($this->upload->do_upload('file')) {
            $image_session = $this->session->userdata('images_3');
            if ($image_session == false) {
                $uploaded_images = [];
            } else {
                $uploaded_images = $image_session;
            }

            $uploaded_images[] = 'assets/uploads/'.$this->upload->data('file_name');
            $this->session->set_userdata('images_3', $uploaded_images);
            pre($this->session->userdata('images_3'));
        }
        else {
            $this->session->set_userdata('image_error', $this->upload->display_errors());
            pre($this->session->set_userdata('image_error'));
        }
    }

    public function add_image_4()
    {
        $uploaded_images = [];
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('Upload', $config);
        if ($this->upload->do_upload('file')) {
            $image_session = $this->session->userdata('images_4');
            if ($image_session == false) {
                $uploaded_images = [];
            } else {
                $uploaded_images = $image_session;
            }

            $uploaded_images[] = 'assets/uploads/'.$this->upload->data('file_name');
            $this->session->set_userdata('images_4', $uploaded_images);
            pre($this->session->userdata('images_4'));
        }
        else {
            $this->session->set_userdata('image_error', $this->upload->display_errors());
            pre($this->session->set_userdata('image_error'));
        }
    }
}
