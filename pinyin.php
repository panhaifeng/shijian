<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
require('vendor/autoload.php');
if($_POST['content']){
}else{
	$new = new IndexOne();
    $new->index();
}

class IndexOne{

	public function index(){
        header("Location: Pinyin.html");
	}

	public function getPinyin(){
		 $string = $_POST['content'];
         $Pingyin = new \Overtrue\Pinyin\Pinyin();
		 $abbr = $Pingyin->convert($string);
		 $abbr = implode(' ', $abbr);
		 //$abbr = strtoupper($abbr);
		 //print_r($abbr);die;
		 echo $string.'拼音是:'.$abbr;    
	}
}


?>