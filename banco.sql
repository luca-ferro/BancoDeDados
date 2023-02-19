CREATE TABLE clientes (
  idCliente INT PRIMARY KEY  NOT NULL AUTO_INCREMENT,
  pnome VARCHAR(50) NOT NULL,
  unome VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  celular VARCHAR(20) NOT NULL
);

CREATE TABLE categorias (
  categoria INT PRIMARY KEY,
  nomeCategoria VARCHAR(100) NOT NULL
);

CREATE TABLE produtos (
  idProduto INT PRIMARY KEY,
  nomeProduto VARCHAR(100) NOT NULL,
  descricao TEXT NOT NULL,
  preco DECIMAL(10, 2) NOT NULL,
  quantidade INT NOT NULL,
  categoria INT NOT NULL,
  FOREIGN KEY (categoria) REFERENCES categorias (categoria) ON DELETE CASCADE
);

CREATE TABLE pedidos (
  idPedido INT PRIMARY KEY,
  idCliente INT NOT NULL,
  dataPedido DATE NOT NULL,
  total DECIMAL(10, 2) NOT NULL,
  FOREIGN KEY (idCliente) REFERENCES clientes (idCliente) ON DELETE CASCADE
);

CREATE TABLE detalhesPedido (
  idDetalhes INT PRIMARY KEY,
  idPedido INT NOT NULL,
  idProduto INT NOT NULL,
  quantidade INT NOT NULL,
  preco DECIMAL(10, 2) NOT NULL,
  FOREIGN KEY (idPedido) REFERENCES pedidos (idPedido) ON DELETE CASCADE,
  FOREIGN KEY (idProduto) REFERENCES produtos (idProduto) ON DELETE CASCADE
);

INSERT INTO clientes (idCliente, pnome, unome, email, senha, endereco, celular)
VALUES
  (001, 'João', 'Silva', 'joaosilva@email.com', 'senha123', '123 Rua Principal', '555-555-5555'),
  (002, 'Maria', 'Souza', 'mariasouza@email.com', 'senha456', '456 Rua Principal', '555-555-5556'),
  (003, 'Pedro', 'Almeida', 'pedroalmeida@email.com', 'senha789', '789 Rua Principal', '555-555-5557');

INSERT INTO categorias (categoria, nomeCategoria)
VALUES
  (1, 'Esportes'),
  (2, 'Roupas'),
  (3, 'Suplementos');

INSERT INTO produtos (idProduto, nomeProduto, descricao, preco, quantidade, categoria)
VALUES
  (1, 'Bola de Futebol', 'Bola oficial da FIFA para jogos de futebol', 19.99, 10, 1),
  (2, 'Raquete de Tênis', 'Raquete de tênis de alta qualidade para jogadores avançados', 99.99, 5, 1),
  (3, 'Chuteira', 'Chuteira para jogadores de futebol profissionais', 129.99, 20, 1),
  (4, 'Camiseta do Galo', 'Camiseta oficial do clube Atletico Mineiro', 59.99, 20, 2),
  (5, 'Calça Jeans Skinny', 'Calça jeans skinny preta com cós alto e bolsos traseiros', 89.99, 15, 2),
  (6, 'Vestido de Verão', 'Vestido de verão azul claro com alças finas e decote ombro a ombro', 99.99, 10, 2),
  (7, 'Proteína em Pó', 'Proteína em pó sabor baunilha com 25 gramas de proteína por porção', 39.99, 50, 3),
  (8, 'Creatina Monohidratada', 'Creatina monohidratada em pó com 5000 mg por porção', 29.99, 40, 3),
  (9, 'BCAA Aminoácidos', 'Aminoácidos BCAA em pó com 5000 mg por porção', 34.99, 30, 3);

INSERT INTO pedidos (idPedido, idCliente, dataPedido, total)
VALUES
  (1, 001, '2022-12-01', 200.00),
  (2, 002, '2022-12-02', 150.00),
  (3, 003, '2022-12-03', 125.00);

INSERT INTO detalhesPedido (idDetalhes, idPedido, idProduto, quantidade, preco)
VALUES
  (1, 1, 1, 2, 19.99),
  (2, 1, 2, 1, 99.99),
  (3, 2, 3, 3, 129.99),
  (4, 3, 1, 5, 19.99);