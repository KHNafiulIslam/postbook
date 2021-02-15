-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 07:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` varchar(500) NOT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `author`) VALUES
(18, 'FaceBook', '\r\nDhonobad apanader bhalobashar jono. Asha kori apnara amakay Instagram e follow korben @realmuza amar shopno shudu apnara puron kortay parben Asha kori apnara amar channel subscribe korben 100k subsc', 'Akib Hasan'),
(22, 'Book fair', 'Check out the video for \"Ki Kargeyi\" by Raxstar ft The PropheC\r\n\r\nProduced by The PropheC\r\n\r\nTaken from the album \"Glass Ceiling\"\r\n\r\nDownload/Stream :\r\n http://smarturl.it/RaxstarGlassCeiling​\r\n\r\nFoll', 'Nafiul Islam'),
(23, 'Youtube', 'Check out the video for \"Ki Kargeyi\" by Raxstar ft The PropheC\r\n\r\nProduced by The PropheC\r\n\r\nTaken from the album \"Glass Ceiling\"\r\n\r\nDownload/Stream :\r\n http://smarturl.it/RaxstarGlassCeiling​\r\n\r\nFollow Raxstar :\r\nhttp://www.facebook.com/Raxstar​ \r\nhttp://www.twitter.com/Raxstar​ \r\nhttp://www.instagram.com/RaxstarUK​\r\nSnapChat: @RaxstarOfficial\r\n\r\n\r\nFollow VIP Records : \r\nhttp://www.instagram.com/viprecords​\r\nhttp://www.twitter.com/viprecordsuk​\r\nhttps://www.facebook.com/viprecordson...​\r\n\r\n\r\nPo', 'Nafiul Islam'),
(29, 'Ban vs West In', 'Over 8.6: Review by West Indies (Batting), Umpire - Sharfuddoula, Batsman - JD Campbell (Upheld)West Indies: 50 runs in 14.1 overs (86 balls), Extras 11st Wicket: 50 runs in 86 balls (KC Brathwaite 21, JD Campbell 31, Ex 1)Drinks: West Indies - 55/0 in 15.0 overs (KC Brathwaite 22, JD Campbell 32)Over 20.4: Review by West Indies (Batting), Umpire - Sharfuddoula, Batsman - JD Campbell (Struck down)Lunch: West Indies - 84/1 in 29.0 overs (KC Brathwaite 39, S Moseley 6)West Indies: 100 ', 'Khondker Nafiul Islam'),
(31, 'Digital Marekting', 'Digital marketing is a marketing process which is online based.', 'Waliul Islam'),
(32, 'Music Lover', 'I love making music and the best think is this is my love as well.', 'Taqi Tahmid');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `job` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `location` varchar(200) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `job`, `password`, `created`, `location`) VALUES
(8, 'Waliul Islam', 'Waliulislam@gmail.com', 'Unemployed ', '130b4091b2f82d73a8e3de213de49d44', '2021-02-12 17:51:53', '7/12 Lalmatia Block-B, Dhaka-1207');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
