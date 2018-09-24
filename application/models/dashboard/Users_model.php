<?php

class Users_model extends CI_Model {

    public function get_users($user_id='',$limit=10,$cond=''){
        $data = $this->db->select('ID,user_login,user_nicename,display_name,user_status')
                        ->from('wp_users')
                        ->where('ID',$user_id)
                        ->get();
        $data = $data->result_array();

        return $data;
    }

}
