<?php
namespace app\core;

class Controller{
     public function load($viewName, $viewData=array()){
       extract($viewData); 
       include "app/views/" . $viewName .".php";
   }
   
/*
NAO ESTÁ SENDO USADO, SETADO OS ARQUIVOS DIRETO
*/
}
