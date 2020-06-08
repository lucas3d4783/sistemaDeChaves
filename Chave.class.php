<?php
    class Chave {

        private $id;
        private $alocada; //booleano para verificar se a chave está alocada ou não 
        private $descricao;

        //constructor
        public function __construct($id, $descricao){
            $this->id = $id;
            $this->descricao = $descricao;
        }

        //geters
        public function getId(){
            return $this->id;
        }
        public function getStatus(){
            return ($this->alocado?'ocupada':'livre');
        }
        public function getDescricao(){
            return $this->descricao;
        }

        //seters
        public function setId($id){
            $this->id = $id;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }


        //alocar a chave
        public function alocar(){
            $this->alocada = true;
        }
        //desalocar a chave
        public function desalocar(){
            $this->alocada = false;
        }

    }




?>