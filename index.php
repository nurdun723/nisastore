<?php

//指定绑定的模块
define("BIND_MODULE","Home");
//指定应用程序的目录
define("APP_PATH","application/");
//开启调试功能
define("APP_DEBUG",true);
//引入css，image，js文件
define("__ROOT__","http://www.nisastore.com/");
define("STYLE_URL",__ROOT__."public/css/");
define("IMAGE_URL",__ROOT__."public/images/");
include_once "library/ThinkPHP/ThinkPHP.php";
