-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 15 2021 г., 13:21
-- Версия сервера: 10.4.12-MariaDB-log
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `info`, `price`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Свекла', 'Свекла занимает лидирующее место среди овощей по содержанию многих ценных минералов.', 47, 'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/beets.jpg', '2021-04-15 06:13:03', '2021-04-15 06:13:03'),
(2, 'Морковь', 'Высокое содержание каротина. Великолепная морковь для сока, с высоким содержанием каротина.', 26, 'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/carrot.jpg', '2021-04-15 06:13:03', '2021-04-15 06:13:03'),
(3, 'Киви', 'Плоды покрыты коричневой кожицей с мелкими волосками, за которой скрывается ароматная, сочная мякоть.', 137, 'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/kiwi.jpg', '2021-04-15 06:13:03', '2021-04-15 06:13:03'),
(4, 'Картофель', 'Картофель российского производства. Выращено в Мытищах. Экологически чистый продукт!', 35, 'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/potato.jpg', '2021-04-15 06:13:03', '2021-04-15 06:13:03'),
(5, 'Клубника', 'Крупная отборная египетская клубника - сердце. Сладкая и сочная, с сильным ароматом.', 1315, 'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/strawberries.jpg', '2021-04-15 06:13:03', '2021-04-15 06:13:03'),
(6, 'Томаты', 'Розовые томаты – самые сладкие и вкусные. Отличаются мясистой, сочной , сладкой мякотью.', 213, 'https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/02/26/tomato.jpg', '2021-04-15 06:13:03', '2021-04-15 06:13:03');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
