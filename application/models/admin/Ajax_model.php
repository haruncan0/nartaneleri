<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax_model extends CI_Model
{

    public function login($password, $username)
    {
        $this->db->from("admin");
        $this->db->where(['user_name' => $username]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {

            $admininfo = $return_query->row();
            if (password_verify($password, $admininfo->password)) {
                $this->session->set_userdata('admin_info', $admininfo);
                return true;
            } else {
                return false;
            }
        }
    }

    public function update_homepage($post_data)
    {
        $this->db->set($post_data)->update('homepage');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_account_genaral($post_data, $id)
    {
        $this->db->set($post_data)->where(['id' => $id])->update('admin');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_account_pass($post_data, $id)
    {
        $this->db->set($post_data)->where(['id' => $id])->update('admin');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Slider başlangıç______________________________________________________________________________
    public function add_slider($post_data)
    {
        $this->db->set($post_data)->insert('slider');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_slider($post_data)
    {
        $this->db->set($post_data)->where(['id' => $post_data->id])->update('slider');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    // Slider bitiş______________________________________________________________________________


    // İleitşim Bilgileri Başlangıç________________________________________________________________________________

    public function update_contact($post_data)
    {
        $this->db->set($post_data)->update('contact');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    // İletişim Bilgileri Bitiş____________________________________________________________________________________


    public function status_update($table_name,$id, $status)
    {
        $this->db->set(['status' => $status])->where(['id' => $id])->update($table_name);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id,$table_name)
    {
        $this->db->set(['deleted' => 1])->where(['id' => $id])->update($table_name);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function seen_message($id)
    {
        $this->db->set(['seen' => 1])->where(['id' => $id])->update('messages');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;

        }
    }

    public function site_settings($post_data)
    {
        $this->db->set($post_data)->update('site_settings');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_facility($post_data)
    {
        $this->db->set($post_data)->update('facility');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_about($post_data)
    {
        $this->db->set($post_data)->update('about');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_preference($post_data, $id)
    {
        $this->db->set($post_data)->where(['id' =>$id])->update('preference');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_banner($post_data)
    {
        $this->db->set($post_data)->update('banner');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function add_gallery($post_data)
    {
        $this->db->set($post_data)->insert('gallery');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function add_gallery_group($post_data)
    {
        $this->db->set($post_data)->insert('gallery_group');

        if ($this->db->affected_rows() > 0) {
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }else {
            return false;
        }
    }

    public function update_group($post_data)
    {
        $this->db->set($post_data)->where(['id' =>$post_data->id])->update('gallery_group');

        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_gallery($post_data)
    {
        $this->db->set($post_data)->where(['id' =>$post_data->id])->update('gallery');

        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function add_class($post_data)
    {
        $this->db->select('slug')->where(['slug' => $post_data->slug])->from('class');
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            $this->db->set($post_data)->insert('class');
            if ($this->db->affected_rows() > 0) {
                $insert_id = $this->db->insert_id();
                $this->db->set(['slug' => $post_data->slug.'-'.$insert_id])->where(['id' => $insert_id])->update('class');
                if ($this->db->affected_rows() > 0) {
                    return $insert_id;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            $this->db->set($post_data)->insert('class');
            if ($this->db->affected_rows() > 0) {
                    return $this->db->insert_id();
            } else {
                return false;
            }
        }
    }

    public function update_class($post_data)
    {
        $this->db->select('id, slug');
        $this->db->from('class');
        $this->db->where(['slug' => $post_data->slug]);
        $this->db->where(['id !=' => $post_data->id]);

        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            $this->db->set($post_data)->where(['id' => $post_data->id])->update('class');
            if ($this->db->affected_rows() > 0) {
                $this->db->set(['slug' => $post_data->slug .'-'. $post_data->id])->where(['id' => $post_data->id])->update('class');
                if ($this->db->affected_rows() > 0) {
                    return true;
                } else {
                    return false;
                }
            }else {
                return false;
            }
        } else {
            $this->db->set($post_data)->where(['id' => $post_data->id])->update('class');
            if ($this->db->affected_rows() > 0) {
                return true;
            }else {
                return false;
            }
        }
    }

    public function add_ticket($ticket_data)
    {
        $this->db->from('ticket');
        $this->db->where(['slug' => $ticket_data->slug]);
        $return_query = $this->db->get();

        if ($return_query->num_rows() <= 0) {
            $this->db->set(['ticket_name' => $ticket_data->ticket_name, 'slug' => $ticket_data->slug])->insert('ticket');
            if ($this->db->affected_rows() > 0) {
                $ticket_id = $this->db->insert_id();
                $this->db->from('class_ticket');
                $this->db->where(['ticket_id' => $ticket_id, 'deleted' => 0, 'class_id' => $ticket_data->class_id]);
                $return_query = $this->db->get();
                if($return_query->num_rows() <= 0) {
                    $this->db->set(['ticket_id' => $ticket_id, 'deleted' => 0, 'class_id' => $ticket_data->class_id])->insert('class_ticket');
                    if($this->db->affected_rows() > 0) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            $this->db->from('class_ticket');
            $this->db->where(['ticket_id' => $return_query->row()->id, 'deleted'=> 0, 'class_id' => $ticket_data->class_id]);
            $return_querye = $this->db->get();
            if ($return_querye->num_rows() <= 0) {
                $this->db->set(['ticket_id' => $return_query->row()->id, 'class_id' => $ticket_data->class_id])->insert('class_ticket');
                if ($this->db->affected_rows() > 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    public function update_ticket($post_data)
    {
        $this->db->select('id, slug');
        $this->db->from('ticket');
        $this->db->where(['id !=' => $post_data->id, 'slug' => $post_data->slug]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            $this->db->set(['slug' => $post_data->slug .'-'. $post_data->id, 'ticket_name' => $post_data->ticket_name])->where(['id' => $post_data->id])->update('ticket');
            if ($this->db->affected_rows() > 0) {
                    return true;
                } else {
                    return false;
                }
        } else {
            $this->db->set(['slug' => $post_data->slug, 'ticket_name' => $post_data->ticket_name])->where(['id' => $post_data->id])->update('ticket');
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function add_event($post_data)
    {
        $this->db->select('slug')->where(['slug' => $post_data->slug])->from('event');
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            $this->db->set($post_data)->insert('event');
            if ($this->db->affected_rows() > 0) {
                $insert_id = $this->db->insert_id();
                $this->db->set(['slug' => $post_data->slug.'-'.$insert_id])->where(['id' => $insert_id])->update('event');
                if ($this->db->affected_rows() > 0) {
                    return $insert_id;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            $this->db->set($post_data)->insert('event');
            if ($this->db->affected_rows() > 0) {
                    return $this->db->insert_id();
            } else {
                return false;
            }
        }
        
    }

    public function update_event($post_data)
    {
        $this->db->select('id, slug');
        $this->db->from('event');
        $this->db->where(['slug' => $post_data->slug]);
        $this->db->where(['id !=' => $post_data->id]);

        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            $this->db->set($post_data)->where(['id' => $post_data->id])->update('event');
            if ($this->db->affected_rows() > 0) {
                $this->db->set(['slug' => $post_data->slug .'-'. $post_data->id])->where(['id' => $post_data->id])->update('event');
                if ($this->db->affected_rows() > 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            $this->db->set($post_data)->where(['id' => $post_data->id])->update('event');
            if ($this->db->affected_rows() > 0) {
                return true;
            }else {
                return false;
            }
        }
    }

    public function update_contract($post_data)
    {
        $this->db->set($post_data)->update('contract');
        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function add_teacher($post_data)
    {
        $this->db->select('slug')->where(['slug' => $post_data->slug])->from('teachers');
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            $this->db->set($post_data)->insert('teachers');
            if ($this->db->affected_rows() > 0) {
                $insert_id = $this->db->insert_id();
                $this->db->set(['slug' => $post_data->slug.'-'.$insert_id])->where(['id' => $insert_id])->update('teachers');
                if($this->db->affected_rows() > 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            $this->db->set($post_data)->insert('teachers');
            if($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }

    }

    public function update_teacher($post_data)
    {
        $this->db->select('id, slug');
        $this->db->from('teachers');
        $this->db->where(['slug' => $post_data->slug]);
        $this->db->where(['id !=' => $post_data->id]);

        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            $this->db->set($post_data)->where(['id' => $post_data->id])->update('teachers');
            if ($this->db->affected_rows() > 0) {
                $this->db->set(['slug' => $post_data->slug .'-'. $post_data->id])->where(['id' => $post_data->id])->update('teachers');
                if ($this->db->affected_rows() > 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            $this->db->set($post_data)->where(['id' => $post_data->id])->update('teachers');
            if ($this->db->affected_rows() > 0) {
                return true;
            }else {
                return false;
            }
        }
    }

}