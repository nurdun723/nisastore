<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/7
 * Time: 23:07
 */
//登录注册页
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{
     //用户登录
    public function login(){
        $this->display();
    }

    //用户注册
    public function register(){
        $this->display();
    }
}