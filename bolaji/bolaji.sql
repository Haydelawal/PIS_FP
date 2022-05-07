-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2022 at 02:34 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
CREATE TABLE IF NOT EXISTS `personnel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` int(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `state` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(30) NOT NULL,
  `staff` varchar(40) NOT NULL,
  `certification` varchar(40) NOT NULL,
  `position` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`id`, `fname`, `mname`, `lname`, `age`, `phone`, `state`, `email`, `address`, `gender`, `department`, `staff`, `certification`, `position`) VALUES
(1, 'Olumide', 'Feyisayo', 'Ameenah', 33, '08045882257', 'Ogun', 'olufeyi@gmail.com', '32, jakande street, Idumota Lagos', 'Female', 'Computer Science', 'Senate', 'BS', 'HOD'),
(30, 'Bisayo', 'Ajoke', 'Ladeja', 34, '0803479799', 'Lagos', 'bisajoke@gmail.com', '8 henry avenue, Odeyewu, Abeokuta', 'Female', 'Mathematics', 'Non Academic', 'BS', 'LECTURER'),
(29, 'John', 'Olufemi', 'Akinwumi', 44, '08112340075', 'Abuja', 'johnolufemi@gmail.com', '9 dasareki street, hassani Abuja', 'Male', 'Chemistry', 'Academic', 'MS', 'DEAN'),
(28, 'Kofoworola', 'Hannah', 'Mary', 34, '08188367103', 'Lagos', 'kofomary@gmail.com', '21, ibidapo street, koyin, Ogun', 'Female', 'Physics', 'Senate', 'DR', 'LECTURER'),
(27, 'Adeleke', 'Jamiu', 'Rasq', 44, '08187339615', 'Lagos', 'adejamrasaq@gmail.com', '2, Olayinka Estate, Ibadan', 'Male', 'Computer Science', 'Senate', 'PHD', 'LECTURER'),
(26, 'Grace', 'Mercy', 'Abiodun', 43, '08100637899', 'Lagos', 'abiodeungrace@gmail.com', '67 Seriki Street, Ilupeju, Lagos ', 'Female', 'Mathematics', 'Senate', 'BS', 'LECTURER'),
(25, 'Hameed', 'Basit', 'Muhammed', 40, '0816581592', 'Kwara', 'basithameed@gmail.com', '7, john street. Agdola, Kwara', 'Male', 'Chemistry', 'Non Academic', 'MS', 'LECTURER'),
(24, 'Ayomide', 'Olaitan', 'Adeolu', 39, '0816702353', 'Abuja', 'ayomideola@gmail.com', '22, Isiaka street, Bashir, Abuja', 'Female', 'Physics', 'Academic', 'DR', 'LECTURER'),
(23, 'Adeyemi', 'Emmanuel', 'Omobolaji', 45, '0818936853', 'Lagos', 'adeemma@gmail.com', '8, Church Road, Idumota, Lagos', 'Male', 'Computer Science', 'Senate', 'PHD', 'HOD'),
(22, 'Taiwo', 'Eniola', 'Akerele', 35, '0811235702', 'Lagos', 'taiwoenny@gmail.com', '8, Oyinkansola Street, Yaba, Lagos', 'Female', 'Mathematics', 'Senate', 'BS', 'SUBDEAN'),
(21, 'Peter', 'Chibuzor', 'Clarence', 65, '08187345600', 'Lagos', 'clarencechipeter@gmail.com', '11, Emeka Street, Diamond Estate, Lagos', 'Male', 'Chemistry', 'Senate', 'MS', 'DEAN'),
(2, 'Hameedah', 'Joy', 'Gbemisola', 54, '08165741084', 'Lagos', 'haydelawal@gmail.com', '76, Suliaman Street. Ojuelegba, Lagos', 'Female', 'Physics', 'Senate', 'BS', 'HOD'),
(19, 'Anjoola', 'Lolade', 'Cole', 45, '0810054682', 'Lagos', 'ajcolelola@gmail.com', '7, Grace Close, MaryLand Lagos', 'Male', 'Physics', 'Academic', 'PHD', 'VC'),
(20, 'Kehinde', 'Abiola', 'Alimi', 34, '0811754347', 'Lagos', 'kennyalimi@gmail.com', '32, Bishop Dayo Street, Agege, Lagos', 'Female', 'Physics', 'Non Academic', 'DR', 'DVC'),
(31, 'Musa', 'Azeez', 'Fadimu', 44, '0818956345', 'Ondo', 'musaazeez@gmail.com', '6, Ibrahim Street, Surulere Lagos', 'Male', 'Chemistry', 'Senate', 'PHD', 'LECTURER'),
(32, 'Fadefemi', 'Mariah', 'Adedayo', 43, '0817805678', 'Lagos', 'ademafade@gmail.com', '50, Gbade Estate, Lagos', 'Female', 'Physics', 'Senate', 'MS', 'LECTURER'),
(33, 'Solape', 'Gloria', 'Odeyimi', 39, '0819750050', 'Ibadan', 'solagloria@gmail.com', '4, Seyi Street, Ilumo, Ondo', 'Female', 'Physics', 'Senate', 'BS', 'DEAN'),
(34, 'Grace', 'Busayo', 'Fadayini', 35, '08100941784', 'Lagos', 'gracedfada@gmail.com', '10, timothy avenue, lagos', 'Female', 'Computer', 'Senate', 'PHD', 'HOD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
