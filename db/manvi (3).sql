-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 03:57 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manvi`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clientname` varchar(100) NOT NULL,
  `clientemail` varchar(100) NOT NULL,
  `clientcontact` varchar(100) NOT NULL,
  `clientaddress` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `clientname`, `clientemail`, `clientcontact`, `clientaddress`) VALUES
(1, 'raj', 'raj@gmail.com', '346345757', 'NA'),
(2, 'raj', 'raj@gmail.com', '346345757', 'NA'),
(7, 'raj', 'raj@gma.com', '9034693403', 'sdkj'),
(8, 'raj', 'raj@mss.com', '9039203009', 'kjn'),
(9, 'aa', 'aa@g.com', '4334634634', 'aa'),
(10, 'raj', 'raj@gmai.com', 'raj', 'raj'),
(11, 'bb', 'bb@bb.com', '9353953503', 'Solapur'),
(12, 'raj', 'raj@gg.com', '345395839', 'kjn');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `comments`) VALUES
(4, 'bb', 'b@gmail.com', 'b', 'b                      '),
(5, 'bb', 'b@gmail.com', 'b', 'b                      '),
(6, 'bb', 'b@gmail.com', 'b', 'b                      '),
(7, 'AAA', 'aaa@gmail.com', 'djdjd', 'fdf                      '),
(8, 'kjn', 'kjn@gg.com', 'kjn', 'jkn                      ');

-- --------------------------------------------------------

--
-- Table structure for table `orgworkedwith`
--

CREATE TABLE `orgworkedwith` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orgworkedwithId` varchar(100) NOT NULL,
  `orgworkedwithname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orgworkedwith`
--

INSERT INTO `orgworkedwith` (`id`, `orgworkedwithId`, `orgworkedwithname`) VALUES
(1, 'orgWorkedWith', 'SAAS'),
(3, 'orgWorkedWith', 'SEES'),
(4, 'orgWorkedWith', 'Added');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skillId` varchar(100) NOT NULL,
  `skillname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skillId`, `skillname`) VALUES
