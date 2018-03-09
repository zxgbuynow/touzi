<?php


namespace app\index\controller;


use \think\Request;
use \think\Db;
/**
 * 产品控制器
 * @package app\index\controller
 */
class Product extends Home
{
    public function index()
    {

        $items = db('cms_item')->select();

        $this->assign('items', $items);
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
        //产品祥情
        $item = db('cms_item')->where('id',$params['id'])->find();
        $this->assign('item', $item);
        return $this->fetch(); // 渲染模板
       
    }

    public function ajax()
    {
        $request = Request::instance();
        $params = $request->param();

        //page limit 5 
        $size = 5;
        $start = intval($params['page'])+$size;
        $count = db('cms_item')->count();

        $res = db('cms_item')->limit($start,$size)->select();
        return json($res);
    }
}
