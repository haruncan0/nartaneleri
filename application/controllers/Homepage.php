<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends Veripay_Controller
{
	function __construct()
    {
        parent:: __construct();

        $this->load->model($this->router->fetch_class() . '_model', 'model');
    }

    public function index()
    {
        $data = new StdClass();

        $data->slider = $this->model->get_slider();
        $data->facility = $this->model->get_facility();
        $data->homepage = $this->model->get_homepage();
        $data->gallery = $this->model->get_homepage_gallery();
        $data->class = $this->model->get_homepage_class();
        $data->event = $this->model->get_homepage_event();
        $data->contact = $this->model->get_contact();
        $data->teacher = $this->model->get_homepage_teacher();
        
        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function about()
    {
        $data = new StdClass();
        $data->facility = $this->model->get_facility();
        $data->about = $this->model->get_about();
        $data->preference = $this->model->get_preference();
        $data->banner = $this->model->get_banner()->about_banner;
        $data->contact = $this->model->get_contact();

        $this->load->view('header', $data);
        $this->load->view('about');
        $this->load->view('footer');
    }

    public function classes($slug = '')
    {
        $data = new StdClass();
        $data->banner = $this->model->get_banner()->class_banner;
        $data->contact = $this->model->get_contact();

        if (empty($slug)) {
            $data->class = $this->model->get_class();
        } else {
            if (!$data->select_ticket = $this->model->slug_control($slug)) {
                redirect(site_url('siniflarimiz'));
            }

            $data->class = $this->model->get_ticket_class($slug);
        }

        $this->load->view('header', $data);
        $this->load->view('classes');
        $this->load->view('footer');
    }

    public function events()
    {
        $data = new StdClass();
        $data->banner = $this->model->get_banner()->event_banner;
        $data->contact = $this->model->get_contact();
        $data->event = $this->model->get_event();

        $this->load->view('header', $data);
        $this->load->view('event');
        $this->load->view('footer');
    }


    public function teachers()
    {
        $data = new StdClass();
        $data->contact = $this->model->get_contact();

        $data->banner = $this->model->get_banner()->teacher_banner;
        $data->teacher = $this->model->get_teacher();

        $this->load->view('header', $data);
        $this->load->view('teachers');
        $this->load->view('footer');
    }

    public function teacher_detail($slug)
    {
        $data = new StdClass();
        $data->contact = $this->model->get_contact();

        if(!$data->select_teacher = $this->model->get_selected_teacher($slug)) {
            redirect(site_url('ogretmenlerimiz'));
        } 

        $this->load->view('header', $data);
        $this->load->view('teacher_detail');
        $this->load->view('footer');
    }


    public function gallery()
    {
        $data = new StdClass();
        $data->banner = $this->model->get_banner()->gallery_banner;
        $data->group = $this->model->get_gallery_group();
        $data->gallery = $this->model->get_gallery();
        $data->contact = $this->model->get_contact();

        $this->load->view('header', $data);
        $this->load->view('gallery');
        $this->load->view('footer');
    }

    public function contact()
    {
        $data = new StdClass();
        $data->active = "contact";
        $data->banner = $this->model->get_banner()->contact_banner;
        $data->contact = $this->model->get_contact();
        $data->lighting = $this->model->get_lighting();
        
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }

    public function classes_detail($slug)
    {
        $data = new StdClass();
        $data->contact = $this->model->get_contact();
        
        if(!$data->select_class = $this->model->get_selected_class($slug)) {
            redirect(site_url('siniflarimiz'));
        }
        $data->ticket = $this->model->get_selected_ticket($data->select_class->id);
        $this->load->view('header', $data);
        $this->load->view('class_detail');
        $this->load->view('footer');
    }

    public function event_detail($slug)
    {
        $data = new StdClass();
        $data->contact = $this->model->get_contact();
        
        if(!$data->event = $this->model->selected_event($slug)) {
            redirect(site_url('etkinliklerimiz'));
        }

        $this->load->view('header', $data);
        $this->load->view('event_detail');
        $this->load->view('footer');
    }

}