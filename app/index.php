<?php

require_once '../lib/ZoomRESTAPIPHP.php';
$zoomApi = new ZoomAPI();
$_POST['userId'] = $zoomApi::USER_ID;

$module = $_GET['module'];
$view   = $_GET['view'];

/*resolver la vista que se debe imprimir*/
switch ($module) {

    case 'home':
        switch ($view){
            case 'index':
                $html = 'modules/home/index.php';
                break;
        }
        break;
    case 'webinars':
        switch ($view){
            case 'index':
                $html = 'modules/webinars/index.php';
                break;
            case 'asistentes':
                $html = 'modules/webinars/asistentes.php';
                break;
            case 'register':
                $html = 'modules/webinars/model.php';
        }
        break;
    default:
        header("location: index.php?module=home&view=index");

}

/*imprimir vista*/
include($html);

?>