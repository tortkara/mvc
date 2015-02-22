<?php

class Router {


private static $url;
private static $view;
private static $model;
private static $initialized = false;

private function __construct(){}

private function __clone(){}

private function __wakeup(){}


private static function initialize() {
	if(self::$initialized){
		return;
	}
	self::$url = self::explodeURI($_GET["url"]);
	self::$initialized = true;
}


static function getURL() {
	self::initialize();
	//echo "router";
	return self::$url;
}

static function explodeURI($uri) {
	$uri=trim($uri, '/');
	return explode('/', $uri);
}


static function getModel()	{

	return self::$model;
}

static function getView()	{

	return self::$view;	
}


}

?>