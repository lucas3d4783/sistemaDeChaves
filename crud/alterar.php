<?php
    include_once 'Conexao.class.php';

    if(isset($_POST['btSalvar'])){
        $s=$_POST['tipo'];
        $con = new Database();

        if($s == 'aluno'){ //aluno
            
            $idProfessor = $_POST['professorSelecionado'];
            if($idProfessor == null){
                echo "<script> alert('Professor não encontrado no banco!'); </script>";
            }

            if($_POST['status']=='ativado'){
                $ativo = 'true';
            }else if($_POST['status']=='desativado'){
                $ativo = 'false';
            }
            $nome=$_POST['nome'];
            $sobrenome=$_POST['sobrenome'];
            $dataNascimento=$_POST['dataNascimento'];
            $email=$_POST['email'];
            $fone=$_POST['fone'];
            $id=$_POST['id'];

            
            $con->alterarAluno($id, $idProfessor, $ativo, $nome, $sobrenome, $dataNascimento, $email, $fone);
            
            
        
        }else if($s == 'chave'){ //chave 
            
            $descricao=$_POST['descricao'];
            $id=$_POST['id'];

            //$tabela, $id, $campo, $parametro
            $con->alterarPorId('chave', $id, 'descricao', "'$descricao'");
            

        }else if($s == 'professor'){ //professor
            
            
            if($_POST['status']=='ativado'){
                $ativo = 'true';
            }else if($_POST['status']=='desativado'){
                $ativo = 'false';
            }
            $nome=$_POST['nome'];
            $sobrenome=$_POST['sobrenome'];
            $dataNascimento=$_POST['dataNascimento'];
            $email=$_POST['email'];
            $fone=$_POST['fone'];
            $sala = $_POST['sala'];
            $id=$_POST['id'];

            
            $con->alterarProfessor($id, $sala, $ativo, $nome, $sobrenome, $dataNascimento, $email, $fone);
            



        }else if($s == 'porteiro'){ //porteiro
            
            $nome=$_POST['nome'];
            $sobrenome=$_POST['sobrenome'];
            $dataNascimento=$_POST['dataNascimento'];
            $email=$_POST['email'];
            $fone=$_POST['fone'];
            $id=$_POST['id'];

            
            $con->alterarPorteiro($id, $nome, $sobrenome, $dataNascimento, $email, $fone);



        }
        

    }else if(isset($_POST['btRemover'])){
        $s=$_POST['tipo'];
        $con = new Database();

        if($s == 'aluno'){ //aluno
            
            $id=$_POST['id'];

            $con->deletarPorId('aluno', $id);
                 
        }else if($s == 'chave'){ //chave 

            $id=$_POST['id'];

            $con->deletarPorId('chave', $id);
            
        }else if($s == 'professor'){ //professor

            $id=$_POST['id'];
            
            $con->deletarPorId('professor', $id);

        }else if($s == 'porteiro'){ //porteiro

            $id=$_POST['id'];

            $con->deletarPorId('porteiro', $id);

        }
    }

    
    


?>
