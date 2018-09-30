<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
require('vendor/autoload.php');
  $pinyin = new GetPinyin();
  print_r($pinyin->index($_POST['content']));
  class GetPinyin{

  	public function index(){
      //echo $_POST;die;
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