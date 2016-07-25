<?php

$_POST['webinarId'] = 743728187;
$asistentes = $zoomApi->listAttendeesWebinars();

print_r($asistentes);

?>