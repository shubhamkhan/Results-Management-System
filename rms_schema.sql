-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 09:06 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `last_log_in` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `user_id`, `name`, `address`, `date_of_birth`, `phone_no`, `qualification`, `experience`, `department`, `join_date`, `last_log_in`) VALUES
(1499793994, 1499793995, 'Dhiman Mandal', 'Durgapur,Burdwan ,West Bengal,India,722165', '1984-07-11', '9732165498', 'B.Tech, M.tech', '5 years in CSE', 'CSE', '2017-07-11', '2017-12-07 01:06:14'),
(1499794084, 1499794085, 'Srinibus Rana', 'Bankura,Bankura,West Bengal,India,722132', '1985-05-06', '8013254980', 'B.Tech, M.tech, Phd', '12 years in CSE', 'CSE', '2017-07-11', '2017-12-07 12:57:55'),
(1499794217, 1499794218, 'Dr. Dipak Kumar Kole', 'Singur,Hooghly,West Bengal,India,700102', '1983-06-05', '9564136125', 'B.Tech, M.tech, Phd', 'Associate Proffessor, 15 years in CSE', 'CSE', '2017-07-11', '0000-00-00 00:00:00'),
(1499794536, 1499794537, 'Sambhunath Mandal', 'Jalpaiguri,Jalpaiguri,West Bengal,India,735102', '1978-04-06', '9800123654', 'Diploma, B.tech', 'Lab assistant (3years), Lecturar at CSE (4years)', 'CSE', '2017-07-11', '2017-12-07 01:12:02'),
(1499794716, 1499794717, 'Swarup Mandal', 'Durgapur,Burdwan ,West Bengal,India,755125', '1985-09-04', '9800213645', 'Diploma, B.tech (CSE)', 'Assistant Proffesor', 'CSE', '2017-07-11', '2017-12-07 01:15:16'),
(1499794828, 1499794829, 'Paban Singha', 'Bankura,Bankura,West Bengal,India,722132', '1985-07-11', '9732319300', 'B.tech', 'Assistant Professor', 'CSE', '2017-07-11', '2017-12-07 03:19:40'),
(1499794908, 1499794909, 'Swadesh Ranjan Ghosal', 'Barasat,Kolkata,West Bengal,India,7000001', '1985-04-04', '9732038025', 'M.tech', 'Associate Proffessor', 'CSE', '2017-07-11', '2017-12-07 03:40:03'),
(1499794988, 1499794989, 'Rakesh Mukherjee', 'Kallani,Howrah,West Bengal,India,720213', '1984-07-11', '8001265354', 'M.tech', 'Assistant prof.', 'CSE', '2017-07-11', '2017-12-07 03:26:32'),
(1499795074, 1499795075, 'Tapas Ghosal', 'Hooghly,Hooghly,West Bengal,India,722148', '1985-06-05', '9932465187', 'Phd', 'Associate Proffessor', 'CSE', '2017-07-11', '2017-12-07 03:42:29'),
(1499795171, 1499795172, 'Souvik Mandal', 'Howrah,Howrah,West Bengal,India,700007', '2017-07-11', '8001854654', 'B.tech', 'Assistant Proffessor', 'CSE', '2017-07-11', '2017-12-07 03:34:10'),
(1499795297, 1499795298, 'Chinmoy Das', 'Howrah,Howrah,West Bengal,India,711110', '1985-03-04', '8942165214', 'B.tech, M.tech(persuing)', 'assistant Proffessor (CSE)', 'IT', '2017-07-11', '2017-12-07 01:17:41'),
(1499795407, 1499795407, 'Pintu Ghosal', 'Bankura,Bankura,West Bengal,India,722105', '1985-04-06', '9842165651', 'M.tech', 'Assistant Prof.', 'IT', '2017-07-11', '2017-12-07 03:24:45'),
(1499795498, 1499795499, 'Sumon Das', 'Asansol,Burdwan ,West Bengal,India,766541', '1984-07-11', '8535986532', 'Diploma', 'Lab Assistant(2 years)', 'IT', '2017-07-11', '2017-12-07 03:39:32'),
(1499795562, 1499795563, 'Ayan Mukherjee', 'Bankura,Bankura,West Bengal,India,722132', '1985-04-09', '8535834352', 'B.tech, M.tech', 'Assistant Proffessor (7 years)', 'IT', '2017-07-11', '2017-12-07 01:53:18'),
(1499795653, 1499795654, 'Akash Mandal', 'Hooghly,Hooghly,West Bengal,India,722165', '1985-05-06', '9845123644', 'Diploma', 'Lab Assistant (2 years)', 'IT', '2017-07-11', '2017-12-07 01:31:50'),
(1499795781, 1499795782, 'Ananya Das', 'Midnapur,Midnapur,West Bengal,India,722108', '1985-02-06', '9546321456', 'BCA, MCA', '2 years in CSE, 3 years in IT', 'IT', '2017-07-11', '2017-12-07 01:26:57'),
(1499795861, 1499795862, 'Saikat Singha', 'Howrah,Howrah,West Bengal,India,741561', '1985-07-11', '8942156325', 'Diploma', 'Lab Assistant', 'IT', '2017-07-11', '2017-12-07 03:32:11'),
(1499795930, 1499795930, 'Snigdha Mandal', 'Bankura,Bankura,West Bengal,India,722104', '1986-09-02', '9614405210', 'M.tech', 'Assistant Proffessor', 'IT', '2017-07-11', '2017-12-07 03:33:25'),
(1499796007, 1499796008, 'Sraboni Mandal', 'Hooghly,Hooghly,West Bengal,India,702135', '1985-07-11', '8967456321', 'B.tech', 'Assistant Proffessor', 'IT', '2017-07-11', '2017-12-07 03:34:52'),
(1499796107, 1499796108, 'Arpita Ghosal', 'Bankura,Bankura,West Bengal,India,722132', '1985-03-07', '8001065489', 'B.tech', 'Assistant Proffessor (1 year)', 'ECE', '2017-07-11', '2017-12-07 01:28:10'),
(1499796173, 1499796173, 'Aniket Dutta', 'Howrah,Howrah,West Bengal,India,700007', '2017-07-11', '9732165498', 'Diploma', 'Lab Assistant', 'ECE', '2017-07-11', '2017-12-07 01:50:11'),
(1499796249, 1499796250, 'Anik Ghosh', 'Howrah,Howrah,West Bengal,India,700007', '1985-07-11', '9732165498', 'Diploma', 'Lab assistant', 'ECE', '2017-07-11', '2017-12-07 01:48:24'),
(1499796337, 1499796338, 'Sagar Mukherjee', 'Bandal,Hooghly,West Bengal,India,722130', '1985-09-05', '8956124535', 'M.tech', 'Associate Proffessor', 'ECE', '2017-07-11', '2017-12-07 03:31:17'),
(1499796403, 1499796404, 'Subham Mandal', 'Durgapur,Burdwan ,West Bengal,India,755125', '1985-07-11', '8945126458', 'B.tech', 'Assistant Proffessor', 'ECE', '2017-07-11', '2017-12-07 03:35:37'),
(1499796504, 1499796505, 'Subhas Ghosal', 'Asansol,Burdwan,West Bengal,India,788452', '1985-12-15', '8942156789', 'Diploma', 'Lab Assistant', 'ECE', '2017-07-11', '2017-12-07 03:38:17'),
(1499796564, 1499796565, 'Laltu Singha', 'Bankura,Bankura,West Bengal,India,722106', '1987-07-11', '8942187456', 'B.tech, M.tech', 'Assistant Proffesor', 'ECE', '2017-07-11', '2017-12-07 03:17:27'),
(1499796633, 1499796633, 'Amir Sohel', 'Asansol,Burdwan,WB,India,765125', '1985-01-02', '7512043987', 'B.Tech', 'Assistant Proffessor (1 years)', 'ME', '2017-07-11', '2017-12-07 01:35:40'),
(1499796708, 1499796709, 'Anamika Sarkar', 'Durgapur,Burdwan ,West Bengal,India,758125', '1985-12-25', '8525165425', 'B.tech, M.tech', 'Assistant Proffessor (5 years)', 'ME', '2017-07-11', '2017-12-07 01:46:09'),
(1499796791, 1499796792, 'Debleena Das', 'Hooghly,Hooghly,West Bengal,India,701021', '1985-06-04', '8525465125', 'Diploma, B.tech', 'Assistant Proffessor (5 years)', 'ME', '2017-07-11', '2017-12-07 02:03:47'),
(1499796863, 1499796864, 'Tamanash Chatterjee', 'Howrah,Howrah,West Bengal,India,700007', '1985-07-11', '9865321458', 'B.tech', 'Assistant Proffessor', 'ME', '2017-07-11', '2017-12-07 03:41:24'),
(1499796937, 1499796938, 'Rajesh Chatterjee', 'Durgapur,Burdwan,West Bengal,India,788965', '1985-07-11', '8942165125', 'B.tech', 'Assistant Prof.', 'ME', '2017-07-11', '2017-12-07 03:25:25'),
(1499797021, 1499797022, 'Rakesh Mukherjee', 'Hooghly,Hooghly,West Bengal,India,722155', '1985-08-02', '8975423644', 'B.tech', 'Assistant Proffessor', 'ME', '2017-07-11', '2017-12-07 03:30:39'),
(1499797096, 1499797096, 'Kalidas Deoghuria', 'Asansol,Burdwan,West Bengal,India,766132', '1986-07-11', '8965421578', 'B.tech', 'Assistant Proffessor', 'ECE', '2017-07-11', '2017-12-07 03:12:13'),
(1499797156, 1499797157, 'Kinnar Chowdhury', 'Asansol,Burdwan,West Bengal,India,788125', '1984-07-11', '8965142565', 'B.tech', 'Assistant Proffessor', 'CSE', '2017-07-11', '2017-12-07 03:13:52'),
(1499797219, 1499797220, 'Madhu das', 'Durgapur,Burdwan,West Bengal,India,754154', '1985-07-11', '9732156987', 'B.tech', 'Assistant Proffessor', 'EE', '2017-07-11', '2017-12-07 03:18:24'),
(1499797299, 1499797300, 'Mahindra Singha', 'Hooghly,Hooghly,West Bengal,India,755484', '1984-12-25', '9732316345', 'B.tech', 'Assistant Prof.', 'EE', '2017-07-11', '2017-12-07 03:19:01'),
(1499797400, 1499797401, 'Papai Dey', 'Durgapur,Burdwan,West Bengal,India,755165', '1995-07-11', '9732314258', 'B.tech', 'Assistant Prof.', 'EE', '2017-07-11', '2017-12-07 03:20:51'),
(1499797472, 1499797473, 'Paromita Patra', 'Saltlake,Howrah,West Bengal,India,700001', '1985-07-11', '8942165125', 'B.tech', 'Assistant Prof.', 'EE', '2017-07-11', '2017-12-07 03:23:08'),
(1499797547, 1499797547, 'Bapi Sen', 'Durgapur,Burdwan,West Bengal,India,766452', '1985-07-11', '9802135468', 'B.tech, M.tech', 'Assistant Proffessor (8 years)', 'EE', '2017-07-11', '2017-12-07 01:56:00'),
(1499797634, 1499797635, 'Deboshree Das', 'Durgapur,Burdwan,West Bengal,India,766454', '1984-07-11', '8964321456', 'B.tech', 'Assistant Proffessor (5 years)', 'EE', '2017-07-11', '2017-12-07 02:04:35'),
(1499797752, 1499797753, 'Debu Rai', 'Bankura,Bankura,West Bengal,India,722109', '1985-07-11', '9832154697', 'Diploma, B.tech', 'Assistant Proffessor (5 years)', 'EE', '2017-07-11', '2017-12-07 02:06:09'),
(1499797835, 1499797836, 'Siddhartha Saha', 'Bankura,Bankura,West Bengal,India,722132', '1985-07-11', '9802316544', 'B.tech', 'Assistant Proffessor', 'CE', '2017-07-12', '2017-12-07 03:32:46'),
(1499797919, 1499797920, 'Pinak Dey', 'Durgapur,Burdwan,West Bengal,India,766125', '1985-01-02', '8972156498', 'M.tech', 'Assistant Prof.', 'CE', '2017-07-12', '2017-12-07 03:24:07'),
(1499797999, 1499798000, 'Chinmoy Das', 'Durgapur,Burdwan,West Bengal,India,799456', '1985-07-12', '9732165458', 'Diploma', 'Lab Assistant', 'CE', '2017-07-12', '2017-12-07 02:02:48'),
(1499798073, 1499798074, 'Durnibar Mandal', 'Hooghly,Hooghly,West Bengal,India,455512', '1985-07-12', '8942165125', 'Diploma, B.tech', 'Lab Assistant (5 years), Former Lecturar (2 years)', 'CE', '2017-07-12', '2017-12-07 03:06:59'),
(1499798148, 1499798149, 'Kundan Singh', 'Bandal,Hooghly,West Bengal,India,799652', '1984-02-06', '8942156854', 'B.tech, M.tech', 'Assistant Proffessor', 'CE', '2017-07-12', '2017-12-07 03:16:43'),
(1499798240, 1499798241, 'Gourav Mondal', 'Howrah,Howrah,West Bengal,India,700007', '1985-07-12', '8945123655', 'B.tech', 'Assistant Proffessor (5 years)', 'CE', '2017-07-12', '2017-12-07 03:04:59'),
(1499798315, 1499798316, 'Goutam Kumbhakar', 'Asansol,Burdwan,West Bengal,India,788125', '1984-07-12', '9865321456', 'Diploma', 'Lab Assistant', 'CE', '2017-07-12', '2017-12-07 03:07:43'),
(1499798407, 1499798408, 'Kaushiki Dutta', 'Howrah,Howrah,West Bengal,India,700007', '1985-07-12', '8645123654', 'B.tech, M.tech', 'Assistant Proffessor', 'CE', '2017-07-12', '2017-12-07 03:12:57'),
(1499798471, 1499798472, 'Jit Shit', 'Howrah,Howrah,West Bengal,India,788123', '1985-07-12', '8945126354', 'B.tech, M.tech, Phd', 'Assistant Proffessor (11 years)', 'CE', '2017-07-12', '2017-12-07 03:08:30'),
(1499798556, 1499798557, 'Jitlal Singha', 'Bankura,Bankura,West Bengal,India,722101', '1985-06-02', '8942165123', 'B.tech, M.tech', 'Associate Proffessor', 'CE', '2017-07-12', '2017-12-07 03:10:25'),
(1499836428, 1499836429, 'Anamika Dey', 'Saltlake,Howrah,West Bengal,India,700007', '1985-01-09', '9732158654', 'Diploma, B.tech', 'Assistant Proffessor (3 years)', 'IT', '2017-07-12', '2017-12-07 01:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `take_id` int(11) NOT NULL,
  `theory_marks` int(3) NOT NULL,
  `practical_marks` int(3) NOT NULL,
  `total_marks` int(3) NOT NULL,
  `pass_fail` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`take_id`, `theory_marks`, `practical_marks`, `total_marks`, `pass_fail`) VALUES
