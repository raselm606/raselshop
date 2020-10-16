-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 03:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rastheme`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_msg`
--

CREATE TABLE `contact_msg` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_msg`
--

INSERT INTO `contact_msg` (`id`, `name`, `email`, `message`) VALUES
(1, 'Rasel', 'rasel@gmail.com', 'hi,\r\nCurrently working with Highbank ICO. Our job is to Develop the ICO website.We have already done lots of ICO websites Development for reputation company & Big organizations as well as various smaller startups.Currently working with Highbank ICO. Our job is to Develop the ICO website.We have already done lots of ICO websites Development for reputation company & Big organizations as well as various smaller startups.');

-- --------------------------------------------------------

--
-- Table structure for table `heroimg`
--

CREATE TABLE `heroimg` (
  `id` int(255) NOT NULL,
  `imgg` text NOT NULL,
  `imgtext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heroimg`
--

INSERT INTO `heroimg` (`id`, `imgg`, `imgtext`) VALUES
(3, 'TFS_Article_2019_970x643.jpg', 'rasel');

-- --------------------------------------------------------

--
-- Table structure for table `hero_section`
--

CREATE TABLE `hero_section` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `btnhero` varchar(255) NOT NULL,
  `btntop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hero_section`
--

INSERT INTO `hero_section` (`id`, `title`, `des`, `btnhero`, `btntop`) VALUES
(1, 'Online Shopping Around the World with Alibaba', 'Online Stationery Shop, Online Book Shop, Online Makeup Store, Baby Toys Shop, Pet Supplies Store, Online Grocery Shop, Online Medicine Shop', 'View Products', 'https://www.alibaba.com');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(255) NOT NULL,
  `sec_title` text NOT NULL,
  `port_img` text NOT NULL,
  `port_title` text NOT NULL,
  `details` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `sec_title`, `port_img`, `port_title`, `details`, `price`) VALUES
(4, 'https://www.alibaba.com/product-detail/Redmi-Note-9-4GB-128GB-Smartphone_1600083324841.html?spm=a2700.galleryofferlist.normal_offer.d_title.1d9d32d0s7HDB8', 'H4c12000ea0734881a4795ffad39389e07.jpg', 'Redmi Note 9 4GB 128GB Smartphone Xiaomi Original Mobile 48MP Quad Camera 5020mAh Global Mi Mobile Phones', 'Redmi Note 9 4GB 128GB Smartphone Xiaomi Original Mobile 48MP Quad Camera 5020mAh Global Mi Mobile PhonesRedmi Note 9 4GB 128GB Smartphone Xiaomi Original Mobile 48MP Quad Camera 5020mAh Global Mi Mobile PhonesRedmi Note 9 4GB 128GB Smartphone Xiaomi Original Mobile 48MP Quad Camera 5020mAh Global Mi Mobile PhonesRedmi Note 9 4GB 128GB Smartphone Xiaomi Original Mobile 48MP Quad Camera 5020mAh Global Mi Mobile PhonesRedmi Note 9 4GB 128GB Smartphone Xiaomi Original Mobile 48MP Quad Camera 5020mAh Global Mi Mobile PhonesRedmi Note 9 4GB 128GB Smartphone Xiaomi Original Mobile 48MP Quad Camera 5020mAh Global Mi Mobile Phones', '50'),
(5, 'https://www.alibaba.com/product-detail/1-8-inch-Low-Price-China_62394999046.html?spm=a2700.galleryofferlist.normal_offer.d_title.1d9d32d0s7HDB8', 'He8b528a386a84ecd9e09b8c10fe90f47k.jpg_350x350.jpg', '1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106', '1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106', '249'),
(6, 'https://www.alibaba.com/product-detail/1-8-inch-Low-Price-China_62394999046.html?spm=a2700.galleryofferlist.normal_offer.d_title.1d9d32d0s7HDB8', 'TFS_Article_2019_970x643.jpg', 'China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106', '1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106', '249.00'),
(7, 'https://www.alibaba.com/product-detail/M1-new-2-in-1-Smart_1600064329466.html', 'H822ac0daf995411a9ba57356dfad6ea0q.jpg', 'M1 new 2 in 1 Smart Watch with call wireless earphone Handsfree Earbuds Smart Wristband Watch Fitness Tracker for iOS Android', '1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106', '25.24'),
(8, 'https://www.alibaba.com/product-detail/Apple-used-Apple-5S-genuine-original_1600090358529.html', 'Hf4a81c9e8e484eb9a6e5681d46d0890aA.jpg', 'Apple used Apple 5S genuine original iPhone 5 generation 5 4G three network mobile intelligent mobile phone for Senior Students', '1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106', '50.89'),
(9, 'https://www.alibaba.com/product-detail/1-8-inch-Low-Price-China_62394999046.html?spm=a2700.galleryofferlist.normal_offer.d_title.1d9d32d0s7HDB8', 'Flower-Frame-PNG-Background-Image.png', '1.8 inch Low Price China small Size Mobile Phones,Small Basic Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106', 'c Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 c Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 c Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106 c Bar GSM Mobile Phone,Unlocked Cell Phone Mobile for 106', '45');

-- --------------------------------------------------------

--
-- Table structure for table `raslogin`
--

CREATE TABLE `raslogin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raslogin`
--

INSERT INTO `raslogin` (`id`, `email`, `username`, `pass`) VALUES
(1, 'raselm606@gmail.com', 'rasel', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_msg`
--
ALTER TABLE `contact_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroimg`
--
ALTER TABLE `heroimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_section`
--
ALTER TABLE `hero_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raslogin`
--
ALTER TABLE `raslogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_msg`
--
ALTER TABLE `contact_msg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `heroimg`
--
ALTER TABLE `heroimg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hero_section`
--
ALTER TABLE `hero_section`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `raslogin`
--
ALTER TABLE `raslogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
