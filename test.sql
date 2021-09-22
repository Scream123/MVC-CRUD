-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creation time: Sep 21 2021 г., 20:00
-- Server version: 5.7.33
-- PHP version: 7.4.21

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `test`
-- Table structure `books`
CREATE TABLE `books`
(
    `book_id`        int(11) NOT NULL,
    `name`           varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
    `author`         varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
    `published_date` varchar(11) COLLATE utf8mb4_unicode_ci  NOT NULL,
    `deleted_at`     datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dump table data `books`
INSERT INTO `books` (`book_id`, `name`, `author`, `published_date`, `deleted_at`)
VALUES (196, '1', '2', '2021-07-31', NULL),
       (197, '11', '1232131', '2021-07-30', NULL),
       (198, '22', '242', '2021-08-06', NULL),
       (199, '214', '234', '2021-08-12', NULL),
       (200, 'йуцу', 'йуцйцу', '2021-07-30', NULL),
       (201, 'кцк', '34е', '2021-08-07', NULL),
       (202, '235', '235', '2021-08-07', NULL),
       (203, '2423', '324234', '2021-07-31', NULL),
       (204, '2', '3', '2021-08-15', NULL),
       (205, '34535', '34534535', '2021-08-06', NULL),
       (206, '4ц54', '', '', NULL),
       (207, '', '545', '', NULL),
       (208, 'й', 'ц', '2021-08-07', NULL),
       (209, '1', '2', '2021-07-31', NULL),
       (210, '4334', '53', '2021-07-31', NULL),
       (211, '435', '34534534', '', '2021-08-10 16:11:41'),
       (212, 'к3ц', 'к3ц3цк', '2021-07-30', '2021-08-10 16:12:07'),
       (213, '', '', '', '2021-08-10 16:12:07'),
       (214, '', '', '', '2021-08-10 16:12:07'),
       (215, '', '', '', '2021-08-10 16:12:07'),
       (216, '', '', '', '2021-08-10 16:12:08'),
       (217, '', '', '', '2021-08-10 16:12:34'),
       (218, '', '', '', '2021-08-10 16:12:34'),
       (219, '', '', '', '2021-08-10 16:12:33'),
       (220, '', '', '', '2021-08-10 16:12:33'),
       (221, '', '', '', '2021-08-10 16:13:06'),
       (222, '', '', '', '2021-08-10 16:13:06'),
       (223, '', '', '', '2021-08-10 16:13:05'),
       (224, '', '', '', '2021-08-10 16:13:05'),
       (225, '', '', '', '2021-08-10 16:13:05'),
       (226, '', '', '', '2021-08-10 16:13:04'),
       (227, '', '', '', '2021-08-10 16:14:10'),
       (228, '2', '3', '2021-07-30', '2021-08-10 16:14:30'),
       (229, '1', '23', '2021-07-30', '2021-08-10 16:15:17'),
       (230, '234', '234', '2021-08-07', '2021-08-10 16:15:38'),
       (231, '23423', '234', '2021-07-31', '2021-08-10 16:18:05'),
       (232, 'q34q34', '3q4', '2021-07-30', '2021-08-10 16:18:05'),
       (233, '', '', '', '2021-08-10 16:18:06'),
       (234, '1', '2', '2021-08-08', '2021-08-10 16:19:05'),
       (235, '34', '43', '2021-07-29', '2021-08-10 16:19:47'),
       (236, '123', '21323', '2021-07-31', '2021-08-10 16:19:57'),
       (237, '', '', '2021-08-22', '2021-08-10 16:20:13'),
       (238, '213', '123', '2021-08-06', '2021-08-10 16:20:19'),
       (239, '343', '3434', '2021-08-08', '2021-08-10 16:21:30'),
       (240, '', '', '2021-08-05', '2021-08-10 16:21:29'),
       (241, '1232', '213', '2021-08-06', '2021-08-10 16:21:43'),
       (242, '', '', '', '2021-08-10 16:21:49'),
       (243, '234', '234', '2021-08-06', '2021-08-10 16:49:12'),
       (244, '43', '23423', '2021-07-29', '2021-08-10 16:45:09'),
       (245, '2342', '23423', '', '2021-08-10 16:45:08'),
       (246, '', '', '', '2021-08-10 16:48:59'),
       (247, '', '', '', '2021-08-10 16:48:58'),
       (248, 'wwq', 'qwe', '', '2021-08-10 17:09:21'),
       (249, '', '', '', '2021-08-10 17:03:24'),
       (250, '5', '345', '', '2021-08-10 17:09:20'),
       (251, 'asdas', 'asdd', '2021-08-20', '2021-08-10 17:09:20'),
       (252, 'tt', 'tt', '2021-07-30', '2021-08-10 17:09:19'),
       (253, '3', '4', '2021-08-01', '2021-08-10 18:29:45'),
       (254, 'v', 'dvdvv', '2021-07-30', NULL),
       (255, ' с с', 'мввмяывы', '2021-07-30', NULL),
       (256, 'фывфы', 'вфыфы', '', NULL),
       (257, '', '', '', '2021-08-10 17:57:15'),
       (258, '1212', '1212', '2021-08-12', '2021-08-10 17:57:14'),
       (259, '1212', '1212', '2021-08-14', '2021-08-10 17:57:14'),
       (260, '1212', '1212', '2021-08-07', '2021-08-10 17:57:13'),
       (261, '12121', '21212', '2021-08-06', '2021-08-10 17:57:13'),
       (262, '1212', '1212', '2021-08-14', '2021-08-10 17:57:12'),
       (263, '12124', '1212', '2021-08-01', NULL);

-- Stored table indexes
-- Table indexes `books`
--
ALTER TABLE `books`
    ADD PRIMARY KEY (`book_id`);


-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
    MODIFY `book_id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;