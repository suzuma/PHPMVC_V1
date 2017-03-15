
<?php

/**
 * Empleado short summary.
 *
 * Empleado description.
 *
 * @version 1.0
 * @author SuZuMa
 */
namespace App\Models;
class Empleado
{
    private $pdo;
    public function __construct(){
        $this->pdo=\Core\Database::getConnection();
    }
    public function Listar(){
        $result=[];
        try{
            $stm=$this->pdo->prepare('select * from empleado');
            $stm->execute();
            $result=$stm->fetchAll();
        }catch(Exception $e){}
        return $result;
    }
}