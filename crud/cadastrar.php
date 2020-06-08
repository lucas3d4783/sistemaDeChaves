<?php
    include_once 'Conexao.class.php';

    $s=$_POST['tipo'];
    $con = new Database();

    if($s == 'aluno'){ //aluno
        //echo 'aluno';
        //$idProfessor=$_POST['p'];
        //var_dump($_POST);
        
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
        
        if($con->inserir('aluno', "idProfessor, ativo, nome, sobrenome, dataNascimento, email, fone", 
        "$idProfessor, $ativo, '$nome', '$sobrenome', '$dataNascimento', '$email', '$fone'")){
            
            echo "
            <script> 
                alert('salvo com sucesso!!!');
                location.href = '../cadastro/principal.php';
            </script>
            ";
        }else{
            echo "<script> alert('Erro ao salvar!!!'); </script>";
        }
        //header("Location: ../cadastro/principal.php");
        
    
    }else if($s == 'chave'){ //chave 
        //echo 'chave';
        $descricao=$_POST['descricao'];
        if($con->inserir('chave', "descricao", "'$descricao'")){
            echo "
            <script> 
                alert('salvo com sucesso!!!');
                location.href = '../cadastro/principal.php';
            </script>
            ";
        }else{
            echo "<script> alert('Erro ao salvar!!!'); </script>";
        }

    }else if($s == 'professor'){ //professor
        //echo 'professor';
        $sala=$_POST['sala'];


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
        
        if($con->inserir('professor', "sala, ativo, nome, sobrenome, dataNascimento, email, fone", 
        "$sala, $ativo, '$nome', '$sobrenome', '$dataNascimento', '$email', '$fone'")){
            
            echo "
            <script> 
                alert('salvo com sucesso!!!');
                location.href = '../cadastro/principal.php';
            </script>
            ";
        }else{
            echo "<script> alert('Erro ao salvar!!!'); </script>";
        }




    }else if($s == 'porteiro'){ //porteiro
        //echo 'porteiro';
        $nome=$_POST['nome'];
        $sobrenome=$_POST['sobrenome'];
        $dataNascimento=$_POST['dataNascimento'];
        $email=$_POST['email'];
        $fone=$_POST['fone'];
        
        if($con->inserir('porteiro', " nome, sobrenome, dataNascimento, email, fone", 
        "'$nome', '$sobrenome', '$dataNascimento', '$email', '$fone'")){
            
            echo "
            <script> 
                alert('salvo com sucesso!!!');
                location.href = '../cadastro/principal.php';
            </script>
            ";
        }else{
            echo "<script> alert('Erro ao salvar!!!'); </script>";
        }



    }else if($s == 'alocarChave'){ //Alocar uma chave
       
        $descricao=$_POST['descricao'];
        date_default_timezone_set('America/Sao_Paulo');
        $data=date('d/m/Y');
        $hora=date('H:i');
        

        //ENCONTRAR O ID DO CHAVE SELECIONADO
        $descricao=$_POST['descricao'];
        $idChave=$_POST['chaveSelecionada'];
        if($idChave == null){
            echo "<script> alert('Chave não encontrada no banco!'); </script>";
        }

        //ENCONTRAR O ID DO PORTEIRO SELECIONADO
        $idPorteiro = $_POST['porteiroSelecionado'];        
        if($idPorteiro == null){
            echo "<script> alert('Porteiro não encontrado no banco!'); </script>";
        }

        if($_POST['comboSelecionado']==0){
            //ENCONTRAR O ID DO PROFESSOR SELECIONADO
            $idProfessor = $_POST['professorSelecionado'];
            if($idProfessor == null){
                echo "<script> alert('Professor não encontrado no banco!'); </script>";
            }else{

                $a = $con->selecionar('professor', 'id', $idProfessor);
                foreach($a as $b){
                    $status=$b['ativo'];
                }

                
                if($status==true && !($con->verificarChave($idChave))){
                    $con->inserir('aula', "descricao, idProfessor, idChave, idPorteiro, data, hora", 
                    "'$descricao', $idProfessor, $idChave, $idPorteiro, '$data', '$hora'");
                }else{
                    if(!$status){
                        echo "<script> alert('Professor inativo'); </script>";
                    }
                }
            }

        }else if($_POST['comboSelecionado']==1){
            //ENCONTRAR O ID DO ALUNO SELECIONADO
            $idAluno = $_POST['alunoSelecionado'];
            if($idAluno== null){
                echo "<script> alert('Aluno não encontrado no banco!'); </script>";
            }else{

                $a = $con->selecionar('aluno', 'id', $idAluno);
                foreach($a as $b){
                    $status = $b['ativo'];
                }

                if($status==true && !($con->verificarChave($idChave))){
                    $con->inserir('aula', "descricao, idAluno, idChave, idPorteiro, data, hora", 
                    "'$descricao', $idAluno, $idChave, $idPorteiro, '$data', '$hora'");
                        
                }else{
                    if(!$status){
                        echo "<script> alert('Professor inativo'); 
                        location.href = '../cadastro/alocarChave.php';
                        </script>";
                    }
                }
                
            }


        }

        echo "<script>  location.href = '../cadastro/alocarChave.php'; </script>";

    }


?>
