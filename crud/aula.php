<?php
    include_once '../crud/Conexao.class.php';


    function listarAulas(){
        $con = new Database();
        $resultado = $con->listarAulasCompleto();
        $opcoes = "<hr>";
        
        
        foreach($resultado as $r){
  
            if($r['idAluno'] == null){
                $idResponsavel = $r['idProfessor'];
                $a = $con->selecionar('professor', 'id', $idResponsavel);
                foreach($a as $b){
                    $responsavel = "Nome: {$b['nome']} {$b['sobrenome']}";
                }
            }else{
                $idResponsavel = $r['idAluno'];
                $a = $con->selecionar('aluno', 'id', $idResponsavel);
                foreach($a as $b){
                    $responsavel = "Nome: {$b['nome']} {$b['sobrenome']}";
                }
                
            }
            $a = $con->selecionar('porteiro', 'id', $r['idPorteiro']);
            foreach($a as $b){
                $porteiro = "Nome: {$b['nome']} {$b['sobrenome']}";
            }

            if($r['dataE'] == null && $r['horaE'] == null){
                $dataHora = "pendente!!!";
            }else{
                $dataHora = " {$r['dataE']} {$r['horaE']}";
            }

            $opcoes .= "ID: {$r['id']} - Descrição: {$r['descricao']} - Responsável: $responsavel - Chave: {$r['descricaoChave']} - 
            Porteiro: $porteiro - Retirada {$r['data']} {$r['hora']} - Devolução: $dataHora
            <br> <hr>";

        }
        
        $con->__destruct();
        return $opcoes;
    }



    function listarAulasPor($tabela, $id){
        $con = new Database();
        if(isset($id)){
            if($tabela == "aluno"){
                $resultado = $con->listarAulasPorAluno($id);
            }else if($tabela == "professor"){
                $resultado = $con->listarAulasPorProfessor($id);
            }else if($tabela == "porteiro"){
                $resultado = $con->listarAulasPorPorteiro($id);
            }else if($tabela == "chave"){
                $resultado = $con->listarAulasPorChave($id);
            }else if($tabela == "aula"){
                $resultado = $con->listarAulasPorAula($id);
            }
            
            $opcoes = "<hr>";
            
            if(isset($resultado)){
                foreach($resultado as $r){
      
                    if($r['idAluno'] == null){
                        $idResponsavel = $r['idProfessor'];
                        $a = $con->selecionar('professor', 'id', $idResponsavel);
                        foreach($a as $b){
                            $responsavel = "Nome: {$b['nome']} {$b['sobrenome']}";
                        }
                    }else{
                        $idResponsavel = $r['idAluno'];
                        $a = $con->selecionar('aluno', 'id', $idResponsavel);
                        foreach($a as $b){
                            $responsavel = "Nome: {$b['nome']} {$b['sobrenome']}";
                        }
                        
                    }
                    $a = $con->selecionar('porteiro', 'id', $r['idPorteiro']);
                    foreach($a as $b){
                        $porteiro = "Nome: {$b['nome']} {$b['sobrenome']}";
                    }
        
                    if($r['dataE'] == null && $r['horaE'] == null){
                        $dataHora = "pendente!!!";
                    }else{
                        $dataHora = " {$r['dataE']} {$r['horaE']}";
                    }
        
                    $opcoes .= "ID: {$r['id']} - Descrição: {$r['descricao']} - Responsável: $responsavel - Chave: {$r['descricaoChave']} - 
                    Porteiro: $porteiro - Retirada {$r['data']} {$r['hora']} - Devolução: $dataHora
                    <br> <hr>";
        
                }
            }
        }
       
        
        
        $con->__destruct();
        return $opcoes;

    }






?>