<?php


if(isset($_POST['register'])){

    try {
        $result = $zoomApi->registrationWebinars();
        header("location: index.php?module=webinars&view=index");
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        exit;
    }

}

?>