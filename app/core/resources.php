<?php

class Resources extends App{

	private static $current_uri;
	private static $page_names;
	private static $title;
	private static $meta;
	private static $css;
	private static $js;

	private static $css_dir = '../public/assets/css';
	private static $js_dir 	= '../public/assets/js';
	private static $counter	= 3;

	public function page_title(){
		self::$current_uri	=	'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

		self::$page_names 	=	[
									'',
									'contact',
									'design',
									'floorplan',
									'gallery',
									'home',
									'location',
									'projectteam'
								];

		for($loop = 0; $loop < count(self::$page_names); $loop++)
		{
			if(stripos(self::$current_uri, self::$page_names[$loop]))
			{
		    	self::$title = 	self::$page_names[$loop];

			}
		}

		echo 'WEBSITE | '.(self::$title == '' ? 'Home' : ucfirst(self::$title));
	}

	public function page_meta(){

		switch (self::$title) {
			case 'contact':
					echo'
						<meta name="description" content="Enquiries">
						<meta name="keywords" content="Enquiries">
					';
				break;
			case 'design':
					echo'
						<meta name="description" content="Design">
						<meta name="keywords" content="Design">
					';
				break;
			case 'floorplan':
					echo'
						<meta name="description" content="Floorplan">
						<meta name="keywords" content="Floorplan">
					';
				break;
			case 'gallery':
					echo'
						<meta name="description" content="Gallery">
						<meta name="keywords" content="Gallery">
					';
				break;
			case 'home':
					echo'
						<meta name="description" content="Home">
						<meta name="keywords" content="Home">
					';
				break;
			case 'location':
					echo'
						<meta name="description" content="Location">
						<meta name="keywords" content="Location">
					';
				break;
			case 'projectteam':
					echo'
						<meta name="description" content="Home">
						<meta name="keywords" content="Location">
					';
				break;
			default:
					echo'
						<meta name="description" content="Home">
						<meta name="keywords" content="Home">
					';
				break;
		}

	}

	public function page_css(){

		/*$get_url = $_GET['url'];

		if(isset($get_url)){

			 $trimed_url = explode('/',filter_var(rtrim($get_url, '/'), FILTER_SANITIZE_URL));
			 echo"<pre>";
			 print_r($trimed_url);
			 echo"</pre>";

			 if(isset($trimed_url[3])){
			 	$trimed_url[1] = '';
			 }

		}*/

		$css_files = array_diff(scandir(self::$css_dir), array('.', '..'));

		$count_css_files = count($css_files) +2;

		$css_counter = 2;

		while($css_counter < $count_css_files){
			echo"\n\t\t";
			echo'<link type="text/css" rel="stylesheet" href="public/assets/css/'.$css_files[$css_counter].'">'; 
			++ $css_counter;
		}

		$get_url = $_GET['url'];
	}

	public function page_js(){
		
		$js_files = array_diff(scandir(self::$js_dir), array('.', '..'));

		$count_js_files = count($js_files) +2;

		$js_counter = 2;

		while($js_counter < $count_js_files){
				echo"\n\t\t";
				echo'<link type="text/css" rel="stylesheet" href="public/assets/js/'.$js_files[$js_counter].'">'; 
				++ $js_counter;
		}
	}


}