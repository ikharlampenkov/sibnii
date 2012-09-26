-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 26 2012 г., 17:36
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `title`, `description`, `logo`) VALUES
(2, 'КРУ', '<p>\r\n	5677567567</p>\r\n', NULL),
(3, 'ШУБ', '<p>rn	rn Добыча угля</p>rn<p>rn	rn</p>rn', NULL),
(12, 'ОАО', '<p>\r\n	ААО</p>\r\n', NULL),
(13, '', '', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `content_page`
--

INSERT INTO `content_page` (`id`, `page_title`, `title`, `content`) VALUES
(1, 'about', 'О компании', '<p style=\\"text-align: center\\">\r\n	<span style=\\"font-size: 14px;\\"><strong><img alt=\\"\\" src=\\"/ckfinder/userfiles/images/%D1%84%D0%BE%D1%82%D0%BE%20%D0%B3%D0%B5%D0%BD%20%D0%B4%D0%B8%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80.JPG\\" style=\\"float: left; margin-top: 5px; margin-bottom: 5px; height: 225px; width: 400px; margin-left: 15px; margin-right: 15px\\" /><span style=\\"font-size:16px;\\">Уважаемые коллеги и партнеры!</span></strong></span></p>\r\n<p style=\\"text-align: justify;\\">\r\n	<span style=\\"color: rgb(0, 0, 205);\\"><strong>&nbsp;&nbsp;&nbsp;&nbsp; ООО &laquo;СибНИИуглепроект&raquo; </strong></span>- современный многопрофильный проектный институт, занимающийся комплексным проектированием промышленных и жилых объектов капитального строительства.</p>\r\n<p style=\\"text-align: justify;\\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp; Основным направлением деятельности института является разработка проектной документации для строительства, реконструкции и технического перевооружения предприятий угольной промышленности, а также железнодорожного и автомобильного транспорта.</p>\r\n<p style=\\"text-align: justify;\\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp; <span style=\\"color: rgb(0, 0, 205);\\"><strong>ООО &laquo;СибНИИуглепроект&raquo; </strong></span>осуществляет помощь заказчику на всех этапах инвестиционного проекта &ndash; предпроектная подготовка и сбор исходных данных, технико-экономическое обоснование, разработка основных концептуальных направлений, выполнение проектной, рабочей и сметной документации, разработка инженерно-технических мероприятий, документации природоохранного назначения, авторский надзор при ведении строительства и монтажа. Оказывает инжиниринговые услуги в области экологического проектирования, рационального использования и охраны недр.</p>\r\n<p style=\\"text-align: justify;\\">\r\n	&nbsp;&nbsp;&nbsp;&nbsp; Главным богатством нашего института были и остаются люди, сотрудники института, высококвалифицированные специалисты, стаж которых составляет от&nbsp;5 до 30 лет. Инженерный состав института, отлично владеющий вопросами проектирования промышленных и жилых объектов капитального строительства, знающий угольное и строительное производство. <span style=\\"color: rgb(0, 0, 205);\\"><strong>ООО &laquo;СибНИИуглепроект&raquo;</strong></span> - это сплоченный коллектив профессионалов в различных сферах деятельности, имеющий современные автоматизированные программные комплексы, техническую и информационную базу.</p>\r\n<p style=\\"text-align: right;\\">\r\n	<strong>С уважением, Генеральный директор</strong></p>\r\n<p style=\\"text-align: right;\\">\r\n	<strong>Бурков Алексей Владимирович</strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(2, 'contacts', 'Контакты', '<p>\r\n	<img alt=\\"\\" src=\\"/ckfinder/userfiles/images/155902ddc25a54d8ed56005273172e10-150x150.png\\" style=\\"margin-left: 10px; margin-right: 10px; margin-top: 5px; margin-bottom: 5px; height: 60px; width: 60px\\" />8-960-905-07-00 Беседина Анна Александровна</p>\r\n'),
(3, 'smi', 'СМИ о компании', ''),
(4, 'naprav', 'Направления деятельности', '<p>\r\n	&nbsp;</p>\r\n<ul>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Комплексное проектирование для строительства, реконструкции и технического перевооружения предприятий угольной промышленности, а также железнодорожного и автомобильного транспорта</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Выполнение всех видов инженерных изысканий: геологические, в том числе сейсмологические; геодезические; гидрометеорологические; экологические; геотехнические и обследование состояния грунтов основания зданий и сооружений</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">&nbsp;Разработка проектной и рабочей документации по наружным и внутренним сетям: системы отопления, системы водоснабжения и водоотведения, системы теплоснабжения, электроснабжения до 110 кВ и более</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Осуществление услуг генерального подрядчика по организации работ по строительству, реконструкции и капитальному ремонту объектов капитального строительства</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Производство маркшейдерских работ (пространственно-геометрические измерения горных разработок и подземных сооружений, определение их параметров, месторасположения и соответствия проектной документации; наблюдения за состоянием горных отводов и обоснование их границ; ведение горной графической документации; учет и обоснование объемов горных разработок)</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Разведочное бурение (в том числе бурение водозаборных скважин глубиной 100 и более метров, диаметр обсадных труб 100-151 мм)</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Разработка проектной и рабочей документации объектов гражданского назначения</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Составление сметной документации</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Проекты оценки воздействия на окружающую среду (ОВОС)</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Проекты расчетных (предварительных санитарно-защитных зон (СЗЗ)) предприятий и групп предприятий</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Разделы 8 &laquo;Перечень мероприятий по охране окружающей среды (для не линейных объектов) и 7 &laquo;Мероприятия по охране окружающей среды (для линейных объектов) проектной документации</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Инвентаризация источников выбросов загрязняющих веществ, отходов и мест их хранения</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Проекты нормативов предельно-допустимых выбросов (проект ПДВ)</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Проекты нормативов образования отходов и лимитов их размещения (проект ПНООЛР), расчет класса опасности отходов, разработка и согласование паспортов опасных отходов</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Проекты нормативов допустимых сбросов (проект НДС)</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Подготовка экологического обоснования намечаемой деятельности по обращению с опасными отходами производства и потребления</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Разработка проектной и рабочей документации полигонов твердых бытовых отходов</span></li>\r\n	<li style=\\"text-align: justify\\">\r\n		<span style=\\"font-size:16px;\\">Авторский надзор</span></li>\r\n</ul>\r\n'),
(5, 'vacancy', 'Вакансии', 'Вакансии'),
(6, 'rekvisite', 'Реквизиты', '<p>\r\n	<strong>Общество с ограниченной ответственностью &laquo;СибНИИуглепроект&raquo;</strong></p>\r\n<p>\r\n	Краткое наименование: ООО &laquo;СибНИИуглепроект&raquo;</p>\r\n<p>\r\n	Юридический адрес: 630083, г. Новосибирск, ул. Грибоедова, д.2</p>\r\n<p>\r\n	Почтовый адрес: 630083, г. Новосибирск, а/я 56</p>\r\n<p>\r\n	ОГРН: 1104205018280</p>\r\n<p>\r\n	ИНН: 4205209804 КПП: 540501001</p>\r\n<p>\r\n	Генеральный директор Бурков Алексей Владимирович</p>\r\n<p>\r\n	Действует на основании: Устава</p>\r\n<p>\r\n	<strong>Банковские реквизиты:</strong></p>\r\n<p>\r\n	Расчетный счет в валюте РФ: 40702810605000000336</p>\r\n<p>\r\n	Наименование банка: КФ ОАО &laquo;МДМ Банк&raquo; г. Кемерово</p>\r\n<p>\r\n	Корр. сч.: 30101810400000000784</p>\r\n<p>\r\n	БИК: 043207784</p>\r\n<p>\r\n	Контактный телефон 8-960-905-07-00</p>\r\n'),
(9, 'buklet', 'Буклет', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `description`, `object_id`) VALUES
(9, NULL, '', 1),
(10, NULL, '', 1),
(20, NULL, '', 3),
(21, NULL, '', 3),
(22, 'img_26-09-2012-13-54-31.jpg', '', 5),
(23, 'img_26-09-2012-13-54-51.jpg', '', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `license`
--

DROP TABLE IF EXISTS `license`;
CREATE TABLE `license` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `license`
--

INSERT INTO `license` (`id`, `description`, `img`) VALUES
(1, '<p>\r\n	&nbsp;</p>\r\n<p style=\\"text-align: justify\\">\r\n	<span style=\\"color:#0000cd;\\"><span style=\\"\\\\&quot;color:#0000cd;\\\\&quot;\\"><strong><span style=\\"\\\\&quot;\\\\\\\\&quot;color:#0000cd;\\\\\\\\&quot;\\\\&quot;\\">&nbsp; &nbsp; &nbsp;ООО &laquo;СибНИИуглепроект&raquo;</span></strong></span></span> имеет допуски и лицензии, предоставляющие право выполнять все 13 видов проектных работ, в том числе виды проектно-изыскательских работ, которые оказывают влияние на безопасность особо опасных, технически сложных и уникальных объектов, предусмотренных статьей 48.1 Градостроительного кодекса РФ и осуществление организации работ по строительству, реконструкции и капитальному ремонту объектов капитального строительства:</p>\r\n', NULL),
(8, '<p style=\\"text-align: justify\\">\r\n	<strong>СВИДЕТЕЛЬСТВО</strong></p>\r\n<p style=\\"text-align: justify\\">\r\n	<span style=\\"font-size:14px;\\">о допуске к работам по подготовке проектной документации, которые оказывают влияние на безопасность объектов капитального строительства <strong>№7261 от 17.11.2011 г.</strong></span></p>\r\n', 'img_26-09-2012-09-59-39.jpg'),
(9, '<p style=\\"text-align: justify\\">\r\n	<strong>СВИДЕТЕЛЬСТВО</strong></p>\r\n<p style=\\"text-align: justify\\">\r\n	<span style=\\"font-size:14px;\\">о допуске к определенному виду или видам работ в области инженерных изысканий, которые оказывают влияние на безопасность объектов капитального строительства <strong>№1347 от 25.05.2011г.</strong></span></p>\r\n', 'img_26-09-2012-09-57-23.jpg'),
(11, '<p style=\\"text-align: justify\\">\r\n	<strong>ЛИЦЕНЗИЯ</strong></p>\r\n<p style=\\"text-align: justify\\">\r\n	<span style=\\"font-size:14px;\\">на производство маркшейдерских работ <strong>№ПМ-68-001779 (О) от 15.06.2011г.</strong></span></p>\r\n', 'img_26-09-2012-09-56-14.jpg'),
(12, '<p style=\\"text-align: justify\\">\r\n	<strong>СВИДЕТЕЛЬСТВО</strong></p>\r\n<p style=\\"text-align: justify\\">\r\n	<span style=\\"font-size:14px;\\">о допуске к определенному виду работ, которые оказывают влияние на безопасность объектов капитального строительства <strong>№0461.01-2012 - 4205209804-С-238 от 29.03.2012 г.</strong></span></p>\r\n', 'img_26-09-2012-09-55-26.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `short_text`, `full_text`) VALUES
(3, '2012-09-25 00:00:00', 'Госэкспертиза г. Красноярск', 'Заключения экспертов 2012 год', '<p>\r\n	Наши проекты получили положительное заключения экспертов Филиала ФГУ &quot;Главная государственная экспертиза&quot; г. Красноярск</p>\r\n'),
(4, '2012-09-21 00:00:00', 'Госэкспертиза г. Кемерово', 'Заключения экспертов 2012 год', '<p>\r\n	Наши проекты получили положительные заключения экспертов государственной экспертизы г. Кемерово</p>\r\n');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `personal`
--

INSERT INTO `personal` (`id`, `fio`, `foto`, `department`, `position`, `contact`) VALUES
(4, 'Степанов Илья Дмитриевич ', NULL, '', 'Директор по проектным работам', '<p>\r\n	оролрлоло</p>\r\n');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `is_complite`, `client_id`) VALUES
(1, 'Галерея проектов', '', 1, 2),
(2, 'Галерея проектов', '', 0, 3),
(3, 'Проекты по открытым горным работам', '', 0, 13),
(4, 'Проекты угольных складов и технологических комплексов', '', 0, 13),
(5, 'Проекты систем водоотведения и водоснабжения', '', 0, 13),
(6, 'Проекты железнодорожных углепогрузочных станций', '', 0, 13),
(7, 'Проекты промышленного и гражданского строительства', '', 0, 13),
(8, 'Прочие проекты', '', 0, 13);

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
(1, 'Проекты по открытым горным работам', '<ul>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Станция Угольная&raquo; филиала &laquo;Краснобродский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Железнодорожная станция Восточная&raquo; филиала &laquo;Краснобродский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Железнодорожная станция Углесборочная&raquo; в филиале &laquo;Краснобродский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Железнодорожная станция &laquo;Бочаты&raquo; (железнодорожный путь протяженностью 1,5 км)&raquo; филиала &laquo;Бачатский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\">\r\n		&laquo;Железнодорожная станция Технологическая&raquo; филиала &laquo;Бачатский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Строительство второго соединительного железнодорожного пути на перегоне &laquo;станция Угольная &ndash; станция Тырган&raquo; в филиале &laquo;Краснобродский угольный разрез&raquo; ОАО &laquo;УК&nbsp; &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Станция Кедровая. Расширение&raquo; филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Кедровский угольный разрез&raquo; (Путевое развитие)</li>\r\n</ul>\r\n<p style=\\"text-align: justify;\\">\r\n	&nbsp;</p>\r\n'),
(2, 'Проекты угольных складов и технологических комплекосв', '<ul>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Проект технологического комплекса поверхности филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Талдинский угольный разрез&raquo; (Ерунаковское поле)</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Проект угольных складов&raquo; филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Кедровский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Угольный склад&raquo; филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Моховский угольный разрез&raquo; (Сартакинское поле)</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		Выполнение проектной документации на угольные склады филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Краснобродский угольный разрез&raquo; (Вахрушевское поле)</li>\r\n	<li style=\\"text-align: justify;\\">\r\n		&laquo;Обогатительная установка с КНС с трассами водовода и сброса шлама&raquo; филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Краснобродский угольный разрез&raquo; (Вахрушевское поле)</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Техническое перевооружение сортировочно-погрузочного комплекса&raquo; на основной промплощадке &laquo;Таежного поля&raquo; филиала &laquo;Талдинский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Проект технического перевооружения Погрузочного комплекса №2&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; филиала &laquo;Калтанский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Проект технического перевооружения угольного склада с дробильно-сортировочным комплексом на основной промплощадке&raquo; филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; филиала &laquo;Калтанский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Проект технического перевооружения технологического комплекса переработки кварцитов&raquo; в филиале &laquo;Антоновское рудоуправление&raquo; ОАО &laquo;Кузнецкие ферросплавы&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Техническое перевооружение сортировочно-погрузочного комплекса на угольном складе №1&raquo; филиала &laquo;Моховский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Проект погрузочно-складских комплексов филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Краснобродский угольный разрез&raquo; (Краснобродское поле)</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&nbsp;&laquo;Реконструкция дробильной установки ММД с удлинением конвейерной линии филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Талдинский угольный разрез&raquo;</li>\r\n</ul>\r\n'),
(3, 'Проекты систем водоотведения и водоснабжения', '<ul>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Корректировка раздела &laquo;Осушения поля разреза&raquo; к &laquo;Корректировке проекта горнотранспортной части филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Вахрушевский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Корректировка разделов &laquo;Осушение поля разреза&raquo; к&nbsp; &laquo;Корректировке горно-транспортной части проекта отработки Краснобродского месторождения филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Краснобродский угольный разрез&raquo; и &laquo;Корректировке горно-транспортной части проекта отработки Новосергеевского поля филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Краснобродский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		Корректировка раздела &laquo;Дренаж и водоотлив&raquo; к &laquo;Корректировке горнотранспортной части проекта участка открытых горных работ по пласту 9&raquo; филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Сартакинский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		Корректировка раздела &laquo;Осушение поля разреза&raquo; к &laquo;Корректировке проекта горнотранспортной части филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Вахрушевский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\">\r\n		Корректировка раздела &laquo;Дренаж и водоотлив&raquo; &laquo;проекта доработки запасов угля открытым способом в границах горного отвода филиала &laquo;Моховский угольный разрез&raquo; (Моховское поле)</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Корректировка раздела &laquo;Дренаж и водоотлив&raquo; &laquo;Проекта строительства участка ОГР &laquo;Дунаевский&raquo; филиала &laquo;Караканский угольный разрез&raquo; и корректировка раздела &laquo;Осушение поля разреза и очистка карьерных вод&raquo; &laquo;Корректировки проекта горнотранспортной части разреза &laquo;Колмогоровский-2&raquo; филиала &laquo;Караканский угольный разрез&raquo; филиала &laquo;Моховский угольный разрез&raquo; (Караканское поле)</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Водоотлив карьерных сточных вод Западного поля и очистные сооружения карьерных сточных вод Основного поля ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; филиал &laquo;Талдинский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Водоотлив карьерных сточных вод Восточного поля&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; филиал &laquo;Талдинский угольный разрез&raquo; (Таежное поле)&nbsp;&nbsp;</li>\r\n</ul>\r\n'),
(4, 'Проекты железнодорожных углепогрузочных станций', '<ul>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Станция Угольная&raquo; филиала &laquo;Краснобродский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Железнодорожная станция Восточная&raquo; филиала &laquo;Краснобродский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Железнодорожная станция Углесборочная&raquo; в филиале &laquo;Краснобродский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Железнодорожная станция &laquo;Бочаты&raquo; (железнодорожный путь протяженностью 1,5 км)&raquo; филиала &laquo;Бачатский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\">\r\n		&laquo;Железнодорожная станция Технологическая&raquo; филиала &laquo;Бачатский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Строительство второго соединительного железнодорожного пути на перегоне &laquo;станция Угольная &ndash; станция Тырган&raquo; в филиале &laquo;Краснобродский угольный разрез&raquo; ОАО &laquo;УК&nbsp; &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Станция Кедровая. Расширение&raquo; филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Кедровский угольный разрез&raquo; (Путевое развитие)</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(5, 'Проекты промышленного и гражданского строительства', '<ul>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Бокс для стоянки автомобилей БелАЗ (с инженерными сетями) в филиале &laquo;Моховский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Насосная станция №1 хвостового хозяйства&raquo; ЗАО &laquo;Салаирский химический комбинат&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Здание &laquo;Профилакторий для 40 т. БелАЗов&raquo; №08/2309 филиала &laquo;Талдинский угольный разрез&raquo; &laquo;Таежное поле&raquo; (Модернизация ворот)</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;г. Белово. Центральная база ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; здание АБК с помещением ОТ&raquo;</li>\r\n	<li style=\\"text-align: justify;\\">\r\n		&laquo;РУ 6 кВ обогатительной фабрики&raquo; ЗАО &laquo;Салаирский химический комбинат&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Коттеджный поселок (9 коттеджей) по адресу: &laquo;Новоильинский район, севернее микрорайона 14-14а&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Система объединенного внутреннего хозяйственно-питьевого противопожарного водопровода и насосной станции административного здания (инв. №12/а08129) ОАО &laquo;Кузбассразрезуголь&raquo;</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(6, 'Прочие проекты', '<ul>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Горно-геологическое обоснование площадей под строительство объектов ООО &laquo;Сибтехноген&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Проект горного отвода&raquo; филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Краснобродский угольный разрез&raquo; - Вахрушевское поле</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Подготовка материалов горно-геологического обоснования границ участка &laquo;Вахрушевский Глубокий&raquo; Киселевского каменноугольного месторождения для Вахрушевского поля филиала &laquo;Краснобродский УР&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Горно-геологическое обоснование застройки площадей полезных ископаемых под дорогой и ЛЭП &laquo;Проекта углубки Акташского карьера известняков&raquo; филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Краснобродский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\">\r\n		&laquo;Разработка технико-экономического обоснования постоянных кондиций для подсчета запасов угля в границах участков недр по лицензиям КЕМ 14593 ТЭ, КЕМ 14594 ТЭ Новоказанского и Талдинского каменноугольного месторождения (Таежный участок) ОАО &laquo;УК КРУ&raquo; филиала &laquo;Талдинский угольный разрез&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Разработка горно-геологического обоснования застройки площадей полезных ископаемых к проектной документации &laquo;Железнодорожная станция Восточная&raquo; филиала &laquo;Краснобродский угольный разрез&raquo; ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Разработка горно-геологического обоснования застройки площадей полезных ископаемых к проектной документации &laquo;Железнодорожная станция Технологическая&raquo; филиала &laquo;Бачатский угольный разрез&raquo; ОАО &laquo;УК &laquo;КУзбассразрезуголь&raquo;</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Обследование несущих конструкций кровли пристройки Блока ремонта механических машин с гаражом и стоянкой (инв. 09/а75522) филиала &laquo;Талдинский угольный разрез&raquo; (Ерунаковское поле)</li>\r\n	<li style=\\"text-align: justify;\\" value=\\"5\\">\r\n		&laquo;Разработка паспортов ВЛ 6 кВ фидеров Ф6-3Р и Ф6-13П и обследование несущих конструкций существующих опор ВЛ 6 кВ на основной промплощадке филиала ОАО &laquo;УК &laquo;Кузбассразрезуголь&raquo; &laquo;Калтанский угольный разрез&raquo;</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n');

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
('admin', '123', 'admin'),
('besedina.a', '1qaZ2wsX', 'admin');

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
