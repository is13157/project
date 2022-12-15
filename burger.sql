-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 15 2022 г., 07:41
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
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `text`, `name`, `email`, `subject`) VALUES
(1, 'erteterswterttewtsrtysrtrtyrtyrtyretyrey', 'tetewtwetewrter', 'erdftsert@mail.ru', 'You have a message from your Bitmap Photography.'),
(2, 'rtaertehuiweuigsaifhweufhsufhwdufhzsufhwadufh', 'oahsgyuvsuahetu', 'kjhaseweay@yandex.com', 'You have a message from your Bitmap Photography.'),
(3, 'врпаорвпарвыпаропываорыпраопвроапыопаыв', 'вовка', 'vovka@gmail.com', 'hgfjhgfkdjhgkjfhgdkjfhgjd');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `discription`, `price`, `image`) VALUES
(1, 'Мясные бургеры', 'Отличный способ сделать ваш бизнес надежным и актуальным', '$5', './img/burger/1.png'),
(2, 'Бургерные мальчики', 'Отличный способ сделать так, чтобы ваш бизнес казался надежным и актуальным', '$5', './img/burger/2.png'),
(3, 'Бургер Бизз', 'Отличный способ сделать так, чтобы ваш бизнес казался надежным и актуальным', '$5', './img/burger/3.png'),
(4, 'Бургер с хрустящими огурцами', 'Отличный способ сделать так, чтобы ваш бизнес казался надежным и актуальным', '$5', './img/burger/4.png'),
(5, 'Булл Бургер', 'Отличный способ сделать так, чтобы ваш бизнес казался надежным и актуальным', '$5', './img/burger/5.png'),
(6, 'Ракетный бургер', 'Отличный способ сделать так, чтобы ваш бизнес казался надежным и актуальным', '$5', './img/burger/6.png'),
(7, 'Дымящийся бургер', 'Отличный способ сделать так, чтобы ваш бизнес казался надежным и актуальным', '$5', './img/burger/7.png'),
(8, 'Восхитительный бургер', 'Отличный способ сделать так, чтобы ваш бизнес казался надежным и актуальным', '$5', './img/burger/8.png'),
(9, 'Бургер с хрустящими огурцами', 'Отличный способ сделать так, чтобы ваш бизнес казался надежным и актуальным', '$5', './img/burger/4.png'),
(10, 'Булл Бургер', 'Отличный способ сделать так, чтобы ваш бизнес казался надежным и актуальным', '$5', './img/burger/5.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
