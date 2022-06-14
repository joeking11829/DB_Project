-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2022 年 06 月 15 日 02:00
-- 伺服器版本： 8.0.29-0ubuntu0.20.04.3
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `Course`
--

-- --------------------------------------------------------

--
-- 資料表結構 `Attend`
--

CREATE TABLE `Attend` (
  `aId` int UNSIGNED NOT NULL,
  `cId` int UNSIGNED NOT NULL,
  `sId` int UNSIGNED NOT NULL,
  `aDesc` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `Attend`
--

INSERT INTO `Attend` (`aId`, `cId`, `sId`, `aDesc`) VALUES
(1, 0, 1, 'test'),
(7, 33, 1, NULL),
(8, 4, 1, NULL),
(9, 4, 1, NULL),
(10, 8, 2, NULL),
(11, 3, 2, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `Course`
--

CREATE TABLE `Course` (
  `cId` int UNSIGNED NOT NULL,
  `tId` int UNSIGNED NOT NULL,
  `cName` char(255) NOT NULL,
  `cDesc` text NOT NULL,
  `dateTime` datetime NOT NULL,
  `unit` tinyint NOT NULL,
  `max` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `Course`
--

INSERT INTO `Course` (`cId`, `tId`, `cName`, `cDesc`, `dateTime`, `unit`, `max`) VALUES
(0, 6, '我愛紅娘', '紅娘愛我', '2022-06-16 00:00:00', 4, 43),
(3, 6, 'Networking', 'Networking programming', '2022-06-15 00:00:00', 4, 43),
(4, 6, '五燈獎', '三顆星', '2022-06-16 00:00:00', 4, 25),
(8, 0, 'DataBase2', 'MySQL_Database', '2022-06-16 22:00:34', 4, 45),
(33, 2, '忍術', '螺旋丸', '2022-06-22 17:37:31', 3, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `Department`
--

CREATE TABLE `Department` (
  `dId` int UNSIGNED NOT NULL,
  `dName` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dAddress` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dPhone` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `chair` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `Department`
--

INSERT INTO `Department` (`dId`, `dName`, `dAddress`, `dPhone`, `chair`) VALUES
(0, '電子系', 'ee@ntou.edu.tw', '0123331', '電子系'),
(1, '資工系', 'cs@ntou.edu.tw', '0123321', '資工'),
(2, '航海系', 'navg@ntou.edu.tw', '0321876', '偉大航道');

-- --------------------------------------------------------

--
-- 資料表結構 `Room`
--

CREATE TABLE `Room` (
  `rId` int NOT NULL,
  `tId` int UNSIGNED NOT NULL,
  `rSzie` int NOT NULL,
  `rLocation` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `Room`
--

INSERT INTO `Room` (`rId`, `tId`, `rSzie`, `rLocation`) VALUES
(1, 2, 3, '44'),
(2, 5, 44, '55'),
(3, 2, 3, '33');

-- --------------------------------------------------------

--
-- 資料表結構 `Student`
--

CREATE TABLE `Student` (
  `sID` int UNSIGNED NOT NULL,
  `dId` int UNSIGNED NOT NULL,
  `sName` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sPhone` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sMail` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sbirthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `Student`
--

INSERT INTO `Student` (`sID`, `dId`, `sName`, `sPhone`, `sMail`, `sbirthday`) VALUES
(1, 0, 'Peter_pan', '0911-123-456', 'peter@hotmail', '2021-06-01'),
(2, 0, 'Bill', '0911-123-411', 'bill@hotmail', '2021-06-01'),
(3, 0, 'NTO', '329-3335', 'wbc@boa', '2021-06-11'),
(4, 0, 'Peter_pan32222', '0911-123-456', 'peter@hotmail', '2021-06-01'),
(6, 0, 'alan', '123311', 'alan@foo', '2021-06-16'),
(7, 0, 'mike', '0911-123-454', 'mike@fooww', '2021-06-15'),
(11, 0, 'Vincent', '123456', 'test_sMail@f6oo', '2202-04-06'),
(13, 1, 'ken_chw', '0911-123-000', 'ken@foo', '2021-06-12'),
(32, 0, 'Joe', '0911-123-456', 'peter@hotmail', '2021-06-01'),
(33, 0, 'NTO', '329-3335', 'wbc@boa', '2021-06-11');

-- --------------------------------------------------------

--
-- 資料表結構 `Teacher`
--

CREATE TABLE `Teacher` (
  `tId` int UNSIGNED NOT NULL,
  `tName` char(255) NOT NULL,
  `tPhone` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `Teacher`
--

INSERT INTO `Teacher` (`tId`, `tName`, `tPhone`) VALUES
(0, '葉問', '02-1123-4412'),
(1, '唐僧', '02-1123-490'),
(2, '卡卡西', '02-1123-433'),
(3, '趙高', '02-3331-0900'),
(4, '大蛇丸', '02-1123-7777'),
(5, '咩咩羊', '02-1123-4412'),
(6, '大灰狼', '02-1123-4412');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `Attend`
--
ALTER TABLE `Attend`
  ADD PRIMARY KEY (`aId`),
  ADD KEY `Student` (`sId`),
  ADD KEY `cId` (`cId`,`sId`) USING BTREE;

--
-- 資料表索引 `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`cId`),
  ADD KEY `TeachForeignKey` (`tId`);

--
-- 資料表索引 `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`dId`);

--
-- 資料表索引 `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`rId`),
  ADD KEY `Teacher` (`tId`);

--
-- 資料表索引 `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`sID`),
  ADD KEY `Department` (`dId`);

--
-- 資料表索引 `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`tId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `Attend`
--
ALTER TABLE `Attend`
  MODIFY `aId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `Attend`
--
ALTER TABLE `Attend`
  ADD CONSTRAINT `Atttend` FOREIGN KEY (`cId`) REFERENCES `Course` (`cId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Student` FOREIGN KEY (`sId`) REFERENCES `Student` (`sID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `TeachForeignKey` FOREIGN KEY (`tId`) REFERENCES `Teacher` (`tId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `Room`
--
ALTER TABLE `Room`
  ADD CONSTRAINT `Teacher` FOREIGN KEY (`tId`) REFERENCES `Teacher` (`tId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `Department` FOREIGN KEY (`dId`) REFERENCES `Department` (`dId`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
