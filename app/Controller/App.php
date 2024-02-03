<?php 
require_once __DIR__.'/../Config/main.php';
require_once __DIR__.'/../Config/fn.php';


class App 
{
	public function run()
	{
		$uri = explode('/',$_SERVER['REQUEST_URI']);

		$class  = !empty($uri[1]) ? $uri[1] : 'Home';
		$method = !empty($uri[2]) ? $uri[2] : 'index';
		$id     = !empty($uri[3]) ? $uri[3] : null;


		if (class_exists($class)) {
	    $app = new $class;
		    if (method_exists($app, $method)) {
			    $app->$method($id);
			} else {
			    // Provera Metode
			    view('errors/_404',[
			    	'msg' => 'Method [ '.$method.' ] does not exists in class -'.$class
			    ]);
			     
			}
		} else {
		    // Provera klase
		    view('errors/_404',[
			    	'msg' => 'Class [ '.$class.' ] does not exists'
			    ]);
		     
		}

	}
}