<?php

/**
 * HomeController short summary.
 *
 * HomeController description.
 *
 * @version 1.0
 * @author SuZuMa
 */
namespace App\Controllers;
class HomeController
{
    private $empleado;
    public function __construct(){
        $this->empleado=new \App\Models\Empleado;
    }

    public function index(){
        $model=$this->empleado->Listar();
        require_once 'header.php';
        require_once 'home/index.php';
        require_once 'footer.php';
    }
}