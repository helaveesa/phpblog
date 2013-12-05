-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 05 2013 г., 15:04
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `tutorial`
--

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `m_desc` text NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `title`, `m_desc`, `desc`) VALUES
(1, 'Первая статья', 'Text All materials on the site Useful English are designed to serve this purpose, and the guiding principle is "the simpler the better". ', 'Text All materials on the site Useful English are designed to serve this purpose, and the guiding principle is "the simpler the better". This site cannot be a substitute for a good English textbook. But it will give you the tools and materials you need to study English effectively.Text All materials on the site Useful English are designed to serve this purpose, and the guiding principle is "the simpler the better". This site cannot be a substitute for a good English textbook. But it will give you the tools and materials you need to study English effectively.'),
(2, 'Вторая статья', ' Use charting tool to track real time commodity stock trading. For Online Stock and commodities trading. Increase stock value with gold and silver stocks. ', ' Use charting tool to track real time commodity stock trading. For Online Stock and commodities trading. Increase stock value with gold and silver stocks. Mining and energy is driving markets ahead. Oil and gas can also be charted. Also use for charting Forex trading. \r\n Use charting tool to track real time commodity stock trading. For Online Stock and commodities trading. Increase stock value with gold and silver stocks. Mining and energy is driving markets ahead. Oil and gas can also be charted. Also use for charting Forex trading. \r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
