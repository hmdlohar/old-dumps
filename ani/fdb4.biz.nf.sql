-- phpMyAdmin SQL Dump
-- version 3.4.3.1
-- http://www.phpmyadmin.net
--
-- Host: fdb4.biz.nf
-- Generation Time: Aug 24, 2014 at 05:25 AM
-- Server version: 5.5.38
-- PHP Version: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `1261760_hmd`
--
CREATE DATABASE `1261760_hmd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `1261760_hmd`;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `hit` text NOT NULL,
  `other` text NOT NULL,
  `count` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `name`, `link`, `hit`, `other`, `count`) VALUES
(1, 'High Quality Likes', 'hqlikes', '103', '1000 likes in Rs.800/-', 'PGRpdiBjbGFzcz0nbGlrZXMnPg0KV2UgYXJlIHByb3ZpZGluZyBSRUFMIEZhY2Vib29rIFBhZ2UgbGlrZXMgd2l0aCBhY3RpdmUgdXNlcnMuIEl0IGNhbiBiZSBkb25lIGJ5IGludml0aW5nIGZyaWVuZHMuIElmIHlvdSB3YW50IHRvIHByb21vdGUgeW91ciBidXNpbmVzcyBvbiBmYWNlYm9vayB0aGlzIGlzIHRoZSBiZXN0IG9wdGlvbiBmb3IgeW91LiBZb3UgY2FuIGdldCByZWFsIHZpc2l0ZXJzIG9uIHlvdXIgRmFjZWJvb2sgcGFnZS4gPGJyPiA8YnI+IDxmb250IGNvbG9yPWdyZWVuPiBXZSBzdWdnZW5zdCB5b3UgdG8gdHJ5IG91dCBERU1PIGZpcnN0LiBXZSBhcmUgZ2l2aW5nIGRlbW8gaW4ganVzdCAyMCUgb2ZmIHByaWNlIGZvciAyMDAgbGlrZXMuIDwvZm9udD4NCjxicj48YnI+IDxjZW50ZXI+IDxmb250IGNvbG9yPWJsdWUgc2l6ZT01Pjx1PjxpPjxiPiBTZWxlY3QgUGFja2FnZSA8L2I+PC9pPjwvdT4gPC9mb250PjwvY2VudGVyPg0KPGRpdiBpZD0icHJpY2UtY29udGFpbmVyIj4NCg0KDQoNCg0KPGRpdiBjbGFzcz0icHJpY2UiPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPjxiPkRlbW8gUGFja2FnZTwvYj48L3A+PC9kaXY+PHAgY2xhc3M9InByaWNlLWRvbGxhciI+UnMuNTA8L3A+PGRpdiBjbGFzcz0icGFja2FnZS1hZGRpbmZvMiI+TnVtYmVyIE9mIGxpa2VzOjIwMDwvZGl2PiA8aHI+IDxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbyI+VGltZSBUbyBCZSBEb25lOiAxZGF5IDxocj4gUGF5bWVudCBPcHRpb246IE1vYmlsZSBSZWNoYXJnZTxicj4gPGhyPiA8YnI+PC9kaXY+PGEgaHJlZj1vcmRlci5waHA+PGRpdiBjbGFzcz0icHJpY2UtaGVhZGVyIj48cCBjbGFzcz0icGFja2FnZSI+IE9yZGVyIE5vdzwvcD48L2Rpdj48L2E+PC9kaXY+DQoNCjxkaXYgY2xhc3M9InByaWNlIiBzdHlsZT0ibWFyZ2luLWxlZnQ6MTJweDsiPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPjxiPk1pbmkgUGFja2FnZTwvYj48L3A+PC9kaXY+PHAgY2xhc3M9InByaWNlLWRvbGxhciI+UnMuMTAwMDwvcD48ZGl2IGNsYXNzPSJwYWNrYWdlLWFkZGluZm8yIj5OdW1iZXIgT2YgbGlrZXM6MTAwMDwvZGl2PiA8aHI+IDxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbyI+VGltZSBUbyBCZSBEb25lOiAzLTQgRGF5cyA8aHI+IFBheW1lbnQgT3B0aW9uOiBCYW5rIFRyYW5zZmFyPGJyPiA8aHI+IDxicj48L2Rpdj48YSBocmVmPW9yZGVyLnBocD48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj4gT3JkZXIgTm93PC9wPjwvZGl2PjwvYT48L2Rpdj4NCg0KPGRpdiBjbGFzcz0icHJpY2UiIHN0eWxlPSJtYXJnaW4tdG9wOjEycHg7Ij48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj48Yj5NZWRpdW0gUGFja2FnZTwvYj48L3A+PC9kaXY+PHAgY2xhc3M9InByaWNlLWRvbGxhciI+UnMuNDUwMDwvcD48ZGl2IGNsYXNzPSJwYWNrYWdlLWFkZGluZm8yIj5OdW1iZXIgT2YgbGlrZXM6NTAwMDwvZGl2PiA8aHI+IDxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbyI+VGltZSBUbyBCZSBEb25lOiAxMC0xMiBEYXlzIDxocj4gUGF5bWVudCBPcHRpb246IEJhbmsgVHJhbnNmYXIgUmVjaGFyZ2U8YnI+IDxocj4gPGJyPjwvZGl2PjxhIGhyZWY9b3JkZXIucGhwPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPiBPcmRlciBOb3c8L3A+PC9kaXY+PC9hPjwvZGl2Pg0KDQoNCjxkaXYgY2xhc3M9InByaWNlIiBzdHlsZT0ibWFyZ2luLWxlZnQ6MTJweDttYXJnaW4tdG9wOjEycHg7Ij48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj48Yj5EZW1vIFBhY2thZ2U8L2I+PC9wPjwvZGl2PjxwIGNsYXNzPSJwcmljZS1kb2xsYXIiPlJzLjcwMDA8L3A+PGRpdiBjbGFzcz0icGFja2FnZS1hZGRpbmZvMiI+TnVtYmVyIE9mIGxpa2VzOjEwMDAwPC9kaXY+IDxocj4gPGRpdiBjbGFzcz0icGFja2FnZS1hZGRpbmZvIj5UaW1lIFRvIEJlIERvbmU6IDIwLTI0IERheXMgPGhyPiBQYXltZW50IE9wdGlvbjogQmFuayBUcmFuc2Zhcjxicj4gPGhyPiA8YnI+PC9kaXY+PGEgaHJlZj1vcmRlci5waHA+PGRpdiBjbGFzcz0icHJpY2UtaGVhZGVyIj48cCBjbGFzcz0icGFja2FnZSI+IE9yZGVyIE5vdzwvcD48L2Rpdj48L2E+PC9kaXY+DQoNCjwvZGl2Pg0K'),
(2, 'Low Quality likes', 'lqlikes', '19', '1000 likes in Rs.500/-', 'PGRpdiBjbGFzcz0nbGlrZXMnPg0KV2UgYXJlIHByb3ZpZGluZyBSRUFMIEZhY2Vib29rIFBhZ2UgbGlrZXMgd2l0aCBhY3RpdmUgdXNlcnMuIEl0IGNhbiBiZSBkb25lIGJ5IGludml0aW5nIGZyaWVuZHMuIElmIHlvdSB3YW50IHRvIHByb21vdGUgeW91ciBidXNpbmVzcyBvbiBmYWNlYm9vayB0aGlzIGlzIHRoZSBiZXN0IG9wdGlvbiBmb3IgeW91LiBZb3UgY2FuIGdldCByZWFsIHZpc2l0ZXJzIG9uIHlvdXIgRmFjZWJvb2sgcGFnZS4gPGJyPiA8YnI+IDxmb250IGNvbG9yPWdyZWVuPiBXZSBzdWdnZW5zdCB5b3UgdG8gdHJ5IG91dCBERU1PIGZpcnN0LiBXZSBhcmUgZ2l2aW5nIGRlbW8gaW4ganVzdCAyMCUgb2ZmIHByaWNlIGZvciAyMDAgbGlrZXMuIDwvZm9udD4NCjxicj48YnI+IDxjZW50ZXI+IDxmb250IGNvbG9yPWJsdWUgc2l6ZT01Pjx1PjxpPjxiPiBTZWxlY3QgUGFja2FnZSA8L2I+PC9pPjwvdT4gPC9mb250PjwvY2VudGVyPg0KPGRpdiBpZD0icHJpY2UtY29udGFpbmVyIj4NCg0KDQoNCg0KPGRpdiBjbGFzcz0icHJpY2UiPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPjxiPkRlbW8gUGFja2FnZTwvYj48L3A+PC9kaXY+PHAgY2xhc3M9InByaWNlLWRvbGxhciI+UnMuNTA8L3A+PGRpdiBjbGFzcz0icGFja2FnZS1hZGRpbmZvMiI+TnVtYmVyIE9mIGxpa2VzOjIwMDwvZGl2PiA8aHI+IDxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbyI+VGltZSBUbyBCZSBEb25lOiAxZGF5IDxocj4gUGF5bWVudCBPcHRpb246IE1vYmlsZSBSZWNoYXJnZTxicj4gPGhyPiA8YnI+PC9kaXY+PGEgaHJlZj1vcmRlci5waHA+PGRpdiBjbGFzcz0icHJpY2UtaGVhZGVyIj48cCBjbGFzcz0icGFja2FnZSI+IE9yZGVyIE5vdzwvcD48L2Rpdj48L2E+PC9kaXY+DQoNCjxkaXYgY2xhc3M9InByaWNlIiBzdHlsZT0ibWFyZ2luLWxlZnQ6MTJweDsiPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPjxiPk1pbmkgUGFja2FnZTwvYj48L3A+PC9kaXY+PHAgY2xhc3M9InByaWNlLWRvbGxhciI+UnMuNzAwPC9wPjxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbzIiPk51bWJlciBPZiBsaWtlczoxMDAwPC9kaXY+IDxocj4gPGRpdiBjbGFzcz0icGFja2FnZS1hZGRpbmZvIj5UaW1lIFRvIEJlIERvbmU6IDMtNCBEYXlzIDxocj4gUGF5bWVudCBPcHRpb246IEJhbmsgVHJhbnNmYXI8YnI+IDxocj4gPGJyPjwvZGl2PjxhIGhyZWY9b3JkZXIucGhwPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPiBPcmRlciBOb3c8L3A+PC9kaXY+PC9hPjwvZGl2Pg0KDQo8ZGl2IGNsYXNzPSJwcmljZSIgc3R5bGU9Im1hcmdpbi10b3A6MTJweDsiPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPjxiPk1lZGl1bSBQYWNrYWdlPC9iPjwvcD48L2Rpdj48cCBjbGFzcz0icHJpY2UtZG9sbGFyIj5Scy4zMDAwPC9wPjxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbzIiPk51bWJlciBPZiBsaWtlczo1MDAwPC9kaXY+IDxocj4gPGRpdiBjbGFzcz0icGFja2FnZS1hZGRpbmZvIj5UaW1lIFRvIEJlIERvbmU6IDEwLTEyIERheXMgPGhyPiBQYXltZW50IE9wdGlvbjogQmFuayBUcmFuc2ZhciBSZWNoYXJnZTxicj4gPGhyPiA8YnI+PC9kaXY+PGEgaHJlZj1vcmRlci5waHA+PGRpdiBjbGFzcz0icHJpY2UtaGVhZGVyIj48cCBjbGFzcz0icGFja2FnZSI+IE9yZGVyIE5vdzwvcD48L2Rpdj48L2E+PC9kaXY+DQoNCg0KPGRpdiBjbGFzcz0icHJpY2UiIHN0eWxlPSJtYXJnaW4tbGVmdDoxMnB4O21hcmdpbi10b3A6MTJweDsiPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPjxiPkRlbW8gUGFja2FnZTwvYj48L3A+PC9kaXY+PHAgY2xhc3M9InByaWNlLWRvbGxhciI+UnMuNTAwMDwvcD48ZGl2IGNsYXNzPSJwYWNrYWdlLWFkZGluZm8yIj5OdW1iZXIgT2YgbGlrZXM6MTAwMDA8L2Rpdj4gPGhyPiA8ZGl2IGNsYXNzPSJwYWNrYWdlLWFkZGluZm8iPlRpbWUgVG8gQmUgRG9uZTogMjAtMjQgRGF5cyA8aHI+IFBheW1lbnQgT3B0aW9uOiBCYW5rIFRyYW5zZmFyPGJyPiA8aHI+IDxicj48L2Rpdj48YSBocmVmPW9yZGVyLnBocD48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj4gT3JkZXIgTm93PC9wPjwvZGl2PjwvYT48L2Rpdj4NCg0KPC9kaXY+DQo='),
(3, 'Fan Page Auto Likes', 'autolikes', '14', '1000 likes in Rs.100/-', 'PGRpdiBjbGFzcz0nbGlrZXMnPg0KV2UgYXJlIHByb3ZpZGluZyBSRUFMIEZhY2Vib29rIFBhZ2UgbGlrZXMgd2l0aCBhY3RpdmUgdXNlcnMuIEl0IGNhbiBiZSBkb25lIGJ5IGludml0aW5nIGZyaWVuZHMuIElmIHlvdSB3YW50IHRvIHByb21vdGUgeW91ciBidXNpbmVzcyBvbiBmYWNlYm9vayB0aGlzIGlzIHRoZSBiZXN0IG9wdGlvbiBmb3IgeW91LiBZb3UgY2FuIGdldCByZWFsIHZpc2l0ZXJzIG9uIHlvdXIgRmFjZWJvb2sgcGFnZS4gPGJyPiA8YnI+IDxmb250IGNvbG9yPWdyZWVuPiBXZSBzdWdnZW5zdCB5b3UgdG8gdHJ5IG91dCBERU1PIGZpcnN0LiBXZSBhcmUgZ2l2aW5nIGRlbW8gaW4ganVzdCAyMCUgb2ZmIHByaWNlIGZvciAyMDAgbGlrZXMuIDwvZm9udD4NCjxicj48YnI+IDxjZW50ZXI+IDxmb250IGNvbG9yPWJsdWUgc2l6ZT01Pjx1PjxpPjxiPiBTZWxlY3QgUGFja2FnZSA8L2I+PC9pPjwvdT4gPC9mb250PjwvY2VudGVyPg0KPGRpdiBpZD0icHJpY2UtY29udGFpbmVyIj4NCg0KDQoNCg0KDQoNCjxkaXYgY2xhc3M9InByaWNlIj48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj48Yj5NaW5pIFBhY2thZ2U8L2I+PC9wPjwvZGl2PjxwIGNsYXNzPSJwcmljZS1kb2xsYXIiPlJzLjEwMDwvcD48ZGl2IGNsYXNzPSJwYWNrYWdlLWFkZGluZm8yIj5OdW1iZXIgT2YgbGlrZXM6MTAwMDwvZGl2PiA8aHI+IDxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbyI+VGltZSBUbyBCZSBEb25lOiAxIERheSA8aHI+IFBheW1lbnQgT3B0aW9uOiBCYW5rIFRyYW5zZmFyPGJyPiA8aHI+IDxicj48L2Rpdj48YSBocmVmPW9yZGVyLnBocD48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj4gT3JkZXIgTm93PC9wPjwvZGl2PjwvYT48L2Rpdj4NCg0KPGRpdiBjbGFzcz0icHJpY2UiIHN0eWxlPSJtYXJnaW4tbGVmdDoxMnB4OyI+PGRpdiBjbGFzcz0icHJpY2UtaGVhZGVyIj48cCBjbGFzcz0icGFja2FnZSI+PGI+TWVkaXVtIFBhY2thZ2U8L2I+PC9wPjwvZGl2PjxwIGNsYXNzPSJwcmljZS1kb2xsYXIiPlJzLjQwMDwvcD48ZGl2IGNsYXNzPSJwYWNrYWdlLWFkZGluZm8yIj5OdW1iZXIgT2YgbGlrZXM6NTAwMDwvZGl2PiA8aHI+IDxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbyI+VGltZSBUbyBCZSBEb25lOiA1IERheXMgPGhyPiBQYXltZW50IE9wdGlvbjogQmFuayBUcmFuc2ZhciBSZWNoYXJnZTxicj4gPGhyPiA8YnI+PC9kaXY+PGEgaHJlZj1vcmRlci5waHA+PGRpdiBjbGFzcz0icHJpY2UtaGVhZGVyIj48cCBjbGFzcz0icGFja2FnZSI+IE9yZGVyIE5vdzwvcD48L2Rpdj48L2E+PC9kaXY+DQoNCg0KPGRpdiBjbGFzcz0icHJpY2UiIHN0eWxlPSJtYXJnaW4tdG9wOjEycHg7Ij48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj48Yj5EZW1vIFBhY2thZ2U8L2I+PC9wPjwvZGl2PjxwIGNsYXNzPSJwcmljZS1kb2xsYXIiPlJzLjcwMDwvcD48ZGl2IGNsYXNzPSJwYWNrYWdlLWFkZGluZm8yIj5OdW1iZXIgT2YgbGlrZXM6MTAwMDA8L2Rpdj4gPGhyPiA8ZGl2IGNsYXNzPSJwYWNrYWdlLWFkZGluZm8iPlRpbWUgVG8gQmUgRG9uZTogMTAgRGF5cyA8aHI+IFBheW1lbnQgT3B0aW9uOiBCYW5rIFRyYW5zZmFyPGJyPiA8aHI+IDxicj48L2Rpdj48YSBocmVmPW9yZGVyLnBocD48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj4gT3JkZXIgTm93PC9wPjwvZGl2PjwvYT48L2Rpdj4NCg0KPC9kaXY+DQo='),
(4, 'Post Auto Likes', 'autolikes-post', '15', '1000 likes in Rs.100/-', 'PGRpdiBjbGFzcz0nbGlrZXMnPg0KV2UgYXJlIHByb3ZpZGluZyBSRUFMIEZhY2Vib29rIFBhZ2UgbGlrZXMgd2l0aCBhY3RpdmUgdXNlcnMuIEl0IGNhbiBiZSBkb25lIGJ5IGludml0aW5nIGZyaWVuZHMuIElmIHlvdSB3YW50IHRvIHByb21vdGUgeW91ciBidXNpbmVzcyBvbiBmYWNlYm9vayB0aGlzIGlzIHRoZSBiZXN0IG9wdGlvbiBmb3IgeW91LiBZb3UgY2FuIGdldCByZWFsIHZpc2l0ZXJzIG9uIHlvdXIgRmFjZWJvb2sgcGFnZS4gPGJyPiA8YnI+IDxmb250IGNvbG9yPWdyZWVuPiBXZSBzdWdnZW5zdCB5b3UgdG8gdHJ5IG91dCBERU1PIGZpcnN0LiBXZSBhcmUgZ2l2aW5nIGRlbW8gaW4ganVzdCAyMCUgb2ZmIHByaWNlIGZvciAyMDAgbGlrZXMuIDwvZm9udD4NCjxicj48YnI+IDxjZW50ZXI+IDxmb250IGNvbG9yPWJsdWUgc2l6ZT01Pjx1PjxpPjxiPiBTZWxlY3QgUGFja2FnZSA8L2I+PC9pPjwvdT4gPC9mb250PjwvY2VudGVyPg0KPGRpdiBpZD0icHJpY2UtY29udGFpbmVyIj4NCg0KDQoNCg0KPGRpdiBjbGFzcz0icHJpY2UiPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPjxiPk1pbmkgUGFja2FnZTwvYj48L3A+PC9kaXY+PHAgY2xhc3M9InByaWNlLWRvbGxhciI+UnMuMTAwPC9wPjxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbzIiPk51bWJlciBPZiBsaWtlczoxMDAwPC9kaXY+IDxocj4gPGRpdiBjbGFzcz0icGFja2FnZS1hZGRpbmZvIj5UaW1lIFRvIEJlIERvbmU6IDEgRGF5IDxocj4gUGF5bWVudCBPcHRpb246IEJhbmsgVHJhbnNmYXI8YnI+IDxocj4gPGJyPjwvZGl2PjxhIGhyZWY9b3JkZXIucGhwPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPiBPcmRlciBOb3c8L3A+PC9kaXY+PC9hPjwvZGl2Pg0KDQo8ZGl2IGNsYXNzPSJwcmljZSIgc3R5bGU9Im1hcmdpbi1sZWZ0OjEycHg7Ij48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj48Yj5NZWRpdW0gUGFja2FnZTwvYj48L3A+PC9kaXY+PHAgY2xhc3M9InByaWNlLWRvbGxhciI+UnMuNDAwPC9wPjxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbzIiPk51bWJlciBPZiBsaWtlczo1MDAwPC9kaXY+IDxocj4gPGRpdiBjbGFzcz0icGFja2FnZS1hZGRpbmZvIj5UaW1lIFRvIEJlIERvbmU6IDUgRGF5cyA8aHI+IFBheW1lbnQgT3B0aW9uOiBCYW5rIFRyYW5zZmFyIFJlY2hhcmdlPGJyPiA8aHI+IDxicj48L2Rpdj48YSBocmVmPW9yZGVyLnBocD48ZGl2IGNsYXNzPSJwcmljZS1oZWFkZXIiPjxwIGNsYXNzPSJwYWNrYWdlIj4gT3JkZXIgTm93PC9wPjwvZGl2PjwvYT48L2Rpdj4NCg0KDQo8ZGl2IGNsYXNzPSJwcmljZSIgc3R5bGU9Im1hcmdpbi10b3A6MTJweDsiPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPjxiPkRlbW8gUGFja2FnZTwvYj48L3A+PC9kaXY+PHAgY2xhc3M9InByaWNlLWRvbGxhciI+UnMuNzAwPC9wPjxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbzIiPk51bWJlciBPZiBsaWtlczoxMDAwMDwvZGl2PiA8aHI+IDxkaXYgY2xhc3M9InBhY2thZ2UtYWRkaW5mbyI+VGltZSBUbyBCZSBEb25lOiAxMCBEYXlzIDxocj4gUGF5bWVudCBPcHRpb246IEJhbmsgVHJhbnNmYXI8YnI+IDxocj4gPGJyPjwvZGl2PjxhIGhyZWY9b3JkZXIucGhwPjxkaXYgY2xhc3M9InByaWNlLWhlYWRlciI+PHAgY2xhc3M9InBhY2thZ2UiPiBPcmRlciBOb3c8L3A+PC9kaXY+PC9hPjwvZGl2Pg0KDQo8L2Rpdj4NCg==');

-- --------------------------------------------------------

--
-- Table structure for table `mm`
--

CREATE TABLE IF NOT EXISTS `mm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE latin1_general_ci NOT NULL,
  `hit` text COLLATE latin1_general_ci NOT NULL,
  `link` text COLLATE latin1_general_ci NOT NULL,
  `other` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mm`
--

INSERT INTO `mm` (`id`, `name`, `hit`, `link`, `other`) VALUES
(1, 'Home', '', 'index.php', ''),
(2, 'Photos', '', 'pics', ''),
(3, 'Photos (18+)', '', 'xxxpics', ''),
(4, 'Facebook Likes', '0', 'likes', 'likes');

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE IF NOT EXISTS `pics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE latin1_general_ci NOT NULL,
  `link` text COLLATE latin1_general_ci NOT NULL,
  `hit` text COLLATE latin1_general_ci NOT NULL,
  `other` text COLLATE latin1_general_ci NOT NULL,
  `count` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `pics`
