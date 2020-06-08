

<div id="container-cadastro">
    
    <form action='../crud/cadastrar.php' method='post'>
        <input type="hidden" id="tipo" name="tipo" value="aluno">
        
        <h2>Cadastrar aluno</h2>
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
            <label>Professor Responsável</label>
            <select name='professorSelecionado' id='professorSelecionado' class="form-control" onchange="selecionar()">
                <!-- <option value="0">Nenhum</option> --> <!-- Colocar no value o id e no texto o nome completo do professo -->
                <?php 
                    echo getListaProfessores();
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Status</label> <br>
            <input type="radio" name="status" value="ativado"> Ativado 
            <input type="radio" name="status" value="desativado" > Desativado <br>
        </div>
        
      
        <button type="submit" class="btn btn-success btn-block">Cadastrar</button>

    </form>
</div>
