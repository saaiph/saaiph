<?php
use \Saaiph\Core\Router;
/*
  Router em POST e GET com as funções $this->get() ou $this->post();

  $this->get('url/{params}', 'nameController@action');
  $this->get('url/{params}', function() {});
  
*/
Router::get('/', 'homeController@index');
Router::get('/teste', 'homeController@teste');
?>
