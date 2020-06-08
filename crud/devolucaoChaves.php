<?php
    include_once '../crud/Conexao.class.php';
    

    if(isset($_POST['btDevolver'])){
        $con = new Database();

        $id=$_POST['id'];
        date_default_timezone_set('America/Sao_Paulo');
        $data=date('d/m/Y');
        $hora=date('H:i');

        $con->devolverChave($id, $data, $hora);

    }

    function getListaAlocacoes(){
        $con = new Database();
        $resultado = $con->listarAulas();
        $opcoes = "";
        
        foreach($resultado as $r){
            if($r['dataE'] == null){ //vai pegar só quando a chave não tiver sido devolvida
                $opcoes .= "<option value='{$r['id']}'>ID da alocação: {$r['id']} --- Descrição da chave: {$r['descricao']}</option> </br>";
            }
        }
        if($opcoes==""){ //se não for encontrado nenhuma alocação pendente
            $opcoes = "<option>Nenhuma alocação pendente</option> </br>";
        }

        $con->__destruct();
        return $opcoes;
    }



   

?>