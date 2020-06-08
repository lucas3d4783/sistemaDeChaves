<?php
    //include_once 'Pessoa.class.php';
    //$pessoa = new Pessoa(1, 'lucas', 'coelho', '13/10/1999', 'lucas3d4783@gmail.com', '190');
    //echo $pessoa->getDados();

    //include_once 'Porteiro.class.php';
    //$porteiro = new Porteiro(1, 'lucas', 'coelho', '13/10/1999', 'lucas3d4783@gmail.com', '190');
    //echo $porteiro->getDados();

    include_once 'Professor.class.php';
    $professor = new Professor(1, 'lucas', 'coelho', '13/10/1999', 'lucas3d4783@gmail.com', '190', '261');
    echo $professor->getDados();

    echo "<br/>";

    include_once 'Aluno.class.php';
    $aluno = new Aluno(1, 'joão', 'coelho', '13/10/1999', 'lucas3d4783@gmail.com', '190', $professor);
    echo $aluno->getDados();


?>