<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends Veripay_Controller
{

    function __construct()
    {
        parent:: __construct();

        $this->load->model('admin/' . $this->router->fetch_class() . '_model', 'model');

    }

    public function index()
    {
        $this->is_admin_login();
        $this->load->view('admin/login');
    }

    public function logout()
    {
        $this->session->sess_destroy('admin_info');
        redirect(site_url('yonetim-paneli-giris'));
    }

    public function homepage_admin()
    {
        $data = new stdClass();
        $data->active = "home_page";

        $this->admin_logout();

        $data->homepage = $this->model->get_homepage_about();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function contract()
    {
        $data = new stdClass();
        $data->active = "contract";

        $this->admin_logout();

        $data->contract = $this->model->get_contract();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/contract');
        $this->load->view('admin/footer');
    }

    public function edit_profile()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "";
        $data->admin_info = $this->model->admin_info($this->session->userdata('admin_info')->id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_profile');
        $this->load->view('admin/footer');
    }

    public function about()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "about";

        $data->about = $this->model->get_about();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/about');
        $this->load->view('admin/footer');
    }

    public function add_slider()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "slider";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/slider/add');
        $this->load->view('admin/footer');
    }

    public function list_slider()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "slider";

        $data->slider = $this->model->get_slider();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/slider/list');
        $this->load->view('admin/footer');
    }

    public function update_slider($id = '')
    {
        $this->admin_logout();

        if(empty($id)){
            redirect(site_url('yonetim-paneli/slider-listele'));
        }

        $data = new stdClass();
        $data->active = "slider";

        if(!$data->slider = $this->model->get_selected_slider($id)) {
            redirect(site_url('yonetim-paneli/slider-listele'));
        }

        $this->load->view('admin/header', $data);
        $this->load->view('admin/slider/update');
        $this->load->view('admin/footer');
    }


    public function contact()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "contact";

        $data->contact = $this->model->get_contact();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/contact');
        $this->load->view('admin/footer');
    }

    public function messages()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "messages";
        $data->messages = $this->model->get_messages();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/messages');
        $this->load->view('admin/footer');
    }


    public function site_settings()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "site_settings";
        $data->site_settings = $this->model->get_site_settings();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/site_settings');
        $this->load->view('admin/footer');
    }

    public function facility()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "facility";
        $data->facility = $this->model->get_facility();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/facility');
        $this->load->view('admin/footer');
    }

    public function preference()
    {
        $this->admin_logout();
        $data = new stdClass();

        $data->active = "preference";

        $data->preference = $this->model->get_preference();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/preference/list');
        $this->load->view('admin/footer');
    }

    public function preference_update($id = '')
    {
        $this->admin_logout();
        
        if (empty($id)) {
            redirect(site_url('neden-biz'));
        }
        $data = new stdClass();

        $data->active = "preference";

        $data->selected_preference = $this->model->get_selected_preference($id);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/preference/update');
        $this->load->view('admin/footer');
    }

    public function banner()
    {
        $this->admin_logout();
        $data = new stdClass();

        $data->active = "banner";
        $data->banner = $this->model->get_banner();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/banner');
        $this->load->view('admin/footer');
    }

    public function add_gallery()
    {
        $this->admin_logout();
        $data = new stdClass();

        $data->active = "gallery";
        $data->group = $this->model->get_group();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery/add');
        $this->load->view('admin/footer');
    }

    public function add_gallery_group()
    {
        $this->admin_logout();
        $data = new stdClass();

        $data->active = "gallery";
        $data->gallery_group = $this->model->get_gallery_group();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery/group_add');
        $this->load->view('admin/footer');
    }

    public function update_gallery_group($id)
    {
        $this->admin_logout();
        $data = new stdClass();

        if (empty($id)) {
            redirect(site_url('yonetim-paneli'));
        }

        $data->active = "gallery";
        $data->selected_group = $this->model->get_selected_gallery_group($id);
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery/group_update');
        $this->load->view('admin/footer');
    }

    public function list_gallery()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "gallery";
        $data->gallery = $this->model->get_gallery();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery/list');
        $this->load->view('admin/footer');
    }

    public function update_gallery($id)
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "gallery";
        $data->gallery = $this->model->get_selected_gallery($id);
        $data->group = $this->model->get_group();
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery/update');
        $this->load->view('admin/footer');
    }

    public function class_add()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "class";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/class/add');
        $this->load->view('admin/footer');
    }

    public function class_list()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "class";

        $data->class = $this->model->get_class();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/class/list');
        $this->load->view('admin/footer');
    }

    public function class_update($id)
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "class";

        $data->class = $this->model->get_selected_class($id);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/class/update');
        $this->load->view('admin/footer');
    }

    public function ticket_list($id)
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "class";

        if (!$this->model->class_control($id)) {
            redirect(site_url('yonetim-paneli/siniflari-listele'));
        }

        $data->ticket = $this->model->get_ticket($id);
        // prex($data->ticket);
        $data->slug_id = $id;
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/class/ticket_list');
        $this->load->view('admin/footer');
    }

    public function update_ticket($id)
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "class";

        if (!$this->model->ticket_control($id)) {
            redirect(site_url('yonetim-paneli/siniflari-listele'));
        }

        $data->ticket = $this->model->get_selected_ticket($id);
        $data->slug_id = $id;
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/class/update_ticket');
        $this->load->view('admin/footer');
    }

    public function add_event()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "event";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/event/add');
        $this->load->view('admin/footer');
    }

    public function list_event()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "event";

        $data->event = $this->model->get_event();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/event/list');
        $this->load->view('admin/footer');
    }

    public function update_event($id)
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "event";

        if (!$this->model->event_control($id)) {
            redirect(site_url('yonetim-paneli/etkinlikleri-listele'));
        }

        $data->event = $this->model->get_selected_event($id);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/event/update');
        $this->load->view('admin/footer');
    }

    public function add_teacher()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "teacher";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/teacher/add');
        $this->load->view('admin/footer');
    }

    public function list_teacher()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "teacher";
        $data->teacher = $this->model->get_teacher();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/teacher/list');
        $this->load->view('admin/footer');
    }

    public function update_teacher($id)
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "teacher";


        if (!$this->model->teacher_control($id)) {
            redirect(site_url('yonetim-paneli/ogretmenleri-listele'));
        }

        $data->teacher = $this->model->get_selected_teacher($id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/teacher/update');
        $this->load->view('admin/footer');
    }

}