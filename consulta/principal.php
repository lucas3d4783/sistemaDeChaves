<html>
    <head>
        <title> Consulta </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="../js/batman.js"></script>
        <?php include_once "../crud/Conexao.class.php";?>
        <?php include_once "../crud/professor.php";?>
        <?php include_once "../crud/chave.php";?>
        <?php include_once "../crud/porteiro.php";?>
        <?php include_once '../crud/aula.php'; ?>
        <?php include_once '../crud/aluno.php'; ?>
        <meta charset="UTF-8"/>

        
        
    </head>

    <body>
        <input type="hidden" id="tipoTela" name="tipoTela" value="consultar">

        <div id="geral">
        
            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>
            
            <br>
            <h2 id="titulo"> Selecione um campo para buscar </h2>
            
            

            <script> confMenus();</script>
            
            <div id="conteudo">
                
                   
                <div id="container-cadastro">
                    <form action='./principal.php' method='POST'>
                        <div id="escolher">
                            <select id="selecionado" name="selecionado" class="form-control" onchange="selecionarListar();">
                                <option value="0">Nenhum</option>
                                <option value="1">Aluno</option>
                                <option value="2">Chave</option>
                                <option value="3">Professor</option>
                                <option value="4">Porteiro</option>
                                <option value="5">Alocações</option>
                            </select>
                        </div>

                        <div id="consulta">
                            <?php
                                echo "<br>";
                                
                                if(isset($_POST['selecionado'])){
                                    $selecionado = $_POST['selecionado'];
                                    if($selecionado  == 1){ //aluno
                                        echo "<script>  document.getElementById('selecionado').value = '1'; </script>";
                                        echo listarAlunos();
                                    }else if ($selecionado  == 2){ //chave
                                        echo "<script>  document.getElementById('selecionado').value = '2'; </script>";
                                        echo listarChaves();
                                    }else if ($selecionado  == 3){ //professor
                                        echo "<script>  document.getElementById('selecionado').value = '3'; </script>";
                                        echo listarProfessores();
                                    }else if ($selecionado  == 4){ //porteiro
                                        echo "<script>  document.getElementById('selecionado').value = '4'; </script>";
                                        echo listarPorteiros();
                                    }else if ($selecionado  == 5){ //aula
                                        echo "<script>  document.getElementById('selecionado').value = '5'; </script>";
                                        echo listarAulas();
                                    }else if($selecionado  == 0){ //nenhum
                                        echo "<script>  document.getElementById('selecionado').value = '0'; </script>";
                                    }
                                }

                            ?>

                            
                        </div>
                        
                        <button type="submit" class="btn btn-success btn-block">Consultar</button>

                        <br>
                        <br>

                        <h2 id="procurarPor">Procurar alocações</h2>
                        <form action='./principal.php' method='POST'>
                            <input type="hidden" id="escolhido" name="escolhido">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="number" class="form-control" name="id" placeholder="id">
                            </div>
                            <?php
                                echo "<br>";
                                if(isset($_POST['escolhido']) && !empty($_POST['escolhido'])){
                                    
                                    $selecionado = $_POST['escolhido'];

                                    $id = $_POST['id'];

                                    if($selecionado  == 'aluno'){ //aluno
                                        echo "aluno";
                                        echo "<script>  document.getElementById('selecionado').value = '1'; </script>";
                                        echo listarAulasPor($selecionado, $id);
                                    }else if ($selecionado  == 'chave'){ //chave
                                        echo "<script>  document.getElementById('selecionado').value = '2'; </script>";
                                        echo listarAulasPor($selecionado, $id);
                                    }else if ($selecionado  == 'professor'){ //professor
                                        echo "<script>  document.getElementById('selecionado').value = '3'; </script>";
                                        echo listarAulasPor($selecionado, $id);
                                    }else if ($selecionado  == 'porteiro'){ //porteiro
                                        echo "<script>  document.getElementById('selecionado').value = '4'; </script>";
                                        echo listarAulasPor($selecionado, $id);
                                    }else if ($selecionado  == 'aula'){ //aula
                                        echo "<script>  document.getElementById('selecionado').value = '5'; </script>";
                                        echo listarAulasPor($selecionado, $id);
                                    }else if($selecionado  == 0){ //nenhum
                                        echo "<script>  document.getElementById('selecionado').value = '0'; </script>";
                                    }
                                }

                            ?>


                            <button type="submit" class="btn btn-success btn-block">Consultar</button>
                        </form>

                    </form>

                </div>

                

 
                
                <script>selecionarListar();</script>

            </div>


            <?php include '../includes/rodape.html'?>
        </div>
    
    </body>
</html>