<?php

class App{

	private $controller = 'home';
	private $method 	= 'index';
	private $params 	= [];

	public function content(){
		$url = $this->parseUrl();


		if(!(isset($url[2]))){
			$url[2] = 'home';
		}

		if(file_exists('../app/controllers/'. $url[2] .'.php')){
			$this->controller = $url[2];
		}
		else{
			if($url[2] == 'public'){
				echo "asdsadasdasdasd";
			}
			include_once('../app/controllers/home.php');
			$this->controller = 'home';
		}
		
		
		include_once('../app/controllers/'. $this->controller.'.php');
		$this->controller = new $this->controller;


		if(!(isset($url[3]))){
			$url[3] = 'index';
		}
		if(method_exists($this->controller, $url[3])){
			$this->method = $url[3];

			$render = $url[2].'/'.$url[3];

			/* call and pass parameter to method view */
			$this->view($render);
		}
		else{
			if(!(method_exists($this->controller, $url[3]))){
				$url[3] = 'index';

				$this->method = $url[3];

				$render = $url[2].'/'.$url[3];

				/* call and pass parameter to method view */
				$this->view($render);
			}
		}
		

		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function view($view){
		include_once('../app/views/' . $view . '.php');
	}

	public function parseUrl(){
		$get_url = $_GET['url'];

		if(isset($get_url)){

			return $trimed_url = explode('/',filter_var(rtrim($get_url, '/'), FILTER_SANITIZE_URL));
		}
	}

}