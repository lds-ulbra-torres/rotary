-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 25-Out-2016 às 17:40
-- Versão do servidor: 5.7.12
-- PHP Version: 5.6.21
CREATE DATABASE rotarydb;

USE rotarydb;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rotarydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_icon_path` varchar(60) DEFAULT NULL,
  `category_description` text,
  `category_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_icon_path`, `category_description`, `category_created_at`, `category_updated_at`) VALUES
(21, 'Teste para Rotary', '1477325790283f42764da6dba2522412916b031080580e33ded3703.jpg', 'Teste', '2016-10-24 14:16:30', '0000-00-00 00:00:00'),
(22, 'Teste Json', '1477327738283f42764da6dba2522412916b031080580e3b7ad7289.jpg', 'Testando Json', '2016-10-24 14:48:58', '0000-00-00 00:00:00');

--
-- Acionadores `categories`
--
DELIMITER $$
CREATE TRIGGER `categories_BEFORE_UPDATE` BEFORE UPDATE ON `categories` FOR EACH ROW BEGIN
	SET NEW.category_updated_at = CURRENT_TIMESTAMP;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_title` varchar(75) NOT NULL,
  `item_description` text NOT NULL,
  `item_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `item_updated_at` datetime NOT NULL,
  `item_image_path` varchar(100) NOT NULL,
  `item_quote` varchar(50) DEFAULT NULL,
  `item_abstract` varchar(50) DEFAULT NULL,
  `item_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`item_id`, `item_name`, `item_title`, `item_description`, `item_created_at`, `item_updated_at`, `item_image_path`, `item_quote`, `item_abstract`, `item_category`) VALUES
(14, 'yryyyy', 'uruuuu', '\r\n              uuruuu', '2016-10-24 14:17:29', '0000-00-00 00:00:00', '1477325849283f42764da6dba2522412916b031080580e3419abf47.jpg', 'jiiurj   heh', 'euehdhdn 8', 21),
(15, 'Teste 2', 'Teste 2', 'Ola\r\n              ', '2016-10-24 14:48:24', '0000-00-00 00:00:00', '1477327704283f42764da6dba2522412916b031080580e3b587fa33.jpg', 'Ola', 'Ola', 21);

--
-- Acionadores `itens`
--
DELIMITER $$
CREATE TRIGGER `itens_BEFORE_UPDATE` BEFORE UPDATE ON `itens` FOR EACH ROW BEGIN
	SET NEW.item_updated_at = CURRENT_TIMESTAMP;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `fk_itens_categories_idx` (`item_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `itens`
--
ALTER TABLE `itens`
  ADD CONSTRAINT `fk_itens_categories` FOREIGN KEY (`item_category`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
