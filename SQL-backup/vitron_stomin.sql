-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 авг 2016 в 15:23
-- Версия на сървъра: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitron_stomin`
--

-- --------------------------------------------------------

--
-- Структура на таблица `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` varchar(150) NOT NULL,
  `lat` double DEFAULT NULL,
  `long` double DEFAULT NULL,
  `comment` text,
  `filename` varchar(120) DEFAULT NULL,
  `device_model` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `upload_time`, `date`, `lat`, `long`, `comment`, `filename`, `device_model`) VALUES
(8, 67, '2016-07-28 11:23:10', '', 42.6817, 26.3229, 'Mn qk grad', '5798c8e6d41e1.jpg', ''),
(10, 69, '2016-07-28 11:23:10', '', 41.3851, 2.1734, 'i <3 Barcaaaaaaaaaaaaaaaa!!!!!', '5799d5aac9980.jpg', ''),
(11, 70, '2016-07-28 13:13:53', 'N/A', 25.2048, 55.2708, 'Go to Dubai and never go back', '579a051199338.jpg', 'N/A'),
(18, 70, '2016-07-28 14:05:54', '2016:07:28 15:44:54', 42.681784, 26.315078, '', '579a11429bac8.jpg', 'samsung SM-N910C'),
(20, 43, '2016-07-29 08:39:30', 'N/A', 42.5048, 27.4626, '', '579b16429602f.jpg', 'N/A'),
(21, 43, '2016-07-29 12:23:27', 'N/A', 45, 21, '', '579b4abf227eb.jpg', 'N/A'),
(22, 43, '2016-07-29 12:23:37', 'N/A', 9, 67, '5', '579b4ac94d9c2.jpg', 'N/A'),
(41, 70, '2016-08-01 14:37:03', 'N/A', -91, 2, '', '579f5e8fe0a6a.jpg', 'N/A'),
(43, 48, '2016-08-01 14:56:20', 'N/A', 45, 32, 'nice !!!', '579f6314e5912.jpg', 'N/A'),
(46, 48, '2016-08-02 10:47:10', '2011:07:22 01:35:31', -100, 190, '', '57a07a2e07c5a.jpg', 'SONY NEX-5'),
(49, 71, '2016-08-02 11:11:30', 'N/A', 9, 76, '', '57a07fe24a370.jpg', 'N/A'),
(56, 48, '2016-08-03 11:00:15', 'N/A', 44, 12, '', '57a1cebf734d3.jpg', 'N/A'),
(59, 48, '2016-08-03 11:14:42', 'N/A', 56, 56, '', '57a1d22287857.jpg', 'N/A');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`) VALUES
(35, 'izosa', '$2y$10$jNa2uBBcZOUaa.ojCsaikeLypJJZ2rGXemqOe7UIntywfZh/V0fvW', 'izosa'),
(41, 'adminP', '$2y$10$NAOyTU3Go/oD0DJgvF9ka.ul.vWPEZqCHy4KhC1C6DdsE1Pqz8Qbm', 'Admin Second'),
(42, 'admin', '$2y$10$ZdDC.7kc0hP8fXek2wz84eAJ91HYM/6iZ/zuPudQE9GjkkJ.wdkkK', 'admin'),
(43, 'stomin', '$2y$10$IVfztV8nhvOU8l5Hp.7x8ejuOjkxmuFnlBM5rLkuZNQN44vp8Q2am', 'Stoyan'),
(44, 'mitaksa', '$2y$10$81nTXfhTVtxHw69SDMWof.YxpzGf5hCiyla8tCQYljI1eDggan11S', 'Mitaka'),
(45, 'stoyan', '$2y$10$1WwfYqZmZB0saF/Lfc0WFO2bDg9JVduD0fZpWiGtnKazIRWlLXZAu', 'Stoyan Minchev'),
(46, 'incognito', '$2y$10$o9KWda.WgnDhEVDK4dU8ROsp4wU5LXobaLlo2taHSdT6upR4c/KqO', 'Justin Mar'),
(48, 'peter', '$2y$10$PW2FfrRRO6YNhm3RmATKneu8uDVz5juF4vP39cIRtvcuaiAJVJgkO', 'Peter Stoyanov'),
(57, 'pete', '$2y$10$QAGBfQZf6XifMRdHYBhDJ.ozB79H.Mqc2RuwklJL1HgGYg16GofyK', 'pete'),
(62, 'aaa', '$2y$10$w.j4BE.yMhMDyELANwvYle/qa4zi1D43CvpMaRNzDf/5.RvezCDkq', 'aaa'),
(63, 'des', '$2y$10$uoYIaFkFYldEUuAKmVVCX.yDIBMawGlagf6Mqd9zXC8mGU2Ba4oR.', 'dEs'),
(64, 'set', '$2y$10$vPdyfUBCNlzJrHrH4gpAeOp0U6V1V7KvR2QPM7e535d/mfS/V05kq', 'set'),
(65, 'mia', '$2y$10$prDoUs.kMP7IUIW/L60LnucX1ja1r5fVvRjPLcRKn3nxWVpOgeB4m', 'mia'),
(66, 'peten', '$2y$10$tRIDNFCC4ARSgUYXRch94uNRZ2IAuGM0/pkN2/1FE52TN3mJ7J1IO', 'Pet Len'),
(67, 'Icebox1', '$2y$10$dAv8ymuCAsU/hFJozPtQ.udszLvmRlQJbwsROUcvyPpgcmMKvG4tG', 'Mitko'),
(68, '000', '$2y$10$zK0xIh4lcMZrbN68WFFsYuGQ29Xvy2mfSTq8aAif3Jc31ILspmM6e', '000'),
(69, 'ioni', '$2y$10$gFX44OODP83C5tBEBYemcueBi53GoqvgrDH.tCcOTZzBJ1RZeNMni', 'Ioana M'),
(70, 'biskazz', '$2y$10$3YCnvry.KK2aM0xy5CbcVOMw7lMNHoUlDqGdM.8R3itX2SbDg7MCa', 'Biskazz Zzaksib'),
(71, 'err', '$2y$10$slQAEPu88j2lFFx6RD2Vr.zdmEOtniFC/f.MJvzK14eB0GBWjLxWS', 'err'),
(72, 'men', '$2y$10$h918iPzTrHx7lt7Xr0B2muioVPUPe/0pSA6j5BuI674y/CIiry.e2', 'Mat'),
(73, 'fly', '$2y$10$L4JoGDHPc1nmCxkV8rKHwu/hdPVTNpevIk2da00TI2iMCSOWtIkAe', 'Plane');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_users_id_fk` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
