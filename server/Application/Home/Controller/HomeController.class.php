<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller 
{
    public function index()
	{
        $this->display();
		
		$a = C('TMPL_PARSE_STRING');
		print_r("__PUBLIC__");
    }
}