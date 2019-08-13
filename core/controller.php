<?php
/**
Ajudador de todos os controllers
 * 
 */
class controller
{

	public function loadTemplate($viewName, $viewDados = array())
	{
		//extract transforma os indices do array em variaveis;
		extract($viewDados);
		//carrega a view;
		require 'views/template.php';
	}

	public function carregaViewInTemplate($viewName, $viewDados = array()){
		//extract transforma os indices do array em variaveis;
		extract($viewDados);
		//carrega a view;
		require 'views/'.$viewName.'.php';
	}
}