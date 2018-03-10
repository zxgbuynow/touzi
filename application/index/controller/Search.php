<?php


namespace app\index\controller;

use \think\Request;
use \think\Db;
/**
 * 前台首页控制器
 * @package app\index\controller
 */
class Search extends Home
{
    public function index()
    {

        

        return $this->fetch(); // 渲染模板
    }
}
