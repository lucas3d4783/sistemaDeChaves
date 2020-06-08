<?php
    include_once '../crud/Conexao.class.php';
    
    function getListaAlunos(){
        $con = new Database();
        $resultado = $con->listar('aluno');
        $opcoes = "";
        
        foreach($resultado as $r){
            $opcoes .= "<option value='{$r['id']}'>ID: {$r['id']} --- Nome: {$r['nome']} {$r['sobrenome']}</option> </br>";
            
        }

        $con->__destruct();
        return $opcoes;
    }

    function listarAlunos(){
        $con = new Database();
        $resultado = $con->listarAlunos();
        $opcoes = "<hr>";
        
        foreach($resultado as $r){
            if($r['ativo'] == true){
                $estado = "ativo";
            }else if($r['ativo'] == false){
                $estado = "desativado";
            }
            $opcoes .= "ID: {$r['id']} - Nome: {$r['nome']} {$r['sobrenome']} - Estado: $estado - Data de Nascimento: 
            {$r['dataNascimento']} E-mail: {$r['email']} Fone: {$r['fone']} - Responsável: {$r['nomeProfessor']} {$r['sobrenomeProfessor']}
            <br> <hr>";

        }
        
        $con->__destruct();
        return $opcoes;
    }




?>