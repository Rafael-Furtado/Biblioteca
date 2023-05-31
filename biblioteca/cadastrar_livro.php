<?php
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'livraria';

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    $sql = "INSERT INTO livro (titulo,autor,ano) VALUES ('$titulo','$autor','$ano') ";

    $resultado = mysqli_query($conexao,$sql);

    if ($resultado){
        echo 'Livro Cadastrado com Sucesso';
    }
    else {
        echo 'Erro ao Cadastrar o Livro';
    }

    mysqli_close($conexao);
?>