--

INSERT INTO `pics` (`id`, `name`, `link`, `hit`, `other`, `count`) VALUES
(1, 'Bhavika Thacker', 'bhavika-thacker', '7', 'BT', '4'),
(2, 'Binki Patel', 'binki-patel', '8', 'BP', '6'),
(3, 'Dipali Gadhavi', 'dipali-gadhavi', '137', 'DG', '6'),
(4, 'Farhin Rayma', 'farhin-rayma', '10', 'FR', '8'),
(5, 'Gopi Parmar', 'gopi-parmar', '25', 'MM', '6'),
(6, 'Jahal Juneja', 'jahal-juneja', '35', 'JJ', '5'),
(7, 'Kanika Meena', 'kanika-meena', '29', 'KM', '5'),
(8, 'Khayati Patel', 'khayati-patel', '52', 'KP', '4'),
(9, 'Khushabu Kumbhar', 'khushabu-kumbhar', '57', 'KK', '3'),
(10, 'Kinjal Gupta', 'kinjal-gupta', '85', 'KG', '12'),
(11, 'Manisha Hirani', 'manisha-hirani', '127', 'SN', '8'),
(12, 'Mansi Vanjara', 'mansi-vanjara', '218', 'MV', '8'),
(13, 'Mona Chande', 'mona-chande', '122', 'MC', '3'),
(14, 'Namrata Dayal', 'namrata-dayal', '94', 'ND', '12'),
(15, 'Neha Patel', 'neha-patel', '125', 'nk', '7'),
(16, 'Pari Sharma', 'pari-sharma', '119', 'PS', '7'),
(17, 'Parul Gupta', 'parul-gupta', '29', 'PG', '5'),
(18, 'Pooja Rabadiya', 'pooja-rabadiya', '96', 'PR', '5'),
(19, 'Preeti Gupta', 'preeti-gupta', '102', 'PG', '13'),
(20, 'Payal Vagela', 'payal-vagela', '23', 'PH', '7'),
(21, 'Priya Gandhi', 'priya-gandhi', '82', 'PG', '8'),
(32, 'Pooja Suthar', 'pooja-suthar', '47', 'PS', '7'),
(23, 'Priya Parmar', 'priya-parmar', '17', 'PP', '6'),
(24, 'Rashmi Maheta', 'rashmi-maheta', '75', 'RS', '9'),
(25, 'Sapna Patel', 'sapna-patel', '79', 'SP', '7'),
(26, 'Satakshi Kapoor', 'satakshi-kapoor', '64', 'SK', '4'),
(27, 'Shreya Shingh', 'shreya-shingh', '75', 'SS', '4'),
(28, 'Simar Shah', 'simar-shah', '91', 'SS', '9'),
(29, 'Sonam Sharma', 'sonam-sharma', '304', 'SS', '7'),
(30, 'Sumati Shah', 'sumati-shah', '173', 'SC', '6'),
(33, 'Sradha Shina', 'sradha-shina', '84', 'SS', '3'),
(34, 'Sudhika Gupta', 'sudhika-gupta', '96', 'SG', '5'),
(35, 'Anjali V', 'anjali-v', '139', 'AV', '2'),
(36, 'Ankita M', 'ankita-m', '185', 'AM', '4'),
(37, 'Anvaya R', 'anvaya-r', '68', 'AR', '2'),
(38, 'Bansika C', 'bansika-c', '69', 'BC', '5'),
(39, 'Debalina S', 'debalina-s', '98', 'DS', '7'),
(40, 'Divya S', 'divya-s', '104', 'DS', '4'),
(41, 'Dixita P', 'dixita-p', '115', 'DP', '4'),
(42, 'Nikita S', 'nikita-s', '22', 'NS', '8');

