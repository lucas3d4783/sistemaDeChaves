<?php

    class Aula {

        private $id;
        private $descricao;
        private $professor=null, $aluno=null, $chave; 
        private $data, $hora; //data e hora que foi realizado a retirada da chave 
        private $dataE=null, $horaE=null; //data e hora que foi realizado a devolução da chave 

        //construct
        public function __construct($id, $descricao, $chave, $data, $hora){
            $this->id = $id;
            $this->descricao = $descricao;
            $this->chave = $chave;
        }

        //adicionar responsavel
        public function adicionarAluno($aluno){
            if($this->professor == null){
                $this->aluno=$aluno;
            }else{
                echo "Já foi cadastrado um professor como responsável!";
            }
            
        }
        public function adicionarProfessor($professor){
            if($this->aluno == null){
                $this->professor=$professor;
            }else{
                echo "Já foi cadastrado um aluno como responsável!";
            }
        }

        //geters
        public function getId(){
            return $this->id;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function getChave(){
            return $this->chave;
        }
        public function getDataInicial(){
            return $this->data;
        }
        public function getHoraInicial(){
            return $this->hora;
        }
        public function getDataFinal(){
            if($this->dataE != null){
                return $this->dataE;
            }else{
                return "A chave não foi devolvida ainda!";
            }
            
        }
        public function getHoraFinal(){
            if($this->horaE =! null){
                return $this->horaE;
            }else{
                return "!";
            }
        }



        //seters
        public function setId($id){
            $this->id = $id;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function setChave($chave){
            $this->chave = $chave;
        }
        public function setDataFinal($dataE){
            if($this->dataE == null){
                $this->dataE = $dataE;
            }else{
                echo "A chave já foi devolvida";
            }
            
        }
        public function setHoraFinal($horaE){
            if($this->horaE == null){
                $this->horaE = $horaE;
            }else{
                echo "!";
            }
           
        }





    }
    



?>