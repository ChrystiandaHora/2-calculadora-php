<?php
  function soma($num1,$num2){
    return $num1 + $num2;
  }
  function subtracao($num1,$num2){    
    return $num1 - $num2;
  }
  function divisao($num1,$num2){    
    return $num1 / $num2;
  }
  function exponenciacao($num1,$num2){    
    return pow($num1,$num2);
  }
  echo "Soma :";
  $resultSoma = soma (10,8);
  echo $resultSoma;
  echo " ";
  echo "Subtracao :";
  $resultSub = subtracao(10,4);
  echo $resultSub;
  echo " ";
  echo "Divisao :";
  $resultDiv = divisao(15,5);
  echo $resultDiv;
  echo " ";
  echo "Exponencial :";
  $resultExp = exponenciacao(3,2);
  echo $resultExp;

?> 