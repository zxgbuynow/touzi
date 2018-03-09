<?php


namespace app\index\controller;

use app\common\controller\Common;


use \think\Request;
use \think\Db;
/**
 * 前台公共控制器
 * @package app\index\controller
 */
class Home extends Common
{
    /**
     * 初始化方法
     * @author 蔡伟明 <314013107@qq.com>
     */
    protected function _initialize()
    {
        // 系统开关
        if (!config('web_site_status')) {
            $this->error('站点已经关闭，请稍后访问~');
        }
        //资源目录
        $base_file = $this->request->baseFile();
        $base_dir  = rtrim($base_file, 'index.php');
        $this->assign('static_dir', $base_dir. 'public/static/');

        //用户信息
        if ($this->is_login()) {
            $this->assign('_MEMBER', $this->is_login());
        }
        //最热产品
        $hotItem = db('cms_item')->where(1)->order('view DESC')->limit(2)->select();
        $this->assign('hotItem', $hotItem);
        //导航分类
        $nav = db('cms_menu')->where('pid',0)->limit(6)->select();
        $this->assign('nav', $nav);
        //友情链接
        $link = db('cms_link')->where('type',1)->limit(10)->select();
        $this->assign('link', $link);
        //配置信息
        $config = db('admin_config')->where(1)->select();
        foreach ($config as $key => $value) {
            $configarr[$value['name']] = $value;
        }
        $this->assign('config', $configarr);
        //关于我们
        $about = db('cms_page')->where('type',1)->limit(4)->select();
        $this->assign('about', $about);
        //产品服务
        $service =  db('cms_page')->where('type',2)->limit(4)->select();
        $this->assign('service', $service);
        //资讯
        $news =  db('cms_page')->where('type',3)->limit(4)->select();
        $this->assign('news', $news);

        
        // print_r($configarr);exit;

    }

    public function is_login()
    {
        if (session('_MEMBER')) {
            return session('_MEMBER');
        }
        return 0;
    }

}
