<?php
$host = 'localhost';
$usuario 'root';
$senha = '';
$banco = 'biblioteca';

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica a conexão
if (mysqli_connect_errno()) {
    echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
    exit();
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Verifica se todos os campos foram preenchidos
    if (!empty($_POST['nome usuario']) && !empty($_POST['data_reserva']) && !empty($_POST['livro'])) { 
        // Obtém os valores dos campos do formulário
        $nomeUsuario = $_POST['nome_usuario'];
        $dataReserva = $_POST['data_reserva'];
        $livroId = $_POST['livro'];

        // Prepara a consulta SQL para inserção da reserva
        $sql = "INSERT INTO reserva (nome usuario, data_reserva, livro_id) VALUES ('$nomeUsuario', '$dataReserva', $livroId)";

        // Executa a consulta SQL
        if (mysqli_query($conexao, $sql)) { 
            echo "Reserva cadastrada com sucesso!";
        } else {
            echo "Erro ao cadastrar reserva:" . mysqli_error($conexao);
        }
    } else { 
        echo "Por favor, preencha todos os campos do formulário.";
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>