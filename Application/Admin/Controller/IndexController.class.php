<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->redirect('Admin/Login', array('cate_id' => 2), 5, '页面跳转中...');
        //$this->login();
        $this->display();
    }
    public function login(){
        $this->display();
    }
}