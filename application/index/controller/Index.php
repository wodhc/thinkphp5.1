<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Blog;

set_time_limit(0);

class Index extends Controller
{

    public function index()
    {
        $blog = new Blog();
        $list = $blog->get_list();
        $this->assign('list', $list);
        $this->assign('name', 'ThinkPHP');
        $this->assign('title', '架构师之路精选文章');
        return $this->fetch();
    }

    public function show($id) {
        $blog = new Blog();
        $info = $blog->where('id', $id)->find();
        return $this->display($info['content']);
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function pull(Blog $blog){
        $blog->spider();
    }

    public function pull_content(Blog $blog){
        $blog->get_content();
    }
}
