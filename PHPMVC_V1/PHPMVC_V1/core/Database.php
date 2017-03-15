<?php

namespace Core;
use PDO;
class Database{
    private static $db;

    /**
     * Funcion responsable de obtener la instancia 
     * del objeto de coneccion utilizando el patron 
     * de diseño Singleton
     * @return PDO     
     */
    public static function getConnection(){
        if(empty(self::$db)){
            $pdo=new PDO(
                'mysql:host=127.0.0.1;dbname=PHPMVC,charset=utf8',
                'root',
                '123123'
                );

            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            self::$db=$pdo;
        }
        return self::$db;
    }
}

