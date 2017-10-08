-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2015 at 05:52 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paid2like`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `hit` text NOT NULL,
  `points` int(11) NOT NULL,
  `credits` int(11) NOT NULL,
  `states` text NOT NULL,
  `userid` text NOT NULL,
  `other` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `link`, `hit`, `points`, `credits`, `states`, `userid`, `other`, `date`, `time`) VALUES
(85, 'Dillzan', '100855576710077', '0', 20, 10000, '1', 'hmdlohar', '0', '08-11-2014', '04-04'),
(33, 'Anisha', 'anisha778', '0', 10, 100, '1', 'hmdlohar2', '0', '24-09-2014', '05-27'),
(29, 'AAj Tak', 'aajtak', '0', 10, 6, '1', 'hmdlohar3', '0', '23-09-2014', '12-42'),
(38, 'page2', 'BigBazaar', '', 9, 9928, '1', 'hmdlohar', '', '', ''),
(39, 'page3', '123580427711280', '', 8, 9935, '1', 'hmdlohar', '', '', ''),
(84, 'Rajiv', '445933125462863', '0', 20, 10000, '1', 'hmdlohar', '0', '08-11-2014', '04-03'),
(41, 'page5', 'wearefriendship', '', 8, 9951, '1', 'hmdlohar', '', '', ''),
(42, 'page6', '404083833063453', '', 7, 9944, '1', 'hmdlohar', '', '', ''),
(43, 'page7', '876217949071271', '', 10, 9870, '1', 'hmdlohar', '', '', ''),
(44, 'page8', '610155685750249', '', 9, 9928, '1', 'hmdlohar', '', '', ''),
(45, 'page9', 'masti.hungama.entertainment', '', 8, 9951, '1', 'hmdlohar', '', '', ''),
(47, 'page11', '498071556928105', '', 8, 9928, '1', 'hmdlohar', '', '', ''),
(48, 'page12', 'party0animal', '', 7, 9958, '1', 'hmdlohar', '', '', ''),
(49, 'page13', '216198081874273', '', 10, 9860, '1', 'hmdlohar', '', '', ''),
(50, 'page14', 'PratikPatelsPhotography', '', 9, 9946, '1', 'hmdlohar', '', '', ''),
(51, 'page15', '738828399493068', '', 8, 9936, '1', 'hmdlohar', '', '', ''),
(52, 'page16', '418691258185026', '', 10, 9900, '1', 'hmdlohar', '', '', ''),
(53, 'page17', '695412230480441', '', 8, 9951, '1', 'hmdlohar', '', '', ''),
(54, 'page18', '366398290145165', '', 7, 9944, '1', 'hmdlohar', '', '', ''),
(55, 'page19', '681491381911589', '', 10, 9870, '1', 'hmdlohar', '', '', ''),
(56, 'page20', 'HeartIsLikeAGlassDontBreakIt', '', 9, 9928, '1', 'hmdlohar', '', '', ''),
(57, 'page21', 'tezzdave', '', 8, 9936, '1', 'hmdlohar', '', '', ''),
(58, 'page22', 'sukeminfozone', '', 10, 9890, '1', 'hmdlohar', '', '', ''),
(59, 'page23', 'albumwala', '', 8, 9936, '1', 'hmdlohar', '', '', ''),
(60, 'page24', 'synexpowersolutions', '', 7, 9944, '1', 'hmdlohar', '', '', ''),
(61, 'page25', '509042319154860', '', 10, 9870, '1', 'hmdlohar', '', '', ''),
(62, 'page26', '199828833557273', '', 9, 9928, '1', 'hmdlohar', '', '', ''),
(63, 'page27', 'astateoftrance', '', 8, 9936, '1', 'hmdlohar', '', '', ''),
(64, 'page28', 'jannatmygoal', '', 10, 9900, '1', 'hmdlohar', '', '', ''),
(65, 'page29', 'TeamKritikaKamra', '', 8, 9968, '1', 'hmdlohar', '', '', ''),
(66, 'page30', '226880097482169', '', 7, 9944, '1', 'hmdlohar', '', '', ''),
(67, 'page31', 'SACHINTHEUNSTOPPABLE', '', 10, 9890, '1', 'hmdlohar', '', '', ''),
(68, 'page32', 'saibabasirdike', '', 9, 9928, '1', 'hmdlohar', '', '', ''),
(69, 'page33', '339652019499960', '', 8, 9952, '1', 'hmdlohar', '', '', ''),
(70, 'page34', 'dilkitamnna', '', 10, 9900, '1', 'hmdlohar', '', '', ''),
(71, 'page35', 'waitingforspecial', '', 8, 9936, '1', 'hmdlohar', '', '', ''),
(72, 'page36', 'narendramodi', '', 7, 9958, '1', 'hmdlohar', '', '', ''),
(73, 'page37', 'Emraanhashmifansgroupofficial', '', 10, 9900, '1', 'hmdlohar', '', '', ''),
(74, 'page38', 'GujaratLifesyle', '', 9, 9954, '1', 'hmdlohar', '', '', ''),
(75, 'page39', 'LoveTheSweettestFeelingOfWorld', '', 8, 9928, '1', 'hmdlohar', '', '', ''),
(76, 'page40', 'hugujarati', '', 10, 9900, '1', 'hmdlohar', '', '', ''),
(77, 'page41', 'ghItHurtsWhenUIgnoreMegh', '', 8, 9928, '1', 'hmdlohar', '', '', ''),
(78, 'page42', '165849823490749', '', 7, 9937, '1', 'hmdlohar', '', '', ''),
(79, 'page43', 'mieloveher', '', 10, 9910, '1', 'hmdlohar', '', '', ''),
(80, 'riten', 'ritengorbjps', '', 20, 99800, '1', 'hmdlohar', '', '', ''),
(81, 'Bizideas4all', 'Bizideas4all', '0', 10, 19, '1', 'coolscorp', '0', '25-09-2014', '12-31'),
(82, 'Off Tangent Travel', 'OffTangentTravel', '0', 10, 20, '1', 'coolscorp', '0', '25-09-2014', '12-54');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
