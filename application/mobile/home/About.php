<?php


namespace app\mobile\home;
use \think\Request;
/**
 * About控制器
 * @package app\index\controller
 */
class About extends Home
{
    public function index()
    {
       return $this->fetch(); // 渲染模板
       
    }
    public function detail()
    {
        $request = Request::instance();
        $params = $request->param();
        if (!$params['id']) {
            $this->error('参数错误！');return;
            return $this->fetch('common/error'); // 渲染模板
        }
        $des = db('cms_page')->where('id',$params['id'])->find();
        
        $this->assign('des', $des);
       return $this->fetch(); // 渲染模板
       
    }
}
