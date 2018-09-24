<?php

class Posts_model extends CI_Model {

    public function get_posts($fields='',$limit=10,$cond=''){
        $data = $this->db->select('wp_posts.ID,post_author,post_title,post_date,post_status,display_name')
                        ->from('wp_posts')
                        ->join('wp_users','wp_users.ID = wp_posts.post_author','left')
                        ->order_by('wp_posts.ID','DESC')
                        ->limit(10)
                        ->get();
        $data = $data->result_array();

        return $data;
    }

    public function get_taxonomy($taxonomy='',$object_id=0){
        $data = $this->db->select('wp_term_taxonomy.term_id,wp_terms.name,wp_terms.slug')
                        ->from('wp_term_relationships')
                        ->join('wp_term_taxonomy','wp_term_taxonomy.term_taxonomy_id = wp_term_relationships.term_taxonomy_id','left')
                        ->join('wp_terms','wp_terms.term_id = wp_term_taxonomy.term_id','left')
                        ->where('wp_term_relationships.object_id',$object_id)
                        ->where('wp_term_taxonomy.taxonomy',$taxonomy)
                        ->get();
        $data = $data->result_array();
        //foreach($arr_data as $k=>$v){
        //    $data_name =
        //}
        //echo "<pre>";
        //print_r($data);
      //  echo "<pre/>";
        return $data;
    }

}
