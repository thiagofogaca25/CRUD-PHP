<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f2f5; padding: 20px; }
        h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.05); }
        th, td { padding: 12px; border: 1px solid #ccc; text-align: left; }
        th { background: #f2f2f2; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .novo { display: inline-block; margin-bottom: 15px; background: #28a745; color: white; padding: 10px 15px; border-radius: 5px; text-decoration: none; }
        .novo:hover { background: #218838; }
    </style>
</head>
<body>
    <h2>Usuários</h2>
    <a class="novo" href="index.php?path=create">+ Cadastrar Novo</a>
    <table>
        <tr>
            <th>ID</th><th>Nome</th><th>Email</th><th>Ações</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="index.php?path=edit&id=<?= $user['id'] ?>">Editar</a> |
                    <a href="index.php?path=delete&id=<?= $user['id'] ?>" onclick="return confirm('Deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
