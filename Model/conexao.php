<?php

    class Conexao{

    
        public static function conectar(){
            
    
            try{
                $conn = new PDO('mysql:host=localhost;dbname=projeto','root', 'senha');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }
            catch(PDOException $erro)
            {
                echo "Conexão Falhou! => " . $erro->getMessage();
                return null;
            }    
    
        }
    
    }
?>