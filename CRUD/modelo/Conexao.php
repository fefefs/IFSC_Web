<?php
class Conexao{
    public static function getConexao(){
        //Classe PDO conection $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
        //
        return new PDO('mysql:host=localhost;dbname=test', "root", "admin", [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXEPTION]);
        
    }
}