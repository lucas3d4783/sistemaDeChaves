
<div id="container-cadastro">
    
    <form action='../crud/cadastrar.php' method='POST'>
        <input type="hidden" id="tipo" name="tipo" value="professor">
        <h2>Cadastrar professor</h2>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label>Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
        </div>
        <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="text" class="form-control" name="dataNascimento" placeholder="Ex: 11/11/1111">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" placeholder="exemplo@exemplo.com">
        </div>
        <div class="form-group">
            <label>Tefone para contato</label>
            <input type="text" class="form-control" name="fone" placeholder="Ex: (11)11111-1111">
        </div>
        <div class="form-group">
            <label>Sala</label>
            <input type="text" class="form-control" name="sala" placeholder="Sala do professor (Ex: 108X)">
        </div>
        <div class="form-group">
            <label>Status</label> <br>
            <input type="radio" name="status" value="ativado"> Ativado 
            <input type="radio" name="status" value="desativado"> Desativado <br>
        </div>
        
        <button type="submit" class="btn btn-success btn-block">Cadastrar</button>
    </form>
</div>
