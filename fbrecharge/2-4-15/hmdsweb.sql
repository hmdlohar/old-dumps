-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2015 at 03:46 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hmdsweb`

-- --------------------------------------------------------

--
-- Table structure for table `mm`
--

CREATE TABLE IF NOT EXISTS `mm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `hit` text NOT NULL,
  `link` text NOT NULL,
  `other` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mm`
--

INSERT INTO `mm` (`id`, `name`, `hit`, `link`, `other`) VALUES
(1, 'Home', '', 'home', ''),
(2, 'Earn Money', '', 'earn_money', ''),
(3, 'Linux', '', 'linux', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mm` text NOT NULL,
  `link` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `other` text NOT NULL,
  `other2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `mm`, `link`, `date`, `time`, `other`, `other2`) VALUES
(1, 'Earn Money From DonkeyMails.com', 'earn_money', 'earn_money_from_donkeymails', '', '', 'Hello Friends Welcome to EMWPA, In This tutorial i am going to teach you how you can earn money from donkeymails.com. Donkeymails is Paid To Signup Website that means donkeymails will pay you for doing signups on different websites. Bellow...', ''),
(2, 'Introduction to Virus Free Linux OS', 'linux', 'intorduction_to_virusfree_linux', '', '', 'asdf', ''),
(3, 'Earn Money From DonkeyMails.com [HINDI]', 'earn_money', 'earn_money_from_donkeymails_hindi', '', '', 'Is tutorial me may aapko sikhane wala hu kayse aap Doknkeymails.com se payse kama sakte hay. DokneyMails ek "Paid to Signup" website hay. Iska matlab Donkeymails aapko signup alag-alag websites me signup darne ke payse deta hay. Niche mayne kuch steps bataye hay jo follow karke aap bhi donkeymails.com se payse kama sakte hay.', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
