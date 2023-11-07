<?php
$nome ="Luis Serwazi";
$anoNasc = 2003;
$idade = 2023 - $anoNasc;
$altura = 1.72;
$peso = 58.2;
$imc = $peso/pow($altura,2);
// $imc = $peso/($altura * 2);

echo"<h1 style='color:red;text-align:center;'> 
Olá $nome me disseram que você tem $idade</h1>";

echo"<h2 style='color:blue; text-align:left;'> Seu peso é de $peso e sua altura $altura<h2><br>";
echo"<h3 style='color:black; text-align:left;'>O seu IMC é de $imc</h3>";

if($imc < 17){
    echo" $nome coma pelo amor de deus";
}else if($imc >=17 && $imc<18.5){
    echo" $nome continue comendo, esta magrao(ona)";
}else if($imc >=18.5 && $imc<24.9){
    echo" $nome está se achando, eta pronto para a praia";
}else if($imc >=25 && $imc<29.9){
    echo" $nome larga a bolachinha traquina, está acima do peso";
}else if($imc >=30 && $imc<34){
    echo" $nome para com o Mac ta obeso II";
}else if($imc >=35 && $imc<40){
    echo" $nome seu porquinho(a)";
}else if($imc >40){
    echo" $nome chama o guincho";
};
