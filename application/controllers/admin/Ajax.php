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
        $this->load->model('admin/' . $this->router->fetch_class() . '_model', 'model');
    }

    public function response()
    {
        echo json_encode($this->result);
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Kullanıcı Adı', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Şifre', 'required|trim|xss_clean');
        if ($this->form_validation->run() != false) {
            $password = $this->input->post('password', true);
            $username = $this->input->post('username', true);
            if ($this->model->login($password, $username)) {

                if ($this->session->userdata('admin_info')) {
                    if ($this->session->userdata('admin_info')->status == 0) {
                        $this->result->error = "Sisteme Erişim Yetkiniz Yok";
                        $this->session->sess_destroy('admin_info');
                    } else {
                        $this->result->status = true;
                    }
                }
            } else {
                $this->result->error = "Kullanıcı Adı veya Şifre Hatalı";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_homepage()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('about_title', 'Hakkımızda Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('about_text', 'Hakkımızda Metin', 'required|trim|xss_clean');
        $this->form_validation->set_rules('about_button', 'Hakkımızda Buton Yazısı', 'required|trim|max_length[250]|xss_clean');

        $this->form_validation->set_rules('gallery_title', 'Galeri Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('gallery_text', 'Galeri Metin', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('gallery_button', 'Galeri Buton Yazısı', 'required|trim|max_length[250]|xss_clean');

        $this->form_validation->set_rules('class_title', 'Sınıf Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('class_text', 'Sınıf Metin', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('class_button', 'Sınıf Buton Yazısı', 'required|trim|max_length[250]|xss_clean');

        $this->form_validation->set_rules('teacher_title', 'Öğretmenlerimiz Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('teacher_text', 'Öğretmenlerimiz Metin', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('teacher_button', 'Öğretmenlerimiz Buton Yazısı', 'required|trim|max_length[250]|xss_clean');

        $this->form_validation->set_rules('why_title', 'Neden Biz Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('why_text', 'Neden Biz Metin', 'required|trim|max_length[250]|xss_clean');

        $this->form_validation->set_rules('event_title', 'Etkinliklerimiz Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('event_text', 'Etkinliklerimiz Metin', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('event_button', 'Etkinliklerimiz Buton Yazısı', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->about_title = $this->input->post('about_title', true);
            $post_data->about_text = $this->input->post('about_text', true);
            $post_data->about_button = $this->input->post('about_button', true);

            $post_data->gallery_title = $this->input->post('gallery_title', true);
            $post_data->gallery_text = $this->input->post('gallery_text', true);
            $post_data->gallery_button = $this->input->post('gallery_button', true);

            $post_data->class_title = $this->input->post('class_title', true);
            $post_data->class_text = $this->input->post('class_text', true);
            $post_data->class_button = $this->input->post('class_button', true);

            $post_data->teacher_title = $this->input->post('teacher_title', true);
            $post_data->teacher_text = $this->input->post('teacher_text', true);
            $post_data->teacher_button = $this->input->post('teacher_button', true);

            $post_data->why_title = $this->input->post('why_title', true);
            $post_data->why_text = $this->input->post('why_text', true);

            $post_data->event_title = $this->input->post('event_title', true);
            $post_data->event_text = $this->input->post('event_text', true);
            $post_data->event_button = $this->input->post('event_button', true);

            $post_data->update_date = date('Y-m-d H:i:s');

            if ($this->session->userdata('images')) {
                $post_data->about_image = $this->session->userdata('images');
                $post_data->about_image = $post_data->about_image[0];
                $this->session->unset_userdata('images');

            }
            if ($this->model->update_homepage($post_data)) {
                    $this->result->status = true;
            } else {
                $this->result->error = 'Herhangi Bir Değişiklik Yapmadınız.';
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_account_genaral()
    {
        $post_data = new stdClass();
        $id = $this->session->userdata('admin_info')->id;
        $this->form_validation->set_rules('user_name', 'Kullanıcı Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('name_surname', 'Ad Soyad', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->name_surname = $this->input->post('name_surname', true);
            $post_data->user_name = $this->input->post('user_name', true);

            if($this->session->userdata('images')) {
                $post_data->profil_photo = $this->session->userdata('images')[0];
            }

            if ($this->model->update_account_genaral($post_data,$id)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Güncelleme İşlemi Başarısız Tekrar Denneyin";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_pass_account()
    {
        $post_data = new stdClass();
        $id = $this->session->userdata('admin_info')->id;
        $this->form_validation->set_rules('old_pass', 'Eski Şifre', 'required|trim|max_length[250]');
        $this->form_validation->set_rules('password', 'Yeni Şifre', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('confirm-password', 'Yeni Şİfre Tekrar', 'required|trim|max_length[250]|xss_clean|matches[password]');

        if ($this->form_validation->run() != false) {

            $old_pass = $this->input->post('old_pass');
            if(password_verify($old_pass,$this->session->userdata('admin_info')->password)) {
                $post_data->password = password_hash($this->input->post('password', true),PASSWORD_DEFAULT);

                if ($this->model->update_account_pass($post_data,$id)) {
                    $this->result->status = true;
                } else {
                    $this->result->error = "Güncelleme İşlemi Başarısız Tekrar Denneyin";
                }

            } else {
                $this->result->error = "Eski Şifrenizi Hatalı Giridiniz";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }


    // Slider başlangıç___________________________________________________________
    public function add_slider()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('text1', 'Başlık', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('text2', 'Başlık', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('text3', 'Başlık', 'trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {

            $post_data->text1 = $this->input->post('text1', true);
            $post_data->text2 = $this->input->post('text2', true);
            $post_data->text3 = $this->input->post('text3', true);
            $post_data->add_date = date('Y-m-d H:i:s');

            if ($this->session->userdata('images')) {

                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');

                if ($this->model->add_slider($post_data)) {
                    $this->result->url = site_url('yonetim-paneli/slider-listele');
                    $this->result->status = true;
                } else {
                    $this->result->error = "Slider Eklenirken Bir Hata Oluştu Lütfen Tekrar Deneyin.";
                }
            } else {
                $this->result->error = "Lütfen Bir Resim Ekleyin.";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_slider()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('test1', 'Başlık', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('test2', 'Başlık', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('test3', 'Başlık', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->text1 = $this->input->post('text1', true);
            $post_data->text2 = $this->input->post('text2', true);
            $post_data->text3 = $this->input->post('text3', true);
            $post_data->id = $this->input->post('id', true);
            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if ($this->model->update_slider($post_data)) {
                $this->result->url = site_url('yonetim-paneli/slider-listele');
                $this->result->status = true;
            } else {
                $this->result->error = "Güncelleme Esnasında Bir Hata Oluştu Lütfen Tekrar Deneyin";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function slider_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = 'slider';
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_slider()
    {

        $id = $this->input->post('id', true);
        $table_name = 'slider';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }
    // Slider bitiş___________________________________________________________



    //İletişim Bilgileri Başlangıç________________________________________________________________

    public function update_contact()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('start_time', 'Açılış Zamanı', 'required|trim|xss_clean');
        $this->form_validation->set_rules('address', 'Adres', 'required|trim|xss_clean');
        $this->form_validation->set_rules('phone1', '1. Telefon Numarası', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('phone2', '2. Telefon Numarası', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('mail', 'E-posta', 'required|trim|max_length[250]|xss_clean|valid_email');
        $this->form_validation->set_rules('facebook', 'Facebook', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('instagram', 'İnstagram', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('twitter', 'Twitter', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('map', 'Harita Konumu', 'required|trim|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->start_time = $this->input->post('start_time', true);
            $post_data->address = $this->input->post('address', true);
            $post_data->phone1 = $this->input->post('phone1',true);
            $post_data->phone2 = $this->input->post('phone2', true);
            $post_data->mail = $this->input->post('mail', true);
            $post_data->facebook = $this->input->post('facebook', true);
            $post_data->instagram = $this->input->post('instagram', true);
            $post_data->twitter = $this->input->post('twitter', true);
            $post_data->map = $this->input->post('map', true);
            $post_data->update_date = date('Y-m-d H:i:s');

            if ($this->model->update_contact($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Güncelleme Esnasında Bir Hata Oluştu Lütfen Tekrar Deneyin";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    //İletişim Bilgileri Bitiş___________________________________________________________________


    public function seen_message()
    {
        $id = $this->input->post('id', true);

        if ($this->model->seen_message($id)) {
            $this->result->status = true;
        }
        $this->response();
    }

    public function remove_images()
    {

        $this->session->unset_userdata('images');

        $this->result->status = true;


        $this->response();
    }

    public function delete_message()
    {

        $id = $this->input->post('id', true);
        $table_name = 'messages';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function site_settings()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('title', 'Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Aydınlatma Metni', 'required|trim|xss_clean');


        if ($this->form_validation->run() != false) {
            $post_data->title = $this->input->post('title', true);
            $post_data->description = $this->input->post('description',true);

            if ($this->model->site_settings($post_data)) {
                $this->result->url = site_url('yonetim-paneli/site-ayarlari');
                $this->result->status = true;
            } else {
                $this->result->error = "Güncelleme Esnasında Bir Hata Oluştu Lütfen Tekrar Deneyin";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_facility()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('title1', '1. Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('text1', '1. Metin', 'required|trim|max_length[250]|xss_clean');

        $this->form_validation->set_rules('title2', '2. Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('text2', '2. Metin', 'required|trim|max_length[250]|xss_clean');

        $this->form_validation->set_rules('title3', '3. Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('text3', '3. Metin', 'required|trim|max_length[250]|xss_clean');

        $this->form_validation->set_rules('title4', '4. Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('text4', '4. Metin', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->title1 = $this->input->post('title1', true);
            $post_data->text1 = $this->input->post('text1', true);

            $post_data->title2 = $this->input->post('title2', true);
            $post_data->text2 = $this->input->post('text2', true);

            $post_data->title3 = $this->input->post('title3', true);
            $post_data->text3 = $this->input->post('text3', true);

            $post_data->title4 = $this->input->post('title4', true);
            $post_data->text4 = $this->input->post('text4', true);

            $post_data->update_date = date('Y-m-d H:i:s');
            
            if ($this->session->userdata('images')) {
                $post_data->image_path1 = $this->session->userdata('images');
                $post_data->image_path1 = $post_data->image_path1[0];
                $this->session->unset_userdata('images');
            }

            if ($this->session->userdata('images_2')) {
                $post_data->image_path2 = $this->session->userdata('images_2');
                $post_data->image_path2 = $post_data->image_path2[0];
                $this->session->unset_userdata('images_2');
            }

            if ($this->session->userdata('images_3')) {
                $post_data->image_path3 = $this->session->userdata('images_3');
                $post_data->image_path3 = $post_data->image_path3[0];
                $this->session->unset_userdata('images_3');
            }

            if ($this->session->userdata('images_4')) {
                $post_data->image_path4 = $this->session->userdata('images_4');
                $post_data->image_path4 = $post_data->image_path4[0];
                $this->session->unset_userdata('images_4');
            }

            if($this->model->update_facility($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = 'Herhangi Bir Değişiklik Yapmadınız.';
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_about()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('about_title', 'Hakkımızda Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('about_text', 'Hakkımızda Metni', 'required|trim|xss_clean');
        $this->form_validation->set_rules('why_title', 'Neden Biz Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('why_text', 'Neden Biz Metin', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('comment_title', 'Yorumlar Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('comment_text', 'Yorumlar Metin', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->about_title = $this->input->post('about_title', true);
            $post_data->about_text = $this->input->post('about_text', true);
            $post_data->why_title = $this->input->post('why_title', true);
            $post_data->why_text = $this->input->post('why_text', true);
            $post_data->comment_title = $this->input->post('comment_title', true);
            $post_data->comment_text = $this->input->post('comment_text', true);
            $post_data->update_date = date('Y-m-d H:i:s');

            if ($this->model->update_about($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = 'Herhangi Bir Değişiklik Yapmadınız';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_preference()
    {
        $post_data = new StdClass();
        $this->form_validation->set_rules('id', 'Id', 'required|trim|max_length[250]|xss_clean|numeric');
        $this->form_validation->set_rules('title', 'Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('text', 'Metin', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $id = $this->input->post('id', true);
            $post_data->title = $this->input->post('title', true);
            $post_data->text = $this->input->post('text', true);
            $post_data->update_date = date('Y-m-d H:i:s');
            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }
            if($this->model->update_preference($post_data, $id)){
                $this->result->status = true;
                $this->result->url = site_url('yonetim-paneli/neden-biz');
            } else {
                $this->result->error = 'Herhangi Bir Değişiklik Yapmadınız';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_banner()
    {
        $post_data = new StdClass();
        $this->form_validation->set_rules('about_banner', 'Hakkımızda Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('class_banner', 'Sınıflarımız Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('event_banner', 'Etkinliklerimiz Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('teacher_banner', 'Öğretmenlerimiz Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('gallery_banner', 'Galeri Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('contact_banner', 'İletişim Başlık', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->about_banner = $this->input->post('about_banner', true);
            $post_data->class_banner = $this->input->post('class_banner', true);
            $post_data->event_banner = $this->input->post('event_banner', true);
            $post_data->teacher_banner = $this->input->post('teacher_banner', true);
            $post_data->gallery_banner = $this->input->post('gallery_banner', true);
            $post_data->contact_banner = $this->input->post('contact_banner', true);
            $post_data->update_date = date('Y-m-d H:i:s');

            if ($this->model->update_banner($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = 'Herhangi Bir Değişiklik Yapmadınız';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function add_gallery()
    {
        $post_data = new StdClass();
        $this->form_validation->set_rules('gallery_group', 'Grup', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->group = $this->input->post('gallery_group', true);

            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $post_data->add_date = date('Y-m-d H:i:s');

                $this->session->unset_userdata('images');

                if ($this->model->add_gallery($post_data)) {
                    $this->result->status = true;
                } else {
                    $this->result->error = 'Lütfen Tekrar Deneyin';
                }
            } else {
                $this->result->error = 'Lütfen Bir Resim Ekleyiniz';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }


    public function add_gallery_group()
    {
        $post_data = new StdClass();
        $this->form_validation->set_rules('group_add', 'Grup Adı', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->name = $this->input->post('group_add', true);
            $post_data->add_date = date('Y-m-d H:i:s');

            if ($insert_id = $this->model->add_gallery_group($post_data)) {
                $this->result->status = true;
                $this->result->table_name = $post_data->name;
                $this->result->table_id = $insert_id;
                $this->result->url = "window.location.href='".site_url('yonetim-paneli/galeri-grup-duzenle/'.$insert_id)."'";
            } else {
                $this->result->error = 'Lütfen Tekrar Deneyiniz';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_group()
    {
        $post_data = new StdClass();
        $this->form_validation->set_rules('id', 'Id', 'required|trim|max_length[250]|xss_clean|numeric');
        $this->form_validation->set_rules('group_add', 'Grup Adı', 'required|trim|max_length[250]|xss_clean');
        
        if ($this->form_validation->run() != false) {
            $post_data->name = $this->input->post('group_add', true);
            $post_data->id = $this->input->post('id', true);

            if ($this->model->update_group($post_data)){
                $this->result->status = true;
            } else {
                $this->result->error = 'Herhangi Bir Değişiklik Yapmadınız';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_gallery()
    {
        $post_data = new StdClass();
        $this->form_validation->set_rules('id', 'Id', 'required|trim|max_length[250]|xss_clean|numeric');
        $this->form_validation->set_rules('gallery_group', 'Grup Adı', 'required|trim|max_length[250]|xss_clean');
        
        if ($this->form_validation->run() != false) {
            $post_data->group = $this->input->post('gallery_group', true);
            $post_data->id = $this->input->post('id', true);
            $post_data->update_date = date('Y-m-d H:i:s');
            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if ($this->model->update_gallery($post_data)){
                $this->result->status = true;
            } else {
                $this->result->error = 'Herhangi Bir Değişiklik Yapmadınız';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }
    
    public function group_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = 'gallery_group';
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function gallery_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = 'gallery';
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_group()
    {
        $id = $this->input->post('id', true);
        $table_name = 'gallery_group';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_gallery()
    {
        $id = $this->input->post('id', true);
        $table_name = 'gallery';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function add_class()
    {
        $post_data = new StdClass();
        $ticket_data = new StdClass();

        $this->form_validation->set_rules('class_name', 'Sınıf Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Sınıf Açıklaması', 'required|trim');
        $this->form_validation->set_rules('teacher_name', 'Öğretmen Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('lesson_hours', 'Ders Saatleri', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('number_students', 'Öğrenci Sayısı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('age_range', 'Yaş Aralığı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('price', 'Eğitim Ücreti', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('color', 'Renk', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('ticket', 'Etiket', 'xss_clean|trim');


        if ($this->form_validation->run() != false) {
            $post_data->name = $this->input->post('class_name', true);
            $post_data->slug = url_seo($post_data->name);
            $post_data->text = $this->input->post('description', false);
            $post_data->teacher = $this->input->post('teacher_name', true);
            $post_data->lesson_hours = $this->input->post('lesson_hours', true);
            $post_data->student = $this->input->post('number_students', true);
            $post_data->age_range = $this->input->post('age_range', true);
            $post_data->price = $this->input->post('price', true);
            $post_data->color = $this->input->post('color', true);
            $ticket = $this->input->post('ticket', true);
            $post_data->add_date = date('Y-m-d H:i:s');

            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
                if($insert_id = $this->model->add_class($post_data)) {
                    if (!empty($ticket)) {
                        $tickets = explode(',', $ticket);

                        foreach ($tickets as $key => $value) {
                            $ticket_data->class_id = $insert_id;
                            $ticket_data->ticket_name = trim($value);
                            $ticket_data->slug = url_seo($value);
                            $this->model->add_ticket($ticket_data);
                        }
                    }
                    $this->result->status = true;
                }
            } else {
                $this->result->error = 'Lütfen Bir Resim Ekleyiniz';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }


    public function class_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = 'class';
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_class()
    {
        $id = $this->input->post('id', true);
        $table_name = 'class';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function update_class()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'Id', 'required|trim|numeric|xss_clean');
        $this->form_validation->set_rules('class_name', 'Sınıf Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Sınıf Açıklaması', 'required|trim');
        $this->form_validation->set_rules('teacher_name', 'Öğretmen Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('lesson_hours', 'Ders Saati', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('number_students', 'Öğrenci Sayısı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('age_range', 'Yaş Aralığı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('price', 'Eğitim Ücreti', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('color', 'Renk', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->name = $this->input->post('class_name', true);
            $post_data->text = $this->input->post('description', false);
            $post_data->teacher = $this->input->post('teacher_name', true);
            $post_data->lesson_hours = $this->input->post('lesson_hours', true);
            $post_data->student = $this->input->post('number_students', true);
            $post_data->age_range = $this->input->post('age_range', true);
            $post_data->price = $this->input->post('price', true);
            $post_data->color = $this->input->post('color', true);
            $post_data->slug = url_seo($post_data->name);
            $post_data->update_date = date('Y-m-d H:i:s');

            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path  = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if ($this->model->update_class($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = 'Lütfen Tekrar Deneyiniz';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }


    public function add_list_ticket()
    {
        $post_data = new StdClass();
        $ticket_data = new StdClass();

        $this->form_validation->set_rules('id', 'Id', 'required|numeric|xss_clean|trim');
        $this->form_validation->set_rules('ticket', 'Etiket', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $ticket = $this->input->post('ticket', true);
            $tickets = explode(',', $ticket);

            foreach ($tickets as $key => $value) {
                $ticket_data->class_id = $post_data->id;
                $ticket_data->ticket_name = trim($value);
                $ticket_data->slug = url_seo($value);
                $this->model->add_ticket($ticket_data);
            }
            $this->result->status = true;
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_list_ticket()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'Id', 'required|trim|numeric|xss_clean');
        $this->form_validation->set_rules('ticket', 'Etiket', 'required|trim|max_length[250]|xss_clean');

        if($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->ticket_name = $this->input->post('ticket', true);
            $post_data->slug = url_seo($post_data->ticket_name);

            if ($this->model->update_ticket($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = 'Lütfen Tekrar Deneyiniz';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }


    public function delete_ticket()
    {
        $id = $this->input->post('id', true);
        $table_name = 'class_ticket';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function add_event()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('event_name', 'Etkinlik Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Açıklama', 'required|trim');
        $this->form_validation->set_rules('color', 'Renk', 'required|trim|max_length[250]|xss_clean');

        if($this->form_validation->run() != false) {
            $post_data->event_name = $this->input->post('event_name', true);
            $post_data->description = $this->input->post('description', false);
            $post_data->color = $this->input->post('color', true);
            $post_data->add_date = date('Y-m-d H:i:s');
            $post_data->slug = url_seo($post_data->event_name);

            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');

                if($this->model->add_event($post_data)) {
                    $this->result->status = true;
                } else {
                    $this->result->error = 'Lütfen Tekrar Deneyiniz';
                }
            } else {
                $this->result->error = 'Lütfen Bir Resim Ekleyiniz';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_event()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'Id', 'required|trim|numeric|xss_clean');
        $this->form_validation->set_rules('event_name', 'Etkinlik Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Açıklama', 'required|trim');
        $this->form_validation->set_rules('color', 'Renk', 'required|trim|max_length[250]|xss_clean');

        if($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->event_name = $this->input->post('event_name', true);
            $post_data->description = $this->input->post('description', false);
            $post_data->color = $this->input->post('color', true);
            $post_data->add_date = date('Y-m-d H:i:s');
            $post_data->slug = url_seo($post_data->event_name);
            
            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if ($this->model->update_event($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = 'Herhangi Bir Değişiklik Yapmadınız';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function event_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = "event";
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_event()
    {
        $id = $this->input->post('id', true);
        $table_name = 'event';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function update_contract()
    {
        $post_data = new StdClass();
        $this->form_validation->set_rules('text', 'Aydınlatma Metni', 'required|trim');
        
         if($this->form_validation->run() != false) {
            $post_data->text = $this->input->post('text', false);
            
            if ($this->model->update_contract($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = 'Herhangi Bir Değişiklik Yapmadınız';
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function add_teacher()
    {
        $post_data = new stdClass();

        $this->form_validation->set_rules('name_surname', 'Ad Soyad', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('professional', 'Alan', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('text', 'Biyografi', 'required|trim');

        if($this->form_validation->run() != false) {
            $post_data->name = $this->input->post('name_surname', true);
            $post_data->profession = $this->input->post('professional', true);
            $post_data->text = $this->input->post('text', false);
            $post_data->add_date = date('Y-m-d H:i:s');
            $post_data->slug = url_seo($post_data->name);

            if($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');

                if($this->model->add_teacher($post_data)) {
                    $this->result->status = true;
                } else {
                    $this->result->error = "Lütfen Tekrar Deneyiniz";
                }
            } else {
                $this->result->error = "Lütfen Bir Resim Ekleyiniz";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }



    public function teacher_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = "teachers";
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_teacher()
    {
        $id = $this->input->post('id', true);
        $table_name = 'teachers';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }


public function update_teacher()
{
    $post_data = new StdClass();

    $this->form_validation->set_rules('id', 'Id', 'required|integer|xss_clean|min_length[1]');
    $this->form_validation->set_rules('name', 'Ad Soyad', 'required|trim|max_length[250]|xss_clean');
    $this->form_validation->set_rules('professional', 'Uzmanlık Alanı', 'required|trim|max_length[250]|xss_clean');
    $this->form_validation->set_rules('text', 'Biyografi', 'required|trim');

    if($this->form_validation->run() != false) {
        $post_data->id = $this->input->post('id', true);
        $post_data->name = $this->input->post('name', true);
        $post_data->profession = $this->input->post('professional', true);
        $post_data->text = $this->input->post('text', false);
        $post_data->update_date = date('Y-m-d H:i:s');
        $post_data->slug = url_seo($post_data->name);

        if($this->session->userdata('images')) {
            $post_data->image_path = $this->session->userdata('images');
            $post_data->image_path = $post_data->image_path[0];
            $this->session->unset_userdata('images');
        }

        if($this->model->update_teacher($post_data)) {
            $this->result->status = true;
        } else {
            $this->result->error = "Lütfen Tekrar Deneyiniz";
        }
    } else {
        $this->result->error = validation_errors();
    }
    $this->response();
}


}   