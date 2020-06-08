<?php

    include_once 'Pessoa.class.php';

    class Aluno extends Pessoa{
        
        private $responsavel=null;
        private $ativo;

        public function __construct($id, $nome, $sobrenome, $dataNascimento, $email, $fone, $responsavel){
            parent::__construct($id, $nome, $sobrenome, $dataNascimento, $email, $fone);
            $this->responsavel = $responsavel;
            $this->ativo = true;
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
        public function getResponsavel(){
            return $this->responsavel->getDados();
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
        public function setResponsavel($responsavel){
            $this->responsavel = $responsavel;
        }

        //retorna todas informações
        public function getDados(){
            $teste = ($this->ativo)?'sim':'não';
            $informacao = parent::getDados() . "
            Ativo: {$teste} <br/>
            Professor Responsável: {$this->responsavel->getNome()} (ID: {$this->responsavel->getId()})";
            return $informacao;
        }

        //desativar 
        public function desativar(){
            $this->ativo = false;
            //desativar no banco
        }
        //ativar 
        public function ativar(){
            $this->ativo = true;
            //desativar no banco
        }


    }



?>