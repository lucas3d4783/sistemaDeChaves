
function esconder(){ //esconder os as telas de cadastro
    document.getElementById("aluno").style.display = "none";
    document.getElementById("chave").style.display = "none";
    document.getElementById("porteiro").style.display = "none";
    document.getElementById("professor").style.display = "none";
}

//selecionar qual interface de cadastro deve ser mostrada na tela principal
function selecionar(){
    var value = document.getElementById("selecionado").value;
    if(value == 1){ //aluno
        document.getElementById("aluno").style.display = "block";
        document.getElementById("chave").style.display = "none";
        document.getElementById("porteiro").style.display = "none";
        document.getElementById("professor").style.display = "none";
    }else if (value == 2){ //chave
        document.getElementById("aluno").style.display = "none";
        document.getElementById("chave").style.display = "block";
        document.getElementById("porteiro").style.display = "none";
        document.getElementById("professor").style.display = "none";
    }else if (value == 3){ //professor
        document.getElementById("aluno").style.display = "none";
        document.getElementById("chave").style.display = "none";
        document.getElementById("porteiro").style.display = "none";
        document.getElementById("professor").style.display = "block";
    }else if (value == 4){ //porteiro
        document.getElementById("aluno").style.display = "none";
        document.getElementById("chave").style.display = "none";
        document.getElementById("porteiro").style.display = "block";
        document.getElementById("professor").style.display = "none";
    }else if(value == 0){ //nenhum
        document.getElementById("aluno").style.display = "none";
        document.getElementById("chave").style.display = "none";
        document.getElementById("porteiro").style.display = "none";
        document.getElementById("professor").style.display = "none";
    }
    

}


//mostrar ou não menu superior e lateral, dependendo do tipo de tela 
function confMenus(){
    
    var value = document.getElementById("tipoTela").value;
    switch(value) {
        case "principal":
            document.getElementById("main").style.display = "none";
            document.getElementById("mySidebar").style.width = "15%";
            document.getElementById("btInicio").style.color = "rgb(0, 80, 255)";
            break;
        case "cadastrar":
            document.getElementById("btCadastrar").style.color = "rgb(0, 80, 255)";
            break;
        case "alterar":
            document.getElementById("btAlterar").style.color = "rgb(0, 80, 255)";
            break;
        case "consultar":
            document.getElementById("btConsultar").style.color = "rgb(0, 80, 255)";
            break;
        case "alocarChave":
            document.getElementById("btAlocar").style.color = "rgb(0, 80, 255)";
            break;

        case "devolverChave":
            document.getElementById("btDevolver").style.color = "rgb(0, 80, 255)";
            break;
        case "inicio":
            document.getElementById("btInicio").style.color = "rgb(0, 80, 255)";
            break;

        default:
          // code block
    } 
    
}


function selecionarTipoResponsavel(){
    var value = document.getElementById("comboSelecionado").value;
    if(value == 0){ //professor
        document.getElementById("comboProfessores").style.display = "block";
        document.getElementById("comboAlunos").style.display = "none";
    }else if(value == 1){ //aluno
        document.getElementById("comboProfessores").style.display = "none";
        document.getElementById("comboAlunos").style.display = "block";
    }
} 


//selecionar dados a serem listados
function selecionarListar(){
    var value = document.getElementById("selecionado").value;
    if(value == 1){ //aluno
        document.getElementById("titulo").innerHTML = "Alunos cadastrados";
        document.getElementById("procurarPor").innerHTML = "Procurar Alocações por Aluno";
        document.getElementById("escolhido").value="aluno";
    }else if (value == 2){ //chave
        document.getElementById("titulo").innerHTML = "Chaves cadastradas";
        document.getElementById("procurarPor").innerHTML = "Procurar Alocações por Chave";
        document.getElementById("escolhido").value="chave";
    }else if (value == 3){ //professor
        document.getElementById("titulo").innerHTML = "Professores cadastrados";
        document.getElementById("procurarPor").innerHTML = "Procurar Alocações por Professor";
        document.getElementById("escolhido").value="professor";
    }else if (value == 4){ //porteiro
        document.getElementById("titulo").innerHTML = "Porteiros cadastrados";
        document.getElementById("procurarPor").innerHTML = "Procurar alocações por Porteiro";
        document.getElementById("escolhido").value="porteiro";
    }else if (value == 5){ //alocações
        document.getElementById("titulo").innerHTML = "Alocações";
        document.getElementById("procurarPor").innerHTML = "Procurar Alocações";
        document.getElementById("escolhido").value="aula";
    }else if(value == 0){ //nenhum
        document.getElementById("titulo").innerHTML = "Selecione um campo de busca";
        document.getElementById("procurarPor").innerHTML = "Selecione um Campo para Procurar";
        document.getElementById("escolhido").value="0";
    }
}

function echoTeste(){
    document.getElementById("teste").innerHTML = "teste";
}

function getCampoSelecionado(){
    var value = document.getElementById("selecionado").value;
    if(value == 1){ //aluno
        document.getElementById("selecionado").value = "aluno";
    }else if (value == 2){ //chave
        document.getElementById("selecionado").value = "chave";
    }else if (value == 3){ //professor
        document.getElementById("selecionado").value="professor";
    }else if (value == 4){ //porteiro
        document.getElementById("selecionado").value = "porteiro";
    }else if(value == 0){ //nenhum
        document.getElementById("selecionado").value = "aluno";
    }

}

function selecionarChave(){
    var value  = document.getElementById("selecionado").value;
    alert(value);
}