
<div id="container-cadastro">
    
    <form action='../crud/alterar.php' method='POST'>
        <input type="hidden" id="tipo" name="tipo" value="chave">
        
        <h2>Alterar chave</h2>
        
        <label>Selecione uma chave</label>
        <select name="chaveSelecionado" id="chaveSelecionado" class="form-control"  onchange="">
            <?php 
                echo getListaChaves();
            ?>
        </select>


        <div class="form-group">
            <label>ID</label>
            <input type="number" class="form-control" name="id" placeholder="id">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <input type="text" class="form-control" name="descricao" placeholder="Especificar a porta/sala que a chave é destinada.">
        </div>
        
        <button name="btSalvar" type="submit" class="btn btn-success btn-block">Salvar</button>
        <button name="btRemover" type="submit" class="btn btn-danger btn-block">Remover</button>

    </form>
</div>
