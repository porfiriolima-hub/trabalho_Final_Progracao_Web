# programacao_web
Repositório destinado ao Projeto 1 da disciplina de Programação Web professor Daniel Brandão 

# Tema do Projeto
CRUD de Produtos – Sistema de gerenciamento de produtos desenvolvido em PHP e MySQL, com interface HTML e Bootstrap.

# Resumo dos Desafios Implementados
O projeto envolveu:

Criação da pasta produtos/ contendo os arquivos principais do CRUD (listagem, cadastro, edição e exclusão).

Implementação da tabela produtos no banco de dados MySQL com os campos:

- id (chave primária)

- produto

- preco

- estoque

- categoria

- descricao

Integração entre as páginas PHP e o banco de dados, permitindo operações de criar, ler, atualizar e excluir registros.

Criação de um botão “Sistema” no menu principal, que abre uma página com dois cards interativos:

- Portal do Administrador → direciona para admin/index.php.

- Portal de Produtos → direciona para produtos/index.php.

# Instruções Rápidas para Rodar o Projeto
Copie os arquivos do projeto para a pasta htdocs do XAMPP.

Crie o banco de dados e a tabela usando o script SQL fornecido.

Inicie o Apache e o MySQL pelo XAMPP Control Panel.

No navegador, acesse:

http://localhost/meusite/index.php
Clique no menu Sistema e escolha o portal desejado:

Administrador → gerencia o sistema acessando ao CRUD da Pasta Admin.

Produtos → gerencia o sistema acessando o CRUD da pasta produtos.

# Banco de Dados

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `cliente` varchar(150) NOT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
)

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `produto` varchar(150) NOT NULL,
  `preco` decimal(10,2) NOT NULL DEFAULT 0.00,
  `estoque` int(11) NOT NULL DEFAULT 0,
  `categoria` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL
)
