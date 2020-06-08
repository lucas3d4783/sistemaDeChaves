<?php
    include_once '../crud/Conexao.class.php';
    
    function getListaChaves(){
        $con = new Database();
        $resultado = $con->listar('chave');
        $opcoes = "";
        
        foreach($resultado as $r){
            $id="\"". $r['id'] ."\"";
            $opcoes .= "<option value=$id> ID: {$r['id']}  ---  Descrição: {$r['descricao']}</option> </br>";
            
        }

        $con->__destruct();
        return $opcoes;
    }

    function listarChaves(){
        $con = new Database();
        $resultado = $con->listar('chave');
        $opcoes = "<hr>";
        
        foreach($resultado as $r){
            $opcoes .= "ID: {$r['id']} - Descrição: {$r['descricao']} <br> <hr>";
        }

        $con->__destruct();
        return $opcoes;
    }

    

    



?>