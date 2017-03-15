<?php

    //Error de PHP a Try/Catch
    function exception_error_handler($severidad,$mensaje,$archivo,$linea){
        if(!(error_reporting() & $severidad)){
            //Este codigo de error no esta incluido en error_reporting
            return;
        }else{
            throw new ErrorException($mensaje,0,$severidad,$archivo,$linea);
        }
    }

    //Se etablece el manejador de Errores
    set_error_handler("exception_error_handler");

    //Composer
    require_once    'vendor/autoload.php';

    //path
    define('_VIEW_PATH_','app/views/');

    //Router
    $c=sprintf(
        'App\Controlller\%sController',
        $_GET['c']??'Home'
        );

    $a=$_GET['a']??'index';
    $c=trim(ucfirst($c));
    $a=trim(strtolower($a));


    $controller=new $c;
    $controller->$a();