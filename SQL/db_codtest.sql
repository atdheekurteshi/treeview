-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2017 at 10:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_codtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tree_entry`
--

CREATE TABLE `tree_entry` (
  `entry_id` int(11) NOT NULL,
  `parent_entry_id` int(11) NOT NULL DEFAULT '0' COMMENT '0 if its on the root level otherwise refering to another entry in this table'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='table holding all the tree nodes';

--
-- Dumping data for table `tree_entry`
--

INSERT INTO `tree_entry` (`entry_id`, `parent_entry_id`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 9),
(5, 9),
(6, 9),
(7, 5),
(8, 5),
(9, 1),
(10, 1),
(11, 10),
(12, 11),
(13, 3),
(14, 2),
(15, 13),
(19, 13),
(17, 13),
(18, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tree_entry_lang`
--

CREATE TABLE `tree_entry_lang` (
  `entry_id` int(11) NOT NULL,
  `lang` varchar(3) NOT NULL COMMENT 'language for the translation (eng/ger)',
  `name` varchar(255) NOT NULL COMMENT 'translated name for the given entry'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='translation table for tree_entry';

--
-- Dumping data for table `tree_entry_lang`
--

INSERT INTO `tree_entry_lang` (`entry_id`, `lang`, `name`) VALUES
(1, 'eng', 'Prio 1 Tasks'),
(2, 'eng', 'Prio 2 Tasks'),
(3, 'eng', 'Prio 3 Tasks'),
(1, 'ger', 'Prio 1 Aufgaben'),
(2, 'ger', 'Prio 2 Aufgaben'),
(3, 'ger', 'Prio 3 Aufgaben'),
(4, 'ger', 'Punkt ABC123'),
(5, 'ger', 'Punkt BCD123'),
(6, 'ger', 'Punkt UARGH123'),
(4, 'eng', 'Point ABC123'),
(5, 'eng', 'Point BCD123'),
(6, 'eng', 'Point UARGH123'),
(7, 'eng', 'Task 22222'),
(8, 'eng', 'Task 566'),
(9, 'eng', 'Supplier'),
(10, 'eng', 'Customer'),
(11, 'eng', '204. Task'),
(12, 'eng', '209. Task'),
(13, 'eng', '123. Task'),
(14, 'eng', 'asdasd. Task'),
(15, 'eng', 'nomnom. Task'),
(19, 'eng', 'mimimi. Task'),
(17, 'eng', 'Gedöns Task'),
(18, 'eng', 'ZOMG Task');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tree_entry`
--
ALTER TABLE `tree_entry`
  ADD PRIMARY KEY (`entry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tree_entry`
--
ALTER TABLE `tree_entry`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
