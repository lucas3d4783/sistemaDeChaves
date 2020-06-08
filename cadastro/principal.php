<html>
    <head>
        <title> Cadastro </title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript" src="../js/batman.js"></script>
        <meta charset="UTF-8"/>
        <?php include_once '../crud/professor.php' ?>
        
    </head>

    <body>
        <input type="hidden" id="tipoTela" name="tipoTela" value="cadastrar">

        <div id="geral">
        
            <?php include '../includes/cabecalho.html'?>
            <?php include '../includes/menuLateralCollapsedSidebar.html'?>
            
            <script>confMenus();</script>
            
            <div id="conteudo">
                <div id="escolher">
                    <select id="selecionado" class="form-control" onchange="selecionar()">
                        <option value="0">Nenhum</option>
                        <option value="1">Aluno</option>
                        <option value="2">Chave</option>
                        <option value="3">Professor</option>
                        <option value="4">Porteiro</option>
                    </select>
                </div>
                

                <div id="aluno">
                    <?php include 'aluno.php' ?>
                </div>

                <div id="chave">
                    <?php include 'chave.php' ?>
                </div>

                <div id="professor">
                    <?php include 'professor.php' ?>
                </div>
               
                <div id="porteiro">
                    <?php include 'porteiro.php' ?>
                </div>
                
                <script>selecionar();</script>
                

            </div>


            <?php include '../includes/rodape.html'?>
        </div>
    
    </body>
</html>