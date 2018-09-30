<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
require('vendor/autoload.php');
$new = new IndexOne();
print_r($new->index('国庆七天乐')) ;
class IndexOne{

	public function index($string){
         $Pingyin = new \Overtrue\Pinyin\Pinyin();
		 $abbr = $Pingyin->convert($string);
		 $abbr = implode(' ', $abbr);
		 //$abbr = strtoupper($abbr);
		 //print_r($abbr);die;
		 return $string.'拼音是:'.$abbr;    
	}
}


?>