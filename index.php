<?php

/**看
 * 
 */
$wechatObj = new Index();
$wechatObj->index();
class Index
{
	
	public function index(){
		header("Location: shijian.html");
	}
}