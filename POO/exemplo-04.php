 <?php 
 
  class Endereco
   {
       private $logradouro;
       private $numero;
       private $cidade;

       public function __construct($logradouro,$numero,$cidade)
       {
           $this->logradouro = $logradouro;
           $this->numero = $numero;
           $this->cidade = $cidade;
           
       }
       public function __toString()
       {
           return $this->logradouro.", ". $this->numero." - " . $this->cidade;
       }
   }

   $minhaCasa = new Endereco("Rua marita" , "40" , "Santa Luzia");
   echo $minhaCasa;
 
 
 ?>