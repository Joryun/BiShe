<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Joryun
 * Date: 2016/12/24
 * Time: 15:38
 */

class NoticeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
//        $this->load->model("Notice_model");

    }

    /*public function index(){
        $this->load->view('welcome_message');
    }

    public function hello(){
        $this->load->view('hello');
    }*/

    public function test(){
        /*$query = $this->db->get('notice');

        $data['info'] = $query->row_array();
        $this->load->view('test', $data);*/

        $this->load->database();
        $query = $this->db->query('select ntitle,ncontent from notice limit 1');
        $row = $query->row();
        echo $row->ntitle;
        echo '<br/>';
        echo $row->ncontent;
//        $this->load->view('test', $row);
    }
}
