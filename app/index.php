<?php

require_once '../lib/ZoomRESTAPIPHP.php';
$zoomApi = new ZoomAPI();
$_POST['userId'] = $zoomApi::USER_ID;

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