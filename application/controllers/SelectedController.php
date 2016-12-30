<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Joryun
 * Date: 2016/12/25
 * Time: 22:16
 */

class SelectedController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->library('session');    //加载session类
    }

    public function querySelected(){

        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url

        //获取session值
        $num = $_SESSION['num'];
        $query = $this->db->query("select topid from student where snum = ".$num);
        $row = $query->row();
        $topid = $row->topid;  //获取学生选题编号

        $topicQuery = $this->db->query("select * from topic where topid = ".$topid);
        $data['topicInfo'] = $topicQuery->result();


        $this->load->view('student/SelectedContent', $data);
    }


    public function queryStudentSelected(){

        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url

        //查询选择该老师的学生
//        $query = $this->db->query('select m.topid,m.ttitle,m.tcontent,n.tname from topic m,teacher n where m.tid = n.tid');
//        $sql = select m.topid,m.ttitle,m.tcontent,n.tname from topic m,teacher n where m.tid = n.tid;

        $query = $this->db->query('select m.topid,m.ttitle,m.tcontent,n.sid,n.sname from topic m,student n where m.topid = n.topid and m.topid = 1');
        $data['studentList'] = $query->result();

        $this->load->view('teacher/SelectedContent', $data);
    }



}