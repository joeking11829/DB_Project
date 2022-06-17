-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2022-06-17 23:39:47
-- 服务器版本： 8.0.29-0ubuntu0.20.04.3
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
-- 数据库： `Course`
--

-- --------------------------------------------------------

--
-- 表的结构 `Attend`
--

CREATE TABLE `Attend` (
  `aId` int UNSIGNED NOT NULL,
  `cId` int UNSIGNED NOT NULL,
  `sId` int UNSIGNED NOT NULL,
  `aDesc` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `Attend`
--

INSERT INTO `Attend` (`aId`, `cId`, `sId`, `aDesc`) VALUES
(1, 0, 1, 'test'),
(7, 33, 1, NULL),
(8, 4, 1, NULL),
(9, 4, 1, NULL),
(11, 3, 2, NULL),
(12, 3, 3, NULL),
(13, 4, 3, NULL),
(16, 33, 4, NULL),
(17, 1, 4, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `Course`
--

CREATE TABLE `Course` (
  `cId` int UNSIGNED NOT NULL,
  `tId` int UNSIGNED NOT NULL,
  `rId` int UNSIGNED NOT NULL,
  `cName` char(255) NOT NULL,
  `cDesc` text NOT NULL,
  `dateTime` datetime NOT NULL,
  `unit` tinyint NOT NULL,
  `max` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `Course`
--

INSERT INTO `Course` (`cId`, `tId`, `rId`, `cName`, `cDesc`, `dateTime`, `unit`, `max`) VALUES
(0, 6, 0, '我愛紅娘', '紅娘愛我', '2022-06-16 00:00:00', 4, 43),
(1, 7, 1, '天女散花', '爆米花', '2022-06-16 00:00:00', 4, 43),
(3, 6, 0, 'Networking', 'Networking programming', '2022-06-15 00:00:00', 4, 43),
(4, 6, 0, '五燈獎', '三顆星', '2022-06-16 00:00:00', 4, 25),
(8, 6, 0, 'DataBase', 'MySQL_Database', '2022-06-16 22:00:34', 4, 45),
(33, 2, 2, '忍術', '螺旋丸', '2022-06-22 17:37:31', 3, 3);

-- --------------------------------------------------------

--
-- 表的结构 `Department`
--

CREATE TABLE `Department` (
  `dId` int UNSIGNED NOT NULL,
  `dName` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dAddress` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dPhone` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `chair` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `Department`
--

INSERT INTO `Department` (`dId`, `dName`, `dAddress`, `dPhone`, `chair`) VALUES
(0, '電子系', 'ee@ntou.edu.tw', '0123331', '電子系'),
(1, '資工系', 'cs@ntou.edu.tw', '0123321', '資工'),
(2, '航海系', 'navg@ntou.edu.tw', '0321876', '偉大航道');

-- --------------------------------------------------------

--
-- 表的结构 `Room`
--

CREATE TABLE `Room` (
  `rId` int UNSIGNED NOT NULL,
  `rSzie` int NOT NULL,
  `rLocation` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `Room`
--

INSERT INTO `Room` (`rId`, `rSzie`, `rLocation`) VALUES
(0, 44, '資工大樓'),
(1, 20, '七星山'),
(2, 3, '木葉村'),
(3, 3, '少林室');

-- --------------------------------------------------------

--
-- 表的结构 `Student`
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
-- 转存表中的数据 `Student`
--

INSERT INTO `Student` (`sID`, `dId`, `sName`, `sPhone`, `sMail`, `sbirthday`) VALUES
(0, 0, 'Mu', '0911-123-4563', 'Mu@hotmail', '2021-06-01'),
(1, 0, 'Peter_pan', '0911-123-456', 'peter@hotmail', '2021-06-01'),
(2, 0, 'Bill', '0911-123-411', 'bill@hotmail', '2021-06-01'),
(3, 0, 'NTO', '329-3335', 'wbc@boa', '2021-06-11'),
(4, 0, 'Peter_pan32222', '0911-123-456', 'peter@hotmail', '2021-06-01'),
(6, 0, 'alan', '123311', 'alan@foo', '2021-06-16'),
(7, 0, 'mike', '0911-123-454', 'mike@fooww', '2021-06-15'),
(8, 1, 'ken_chw', '0911-123-000', 'ken@foo', '2021-06-12'),
(32, 0, 'Joe', '0911-123-456', 'peter@hotmail', '2021-06-01'),
(33, 0, 'NTO', '329-3335', 'wbc@boa', '2021-06-11');

-- --------------------------------------------------------

--
-- 表的结构 `Teacher`
--

CREATE TABLE `Teacher` (
  `tId` int UNSIGNED NOT NULL,
  `tName` char(255) NOT NULL,
  `tPhone` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 转存表中的数据 `Teacher`
--

INSERT INTO `Teacher` (`tId`, `tName`, `tPhone`) VALUES
(0, '葉問', '02-1123-4412'),
(1, '唐僧', '02-1123-490'),
(2, '卡卡西', '02-1123-433'),
(3, '趙高', '02-3331-0900'),
(4, '大蛇丸', '02-1123-7777'),
(5, '咩咩羊', '02-1123-4412'),
(6, '大灰狼', '02-1123-4412'),
(7, '九天玄女', '02-1123-800');

--
-- 转储表的索引
--

--
-- 表的索引 `Attend`
--
ALTER TABLE `Attend`
  ADD PRIMARY KEY (`aId`),
  ADD KEY `Student` (`sId`),
  ADD KEY `cId` (`cId`,`sId`) USING BTREE;

--
-- 表的索引 `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`cId`),
  ADD KEY `TeachForeignKey` (`tId`),
  ADD KEY `RoomId` (`rId`);

--
-- 表的索引 `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`dId`);

--
-- 表的索引 `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`rId`);

--
-- 表的索引 `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`sID`),
  ADD KEY `Department` (`dId`);

--
-- 表的索引 `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`tId`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `Attend`
--
ALTER TABLE `Attend`
  MODIFY `aId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 限制导出的表
--

--
-- 限制表 `Attend`
--
ALTER TABLE `Attend`
  ADD CONSTRAINT `Atttend` FOREIGN KEY (`cId`) REFERENCES `Course` (`cId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Student` FOREIGN KEY (`sId`) REFERENCES `Student` (`sID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 限制表 `Course`
--
ALTER TABLE `Course`
  ADD CONSTRAINT `RoomId` FOREIGN KEY (`rId`) REFERENCES `Room` (`rId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `TeachForeignKey` FOREIGN KEY (`tId`) REFERENCES `Teacher` (`tId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 限制表 `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `Department` FOREIGN KEY (`dId`) REFERENCES `Department` (`dId`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
