-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 16 2012 г., 21:06
-- Версия сервера: 5.1.58
-- Версия PHP: 5.2.17

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `debser_sibnii`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `title`, `description`, `logo`) VALUES
(2, 'УГМК', 'Добыча угля', 'img_25-07-2011-20-33-39.jpg'),
(3, 'СДС Уголь', 'Добыча угля', 'img_25-07-2011-20-37-16.jpg'),
(4, 'Кузбассразрезуголь', '', NULL),
(5, 'Строй угольмаш', 'строим шахты', 'img_25-07-2011-21-22-37.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `content_page`
--

DROP TABLE IF EXISTS `content_page`;
CREATE TABLE `content_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(40) NOT NULL COMMENT 'английское название для системы',
  `title` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_title_UNIQUE` (`page_title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `content_page`
--

INSERT INTO `content_page` (`id`, `page_title`, `title`, `content`) VALUES
(1, 'about', 'Обращение руководителя', 'Обращение руководителя'),
(2, 'contacts', 'Контакты и реквизиты', ''),
(3, 'smi', 'СМИ о компании', '');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  `object_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `description`, `object_id`) VALUES
(2, 'img_25-07-2011-22-48-45.jpg', 'Белаз', 1),
(3, 'img_25-07-2011-22-49-06.jpg', 'Экскаватор', 2),
(4, 'img_25-07-2011-22-50-39.jpg', 'Погрузка', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `license`
--

DROP TABLE IF EXISTS `license`;
CREATE TABLE `license` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `license`
--

INSERT INTO `license` (`id`, `description`, `img`) VALUES
(1, 'Лицензия на осуществление дилерской деятельности', 'img_26-07-2011-09-19-33.jpg'),
(2, '', 'img_26-07-2011-09-25-57.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_text` text,
  `full_text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `short_text`, `full_text`) VALUES
(1, '2011-07-26 00:00:00', 'Первая новость', 'апоапоапопаопаоаопаоап аоа аоа паоапоа', 'паопаопаоопопаопаопаопао паопаопа паоа паоапо поапо поапо'),
(2, '2011-07-26 00:00:00', 'Первая новость 2', 'арвараврварва варв аврв аврва рварв', 'авраврварв врва врвар аврварв');

-- --------------------------------------------------------

--
-- Структура таблицы `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fio` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `contact` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `personal`
--

INSERT INTO `personal` (`id`, `fio`, `foto`, `department`, `position`, `contact`) VALUES
(1, 'Власов Василий Петрович', 'img_26-07-2011-13-56-50.jpg', '', '', ''),
(2, 'Степаненко Сергей Петрович', 'img_26-07-2011-14-02-50.jpg', 'варварва', 'аврварва', 'авраврва');

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `is_complite` tinyint(1) NOT NULL DEFAULT '0',
  `client_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_project_client` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `is_complite`, `client_id`) VALUES
(1, 'Первый проект', 'Проект новой шахты\r\n', 1, 2),
(2, 'Второй проект', '', 0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `project_service`
--

DROP TABLE IF EXISTS `project_service`;
CREATE TABLE `project_service` (
  `project_id` int(10) unsigned NOT NULL,
  `service_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`project_id`,`service_id`),
  KEY `fk_project_service_service1` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `project_service`
--

INSERT INTO `project_service` (`project_id`, `service_id`) VALUES
(1, 1),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `title`, `description`) VALUES
(1, 'Выполнение проектной документации по разработке месторождений твердых полезных ископаемых', 'Выполнение проектной документации по разработке месторождений твердых полезных ископаемых.'),
(2, 'Проекты ликвидации и консервации горных выработок', 'Проекты ликвидации и консервации горных выработок.'),
(3, 'Проекты переработки минерального сырья', ''),
(4, 'Проектирование автомобильных и железных дорог и их хозяйств', ''),
(5, 'Проектирование промышленных и гражданских объектов (все разделы проектной документации)', ''),
(6, 'Проектирование объектов инфраструктуры', ''),
(7, 'Проекты охраны окружающей среды', ''),
(8, 'Функции генерального проектировщика', ''),
(9, 'Авторский надзор за строительством', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `login` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`login`, `password`, `role`) VALUES
('admin', '123', 'admin');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_project_client` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `project_service`
--
ALTER TABLE `project_service`
  ADD CONSTRAINT `fk_project_service_project1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_project_service_service1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
