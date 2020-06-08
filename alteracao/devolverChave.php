<html>
    <head>
        <title> Devolução de Chaves </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="../js/batman.js"></script>
        <meta charset="UTF-8"/>
        <?php 
            include_once '../crud/devolucaoChaves.php';
            
        ?>
        
    </head>

    <body>
        <input type="hidden" id="tipoTela" name="tipoTela" value="devolverChave">

        <div id="geral">
        
            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>
            
            <script> confMenus();</script>
            
            <div id="conteudo">
                                
                <div id="container-cadastro">
                    
                    <form action='../crud/devolucaoChaves.php' method='POST'>
                        <input type="hidden" id="tipo" name="tipo" value="devolverChave">
                        <h2>Devolver chave</h2>
                        

                        <div class="form-group" id="comboAulas">
                            <label>Selecione uma alocação</label>
                            <select name="aulaSelecionado" id="aulaSelecionado" class="form-control">
                                <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
                                <?php 
                                    echo getListaAlocacoes();
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>ID da alocação</label>
                            <input type="number" class="form-control" name="id" placeholder="Identificado da alocação">
                        </div>

                        <button type="submit" name="btDevolver" class="btn btn-success btn-block">Devolver chave</button>

                    </form>
                </div>

            </div>


            <?php include '../includes/rodape.html'?>
        </div>
    
    </body>
</html>