-- --------------------------------------------------------

--
-- Table structure for table `xxxpics`
--

CREATE TABLE IF NOT EXISTS `xxxpics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE latin1_general_ci NOT NULL,
  `hit` text COLLATE latin1_general_ci NOT NULL,
  `link` text COLLATE latin1_general_ci NOT NULL,
  `count` text COLLATE latin1_general_ci NOT NULL,
  `other` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `xxxpics`
--

INSERT INTO `xxxpics` (`id`, `name`, `hit`, `link`, `count`, `other`) VALUES
(8, 'Gaby', '142', 'gaby-37676', '12', 'gaby_37676_'),
(7, 'Dana', '116', 'dana-05867', '12', 'dana_u_05867_'),
(6, 'Chitika', '182', 'chitika', '12', 'cikita_20994_'),
(5, 'Bethany', '118', 'bethany-42900', '12', 'bethany_42900_'),
(4, 'Anna Tatu', '129', 'anna-tatu', '12', 'anna_tatu_09111_'),
(3, 'Alexis Adams', '58', 'alexis-adams', '12', 'alexis_adams_06995_'),
(1, 'Cindy ', '105', 'cindy-xxx', '7', 'c'),
(2, 'Corina', '97', 'corina-xxx', '7', 'co'),
(9, 'Juliette', '122', 'juliette-40994', '12', 'juliette_40994_'),
(10, 'Mango', '158', 'mango-04874', '12', 'mango_a_04874_'),
(13, 'Tamaya', '14', 'tamaya_64764', '15', 'tamaya_64764_'),
(14, 'Izzy_Delphine', '8', 'izzy_delphine_94882', '15', 'izzy_delphine_94882_'),
(15, 'Lukki_Lima', '12', 'lukki_lima_56332', '12', 'lukki_lima_56332_'),
(16, 'Lorena_And_Tracy', '9', 'lorena_tracy_70944', '12', 'lorena_tracy_70944_'),
(17, 'Romi_And_Raylene', '8', 'romi_raylene_60944', '15', 'romi_raylene_60944_'),
(18, 'Paula_Shy', '23', 'paula_shy_65114', '12', 'paula_shy_65114_'),
(19, 'Zelda_B', '17', 'zelda_b_74999', '12', 'zelda_b_74999_'),
(20, 'Liza_K', '14', 'liza_k_05994', '12', 'liza_k_05994_'),
(21, 'Josephine', '109', 'josephine_56631', '15', 'josephine_56631_'),
(22, 'Serena', '90', 'serena_47776', '15', 'serena_47776_'),
(23, 'Carina', '86', 'carina_88437', '12', 'carina_88437_'),
(24, 'Amelie_B', '80', 'amelie_b_56985', '12', 'amelie_b_56985_'),
(25, 'Monique', '153', 'monique_45884', '12', 'monique_45884_'),
(26, 'Romi_And_Raylene', '127', 'romi_raylene_04594', '15', 'romi_raylene_04594_'),
(27, 'Izzy_Delphine', '182', 'izzy_delphine_54422', '12', 'izzy_delphine_54422_');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
