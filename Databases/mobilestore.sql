-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2020 at 12:41 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE DATABASE IF NOT EXISTS MobileStore;

USE MobileStore;

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Size` varchar(255) NOT NULL,
  `Internal_Storage` varchar(255) NOT NULL,
  `RAM` varchar(255) NOT NULL,
  `Processor` varchar(255) NOT NULL,
  `Features` varchar(255) NOT NULL,
  `Battery` varchar(255) NOT NULL,
  `Price` int(11) DEFAULT 150000,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Id`, `Name`, `Size`, `Internal_Storage`, `RAM`, `Processor`, `Features`, `Battery`, `Price`) VALUES
(1, 'Apple iPhone 11 Pro Max', '6.5 inches', '512GB', '4GB', 'Apple A13 Bionic (7 nm+)', 'Face ID,Camera(Wide,Telephoto,Ultrawide,Depth/Biometrics),Scratch-resistant glass,IP68 dust/water resistant (up to 4m for 30 mins)', '3969 mAh', 150000),
(2, 'Apple iPhone 11 Pro', '5.8 inches', '512GB', '4GB', 'Apple A13 Bionic (7 nm+)', 'Face ID,Camera(Wide,Telephoto,Ultrawide,Depth/Biometrics),Scratch-resistant glass,IP68 dust/water resistant (up to 4m for 30 mins)', '3046 mAh', 130000),
(3, 'Apple iPhone 11', '6.1 inches', '256GB', '4GB', 'Apple A13 Bionic (7 nm+)', 'Face ID,Camera(Wide,Ultrawide,Depth/Biometrics),Scratch-resistant glass,IP68 dust/water resistant (up to 2m for 30 mins)', '3110 mAh', 80000),
(4, 'Apple iPhone XR', '6.1 inches', '256GB', '3GB', 'Apple A12 Bionic (7 nm)', 'Face ID,Camera(Wide,Depth/Biometrics),Scratch-resistant glass,IP67 dust/water resistant (up to 1m for 30 mins)', '2942 mAh', 65000),
(5, 'Samsung Galaxy Z Flip', '6.7 inches', '256GB', '8GB', 'Qualcomm SM8150 Snapdragon 855+ (7 nm)', 'Foldable,Camera(Wide,Ultrawide,Depth),Fingerprint (side-mounted)', '3300 mAh', 110000),
(6, 'Samsung Galaxy S20 Ultra', '6.9 inches', '128GB', '12GB', 'Exynos 990 (7 nm+)', 'Fingerprint (under display, ultrasonic),Camera(Wide,Periscope,Ultrawide,Depth),IP68 dust/water resistant (up to 1.5m for 30 mins)', '5000 mAh', 93000),
(7, 'Samsung Galaxy S20 Plus', '6.7 inches', '128GB', '8GB', 'Exynos 990 (7 nm+)', 'Fingerprint (under display, ultrasonic),Camera(Wide,Telephoto,Ultrawide,Depth),IP68 dust/water resistant (up to 1.5m for 30 mins)', '4500 mAh', 78000),
(8, 'Samsung Galaxy S20', '6.2 inches', '128GB', '8GB', 'Exynos 990 (7 nm+)', 'Fingerprint (under display, ultrasonic),Camera(Wide,Telephoto,Ultrawide),IP68 dust/water resistant (up to 1.5m for 30 mins)', '4000 mAh', 70000),
(9, 'Samsung Galaxy Note 10 Plus', '6.8 inches', '512GB', '12GB', 'Exynos 9825 (7 nm)', 'Fingerprint (under display, ultrasonic),Camera(Wide,Telephoto,Ultrawide,Depth),IP68 dust/water resistant (up to 1.5m for 30 mins),Stylus (Bluetooth integration, accelerometer, gyro)', '4300 mAh', 90000),
(10, 'Samsung Galaxy Note 10', '6.3 inches', '256GB', '8GB ', 'Exynos 9825 (7 nm)', 'Fingerprint (under display, ultrasonic),Camera(Wide,Telephoto,Ultrawide),IP68 dust/water resistant (up to 1.5m for 30 mins), Stylus (Bluetooth integration, accelerometer, gyro)', '3500 mAh', 73000),
(11, 'Samsung Galaxy Note 10 Lite', '6.7 inches', '128GB', '8GB', 'Exynos 9810 (10 nm)', 'Fingerprint (under display, optical),Camera(Wide,Telephoto,Ultrawide),Stylus (Bluetooth integration, accelerometer, gyro)', '4500 mAh', 39000),
(12, 'Samsung Galaxy S10 Plus', '6.4 inches', '1TB', '12GB', 'Exynos 9820 (8 nm)', 'Fingerprint (under display, ultrasonic),Camera(Wide,Telephoto,Ultrawide),IP68 dust/water resistant (up to 1.5m for 30 mins)', '4100 mAh', 118000),
(13, 'Samsung Galaxy S10', '6.1 inches', '512GB', '8GB', 'Exynos 9820 (8 nm)', 'Fingerprint (under display, ultrasonic),Camera(Wide,Telephoto,Ultrawide),IP68 dust/water resistant (up to 1.5m for 30 mins)', '3400 mAh', 58000),
(14, 'Samsung Galaxy S10 Lite', '6.7 inches', '512GB', '8GB', 'Qualcomm SM8150 Snapdragon 855 (7 nm)', 'Fingerprint (under display, optical),Camera(Wide,Ultrawide) ', '4500 mAh', 45000),
(15, 'OnePlus 8 Pro', '6.78 inches', '256GB', '12GB', 'Qualcomm SM8250 Snapdragon 865 (7 nm+)', 'Fingerprint (under display, optical),Camera(Wide,Telephoto,Ultrawide,Depth),IP68 dust/water resistant', '4510 mAh', 60000),
(16, 'OnePlus 8', '6.55 inches', '256GB', '12GB', 'Qualcomm SM8250 Snapdragon 865 (7 nm+)', 'Fingerprint (under display, optical),Camera(Wide,Ultrawide,macro)', '4300 mAh', 50000),
(17, 'OnePlus 7T Pro', '6.67 inches', '256GB', '12GB', 'Qualcomm SM8150 Snapdragon 855+ (7 nm)', 'Fingerprint (under display, optical),Camera(Wide,Telephoto,Ultrawide)', '4085 mAh', 58000),
(18, 'OnePlus 7T', '6.55 inches', '256GB', '8GB', 'Qualcomm SM8150 Snapdragon 855+ (7 nm)', 'Fingerprint (under display, optical),Camera(Wide,Telephoto,Ultrawide)', '3800 mAh', 38000),
(19, 'OnePlus 7 Pro', '6.67 inches', '256GB', '12GB', 'Qualcomm SM8150 Snapdragon 855 (7 nm)', 'Fingerprint (under display, optical),Camera(Wide,Telephoto,Ultrawide)', '4000 mAh', 44000),
(20, 'OnePlus 7', '6.41 inches', '256GB', '8GB', 'Qualcomm SM8150 Snapdragon 855 (7 nm)', 'Fingerprint (under display, optical),Camera(Wide,Depth)', '3700 mAh', 33000),
(21, 'Google PIxel 4 XL', '6.3 inches', '128GB', '6GB', 'Qualcomm SM8150 Snapdragon 855 (7 nm)', 'Face ID,Camera(Wide,Telephoto,Depth/Biometrics),IP68 dust/water resistant (up to 1.5m for 30 mins)', '3700 mAh', 84000),
(22, 'Google PIxel 4', '5.7 inches', '128GB', '6GB', 'Qualcomm SM8150 Snapdragon 855 (7 nm)', 'Face ID,Camera(Wide,Telephoto,Depth/Biometrics),IP68 dust/water resistant (up to 1.5m for 30 mins)', '2800 mAh', 70000),
(23, 'Google Pixel 3 XL', '6.3 inches', '128GB', '4GB', 'Qualcomm SDM845 Snapdragon 845 (10 nm)', 'Fingerprint (rear-mounted),Camera(Wide,Ultrawide),IP68 dust/water resistant (up to 1.5m for 30 mins)', '3430 mAh', 55000),
(24, 'Google Pixel 3', '5.5 inches', '128GB', '4GB', 'Qualcomm SDM845 Snapdragon 845 (10 nm)', 'Fingerprint (rear-mounted),Camera(Wide,Ultrawide),IP68 dust/water resistant (up to 1.5m for 30 mins)', '2915 mAh', 48000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`, `Contact`, `City`, `Address`) VALUES
(1, 'Saurabh Agarwal', 'saurabhagarwals@yahoo.com', 'd00f5d5217896fb7fd601412cb890830', '9784919792', 'Bikaner', 'Gangashahar');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Id` int(11) NOT NULL,
  `Item_Id` int(11) NOT NULL,
  `Status` enum('Added To Cart','Confirmed') NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `User_Id` (`User_Id`,`Item_Id`),
  KEY `Item_Id` (`Item_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`Id`, `User_Id`, `Item_Id`, `Status`) VALUES
(1, 1, 4, 'Confirmed'),
(2, 1, 5, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`Item_Id`) REFERENCES `items` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
