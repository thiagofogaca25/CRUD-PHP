<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #f7f7f7;
        }
        .container {
            text-align: center;
        }
        h2 { color: #333; }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, button {
            width: 90%;
            padding: 10px;
            margin-top: 10px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Usuário</h2>
        <form action="index.php?path=update" method="POST">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <input type="text" name="name" value="<?= $user['name'] ?>" required>
            <input type="email" name="email" value="<?= $user['email'] ?>" required>
            <button type="submit">Atualizar</button>
        </form>
        <a href="index.php?path=users">← Voltar</a>
    </div>
</body>
</html>
