-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 01:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eye_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `answer_text` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `question_id`, `user_id`, `answer_text`, `created_at`) VALUES
(1, 1, 1, 5, '2021-10-20 16:54:04'),
(2, 2, 1, 4, '2021-10-20 16:54:04'),
(3, 3, 1, 5, '2021-10-20 16:54:04'),
(4, 4, 1, 3, '2021-10-20 16:54:04'),
(5, 5, 1, 4, '2021-10-20 16:54:04'),
(6, 6, 1, 5, '2021-10-20 16:54:04'),
(7, 7, 1, 2, '2021-10-20 16:54:04'),
(8, 8, 1, 4, '2021-10-20 16:54:04'),
(9, 9, 1, 5, '2021-10-20 16:54:04'),
(10, 10, 1, 3, '2021-10-20 16:54:04'),
(11, 11, 1, 3, '2021-10-20 16:54:04'),
(12, 12, 1, 4, '2021-10-20 16:54:04'),
(13, 13, 1, 3, '2021-10-20 16:54:04'),
(14, 14, 1, 3, '2021-10-20 16:54:04'),
(15, 15, 1, 1, '2021-10-20 16:54:04'),
(16, 16, 1, 3, '2021-10-20 16:54:04'),
(17, 17, 1, 3, '2021-10-20 16:54:04'),
(18, 18, 1, 2, '2021-10-20 16:54:04'),
(19, 19, 1, 3, '2021-10-20 16:54:04'),
(20, 20, 1, 3, '2021-10-20 16:54:04'),
(21, 21, 1, 5, '2021-10-20 16:54:04'),
(22, 22, 1, 4, '2021-10-20 16:54:04'),
(23, 23, 1, 3, '2021-10-20 16:54:04'),
(24, 24, 1, 5, '2021-10-20 16:54:04'),
(25, 25, 1, 5, '2021-10-20 16:54:04'),
(26, 26, 1, 5, '2021-10-20 16:54:04'),
(27, 27, 1, 5, '2021-10-20 16:54:04'),
(28, 28, 1, 5, '2021-10-20 16:54:04'),
(29, 29, 1, 4, '2021-10-20 16:54:04'),
(30, 30, 1, 5, '2021-10-20 16:54:04'),
(31, 31, 1, 3, '2021-10-20 16:54:04'),
(32, 32, 1, 3, '2021-10-20 16:54:04'),
(33, 33, 1, 5, '2021-10-20 16:54:04'),
(34, 34, 1, 5, '2021-10-20 16:54:04'),
(35, 35, 1, 5, '2021-10-20 16:54:04'),
(36, 36, 1, 4, '2021-10-20 16:54:04'),
(37, 37, 1, 3, '2021-10-20 16:54:04'),
(38, 38, 1, 4, '2021-10-20 16:54:04'),
(39, 39, 1, 5, '2021-10-20 16:54:04'),
(40, 40, 1, 5, '2021-10-20 16:54:04'),
(41, 41, 1, 5, '2021-10-20 16:54:04'),
(42, 42, 1, 4, '2021-10-20 16:54:04'),
(43, 43, 1, 4, '2021-10-20 16:54:04'),
(44, 44, 1, 5, '2021-10-20 16:54:04'),
(45, 45, 1, 5, '2021-10-20 16:54:04'),
(46, 46, 1, 5, '2021-10-20 16:54:04'),
(47, 47, 1, 5, '2021-10-20 16:54:04'),
(48, 48, 1, 4, '2021-10-20 16:54:04'),
(49, 49, 1, 5, '2021-10-20 16:54:04'),
(50, 50, 1, 5, '2021-10-20 16:54:04'),
(51, 51, 1, 5, '2021-10-20 16:54:04'),
(52, 52, 1, 5, '2021-10-20 16:54:04'),
(53, 53, 1, 3, '2021-10-20 16:54:04'),
(54, 54, 1, 4, '2021-10-20 16:54:04'),
(55, 55, 1, 3, '2021-10-20 16:54:04'),
(56, 56, 1, 5, '2021-10-20 16:54:04'),
(57, 57, 1, 5, '2021-10-20 16:54:04'),
(58, 58, 1, 4, '2021-10-20 16:54:04'),
(59, 59, 1, 5, '2021-10-20 16:54:04'),
(60, 60, 1, 5, '2021-10-20 16:54:04'),
(61, 61, 1, 5, '2021-10-20 16:54:04'),
(62, 62, 1, 4, '2021-10-20 16:54:04'),
(63, 63, 1, 3, '2021-10-20 16:54:04'),
(64, 64, 1, 2, '2021-10-20 16:54:04'),
(65, 65, 1, 3, '2021-10-20 16:54:04'),
(66, 66, 1, 4, '2021-10-20 16:54:04'),
(67, 67, 1, 3, '2021-10-20 16:54:04'),
(68, 68, 1, 4, '2021-10-20 16:54:04'),
(69, 69, 1, 4, '2021-10-20 16:54:04'),
(70, 70, 1, 3, '2021-10-20 16:54:04'),
(71, 71, 1, 2, '2021-10-20 16:54:04'),
(72, 72, 1, 3, '2021-10-20 16:54:04'),
(73, 73, 1, 2, '2021-10-20 16:54:04'),
(74, 74, 1, 1, '2021-10-20 16:54:04'),
(75, 75, 1, 3, '2021-10-20 16:54:04'),
(76, 76, 1, 2, '2021-10-20 16:54:04'),
(77, 77, 1, 2, '2021-10-20 16:54:04'),
(78, 78, 1, 2, '2021-10-20 16:54:04'),
(79, 79, 1, 4, '2021-10-20 16:54:04'),
(80, 80, 1, 4, '2021-10-20 16:54:04'),
(81, 1, 2, 1, '2021-10-23 09:28:42'),
(82, 2, 2, 4, '2021-10-23 09:28:42'),
(83, 3, 2, 3, '2021-10-23 09:28:42'),
(84, 4, 2, 1, '2021-10-23 09:28:42'),
(85, 5, 2, 2, '2021-10-23 09:28:42'),
(86, 6, 2, 3, '2021-10-23 09:28:42'),
(87, 7, 2, 4, '2021-10-23 09:28:42'),
(88, 8, 2, 5, '2021-10-23 09:28:42'),
(89, 9, 2, 4, '2021-10-23 09:28:42'),
(90, 10, 2, 4, '2021-10-23 09:28:42'),
(91, 11, 2, 3, '2021-10-23 09:28:42'),
(92, 12, 2, 3, '2021-10-23 09:28:42'),
(93, 13, 2, 4, '2021-10-23 09:28:42'),
(94, 14, 2, 1, '2021-10-23 09:28:42'),
(95, 15, 2, 3, '2021-10-23 09:28:42'),
(96, 16, 2, 1, '2021-10-23 09:28:42'),
(97, 17, 2, 2, '2021-10-23 09:28:42'),
(98, 18, 2, 3, '2021-10-23 09:28:42'),
(99, 19, 2, 5, '2021-10-23 09:28:42'),
(100, 20, 2, 4, '2021-10-23 09:28:42'),
(101, 21, 2, 5, '2021-10-23 09:28:42'),
(102, 22, 2, 1, '2021-10-23 09:28:42'),
(103, 23, 2, 2, '2021-10-23 09:28:42'),
(104, 24, 2, 5, '2021-10-23 09:28:42'),
(105, 25, 2, 1, '2021-10-23 09:28:42'),
(106, 26, 2, 1, '2021-10-23 09:28:42'),
(107, 27, 2, 4, '2021-10-23 09:28:42'),
(108, 28, 2, 3, '2021-10-23 09:28:42'),
(109, 29, 2, 1, '2021-10-23 09:28:42'),
(110, 30, 2, 3, '2021-10-23 09:28:42'),
(111, 31, 2, 1, '2021-10-23 09:28:42'),
(112, 32, 2, 1, '2021-10-23 09:28:42'),
(113, 33, 2, 3, '2021-10-23 09:28:42'),
(114, 34, 2, 2, '2021-10-23 09:28:42'),
(115, 35, 2, 2, '2021-10-23 09:28:42'),
(116, 36, 2, 3, '2021-10-23 09:28:42'),
(117, 37, 2, 2, '2021-10-23 09:28:42'),
(118, 38, 2, 4, '2021-10-23 09:28:42'),
(119, 39, 2, 1, '2021-10-23 09:28:42'),
(120, 40, 2, 5, '2021-10-23 09:28:42'),
(121, 41, 2, 4, '2021-10-23 09:28:42'),
(122, 42, 2, 2, '2021-10-23 09:28:42'),
(123, 43, 2, 4, '2021-10-23 09:28:42'),
(124, 44, 2, 1, '2021-10-23 09:28:42'),
(125, 45, 2, 4, '2021-10-23 09:28:42'),
(126, 46, 2, 3, '2021-10-23 09:28:42'),
(127, 47, 2, 5, '2021-10-23 09:28:42'),
(128, 48, 2, 4, '2021-10-23 09:28:42'),
(129, 49, 2, 4, '2021-10-23 09:28:42'),
(130, 50, 2, 5, '2021-10-23 09:28:42'),
(131, 51, 2, 2, '2021-10-23 09:28:42'),
(132, 52, 2, 4, '2021-10-23 09:28:42'),
(133, 53, 2, 2, '2021-10-23 09:28:42'),
(134, 54, 2, 3, '2021-10-23 09:28:42'),
(135, 55, 2, 1, '2021-10-23 09:28:42'),
(136, 56, 2, 5, '2021-10-23 09:28:42'),
(137, 57, 2, 2, '2021-10-23 09:28:42'),
(138, 58, 2, 4, '2021-10-23 09:28:42'),
(139, 59, 2, 2, '2021-10-23 09:28:42'),
(140, 60, 2, 4, '2021-10-23 09:28:42'),
(141, 61, 2, 4, '2021-10-23 09:28:42'),
(142, 62, 2, 5, '2021-10-23 09:28:42'),
(143, 63, 2, 3, '2021-10-23 09:28:42'),
(144, 64, 2, 3, '2021-10-23 09:28:42'),
(145, 65, 2, 5, '2021-10-23 09:28:42'),
(146, 66, 2, 2, '2021-10-23 09:28:42'),
(147, 67, 2, 5, '2021-10-23 09:28:42'),
(148, 68, 2, 1, '2021-10-23 09:28:42'),
(149, 69, 2, 2, '2021-10-23 09:28:42'),
(150, 70, 2, 2, '2021-10-23 09:28:42'),
(151, 71, 2, 4, '2021-10-23 09:28:42'),
(152, 72, 2, 4, '2021-10-23 09:28:42'),
(153, 73, 2, 4, '2021-10-23 09:28:42'),
(154, 74, 2, 4, '2021-10-23 09:28:42'),
(155, 75, 2, 2, '2021-10-23 09:28:42'),
(156, 76, 2, 2, '2021-10-23 09:28:42'),
(157, 77, 2, 4, '2021-10-23 09:28:42'),
(158, 78, 2, 5, '2021-10-23 09:28:42'),
(159, 79, 2, 5, '2021-10-23 09:28:42'),
(160, 80, 2, 1, '2021-10-23 09:28:42'),
(161, 1, 3, 1, '2021-10-23 09:29:03'),
(162, 2, 3, 4, '2021-10-23 09:29:03'),
(163, 3, 3, 3, '2021-10-23 09:29:03'),
(164, 4, 3, 1, '2021-10-23 09:29:03'),
(165, 5, 3, 2, '2021-10-23 09:29:03'),
(166, 6, 3, 3, '2021-10-23 09:29:03'),
(167, 7, 3, 4, '2021-10-23 09:29:03'),
(168, 8, 3, 5, '2021-10-23 09:29:03'),
(169, 9, 3, 4, '2021-10-23 09:29:03'),
(170, 10, 3, 4, '2021-10-23 09:29:03'),
(171, 11, 3, 3, '2021-10-23 09:29:03'),
(172, 12, 3, 3, '2021-10-23 09:29:03'),
(173, 13, 3, 4, '2021-10-23 09:29:03'),
(174, 14, 3, 1, '2021-10-23 09:29:03'),
(175, 15, 3, 3, '2021-10-23 09:29:04'),
(176, 16, 3, 1, '2021-10-23 09:29:04'),
(177, 17, 3, 2, '2021-10-23 09:29:04'),
(178, 18, 3, 3, '2021-10-23 09:29:04'),
(179, 19, 3, 5, '2021-10-23 09:29:04'),
(180, 20, 3, 4, '2021-10-23 09:29:04'),
(181, 21, 3, 5, '2021-10-23 09:29:04'),
(182, 22, 3, 1, '2021-10-23 09:29:04'),
(183, 23, 3, 2, '2021-10-23 09:29:04'),
(184, 24, 3, 5, '2021-10-23 09:29:04'),
(185, 25, 3, 1, '2021-10-23 09:29:04'),
(186, 26, 3, 1, '2021-10-23 09:29:04'),
(187, 27, 3, 4, '2021-10-23 09:29:04'),
(188, 28, 3, 3, '2021-10-23 09:29:04'),
(189, 29, 3, 1, '2021-10-23 09:29:04'),
(190, 30, 3, 3, '2021-10-23 09:29:04'),
(191, 31, 3, 1, '2021-10-23 09:29:04'),
(192, 32, 3, 1, '2021-10-23 09:29:04'),
(193, 33, 3, 3, '2021-10-23 09:29:04'),
(194, 34, 3, 2, '2021-10-23 09:29:04'),
(195, 35, 3, 2, '2021-10-23 09:29:04'),
(196, 36, 3, 3, '2021-10-23 09:29:04'),
(197, 37, 3, 2, '2021-10-23 09:29:04'),
(198, 38, 3, 4, '2021-10-23 09:29:04'),
(199, 39, 3, 1, '2021-10-23 09:29:04'),
(200, 40, 3, 5, '2021-10-23 09:29:04'),
(201, 41, 3, 4, '2021-10-23 09:29:04'),
(202, 42, 3, 2, '2021-10-23 09:29:04'),
(203, 43, 3, 4, '2021-10-23 09:29:04'),
(204, 44, 3, 1, '2021-10-23 09:29:04'),
(205, 45, 3, 4, '2021-10-23 09:29:04'),
(206, 46, 3, 3, '2021-10-23 09:29:04'),
(207, 47, 3, 5, '2021-10-23 09:29:04'),
(208, 48, 3, 4, '2021-10-23 09:29:04'),
(209, 49, 3, 4, '2021-10-23 09:29:04'),
(210, 50, 3, 5, '2021-10-23 09:29:04'),
(211, 51, 3, 2, '2021-10-23 09:29:04'),
(212, 52, 3, 4, '2021-10-23 09:29:04'),
(213, 53, 3, 2, '2021-10-23 09:29:04'),
(214, 54, 3, 3, '2021-10-23 09:29:04'),
(215, 55, 3, 1, '2021-10-23 09:29:04'),
(216, 56, 3, 5, '2021-10-23 09:29:04'),
(217, 57, 3, 2, '2021-10-23 09:29:04'),
(218, 58, 3, 4, '2021-10-23 09:29:04'),
(219, 59, 3, 2, '2021-10-23 09:29:04'),
(220, 60, 3, 4, '2021-10-23 09:29:04'),
(221, 61, 3, 4, '2021-10-23 09:29:04'),
(222, 62, 3, 5, '2021-10-23 09:29:04'),
(223, 63, 3, 3, '2021-10-23 09:29:04'),
(224, 64, 3, 3, '2021-10-23 09:29:04'),
(225, 65, 3, 5, '2021-10-23 09:29:04'),
(226, 66, 3, 2, '2021-10-23 09:29:04'),
(227, 67, 3, 5, '2021-10-23 09:29:04'),
(228, 68, 3, 1, '2021-10-23 09:29:04'),
(229, 69, 3, 2, '2021-10-23 09:29:04'),
(230, 70, 3, 2, '2021-10-23 09:29:04'),
(231, 71, 3, 4, '2021-10-23 09:29:04'),
(232, 72, 3, 4, '2021-10-23 09:29:04'),
(233, 73, 3, 4, '2021-10-23 09:29:04'),
(234, 74, 3, 4, '2021-10-23 09:29:04'),
(235, 75, 3, 2, '2021-10-23 09:29:04'),
(236, 76, 3, 2, '2021-10-23 09:29:04'),
(237, 77, 3, 4, '2021-10-23 09:29:04'),
(238, 78, 3, 5, '2021-10-23 09:29:04'),
(239, 79, 3, 5, '2021-10-23 09:29:04'),
(240, 80, 3, 1, '2021-10-23 09:29:04'),
(241, 1, 4, 1, '2021-10-23 09:29:16'),
(242, 2, 4, 4, '2021-10-23 09:29:16'),
(243, 3, 4, 3, '2021-10-23 09:29:16'),
(244, 4, 4, 1, '2021-10-23 09:29:16'),
(245, 5, 4, 2, '2021-10-23 09:29:16'),
(246, 6, 4, 3, '2021-10-23 09:29:16'),
(247, 7, 4, 4, '2021-10-23 09:29:16'),
(248, 8, 4, 5, '2021-10-23 09:29:16'),
(249, 9, 4, 4, '2021-10-23 09:29:16'),
(250, 10, 4, 4, '2021-10-23 09:29:16'),
(251, 11, 4, 3, '2021-10-23 09:29:16'),
(252, 12, 4, 3, '2021-10-23 09:29:16'),
(253, 13, 4, 4, '2021-10-23 09:29:16'),
(254, 14, 4, 1, '2021-10-23 09:29:16'),
(255, 15, 4, 3, '2021-10-23 09:29:16'),
(256, 16, 4, 1, '2021-10-23 09:29:16'),
(257, 17, 4, 2, '2021-10-23 09:29:16'),
(258, 18, 4, 3, '2021-10-23 09:29:16'),
(259, 19, 4, 5, '2021-10-23 09:29:16'),
(260, 20, 4, 4, '2021-10-23 09:29:16'),
(261, 21, 4, 5, '2021-10-23 09:29:16'),
(262, 22, 4, 1, '2021-10-23 09:29:16'),
(263, 23, 4, 2, '2021-10-23 09:29:16'),
(264, 24, 4, 5, '2021-10-23 09:29:16'),
(265, 25, 4, 1, '2021-10-23 09:29:16'),
(266, 26, 4, 1, '2021-10-23 09:29:16'),
(267, 27, 4, 4, '2021-10-23 09:29:16'),
(268, 28, 4, 3, '2021-10-23 09:29:16'),
(269, 29, 4, 1, '2021-10-23 09:29:16'),
(270, 30, 4, 3, '2021-10-23 09:29:16'),
(271, 31, 4, 1, '2021-10-23 09:29:16'),
(272, 32, 4, 1, '2021-10-23 09:29:16'),
(273, 33, 4, 3, '2021-10-23 09:29:16'),
(274, 34, 4, 2, '2021-10-23 09:29:16'),
(275, 35, 4, 2, '2021-10-23 09:29:16'),
(276, 36, 4, 3, '2021-10-23 09:29:16'),
(277, 37, 4, 2, '2021-10-23 09:29:16'),
(278, 38, 4, 4, '2021-10-23 09:29:16'),
(279, 39, 4, 1, '2021-10-23 09:29:16'),
(280, 40, 4, 5, '2021-10-23 09:29:16'),
(281, 41, 4, 4, '2021-10-23 09:29:16'),
(282, 42, 4, 2, '2021-10-23 09:29:16'),
(283, 43, 4, 4, '2021-10-23 09:29:16'),
(284, 44, 4, 1, '2021-10-23 09:29:16'),
(285, 45, 4, 4, '2021-10-23 09:29:16'),
(286, 46, 4, 3, '2021-10-23 09:29:16'),
(287, 47, 4, 5, '2021-10-23 09:29:16'),
(288, 48, 4, 4, '2021-10-23 09:29:16'),
(289, 49, 4, 4, '2021-10-23 09:29:16'),
(290, 50, 4, 5, '2021-10-23 09:29:16'),
(291, 51, 4, 2, '2021-10-23 09:29:16'),
(292, 52, 4, 4, '2021-10-23 09:29:16'),
(293, 53, 4, 2, '2021-10-23 09:29:16'),
(294, 54, 4, 3, '2021-10-23 09:29:16'),
(295, 55, 4, 1, '2021-10-23 09:29:16'),
(296, 56, 4, 5, '2021-10-23 09:29:16'),
(297, 57, 4, 2, '2021-10-23 09:29:16'),
(298, 58, 4, 4, '2021-10-23 09:29:16'),
(299, 59, 4, 2, '2021-10-23 09:29:16'),
(300, 60, 4, 4, '2021-10-23 09:29:16'),
(301, 61, 4, 4, '2021-10-23 09:29:16'),
(302, 62, 4, 5, '2021-10-23 09:29:16'),
(303, 63, 4, 3, '2021-10-23 09:29:16'),
(304, 64, 4, 3, '2021-10-23 09:29:16'),
(305, 65, 4, 5, '2021-10-23 09:29:16'),
(306, 66, 4, 2, '2021-10-23 09:29:16'),
(307, 67, 4, 5, '2021-10-23 09:29:16'),
(308, 68, 4, 1, '2021-10-23 09:29:16'),
(309, 69, 4, 2, '2021-10-23 09:29:16'),
(310, 70, 4, 2, '2021-10-23 09:29:16'),
(311, 71, 4, 4, '2021-10-23 09:29:16'),
(312, 72, 4, 4, '2021-10-23 09:29:16'),
(313, 73, 4, 4, '2021-10-23 09:29:16'),
(314, 74, 4, 4, '2021-10-23 09:29:16'),
(315, 75, 4, 2, '2021-10-23 09:29:16'),
(316, 76, 4, 2, '2021-10-23 09:29:16'),
(317, 77, 4, 4, '2021-10-23 09:29:16'),
(318, 78, 4, 5, '2021-10-23 09:29:16'),
(319, 79, 4, 5, '2021-10-23 09:29:16'),
(320, 80, 4, 1, '2021-10-23 09:29:16'),
(321, 1, 5, 5, '2021-10-23 10:45:53'),
(322, 2, 5, 4, '2021-10-23 10:45:53'),
(323, 3, 5, 4, '2021-10-23 10:45:53'),
(324, 4, 5, 4, '2021-10-23 10:45:53'),
(325, 5, 5, 5, '2021-10-23 10:45:53'),
(326, 6, 5, 3, '2021-10-23 10:45:53'),
(327, 7, 5, 3, '2021-10-23 10:45:53'),
(328, 8, 5, 5, '2021-10-23 10:45:53'),
(329, 9, 5, 2, '2021-10-23 10:45:53'),
(330, 10, 5, 2, '2021-10-23 10:45:53'),
(331, 11, 5, 3, '2021-10-23 10:45:53'),
(332, 12, 5, 4, '2021-10-23 10:45:53'),
(333, 13, 5, 1, '2021-10-23 10:45:53'),
(334, 14, 5, 4, '2021-10-23 10:45:53'),
(335, 15, 5, 1, '2021-10-23 10:45:53'),
(336, 16, 5, 4, '2021-10-23 10:45:53'),
(337, 17, 5, 4, '2021-10-23 10:45:53'),
(338, 18, 5, 3, '2021-10-23 10:45:53'),
(339, 19, 5, 5, '2021-10-23 10:45:53'),
(340, 20, 5, 1, '2021-10-23 10:45:53'),
(341, 21, 5, 5, '2021-10-23 10:45:53'),
(342, 22, 5, 1, '2021-10-23 10:45:53'),
(343, 23, 5, 4, '2021-10-23 10:45:53'),
(344, 24, 5, 2, '2021-10-23 10:45:53'),
(345, 25, 5, 4, '2021-10-23 10:45:53'),
(346, 26, 5, 2, '2021-10-23 10:45:53'),
(347, 27, 5, 1, '2021-10-23 10:45:53'),
(348, 28, 5, 2, '2021-10-23 10:45:53'),
(349, 29, 5, 4, '2021-10-23 10:45:53'),
(350, 30, 5, 2, '2021-10-23 10:45:53'),
(351, 31, 5, 4, '2021-10-23 10:45:53'),
(352, 32, 5, 5, '2021-10-23 10:45:53'),
(353, 33, 5, 4, '2021-10-23 10:45:53'),
(354, 34, 5, 3, '2021-10-23 10:45:53'),
(355, 35, 5, 2, '2021-10-23 10:45:53'),
(356, 36, 5, 5, '2021-10-23 10:45:53'),
(357, 37, 5, 5, '2021-10-23 10:45:53'),
(358, 38, 5, 3, '2021-10-23 10:45:53'),
(359, 39, 5, 5, '2021-10-23 10:45:53'),
(360, 40, 5, 3, '2021-10-23 10:45:53'),
(361, 41, 5, 2, '2021-10-23 10:45:53'),
(362, 42, 5, 2, '2021-10-23 10:45:53'),
(363, 43, 5, 3, '2021-10-23 10:45:53'),
(364, 44, 5, 1, '2021-10-23 10:45:53'),
(365, 45, 5, 1, '2021-10-23 10:45:53'),
(366, 46, 5, 4, '2021-10-23 10:45:53'),
(367, 47, 5, 2, '2021-10-23 10:45:53'),
(368, 48, 5, 1, '2021-10-23 10:45:53'),
(369, 49, 5, 3, '2021-10-23 10:45:53'),
(370, 50, 5, 3, '2021-10-23 10:45:53'),
(371, 51, 5, 5, '2021-10-23 10:45:53'),
(372, 52, 5, 5, '2021-10-23 10:45:53'),
(373, 53, 5, 3, '2021-10-23 10:45:53'),
(374, 54, 5, 2, '2021-10-23 10:45:53'),
(375, 55, 5, 2, '2021-10-23 10:45:53'),
(376, 56, 5, 2, '2021-10-23 10:45:53'),
(377, 57, 5, 1, '2021-10-23 10:45:53'),
(378, 58, 5, 1, '2021-10-23 10:45:53'),
(379, 59, 5, 5, '2021-10-23 10:45:53'),
(380, 60, 5, 3, '2021-10-23 10:45:53'),
(381, 61, 5, 1, '2021-10-23 10:45:53'),
(382, 62, 5, 2, '2021-10-23 10:45:53'),
(383, 63, 5, 3, '2021-10-23 10:45:53'),
(384, 64, 5, 1, '2021-10-23 10:45:53'),
(385, 65, 5, 5, '2021-10-23 10:45:53'),
(386, 66, 5, 2, '2021-10-23 10:45:53'),
(387, 67, 5, 3, '2021-10-23 10:45:53'),
(388, 68, 5, 5, '2021-10-23 10:45:53'),
(389, 69, 5, 3, '2021-10-23 10:45:53'),
(390, 70, 5, 4, '2021-10-23 10:45:53'),
(391, 71, 5, 5, '2021-10-23 10:45:53'),
(392, 72, 5, 5, '2021-10-23 10:45:53'),
(393, 73, 5, 5, '2021-10-23 10:45:53'),
(394, 74, 5, 5, '2021-10-23 10:45:53'),
(395, 75, 5, 1, '2021-10-23 10:45:53'),
(396, 76, 5, 4, '2021-10-23 10:45:53'),
(397, 77, 5, 4, '2021-10-23 10:45:53'),
(398, 78, 5, 4, '2021-10-23 10:45:53'),
(399, 79, 5, 4, '2021-10-23 10:45:53'),
(400, 80, 5, 3, '2021-10-23 10:45:53'),
(402, 61, 6, 1, '2021-11-05 08:40:54'),
(403, 62, 6, 5, '2021-11-05 08:40:54'),
(404, 63, 6, 5, '2021-11-05 08:40:54'),
(405, 64, 6, 3, '2021-11-05 08:40:54'),
(406, 65, 6, 1, '2021-11-05 08:40:54'),
(407, 66, 6, 1, '2021-11-05 08:40:54'),
(408, 67, 6, 4, '2021-11-05 08:40:54'),
(409, 68, 6, 3, '2021-11-05 08:40:54'),
(410, 69, 6, 2, '2021-11-05 08:40:54'),
(411, 70, 6, 1, '2021-11-05 08:40:54'),
(412, 71, 6, 3, '2021-11-05 08:40:54'),
(413, 72, 6, 4, '2021-11-05 08:40:54'),
(414, 73, 6, 4, '2021-11-05 08:40:54'),
(415, 74, 6, 4, '2021-11-05 08:40:54'),
(416, 75, 6, 3, '2021-11-05 08:40:54'),
(417, 76, 6, 5, '2021-11-05 08:40:54'),
(418, 77, 6, 5, '2021-11-05 08:40:54'),
(419, 78, 6, 5, '2021-11-05 08:40:54'),
(420, 79, 6, 5, '2021-11-05 08:40:54'),
(421, 80, 6, 5, '2021-11-05 08:40:54'),
(422, 82, 6, 2, '2021-11-05 08:40:54'),
(423, 83, 6, 4, '2021-11-05 08:40:54'),
(424, 61, 7, 1, '2021-11-05 08:41:03'),
(425, 62, 7, 5, '2021-11-05 08:41:03'),
(426, 63, 7, 5, '2021-11-05 08:41:03'),
(427, 64, 7, 3, '2021-11-05 08:41:03'),
(428, 65, 7, 1, '2021-11-05 08:41:03'),
(429, 66, 7, 1, '2021-11-05 08:41:03'),
(430, 67, 7, 4, '2021-11-05 08:41:03'),
(431, 68, 7, 3, '2021-11-05 08:41:03'),
(432, 69, 7, 2, '2021-11-05 08:41:03'),
(433, 70, 7, 1, '2021-11-05 08:41:03'),
(434, 71, 7, 3, '2021-11-05 08:41:03'),
(435, 72, 7, 4, '2021-11-05 08:41:03'),
(436, 73, 7, 4, '2021-11-05 08:41:03'),
(437, 74, 7, 4, '2021-11-05 08:41:03'),
(438, 75, 7, 3, '2021-11-05 08:41:03'),
(439, 76, 7, 5, '2021-11-05 08:41:03'),
(440, 77, 7, 5, '2021-11-05 08:41:03'),
(441, 78, 7, 5, '2021-11-05 08:41:03'),
(442, 79, 7, 5, '2021-11-05 08:41:03'),
(443, 80, 7, 5, '2021-11-05 08:41:03'),
(444, 82, 7, 2, '2021-11-05 08:41:03'),
(445, 83, 7, 4, '2021-11-05 08:41:03'),
(446, 61, 8, 5, '2021-11-05 09:25:28'),
(447, 62, 8, 1, '2021-11-05 09:25:28'),
(448, 63, 8, 3, '2021-11-05 09:25:28'),
(449, 64, 8, 1, '2021-11-05 09:25:28'),
(450, 65, 8, 5, '2021-11-05 09:25:28'),
(451, 66, 8, 4, '2021-11-05 09:25:28'),
(452, 67, 8, 3, '2021-11-05 09:25:28'),
(453, 68, 8, 2, '2021-11-05 09:25:28'),
(454, 69, 8, 3, '2021-11-05 09:25:28'),
(455, 70, 8, 2, '2021-11-05 09:25:28'),
(456, 71, 8, 4, '2021-11-05 09:25:28'),
(457, 72, 8, 2, '2021-11-05 09:25:28'),
(458, 73, 8, 2, '2021-11-05 09:25:28'),
(459, 74, 8, 3, '2021-11-05 09:25:28'),
(460, 75, 8, 3, '2021-11-05 09:25:28'),
(461, 76, 8, 5, '2021-11-05 09:25:28'),
(462, 77, 8, 5, '2021-11-05 09:25:28'),
(463, 78, 8, 5, '2021-11-05 09:25:28'),
(464, 79, 8, 4, '2021-11-05 09:25:28'),
(465, 80, 8, 2, '2021-11-05 09:25:28'),
(466, 82, 8, 3, '2021-11-05 09:25:28'),
(467, 83, 8, 5, '2021-11-05 09:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `company_name`, `email`, `contact_no`, `address`) VALUES
(1, 'Tamara Trantow', 'your.email+faker53336@gmail.com', '638', '69698 Mante Junction');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_detail`
--

CREATE TABLE `personal_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `report_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_detail`
--

INSERT INTO `personal_detail` (`id`, `name`, `guardian_name`, `birth_date`, `gender`, `contact_no`, `email_id`, `address`, `report_name`, `created_at`) VALUES
(1, 'Lesly.Schulist88', 'Vivian Johns', '1999-11-11', 'Female', '67689-67669', 'your.email+faker86424@gmail.com', '78607 Sylvester Turnpike', '', '2021-10-20 16:54:04'),
(2, 'Nicholaus.Larson', 'Kariane Bartoletti', '1999-11-11', 'Female', '87349-87897', 'your.email+faker78397@gmail.com', '325 Ritchie Trafficway', 'report.pdf', '2021-10-23 09:28:42'),
(3, 'Nicholaus.Larson', 'Kariane Bartoletti', '1999-11-11', 'Female', '87349-87897', 'your.email+faker78397@gmail.com', '325 Ritchie Trafficway', 'report_3.pdf', '2021-10-23 09:29:04'),
(4, 'Nicholaus.Larson', 'Kariane Bartoletti', '1999-11-11', 'Female', '87349-87897', 'your.email+faker78397@gmail.com', '325 Ritchie Trafficway', 'report_4.pdf', '2021-10-23 09:29:16'),
(5, 'Delmer27', 'Weston Wintheiser', '1999-05-01', 'Female', '53087-97797', 'your.email+faker89063@gmail.com', '8891 Nader Viaduct', 'report_5.pdf', '2021-10-23 10:45:53'),
(6, 'Connie.Nader', 'Rosemary Dibbert', '2009-11-11', 'Female', '75757-65757', 'your.email+faker11399@gmail.com', '4529 Stehr Loop', 'report_6.pdf', '2021-11-05 08:40:54'),
(7, 'Connie.Nader', 'Rosemary Dibbert', '2009-11-11', 'Female', '75757-65757', 'your.email+faker11399@gmail.com', '4529 Stehr Loop', 'report_7.pdf', '2021-11-05 08:41:03'),
(8, 'Corbin_Robel49', 'Kaylie Stamm', '2021-12-11', 'Female', '87686-87687', 'your.email+faker24515@gmail.com', '579 Kiehn Valley', 'report_8.pdf', '2021-11-05 09:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `question_text` varchar(100) NOT NULL,
  `q_active` tinyint(1) NOT NULL,
  `rating_max` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `category_id`, `question_text`, `q_active`, `rating_max`) VALUES
(1, 2, 'I work best with Red Color composition', 1, 5),
(2, 2, 'I enjoy Red using pen and sketch', 1, 5),
(3, 2, 'I keep a things to do with red', 1, 5),
(4, 2, 'I enjoy playing with red puzzles.', 1, 5),
(5, 2, 'I like to ask ‘why’ questions on red composition', 1, 5),
(6, 2, 'I work best when I have red and white composition', 1, 5),
(7, 2, 'I quickly grasp cause and effects of red color composition', 1, 5),
(8, 2, 'I like to think through red and other color consequences', 1, 5),
(9, 2, 'I find managing my color composition with red best', 1, 5),
(10, 2, 'I always do things with red, White and Black', 1, 5),
(11, 3, 'I like to do with Purple color composition', 1, 5),
(12, 3, 'I enjoy participating Purple color composition seminar', 1, 5),
(13, 3, 'I am curious on Purple color composition theory', 1, 5),
(14, 3, 'I am well co-ordinated with Purple color composition and Red theory', 1, 5),
(15, 3, 'I enjoy and am good at Purple color composition thoery', 1, 5),
(16, 3, 'I prefer to design Purple color composition rather than software cell', 1, 5),
(17, 3, 'I understand best by doing with Purple color composition', 1, 5),
(18, 3, 'I never use instructions for Purple color composition', 1, 5),
(19, 3, 'To learn something new with red, pink and Purple color composition', 1, 5),
(20, 3, 'I find it easiest to solve problems with Purple color composition', 1, 5),
(21, 4, 'I can use lots of Maroon colors to express in design and art', 1, 5),
(22, 4, 'I feel comfortable working with Maroon colors', 1, 5),
(23, 4, 'I enjoy Maroon and other color like Green, Black and White', 1, 5),
(24, 4, 'I tend to remember things exactly Maroons when I imagine', 1, 5),
(25, 4, 'I enjoy participating with Maroon color composition', 1, 5),
(26, 4, 'I find it easy to express things to others with maroon color composition', 1, 5),
(27, 4, 'I enjoy keeping maroon color story board and script', 1, 5),
(28, 4, 'I find it easy to make up story board with maroon color composition', 1, 5),
(29, 4, 'I am a convincing graphic presenter with maroon', 1, 5),
(30, 4, 'I like to understand more about maroon color', 1, 5),
(31, 5, 'I understand colour combinations and what colours work well with Yellow', 1, 5),
(32, 5, 'I enjoy solving Yellow color composition', 1, 5),
(33, 5, 'I read charts and maps of Yellow color composition', 1, 5),
(34, 5, 'I have a good sense Yellow color composition', 1, 5),
(35, 5, 'I like to do something with Yellow color composition theory', 1, 5),
(36, 5, 'I am observant. I often see things that others miss with Yellow color composition', 1, 5),
(37, 5, 'I can anticipate the Yellow color composition practice', 1, 5),
(38, 5, 'I find graphs and charts of Yellow color composition easy to understand', 1, 5),
(39, 5, 'I am always recognise Yellow color composition value', 1, 5),
(40, 5, 'I can picture scenes in my head with Yellow color composition', 1, 5),
(41, 6, 'I am happy spending time with Orange color composition', 1, 5),
(42, 6, 'I have a few close Orange color composition', 1, 5),
(43, 6, 'I have strong opinions about Orange color composition', 1, 5),
(44, 6, 'I work best when Orange color composition with white and red', 1, 5),
(45, 6, 'I am not easily influenced by other color composition except Orange', 1, 5),
(46, 6, 'I am self aware about Orange color composition', 1, 5),
(47, 6, 'I set myself own Orange color composition', 1, 5),
(48, 6, 'I have a good understanding of how I will express to Orange color composition', 1, 5),
(49, 6, 'I often raise questions concerning values of Orange color composition', 1, 5),
(50, 6, 'I enjoy working on Orange color composition', 1, 5),
(51, 7, 'I can sense the Pink color composition value', 1, 5),
(52, 7, 'I work best when Pink color composition value with red and blue', 1, 5),
(53, 7, 'I enjoy Pink color composition', 1, 5),
(54, 7, 'I can sort out Pink color composition values', 1, 5),
(55, 7, 'I prefer Pink color composition with white and red', 1, 5),
(56, 7, 'I am a very passionate about Pink color composition', 1, 5),
(57, 7, 'I could manipulate Pink color composition with other colors', 1, 5),
(58, 7, 'I enjoy learning about Pink color composition theory', 1, 5),
(59, 7, 'I find it easy to express with Pink color composition', 1, 5),
(60, 7, 'I enjoy sharing my ideas with Pink color composition', 1, 5),
(61, 8, 'Green color composition makes me Calm', 1, 5),
(62, 8, 'I notice similarities and differences in Green color composition', 1, 5),
(63, 8, 'I feel very strongly about Green color composition', 1, 5),
(64, 8, 'I Likes to explore knowledge about Green color composition', 1, 5),
(65, 8, 'I Can easily observe and detect changes with Green color composition', 1, 5),
(66, 8, 'I enjoy Green color composition theory', 1, 5),
(67, 8, 'I engage with Green color visual composition', 1, 5),
(68, 8, 'I like painting with Green color composition', 1, 5),
(69, 8, 'I enjoy Green color composition with Blue color theory', 1, 5),
(70, 8, 'When I leave skecth to do, I wil plant with Green color composition ', 1, 5),
(71, 9, 'I often play with Blue color composition', 1, 5),
(72, 9, 'My mood changes when I see Blue color composition', 1, 5),
(73, 9, 'It is easy for me to follow the Blue color composition', 1, 5),
(74, 9, 'I can identify most Blue color composition theory', 1, 5),
(75, 9, 'Blue color composition makes me feel happy', 1, 5),
(76, 9, 'I can pick the value of Blue color composition', 1, 5),
(77, 9, 'I keep Blue color composition with Green and White', 1, 5),
(78, 9, 'I can work best with Blue color composition', 1, 5),
(79, 9, 'I find it easy to engage with Blue color composition', 1, 5),
(80, 9, 'I can remember more with Blue color composition ', 1, 5),
(82, 11, 'I work best with Sky Blue Color composition', 1, 5),
(83, 12, 'I work best with Lavendar Color composition', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `question_category`
--

CREATE TABLE `question_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `color_code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `btn_name` varchar(50) NOT NULL,
  `cat_active` tinyint(1) NOT NULL,
  `color_category` varchar(50) NOT NULL,
  `rgb_value` varchar(10) NOT NULL,
  `is_primary_color` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_category`
--

INSERT INTO `question_category` (`category_id`, `color_code`, `title`, `btn_name`, `cat_active`, `color_category`, `rgb_value`, `is_primary_color`, `created_at`) VALUES
(2, 'Red', 'Red Color Questions', 'Red_color_btn', 0, 'lf', '#f7000f', 1, '2021-10-20 09:57:02'),
(3, 'Purple', 'Purple Color Questions', 'Purple_color_btn', 0, 'rf', '#00e600', 1, '2021-10-20 09:57:02'),
(4, 'Maroon', 'Maroon Color Questions', 'Maroon_color_btn', 0, 'lf', '#ffff00', 0, '2021-10-20 09:57:02'),
(5, 'Yellow', 'Yellow Color Questions', 'Yellow_color_btn', 0, 'rf', '#e600e6', 0, '2021-10-20 09:57:02'),
(6, 'Orange', 'Orange Color Questions', 'Orange_color_btn', 0, 'lf', '#ffb3bf', 1, '2021-10-20 09:57:02'),
(7, 'Pink', 'Pink Color Questions', 'Pink_color_btn', 0, 'rf', '#ffaf1a', 1, '2021-10-20 09:57:02'),
(8, 'Green', 'Green Color Questions', 'Green_color_btn', 1, 'lf', '#cc0000', 0, '2021-10-20 09:57:02'),
(9, 'Blue', 'Blue Color Questions', 'Blue_color_btn', 1, 'rf', '#0000FF', 0, '2021-10-20 09:57:02'),
(11, 'Sky Blue', 'Sky Blue Color Questions', 'Sky_Blue_color_btn', 1, 'rf', '#87ceeb', 1, '2021-11-05 08:07:42'),
(12, 'Lavendar', 'Lavendar Color Options', 'Lavendar_color_btn', 1, 'lf', '#E6E6FA', 0, '2021-11-05 08:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$8CdQdN0GiyHorjkRMepE7.cjROF3CjozWBOwG9fMTDn7rjlu8sKmu', NULL, '2021-10-20 03:55:41', '2021-10-20 03:55:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `a_question_id` (`question_id`),
  ADD KEY `a_user_id` (`user_id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_detail`
--
ALTER TABLE `personal_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `question_category`
--
ALTER TABLE `question_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=468;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_detail`
--
ALTER TABLE `personal_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `question_category`
--
ALTER TABLE `question_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `a_question_id` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `a_user_id` FOREIGN KEY (`user_id`) REFERENCES `personal_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
