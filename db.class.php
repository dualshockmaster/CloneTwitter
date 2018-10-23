<?php

class db {

    //Host
    private $host = 'localhost';
    //Usuario
    private $usuario = 'root';
    //Senha
    private $senha = '';
    //Banco
    private $database = 'twitter_clone';

    public function conecta_mysql(){
        //cria conexão
        $con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);
        //ajustar o charset de comunicação entre aplicação e o banco de dados
        mysqli_set_charset($con,'utf8');
        //verficia erro de conexão
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o banco de dados mysql: '.mysqli_connect_error();
        }
        return $con;

    }
}

?>