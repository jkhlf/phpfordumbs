<!--
1. Escrever código que possua uma função que receba como argumentos o
 nome e o salário de funcionários de uma empresa. A aplicação deve imprimir
 em cada linha o nome e o respectivo salário dos funcionários (pelo menos 3).

2. Escrever outra versão do código proposto acima, sendo que tanto os nomes 
 quanto os salários estejam originalmente em arranjos.

3. Dada uma relação de 10 pares funcionário – salário, escrever versão do código
 em que sejam impressos os pares onde o salário seja maior que R$1000.00.

4. Escrever código que mostre os elementos de um arranjo fora da ordenação dos
índices dos elementos através do uso do “sort”.

5. Escrever outra versão do código proposto acima, retornando a quantidade de 
elementos do arranjo através do uso do “count”.

6. Ainda considerando o arranjo do exercício 4, extrair uma amostra de elementos
do mesmo através do uso do “array_slice”.  
-->



<?php

//1
 function salary($name, $salary) {
    echo "Nome: {$name}, Salário: {$salary}";
 }

 //2
 function printEmployeesFromArrays($names, $salarys) {
    for ($i = 0; $i < count($names); $i++){
        echo "Nome: {$names[$i]}, Salário: {$salarys[$i]}";
    }
 }

 //3

 function printHighSalaries($employees){
    foreach($employees as $name => $salary){
        if($salary > 1000){
            echo "Nome: $name, Salario: $salary";
        }
    }
 }

 //4

 function showSortedArray() {
    $arr=["teste","teste2","teste3"];
    print_r($arr);
    sort($arr);
 }

 showSortedArray();

 //5

 function shorSortedArrayWhitCount() {
    $arr=[""];
 }

