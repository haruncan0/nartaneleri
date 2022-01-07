<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function login($post_data)
	{
		$this->db->from('admin');
		$this->db->where(['name' => $post_data->username]);
		$return_query = $this->db->get();
		if ($return_query->num_rows() > 0) {

			$admininfo = $return_query->row();
			if (password_verify($post_data->password, $admininfo->password)) {
				$this->session->set_userdata('admin_info', $admininfo);
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function admin_info($id)
	{
	    $this->db->from('admin');
		$this->db->where(['id' => $id]);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0){
		    return $return_query->row();
        } else {
		    return false;
        }
	}

    public function get_contract()
    {
        $this->db->from('contract');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_homepage_about()
    {
        $this->db->from('homepage');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_slider()
    {
        $this->db->from('slider');
        $this->db->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_slider($id)
    {
        $this->db->from('slider');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_contact()
    {
        $this->db->from('contact');
        $this->db->where(['id' => 1]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_messages()
    {
        $this->db->from('messages');
        $this->db->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_site_settings()
    {
        $this->db->from('site_settings');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_facility()
    {
        $this->db->from('facility');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_about()
    {
        $this->db->from('about');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_preference()
    {
        $this->db->from('preference');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_preference($id)
    {
        $this->db->from('preference');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_banner()
    {
        $this->db->from('banner');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_gallery()
    {
        $this->db->select('g.id as g_id, g.image_path, g.group, g.add_date, g.update_date, g.status, g.deleted, gg.id as gg_id, gg.deleted');
        $this->db->from('gallery g');
        $this->db->join('gallery_group gg',' g.group = gg.id');
        $this->db->where(['g.deleted' => 0]);
        $this->db->where(['gg.deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_gallery($id)
    {
        $this->db->from('gallery');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_gallery_group()
    {
        $this->db->from('gallery_group');
        $this->db->where([ 'deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_gallery_group($id)
    {
        $this->db->from('gallery_group');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_group()
    {
        $this->db->from('gallery_group');
        $this->db->where(['status' => 1, 'deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_class()
    {
        $this->db->from('class');
        $this->db->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_class($id)
    {
        $this->db->from('class');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return [];
        }
    }

    public function get_ticket($id)
    {
        $this->db->select('ct.id as ct_id, t.id as t_id, t.ticket_name, t.slug');
        $this->db->from('class_ticket ct');
        $this->db->where(['ct.class_id' => $id, 'ct.deleted' => 0]);
        $this->db->join('ticket t', 'ct.ticket_id = t.id');
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return $return_query->result();
        } else {
            return [];
        }
    }

    public function class_control($id)
    {   
        $this->db->from('class');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_selected_ticket($id)
    {
        $this->db->from('ticket');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return [];
        }
    }

    public function ticket_control($id)
    {
        $this->db->from('ticket');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_event()
    {
        $this->db->from('event');
        $this->db->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function event_control($id)
    {
        $this->db->from('event');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_selected_event($id)
    {
        $this->db->from('event');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return [];
        }
    }

    public function get_teacher()
    {
        $this->db->select('id, name, profession, status');
        $this->db->from('teachers');
        $this->db->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->result();
        } else {
            return [];
        }
    }

    public function teacher_control($id)
    {
        $this->db->from('teachers');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function get_selected_teacher($id)
    {
        $this->db->from('teachers');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return [];
        }
    }

}