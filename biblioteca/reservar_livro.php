1 <!DOCTYPE html>
2
<html lang="pt">
3 <head>
4
<meta charset="UTF-8">
5 6
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
71 <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
8
<title>Reservar Livro</title>
9 10 <body>
-</head>
11
<h1> Reserve seu Livro </h1>
12
<form method="post" action="cadastrar_reserva.php">
13
<label> Nome Usuário </label>
14
<input type="text" name="nome_usuario">
15
<label> Data Reserva </label>
16
<input type="date" name="data_reserva">
17
<label for="Livro"> Selecione o Livro: </label>
18
<
select id="Livro" name="livro">
19
<option value=""> Selecione um Livro </option>
20 ~
<?php
21 ~
$host 'localhost';
22
$usuario 'root';
23 ~
$senha '';
24
$banco 'biblioteca'; =
25 ~
26 27 ~~
$conexao mysqli_connect ($host, $usuario, $senha, $banco); =
28 ~
$sql = "select id, titulo from livro"; $resultado = mysqli_query($conexao, $sql);
29
30 mm
31
while ($row mysqli_fetch_assoc($resultado)) { =
32 mm
echo "<option value= ".$row["id"].">".$row["titulo"]."</option>"; }
33
34 mm
35
mysqli_close($conexao);
36
?>
37 mm
38
</select> <br> <br>
39 mm
<input type="submit" value="Cadastrar">
40
</form>
41 44
</body>
42
-</html>