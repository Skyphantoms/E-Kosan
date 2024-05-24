<?php 

$routes = [];
#ekosan
$routes['GET']['/'] = 'EkosanController@index';
$routes['GET']['/ekosan'] = 'EkosanController@index';
$routes['GET']['/ekosancreate'] = 'EkosanController@formcreate';
$routes['GET']['/ekosanupdate/{id}'] = 'EkosanController@formupdate';
$routes['POST']['/createekosan'] = 'EkosanController@create';
$routes['POST']['/updateekosan/{id}'] = 'EkosanController@update';
$routes['GET']['/deleteekosan/{id}'] = 'EkosanController@delete';

#detailkos
$routes['GET']['/detailkos'] = 'DetailController@index';
$routes['GET']['/detailcreate'] = 'DetailController@formcreate';
$routes['GET']['/detailupdate/{id}'] = 'DetailController@formupdate';
$routes['POST']['/createdetail'] = 'DetailController@create';
$routes['POST']['/updatedetail/{id}'] = 'DetailController@update';
$routes['GET']['/deletedetail/{id}'] = 'DetailController@delete';


#auth
$routes['GET']['/'] = 'AuthController@viewlogin';
$routes['GET']['/login'] = 'AuthController@viewlogin';
$routes['GET']['/register'] = 'AuthController@viewregister';
$routes['POST']['/login'] = 'AuthController@login';
$routes['POST']['/register'] = 'AuthController@register';
$routes['GET']['/logout'] = 'AuthController@logout';
?>