<?php
namespace App;

use duncan3dc\Laravel\BladeInstance;

class Base {

    protected $container;
    public $config;
    public $blade;
    public function __construct()
    {
        error_reporting(E_ERROR);

    }
    public function view($view='',$data = '')
    {
        var_dump(dirname(__DIR__));
        $blade = new BladeInstance(dirname(__DIR__).'/views',PATH.'/cache/views');
        echo $blade->make($view,$data)->render();
    }
}
