<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Joryun
 * Date: 2016/12/26
 * Time: 9:22
 */

class DataController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->library('session');    //加载session类
    }

    public function queryData(){
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url

        $this->load->view('student/DataContent', $data);
    }

    //教师上传文件
    public function uploadData(){
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url

        $this->load->view('teacher/DataContent', $data);
    }


}