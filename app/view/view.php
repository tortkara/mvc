<?php

class view {

	public $smarty;

function __construct()	{

$this->smarty = new Smarty();

$this->smarty->setTemplateDir(VIEW_DIR);
$this->smarty->setCompileDir(VIEW_DIR.'smarty/templates_c');
$this->smarty->setCacheDir(VIEW_DIR.'smarty/cache');
$this->smarty->setConfigDir(VIEW_DIR.'smarty/configs');

}


function setNavBar($menu)	{
	$this->smarty->assign('navbar', $menu);
}



function render($url)	{

// Assgning values
$this->smarty->assign('name', 'Michael');
$this->smarty->assign('title', 'Asterisk Webpage');



// Include header
$this->smarty->display('pl/header.tpl');

// Include Top Menu
$this->smarty->display('pl/navbar.tpl');

// Main content
$this->smarty->display('pl/' . $url[0] . '.tpl');

// Include footer
$this->smarty->display('pl/footer.tpl');

}


}


?>