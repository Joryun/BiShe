<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Joryun
 * Date: 2016/12/25
 * Time: 13:04
 */

class GDindex extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url_helper');
        $this->load->library('session');    //加载session类
    }

    //定位到学生登录页面
    public function studentLogin(){
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;

        $this->load->view('student/index',$data);

//        $this->load->view('student/dashboard');
    }

    //定位到教师登录页面
    public function teacherLogin(){
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;

        $this->load->view('teacher/TeacherIndex',$data);

//        $this->load->view('student/dashboard');
    }

    //判断账户是否存在，存在即登录
    public function dealLogin(){

        $id = $this->input->post('id');
        $password = $this->input->post('password');
//        echo 'ID:'.$id.' '.'Password:'.$password;

        $base_url = $this->config->item('base_url');

        $data['base_url'] = $base_url;  //传base_url
        $data['snum'] = $id;    //传snum

//        echo $data['snum'];

        /*//查询所有公告
        $query = $this->db->query('select * from notice ORDER BY ndate DESC ');
        $data['notice'] = $query->result();*/


        $hasStudent_query = $this->db->query("select * from student WHERE snum = $id AND spassword = $password");
//        $query = $this->db->query($sql, array($id, $password));

        if($hasStudent_query->result_array()){

            //将用户登录的信息存至session
            $user_info = array(
                'num' => $id,
                'password' => $password
            );
            $this->session->set_userdata($user_info);

            $this->load->view('student/notice', $data);
//            $this->load->view('student/tables', $data);
        }else{
            echo '账户不存在';
        }

    }

    public function dealTeacherLogin(){

        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url

        $id = $this->input->post('id');
        $password = $this->input->post('password');

        $data['tnum'] = $id;    //传tnum


        $hasTeacher_query = $this->db->query("select * from teacher WHERE tnum = $id AND tpassword = $password");

        if($hasTeacher_query->result_array()){

            //将用户登录的信息存至session
            $user_info = array(
                'num' => $id,
                'password' => $password
            );

            /*session_start();
            $_SESSION["num"] = $id;
            $_SESSION["password"] = $password;*/

            $this->session->set_userdata($user_info);

            $this->load->view('teacher/TeacherNotice', $data);
        }else{
            echo '账户不存在';
        }

    }

    //查询公告
    public function queryNotice(){

        //查询所有公告
        $query = $this->db->query('select * from notice ORDER BY ndate DESC ');
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url
        $data['notice'] = $query->result();
        $this->load->view('student/NoticeContent', $data);
    }

    //刷新notice页面
    public function refreshNotice(){
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url
        $this->load->view('student/notice', $data);
    }

    //编辑个人信息
    public function editProfile(){
        $base_url = $this->config->item('base_url');
        $data['base_url'] = $base_url;  //传base_url

        //获取session数据
        $num = $_SESSION['num'];

        $query = $this->db->query('select * from student where snum = '.$num);
        $data['studentInfo'] = $query->result();

        $this->load->view('student/ProfileContent', $data);
        // $this->load->view('student/NoticeContent', $data);


    }


}