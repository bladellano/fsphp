-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12/07/2020 às 18:56
-- Versão do servidor: 10.3.22-MariaDB-1ubuntu1
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fullstackphp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `address`
--

CREATE TABLE `address` (
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `street` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `complement` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB AVG_ROW_LENGTH=327 DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `address`
--

INSERT INTO `address` (`user_id`, `id`, `street`, `number`, `complement`, `created_at`, `updated_at`) VALUES
(1, 51, 'rua manoel pedro vieira, 810', '810', 'casa 1', '2020-07-12 19:13:20', NULL),
(2, 52, 'paraguai', '2041', 'casa 1', '2020-07-12 19:13:20', NULL),
(3, 53, 'emilio daroz ', '107', 'casa 1', '2020-07-12 19:13:20', NULL),
(4, 54, 'rua lavinia moreira da silva', '145', 'casa 1', '2020-07-12 19:13:20', NULL),
(5, 55, 'padre anchieta', '121', 'casa 1', '2020-07-12 19:13:20', NULL),
(6, 56, 'rua amoroso costa', '254', 'casa 1', '2020-07-12 19:13:20', NULL),
(7, 57, 'alaor martins', '312', 'casa 1', '2020-07-12 19:13:20', NULL),
(8, 58, 'rua das violetas', '330', 'casa 1', '2020-07-12 19:13:20', NULL),
(9, 59, 'francisco carlos ', '105', 'casa 1', '2020-07-12 19:13:20', NULL),
(10, 60, 'torino', '95', 'casa 1', '2020-07-12 19:13:20', NULL),
(11, 61, 'rua erotidas', '64', 'casa 1', '2020-07-12 19:13:20', NULL),
(12, 62, 'r. orquideas', '169', 'casa 1', '2020-07-12 19:13:20', NULL),
(13, 63, 'rua joffre motta', '44', 'casa 1', '2020-07-12 19:13:20', NULL),
(14, 64, 'rua piauí', '17', 'casa 1', '2020-07-12 19:13:20', NULL),
(15, 65, 'fernandes marques', '1229', 'casa 1', '2020-07-12 19:13:20', NULL),
(16, 66, 'av. beta', '07', 'casa 1', '2020-07-12 19:13:20', NULL),
(17, 67, 'abagiba', '674', 'casa 1', '2020-07-12 19:13:20', NULL),
(18, 68, 'gumercindo araujo', '302', 'casa 1', '2020-07-12 19:13:20', NULL),
(19, 69, 'rua 01, quadra 35', '35b', 'casa 1', '2020-07-12 19:13:20', NULL),
(20, 70, 'rua piauí', '23d', 'casa 1', '2020-07-12 19:13:20', NULL),
(21, 71, 'rua leopoldina araãºjo', '380', 'casa 1', '2020-07-12 19:13:20', NULL),
(22, 72, 'rua conceiã§ã£o', '101', 'casa 1', '2020-07-12 19:13:20', NULL),
(23, 73, 'rua benedetto bonfilgi', '755', 'casa 1', '2020-07-12 19:13:20', NULL),
(24, 74, 'rua sã£o francisco', '17', 'casa 1', '2020-07-12 19:13:20', NULL),
(25, 75, 'rua dona zulmira', '479', 'casa 1', '2020-07-12 19:13:20', NULL),
(26, 76, 'rua mampituba', '740', 'casa 1', '2020-07-12 19:13:20', NULL),
(27, 77, 'dezeseis', '151', 'casa 1', '2020-07-12 19:13:20', NULL),
(28, 78, 'rua dos goitacazes', '375', 'casa 1', '2020-07-12 19:13:20', NULL),
(29, 79, 'av lucio jose de meneses', '930', 'casa 1', '2020-07-12 19:13:20', NULL),
(30, 80, 'caetano', '3457', 'casa 1', '2020-07-12 19:13:20', NULL),
(31, 81, 'um nova ', '335', 'casa 1', '2020-07-12 19:13:20', NULL),
(32, 82, 'sres area especial', '19', 'casa 1', '2020-07-12 19:13:20', NULL),
(33, 83, 'islandia', '99', 'casa 1', '2020-07-12 19:13:20', NULL),
(34, 84, 'independência', '700', 'casa 1', '2020-07-12 19:13:20', NULL),
(35, 85, 'sebastiã£o thomaz de oliveira', '25', 'casa 1', '2020-07-12 19:13:20', NULL),
(36, 86, 'nogueira', '185', 'casa 1', '2020-07-12 19:13:20', NULL),
(37, 87, 'tv londrina', '12', 'casa 1', '2020-07-12 19:13:20', NULL),
(38, 88, 'teofilo otoni', '222', 'casa 1', '2020-07-12 19:13:20', NULL),
(39, 89, 'joã£o rasmussen', '244', 'casa 1', '2020-07-12 19:13:20', NULL),
(40, 90, 'travessa elizeu araãºjo', '46', 'casa 1', '2020-07-12 19:13:20', NULL),
(41, 91, 'av. dr. joão pessoa', '185', 'casa 1', '2020-07-12 19:13:20', NULL),
(42, 92, 'travessa brandão', '4', 'casa 1', '2020-07-12 19:13:20', NULL),
(43, 93, 'coqueiros', 'SN', 'casa 1', '2020-07-12 19:13:20', NULL),
(44, 94, 'estrada m boi mirim', '820', 'casa 1', '2020-07-12 19:13:20', NULL),
(45, 95, 'travessa dos comerciarios ', '5', 'casa 1', '2020-07-12 19:13:20', NULL),
(46, 96, 'dos jacarandas', '30', 'casa 1', '2020-07-12 19:13:20', NULL),
(47, 97, 'dona ermelinda pereira', '413', 'casa 1', '2020-07-12 19:13:20', NULL),
(48, 98, 'rua projetada 02', '742', 'casa 1', '2020-07-12 19:13:20', NULL),
(49, 99, 'samambaia', '96', 'casa 1', '2020-07-12 19:13:20', NULL),
(50, 100, 'rua dos gerã¢nios', '110', 'casa 1', '2020-07-12 19:13:20', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `document` varchar(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB AVG_ROW_LENGTH=3276 DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `document`, `created_at`, `updated_at`) VALUES
(1, 'Robson', 'Santos', 'robson1@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(2, 'Alexandre', 'Santos', 'alexandre27@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(3, 'Willian', 'Santos', 'willian28@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(4, 'Eleno', 'Santos', 'eleno29@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(5, 'Lucas', 'Santos', 'lucas30@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(6, 'Mateus', 'Santos', 'mateus31@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(7, 'João', 'Santos', 'joão32@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(8, 'Felipe', 'Santos', 'felipe33@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(9, 'Anderson', 'Santos', 'anderson34@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(10, 'Elton', 'Santos', 'elton35@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(11, 'Leonardo', 'Santos', 'leonardo36@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(12, 'Regilton', 'Santos', 'regilton37@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(13, 'Sidney', 'Santos', 'sidney38@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(14, 'Lourival', 'Santos', 'lourival39@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(15, 'Henrique', 'Santos', 'henrique40@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(16, 'Daniel', 'Santos', 'daniel41@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(17, 'Pedro', 'Santos', 'pedro42@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(18, 'Andre Roberto', 'Santos', 'andre roberto43@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(19, 'Ozeias', 'Santos', 'ozeias44@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(20, 'Arnobio', 'Santos', 'arnobio45@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(21, 'Roniel', 'Santos', 'roniel46@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(22, 'Caíque', 'Santos', 'caíque47@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(23, 'Lucas', 'Santos', 'lucas48@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(24, 'Francisco', 'Santos', 'francisco49@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(25, 'Cristian', 'Santos', 'cristian50@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(26, 'Eduardo', 'Santos', 'eduardo51@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(27, 'Rodrigo', 'Santos', 'rodrigo52@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(28, 'Raphael', 'Santos', 'raphael53@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(29, 'Jose', 'Santos', 'jose54@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(30, 'Rodrigo', 'Santos', 'rodrigo55@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(31, 'Diego', 'Santos', 'diego56@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(32, 'Alexandre', 'Santos', 'alexandre57@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(33, 'Edimar', 'Santos', 'edimar58@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(34, 'Jackell', 'Santos', 'jackell59@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(35, 'Luis', 'Santos', 'luis60@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(36, 'Lucas', 'Santos', 'lucas61@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(37, 'Wander', 'Santos', 'wander62@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(38, 'Tairo', 'Santos', 'tairo63@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(39, 'Rubens', 'Santos', 'rubens64@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(40, 'Hugo', 'Santos', 'hugo65@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(41, 'Gustavo', 'Santos', 'gustavo66@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(42, 'Paulo', 'Santos', 'paulo67@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(43, 'Rodrigo', 'Santos', 'rodrigo68@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(44, 'Denio', 'Santos', 'denio69@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(45, 'Idalmir', 'Santos', 'idalmir70@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(46, 'Ataide', 'Santos', 'ataide71@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(47, 'Luiz', 'Santos', 'luiz72@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(48, 'Luciano', 'Santos', 'luciano73@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(49, 'Adir', 'Santos', 'adir74@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03'),
(50, 'Tainan', 'Santos', 'tainan75@email.com.br', NULL, '2020-07-12 19:08:01', '2020-07-12 19:09:03');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addr_user` (`user_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
