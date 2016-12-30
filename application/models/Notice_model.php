<?php
/**
 * Created by PhpStorm.
 * User: Joryun
 * Date: 2016/12/24
 * Time: 1:24
 *
 * Description：公告类
 */

class Notice_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function insert_notice(){
        $data = array(
            'nid' => 4,
            'ntitle' => "CI connext db title test",
            'ncontent' => "CI connect db content test"
        );
        $this->db->insert('notice', $data);
    }




}