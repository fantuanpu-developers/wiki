<?php
namespace App\Controller\User;

use App\Base;
use App\Model\ModelClass;

class IndexController extends Base {
    public $model;
    public $upload;
    public $redis;
    public $queue;
    public function __construct
    (ModelClass $modelClass)//App\Model\ModelClass $modelClass
    {
        $this->model = $modelClass;
    }
    public function tester()
    {
//        $res = $this->model->table('user')->select("*")->where(['id'=>'1'])->getAll();
    }
    public function index(){
        return self::view('test');
    }
}
