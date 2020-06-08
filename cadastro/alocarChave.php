<html>
    <head>
        <title> Alocação de Chaves </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="../js/batman.js"></script>
        <meta charset="UTF-8"/>
        <?php 
            include_once '../crud/professor.php';
            include_once '../crud/aluno.php'; 
            include_once '../crud/chave.php';
            include_once '../crud/porteiro.php';
        ?>
        
    </head>

    <body>
        <input type="hidden" id="tipoTela" name="tipoTela" value="alocarChave">

        <div id="geral">
        
            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>
            
            <script> confMenus();</script>
            
            <div id="conteudo">
                                
                <div id="container-cadastro">
                    
                    <form action='../crud/cadastrar.php' method='POST'>
                        <input type="hidden" id="tipo" name="tipo" value="alocarChave">
                        <h2>Alocar chave</h2>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descrição</label>
                            <input type="text" class="form-control" name="descricao" placeholder="Especificar a aula ministrada.">
                        </div>
                        
                        <div class="form-group">
                            <label>Selecione o tipo de Responsável</label>
                            <select name="comboSelecionado" id="comboSelecionado" class="form-control" onchange="selecionarTipoResponsavel()">
                                <option value="0">Professor</option>
                                <option value="1">Aluno</option>
                            </select>
                        </div>

                        <div class="form-group" id="comboProfessores">
                            <label>Selecione um professor</label>
                            <select name="professorSelecionado" id="professorSelecionado" class="form-control">
                                <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
                                <?php 
                                    echo getListaProfessores();
                                ?>
                            </select>
                        </div>
                        <div class="form-group" id="comboAlunos">
                            <label>Selecione um aluno</label>
                            <select name="alunoSelecionado" id="alunoSelecionado" class="form-control">
                                <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
                                <?php 
                                    echo getListaAlunos();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Selecione uma chave</label>
                            <select name="chaveSelecionada" id="chaveSelecionada" class="form-control">
                                <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
                                <?php 
                                    echo getListaChaves();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Selecione um porteiro</label>
                            <select name="porteiroSelecionado" id="porteiroSelecionado" class="form-control">
                                <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
                                <?php 
                                    echo getListaPorteiros();
                                ?>
                            </select>
                        </div>


                        <!-- date_default_timezone_set(‘America/Sao_Paulo’);
                        echo date('d/m/Y às H:i:s'); 
                        DATA E HORA SERÃO PEGOS DE FORMA AUTOMÁTICA PARA ARMAZENAR NO BANCO, 
                        ASSIM EVITANDO ERROS-->

                        <button type="submit" class="btn btn-success btn-block">Alocar chave</button>
                        <script> selecionarTipoResponsavel(); </script>
                    </form>
                </div>

            </div>


            <?php include '../includes/rodape.html'?>
        </div>
    
    </body>
</html>