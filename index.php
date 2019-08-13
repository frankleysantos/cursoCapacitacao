<?php
ob_start();
session_start();
require "config.php";

/*autoload - Automatiza o carregamento das classes
  Verifica em qual pasta esta a classe com o spl_autoload();
*/

spl_autoload_register(function($class){

	if (file_exists('controllers/'.$class.'.php')) { //verifica se o arquivo existe
		require 'controllers/'.$class.'.php';
	}
	else if (file_exists('models/'.$class.'.php')) { //verifica se o arquivo existe
		require 'models/'.$class.'.php';
	}
	else if (file_exists('core/'.$class.'.php')) { //verifica se o arquivo existe
		require 'core/'.$class.'.php';
	}

});

$core = new Core();
$core->run();
ob_end_flush();