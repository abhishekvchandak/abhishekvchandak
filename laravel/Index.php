<?php

require '../app/bootstrap.php';
$capture = new \Codecourse\Capture\Capture;

$capture -> load('ebill.php',[
	'name'=>'Fakhruddin',
	'amount'=> 12345
]);

$capture -> respond('invoice.pdf');
?>