(235, 35, 20, 55, 'P'),
(236, 40, 25, 65, 'P'),
(237, 45, 25, 70, 'P'),
(238, 55, 25, 80, 'P'),
(239, 50, 20, 70, 'P'),
(245, 70, 20, 90, 'P'),
(255, 50, 25, 75, 'P'),
(261, 60, 20, 80, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_no` varchar(12) NOT NULL,
  `roll_no` varchar(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sem` int(1) NOT NULL,
  `department` varchar(255) NOT NULL,
  `reg_date` varchar(12) NOT NULL,
  `last_log_in` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `roll_no`, `user_id`, `name`, `address`, `phone_no`, `date_of_birth`, `sem`, `department`, `reg_date`, `last_log_in`) VALUES
('14101010001', '14101104001', 1499770305, 'Koushik Karmakar', 'Jalpaiguri,Jalpaiguri,West Bengal,India,735102', '8670463443', '1997-07-11', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010002', '14101104002', 1499770552, 'Soumik Das', 'Siliguri,Siliguri,West Bengal,India,742102', '7477375027', '1995-07-10', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010003', '14101104003', 1499770752, 'Akash Mandal', 'Durgapur,Durgapur,West Bengal,India,755102', '9002145502', '1995-03-12', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010004', '14101104004', 1499770901, 'Tuhin Mitra', 'Kolkata,kolkata,West Bengal,India,744122', '9732651202', '1995-03-10', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010005', '14101104005', 1499771072, 'Surojit Shaw', 'Durgapur,Durgapur,West Bengal,India,755102', '7586099495', '1995-09-12', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('141010100052', '14101104052', 1499785768, 'Dolon Rai', 'Bankura,Bankura,West Bengal,India,722107', '8535126525', '1995-10-10', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010006', '14101104006', 1499771230, 'Souvik Mandal', 'Bankura,Bankura,West Bengal,India,722133', '8513919114', '1995-12-12', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010008', '14101104008', 1499771652, 'Aniket Patra', 'Bankura,Bankura,West Bengal,India,722136', '8116232754', '1995-01-01', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010009', '14101104009', 1499771802, 'Kundan Singh', 'Howrah,Howrah,West Bengal,India,700005', '8116642203', '1995-02-11', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010010', '14101104010', 1499771933, 'Rahul Panday', 'Howrah,Howrah,West Bengal,India,702014', '8013320216', '1995-07-11', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010011', '14101104011', 1499772151, 'Biswanath Mandal', 'Bankura,Bankura,West Bengal,India,702132', '8158817933', '1995-07-03', 5, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010012', '14101104012', 1499772395, 'Anik Ghosh', 'Durgapur,Durgapur,West Bengal,India,700212', '7980145254', '2017-03-10', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010013', '14101104013', 1499778793, 'Sraboni Patra', 'Chhatna,Bankura,West Bengal,India,722132', '9564156130', '1997-07-11', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010014', '14101104014', 1499778975, 'Somprity Ganguly', 'Kuchbihar,kuchbihar,West Bengal,India,733022', '8670508132', '1995-08-12', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010015', '14101104015', 1499779152, 'Suesmita Dutta', 'Raniganj,Asansole,West Bengal,India,700213', '8012352150', '1995-11-11', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010016', '14101104016', 1499779346, 'Suesmita Sarkar', 'Siliguri,Siliguri,West Bengal,India,766125', '9832521542', '1995-05-12', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010017', '14101104017', 1499779553, 'Riyanka Kundu', 'Siliguri,Siliguri,West Bengal,India,733625', '7063882341', '1995-07-11', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010019', '14101104019', 1499780103, 'Amir Sohel', 'Bandal,Hoogly,West Bengal,India,700122', '8759432053', '1995-07-12', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010020', '14101104020', 1499780313, 'Aniket Dutta', 'Durgapur,Durgapur,West Bengal,India,711111', '7585811170', '1995-03-12', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010021', '14101104021', 1499780719, 'Anurag Barman', 'Saltlake,Howrah,West Bengal,India,700215', '7890574459', '1995-03-11', 4, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010022', '14101104022', 1499780928, 'Mainak Maity', 'Naihati,Hoogly,West Bengal,India,722221', '8512905564', '1995-01-11', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010023', '14101104023', 1499781120, 'Pronoy Sarkar', 'Parkstreet,kolkata,West Bengal,India,711110', '7872305126', '1995-09-12', 2, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010024', '14101104024', 1499781317, 'Sourav Singh', 'Borjora,Durgapur,West Bengal,India,722032', '7098944901', '1995-02-25', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010025', '14101104025', 1499781737, 'Subham Mandal', 'Chhatna,Bankura,West Bengal,India,722132', '8942904986', '1995-04-11', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010026', '14101104026', 1499781974, 'Sandeep Mandal', 'Jalpaiguri,Jalpaiguri,West Bengal,India,735102', '7063097833', '1994-06-12', 2, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010027', '14101104027', 1499782180, 'Paban Singha', 'Bankura,Bankura,West Bengal,India,722132', '9732319300', '1994-08-26', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010028', '14101104028', 1499782507, 'Shoham Dey', 'Durgapur,Durgapur,West Bengal,India,722155', '7063717190', '1995-02-13', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010029', '14101104029', 1499782653, 'Atanu Chatterjee', 'Durgapur,Durgapur,West Bengal,India,725132', '7063717190', '1996-09-15', 4, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010030', '14101104030', 1499782926, 'Ramiz Raja', 'Durgapur,Durgapur,West Bengal,India,785214', '7501630852', '1995-07-11', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010031', '14101104031', 1499783038, 'Abhishek Dutta', 'Howrah,Howrah,West Bengal,India,711110', '7699646573', '1995-05-11', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010032', '14101104032', 1499783197, 'Suman Karmakar', 'Bisnupur,Bankura,West Bengal,India,722564', '9932165254', '1995-06-02', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010033', '14101104033', 1499783304, 'Ayan Mukharjee', 'Ramsagar,Bankura,West Bengal,India,722164', '8535834352', '1995-02-05', 4, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010034', '14101104034', 1499783414, 'Sourav Bauri', 'Bisnupur,Bankura,West Bengal,India,755212', '8535023123', '1995-07-11', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010035', '14101104035', 1499783530, 'Nil Banerjee', 'Shibpur,Howrah,West Bengal,India,700001', '7063125465', '1995-04-02', 2, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010036', '14101104036', 1499783648, 'Kinnar Mandal', 'Asansole,Burdwan,West Bengal,India,799521', '9635214565', '1996-05-06', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010037', '14101104037', 1499784062, 'Bapi Sen', 'Bisnupur,Bankura,West Bengal,India,755465', '9932425125', '1995-07-11', 4, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010038', '14101104038', 1499784144, 'Bapi Mandal', 'Bankura,Bankura,West Bengal,India,722132', '9832123456', '1995-07-11', 4, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010039', '14101104039', 1499784252, 'Madhuja Chatterjee', 'Durgapur,Durgapur,West Bengal,India,722152', '9635156425', '1995-08-06', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010040', '14101104040', 1499784359, 'Annesha Chatterjee', 'Rampurhat,Rampurhat,West Bengal,India,700252', '8535125465', '1995-11-11', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010041', '14101104041', 1499784474, 'Bibek Dey', 'Durgapur,Durgapur,West Bengal,India,755215', '9002165265', '1995-08-02', 4, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010044', '14101104044', 1499784777, 'Deb Khaitan', 'Bisnupur,Bankura,West Bengal,India,756254', '9802136154', '1995-04-02', 5, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010045', '14101104045', 1499784889, 'Tamojit Basak ', 'Saltlake,Howrah,West Bengal,India,700001', '9002136548', '1995-07-11', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010046', '14101104046', 1499784991, 'Bittu Das', 'Howrah,Howrah,West Bengal,India,795632', '8012653459', '1995-09-05', 5, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010047', '14101104047', 1499785135, 'Bikas Chatterjee', 'Durgapur,Durgapur,West Bengal,India,755154', '8942165425', '1996-07-11', 5, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010048', '14101104048', 1499785283, 'Raja Mukherjee', 'Barasat,Kolkata,West Bengal,India,720166', '9002154875', '1994-07-11', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010049', '14101104049', 1499785368, 'Rajesh Chatterjee', 'Bankura,Bankura,West Bengal,India,722132', '9732165498', '1995-04-02', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010050', '14101104050', 1499785461, 'Proloy Chatterjee', 'Bankura,Bankura,West Bengal,India,722105', '8900652545', '1995-04-04', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010051', '14101104051', 1499785637, 'Moloy Chatterjee', 'Borjora,Durgapur,West Bengal,India,722106', '9002165125', '1995-04-06', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010053', '14101104053', 1499785860, 'Sathi Mukherjee', 'Durgapur,Durgapur,West Bengal,India,789654', '9563125654', '1995-05-03', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010054', '14101104054', 1499785970, 'Dona Mandal', 'Shibpur,Howrah,West Bengal,India,789654', '8942165125', '1996-07-11', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010055', '14101104055', 1499786064, 'Papai Dey', 'Jalpaiguri,Jalpaiguri,West Bengal,India,735103', '7565156425', '1994-02-05', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010056', '14101104056', 1499786163, 'Sumona Dutta', 'Bankura,Bankura,West Bengal,India,722144', '8001091634', '1994-11-12', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010057', '14101105057', 1499786277, 'Mitu Das', 'Asansole,Burdwan,West Bengal,India,755425', '8001032015', '1994-07-11', 7, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010058', '14101104058', 1499786375, 'Madhu das', 'Chhatna,Bankura,West Bengal,India,722135', '9732156321', '1995-07-11', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010059', '14101104059', 1499786496, 'Tapas Ghosal', 'Durgapur,Durgapur,West Bengal,India,725154', '9563265154', '1995-07-11', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010060', '14101104060', 1499786618, 'Somor Das', 'Howrah,Howrah,West Bengal,India,700007', '8945125465', '1995-05-06', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010061', '14101104061', 1499786733, 'Anchal Mishra', 'Lilua,Howrah,West Bengal,India,711117', '9932148756', '1995-07-02', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010062', '14101104062', 1499786863, 'Bibha Lakra ', 'Saltlake,Howrah,West Bengal,India,785456', '9002156458', '1995-05-03', 5, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010063', '14101104063', 1499787023, 'Shubo Dey', 'Howrah,Howrah,West Bengal,India,722215', '8535465125', '1995-07-11', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010064', '14101104064', 1499787129, 'Arpita Mandal', 'Bandal,Hoogly,West Bengal,India,712365', '8001236954', '1995-07-11', 4, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010065', '14101104065', 1499787250, 'Anu Das', 'Bankura,Bankura,West Bengal,India,722135', '9800028036', '1995-07-11', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010066', '14101104066', 1499787372, 'Bidisha Ghosal', 'Asansole,Burdwan,West Bengal,India,755425', '7563159465', '1995-11-15', 5, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010067', '14101104067', 1499787490, 'Debu Rai', 'Raniganj,Burdwan,West Bengal,India,789654', '9732315648', '1995-07-11', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010068', '14101104068', 1499787674, 'Bibhas Mandal', 'Howrah,Howrah,West Bengal,India,755421', '9002135245', '1998-07-11', 5, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010069', '14101104069', 1499787767, 'Santu Mukharjee', 'Mednapur,Mednapur,West Bengal,India,721102', '9002156954', '1995-07-11', 2, 'CSE', '2017', '0000-00-00 00:00:00'),
('1410101007', '1410110400', 1499771415, 'Shivam Kumar Dubay', 'Howrah,Howrah,West Bengal,India,700003', '8679521251', '1996-07-11', 8, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101010070', '14101104070', 1499787843, 'Subhas Ghosal', 'Bankura,Bankura,West Bengal,India,722132', '9932154789', '1995-07-11', 6, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101104042', '14101104043', 1499784669, 'Anisha Sarkar', 'Bankura,Bankura,West Bengal,India,722139', '8001123654', '1996-07-11', 3, 'CSE', '2017', '0000-00-00 00:00:00'),
('14101104043', '14101104042', 1499784547, 'Apu Das', 'Bankura,Bankura,West Bengal,India,722132', '8942156458', '1995-07-12', 4, 'CSE', '2017', '0000-00-00 00:00:00'),
('1510101000', '15101103003', 1499788362, 'Laltu Singha', 'Bankura,Bankura,West Bengal,India,722132', '8145035095', '1995-10-26', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010002', '15101103002', 1499788263, 'Rajib Kundu', 'Kolkata,Kolkata,West Bengal,India,700001', '9732319352', '1995-12-01', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010005', '15101103005', 1499788574, 'Mahindra Singha', 'Bankura,Bankura,West Bengal,India,722132', '8145959658', '1996-12-26', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010006', '15101103006', 1499788717, 'Jitlal Singha', 'Asansole,Burdwan,West Bengal,India,722132', '9732526325', '1996-01-05', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010007', '15101103017', 1499788856, 'Sumitra Mukherjee', 'Jharkhand,Jharkhand,Dhabad,India,723625', '9865859652', '1997-02-12', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010008', '15101103008', 1499788932, 'Kalidas Deoghuria', 'Bankura,Bankura,West Bengal,India,722132', '9874859652', '1996-12-20', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010009', '15101103009', 1499789005, 'Mandira Chatterjee', 'Bankura,Bankura,West Bengal,India,722139', '7845128525', '1996-12-23', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010010', '15101103010', 1499789195, 'Puja Banerjee', 'Bankura,Bankura,West Bengal,India,722132', '9765326325', '1995-12-01', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010011', '15101103001', 1499787997, 'Saikat Singha', 'Jhargam@gmail.com,Mednapur,West Bengal,India,754512', '9732165125', '1997-01-03', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010012', '15101104001', 1499767593, 'Arpita Ghosal', 'Bankura,Bankura,West Bengal,India,722132', '8001091635', '1997-07-03', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010013', '15101104002', 1499767953, 'Paromita Patra', 'Kolkata,Howrah,West Bengal,India,700001', '8017632154', '1997-09-30', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010014', '15101104020', 1499768134, 'Snigdha Mandal', 'Bankura,Bankura,West Bengal,India,722132', '9614506204', '1996-10-11', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010015', '15101104021', 1499768432, 'Sraboni Mandal', 'Bankura,Bankura,West Bengal,India,722135', '8967954885', '1997-07-22', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010016', '15101104040', 1499768672, 'Ananya Ghorai', 'Mednapur,Mednapur,West Bengal,India,721101', '7699776021', '1997-07-23', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010017', '15101104014', 1499768904, 'Sruti Rai', 'Howrah,Howrah,West Bengal,India,700002', '7686985180', '1997-10-08', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010019', '15101104027', 1499769244, 'Swarnakamal Chatterjee', 'kolkata,kolkata,wesebangal,India,721020', '9002169356', '1997-07-11', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010020', '15101104087', 1499769386, 'Debleena Das', 'howrah,howrah,West Bengal,India,720014', '9851645215', '1997-07-15', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010021', '15101104089', 1499769629, 'Anushree Sarker', 'Bankura,Bankura,West Bengal,India,722132', '8900604801', '1997-09-11', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010024', '15101106002', 1499792339, 'Jit Shit', 'Howrah,Howrah,West Bengal,India,722165', '9785965896', '1996-01-05', 6, 'IT', '2017', '0000-00-00 00:00:00'),
('15101010025', '15101106003', 1499792423, 'Santosh Chatterjee', 'Birbhum,Burdwan,West Bengal,India,722185', '9785965896', '2017-07-11', 8, 'IT', '2017', '0000-00-00 00:00:00'),
('15101010026', '15101106004', 1499792536, 'Arpita Singha', 'Bankura,Bankura,West Bengal,India,722132', '8001036541', '1997-07-03', 3, 'IT', '2017', '0000-00-00 00:00:00'),
('15101010027', '15101106005', 1499792690, 'Mamoni Rai', 'Durgapur,Durgapur ,West Bengal,India,755425', '9732156498', '1997-07-11', 3, 'IT', '2017', '0000-00-00 00:00:00'),
('15101010029', '15101106006', 1499792842, 'Mandira Shit', 'Bankura,Bankura,West Bengal,India,722132', '9732525263', '1996-01-05', 3, 'IT', '2017', '0000-00-00 00:00:00'),
('15101010030', '15101106007', 1499792900, 'Gourab Modnal', 'Burdwan ,Burdwan,West Bengal,India,722158', '9785965896', '1997-12-12', 6, 'IT', '2017', '0000-00-00 00:00:00'),
('15101010031', '15101106008', 1499792979, 'Arati Chattrjee', 'Bankura,Bankura,West Bengal,India,722132', '9785965896', '1996-07-11', 4, 'IT', '2017', '0000-00-00 00:00:00'),
('15101010032', '15101106009', 1499793036, 'Rakesh Mukherjee', 'Burdwan ,Burdwan,West Bengal,India,722185', '8745859658', '1997-01-12', 3, 'IT', '2017', '0000-00-00 00:00:00'),
('15101010033', '15101106010', 1499793109, 'Pintu Ghosal', 'Bankura,Bankura,West Bengal,India,722132', '9785965896', '1996-01-05', 3, 'IT', '2017', '0000-00-00 00:00:00'),
('15101010041', '15101103004', 1499788473, 'Munna Singha', 'Bankura,Bankura,West Bengal,India,722132', '8145035096', '1996-11-26', 3, 'CE', '2017', '0000-00-00 00:00:00'),
('15101010051', '15101105001', 1499790222, 'Shibani Sardar', 'Bankura,Bankura,West Bengal,India,722132', '9874859658', '1996-12-02', 3, 'ECE', '2017', '0000-00-00 00:00:00'),
('15101010088', '15101104035', 1499769105, 'Sampa Sarkar', 'Durgapur,Durgapur,West Bengal,India,700132', '9932455401', '1997-09-23', 1, 'CSE', '2017', '0000-00-00 00:00:00'),
('15101010091', '15101102003', 1499789498, 'Shibram Chatterjee', 'Bankura,Bankura,West Bengal,India,722132', '9865326598', '1996-01-10', 3, 'EE', '2017', '0000-00-00 00:00:00'),
('1510101060', '15101104006', 1499789719, 'Nilima Mukherjee', 'Kolkata,kolkata,West Bengal,India,700001', '9874859658', '1997-12-06', 3, 'EE', '2017', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(10) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `sub_name` varchar(80) NOT NULL,
  `th_marks` int(3) NOT NULL,
  `pr_marks` int(3) NOT NULL,
  `total_marks` int(3) NOT NULL,
  `sem` int(1) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_code`, `sub_name`, `th_marks`, `pr_marks`, `total_marks`, `sem`, `department`) VALUES
(1, 'AM1201', 'Machanics', 70, 30, 100, 1, 'CSE'),
(2, 'AM1251', 'Drawing Practice', 70, 30, 100, 2, 'CSE'),
(3, 'CE1201', 'Environment and Ecology', 70, 30, 100, 2, 'CSE'),
(4, 'CH1201', 'Chemistry', 70, 30, 100, 1, 'CSE'),
(5, 'CH1251', 'Chemistry Lab', 70, 30, 100, 1, 'CSE'),
(6, 'CS1201', 'Int.to comp. and prog.', 70, 30, 100, 2, 'CSE'),
(7, 'CS1251', 'Computing Practice Lab', 70, 30, 100, 2, 'CSE'),
(8, 'CS301', 'Digital Logic', 70, 30, 100, 3, 'CSE'),
(9, 'CS302', 'Data Structure and Algorithm', 70, 30, 100, 3, 'CSE'),
(10, 'CS303', 'Discrete Structure', 70, 30, 100, 3, 'CSE'),
(11, 'CS351', 'Digital Logic Laboratory', 70, 30, 100, 3, 'CSE'),
(12, 'CS352', 'Algorithm-I Laboratory', 70, 30, 100, 3, 'CSE'),
(13, 'CS371', 'Mini Project-I', 70, 30, 100, 3, 'CSE'),
(14, 'CS401', 'Design and Analysis of Algorithm', 70, 30, 100, 4, 'CSE'),
(15, 'CS402', 'Computer and Analysis of Algorithm', 70, 30, 100, 4, 'CSE'),
(16, 'CS403', 'Programming Paradigms', 70, 30, 100, 4, 'CSE'),
(17, 'CS404', 'Theory of computation', 70, 30, 100, 4, 'CSE'),
(18, 'CS451', 'Algorithm-II Laboratory', 70, 30, 100, 4, 'CSE'),
(19, 'CS452', 'Computer Architecture and Org.Lab.', 70, 30, 100, 4, 'CSE'),
(20, 'CS453', 'Programming Paradigms Labratory', 70, 30, 100, 4, 'CSE'),
(21, 'CS471', 'Mini Project-II', 70, 30, 100, 4, 'CSE'),
(22, 'CS501', 'Database Management System', 70, 30, 100, 5, 'CSE'),
(23, 'CS502', 'Computer Architecture and Organization-II', 70, 30, 100, 5, 'CSE'),
(24, 'CS503', 'Operating System', 70, 30, 100, 5, 'CSE'),
(25, 'CS504/x', 'Elective-I:\r\nComputer Graphics(CS501/1)\r\nGraph Algorithms(CS504/2)', 70, 30, 100, 5, 'CSE'),
(26, 'CS551', 'DBMS Lab', 70, 30, 100, 5, 'CSE'),
(27, 'CS553', 'Operating System Laboratory', 70, 30, 100, 5, 'CSE'),
(28, 'CS554/x', 'Elective-I Laboratory', 70, 30, 100, 5, 'CSE'),
(29, 'CS601', 'Microprocessor Based System', 70, 30, 100, 6, 'CSE'),
(30, 'CS602', 'Computer Networks', 70, 30, 100, 6, 'CSE'),
(31, 'CS603/x', 'Elective-II:\r\nCAD for VLSICS603/1)\r\nIntroduction to Data mining(CS603/2)', 70, 30, 100, 6, 'CSE'),
(32, 'CS611', 'Simulation and Modeling', 70, 30, 100, 6, 'CSE'),
(33, 'CS651', 'Microprocessor Laboratory', 70, 30, 100, 6, 'CSE'),
(34, 'CS652', 'Computer Networks Lab', 70, 30, 100, 6, 'CSE'),
(35, 'CS653/x', 'Elective-II Lab:\r\nCAD for VLSI Lab(653/1)\r\nData Mining Lab(653/2)', 70, 30, 100, 6, 'CSE'),
(36, 'CS671', 'Comprehensive Viva-voce', 70, 30, 100, 6, 'CSE'),
(37, 'CS701', 'Software Engineering', 70, 30, 100, 7, 'CSE'),
(38, 'CS702', 'Information and coding Theory', 70, 30, 100, 7, 'CSE'),
(39, 'CS703/x', 'Elective-I(Dept)', 70, 30, 100, 7, 'CSE'),
(40, 'CS704/x', 'Elective-II', 70, 30, 100, 7, 'CSE'),
(41, 'CS751', 'Software Engineering Lab', 70, 30, 100, 7, 'CSE'),
(42, 'CS753/x', 'Elective-I Lab(Dept)', 70, 30, 100, 7, 'CSE'),
(43, 'CS761', 'Group Discussion/Seminar', 70, 30, 100, 7, 'CSE'),
(44, 'CS771', 'Project Term Paper', 70, 30, 100, 7, 'CSE'),
(45, 'CS801', 'Artificial Intelligence ', 70, 30, 100, 8, 'CSE'),
(46, 'CS802/x', 'Elective-III(Dept)', 70, 30, 100, 8, 'CSE'),
(47, 'CS803/x', 'ELECTIVE-iV(Open)', 70, 30, 100, 8, 'CSE'),
(48, 'CS851', 'Artificial Intelligence Laboratory', 70, 30, 100, 8, 'CSE'),
(49, 'CS852/x', 'Elective-III Lab(Dept)', 70, 30, 100, 8, 'CSE'),
(50, 'CS871', 'Project', 70, 30, 100, 8, 'CSE'),
(51, 'CS872', 'Grand Viva-II', 70, 30, 100, 8, 'CSE'),
(52, 'EE1201', 'Basic Electrical Eng.', 70, 30, 100, 2, 'CSE'),
(53, 'EE1251', 'Basic Electrical Eng.Lab', 70, 30, 100, 2, 'CSE'),
(54, 'EE304', 'Electrical Machanics', 70, 30, 100, 3, 'CSE'),
(55, 'EE354', 'Electrical Machines Lab', 70, 30, 100, 3, 'CSE'),
(56, 'ET1201', 'Basic Electronics Eng', 70, 30, 100, 1, 'CSE'),
(57, 'ET1251', 'Basic Electronics Eng. Lab', 70, 30, 100, 1, 'CSE'),
(58, 'HU1201', 'Prof.comm.In English', 70, 30, 100, 1, 'CSE'),
(59, 'HU3401', 'Intr.To Mgnt and Industrial Sociology', 70, 30, 100, 4, 'CSE'),
(60, 'HU5601', 'HUM-III', 70, 30, 100, 6, 'CSE'),
(61, 'HU7801', 'Accounting and Financial Management(HUM-IV)', 70, 30, 100, 8, 'CSE'),
(62, 'MA101', 'Mathematics-I', 70, 30, 100, 1, 'CSE'),
(63, 'MA102', 'Mathematics-II', 70, 30, 100, 2, 'CSE'),
(64, 'MA301', 'Mathematics-3', 70, 30, 100, 3, 'CSE'),
(65, 'PH1201', 'Physics', 70, 30, 100, 2, 'CSE'),
(66, 'PH1251', 'Physics Lab', 70, 30, 100, 2, 'CSE'),
(67, 'WS1251', 'Workshop Practice', 70, 30, 100, 1, 'CSE'),
(69, 'MA301', 'Mathematics III ', 70, 30, 100, 3, 'IT'),
(71, 'IT302', 'Digital Logic and Circuit Design ', 70, 30, 100, 3, 'IT'),
(72, 'AM303/1', 'Hydraulics', 70, 30, 100, 3, 'CE'),
(73, 'AM304/1', 'Solid Mechanics', 70, 30, 100, 3, 'CE'),
(74, 'CE302', 'Surveying', 70, 30, 100, 3, 'CE'),
(75, 'AM353/1', 'Hydraulics Lab', 70, 30, 100, 3, 'CE'),
(76, 'AM354/1', 'Solid Mechanics Lab', 70, 30, 100, 3, 'CE'),
(77, 'IT301', 'Programming and Data Structure', 70, 30, 100, 3, 'IT'),
(78, 'CE351', 'Project on Building Planning', 70, 30, 100, 3, 'CE'),
(79, 'CE401', 'Engineering Geology', 70, 30, 100, 4, 'CE'),
(80, 'IT303', 'Discrete Mathematics and Graph theory ', 70, 30, 100, 3, 'IT'),
(81, 'IT304 ', 'Signals, System and Circuits ', 70, 30, 100, 3, 'IT'),
(82, 'IT351', 'Programming and Data structure lab  ', 70, 30, 100, 3, 'IT'),
(83, 'IT352 ', 'Digital Logic and Circuit Design Lab ', 70, 30, 100, 3, 'IT'),
(84, 'HU3401', 'Intro. to Mgmt. and Industrial Sociology', 70, 30, 100, 4, 'IT'),
(85, 'CE401', 'Structural Analysis-1', 70, 30, 100, 4, 'CE'),
(86, 'CE402', 'Civil Engineering Material', 70, 30, 100, 4, 'CE'),
(87, 'CE403', 'Geotechnical Engineering-1', 70, 30, 100, 4, 'CE'),
(88, 'IT403', 'Computer Graphics', 70, 30, 100, 4, 'IT'),
(89, 'CE404', 'Water Resource Engineering-1', 70, 30, 100, 4, 'CE'),
(90, 'IT404', 'Formal Language and Automata', 70, 30, 100, 4, 'IT'),
(91, 'CE451', 'Surveying Lab', 70, 30, 100, 4, 'CE'),
(92, 'IT401', 'Computer Organisation and Architecture', 70, 30, 100, 4, 'IT'),
(93, 'CE452', 'Estimation and Valuation Practice', 70, 30, 100, 4, 'CE'),
(94, 'IT402', 'Communication Systems ', 70, 30, 100, 4, 'IT'),
(95, 'CE453', 'Civil Engineering Material Lab', 70, 30, 100, 4, 'CE'),
(96, 'IT 453', 'Computer Graphics Lab', 70, 30, 100, 4, 'IT'),
(97, 'CE471', 'General Civil Engineering Problem', 70, 30, 100, 4, 'CE'),
(98, 'IT451', 'Computer Org. and Architecture Lab ', 70, 30, 100, 4, 'IT'),
(99, 'IT452', 'Signal system and communication lab', 70, 30, 100, 4, 'IT'),
(100, 'IT455', 'Modelling and Simulation Lab', 70, 30, 100, 4, 'IT'),
(101, 'HU5601', 'Economics', 70, 30, 100, 5, 'CE'),
(102, 'CE501', 'Structural Analysis-2', 70, 30, 100, 5, 'CE'),
(103, 'IT501', 'Microprocessors                  ', 70, 30, 100, 5, 'IT'),
(104, 'CE502', 'Design of Reinforced Concrete Structures', 70, 30, 100, 5, 'CE'),
(105, 'IT502', 'Operating Systems ', 70, 30, 100, 5, 'IT'),
(106, 'CE503', 'Environmental Engineering-1', 70, 30, 100, 5, 'CE'),
(107, 'IT503', 'Database Management Systems ', 70, 30, 100, 5, 'IT'),
(108, 'CE531/1', 'Introduction to GIS', 70, 30, 100, 5, 'CE'),
(109, 'CE531/2', 'Disaster Mitigation', 70, 30, 100, 5, 'CE'),
(110, 'IT521/X', 'Object oriented programming', 70, 30, 100, 5, 'IT'),
(111, 'CE531/3', 'Uncertainity Quantification in Engineering', 70, 30, 100, 5, 'CE'),
(112, 'CE531/4', 'Climate Change Impact Analysis', 70, 30, 100, 5, 'CE'),
(113, 'CE551', 'Reinforced Concrete Structure Project', 70, 30, 100, 5, 'CE'),
(114, 'IT531/X', 'Multimedia Systems ', 70, 30, 100, 5, 'IT'),
(115, 'CE552', 'Geotechnical Engineering Lab', 70, 30, 100, 5, 'CE'),
(116, 'IT551', 'Microprocessor lab', 70, 30, 100, 5, 'IT'),
(117, 'CE553', 'Water Resource Engineering Lab', 70, 30, 100, 5, 'CE'),
(118, 'IT552', 'Operating Systems Lab ', 70, 30, 100, 5, 'IT'),
(119, 'IT553', 'Database Management Systems lab', 70, 30, 100, 5, 'IT'),
(120, 'MA301', 'Mathematics-III', 70, 30, 100, 3, 'ME'),
(121, 'ME301', 'Fundamentals of thermodynamics', 70, 30, 100, 3, 'ME'),
(122, 'AM302', 'Rigid Body Dynamics', 70, 30, 100, 3, 'ME'),
(123, 'IT571', 'Mini Project-1', 70, 30, 100, 5, 'IT'),
(124, 'AM304', 'Strength of Materials', 70, 30, 100, 3, 'ME'),
(125, 'ME351', 'Thermodynamics Lab', 70, 30, 100, 3, 'ME'),
(126, 'AM351', 'Machine Drawing', 70, 30, 100, 3, 'ME'),
(127, 'AM354', 'Strength of Materials Lab', 70, 30, 100, 3, 'ME'),
(128, 'MA101', 'Mathematics-I', 70, 30, 100, 1, 'ECE'),
(129, 'ME371', 'Mini Project-1', 70, 30, 100, 3, 'ME'),
(130, 'CH1201', 'Chemistry', 70, 30, 100, 1, 'ECE'),
(131, ' MA 301', 'Mathematics III', 70, 30, 100, 3, 'EE'),
(132, ' AM304/2', 'Strength of Materials and Theory of Machines ', 70, 30, 100, 3, 'EE'),
(133, 'HU1201', 'Prof.Comm.In English', 70, 30, 100, 1, 'ECE'),
(134, 'AM403', 'Fluid Mechanics', 70, 30, 100, 4, 'ME'),
(135, 'ME401', 'Basics of Machine Design', 70, 30, 100, 4, 'ME'),
(136, 'ET1201', 'Basic Electronics Eng.', 70, 30, 100, 1, 'ECE'),
(137, 'EE301', 'Electrical Machines -I ', 70, 30, 100, 3, 'EE'),
(138, 'ME402', 'Applied Thermodynamics', 70, 30, 100, 4, 'ME'),
(139, 'AM1201', 'Mechanics', 70, 30, 100, 1, 'ECE'),
(140, 'EE302', 'Electrical and Electronic Measurements ', 70, 30, 100, 3, 'EE'),
(141, 'ME403', 'Engineering Materials and Processes', 70, 30, 100, 4, 'ME'),
(142, 'CH1251', 'Chemistry Lab', 70, 30, 100, 1, 'ECE'),
(143, 'EE303', 'Field and Circuit Theory ', 70, 30, 100, 3, 'EE'),
(144, 'ME404', 'Mechanical Measurement and Control Engineering', 70, 30, 100, 4, 'ME'),
(145, 'AM453', 'Fluid Mechanics Lab', 70, 30, 100, 4, 'ME'),
(146, 'EE351', 'Electrical Machines Lab â€“I ', 70, 30, 100, 3, 'EE'),
(147, 'ET1251', 'Basic Electronics Eng.Lab', 70, 30, 100, 1, 'ECE'),
(148, 'ME451', 'Applied Thermodynamics Lab', 70, 30, 100, 4, 'ME'),
(149, 'WS1251', 'Workshop Practice', 70, 30, 100, 1, 'ECE'),
(150, 'ME454', 'Mechanical Measurement Lab', 70, 30, 100, 4, 'ME'),
(151, 'MA102', 'Mathematics-II', 70, 30, 100, 2, 'ECE'),
(152, 'ME471', 'Mini Project-2', 70, 30, 100, 4, 'ME'),
(153, 'PH1201', 'Physics', 70, 30, 100, 2, 'ECE'),
(154, 'ME371', 'Mini Project-1', 70, 30, 100, 3, 'ECE'),
(155, 'HU5601', 'Economics', 70, 30, 100, 5, 'ME'),
(156, 'CS1201', 'Int.to comp. and Prog.', 70, 30, 100, 2, 'ECE'),
(157, 'EE351', 'Electrical Machines Labâ€“1', 70, 30, 100, 3, 'EE'),
(158, 'ME501', 'Kinematics of Mechanisms', 70, 30, 100, 5, 'ME'),
(159, 'EE352', 'Electrical and Electronics Measurement Lab ', 70, 30, 100, 3, 'EE'),
(160, 'ME502', 'Heat Transfer', 70, 30, 100, 5, 'ME'),
(161, 'EE353', 'Electrical Circuits Lab ', 70, 30, 100, 3, 'EE'),
(162, 'ME503', 'Machine Tools and Metal Cutting', 70, 30, 100, 5, 'ME'),
(163, 'ME531/1', 'Solar Energy and its application', 70, 30, 100, 5, 'ME'),
(164, 'EE1201', 'Basic Electrical Eng.', 70, 30, 100, 2, 'ECE'),
(166, 'ME531/2', 'Composite Materials', 70, 30, 100, 5, 'ME'),
(167, 'EE401', 'Electricl Machine II', 70, 30, 100, 4, 'EE'),
(168, 'ME531/3', 'Industrial Management', 70, 30, 100, 5, 'ME'),
(169, 'PH1251', 'Physics Lab', 70, 30, 100, 2, 'ECE'),
(170, 'ME551', 'Basics of Machine Design Sessional', 70, 30, 100, 5, 'ME'),
(171, 'ME552', 'Heat Transfer Lab', 70, 30, 100, 5, 'ME'),
(172, 'AM1251', 'Drawing Practice', 70, 30, 100, 2, 'ECE'),
(173, 'ME553', 'Machine Tools and Metal Cutting Lab', 70, 30, 100, 5, 'ME'),
(174, 'CS1251', 'Computing Practice Lab', 70, 30, 100, 2, 'ECE'),
(175, 'HU3401', 'Introduction to Management and Industrial Sociology', 70, 30, 100, 3, 'ME'),
(176, 'MA301', 'Mathematics-III', 70, 30, 100, 3, 'ECE'),
(177, 'ET301', 'Network Theory', 70, 30, 100, 3, 'ECE'),
(178, 'ET302', 'Analog Electronics', 70, 30, 100, 3, 'ECE'),
(179, 'ET303', 'Electronic Devices', 70, 30, 100, 3, 'ECE'),
(180, 'ET304', 'Signal and Systems', 70, 30, 100, 3, 'ECE'),
(181, 'ET351', 'Network Theory Lab', 70, 30, 100, 3, 'ECE'),
(182, 'ET352', 'Analog Electronics Lab', 70, 30, 100, 3, 'ECE'),
(183, 'ET353', 'Electronic Devices Lab', 70, 30, 100, 3, 'ECE'),
(184, 'HU3401', 'Intro.To Mgmt and Industrial Sociology', 70, 30, 100, 4, 'ECE'),
(185, 'ET401', 'Principles of Analog and Digital Communications', 70, 30, 100, 4, 'ECE'),
(186, 'ET402', 'Digital Electronics', 70, 30, 100, 4, 'ECE'),
(187, 'ET403', 'Microelectronics', 70, 30, 100, 4, 'ECE'),
(188, 'ET404', 'Electromagnetic Theory and Transmission Lines', 70, 30, 100, 4, 'ECE'),
(189, 'ET451', 'Analog and Digital Communication Lab', 70, 30, 100, 4, 'ECE'),
(190, 'ET452', 'Digital Electronics Lab', 70, 30, 100, 4, 'ECE'),
(191, 'ET453', 'Microelectronics Lab', 70, 30, 100, 4, 'ECE'),
(192, 'ET454', 'Modelling and Simulation Lab', 70, 30, 100, 4, 'ECE'),
(193, 'ET501', 'Integrated Circuits and System', 70, 30, 100, 5, 'ECE'),
(194, 'ET502', 'Wave Propagation and Antenna Engineering', 70, 30, 100, 5, 'ECE'),
(195, 'ET503', 'Microprocessors and Microcontrollers', 70, 30, 100, 5, 'ECE'),
(196, 'ET504', 'Wireless and Mobile Communication', 70, 30, 100, 5, 'ECE'),
(197, 'ET531/X', 'Open Elective-I', 70, 30, 100, 5, 'ECE'),
(198, 'ET551', 'Integrated Circuits and System Lab', 70, 30, 100, 5, 'ECE'),
(199, 'ET552', 'Transmission Lines and Antenna Lab', 70, 30, 100, 5, 'ECE'),
(200, 'ET553', 'Microprocessors and Microcontrollers Lab', 70, 30, 100, 5, 'ECE'),
(201, 'EE402', 'Analog and Digital Electronics', 70, 30, 100, 4, 'EE'),
(202, 'EE403', 'Signal and Systems', 70, 30, 100, 4, 'EE'),
(203, 'EE404', 'Control System', 70, 30, 100, 4, 'EE'),
(204, 'EE451', 'Electrical Mechines Lab-II', 70, 30, 100, 4, 'EE'),
(205, 'EE452', 'Analog and Digital Electronics Lab', 70, 30, 100, 4, 'EE'),
(206, 'EE453', 'Numerical Simul.Appl.Tools Lab', 70, 30, 100, 4, 'EE'),
(207, 'EE501', 'Electrical Machine-III', 70, 30, 100, 5, 'EE'),
(208, 'EE502', 'Power System-I', 70, 30, 100, 5, 'EE'),
(209, 'EE503', 'Power Electronics', 70, 30, 100, 5, 'EE'),
(210, 'EE331/X', 'Open Elective-I', 70, 30, 100, 5, 'EE'),
(211, 'ME505', 'Heat Power', 70, 30, 100, 5, 'EE'),
(212, 'EE551', 'Electrical Machine Lab-III', 70, 30, 100, 5, 'EE'),
(213, 'EE552', 'Power System design and Estimation, and M/C Design', 70, 30, 100, 5, 'EE'),
(214, 'ME553', 'Heat Power Lab', 70, 30, 100, 5, 'EE');

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `take_id` int(11) NOT NULL,
  `roll_no` varchar(11) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `sem` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`take_id`, `roll_no`, `sub_code`, `sem`, `status`) VALUES
(225, '14101104011', 'CS501', 5, 1),
(226, '14101104011', 'CS502', 5, 1),
(227, '14101104011', 'CS503', 5, 1),
(228, '14101104011', 'CS551', 5, 1),
(229, '14101104011', 'CS553', 5, 1),
(230, '14101104044', 'CS501', 5, 1),
(231, '14101104044', 'CS502', 5, 1),
(232, '14101104044', 'CS503', 5, 1),
(233, '14101104044', 'CS551', 5, 1),
(234, '14101104044', 'CS553', 5, 1),
(235, '14101104046', 'CS501', 5, 1),
(236, '14101104046', 'CS502', 5, 1),
(237, '14101104046', 'CS503', 5, 1),
(238, '14101104046', 'CS551', 5, 1),
(239, '14101104046', 'CS553', 5, 1),
(240, '14101104047', 'CS501', 5, 1),
(241, '14101104047', 'CS502', 5, 1),
(242, '14101104047', 'CS503', 5, 1),
(243, '14101104047', 'CS551', 5, 1),
(244, '14101104047', 'CS553', 5, 1),
(245, '14101104062', 'CS501', 5, 1),
(246, '14101104062', 'CS502', 5, 1),
(247, '14101104062', 'CS503', 5, 1),
(248, '14101104062', 'CS551', 5, 1),
(249, '14101104062', 'CS553', 5, 1),
(250, '14101104066', 'CS501', 5, 1),
(251, '14101104066', 'CS502', 5, 1),
(252, '14101104066', 'CS503', 5, 1),
(253, '14101104066', 'CS551', 5, 1),
(254, '14101104066', 'CS553', 5, 1),
(255, '14101104068', 'CS501', 5, 1),
(256, '14101104068', 'CS502', 5, 1),
(257, '14101104068', 'CS503', 5, 1),
(258, '14101104068', 'CS551', 5, 1),
(259, '14101104068', 'CS553', 5, 1),
(261, '14101104046', 'CS504/x', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `sub_code` varchar(10) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `sem` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`sub_code`, `fac_id`, `sem`, `status`) VALUES
('CS501', 1499794217, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `user_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email_id`, `password`, `user_type`, `user_status`) VALUES
(1, 'admin@mail.com', '$2y$10$1zyF3qYi299f01M3c1VnW.1PFWE1AzPnnx8UaIEScoEJF88l99BAS', 'Admin', 0),
(1499767593, 'arpitaghosal2015@mail.com', '$2y$10$VTgLrBmnK1WKFAkOX5EvjeLTjZ5XkiAhNTEIMYUPPFsY5JDwjXayS', 'student', 0),
(1499767953, 'paromitapatra@mail.com', '$2y$10$1sBFTPpBpRpX9ZEHGxLWe.pMgV.aShv/SRaknRn7B8Slf2q7u4ixW', 'student', 0),
(1499768134, 'snigdhamandal@mail.com', '$2y$10$JgKBXT7TkbzmPreN/JC75Oo7eacMWDDgXUIWUEO5psKvC0lftTIbi', 'student', 0),
(1499768432, 'srabonimandal@mail.com', '$2y$10$N4gmMLzjf.7Obqhn00qNWedIgFFYB5FbvqfFNDt5nZcysc46Q700a', 'student', 0),
(1499768672, 'ananyaghorai@mail.com', '$2y$10$K2.Xgu.ZNNar4OklOoU4m.QT3qoRXVWYEuLO.fRNi7Zif.CHtDDPa', 'student', 0),
(1499768904, 'srutirai@mail.com', '$2y$10$lyyfJYK5G3bzfYn9MO12tO32gVtQ78ucT.wYR8b4udvpHC5xEPrli', 'student', 0),
(1499769105, 'sampasarkar@mail.com', '$2y$10$bvU.2iTTWMdc3xuBtWoISeDeZBW7ff3QemS1sFqY3oiU2CaZajGZy', 'student', 0),
(1499769244, 'swarnakamal@mail.com', '$2y$10$hC3APE/my2vVCNypQtWsGuKAg9cTCPlGhtNO.RABnzkPj5CJyDE3O', 'student', 0),
(1499769386, 'debleenadas@mail.com', '$2y$10$Z356nbQhC4GhEH8k6dJ17eZZB3yZegywd2NhZgmiLelBQnGiyavRa', 'student', 0),
(1499769629, 'anushreesarker@mail.com', '$2y$10$qSP0d7NC5Eejk9Tc5rvnrug2zYokjOJWb3f7/.KojngWosgCPPLJ.', 'student', 0),
(1499770305, 'koushikkarmakar@mail.com', '$2y$10$CTG5xBjMn3E/sfSRVCzdW.IOzxLlhEsTB0X0n/4TYeWx/IQyb9AX6', 'student', 0),
(1499770552, 'soumikd@mail.com', '$2y$10$vje86Z5pnY.PsHoKR6tey.man8jCcWUxmpkvj7xaq..cYRhkfexx2', 'student', 0),
(1499770752, 'akashmandal@mail.com', '$2y$10$9jGTZjCFajrEaem2zVXtEu3nehaT0z.9Dj/fxVMORtnumHUSluWDy', 'student', 1),
(1499770901, 'tuhinmitra@mail.com', '$2y$10$uE8Vedfy.xejsB5jLfUJnuOBUx/rhimwjm2vesGRrPafuY8f9sYDm', 'student', 0),
(1499771072, 'surojitw@mail.com', '$2y$10$LGmLSa7FxvrDW3d.MnRuYugyVFRo7T0uR3CDAVbhQEINlvirBOqVe', 'student', 0),
(1499771230, 'souvikm@mail.com', '$2y$10$CCKevNtY0E/AYmYePUqFYePn6eohw0k0CL39B6Eka.slbtyapQ87W', 'student', 0),
(1499771415, 'shivamd@mail.com', '$2y$10$Wyq.WkD.X0r/Dr8aOVZXo.z9xm357Ez3z1n6MVelFI9nEwSBJ//8y', 'student', 0),
(1499771652, 'aniketpatra@mail.com', '$2y$10$s1/0J6S6Q46RX.bGUr6TGeT3RFHlQ.JQngyukGIDBYRAeeYbM70Aq', 'student', 1),
(1499771802, 'kundansingh@mail.com', '$2y$10$Puay5g.DZT6sj/8st6BJDOgL1dguzcqOC0Wc9aLsmAoBxU1vmyfCa', 'student', 0),
(1499771933, 'rahulp@mail.com', '$2y$10$jBNk6OTb5R1R2Ab85q1ZIe1ZsCKhxguwP6Gu.nwG1to2fOvzBtiKi', 'student', 0),
(1499772151, 'biswanathmandal@mail.com', '$2y$10$9Kool9zXHO.TiC.5usuCtujXtU2aiE/c2ao1tuor4U3ahtwN8GCGm', 'student', 0),
(1499772395, 'anikghosh@mail.com', '$2y$10$KKXQwfwA9acE4FR8w7FnMOENrNSQ7rpeRy7CA93BuZysZ63j9bYjO', 'student', 0),
(1499778793, 'srabonp@mail.com', '$2y$10$vjzJQpWa5/Eeipt1PIROUu/EHkn9kbXfgsdPbA8SvxzQkRaUL1fCm', 'student', 0),
(1499778975, 'somprityganguly@mail.com', '$2y$10$bOiZlqYk4hlf6NirF7IVDezIUMVSMZPK.m4UeidI7VUxQcSza4/fq', 'student', 0),
(1499779152, 'suesmitad@mail.com', '$2y$10$I2P6kL32m34WcPdBP7JUT.I2N84tA.qXku8cpys210tZI6qsbCNC2', 'student', 0),
(1499779346, 'suesmitasarkarm@mail.com', '$2y$10$q3zIbNyz/nOf7pDBhCdmtOU8q5TORXGy/rQX2yMTFiDsmdqEZ7TLm', 'student', 0),
(1499779553, 'riyankak@mail.com', '$2y$10$lqhmgQqjFUKurn99qiJIfuDssaHvAiKdP7vVeuohrzYJoIdbtQbwq', 'student', 0),
(1499780103, 'amirsohel@mail.com', '$2y$10$Dyl4Bsz8FGDHnUUw/8tRWeTZBTVDejJPLkgW7UiSwV6wO4Dg7VDd2', 'student', 1),
(1499780313, 'aniketdutta@mail.com', '$2y$10$hMw2hjh8HO.WsMzow5H5c.r2RyW0g2w9Yk2NVJ0LH8GZu9MlDY15q', 'student', 0),
(1499780719, 'anuragborman@mail.com', '$2y$10$tcvssmm9eQi5Ul09rVk5E.5NVz/umEKv16PENtPgUW.LmGS38GYnG', 'student', 0),
(1499780928, 'mainakm@mail.com', '$2y$10$P.KZGr6CrIbLAJPiIhpAP.eXWLKvzCIhA3Tv8DXiKj/6RUsFxxzga', 'student', 0),
(1499781120, 'pronoys@mail.com', '$2y$10$k8uiNr3wlKxPW9jhprHeku6L1q10F5SUnaLzUI069Vo6LwtAi77xa', 'student', 0),
(1499781317, 'souravs@mail.com', '$2y$10$q45byk.WGxtjJHKdhXXgFeTkLX3.fFM2gKQP1R7ay4tM.Z35TX7r.', 'student', 0),
(1499781737, 'subhammandal@mail.com', '$2y$10$etYO.5om/x5ma/P3mDwdHOzDUkreTGUd/4uwK71v9wYrfjuzSRRZe', 'student', 0),
(1499781974, 'sandeepm@mail.com', '$2y$10$AerrOX8QoxVdewNLfYkQHONWkRf2/.qECsZDxyjLLb/7OYXSoewkW', 'student', 0),
(1499782180, 'pabans@mail.com', '$2y$10$lpaX02xQFdOUZVWCrL4p2.CIxmcFQIUc.TD2ndVJG7nrv4D.3O4B2', 'student', 0),
(1499782345, 'gouravmondal@gmail.com', '$2y$10$30NC.xq8YRQ9a5cEqbLy2.BfSnsG3Axgr8VyLcnZT8ck9SyZG0Aje', 'student', 0),
(1499782507, 'sohamdeya@mail.com', '$2y$10$sC/tFYqC7hLMj6oGx45/gePkebSUGrxETDEXF637nxy/Fmp4mcPiS', 'student', 0),
(1499782653, 'atanuchatterjee@mail.com', '$2y$10$rG7u1zWXLjY1MCLZyvy1fOYRJz9Jt9kq4oihysVQAO/UWMKiuLhui', 'student', 0),
(1499782791, 'arunavabasak@gmail.com', '$2y$10$n8hzEqdX5T39RPHAJVLA2uT.A.sSfBg0lYaeK9jxNtse3BabBnQte', 'student', 0),
(1499782926, 'ramiz@mail.com', '$2y$10$oWo0/Yl6nmdp9pSzJ1.zoeWD/CScbPw1X62nOZ2PZdAmu.H4IMCUe', 'student', 0),
(1499783038, 'abhishek@mail.com', '$2y$10$3WkzZphvQFkvfMZpKutyDeOMPZ9d7wY0DqGBCuL9RPrBShhlZjH1K', 'student', 1),
(1499783197, 'sumans@mail.com', '$2y$10$cymsqkvs10kKpBeWDbsG2u0Lwjr2EhdXTKQAme2v61LwmzKmhzPwa', 'student', 0),
(1499783304, 'ayanm@mail.com', '$2y$10$3t6ge1NAatQitVF7QIPefeNo0LRhmEuCJevnFWUcconjYBCNvVogS', 'student', 0),
(1499783414, 'souravb@mail.com', '$2y$10$mr0Mbn2iFvFe8sEoILMequVBEFVBBmVcsKw971ZT3pEviTCcRXUnq', 'student', 0),
(1499783530, 'nill@mail.com', '$2y$10$d7EmEq1HFznaStqqGUOVsupwD.JTnpkcH5o61wLw.BEdU35bOz2SW', 'student', 0),
(1499783648, 'kinnarm@mail.com', '$2y$10$XRmQceoj9I6KR1gGNFOTLuStGEAeU6rHlzWxqvJ8HHQts.O/2rzPO', 'student', 0),
(1499783750, 'tamanash@gmail.com', '$2y$10$2rEYoM4f7ZqDhgSVBdgVeuBB8wGxst2poWcr13PRRKs.01pilpG/2', 'student', 0),
(1499784062, 'bapisen@mail.com', '$2y$10$vTmxGLDS3sOFGnhen48yrujpdsVcEmCaEGnOJ1zrUgcNthGNKvopG', 'student', 0),
(1499784144, 'bapimandal@mail.com', '$2y$10$cOLysi77unzd5CNH6qVyLOdou16GG8ez/Pmidq8i02/V35bBfBWru', 'student', 0),
(1499784252, 'madhuja@mail.com', '$2y$10$2wnwhSMGFxagnkLH/vdKO.ZG3Gf7J.I8pDOKBE9U872dsZ8UGciVK', 'student', 0),
(1499784359, 'annesha@mail.com', '$2y$10$yrDgu7gRZcxjzUIDsBgyDu.I9X4wNJq/Evh7JHzwdxxeYmH7TSF.a', 'student', 0),
(1499784474, 'bibek@mail.com', '$2y$10$j0nej.YmhNAmzKSPT6rHHeJg8hLYrTBvGsLRQHv0HBkcfr3DJIDPC', 'student', 0),
(1499784547, 'apu@mail.com', '$2y$10$rms8qx87IU5S3mDE8MkSr.1lZFAc6Alb..OWpMgUZgAa0acWzOLw2', 'student', 0),
(1499784669, 'anisha@mail.com', '$2y$10$2L2RU/hjmCn/j.mjYa23O.pddWdZyjqc33PrLRjwSoBji9V11IE6a', 'student', 0),
(1499784777, 'deb@mail.com', '$2y$10$ZI8nIhjDqKOvBNFhttsmWut86CNjubX69bpgFOGIM/DhtN90YuPMa', 'student', 0),
(1499784889, 'tamajitb@mail.com', '$2y$10$1oCqqEZX1UYdKmnRKahZXuTtjQR0YEbqYMUzsVND6QpDx84oCEbXO', 'student', 0),
(1499784991, 'stu@mail.com', '$2y$10$w.lrkW53Udm/BTB/O53FfOxfaNySia0Kco4KWv0BmtCnagZwLITyS', 'student', 0),
(1499785135, 'bikas@mail.com', '$2y$10$PQUvIOAvupT5H7jDncjRgO1xUj06S5I91rIicb0ElsDpQgh7TkERu', 'student', 0),
(1499785283, 'rajam@mail.com', '$2y$10$E2hDK28sMFYHmJ3Ns58e7OCe2QQ5uLOdNPVKORIaVLAG4E8i9c7Uq', 'student', 0),
(1499785368, 'rajeshc@mail.com', '$2y$10$1zFbQpdiDZV1qR.RnKXAGOKWgo92Mwssf1oMbdJojEm1oeSHlkMCS', 'student', 0),
(1499785461, 'proloyc@mail.com', '$2y$10$Qnv5V6mRXZlWYGttfs08/ujj3FYqjXCxGqFJ9Ga2eHlBIYINjKP3q', 'student', 0),
(1499785637, 'moloyc@mail.com', '$2y$10$dAOKkpUlrYYMJdCTqWbbEOdr1d/5O/DmqeRjemSVf39EhFaoTRFvi', 'student', 0),
(1499785768, 'dolon@mail.com', '$2y$10$mpqnTqmYJJTTGBAOEQrMQOC9OfIlUvAF2lPE/465cGRTnWoqmKgTa', 'student', 0),
(1499785860, 'sathi@mail.com', '$2y$10$EPHIBYdO3k.cZx5PjGIzOe3Oye1Yw7HD3fMMo.Kz8ARzUfd.zhQdC', 'student', 0),
(1499785970, 'dona@mail.com', '$2y$10$7AeAgScbiVrOuGTMk1KeVOMXt3qDfD8A5S0djIbCpoMTl6402ahWS', 'student', 0),
(1499786064, 'papaid@mail.com', '$2y$10$ORw7jcBY31P4t0NTfqf9sux69SADX7x7vI7QEAP4kBVIUtWCVUNlu', 'student', 0),
(1499786163, 'sumonad@mail.com', '$2y$10$TaDxAezbHpWbVnaWlyJzLeRcr3AiKYf319Qkqx1t07/URIJyN4igO', 'student', 0),
(1499786277, 'mitud@mail.com', '$2y$10$MumDt5SYZfwzWhWqb8XlrOa0Gkik8doM1RQhJwPbtvNqJ6thLqtu.', 'student', 0),
(1499786375, 'madhud@mail.com', '$2y$10$nBFC39Ir9hHBPGN9p8fNKuAanftH3JoawAaoFT8V7.2vP6tuRJdpO', 'student', 0),
(1499786496, 'tapasg@mail.com', '$2y$10$XWuKqg2k7qRj/prYIa4QXeynxKzyaowQLDs.u0FYhQS8JkI6gaLEe', 'student', 0),
(1499786618, 'somord@mail.com', '$2y$10$64rRjfYx7qmAgMpeWPphm.l/SdI9q2PVypKTsrWq2FzTG9hB2QItO', 'student', 0),
(1499786733, 'anchal@mail.com', '$2y$10$Md/l0Z9FuvEciwail024JuW7xL/Wo.1RNad.gBcdQJTTgWCjzK/sq', 'student', 1),
(1499786863, 'bibha@mail.com', '$2y$10$.k77Sfy4fyxD/jsxVLJg5.vDl1.6O38fIMlEElCztU1JKaMGnEIl6', 'student', 0),
(1499787023, 'subhoa@mail.com', '$2y$10$.LJGAggmWcr2j0eaqEx5N.sXaUTvKNf/He9x9aBotz6u.HsJLaKny', 'student', 0),
(1499787129, 'arpita@mail.com', '$2y$10$67sFD0NAosPfuXsi/G/WCuQqXDzw3D5mw9IpMQv5yL7q9NhYCpELi', 'student', 0),
(1499787250, 'anu@mail.com', '$2y$10$Q/Pi3bCU0suwb9.BnjAcGOhbH/FU0lynCdrk8aqi0soK3rB4cIfO2', 'student', 0),
(1499787372, 'bidisha@mail.com', '$2y$10$u8qfkvdZ2YQB5Ata.1PxBelLMiMk1kmo53H9NRS8Fag/xa7Z9fHEC', 'student', 0),
(1499787490, 'debur@mail.com', '$2y$10$E1HE9k3x.LtJ6VXh8s.2beWcUbS14dU5Pu8xOLQdOuhgpXK.PQdge', 'student', 0),
(1499787674, 'bibhas@mail.com', '$2y$10$BeSwKl/.02vt7ED3BsfzPuay7/5Li8o/hd6XrrDAu4i5W2gBboS0W', 'student', 0),
(1499787767, 'santu@mail.com', '$2y$10$GD7ZEV0hzo98ZfKVtIZyaOGxNSjdi0MDwBvIf3a9YF.rruJcrRrhq', 'student', 0),
(1499787843, 'subhasg@mail.com', '$2y$10$cY4lWIxDl7Uj4x/qE.T/yehaOgI.xqgC24sclnzF8ddxTpH5RsNhW', 'student', 0),
(1499787997, 'saikats@mail.com', '$2y$10$CyaaYSkvv0L6RYqAbOCYLufl0XE6BbF2J8A2o2BM3fjU8A.b4xLIq', 'student', 0),
(1499788263, 'rajibkundu@mail.com', '$2y$10$QfZgp8CAWJwMXT5zN7wuUuL3qYZQwzhYxNhkv/xYqro6OtGSs1PkK', 'student', 0),
(1499788362, 'laltusingha21@mail.com', '$2y$10$5OdPtipbXny45xvFyjOjr.7vgR58NL4fCB9I3j4/pjjNqVhZ5RPm.', 'student', 0),
(1499788473, 'munnasingha@mail.com', '$2y$10$OT.WWREZCVAikLPmehCR/./in7Cfz9kOiCXiKUPO9sFZmbt68UgAW', 'student', 0),
(1499788574, 'mahindrasingha@mail.com', '$2y$10$PqJtCBrrVd8moDPK3DT2kOWHSLnKJjhrZen2/5QmlXrAmmNhRcRlq', 'student', 0),
(1499788717, 'jitlalsingha@mail.com', '$2y$10$K4wFcybm7uJPVmIuEzdp2u8j46d1BGTNmNxkLBE6knsRhs5aBszoS', 'student', 0),
(1499788856, 'sumitramukherjee@mail.com', '$2y$10$/tNtXXVEXnreKyEOUT987.U3RexkhyewlOoN0bCIf6KoTtTQ0pXsu', 'student', 0),
(1499788932, 'kalidasdeoghuria@mail.com', '$2y$10$aNzCoH/KgVK62cdJbj634O4gmQM86.hy4.I8/aiuMq1jjbkx9nwUW', 'student', 0),
(1499789005, 'mandirachatterjee@mail.com', '$2y$10$ELNAqmDiIOsxZFtZWnEsG.EtKMaxhzdMVh9ggRNveHWSHe.qoZFRi', 'student', 0),
(1499789094, 'mallikamaji@gmail.com', '$2y$10$V/7J8xebxdI.SaLqvGanZOSNB8EShyQ2L14IuNBYQZOrt5GtQwkP2', 'student', 0),
(1499789195, 'pujabanerjee@mail.com', '$2y$10$VhegV.y50gULyAESZYOWquVPGrwPT9xRlTixML5727KOBx12ZxZ3C', 'student', 0),
(1499789293, 'pinkidaripa@gmail.com', '$2y$10$zQERbiW37.1psdqtbCkB2.4VaO/2bNC.77Au2RJOREBuIzoNiAHsq', 'student', 0),
(1499789365, 'tapanmukjherjee@gmail.com', '$2y$10$zwff0KiKtxSIP7MghbtMouSOLC9y4SWBmmZTSqu2G6qXaMv5UOtji', 'student', 0),
(1499789498, 'shibramchatterjee@mail.com', '$2y$10$paoARMa5x565T.8qFmwIlOV0y1U1TDW/iNU6NaJMVmE5/yxnU8kBK', 'student', 0),
(1499789596, 'goutamkumbhakar@gmail.com', '$2y$10$eyzKatBUdnllmk171jGhs.F7.kD9ZEFnMjSiMDbUNHj1V6GcavYiG', 'student', 0),
(1499789651, 'swapanchatterjee@gmail.com', '$2y$10$86ocAfZ0mqS9ZWpm/.MBQ.Y.DXRZHBWuz5xvv3/ILusfPSkXdXH6.', 'student', 0),
(1499789719, 'nilimamukherjee@mail.com', '$2y$10$YIitbVACP/n4pOQx/wTfiOoLNiJSJeZVxlWV4sg658E1TVZvMcWLu', 'student', 0),
(1499789803, 'sonaimukherjee@gmail.com', '$2y$10$U2/5VUbdW8rKK8g1f1d0au56EJaak0D9V26KXF/0sjoCX06tuOOyy', 'student', 0),
(1499789888, 'bubaimukherjee@gmail.com', '$2y$10$Am5h4Xx9SBRdizHlpR6IpOo93Sk9oI8xe.v/0pfwcYHBPFglQ2xZW', 'student', 0),
(1499789971, 'silpichatterjee@gmail.com', '$2y$10$8sELBv1V7sWZ84fmcNuieOeDz1TWGFenaLwQxeR./J2V1leMcDS6a', 'student', 0),
(1499790034, 'swadeshranjanghosal@gmail.com', '$2y$10$cXN3wvCiGfUCY5haifdrIe6cDiLpazWwW75fIbu.BqI/UDqEcj2Yy', 'student', 0),
(1499790222, 'shibanisardar@mail.com', '$2y$10$dq89NMrAtRCLrwkMsSsVZe6i7Mfcezlncrl3x7AeoiGKyt0mxtEnG', 'student', 0),
(1499790406, 'ankitakhan@gmail.com', '$2y$10$njTwU95QToKFT.1eK8cKv.kzMh1sfM3OCTrbqEybfXmsPRlIuYzRC', 'student', 0),
(1499790673, 'kaushikidutta@gmail.com', '$2y$10$MIWJKjF9kb2PDhRi8pLMYuezVkiNWJQFcNoY8qw1ee4MbJO6Qvday', 'student', 0),
(1499790905, 'sharminkhan@gmail.com', '$2y$10$WEw59xo5H1bpWeWAECiyAeaRZ3QInkGmG0/n74AcTNSu4FX27zUmK', 'student', 0),
(1499791157, 'dhrubo@gmail.com', '$2y$10$VTTGmZzKvlFifll368nUTecE3TD0XexY4xrCWAKCLUErzt6yuSnf6', 'student', 0),
(1499791261, 'anamika@gmail.com', '$2y$10$eHcf9t/MGZGJu/Q/INCaguOHRwUGQVlMObGohLTqZgjX8/8Yjb5FG', 'student', 0),
(1499791396, 'deboshree@gmail.com', '$2y$10$HqTMKw/aOIj4E7E4HXpTl.Mi3woTQUO7t9cfe96rmmagf.CCwEeY2', 'student', 0),
(1499791502, 'pujaghosal@gmail.com', '$2y$10$Q5DMWXlaLWz8Hx4oDcqCDOVd4few/mZMm4swE3p3WxfgBSJ4vtBPe', 'student', 0),
(1499791556, 'tapanrakshit@gmail.com', '$2y$10$t4faato5ztM3p/5Ijk2Mwe5u.Jk2odIEtr4arfjXsZrfefDi6orui', 'student', 0),
(1499791624, 'beutymukherjee@gmail.com', '$2y$10$SmD96S/vTOwUife8EgVN5O/EkPPSkNxGX6dnMTQ6YWWLLXvnVV.Gq', 'student', 0),
(1499791687, 'swarupmukherjee@gmail.com', '$2y$10$/H7Vbs0qUGXA99Mb0oIPW.WPEgdtjdqErsQ0W28k8HJKoBkxkNtyC', 'student', 0),
(1499791793, 'rajeshchatterjee@gmail.com', '$2y$10$3/bAIxPZIx2iQZbt05nc/u2eERbITGUxBR5cWeFcjrfo3YvSiq5yK', 'student', 0),
(1499791852, 'sagarmukherjee@gmail.com', '$2y$10$YCzbzHNG1TD.m/v234cFUuMvXQ1fEV4GNrHUjZSBkTCbHJsP24IXi', 'student', 0),
(1499791917, 'silpimaji@gmail.com', '$2y$10$zleUFkTTK27YwL6AszCXFuZfNYIQI1Wsdoy47hpnluezlzu2qEOY6', 'student', 0),
(1499791979, 'mousingha@gmail.com', '$2y$10$IPgQePQlrE9OpzNEtRoC0e19DSFLHNWHfuMwb.WWmlUFM6s82FoH6', 'student', 0),
(1499792037, 'susmitamukherjee@gmail.com', '$2y$10$PHkdmqx/yobfOgnReYirn.MLKfzPhXnSAgmUu/M.UxBAKkOjBWwzy', 'student', 0),
(1499792101, 'ritushit@gmail.com', '$2y$10$3w3atVwdW.vjLt1WFdcI1OLVwSYCUAu6YyocZZTU7M15KAXJpuzoq', 'student', 0),
(1499792152, 'riyadey837@gmail.com', '$2y$10$MF50kLAjE6knDyOLImcgQecn1V.mt0XRI8Jm1DYmsYCXUuFXvBmdi', 'student', 0),
(1499792211, 'bikramsingha@gmail.com', '$2y$10$xQe.MZvOBGiI4VPKsVM9Buet6uMrEqUtWkAw9zTLS/AYHVVKC9vEu', 'student', 0),
(1499792339, 'jitshit@mail.com', '$2y$10$unjDnhbZ.GYNfwUokniLYehoi9Ds2DAMvKlQwQpqqsyQFnMStpj..', 'student', 0),
(1499792423, 'santoshc@mail.com', '$2y$10$si6bvOHQzA0MQGeYdjo/3.a60H8jF100O4wOg9zFXnFVD6mvQvV7m', 'student', 0),
(1499792536, 'arpitasingha2015@mail.com', '$2y$10$A882m.i7DZUQxoB9i1PUVuPWqdCVFNwIToV45UUnY7FwODwgk/sm.', 'student', 0),
(1499792690, 'mamonirai@mail.com', '$2y$10$OD8EdSw/VZRD4fb9Tdophuq4ybabU9q8E4wefwMHTE9m28X307PiG', 'student', 0),
(1499792842, 'mandirashit@mail.com', '$2y$10$eZxRl7pSkBXz0L0wR6EVL.ssjp7MCU6dznwVBGWpPTIW8GEC02Phq', 'student', 0),
(1499792900, 'gourab@mail.com', '$2y$10$MIWJKjF9kb2PDhRi8pLMYuezVkiNWJQFcNoY8qw1ee4MbJO6Qvday', 'student', 0),
(1499792979, 'aratichatterjee@mail.com', '$2y$10$2hqOlsbuYt.xHCA/UU1/5.wNrW.VNhvz5w4/uMoeLna8uoRXnmHXu', 'student', 0),
(1499793036, 'rakeshmukherjee@mail.com', '$2y$10$lMGboJwALJ6pzvI5URD3L.HIXKQZliVf07mMNQROXL5e8VVDMtvEa', 'student', 0),
(1499793109, 'pintughosal@mail.com', '$2y$10$CIBE7/Yham3mqCwenjKXKuVSkvNsYXHwxLn0FM/vqNwy8zERcF9ey', 'student', 0),
(1499793995, 'dhiman@mail.com', '$2y$10$TOIzVvn8Lp2qwbqxIXzLqeJbb8Ld2RdMLHlAzjPmjdxQBO4D3N5xe', 'faculty', 0),
(1499794085, 'srinibus@mail.com', '$2y$10$xTEWmUk96PYIZmxjql4EH.tfvV3fkh08MTbcvNqeeXwpy8kz7peU6', 'faculty', 0),
(1499794218, 'fac@mail.com', '$2y$10$ts7/g8q9AMIqWSQE9kKWRuuJU8Ms7lY/b2F8msZBFgjbEbA11VPE6', 'faculty', 0),
(1499794537, 'sambhunath@mail.com', '$2y$10$GAKMoD4cmgPPepJIAHo3mOMjjRx86Dmu0yhGFvv0MCBE4b2tWArwe', 'faculty', 0),
(1499794717, 'swarup@mail.com', '$2y$10$WNvCPoxj9miUF.fKVibDcu0hN2yidnUF.ufzJgQ/RIUChPfwmF3mO', 'faculty', 0),
(1499794829, 'paban@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499794909, 'swadesh@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499794989, 'rakesh@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499795075, 'tapascse@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499795172, 'souvik@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499795298, 'chinmoy@mail.com', '$2y$10$841JBG3S.8ex3JDzmH37O./4MPO5mUTu8km5ttG8HEvGE7yxEOdvW', 'faculty', 0),
(1499795407, 'pintu@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499795499, 'sumon@mail.com', '$2y$10$ac3oGfW7Tk1nQILY1pKupuQ2Q7OYzFmTtJ9k9UwXYXpv.GZiXVhfC', 'faculty', 0),
(1499795563, 'ayan@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 1),
(1499795654, 'akash@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 1),
(1499795782, 'ananya@mail.com', '$2y$10$uPWlPrkwNTw.KBxZ97CNN.BtcYMz3/9l0SaXRop3Ir46WVd8TWYb2', 'faculty', 0),
(1499795862, 'saikat@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499795930, 'snigdha@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796008, 'sraboni@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796108, 'arpital@mail.com', '$2y$10$uuqUWot9EKOkwlzgX8AQ2.sbu8GwL2ojwum7nhfTlh1MR5mXvR5vS', 'faculty', 0),
(1499796173, 'aniket@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796250, 'anik@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796338, 'sagar@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796404, 'suvam@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796505, 'subhas@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796565, 'laltu@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796633, 'amir@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 1),
(1499796709, 'anamika@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 1),
(1499796792, 'debleena@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796864, 'tamanash@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499796938, 'rajesh@maol.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797022, 'rakeshme@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797096, 'kalidas@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797157, 'kinnar@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797220, 'madhu@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797300, 'mahindra@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797401, 'papai@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797473, 'paromita@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797547, 'bapi@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 1),
(1499797635, 'deboshree@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797753, 'debu@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797836, 'siddhartha@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499797920, 'pinak@gmail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499798000, 'chinudas@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499798074, 'durnibar@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499798149, 'kundan@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499798241, 'gourav@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499798316, 'goutam@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499798408, 'kaushiki@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499798472, 'jit@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499798557, 'jitlal@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 0),
(1499836429, 'anamikad@mail.com', '$2y$10$TjFZzmUtdLu32pUB.lxEXu1A0Ab/OBbp1HzAjxp6jgYYzGlcu40uy', 'faculty', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `fac_id` (`fac_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD UNIQUE KEY `take_id` (`take_id`),
  ADD KEY `take_id_2` (`take_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `roll_no` (`roll_no`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`take_id`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`sub_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT for table `takes`
--
ALTER TABLE `takes`
  MODIFY `take_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
