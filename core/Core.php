<?php
/**
Mecanismo que da ponto de partida no mvc
 * 
 */
class Core
{
	// dentro do run vamos verificar qual o controller e qual a action
	public function run (){

		$url = '/';
		if (isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		$parametros = array();

		if (isset($_GET['url']) && $_GET['url'] != '/') {

				$url = explode('/', $url);
				array_shift($url);

				$controller = $url[0].'Controller';
				array_shift($url);

			if (isset($url[0]) && !empty($url[0])) {

				$action = $url[0];
				array_shift($url);

			}else{
				$action = 'index';

			}

			if (count($url) > 0) {
				$parametros = $url;
			}

		}else{
			$controller = 'homeController';
			$action		= 'index';
		}

		if (!file_exists('controllers/'.$controller.'.php') || !method_exists($controller, $action)) {
			$controller = 'notfoundController';
			$action		= 'index';
		}


		$c = new $controller;

		//call_user_func_array(function, param_arr) -> serve para mandar o controller, action e parametros;
		call_user_func_array(array($c, $action), $parametros);
	}
}