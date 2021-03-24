-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: mariadb
-- Время создания: Мар 24 2021 г., 06:42
-- Версия сервера: 10.5.9-MariaDB
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `honeyhunt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `userId`, `comment`) VALUES
(7, 7, 'opponent'),
(29, 26, 'qwert'),
(30, 7, 'Еще один комментарий оппонента'),
(31, 26, 'Еще один комментарий qwe5'),
(32, 16, 'Комментарий от root'),
(33, 7, 'Жизнь хороша!'),
(34, 27, '4589'),
(35, 28, 'чито?'),
(36, 29, 'Пел очень громко'),
(37, 30, 'Громко орет'),
(38, 31, 'weq34'),
(39, 32, 'redfdfg'),
(40, 33, 'qwqwqwqwqwqw'),
(41, 34, 'gjhtn xeim'),
(42, 35, 'Шаляпище'),
(43, 36, 'Прохорище'),
(44, 37, 'mail'),
(45, 38, 'Что такое'),
(46, 39, 'Ktnftn dscjrj'),
(47, 40, 'Герой поэмы Твардовского'),
(48, 41, 'Прототип Буратино'),
(49, 42, 'Сотрудник службы безопасности Мальвины'),
(50, 43, 'Жертва мошенников'),
(51, 44, 'Директор кукольного театра'),
(52, 44, 'Мальвина, вернись, я все прощу!'),
(53, 45, 'Yf ubnfht buhttw');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`) VALUES
(7, 'opponent', 'vop@vop.ru'),
(16, 'root', 'root@root.ro'),
(26, 'qwe5', 'qwe@rt.er'),
(27, 'qweq', 'qwe@qwe.rt'),
(28, 'xbnj', 'wer@wer.rt'),
(29, 'Федор Шаляпин', 'fedor@shalyapin.ru'),
(30, 'Прохор Шаляпин', 'shal@yapin.ru'),
(31, 'енг5', 'ytty@re.ry'),
(32, 'rtewc', 'erdffd@ytyh.ry'),
(33, 'Xelbkrf rfhnjyyfz', 'gbi@vfi.ru'),
(34, 'rfhnjyrf xelbkmyfz', 'dtctkj@pore.ry'),
(35, 'Прохорище', 'ezgbo@fkn.rt'),
(36, 'Ifkzgbot', 'gjtn@dej.ry'),
(37, 'linux', 'mail@mail.ru'),
(38, 'Вася Пупкин', 'wer@wer.df'),
(39, 'питер пен', 'piter@pen.ru'),
(40, 'Василий Теркин', 'vas@ter.kin'),
(41, 'Пиннокио', 'pin@nok.kio'),
(42, 'Пудель Артемон', 'pudel@arte.mon'),
(43, 'Колобок', 'colo@bock.ru'),
(44, 'Карабас Барабас', 'kara@bara.bas'),
(45, 'Ritchi Blackmoore', 'deep@pur.ple');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
