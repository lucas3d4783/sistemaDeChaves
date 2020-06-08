<?php
    include_once 'Pessoa.class.php';

    class Porteiro extends Pessoa{
        
        public function __construct($id, $nome, $sobrenome, $dataNascimento, $email, $fone){
            parent::__construct($id, $nome, $sobrenome, $dataNascimento, $email, $fone);
        }
        
        //geters
        public function getId(){
            return parent::getId();
        }
        public function getNome(){
            return parent::getNome();
        }
        public function getSobrenome(){
            return parent::getSobrenome();
        }
        public function getDataNascimento(){
            return parent::getDataNascimento();
        }
        public function getEmail(){
            return parent::getEmail();
        }
        public function getFone(){
            return parent::getFone();
        }

        //seters
        public function setId($id){
            parent::setId($id);
        }
        public function setNome($nome){
            parent::setNome($nome);
        }
        public function setSobrenome($sobrenome){
            parent::setSobrenome($sobrenome);
        }
        public function setDataNascimento($dataNascimento){
            parent::setDataNascimento($dataNascimento);
        }
        public function setEmail($email){
            parent::setEmail($email);
        }
        public function setFone($fone){
            parent::setFone($fone);
        }

        //retorna todas informações
        public function getDados(){
            return parent::getDados();
        }


    }



?>