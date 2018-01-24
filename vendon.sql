-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 24 2018 г., 21:10
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `vendon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `end_tests`
--

CREATE TABLE IF NOT EXISTS `end_tests` (
  `end_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_test` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `correct_questions` int(11) NOT NULL,
  PRIMARY KEY (`end_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `id_test` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Test_description` varchar(255) NOT NULL,
  PRIMARY KEY (`id_test`),
  UNIQUE KEY `id` (`id_test`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id_test`, `Name`, `Test_description`) VALUES
(1, 'PHP test', 'Test obout PHP knowledge'),
(2, 'HTML test', 'Test obout HTML knowledge'),
(3, 'CSS test', 'Test obout CSS knowledge');

-- --------------------------------------------------------

--
-- Структура таблицы `tests_answers`
--

CREATE TABLE IF NOT EXISTS `tests_answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `correct_answer` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`answer_id`),
  KEY `FK_test_question` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Дамп данных таблицы `tests_answers`
--

INSERT INTO `tests_answers` (`answer_id`, `answer`, `question_id`, `correct_answer`) VALUES
(1, 'the operator', 1, 0),
(2, 'a member name', 1, 0),
(3, 'an index number', 1, 1),
(4, 'a FIFO approach', 1, 0),
(5, 'connect_mysql(''localhost'');', 2, 0),
(6, 'mysql_connect(''localhost'');', 2, 1),
(7, 'mysql_open(''localhost'');', 2, 0),
(8, 'dbopen(''localhost'');', 2, 0),
(9, 'connect(''localhost'');', 2, 0),
(10, 'mysql_dbopen(''localhost'');', 2, 0),
(11, '1', 4, 0),
(12, '0', 4, 0),
(13, '0 or 1', 4, 1),
(14, '2', 4, 0),
(15, 'static', 5, 0),
(16, 'private', 5, 0),
(17, 'final', 5, 1),
(18, 'protected', 5, 0),
(19, '*', 3, 0),
(20, '/', 3, 0),
(21, '%', 3, 0),
(22, '&', 3, 0),
(23, '$', 3, 1),
(24, '#', 3, 0),
(25, 'Andi Gutmans', 6, 0),
(26, 'Rasmus Lerdorf', 6, 1),
(27, 'Shane Caraveo', 6, 0),
(28, 'open(''time.txt'')', 7, 0),
(29, 'open(''time.txt'',''read'')', 7, 0),
(30, 'open(''time.txt'',''r+'')', 7, 0),
(31, 'open(''time.txt'',''r'')', 7, 1),
(32, '<?php...?>', 8, 1),
(33, '<script>...</script>', 8, 0),
(34, '<?php>...</php>', 8, 0),
(35, '<?php>...</?>', 8, 0),
(36, '<&>...</&>', 8, 0),
(37, '<!PHP>...</PHP>', 8, 0),
(38, 'Cascading', 9, 0),
(39, 'Inheritance', 9, 1),
(40, 'Polymorphism', 9, 0),
(41, 'Structure', 9, 0),
(42, 'Ruby', 10, 0),
(43, 'Perl and C', 10, 1),
(44, 'Lisp', 10, 0),
(45, 'JavaScript', 10, 0),
(46, 'Delphi', 10, 0),
(47, 'Python', 10, 0),
(48, 'end the current paragraph', 11, 0),
(49, 'start a new paragraph', 11, 1),
(50, 'break the line', 11, 0),
(51, 'none the above', 11, 0),
(52, '<b>', 12, 0),
(53, '<i>', 12, 0),
(54, '<u>', 12, 0),
(55, '<img>', 12, 1),
(56, '<td>', 12, 0),
(57, '<tr>', 12, 0),
(58, '</----/>', 13, 0),
(59, '</---->', 13, 0),
(60, '<!----!>', 13, 0),
(61, '<!---->', 13, 1),
(62, '<newline>', 14, 0),
(63, '<br>', 14, 1),
(64, '<break>', 14, 0),
(65, '<lb>', 14, 0),
(66, '<i>', 15, 1),
(67, '<ii>', 15, 0),
(68, '<italic>', 15, 0),
(69, '<italics>', 15, 0),
(70, '<bb>', 16, 0),
(71, '<bold>', 16, 0),
(72, '<b>', 16, 1),
(73, '<bld>', 16, 0),
(74, '<select>', 17, 1),
(75, '<input type=''dropdown''>', 17, 0),
(76, '<list>', 17, 0),
(77, '<all of above>', 17, 0),
(78, '<none of them>', 17, 0),
(79, '<title>', 18, 0),
(80, '<document>', 18, 0),
(81, '<head>', 18, 0),
(82, '<html>', 18, 1),
(83, '<head>', 19, 0),
(84, '<h6>', 19, 1),
(85, '<h1>', 19, 0),
(86, '<list>', 20, 0),
(87, '<ol>', 20, 1),
(88, '<ul>', 20, 0),
(89, '<dl>', 20, 0),
(90, 'pair tags', 21, 1),
(91, 'couple tags', 21, 0),
(92, 'double tags', 21, 0),
(93, 'single tags', 21, 0),
(94, 'tags', 21, 0),
(95, '#FFFFFF', 22, 0),
(96, '#000000', 22, 1),
(97, '#02B022', 22, 0),
(98, '#0040FF', 22, 0),
(99, 'Google', 23, 0),
(100, 'W3C', 23, 1),
(101, 'Yahoo', 23, 0),
(102, 'Intel', 23, 0),
(103, 'Oracle', 23, 0),
(104, 'border-radius', 24, 1),
(105, 'round-style', 24, 0),
(106, 'border-circle', 24, 0),
(107, 'Code Style Sheets', 25, 0),
(108, 'Course Sync System', 25, 0),
(109, 'Cascading System Share', 25, 0),
(110, 'Cascading Style Sheets', 25, 1),
(111, 'Course Style System', 25, 0),
(112, '/*hello world*/', 26, 1),
(113, '#hello world#', 26, 0),
(114, 'comment(''hello world'')', 26, 0),
(115, '//hello world', 26, 0),
(116, 'color.background:', 27, 0),
(117, 'color.background=', 27, 0),
(118, 'background-color:', 27, 1),
(119, 'bg-color:', 27, 0),
(120, 'background(#000000)', 27, 0),
(121, '<style src=''style.css''>', 28, 0),
(122, '<link href=''style.css''>', 28, 1),
(123, '<link> style.css</link>', 28, 0),
(124, 'mouse.form=pointer', 29, 0),
(125, 'mouse:hand', 29, 0),
(126, 'cursor:pointer', 29, 1),
(127, 'cursor-shape=pointer', 29, 0),
(128, 'position=middle', 30, 0),
(129, 'align.text=center;', 30, 0),
(130, 'text-align:center;', 30, 1),
(131, 'text-position:middle', 30, 0),
(132, 'firstletter.uppercase', 31, 0),
(133, 'text-transform:uppercase', 31, 0),
(134, 'text-transform:capitalize', 31, 1),
(135, 'border-space', 32, 0),
(136, 'margin', 32, 0),
(137, 'padding', 32, 1),
(138, 'spacing', 32, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `tests_questions`
--

CREATE TABLE IF NOT EXISTS `tests_questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `id_test` int(11) NOT NULL,
  PRIMARY KEY (`question_id`),
  KEY `FK_tests` (`id_test`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `tests_questions`
--

INSERT INTO `tests_questions` (`question_id`, `question`, `id_test`) VALUES
(1, 'An array element is accessed using: ', 1),
(2, 'What is the correct way to connect to a MySQL database? ', 1),
(3, 'All variables in PHP start with which symbol? ', 1),
(4, 'How many constructors can a class have? ', 1),
(5, 'Which keyword prevents child classes from overriding a method?', 1),
(6, 'Who is the creator of PHP?', 1),
(7, 'What is the correct way to open the file ''time.txt'' as readable-only?', 1),
(8, 'PHP server scripts are surrounded by which delimiters?', 1),
(9, 'The process of building new classes from existing one is called?', 1),
(10, 'The PHP syntax is most similar to:', 1),
(11, 'Using <p> tag will ', 2),
(12, 'Which of the following is not a pair tag? ', 2),
(13, 'Comments in HTML documents is given by ', 2),
(14, 'What is the correct HTML tag for inserting a line break? ', 2),
(15, 'Choose the correct HTML tag to make a text italic ', 2),
(16, 'Choose the correct HTML tag to make a text bold ', 2),
(17, 'To create a combo box ( drop down box) which tag will you use? ', 2),
(18, 'What should be the first tag in any HTML document? ', 2),
(19, 'Choose the correct HTML tag for the smallest size heading? ', 2),
(20, 'How can you make a numbered list? ', 2),
(21, 'Some tags enclose the text those tags are known as ', 2),
(22, 'Which code is for black color?', 3),
(23, 'CSS made and maintained by?', 3),
(24, 'How to make a circle in CSS?', 3),
(25, 'CSS stands for?', 3),
(26, 'What is the proper way to insert a multiline comment?', 3),
(27, 'What property is used to change the background color of an element?', 3),
(28, 'How do you link a CSS page using HTML?', 3),
(29, 'What is the correct way of making the mouse a ''hand''?', 3),
(30, 'What is the proper way to center text?', 3),
(31, 'What is the proper method of making each word in a text star with a capital letter?', 3),
(32, 'What property is used to create space between an elements border and it''s content?', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
