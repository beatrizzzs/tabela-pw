<?php
     class Aluno{
         private $_nome;
         private $_nota1;
         private $_nota2;
         private $_nota3;

         function __construct($_nome, $_nota1, $_nota2, $_nota3){
               $this->nome = $_nome;
               $this->nota1 =  $_nota1;
               $this->nota2 = $_nota2;
               $this->nota3 = $_nota3; 
               $this->media = ($_nota1+$_nota2+$_nota3)/3;
         }

         public function getNome(){
               return $this->nome;
         }
         public function setNome($_nome){
               $this->nome = $_nome;
         }
      
         public function getNota1(){
            return $this->nota1;
         }
         public function setNota1($_nota1){
            $this->nota1 = $_nota1;
         }
         
         public function getNota2(){
            return $this->nota2;
         }
         public function setNota2($_nota2){
            $this->nota2 = $_nota2;
         }

         public function getNota3(){
            return $this->nota3;
         }
         public function setNota3($_nota3){
            $this->nota3 = $_nota3;
         }
     
         function calcularMedia(){
               $_media = ($this->nota1 + $this->nota2 +$this->nota3)/3;
               return $_media;
         }

         function filtrarNotas(){
            if($this->media>=9){
                  return 'Aprovado com mérito!';
            }
            elseif($this->media>=6){
                  return 'Aprovado!';
            }
            else{
                  return 'Reprovado!';
            }

         }
    }
    