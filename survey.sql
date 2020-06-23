-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-06-23 14:59:15
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `survey`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `survey`
--

CREATE TABLE `survey` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Q1` int(10) NOT NULL,
  `Q2` int(10) NOT NULL,
  `Q3` int(10) NOT NULL,
  `Q4` int(10) NOT NULL,
  `Q5` int(10) NOT NULL,
  `Q6` int(10) NOT NULL,
  `Q7` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `survey`
--

INSERT INTO `survey` (`name`, `email`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `created_at`, `updated_at`) VALUES
('陳明瑄', 'mu333ro331@gmail.com', 2, 1, 1, 4, 1, 0, 0, '2020-06-22 13:51:39', '2020-06-22 13:51:39'),
('陳明瑄', 'mu333ro331@gmail.com', 2, 1, 1, 4, 1, 0, 0, '2020-06-22 13:51:47', '2020-06-22 13:51:47'),
('陳明瑄', 'muro331@gmail.com', 2, 1, 0, 4, 0, 0, 0, '2020-06-22 13:52:20', '2020-06-22 13:52:20'),
('陳明瑄', 'murooo331@outlook.com', 2, 0, 2, 2, 2, 0, 1, '2020-06-22 14:01:01', '2020-06-22 14:01:01'),
('陳明瑄', 'murooo331@outlook.com', 2, 0, 2, 2, 2, 0, 1, '2020-06-22 14:01:19', '2020-06-22 14:01:19'),
('チンミンセン', 'murooo331@outlook.com', 2, 1, 2, 4, 1, 1, 1, '2020-06-22 14:17:17', '2020-06-22 14:17:17'),
('チンミンセン', 'murooo331@outlook.com', 3, 1, 1, 4, 1, 1, 0, '2020-06-23 08:15:45', '2020-06-23 08:15:45'),
('チンミンセン', 'murooo331@outlook.com', 3, 0, 2, 1, 2, 0, 1, '2020-06-23 08:17:09', '2020-06-23 08:17:09'),
('陳明瑄', 'mu333ro331@gmail.com', 3, 1, 2, 4, 2, 1, 1, '2020-06-23 11:09:10', '2020-06-23 11:09:10'),
('陳明瑄', 'murooo331@outlook.com', 2, 1, 2, 2, 2, 0, 1, '2020-06-23 20:58:58', '2020-06-23 20:58:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
