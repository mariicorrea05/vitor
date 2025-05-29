# Projeto Laravel – Sistema de Cadastro (CRUD)

## 📌 Projeto

Este projeto é um **sistema de gerenciamento simples** com interface web para cadastro e controle de:

- **Produtos**
- **Tipos de Produtos**
- **Fornecedores**
- **Clientes**

O objetivo é demonstrar a criação de uma aplicação web completa usando **Laravel**, o principal framework PHP do mercado, com **padrões MVC (Model-View-Controller)**, **migrations**, **rotas RESTful** e **views Blade**.

---

## 🧱 Estrutura do Projeto

### 📁 Models

Representam as tabelas do banco de dados e contêm a lógica de acesso aos dados:

- `Produto`: id, nome, preco, tipo_produto_id, fornecedor_id
- `Fornecedor`: id, nome, email, telefone
- `Cliente`: id, nome, email, telefone
- `TipoProduto`: id, nome

### 📁 Migrations

Scripts para criar as tabelas no banco. Exemplo:

```php
Schema::create('fornecedores', function (Blueprint $table) {
    $table->id();
    $table->string('nome');
    $table->string('email')->nullable();
    $table->string('telefone')->nullable();
    $table->timestamps();
});
```

### 📁 Controllers

Contêm a lógica da aplicação:

- `ProdutoController`
- `FornecedorController`
- `ClienteController`
- `TipoProdutoController`

Cada controller implementa os métodos padrão:

- `index()` → listar registros
- `create()` → formulário de criação
- `store()` → salvar novo registro
- `edit()` → editar registro
- `update()` → atualizar no banco
- `destroy()` → excluir
- `show()` → visualizar detalhes

### 📁 Views

Usamos Blade (`resources/views/`), o sistema de templates do Laravel. Criamos pastas e arquivos como:

- `produtos/index.blade.php`
- `fornecedores/create.blade.php`
- `clientes/edit.blade.php`
- etc.

### 📁 Routes

As rotas são registradas em `routes/web.php` usando `Route::resource()`:

```php
Route::resource('produtos', ProdutoController::class);
```

---

## 🛠️ Requisitos para Executar o Projeto

### ✅ Softwares Necessários

1. **PHP 8.1+**
2. **Composer** (gerenciador de dependências PHP)
3. **MySQL** ou **MariaDB**
4. **Laravel** (instalado via Composer)
5. **Servidor local** (XAMPP, Laragon, ou usar `php artisan serve`)

---

## ▶️ Como Executar o Projeto

### 1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/seu-projeto.git
cd seu-projeto
```

### 2. Instale as dependências

```bash
composer install
```

### 3. Crie o arquivo `.env`

```bash
cp .env.example .env
```

Configure as variáveis de ambiente:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Rode as migrations

```bash
php artisan migrate
```

### 5. Inicie o servidor

```bash
php artisan serve
```

Acesse via navegador:

```
http://127.0.0.1:8000/produtos
```

---

## 💡 Como Funciona

- O usuário acessa via navegador.
- Laravel resolve a rota e chama o Controller correspondente.
- O Controller acessa os dados com o Model.
- A View é renderizada com Blade.
- O resultado aparece para o usuário com formulários, botões, listas etc.

---

## 🧠 Conceitos Aprendidos

- Padrão **MVC**
- Migrations e **mapeamento de tabelas**
- **Rotas RESTful**
- **Blade Templating**
- **CRUD completo**
- **Relacionamentos** entre entidades (`belongsTo`, `hasMany`)
- Boas práticas de organização em Laravel

---

## ✅ Resultado Final

Um sistema funcional com cadastro de:

- Produtos vinculados a um tipo e fornecedor
- Gerenciamento separado de fornecedores, clientes e tipos de produto
- Interface simples para CRUD
- Facilidade de extensão para relatórios, filtros, autenticação, etc.