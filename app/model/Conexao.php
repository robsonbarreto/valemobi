<?php
 
//Classe para conexão com o banco de dados//
 
class Acesso {
     
    //Abrir a conexão com o banco de dados//
     
    public function Conexao() {
 
        $this->cnx = mysqli_connect("mysql.hostinger.com.br", "u200053898_valem", "1mco959PjcfY", "u200053898_valem");
 
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
 
    //Realizar query no banco de dados//
     
    public function Query($sql) {
        $this->result = mysqli_query($this->cnx,$sql, MYSQLI_STORE_RESULT);
    }
 
    //Fechar a conexão com o banco de dados//
     
    public function __destruct() {
        mysqli_close($this->cnx);
    }
 
}
?>