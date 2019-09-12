-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-12-21 18:09:05
-- 伺服器版本: 10.1.8-MariaDB
-- PHP 版本： 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `on_sale`
--
CREATE DATABASE IF NOT EXISTS `on_sale` DEFAULT CHARACTER SET armscii8 COLLATE armscii8_general_ci;
USE `on_sale`;

-- --------------------------------------------------------

--
-- 資料表結構 `manger`
--

CREATE TABLE `manger` (
  `Man_id` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '帳號',
  `Password` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '密碼'
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 資料表的匯出資料 `manger`
--

INSERT INTO `manger` (`Man_id`, `Password`) VALUES
('Admin', '731012');

-- --------------------------------------------------------

--
-- 資料表結構 `order_b`
--

CREATE TABLE `order_b` (
  `id` int(255) NOT NULL,
  `odd_n` varchar(13) NOT NULL COMMENT '單號',
  `odd_d` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '品名',
  `odd_m` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '數量'
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 資料表的匯出資料 `order_b`
--

INSERT INTO `order_b` (`id`, `odd_n`, `odd_d`, `odd_m`) VALUES
(1, '201308050001', 'fdff', '5'),
(2, '201308060002', 'fdf', '25'),
(3, '201308270001', '水果', '77');

-- --------------------------------------------------------

--
-- 資料表結構 `order_h`
--

CREATE TABLE `order_h` (
  `order_id` int(255) NOT NULL COMMENT '流水號',
  `odd_n` char(13) CHARACTER SET utf8 NOT NULL COMMENT '訂單單號',
  `pay_t` varchar(4) CHARACTER SET utf8 NOT NULL COMMENT '付款方式',
  `bank_code` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '銀行代碼',
  `pay_m` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '金額',
  `b_5_code` varchar(5) CHARACTER SET utf8 NOT NULL COMMENT '末五碼',
  `buy_day` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT '下標日',
  `go_day` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT '希望到貨日',
  `acc_name` text CHARACTER SET utf8 NOT NULL COMMENT '下標帳號',
  `buyers` text CHARACTER SET utf8 NOT NULL COMMENT '姓名',
  `m_phone` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '手機',
  `h_phone` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '市話',
  `mail` text CHARACTER SET utf8 NOT NULL COMMENT '電子信箱',
  `go_add` text CHARACTER SET utf8 NOT NULL COMMENT '地址',
  `remark` text CHARACTER SET utf8 NOT NULL COMMENT '備註',
  `odd_type` int(1) NOT NULL DEFAULT '0' COMMENT '訂單狀態'
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 資料表的匯出資料 `order_h`
--

INSERT INTO `order_h` (`order_id`, `odd_n`, `pay_t`, `bank_code`, `pay_m`, `b_5_code`, `buy_day`, `go_day`, `acc_name`, `buyers`, `m_phone`, `h_phone`, `mail`, `go_add`, `remark`, `odd_type`) VALUES
(1, '201308050001', '貨到付款', '700 中華郵政', '215', '5565', '20130805', '20130705', 'rex', 'rex', '123', '12333', '1233', '台北市103大同區dfdfd', 'dfd', 0),
(3, '201308060002', '銀行轉帳', '158 彰化一信', '25', '25552', '20130806', '20130706', 'rex111', 'rex111', '123456', '123456', '322', '新北市207萬里區fdf', 'dfdfdf', 0),
(4, '201308270001', '貨到付款', '151 第七商銀', '888', '66666', '20130827', '20130827', 'yamaha', 'tom', '0936897835', '0936897835', 'tom@gmail.com', '雲林縣649二崙鄉集集街75號', '請盡快幫我寄出', 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`Man_id`);

--
-- 資料表索引 `order_b`
--
ALTER TABLE `order_b`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `order_h`
--
ALTER TABLE `order_h`
  ADD PRIMARY KEY (`order_id`,`odd_n`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `order_b`
--
ALTER TABLE `order_b`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `order_h`
--
ALTER TABLE `order_h`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
