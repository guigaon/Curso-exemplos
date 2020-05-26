<?php
namespace app\core;

class Controller{
     public function load($viewName, $viewData=array()){ //recebe arquivo como parametro
       extract($viewData); 
       include "app/views/" . $viewName .".php"; //pesquisa o arquivo em "app/views/"
   }
}
