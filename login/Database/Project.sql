-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2020 at 04:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Answers`
--

CREATE TABLE `Answers` (
  `id` int(11) NOT NULL,
  `qid` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `uid` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Answers`
--

INSERT INTO `Answers` (`id`, `qid`, `content`, `uid`, `uname`, `time`) VALUES
(1, '1', '1. JavaScript is used for Front End development while java is used for Back End Development; 2. Java Script is dynamically typed language and Java is Statically typed language; 3. Java Script is a scripting language while Java is a programming language; 4. Java and JavaScript are very different in their SYNTAX; 5. Both languages are Object Oriented but JavaScript is a Partial Object Oriented Language while Java is a fully Object Oriented Langauge.', '2', 'Bob', '2020-10-12'),
(2, '1', 'They share some letters and they are both computer\r\nlanguages, just about everything else is different.', '3', 'Cindy', '2020-10-11'),
(3, '2', 'Stage 1: Get your math in place. Stage 2: Programming. Stage 3: Learn Machine Learning tools: You will have to learn certain common topics to build from. They are: Regression techniques. SVM. Classification Techniques. Clustering Techniques. Neural Nets. Decision making algorithms. Optimization Techniques. Stage 4: Build After you have learnt the tools. It is time you build something.', '1', 'Andy', '2020-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `QAnswers`
--

CREATE TABLE `QAnswers` (
  `id` int(11) NOT NULL,
  `qid` varchar(200) NOT NULL,
  `aid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `QAnswers`
--

INSERT INTO `QAnswers` (`id`, `qid`, `aid`) VALUES
(123, '1', '1'),
(124, '1', '2'),
(125, '2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

CREATE TABLE `Questions` (
  `id` int(11) NOT NULL,
  `space` varchar(200) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` longtext NOT NULL,
  `time_add` varchar(200) NOT NULL,
  `creatorid` varchar(200) NOT NULL,
  `creatorName` varchar(200) NOT NULL,
  `upvotes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Questions`
--

INSERT INTO `Questions` (`id`, `space`, `title`, `content`, `time_add`, `creatorid`, `creatorName`, `upvotes`) VALUES
(1, 'Javascript', 'What is the difference between Java and Javascript', 'I am a newbie in programming, and I would like to know what is the difference between Java and Javascript', '2020-10-11', '1', 'Andy', 2),
(2, 'Machine Learning', 'How to learn Machine Learning', 'This is a test problem in the space Machine Learning', '2020-10-10', '2', 'Bob', 2),
(3, 'Algorithm', 'How to learn Algorithm', 'I am wondering where I can find the resource to learn the algorithms', '2020-10-09', '3', 'Cindy', 2);

-- --------------------------------------------------------

--
-- Table structure for table `QUpvotes`
--

CREATE TABLE `QUpvotes` (
  `id` int(11) NOT NULL,
  `qid` varchar(200) NOT NULL,
  `uid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `QUpvotes`
--

INSERT INTO `QUpvotes` (`id`, `qid`, `uid`) VALUES
(127, '3', '1'),
(128, '2', '1'),
(567, '1', '2'),
(626, '2', '3'),
(627, '1', '3'),
(628, '3', '3'),
(629, '15', '3'),
(634, '2', '2'),
(638, '3', '131'),
(654, '15', '2');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `name`, `email`, `password`) VALUES
(1, 'Andy', 'andy@test.hk', 'pwd'),
(2, 'Bob', 'bob@test.hk', 'pwd'),
(3, 'Cindy', 'cindy@test.hk', 'pwd'),
(132, 'Aryak Kumar', 'a@gm.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Answers`
--
ALTER TABLE `Answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `QAnswers`
--
ALTER TABLE `QAnswers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Questions`
--
ALTER TABLE `Questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `QUpvotes`
--
ALTER TABLE `QUpvotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Answers`
--
ALTER TABLE `Answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `QAnswers`
--
ALTER TABLE `QAnswers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `Questions`
--
ALTER TABLE `Questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `QUpvotes`
--
ALTER TABLE `QUpvotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=655;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
