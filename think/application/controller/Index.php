<?php
namespace app\controller;

use think\Controller;
header("Access-Control-Allow-Origin: *");
class Index extends Controller
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        header("Access-Control-Allow-Origin: *");
    }
	public function index(){
		return abort(403, '禁止非法访问，请终止操作，我们将记录您的访问记录！');
	}
}