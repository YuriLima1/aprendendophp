<?php
   $nome ="Rodrigo";
   $dia = 11;
   echo $nome;
    echo $dia;
    $diaext = "7";

    echo $diaext;
    if($dia == $diaext){
        echo "igual";
    }

    echo " testando se é igual a 7<br>";
    if($dia != 7)
    {
        echo "diferente1";
    }
    else {
        echo "igual a 7";
    }
    
    echo "<br> Operador ternario<br>";
    $resposta = $dia < 10 ? "Menor que 10" : "Maior ou igual";
    echo $resposta;


   /* pegunta ? resposta verdadeira : resposta false*/
   /*
    //literal = string
    //real = float ou double
    //inteiro = int ou integer

    7 = 7.0


   (num1>0) && (num2>10)  corresponde ao E
   (num1>0) || (num2>10)  corresponde ao OU 
   ! Corresponde ao não
   != Corresponde ao não igual ou  diferente 
   == corresponde ao iguais para testar 
   === corresponde a identicos (tipo e valor)
     
    ´ ` ' "*/

       
?>