<?php
    include_once '../crud/Conexao.class.php';
    
    function getListaPorteiros(){
        $con = new Database();
        $resultado = $con->listar('porteiro');
        $opcoes = "";
        
        foreach($resultado as $r){
            $opcoes .= "<option value='{$r['id']}'>ID: {$r['id']}  ---  Nome: {$r['nome']} {$r['sobrenome']}</option> </br>";
        }

        $con->__destruct();
        return $opcoes;
    }

    function listarPorteiros(){
        $con = new Database();
        $resultado = $con->listar('porteiro');
        $opcoes = "<hr>";
        
        foreach($resultado as $r){
            $opcoes .= "ID: {$r['id']} - Nome: {$r['nome']} {$r['sobrenome']} - Data de Nascimento: 
            {$r['dataNascimento']} E-mail: {$r['email']} Fone: {$r['fone']} <br><hr>";
        }

        $con->__destruct();
        return $opcoes;
    }


?>