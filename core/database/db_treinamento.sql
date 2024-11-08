-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/11/2024 às 19:47
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_treinamento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `conteudo`, `data`, `autor`) VALUES
(1, 'Primeiro Post', 'Conteúdo do primeiro post.', '2024-11-08', 1),
(2, 'Reflexões da Semana', 'Algumas reflexões sobre a semana que passou.', '2024-11-07', 2),
(3, 'Tecnologia e Inovação', 'Discussão sobre as últimas tendências em tecnologia.', '2024-11-06', 3),
(4, 'Viagens e Aventuras', 'Relato sobre uma aventura recente.', '2024-11-05', 4),
(5, 'Comida e Cultura', 'Exploração da comida em diferentes culturas.', '2024-11-04', 5),
(6, 'Dicas de Produtividade', 'Algumas dicas para melhorar a produtividade no trabalho.', '2024-11-03', 6),
(7, 'Leituras Recentes', 'Resumo dos livros lidos no último mês.', '2024-11-02', 7),
(8, 'A Importância da Educação', 'Reflexão sobre o impacto da educação na sociedade.', '2024-11-01', 8),
(9, 'História da Música', 'Um olhar sobre a evolução da música ao longo dos anos.', '2024-10-31', 9),
(10, 'Fotografia e Arte', 'Exploração do mundo da fotografia.', '2024-10-30', 10),
(11, 'Esporte e Saúde', 'A importância do esporte para a saúde.', '2024-10-29', 11),
(12, 'Habilidades para o Futuro', 'Habilidades que serão essenciais no futuro.', '2024-10-28', 12),
(13, 'Desafios Ambientais', 'Discussão sobre os desafios ambientais atuais.', '2024-10-27', 13),
(14, 'Tecnologia e Sociedade', 'Como a tecnologia afeta a sociedade.', '2024-10-26', 14),
(15, 'Economia Global', 'Visão sobre o estado atual da economia global.', '2024-10-25', 15),
(16, 'Jogos e Entretenimento', 'A influência dos jogos no entretenimento moderno.', '2024-10-24', 16),
(17, 'Cultura e Tradição', 'Exploração de culturas e tradições pelo mundo.', '2024-10-23', 17),
(18, 'Ciência e Descobertas', 'Últimas descobertas no campo da ciência.', '2024-10-22', 18),
(19, 'Animais e Meio Ambiente', 'A relação entre os animais e o meio ambiente.', '2024-10-21', 19),
(20, 'História e Sociedade', 'Como a história molda a sociedade moderna.', '2024-10-20', 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Alice Santos', 'alice.santos@example.com', 'senha123'),
(2, 'Bruno Oliveira', 'bruno.oliveira@example.com', 'segredo456'),
(3, 'Carla Mendes', 'carla.mendes@example.com', 'minhasenha789'),
(4, 'Daniel Souza', 'daniel.souza@example.com', 'senha321'),
(5, 'Eduarda Almeida', 'eduarda.almeida@example.com', 'senha654'),
(6, 'Felipe Costa', 'felipe.costa@example.com', '123senha'),
(7, 'Gabriela Rocha', 'gabriela.rocha@example.com', 'senha987'),
(8, 'Hugo Lima', 'hugo.lima@example.com', 'segredo123'),
(9, 'Isabela Ribeiro', 'isabela.ribeiro@example.com', 'senha987'),
(10, 'João Fernandes', 'joao.fernandes@example.com', 'minhasenha321'),
(11, 'Karina Silva', 'karina.silva@example.com', 'senha456'),
(12, 'Lucas Martins', 'lucas.martins@example.com', 'segredo789'),
(13, 'Mariana Alves', 'mariana.alves@example.com', 'senha654'),
(14, 'Nicolas Castro', 'nicolas.castro@example.com', 'senha321'),
(15, 'Olivia Santos', 'olivia.santos@example.com', 'senha987'),
(16, 'Pedro Gonçalves', 'pedro.goncalves@example.com', 'segredo123'),
(17, 'Quésia Carvalho', 'quesia.carvalho@example.com', 'minhasenha456'),
(18, 'Roberta Ferreira', 'roberta.ferreira@example.com', 'senha789'),
(19, 'Thiago Silva', 'thiago.silva@example.com', 'segredo654'),
(20, 'Vanessa Pinto', 'vanessa.pinto@example.com', 'senha321');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor` (`autor`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
