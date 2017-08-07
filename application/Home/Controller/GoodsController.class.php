<?php
namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller
{
    //商品列表页
     public function showlist(){
         $this->display();
     }

     //商品详细页
    public function detail(){
         $this->display();
    }
}