<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Joryun
 * Date: 2016/12/25
 * Time: 16:00
 */

class ChoosableController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->library('session');    //加载session类
    }

    public function selectTopics(){

    }

    public function displayChoosable(){
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;

        $data['num'] = $this->session->userdata('num');

//        $queryTopics = $this->db->query("select * from topic");

        $this->load->view('student/choosable', $data);

    }

    public function queryChoosable(){
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url

        //查询所有课题
//        $query = $this->db->query('select * from topic');

        //根据外键联合两表查询
//        $query = $this->db->query('select m.topid,m.ttitle,m.tcontent,n.tname from topic m,teacher n where m.tid = n.tid');
        $query = $this->db->query('select m.topid,m.ttitle,m.tcontent,n.tname from topic m,teacher n where m.tid = n.tid and m.tid = 1');
//        $sql = select m.topid,m.ttitle,m.tcontent,n.tname from topic m,teacher n where m.tid = n.tid;
        $data['topic'] = $query->result();

        $this->load->view('student/ChoosableContent', $data);
    }

    public function displayTopicInfo(){
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url


        $this->load->view('student/TopicContent', $data);
    }

}