(1, 'softskills', 'Leadership Skill'),
(2, 'softskills', 'Communication Skill'),
(3, 'softskills', 'slkm'),
(4, 'softskills', 'rajraj'),
(5, 'softskills', 'ssss'),
(6, 'softskills', 'ssss'),
(7, 'orgWorkedWith', 'SAAS'),
(8, 'softskills', 'SASS'),
(9, 'softskills', 'SASS'),
(10, 'softskills', 'SASS'),
(11, 'softskills', 'NAAN'),
(12, 'softskills', 'Added');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainerParentCategory` varchar(100) NOT NULL,
  `subCategory` varchar(100) NOT NULL,
  `multiCategory` varchar(300) NOT NULL,
  `selectSoftSkills` varchar(100) NOT NULL,
  `willingToTravel` text NOT NULL,
  `academic` varchar(100) NOT NULL,
  `professional` varchar(100) NOT NULL,
  `diplomaCertification` varchar(100) NOT NULL,
  `awardsRewards` varchar(100) NOT NULL,
  `profJourney` varchar(100) NOT NULL,
  `totalExperience` varchar(100) NOT NULL,
  `relevantExperience` varchar(100) NOT NULL,
  `selectOrgWorkedWith` varchar(100) NOT NULL,
  `tcmember` varchar(100) NOT NULL,
  `enrollmentId` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `emailId` varchar(100) NOT NULL,
  `fullPostalAddress` varchar(300) NOT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `trainerParentCategory`, `subCategory`, `multiCategory`, `selectSoftSkills`, `willingToTravel`, `academic`, `professional`, `diplomaCertification`, `awardsRewards`, `profJourney`, `totalExperience`, `relevantExperience`, `selectOrgWorkedWith`, `tcmember`, `enrollmentId`, `firstName`, `middleName`, `lastName`, `contact`, `emailId`, `fullPostalAddress`, `street`, `city`, `pincode`, `state`) VALUES
(1, 'School Teacher/Tutor', 'Group Coaching - Home Visit - Own Class/ Residence', '', '', 'National | International', 'kjn', 'kjn', 'jn', 'jn', 'kjnkjn', 'jn', 'kjnj', '', 'kjn', 'kjn', 'kj', 'kjn', 'kj', 'kjn', 'kjn', 'jkj', 'nkjn', 'jkn', 'jkn', 'Dadra'),
(2, 'Professional Institute Trainer', 'Freelancer', '', '', 'National | ', 'jnk', 'jnkj', 'kjn', 'kjnk', 'jn', 'kjn', 'kjnk', '', 'jbj', 'hhbjhb', 'hjbjh', 'hbj', 'hbj', 'hbj', 'hbj', 'hbjh', 'jh', 'bjhb', 'jhb', 'Haryana'),
(3, 'Professional Institute Trainer', 'Freelancer', '', '', 'National | ', 'jnk', 'jnkj', 'kjn', 'kjnk', 'jn', 'kjn', 'kjnk', '', 'jbj', 'hhbjhb', 'hjbjh', 'hbj', 'hbj', 'hbj', 'hbj', 'hbjh', 'jh', 'bjhb', 'jhb', 'Haryana'),
(4, 'Self Employed', 'Training Enterpreneur', '', 'NAAN', 'National | International', '10th Pass', 'Bachlors Degree', 'Diploma in IT', 'No', 'Brief Description', '3.3', '5.5', '', 'TC Name', 'ENROLL-4645745', 'First Name', 'Middle Name', 'Last Name', '9035359303', 'raj@gmail.com', 'raj@gmail.com', 'Pune', 'Solapur', '413005', 'Bihar'),
(5, 'School Teacher/Tutor', 'Group Coaching - Home Visit - Own Class/ Residence', '', 'NAAN', 'National | International', '10th Pass', 'Bachlors Degree', 'Diploma in IT', 'No', 'Brief Description', '3.3', '5.5', '', 'TC Name', 'ENROLL-4645745', 'First Name', 'Middle Name', 'Last Name', '9035359303', 'raj@gmail.com', 'raj@gmail.com', 'Pune', 'Solapur', '413005', 'Goa'),
(6, 'Self Employed', 'Training Enterpreneur', '', 'Added', 'National | International', '10th Pass', 'Bachlors Degree', 'Diploma in IT', 'No', 'Brief Description', '3.3', '5.5', 'Added', 'TC Name', 'ENROLL-4645745', 'First Name', 'Middle Name', 'Last Name', '9035359303', 'raj@gmail.com', 'raj@gmail.com', 'Pune', 'Solapur', '413005', 'Haryana');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_role`, `user_name`, `user_password`, `user_email`) VALUES
(2, 'a', 'trainer', 'aaa', 'aaa', 'aaa@gmail.com'),
(3, 'a', '', 'a', 'kjn', 'a'),
(4, 'Lkm', '', 'lkmlkm', 'klm', 'lkmm'),
(5, 'Lkm', '', 'lkmlkm', 'klm', 'lkmm'),
(6, 'Lkm', '', 'lkmlkm', 'klm', 'lkmm'),
(7, 'Lkm', '', 'lkmlkm', 'sds', 'lkmm'),
(8, 'Lkm', '', 'lkmlkm', 'sds', 'lkmm'),
(9, 'Lkm', '', 'lkmlkm', 'sds', 'lkmm'),
(10, 'sk', '', 'aaa', 'aaa', 'aaa'),
(11, 'kj', 'Trainer', 'kjn', 'jnkj', 'jnk'),
(12, 'kj', 'Trainer', 'kjn', 'jnkj', 'jnk'),
(14, 'm', 'Client', 'm', 'm', 'm'),
(16, 'raj', 'Trainer', 'raj', 'raj', 'raj@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `orgworkedwith`
--
ALTER TABLE `orgworkedwith`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orgworkedwith`
--
ALTER TABLE `orgworkedwith`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
