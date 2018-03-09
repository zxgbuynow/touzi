<?php


namespace app\index\controller;

/**
 * 前台首页控制器
 * @package app\index\controller
 */
class Common extends Home
{
    public function header()
    {

        
        return $this->fetch(); // 渲染模板
    }

    public function footer()
    {

        
        return $this->fetch(); // 渲染模板
    }
    public function error()
    {

        
        return $this->fetch(); // 渲染模板
    }
}
