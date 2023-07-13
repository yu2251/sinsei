-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-07-12 23:42:43
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_d13_26_kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `basic_data1`
--

CREATE TABLE `basic_data1` (
  `id` int(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `tel` text NOT NULL,
  `sex` varchar(3) NOT NULL,
  `age` int(3) NOT NULL,
  `postn` int(8) NOT NULL,
  `address` varchar(128) NOT NULL,
  `bank` varchar(128) NOT NULL,
  `bankcode` decimal(4,0) UNSIGNED ZEROFILL DEFAULT NULL,
  `deadline` date NOT NULL,
  `shapes` text NOT NULL,
  `password` text NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_signup` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- テーブルのデータのダンプ `basic_data1`
--

INSERT INTO `basic_data1` (`id`, `name`, `tel`, `sex`, `age`, `postn`, `address`, `bank`, `bankcode`, `deadline`, `shapes`, `password`, `is_admin`, `is_signup`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '茶とらお', '093-561-1210', '男', 100, 8030813, '福岡県北九州市小倉北区城内', '北九州', 0001, '2023-06-09', '', 'かりかり', 1, 1, '0000-00-00 00:00:00', '2023-07-12 23:01:47', NULL),
(2, 'さばとら子', '092-711-4666', '女', 79, 8100043, '福岡県福岡市中央区城内', '福岡', 0002, '2023-06-13', '', 'ちゅーる', 0, 1, '0000-00-00 00:00:00', '2023-07-12 23:22:43', NULL),
(3, 'ペルシャ', '096-352-5900', '女', 17, 8600002, '熊本県熊本市中央区本丸', '熊本', NULL, '0000-00-00', '', 'ねこかん', 0, 0, '2023-07-12 07:51:28', '2023-07-12 23:00:34', NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `basic_data1`
--
ALTER TABLE `basic_data1`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `basic_data1`
--
ALTER TABLE `basic_data1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
