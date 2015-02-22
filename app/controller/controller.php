<?php

class controller {


function __construct(){




}



function route()	{


$fileList='';
// Read all files in view/pl
if ($handle = opendir(VIEW_DIR.'pl')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != "header.tpl" && $entry != "footer.tpl" && $entry != "navbar.tpl") {
        	$fileList = $fileList . '/' . $entry;
        }
    }

    closedir($handle);
}


//(Router::explodeURI($fileList));
$url = Router::getURL();

print_r($url);

$model = new model();
$model->getData();


$view = new view();
$view->setNavBar(Router::explodeURI($fileList));
$view->render($url);









}



}

?>