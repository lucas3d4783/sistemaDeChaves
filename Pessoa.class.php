<?php
    class Pessoa {
        private $id, $nome, $sobrenome, $dataNascimento, $email, $fone;

        //construtor
        public function __construct($id, $nome, $sobrenome, $dataNascimento, $email, $fone){
            $this->id = $id; 
            $this->nome = $nome;
            $this->sobrenome= $sobrenome;
            $this->dataNascimento = $dataNascimento;
            $this->email = $email;
            $this->fone = $fone;
        }

        //geters
        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function getDataNascimento(){
            return $this->dataNascimento;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getFone(){
            return $this->fone;
        }

        //seters
        public function setId($id){
            $this->id=$id;
        }
        public function setNome($nome){
            $this->nome=$nome;
        }
        public function setSobrenome($sobrenome){
            $this->sobrenome=$sobrenome;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento=$getDataNascimento;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function setFone($fone){
            $this->fone=$fone;
        }

        //retorna todas informações
        public function getDados(){
            $informacao = "
            ID: {$this->getId()}. <br/>
            Nome completo: {$this->getNome()}  {$this->getSobrenome()}. <br/> 
            Data de nascimento: {$this->getDataNascimento()}. <br/>
            E-mail: {$this->getEmail()}. <br/>
            Fone: {$this->getFone()}. <br/>";
            return $informacao;
        }

    }

?>