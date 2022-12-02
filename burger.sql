-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 02 2022 г., 08:15
-- Версия сервера: 5.6.51
-- Версия PHP: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `burger`
--

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `discription`, `price`) VALUES
(1, 'Beefy Burgers', 'Great way to make your buisness appear trust and relevant', 5),
(2, 'Burger Boys', 'Great way to make your buisness appear trust and relevant', 5),
(3, 'Burger Bizz', 'Great way to make your buisness appear trust and relevant', 5),
(4, 'Crackles Burger', 'Great way to make your buisness appear trust and relevant', 5),
(5, 'Bull Burger', 'Great way to make your buisness appear trust and relevant', 5),
(6, 'Rocket Burger', 'Great way to make your buisness appear trust and relevant', 5),
(7, 'Smokin Burger', 'Great way to make your buisness appear trust and relevant', 5),
(8, 'Delish Burger', 'Great way to make your buisness appear trust and relevant', 5),
(9, 'Crackles Burger', 'Great way to make your buisness appear trust and relevant', 5),
(10, 'Bull Burger', 'Great way to make your buisness appear trust and relevant', 5),
(11, 'The Burger President', 'Great way to make your buisness appear trust and relevant', 20),
(12, 'The Burger President', 'Great way to make your buisness appear trust and relevant', 20);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
