<?php

    class Database{
        private $hostname="192.168.56.106";
        private $username="lucas";
        private $password="MySQL123!";
        private $dbname="sistemaDeChaves";
        private $con;
        private $port=3306;
        
        
        function __construct(){
            try{
                $this->con = new PDO("mysql:host=$this->hostname;
                                        port=$this->port;
                                        dbname=$this->dbname",
                                        "$this->username",
                                        "$this->password");
                $this->con->exec("set names utf8");
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        
        function __destruct(){
            $this->hostname=null;
            $this->username=null;
            $this->password=null;
            $this->dbname=null;
            $this->con=null;
        }
        
        
        
        function inserir($tabela, $campos, $valores){
            $sql = "INSERT INTO $tabela ($campos) VALUES ($valores)";
            try{
                $linhas=$this->con->exec($sql);
                if($linhas == 0){
                    echo "<script> alert('Erro ao salvar $tabela'); 
                    location.href = '../principal/index.php';
                    </script>";
                }else if($linhas == 1){
                    echo "<script> alert('$tabela cadastrado(a) com sucesso'); 
                    location.href = '../principal/index.php';
                    </script>";
                    
                }
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        
        
        
        function listar($tabela){
            $sql = "SELECT * FROM $tabela";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        
        function listarAlunos(){
            $sql = "SELECT aluno.id, aluno.nome, aluno.ativo, aluno.sobrenome, aluno.dataNascimento, aluno.email
            , aluno.fone, professor.nome as nomeProfessor, professor.sobrenome as sobrenomeProfessor FROM aluno, professor WHERE aluno.idProfessor=professor.id";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function listarAulas(){
            $sql = "SELECT aula.id, chave.descricao, aula.dataE FROM aula, chave WHERE aula.idChave=chave.id";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function listarAulasCompleto(){
            $sql = "SELECT aula.id, chave.descricao as descricaoChave, aula.descricao, aula.hora, aula.data, aula.horaE
            , aula.dataE, aula.idProfessor, aula.idAluno, aula.idPorteiro  FROM aula, chave WHERE aula.idChave=chave.id";

            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function listarAulasPorAluno($id){
            $sql = "SELECT aula.id, chave.descricao as descricaoChave, aula.descricao, aula.hora, aula.data, aula.horaE
            , aula.dataE, aula.idProfessor, aula.idAluno, aula.idPorteiro  FROM aula, chave WHERE aula.idAluno=$id 
            and aula.idChave=chave.id";

            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        function listarAulasPorProfessor($id){
            $sql = "SELECT aula.id, chave.descricao as descricaoChave, aula.descricao, aula.hora, aula.data, aula.horaE
            , aula.dataE, aula.idProfessor, aula.idAluno, aula.idPorteiro  FROM aula, chave WHERE aula.idProfessor=$id 
            and aula.idChave=chave.id";

            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        function listarAulasPorPorteiro($id){
            $sql = "SELECT aula.id, chave.descricao as descricaoChave, aula.descricao, aula.hora, aula.data, aula.horaE
            , aula.dataE, aula.idProfessor, aula.idAluno, aula.idPorteiro  FROM aula, chave WHERE aula.idPorteiro=$id 
            and aula.idChave=chave.id";

            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        function listarAulasPorChave($id){
            $sql = "SELECT aula.id, chave.descricao as descricaoChave, aula.descricao, aula.hora, aula.data, aula.horaE
            , aula.dataE, aula.idProfessor, aula.idAluno, aula.idPorteiro  FROM aula, chave WHERE aula.idChave=$id 
            and aula.idChave=chave.id";

            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        function listarAulasPorAula($id){
            $sql = "SELECT aula.id, chave.descricao as descricaoChave, aula.descricao, aula.hora, aula.data, aula.horaE
            , aula.dataE, aula.idProfessor, aula.idAluno, aula.idPorteiro  FROM aula, chave WHERE aula.id=$id 
            and aula.idChave=chave.id";

            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }



        function selecionar($tabela, $campo, $parametro){
            $sql = "SELECT * FROM $tabela WHERE $campo = $parametro";
            try{
                $resultado = $this->con->query($sql);
                return $resultado;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        
        function deletarPorCampo($tabela, $campo, $parametro){
            $sql = "DELETE FROM $tabela WHERE $campo = '$parametro'";
            try{
                $this->con->exec($sql);
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        
        function deletarPorId($tabela, $id){
            $sql = "DELETE FROM $tabela WHERE id=$id";
            echo $tabela;
            echo $id;
            try{

                $linhas=$this->con->exec($sql);


                if($linhas == 0){
                    
                    $sql="SELECT * FROM $tabela WHERE id=$id";
                    $resultado = $this->con->query($sql);

                    $count=0;
                    foreach($resultado as $r){
                        $count=1;
                    }
                    if($count == 1){
                        echo "<script> alert('$tabela não pode ser deletado(a)');
                        location.href = '../alteracao/principal.php';
                         </script>";
                    }else {
                        echo "<script> alert('$tabela não existe no banco!'); 
                        location.href = '../alteracao/principal.php';
                        </script>";
                    }
                    
                }else if($linhas == 1){
                    echo "<script> alert('$tabela deletado com sucesso'); 
                    location.href = '../alteracao/principal.php';
                    </script>";

                    
                }
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                echo "<script> alert('Erro ao deletar'); </script>";
                return false;
            }
        }
        
        function alterarPorId($tabela, $id, $campo, $parametro){
            $sql = "UPDATE $tabela SET $campo = $parametro WHERE id = $id";
            try{
                $linhas = $this->con->exec($sql);
                if($linhas == 0){
                    
                    $sql="SELECT * FROM $tabela WHERE id=$id";
                    $resultado = $this->con->query($sql);

                    $count=0;
                    foreach($resultado as $r){
                        $count=1;
                    }
                    if($count == 1){
                        echo "<script> alert('$tabela não pode ser alterado(a)');
                        location.href = '../alteracao/principal.php';
                         </script>";
                    }else {
                        echo "<script> alert('$tabela não existe no banco!'); 
                        location.href = '../alteracao/principal.php';
                        </script>";
                    }
                    
                }else if($linhas == 1){
                    echo "<script> alert('$tabela alterado com sucesso'); 
                    location.href = '../alteracao/principal.php';
                    </script>";

                    
                }
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
            
        function alterarAluno($id, $idProfessor, $ativo, $nome, $sobrenome, $dataNascimento, $email, $fone){
            $sql = "UPDATE aluno SET idProfessor=$idProfessor, ativo=$ativo, nome='$nome', sobrenome='$sobrenome',
            dataNascimento='$dataNascimento', email='$email', fone='$fone'  WHERE id=$id";
            
            try{
                $linhas = $this->con->exec($sql);
                if($linhas == 0){
                    
                    $sql="SELECT * FROM aluno WHERE id=$id";
                    $resultado = $this->con->query($sql);

                    $count=0;
                    foreach($resultado as $r){
                        $count=1;
                    }
                    if($count == 1){
                        echo "<script> alert('Aluno não pode ser alterado(a)');
                        location.href = '../alteracao/principal.php';
                         </script>";
                    }else {
                        echo "<script> alert('Aluno não existe no banco!'); 
                        location.href = '../alteracao/principal.php';
                        </script>";
                    }
                    
                }else if($linhas == 1){
                    echo "<script> alert('Aluno alterado com sucesso'); 
                    location.href = '../alteracao/principal.php';
                    </script>";

                    
                }
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function alterarProfessor($id, $sala, $ativo, $nome, $sobrenome, $dataNascimento, $email, $fone){
            $sql = "UPDATE professor SET sala='$sala', ativo=$ativo, nome='$nome', sobrenome='$sobrenome',
            dataNascimento='$dataNascimento', email='$email', fone='$fone'  WHERE id=$id";
            
            try{
                $linhas = $this->con->exec($sql);
                if($linhas == 0){
                    
                    $sql="SELECT * FROM professor WHERE id=$id";
                    $resultado = $this->con->query($sql);

                    $count=0;
                    foreach($resultado as $r){
                        $count=1;
                    }
                    if($count == 1){
                        echo "<script> alert('Professor não pode ser alterado(a)');
                        location.href = '../alteracao/principal.php';
                         </script>";
                    }else {
                        echo "<script> alert('Professor não existe no banco!'); 
                        location.href = '../alteracao/principal.php';
                        </script>";
                    }
                    
                }else if($linhas == 1){
                    echo "<script> alert('Professor alterado com sucesso'); 
                    location.href = '../alteracao/principal.php';
                    </script>";

                    
                }
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function alterarPorteiro($id, $nome, $sobrenome, $dataNascimento, $email, $fone){
            $sql = "UPDATE porteiro SET nome='$nome', sobrenome='$sobrenome',
            dataNascimento='$dataNascimento', email='$email', fone='$fone'  WHERE id=$id";
            
            try{
                $linhas = $this->con->exec($sql);
                if($linhas == 0){
                    
                    $sql="SELECT * FROM porteiro WHERE id=$id";
                    $resultado = $this->con->query($sql);

                    $count=0;
                    foreach($resultado as $r){
                        $count=1;
                    }
                    if($count == 1){
                        echo "<script> alert('Porteiro não pode ser alterado(a)');
                        location.href = '../alteracao/principal.php';
                         </script>";
                    }else {
                        echo "<script> alert('Porteiro não existe no banco!'); 
                        location.href = '../alteracao/principal.php';
                        </script>";
                    }
                    
                }else if($linhas == 1){
                    echo "<script> alert('Porteiro alterado com sucesso'); 
                    location.href = '../alteracao/principal.php';
                    </script>";

                    
                }
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function devolverChave($id, $data, $hora){
            $sql = "UPDATE aula SET dataE='$data', horaE='$hora' WHERE id=$id";
            
            try{
                $linhas = $this->con->exec($sql);
                if($linhas == 0){
                    
                    $sql="SELECT * FROM aula WHERE id=$id";
                    $resultado = $this->con->query($sql);

                    $count=0;
                    foreach($resultado as $r){
                        $count=1;
                    }
                    if($count == 1){
                        echo "<script> alert('Alocação não pode ser alterado(a)');
                        location.href = '../alteracao/principal.php';
                         </script>";
                    }else {
                        echo "<script> alert('Alocação não existe no banco!'); 
                        location.href = '../alteracao/principal.php';
                        </script>";
                    }
                    
                }else if($linhas == 1){
                    echo "<script> alert('Alocação alterada com sucesso'); 
                    location.href = '../alteracao/principal.php';
                    </script>";

                    
                }
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        function verificarChave($id){
            
            $sql = "select count(*) as contador from aula where aula.idChave=$id and aula.dataE is null";
            try{
                $resultado = $this->con->query($sql);
                foreach($resultado as $r){
                    if($r['contador'] != 0){
                        echo "<script> alert('Verifique a disponibilidade da chave');
                        location.href = '../cadastro/alocarChave.php';
                         </script>";
                        return true;
                    }else{

                        return false;
                    }
                }
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }


    }
        
?>
