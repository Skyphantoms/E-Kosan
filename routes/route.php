<?php 

$routes = [];


$routes['GET']['/ekosan'] = 'EkosanController@index';
$routes['GET']['/ekosancreate'] = 'EkosanController@formcreate';
$routes['GET']['/ekosanupdate/{id}'] = 'EkosanController@formupdate';
$routes['POST']['/createekosan'] = 'EkosanController@create';
$routes['POST']['/updateekosan/{id}'] = 'EkosanController@update';
$routes['GET']['/deleteekosan/{id}'] = 'EkosanController@delete';
?>