<?php
require_once 'db.php';

class UserController
{
    public static function index()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM users");
        $users = $stmt->fetchAll();
        include 'views/list.php';
    }

    public static function create()
    {
        include 'views/create.php';
    }

    public static function store($data)
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $stmt->execute([$data['name'], $data['email']]);
        header("Location: index.php?path=users");
    }

    public static function edit($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch();
        include 'views/edit.php';
    }

    public static function update($id, $data)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
        $stmt->execute([$data['name'], $data['email'], $id]);
        header("Location: index.php?path=users");
    }

    public static function delete($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
        header("Location: index.php?path=users");
    }
}
