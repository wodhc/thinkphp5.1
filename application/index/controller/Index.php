<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Blog;

class Index extends Controller
{

    public function index()
    {
        $blog = new Blog();
        halt($blog->get_list());
        $this->assign('name', 'thinkphp');
        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
