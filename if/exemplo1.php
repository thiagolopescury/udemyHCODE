 <?php
$anoNascimento = 2016;
$anoAtual = date('o');
intval($anoAtual);
$idade = $anoAtual - $anoNascimento;

$idadeCrianca = 12;
$maiorIdade = 18;
$idadeVelho = 65;

if ($idade <= 12) {
    echo " Você é menor de idade, não pode entrar";
}
elseif($idade >= 18 & $idade < 64){
    echo " Seja Bem vindo jovem,have fun!";
}
else{
    echo" Olá senhor, aproveite com moderação";
}


    ?>