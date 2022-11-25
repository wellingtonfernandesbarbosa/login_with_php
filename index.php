<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <h1 class="logo">Logo</h1>
    <div class="formulario">
        <p>Login</p>
        <form method="post" id="form" action="home.php">
            <label for="user">Usuário:</label>
                <input type="text" name="user" id="user" placeholder="Usuário">
            <label for="password">Senha:</label>
                <input type="password" name="password" id="password" placeholder="Senha">
            <br>
                <button type="submit" class="botao" id='botao' onclick=''>Enviar</button>
        </form>
                <button class="botao" onclick='limpar()'>Cancelar</button>
    </div>
    <script src="script.js"></script>
</body>
</html>