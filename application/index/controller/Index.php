<?php


namespace app\index\controller;

use \think\Request;
use \think\Db;
/**
 * 前台首页控制器
 * @package app\index\controller
 */
class Index extends Home
{
    public function index()
    {

        //lunbo
        $lunbo = db('cms_advert')->where('tagname','home')->select();
        //category
        $category = db('cms_category')->where('pid',0)->select();
        // subcategory product
        foreach ($category as $key => $value) {
            $subcategory = db('cms_category')->where('pid',0)->limit(5)->order('sort desc')->select();
            $category[$key]['sub'] = $subcategory;
            $sub = array_column($subcategory, 'id');
            $where['is_recommon'] = 1;
            $where['cate_id'] = array('in',$sub);
            $category[$key]['pd'] = db('cms_item')->where($where)->find();
        }
        //video
        $video = db('cms_video')->where(1)->order('id DESC')->limit(4)->select();
        //hot product
        $hotItem = db('cms_item')->where('is_hot',1)->select();
        

        $this->assign('lunbo', $lunbo);
        $this->assign('category', $category);
        $this->assign('video', $video);
        $this->assign('hotItem', $hotItem);

        return $this->fetch(); // 渲染模板
    }
}
