<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_model extends CI_Model {

	public function get_slider()
	{
		$this->db->select('text1, text2, text3, image_path');
		$this->db->from('slider');
		$this->db->where(['status' => 1, 'deleted' => 0]);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_facility()
	{
		$this->db->select('title1, text1, title2, text2, title3, text3, title4, text4, image_path1, image_path2, image_path3, image_path4');
		$this->db->from('facility');
		$return_query  =$this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_banner()
	{
		$this->db->from('banner');
		$return_query = $this->db->get();
		if ($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_homepage()
	{
		$this->db->select('about_title as a_title, about_text as a_text, about_button as a_button, about_image as a_image, gallery_title as g_title, gallery_text as g_text, gallery_button as g_button, class_title as c_title, class_text as c_text, class_button as c_button, teacher_title as t_title, teacher_text as t_text, teacher_button as t_button, why_title as w_title, why_text as w_text, event_title as e_title, event_text as e_text, event_button as e_button');
		$this->db->from('homepage');
		$return_query = $this->db->get();
		if ($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_about()
	{
		$this->db->select('about_title, about_text, why_title, why_text, comment_title, comment_text');
		$this->db->from('about');
		$return_query = $this->db->get();
		if ($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_preference()
	{
		$this->db->from('preference');
		$return_query = $this->db->get();
		if ($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_gallery_group()
	{
		$this->db->from('gallery_group');
		$this->db->where(['status' => 1, 'deleted' => 0]);
		$return_query = $this->db->get();
		if ($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_gallery()
	{
		$this->db->select('g.id as g_id, g.group, g.image_path, g.status, g.deleted, gg.id as gg_id');
		$this->db->from('gallery g');
		$this->db->join('gallery_group gg', 'g.group = gg.id');
		$this->db->where(['g.status' => 1, 'g.deleted' => 0]);
		$this->db->where(['gg.status' => 1, 'gg.deleted' =>0]);
		$this->db->order_by('g.id', 'DESC');
		$return_query = $this->db->get();
		if ($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_homepage_gallery()
	{
		$this->db->select('g.id as g_id, g.image_path, g.group, g.status, g.deleted, gg.id as gg_id');
		$this->db->from('gallery g');
		$this->db->join('gallery_group gg', 'g.group = gg.id');
		$this->db->where(['g.status' => 1, 'g.deleted' => 0]);
		$this->db->where(['gg.status' => 1, 'gg.deleted' => 0]);
		$this->db->order_by('g.id', 'DESC')->limit(10);
		$return_query = $this->db->get();
		if ($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_class()
	{
		$this->db->from('class');
		$this->db->where(['status' => 1, 'deleted' => 0]);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return false;
		}
	}

	public function get_selected_class($slug)
	{
		$this->db->where(['status' => 1, 'deleted' => 0, 'slug' => $slug])->from('class');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_homepage_class()
	{
		$this->db->from('class');
		$this->db->where(['status' => 1, 'deleted' => 0]);
		$this->db->limit(3);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_selected_ticket($id)
	{
		$this->db->select('ct.ticket_id, t.ticket_name, t.slug');
		$this->db->from('class_ticket ct');
		$this->db->join('ticket t', 't.id = ct.ticket_id');
		$this->db->where(['class_id' => $id, 'deleted' => 0]);
		$return_query = $this->db->get();	
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}


    public function slug_control($slug)
    {
        $this->db->from('ticket');
        $this->db->where(['slug' => $slug]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
        	return $return_query->row();
        } else {
        	return false;
        }
    }

    public function get_ticket_class($slug)
    {
        $this->db->select('t.id, t.slug, ct.class_id, c.*');
        $this->db->from('ticket t');
        $this->db->where(['t.slug' => $slug]);
        $this->db->join('class_ticket ct', 'ct.ticket_id = t.id');
        $this->db->join('class c', 'c.id = ct.class_id');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
        	return $return_query->result();
        } else {
            return [];
        }
    }

    public function get_event()
    {
    	$this->db->from('event');
    	$this->db->where(['status' => 1, 'deleted' => 0]);
    	$return_query = $this->db->get();
    	if($return_query->num_rows() > 0) {
    		return $return_query->result();
    	} else {
    		return [];
    	}
    }

    public function get_homepage_event()
    {
    	$this->db->from('event');
    	$this->db->where(['status' => 1, 'deleted' => 0]);
    	$this->db->limit(3);
    	$return_query = $this->db->get();
    	if($return_query->num_rows() > 0) {
    		return $return_query->result();
    	} else {
    		return [];
    	}
    }

    public function selected_event($slug)
    {
    	$this->db->from('event');
    	$this->db->where(['slug' => $slug, 'status' => 1, 'deleted' => 0]);
    	$return_query = $this->db->get();
    	if($return_query->num_rows() > 0) {
    		return $return_query->row();
    	} else {
    		return false;
    	}
    }

    public function get_contact()
    {
    	$this->db->from('contact');
    	$return_query = $this->db->get();
    	if($return_query->num_rows() > 0) {
    		return $return_query->row();
    	} else {
    		return [];
    	}
    }

    public function get_teacher()
    {
    	$this->db->from('teachers');
    	$return_query = $this->db->get();
    	if($return_query->num_rows() > 0) {
    		return $return_query->result();
    	} else {
    		return [];
    	}
    }

    public function get_selected_teacher($slug)
    {
    	$this->db->from('teachers');
    	$this->db->where(['slug' => $slug, 'status' => 1, 'deleted' => 0]);
    	$return_query = $this->db->get();
    	if($return_query->num_rows() > 0) {
    		return $return_query->row();
    	} else {
    		return [];
    	}
    }

    public function get_homepage_teacher()
    {
    	$this->db->select('id, name, slug, profession, image_path');
    	$this->db->from('teachers');
    	$this->db->where(['status' => 1, 'deleted' => 0]);
    	$this->db->limit(8);
    	$return_query = $this->db->get();
    	if($return_query->num_rows() > 0) {
    		return $return_query->result();
    	} else {
    		return [];
    	}
    }

    public function get_lighting()
    {
    	$this->db->select('text')->where(['id' => 1])->from('contract');
    	$return_query = $this->db->get();
    	if($return_query->num_rows() > 0) {
    		return $return_query->row();
    	} else {
    		return [];
    	}
    }

}