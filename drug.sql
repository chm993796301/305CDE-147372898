-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-03-24 10:30:36
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `drug`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comments`
--

CREATE TABLE `comments` (
  `name` varchar(255) NOT NULL,
  `cid` int(255) NOT NULL,
  `drug_p` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `drug`
--

CREATE TABLE `drug` (
  `name` varchar(255) NOT NULL,
  `type` varchar(2555) NOT NULL,
  `detail` varchar(60000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `drug`
--

INSERT INTO `drug` (`name`, `type`, `detail`) VALUES
('Cannabis', 'Hallucinogens', '1.Hallucination<br>\r\n2.Impaired co-ordination<br>\r\n3.Addiction<br>\r\n4.Heightened risk of cancer<br>\r\n5.Reduced concentration and impaired memory and judgment<br>\r\n6.Depression and extreme suspicion of others<br>\r\n7.Irritability and short temper<br>\r\n8.Respiratory disease<br>\r\n9.Regular users of cannabis are more likely to try other illicit drugs'),
('Cocaine', 'Stimulants', '1.Addiction<br>\r\n2.Respiratory damage<br>\r\n3.Mania<br>\r\n4.Paranoid delusion<br>\r\n5.Impaired memory<br>\r\n6.Hallucination<br>\r\n7.Delirium<br>\r\n8.Heart disease<br>\r\n9.Nasal damage'),
('Heroin', 'Narcotics Analgesics', '1.Dependence<br>\r\n2.Drowsiness<br>\r\n3.Respiratory depression<br>\r\n4.Nausea<br>\r\n5.Withdrawal syndrome: <br>\r\nwatery eyes, runny nose, yawning, loss of appetite, irritability, tremors, panic, chills, sweating, cramps'),
('Methaqualone', 'Depressants', '1.Dependence<br>\r\n2.Slurred speech<br>\r\n3.Disorientation<br>\r\n4.Impaired memory and thinking<br>\r\n5.Depression or mood swings<br>\r\n6.Toxic psychosis<br>\r\n7.Sleep disorder<br>\r\n8.Liver and kidney damage'),
('Midazolam', 'Tranquillizers', '1.Dependence<br>\r\n2.Drowsiness<br>\r\n3.Dizziness<br>\r\n4.Sedation<br>\r\n5.Depression<br>\r\n6.Hostility<br>\r\n7.In-coordination<br>\r\n8.Ataxia<br>\r\n9.Foetal abnormalities<br>\r\n10.Loss of memory<br>\r\n11.Impaired cognitive and neuromotor functioning');

-- --------------------------------------------------------

--
-- 資料表結構 `favourites`
--

CREATE TABLE `favourites` (
  `namef` varchar(255) NOT NULL,
  `drugf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `favourites`
--

INSERT INTO `favourites` (`namef`, `drugf`) VALUES
('159', 'Cocaine');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`) VALUES
('mrmc', 'mcpass', 'mc', 'MC@mc.com'),
('mrmc02', 'mcpass02', '', 'mc02@yahoo.com'),
('test02', 'test02', '', 'test02@yahoo.com'),
('test023', 'test02', '', 'test02@yahoo.com'),
('123', '123', '', '123@123.COM'),
('159', '159', '', '159'),
('mrmc03', 'mrmc03', '', 'mrmc03');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
