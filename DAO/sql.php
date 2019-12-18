<?php 
 
 class Sql extends PDO{
  
     private $conn;
  
     public function __construct()
     {   //ao instanciar, abrimos a conexão
         $this->conn = new PDO("mysql:host=localhost;dbname=bdphp7", "root", "");
  
     }
  
     /* 3 */
     private function setParams($statment, $parameters = array()){
        
          // este método recebe uma query preparada e um array de dados para fazer o bind. 
          //Usa foreach para querys
  
         // $statment é a query já preparada
         foreach ($parameters as $key => $value) {
             $this->setParam($statment,$key, $value);
         }
  
     }
  
     private function setParam($statment, $key, $value){// este método recebe uma query preparada, a chave e o valor, ou seja atua em uma query apenas
         //no exemplo inicial do select, este método não é chamado por o array dentro de setParams() está vazio
         
         $statment->bindParam($key, $value);
     }
  
     /* 2 */
     public function query($rawQuery, $params = array()){
         
         
         //$rawQuery ----> query bruta
         //$params ------> dados que estarão na query(independente de qual query seja)
  
         $stmt = $this->conn->prepare($rawQuery); // preparando a query
  
         $this->setParams($stmt, $params);
  
         $stmt->execute();
         return $stmt;
     }
  
  
     /* 1 */
     public function select($rawQuery, $params = array()){
    
         
         // $rawQuery é a query a ser executada
         $stmt = $this->query($rawQuery, $params);
         
  
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
  
     }
  
 }
  
  
  
 ?>