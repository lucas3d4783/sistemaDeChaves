<?php
    include_once 'Pessoa.class.php';

    class Professor extends Pessoa{
        
        private $sala = null;
        private $curos = null;
        private $ativo;

        public function __construct($id, $nome, $sobrenome, $dataNascimento, $email, $fone, $sala){
            parent::__construct($id, $nome, $sobrenome, $dataNascimento, $email, $fone);
            $this->sala = $sala;
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
        public function getSala(){
            return $this->sala;
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
        public function setSala($sala){
            $this->sala = $sala;
        }


        //retorna todas informações
        public function getDados(){
            $teste = ($this->ativo)?'sim':'não';
            $informacao = parent::getDados() . "
            Ativo: {$teste} <br/>";
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