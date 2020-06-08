<?php
    include_once '../crud/Conexao.class.php';
    
    function getListaProfessores(){
        $con = new Database();
        $resultado = $con->listar('professor');
        $opcoes = "";
        
        foreach($resultado as $r){
            $opcoes .= "<option value='{$r['id']}'>ID: {$r['id']}  ---  Nome: {$r['nome']} {$r['sobrenome']}</option> </br>";
        }

        $con->__destruct();
        return $opcoes;
    }

    function listarProfessores(){
        $con = new Database();
        $resultado = $con->listar('professor');
        $opcoes = "<hr>";
        
        foreach($resultado as $r){
            if($r['ativo'] == true){
                $estado = "ativo";
            }else if($r['ativo'] == false){
                $estado = "desativado";
            }
            $opcoes .= "ID: {$r['id']} - Nome: {$r['nome']} {$r['sobrenome']} - Estado: $estado - Data de Nascimento: 
            {$r['dataNascimento']} E-mail: {$r['email']} Fone: {$r['fone']} - Sala: {$r['sala']} <br> <hr>";
            
        }
        
        $con->__destruct();
        return $opcoes;
    }

    

    



?>