-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 03:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphaware`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `email`, `message`) VALUES
(39, 'abbot@ab.com', 'dsadada'),
(40, 'noboding997@yahoo.com', 'Giao dien rat tot'),
(43, 'nutifoof@ntf.com', 'sdadadasd'),
(44, 'nutifoof@ntf.com', 'san pham vua chan'),
(45, '', ''),
(46, 'anhnguyen8897@gmail.com', 'dsasda'),
(47, 'anhnguyen8897@gmail.com', 'dsadasdaddsaa'),
(48, '', ''),
(49, '', ''),
(50, '', ''),
(51, '', ''),
(52, '', ''),
(53, '', ''),
(54, '', ''),
(55, '', ''),
(56, '', ''),
(57, 'dung@gmail.com', 'giao dien rat dep'),
(58, 'dung@gmail.com', 'giao dien rat dep'),
(59, '', ''),
(60, '', ''),
(61, '', ''),
(62, '', ''),
(63, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `mi`, `lastname`, `address`, `country`, `zipcode`, `mobile`, `telephone`, `email`, `password`) VALUES
(1, 'Phong', 'P', 'Chau', '120 Nguyen Kim', 'TP HCM', '123', '0909098900', '', 'noboding997@yahoo.com', 'phong123'),
(2, 'Phuc', 'M', 'Phuc', '100 CMT8', 'TP HCM', '123', '0909123421', '', 'dsdsa@gmail.com', '12345'),
(3, 'Phong', 'P', 'Chau', '12 Bui Dinh Tuy', 'TP HCM', '321', '0908888888', '', 'nutifoof@ntf.com', '123456'),
(4, 'Mickey', 'M', 'PA', '606/120 3 thang 2', 'TP HCM', '432', '0909090909', '', 'anhnguyen8897@gmail.com', '09876'),
(5, 'Cuong', 'D', 'Vo', '130 Han Hai Nguyen', 'TP HCM', '098', '0909123421', '', 'abbot@ab.com', '123'),
(6, 'Dung', 'd', 'Bui', '12 Bui Dinh Tuy', 'Hoi An', '123', '1111111111', '', 'dung@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_size`, `product_image`, `brand`, `category`) VALUES
(5, 'ADIDAS PREDATOR TANGO 19.3 TF INITIATOR - ACTION R', '160', 'US:7,UK:6.5,EU:39', 'dasf2.jpg', 'Adidas', 'football'),
(7, 'Adidas 599 LRG', '15000', 'US:12,UK:11.5,EU:44', '872686791Adidas Basketball Shoes 599_LRG.jpg', 'Adidas', 'basketball'),
(12, 'NIKE MERCURIAL SUPERFLY VI ACADEMY TF BLACK LUX PA', '200', 'US:7,UK:6.5,EU:39', 'nikef1.jpg', 'Nike', 'football'),
(28, 'Adidas Adizero Red', '18000', 'US:11,UK:11.5,EU:43', '153564340adidas-all-star-basketball-shoes-adizero-shadow.jpg', 'Adidas', 'basketball'),
(35, 'Reebok vs UFC', '3200', 'US:10,UK:9.5,EU:42', 'reework3.jpg', 'Reebok', 'football'),
(48, 'ADIDAS PREDATOR 18.1 FG ENERGY MODE - SOLAR YELLOW', '130', 'US:12,UK:11.5,EU:44', 'dasf6.jpg', 'Adidas', 'football'),
(57, 'NIKE MERCURIAL SUPERFLYX 6 ACADEMY IC CR7 CHAPTER ', '290', 'US:12,UK:11.5,EU:44', 'nikef6.jpg', 'Nike', 'football'),
(58, 'GIÃ€Y NIKE FLEX', '540', 'US:4,UK:3.5,EU:36', 'niker2.jpg', 'Nike', 'running'),
(213, 'Blue Mystery', '170', 'US:10,UK:9.5,EU:42', 'bh6.jpg', 'biti', 'basketball'),
(520, 'Running Adidas Alphabounce RC', '80', 'US:8,UK:7.5,EU:40', 'dasr1.jpg', 'Adidas', 'running'),
(583, 'Hunter X 1', '220', 'US:6,UK:5.5,EU:38', 'br2.jpg', 'biti', 'running'),
(626, 'Mobius OS MU', '33900', 'US:11,UK:10.5,EU:43', 'reeb5.jpg', 'Reebok', 'basketball'),
(689, 'Hunter X 4', '60', 'US:8,UK:7.5,EU:40', 'br3.jpg', 'biti', 'running'),
(942, 'Classic Leather', '1700', 'US:5,UK:4.5,EU:37', 'reebokclassic.jpg', 'Reebok', 'running'),
(965, 'Reebook Sweet Road 5', '990', 'US:12,UK:11.5,EU:44', 'l5.jpg', 'Reebok', 'feature'),
(969, 'NIKE HYPERVENOM PHANTOMX 3 ACADEMY TF ', '89', 'US:9,UK:8.5,EU:41', 'nikef2.jpg', 'Nike', 'football'),
(1274, 'Work out Plus', '920', 'US:6,UK:5.5,EU:38', 'reework4.jpg', 'Reebok', 'football'),
(1534, 'One Star Socate', '222', 'US:7,UK:6.5,EU:39', '157512-DRAKE-270x270.jpg', 'Converse', 'feature'),
(1868, 'ADIDAS D ROSE 10', '1400', 'US:9,UK:8.5,EU:41', 'dasb4.jpg', 'Adidas', 'basketball'),
(2119, 'Hunter X', '45', 'US:5,UK:4.5,EU:37', 'br4.jpg', 'biti', 'running'),
(3005, 'Runnig Shoes Queter Drive', '150', 'US:11,UK:10.5,EU:43', 'dasr4.jpg', 'Adidas', 'running'),
(4636, 'ADIDAS X FACTORY', '3400', 'US:6,UK:5.5,EU:38', 'dasb2.jpg', 'Adidas', 'basketball'),
(5552, 'Optimus Longterm DFG', '23000', 'US:11,UK:10.5,EU:43', 'nike11.jpg', 'Nike', 'feature'),
(5553, '  Reebok CrossFit Nano 6', '2300', 'US:8,UK:7.5,EU:40', 'reebok.jpg', 'Reebok', 'feature'),
(5658, 'Reebok Royal TYE', '65000', 'US:11,UK:10.5,EU:43', 'reeb4.jpg', 'Reebok', 'basketball'),
(6412, ' Bitis Hunter Maroon', '55', 'US:10,UK:9.5,EU:42', 'br6.jpg', 'biti', 'running'),
(6637, 'GIÃ€Y NIKE RUN', '280', 'US:6,UK:5.5,EU:38', 'niker5.png', 'Nike', 'running'),
(7148, 'Bitis Hunter Noon Orchid', '130', 'US:7,UK:6.5,EU:39', 'bh3.jpg', 'biti', 'basketball'),
(7237, 'Running Shoes Alphabounce Beyond', '210', 'US:11,UK:10.5,EU:43', 'dasr6.jpg', 'Adidas', 'running'),
(7797, 'Bitis Hunter Latte', '70', 'US:4,UK:3.5,EU:36', 'br5.jpg', 'biti', 'running'),
(7840, 'ADIDAS TERREX CMTK GTX', '430', 'US:6,UK:5.5,EU:38', 'l1.jpg', 'Adidas', 'feature'),
(8435, 'Air Jordan 5 Supreme Desert Camo', '1200', 'US:10,UK:9.5,EU:42', 'nikeb3.jpg', 'Nike', 'basketball'),
(8617, 'Bitis Hunter Yeloww', '150', 'US:9,UK:8.5,EU:41', 'bh4.jpg', 'biti', 'basketball'),
(8766, 'Brown', '160', 'US:9,UK:8.5,EU:41', '150144-270x270.jpg', 'Converse', 'feature'),
(9027, 'GiÃ y NIKE METCON REPPER DSX ', '110', 'US:8,UK:7.5,EU:40', 'niker6.jpg', 'Nike', 'running'),
(9430, 'Bitis Hunter Noon Rose', '130', 'US:6,UK:5.5,EU:38', 'bh2.jpg', 'biti', 'basketball'),
(9450, 'ADIDAS ACE 17.4 TF WHITE / SOLAR YELLOW / CORE BLA', '60', 'US:9,UK:8.5,EU:41', 'dasf3.jpg', 'Adidas', 'football'),
(9990, 'Running Adidas CF LITE RACER 2', '90', 'US:8,UK:7.5,EU:40', 'dasr3.jpg', 'Adidas', 'running'),
(10567, ' ADIDAS RESPONSE PLUS', '246', 'US:9,UK:8.5,EU:41', 'l2.jpg', 'Adidas', 'feature'),
(15540, 'AIR JORDAN 11 RETRO PREM \"GREY SUEDE\"', '235', 'US:6,UK:5.5,EU:38', 'nikeb5.jpg', 'Nike', 'basketball'),
(20677, 'Converse x RIRI Chuck 70 Leather High Top', '100', 'US:7,UK:6.5,EU:39', 'conl1.jpg', 'Converse', 'basketball'),
(23923, 'Anser DMX', '47000', 'US:9,UK:8.5,EU:41', 'reeb3.jpg', 'Reebok', 'basketball'),
(24560, 'Hunter X 2', '50', 'US:7,UK:6.5,EU:39', 'br1.jpg', 'biti', 'running'),
(30898, 'Nike Air Max 1 Just Do It', '150', 'US:10,UK:9.5,EU:42', 'l6.jpg', 'Nike', 'feature'),
(34688, 'Nike Air Zoom Pegasus 35 Shield iD', '220', 'US:6,UK:5.5,EU:38', 'niker1.jpg', 'Nike', 'running'),
(34707, 'GIÃ€Y ZOOM TRAIN COMPLETE', '430', 'US:9,UK:8.5,EU:41', 'niker7.jpg', 'Nike', 'running'),
(38136, 'One Star Dark Star Vintage Suede Black', '780', 'US:6,UK:5.5,EU:38', '162347-DRAKE-270x270.jpg', 'Converse', 'running'),
(39560, 'EXOFIT LO CLEAN LOGO ', '7200', 'US:12,UK:11.5,EU:44', 'reework6.jpg', 'Reebok', 'football'),
(42334, 'Converse x JW Anderson Felt Chuck 70 ', '90', 'US:7,UK:6.5,EU:39', 'conl3.jpg', 'Converse', 'basketball'),
(42874, 'AIR JORDAN 1 RETRO HIGH OG \"SHATTERED BACKBOARD\"', '240', 'US:9,UK:8.5,EU:41', 'nikeb2.png', 'Nike', 'basketball'),
(43635, 'GIÃ€Y ZOOM TRAIN COMPLETE 2', '260', 'US:7,UK:6.5,EU:39', 'niker3.jpg', 'Nike', 'running'),
(45198, 'Reebok Premium Limited', '1200000', 'US:10,UK:9.5,EU:42', 'reeb6.jpg', 'Reebok', 'basketball'),
(51630, 'Converse x Carhartt WIP One Star', '780', 'US:5,UK:4.5,EU:37', '162349-270x270.jpg', 'Converse', 'running'),
(58390, 'Rapide', '9000', 'US:7,UK:6.5,EU:39', 'reebok4.jpg', 'Reebok', 'running'),
(58548, 'ADIDAS D ROSE 9', '2100', 'US:8,UK:7.5,EU:40', 'dasb5.jpg', 'Adidas', 'basketball'),
(60798, 'Aztrek', '6700', 'US:12,UK:11.5,EU:44', 'reebok5.jpg', 'Reebok', 'running'),
(71931, 'NIKE MERCURIAL SUPERFLY 6 ELITE SG-PRO ANTI-CLOG F', '240', 'US:8,UK:7.5,EU:40', 'nikef4.jpg', 'Nike', 'football'),
(75346, 'ADIDAS NEMEZIZ MESSI 18.1 FG ENERGY MODE - SOLAR G', '140', 'US:6,UK:5.5,EU:38', 'dasf1.jpg', 'Adidas', 'football'),
(91949, 'Mobius OS', '9700', 'US:7,UK:6.5,EU:39', 'reeb1.jpg', 'Reebok', 'basketball'),
(93798, 'One Star Dark Star Vintage Suede Red', '800', 'US:7,UK:6.5,EU:39', '150145-270x270.jpg', 'Converse', 'running'),
(97678, 'Converse x JW Anderson Chuck 70 Grid', '100', 'US:10,UK:9.5,EU:42', 'conl4.jpg', 'Converse', 'basketball'),
(98178, 'Reebok CrossFit Nano 7', '2300', 'US:9,UK:8.5,EU:41', 'reebok2.jpg', 'Reebok', 'running'),
(99729, 'All TWO WHITE', '190', 'US:7,UK:6.5,EU:39', '131274-270x270.jpg', 'Converse', 'basketball'),
(180813, 'One Star Dark Star Vintage Suede Blue', '790', 'US:9,UK:8.5,EU:41', '162365-270x270.jpg', 'Converse', 'running'),
(197436, 'AIR JORDAN 11 RETRO \"GAMMA BLUE\"', '130', 'US:11,UK:10.5,EU:43', 'nikeb4.jpg', 'Nike', 'basketball'),
(209922, 'RAPIDARUN SHOES', '540', 'US:8,UK:7.5,EU:40', 'l3.jpg', 'Adidas', 'feature'),
(211520, 'Work out Low', '310', 'US:4,UK:3.5,EU:36', 'reework.jpg', 'Reebok', 'football'),
(237920, 'Reebok Rivyx Riple', '13500', 'US:8,UK:7.5,EU:40', 'reework2.jpg', 'Reebok', 'football'),
(280918, 'Converse x P.A.M. Chuck 70 Zip Off', '120', 'US:5,UK:4.5,EU:37', 'conl2.jpg', 'Converse', 'basketball'),
(416326, 'Mobius OS Yello', '51000', 'US:12,UK:11.5,EU:44', 'reeb7.jpg', 'Reebok', 'basketball'),
(518710, 'Runnig Shoes Galaxy White', '119', 'US:6,UK:5.5,EU:38', 'dasr7.jpg', 'Adidas', 'running'),
(552320, 'Hunter XG 5', '124', 'US:7,UK:6.5,EU:39', 'bh5.jpg', 'biti', 'basketball'),
(553665, 'Fashion Star', '3100', 'US:10,UK:9.5,EU:42', '159678-DRAKE-CONVERSE-270x270.jpg', 'Converse', 'running'),
(655247, 'Nike Roshe One Pink', '170', 'US:6,UK:5.5,EU:38', 'l7.jpg', 'Nike', 'feature'),
(694707, 'ADIDAS ROSE D8', '1100', 'US:7,UK:6.5,EU:39', 'dasb6.jpg', 'Adidas', 'basketball'),
(704710, 'NIKE MERCURIAL VAPORX 12 ACADEMY TF RAISED ON CONC', '230', 'US:10,UK:9.5,EU:42', 'nikef3.jpg', 'Nike', 'football'),
(711200, 'All S Triple', '520', 'US:11,UK:10.5,EU:43', '562460-270x270.jpg', 'Converse', 'feature'),
(927008, 'Running Adidas CF LITE RACER', '90', 'US:7,UK:6.5,EU:39', 'dasr2.jpg', 'Adidas', 'running'),
(977708, 'Converse x Vince Staples Thunderbolt ', '320', 'US:9,UK:8.5,EU:41', 'conl5.jpg', 'Converse', 'basketball'),
(1048592, 'Zid Wide TR 50', '90', 'US:11,UK:10.5,EU:43', 'l4.jpg', 'Reebok', 'feature'),
(1406954, 'Bitis Hunter Noon', '110', 'US:5,UK:4.5,EU:37', 'bh1.jpg', 'biti', 'basketball'),
(2125142, 'Air Jordan 12 Retro Wool', '1200', 'US:10,UK:9.5,EU:42', 'air1.jpg', 'Nike', 'basketball'),
(3209772, 'ALL STAR ONE', '330', 'US:9,UK:8.5,EU:41', '150147-270x270.jpg', 'Converse', 'running'),
(3566216, 'Reebok Continental', '80000', 'US:11,UK:10.5,EU:43', 'reeb2.jpg', 'Reebok', 'running'),
(4522599, 'Air Jordan 12 Retro Wool', '4800', 'US:12,UK:11.5,EU:44', 'air2.jpg', 'Nike', 'basketball'),
(6464978, 'Pyro', '4800', 'US:9,UK:8.5,EU:41', 'reebok3.jpg', 'Reebok', 'running'),
(7489017, 'ADIDAS NEMEZIZ MESSI 18.1 FG SPECTRAL MODE - ASH B', '70', 'US:9,UK:8.5,EU:41', 'dasf4.jpg', 'Adidas', 'football'),
(9577739, 'ADIDAS PREDATOR 18.1 FG SPECTRAL MODE - CLEAR ORAN', '100', 'US:9,UK:8.5,EU:41', 'dasf5.jpg', 'Adidas', 'football'),
(9769573, 'Nike Air Force 12', '760', 'US:7,UK:6.5,EU:39', 'nikef5.jpg', 'Nike', 'football'),
(12350622, 'Work out Triple', '2600', 'US:7,UK:6.5,EU:39', 'reework5.jpg', 'Reebok', 'football');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(1, 71339, 20),
(2, 82631, 30),
(3, 3, 20),
(4, 4, 19),
(5, 6, 20),
(6, 7, 19),
(7, 8, 19),
(8, 9, 20),
(9, 10, 15),
(10, 11, 21),
(11, 13, 20),
(12, 14, 20),
(13, 15, 20),
(14, 16, 9),
(15, 17, 20),
(16, 19, 20),
(17, 20, 20),
(18, 21, 20),
(19, 26, 13),
(20, 28, 20),
(21, 29, 20),
(22, 30, 20),
(23, 31, 20),
(26, 431860, 16),
(27, 21561, 24),
(28, 358159, 23),
(29, 157, 25),
(30, 51292, 18),
(31, 961461, 14),
(32, 83, 20),
(33, 1057, 4),
(34, 7554, 30),
(35, 793227, 15),
(36, 70143, 0),
(37, 16118, 2),
(38, 1364, 22),
(39, 698374, 300),
(40, 17, 2),
(41, 90, 10),
(42, 1884, 21),
(43, 64298, 0),
(44, 9141, 16),
(45, 129283, 37),
(46, 57207, 16),
(47, 674141, 12),
(48, 740429, 15),
(49, 1583, 6),
(50, 4366, 30),
(51, 812856, 74),
(52, 31223, 7),
(53, 9106017, 7),
(54, 369, 13),
(55, 46193, 9),
(56, 889059, 52),
(57, 9040, 12),
(58, 1086, 8),
(59, 22090, 10),
(60, 8034, 10),
(61, 71644, 58),
(62, 298369, 12),
(63, 814305, 5),
(64, 5522251, 10),
(65, 87995, 19),
(66, 90484, 45),
(67, 698821, 12),
(68, 410959, 13),
(69, 1770, 40),
(70, 78175384, 32),
(71, 1867, 32),
(72, 36909, 44),
(73, 36167, 12),
(74, 3209772, 22),
(75, 582782, 50),
(76, 553665, 12),
(77, 99729, 13),
(78, 99729, 13),
(79, 99729, 13),
(80, 99729, 13),
(81, 8766, 60),
(82, 8766, 60),
(83, 8766, 60),
(84, 8766, 60),
(85, 8766, 60),
(86, 8766, 60),
(87, 8766, 60),
(88, 87282, 13),
(89, 87282, 13),
(90, 87282, 13),
(91, 421, 7),
(92, 753275, 21),
(93, 5553, 32),
(94, 6303, 12),
(95, 9661, 13),
(96, 51630, 42),
(97, 71573, 30),
(98, 180813, 13),
(99, 93798, 12),
(100, 38136, 30),
(101, 98178, 12),
(102, 84290, 30),
(103, 6464978, 20),
(104, 58390, 20),
(105, 60798, 50),
(106, 942, 112),
(107, 211520, 12),
(108, 237920, 31),
(109, 35, 40),
(110, 1274, 30),
(111, 12350622, 20),
(112, 39560, 30),
(113, 39560, 30),
(114, 39560, 30),
(115, 91949, 13),
(116, 6, 21),
(117, 23923, 12),
(118, 5658, 24),
(119, 626, 31),
(120, 45198, 21),
(121, 416326, 21),
(122, 20677, 11),
(123, 280918, 21),
(124, 42334, 21),
(125, 97678, 21),
(126, 977708, 21),
(127, 34688, 21),
(128, 4982, 21),
(129, 2601, 30),
(130, 469566, 21),
(131, 1723073, 21),
(132, 9027, 21),
(133, 43635, 21),
(134, 34707, 21),
(135, 6637, 21),
(136, 58, 21),
(137, 3566216, 21),
(138, 12, 21),
(139, 969, 21),
(140, 704710, 21),
(141, 71931, 21),
(142, 416204, 21),
(143, 57, 21),
(144, 7295, 21),
(145, 42874, 21),
(146, 8435, 21),
(147, 197436, 21),
(148, 15540, 21),
(149, 4073, 21),
(150, 4465, 21),
(151, 51925, 21),
(152, 9769573, 21),
(153, 8039, 21),
(154, 961335, 21),
(155, 7, 19),
(156, 400327, 21),
(157, 9618392, 21),
(158, 951013, 21),
(159, 131223, 21),
(160, 2125142, 21),
(161, 4522599, 21),
(162, 4522599, 21),
(163, 520, 21),
(164, 927008, 21),
(165, 9990, 21),
(166, 10803, 21),
(167, 1610, 21),
(168, 7237, 21),
(169, 518710, 21),
(170, 3005, 21),
(171, 75346, 21),
(172, 5, 21),
(173, 9450, 21),
(174, 7489017, 21),
(175, 9577739, 21),
(176, 9577739, 21),
(177, 9577739, 21),
(178, 48, 21),
(179, 9280, 21),
(180, 4636, 21),
(181, 262118, 21),
(182, 694707, 21),
(183, 58548, 21),
(184, 1868, 21),
(185, 40521, 21),
(186, 626313, 21),
(187, 2119, 21),
(188, 605, 21),
(189, 583, 21),
(190, 24560, 31),
(191, 689, 21),
(192, 1200, 21),
(193, 7797, 21),
(194, 6412, 21),
(195, 23524, 21),
(196, 220512, 21),
(197, 1406954, 21),
(198, 9430, 21),
(199, 7148, 21),
(200, 8617, 21),
(201, 552320, 21),
(202, 213, 21),
(203, 3767105, 21),
(204, 5552, 20),
(205, 7840, 21),
(206, 10567, 21),
(207, 209922, 20),
(208, 209922, 20),
(209, 1048592, 21),
(210, 965, 21),
(211, 30898, 21),
(212, 655247, 21),
(213, 1534, 21),
(214, 711200, 21);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `customerid`, `amount`, `order_stat`, `order_date`) VALUES
(9, 5, 38000, 'Confirmed', 'Jan 24, 2019'),
(6539, 1, 640, 'Confirmed', 'Jan 24, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`transacton_detail_id`, `product_id`, `order_qty`, `transaction_id`) VALUES
(69, 9106017, 1, 499),
(68, 129283, 1, 499),
(67, 21561, 4, 276),
(66, 21561, 2, 8),
(65, 129283, 6, 46014),
(64, 87995, 3, 46014),
(63, 1057, 1, 46014),
(62, 129283, 3, 40),
(61, 87995, 3, 40),
(60, 1057, 1, 40),
(59, 129283, 1, 49),
(58, 87995, 3, 49),
(79, 5552, 1, 9),
(78, 7, 1, 9),
(77, 209922, 1, 6539),
(76, 20677, 1, 6539),
(75, 7797, 4, 5040),
(74, 961461, 10, 434),
(73, 961461, 7, 6),
(72, 961461, 4, 0),
(71, 358159, 4, 7114),
(70, 358159, 1, 2463),
(43, 358159, 1, 72537),
(42, 814305, 1, 72537),
(55, 1057, 1, 9373),
(54, 87995, 3, 775),
(53, 1057, 1, 775),
(57, 1057, 1, 49),
(56, 87995, 3, 9373),
(52, 87995, 1, 5),
(51, 11, 1, 5),
(50, 1057, 1, 5),
(49, 11, 1, 63),
(48, 1057, 2, 63),
(47, 1057, 1, 922),
(46, 358159, 1, 922),
(45, 36909, 1, 84),
(44, 358159, 3, 84);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transacton_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customer` (`customerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
