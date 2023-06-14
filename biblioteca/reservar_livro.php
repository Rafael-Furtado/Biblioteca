<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Reservar Livro</title>
</head>
<body>
    <h1> Reserve seu Livro </h1>
    <form method="post" action="cadastrar_reserva.php">
        <label> Nome Usuário </label>
        <input type="text" name="nome_usuario">
        <label> Data Reserva </label>
        <input type="date" name="data_reserva">
        <label for="Livro"> Selecione o Livro: </label>
        <select id="Livro" name="livro">
            <option value=""> Selecione um Livro </option>
            <?php
                $host 'localhost';
                $usuario 'root';
                $senha '';
                $banco 'biblioteca'; 

                $conexao mysqli_connect ($host, $usuario, $senha, $banco); 
                
                $sql = "select id, titulo from livro"; 
                $resultado = mysqli_query($conexao, $sql);
                
                while ($row = mysqli_fetch_assoc($resultado)) { 
                    echo "<option value= ".$row["id"].">".$row["titulo"]."</option>"; 
                }
                
                mysqli_close($conexao);
            ?>

        </select> <br> <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>