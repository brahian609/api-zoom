<?php

require_once '../lib/ZoomRESTAPIPHP.php';
$_POST['userId'] = '2mP6H6EqRA2NmUlBf3xUDQ';
$zoomApi = new ZoomAPI();

$route = $_GET['view'];

/*resolver la vista que se debe imprimir*/
switch ($route) {

    case 'home':
        $html = 'modules/home/index.php';
        break;
    case 'webinars':
        $html = 'modules/webinars/index.php';
        break;
    default:
        $html = 'modules/home/index.php';

}

/*imprimir vista*/
include($html);

?>