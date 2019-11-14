<?php


namespace app\user\controller;
use app\index\model\User as userModel;
use think\Collection;
use think\config\driver\Json;
use think\Controller;

class User extends Controller
{
    public function add()
    {

    }

    public function listUser()
    {
        $list = userModel::all()->toJson();
        $this->assign('list',$list);


        return $this->fetch('user/list');
    }

    public function getData()
    {
        $list = userModel::all()->toJson();

    }
}