# 🐱 Garfield - Rede Social

Um site de rede social dedicado ao famoso gato Garfield, onde fãs podem compartilhar posts com imagens e interagir com outros usuários.

## 📋 Índice

- [Funcionalidades](#funcionalidades)
- [Requisitos](#requisitos)
- [Instalação](#instalação)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Banco de Dados](#banco-de-dados)
- [Como Usar](#como-usar)
- [Segurança](#segurança)
- [Melhorias Futuras](#melhorias-futuras)

## ✨ Funcionalidades

- ✅ Sistema de cadastro e login de usuários
- ✅ Perfil de usuário com bio personalizável
- ✅ Criar posts com título, descrição e até 2 imagens (máx 10MB cada)
- ✅ Visualizar posts de outros usuários
- ✅ Editar e deletar próprios posts
- ✅ Trocar senha
- ✅ Alterar bio do perfil
- ✅ Navegação responsiva com Bootstrap 5

## 🛠️ Requisitos

- PHP 7.4+
- MySQL/MariaDB
- XAMPP (ou servidor PHP equivalente)
- Navegador moderno (Chrome, Firefox, Safari, Edge)

## 🗄️ Banco de Dados

### Tabela: tb_user

| Campo | Tipo | Descrição |
|-------|------|-----------|
| cd_user | INT | ID único (PK, Auto-increment) |
| email | VARCHAR(100) | Email do usuário (Único) |
| username | VARCHAR(80) | Nome de usuário |
| bios | VARCHAR(100) | Bio/descrição do perfil |
| is_admin | INT(1) | Flag de admin (0 ou 1) |
| senha | VARCHAR(100) | Senha hasheada |
| img_perfil | BLOB | Foto de perfil |

### Tabela: tb_post

| Campo | Tipo | Descrição |
|-------|------|-----------|
| cd_post | INT | ID único (PK, Auto-increment) |
| titulo | VARCHAR(50) | Título do post |
| img_post1 | LONGBLOB | Primeira imagem |
| img_post2 | LONGBLOB | Segunda imagem |
| dsc_post | TEXT | Descrição/conteúdo do post |
| user | INT | ID do autor (FK → tb_user) |

## 🚀 Como Usar

### 1. Criar Conta

- Acesse http://localhost/sarah/public/new-user.php
- Preencha e-mail, usuário e senha
- Clique em "Cadastrar"

### 2. Fazer Login

- Vá para http://localhost/sarah/public/login.php
- Digite e-mail/usuário e senha
- Será redirecionado para o feed

### 3. Criar Post

- Clique em "Diga o que está pensando aqui!"
- Preencha título e descrição
- Adicione até 2 imagens (máx 10MB cada)
- Clique em "Enviar Post"

### 4. Gerenciar Perfil

- Clique no ícone do perfil na navbar
- Altere sua bio ou senha conforme necessário
- Visualize e delete seus próprios posts


## 🔧 Melhorias Futuras

- [ ] Migrar de `mysqli` para `PDO` 
- [ ] Implementar `password_hash()` ao invés de SHA1
- [ ] Validação/sanitização de inputs no frontend e backend
- [ ] Sistema de comentários nos posts
- [ ] Sistema de likes/reações
- [ ] Busca de posts e usuários
- [ ] Notificações em tempo real
- [ ] Upload de foto de perfil
- [ ] Tema dark/light
- [ ] HTTPS/SSL em produção

## 📝 Notas

- As imagens são salvas em `img_posts/` com nomes únicos
- Sessões usam `$_SESSION['id']` para manter usuário logado
- Bootstrap 5 é usado para componentes responsivos
- CSS customizado em `styles.css`

## 🤝 Contribuições

Este é um projeto educacional. Sinta-se livre para melhorar o código!

---

**Desenvolvido com ❤️ para uma fã de Garfield**
