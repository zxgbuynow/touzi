<?php

namespace app\index\controller;
use \think\Request;

/**
 * 会员控制器
 * @package app\index\controller
 */
class Member extends Home
{
    /*
    *登录
    */
    public function login()
    {
      $request = Request::instance();
      if ($request->method()=='POST') {
        // print_r($request->param());exit;
        // 登录
        $data = $this->request->post();
        $member = $this->__login($data['phone'], $data['password']);
        if ($member) {
          session('_MEMBER',$member);
          $this->success('登录成功', url('/'));
        } else {
          // print_r($this->errorMsg);exit;
          $this->error($this->errorMsg);
        }
      }
      //底部文字广告
      $advlist = db('cms_advert')->where('typeid',2)->limit(4)->select();
      $this->assign('advlist', $advlist);
      return $this->fetch(); // 渲染模板
    }

    /*
    *注册
    */
   public function register()
   {
      $request = Request::instance();
      if ($request->method()=='POST') {
        // print_r($request->param());exit;
        // 注册
        $data = $this->request->post();
        $member = $this->__register($data['phone'], $data['password'] ,$data['repassword']);
        if ($member) {
          session('_MEMBER',$member);
          $this->success('注册成功', url('/'));
        } else {
          // print_r($this->errorMsg);exit;
          $this->error($this->errorMsg);
        }
      }

      //协议
      $protocol = db('cms_page')->where('type',3)->find();
      $this->assign('protocol', $protocol);

      //底部文字广告
      $advlist = db('cms_advert')->where('typeid',3)->limit(4)->select();
      $this->assign('advlist', $advlist);
      return $this->fetch(); // 渲染模板
   }
   /*
    *忘记密码
    */
   public function modifyPwdFirst()
   {
        return $this->fetch(); // 渲染模板
   }

   private function __login($username, $password)
   {
      $username = trim($username);
      $password = trim($password);

      if (!preg_match("/^1\d{10}$/", $username)) {
          $this->errorMsg = '手机号格式不正确';return false;
      } 

      $map['mobile'] = $username;
      // 查找用户
      $user = db('member')->where($map)->find();
      if (!$user) {
          $this->errorMsg = '用户不存在或被禁用！';return false;
      } else {
          
          if (!$this->__checkpw((string)$password, $user['password'])) {
              $this->errorMsg = '密码错误！';return false;
          } else {
              return $user;
          }
      }
      return false;
   }

   private function __register($username, $password ,$repassword)
   {
      $username = trim($username);
      $password = trim($password);
      $repassword = trim($repassword);

      if ($repassword!=$password) {
          $this->errorMsg = '2次输入密码不一致，请重新输入！';return false;
      } 

      if (!preg_match("/^1\d{10}$/", $username)) {
          $this->errorMsg = '手机号格式不正确';return false;
      } 

      $map['mobile'] = $username;
      // 查找用户
      $user = db('member')->where($map)->find();
      if ($user) {
          $this->errorMsg = '用户已存在，请换个手机号！';return false;
      } else {
          $data['password'] = $this->__hashpw($password);
          $data['username'] = $username;
          $data['nickname'] = $username;
          $data['mobile'] = $username;
          $data['create_time'] = time();
          $me = db('member')->insert($data);
          if (!$me) {
              $this->errorMsg = '服务器忙！';return false;
          } else {
              return db('member')->where($map)->find();;
          }
      }
      return false;
   }

   private function __checkpw($npw,$pw)
   {
      if ($this->__hashpw($npw)==$pw) {
        return true;
      }
      return false;
   }

    private function __hashpw($pw, $alt='puding')
    {
      return md5($alt.md5($pw));
    }
}
