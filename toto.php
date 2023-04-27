<?php

$numbers = range(1, 49); // cria um array com os números de 1 a 49
shuffle($numbers); // embaralha os números aleatoriamente

$drawn_numbers = array(); // inicializa um array para os números sorteados

// repete o sorteio até que sejam sorteados 6 números não repetidos
while (count($drawn_numbers) < 6) {
  $number = array_shift($numbers); // retira o primeiro número do array embaralhado
  if (!in_array($number, $drawn_numbers)) {
    $drawn_numbers[] = $number; // adiciona o número ao array de números sorteados
    $numbers = array_diff($numbers, array($number)); // remove o número do array de números disponíveis
  }
}

sort($drawn_numbers); // ordena os números sorteados

// imprime os números sorteados
echo "Os números sorteados são: ";
foreach ($drawn_numbers as $number) {
  echo $number . " ";
}

?>
