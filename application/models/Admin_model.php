<?php
/**
 * Created by PhpStorm.
 * User: Joryun
 * Date: 2016/12/24
 * Time: 1:24
 */

class Admin_model extends CI_Model{

    public $aid;
    public $aname;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param mixed $aid
     */
    public function setAid($aid)
    {
        $this->aid = $aid;
    }

    /**
     * @return mixed
     */
    public function getAname()
    {
        return $this->aname;
    }

    /**
     * @param mixed $aname
     */
    public function setAname($aname)
    {
        $this->aname = $aname;
    }



}