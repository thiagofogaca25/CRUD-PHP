# 📘 CRUD de Usuários em PHP

Este é um projeto simples de CRUD (Create, Read, Update, Delete) de usuários utilizando **PHP** puro com **PDO** para conexão com o banco de dados MySQL.

## 🛠 Funcionalidades

- ✅ Cadastro de usuários
- ✅ Listagem de usuários
- ✅ Edição de usuários
- ✅ Exclusão de usuários
- ✅ Interface visual simples e responsiva

---

## 🚀 Como usar

### 1. Clonar o repositório

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```

### 2. Criar o banco de dados MySQL

Execute o seguinte script SQL:

```sql
CREATE DATABASE crud;
USE crud;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL
);
```

### 3. Configurar o banco de dados

No arquivo `db.php`, altere as credenciais de conexão conforme necessário:

```php
$host = 'localhost';
$db   = 'crud';
$user = 'root';
$pass = 'root';
```

### 4. Rodar o servidor PHP local

```bash
php -S localhost:8000
```

Depois acesse:\
📍 [http://localhost:8000](http://localhost:8000)

---

## 📂 Estrutura de Pastas

```
crud-php/
├── controllers/
│   └── UserController.php
├── views/
│   ├── create.php
│   ├── edit.php
│   └── list.php
├── index.php
├── routes.php
└── db.php
```

---

## 🧠 Lógica das Rotas

As rotas são manipuladas pelo arquivo `routes.php`, através do parâmetro `path` na URL:

| Caminho                      | Ação                       |
| ---------------------------- | -------------------------- |
| `index.php?path=users`       | Listar usuários            |
| `index.php?path=create`      | Formulário de cadastro     |
| `index.php?path=store`       | Salvar novo usuário (POST) |
| `index.php?path=edit&id=1`   | Formulário de edição       |
| `index.php?path=update`      | Atualizar usuário (POST)   |
| `index.php?path=delete&id=1` | Excluir usuário            |

---

## 💡 Tecnologias Utilizadas

- PHP (sem frameworks)
- PDO (para acesso ao MySQL)
- HTML e CSS (interfaces simples)


