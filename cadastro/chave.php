
<div id="container-cadastro">
    
    <form action='../crud/cadastrar.php' method='POST'>
        <input type="hidden" id="tipo" name="tipo" value="chave">
        <h2>Cadastrar chave</h2>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <input type="text" class="form-control" name="descricao" placeholder="Especificar a porta/sala que a chave é destinada.">
        </div>
        
        <button type="submit" class="btn btn-success btn-block">Cadastrar</button>

    </form>
</div>
