<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {
        $seculo = (int)(($ano/100)+1);
        if($ano%100==0)$seculo--;
        return $seculo;
    }
    
    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    
    public function PrimoAnterior(int $numero): int {
        if($numero<=2)return 1; 
        $aux=$numero-1;
        while($aux>1){
            $divisores = 0;
            for($count=2; $count<$aux; $count++){
            if($aux % $count == 0){
            $divisores++;
            }
            }
            if(!(bool)$divisores)return $aux;
            $aux--;
        }
               
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        $allArr=array();
        $a=array();
        foreach($arr as $a){
            $allArr=array_merge($allArr,$a);
        }
        rsort($allArr);
        return $allArr[1];
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    public function TemDuplicados($array): bool {
        return count($array) !== count(array_unique($array));
    }
    public function estaOrdenado(array $a): bool{
        if($this->TemDuplicados($a))return False;
        $input  = array_values($a);
        $sorted = $input;
        sort($sorted);
        if ($input === $sorted) {
            return True;
        }else{
            return False;
        }
    }
	public function SequenciaCrescente(array $arr): bool{
        $ordenados=array();
        for($i=0; $i<count($arr); $i++){
        $arrAux=$arr;
        $e=$arrAux[$i];
        unset($arrAux[$i]);
        $ordenados[]=$this->estaOrdenado($arrAux);
        }
        if(in_array(True,$ordenados)){
            return True;
         }else{
            return False;   
         }
    }
}
