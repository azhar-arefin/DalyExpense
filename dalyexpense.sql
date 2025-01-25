-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 01:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalyexpense`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('5c785c036466adea360111aa28563bfd556b5fba', 'i:2;', 1737530714),
('5c785c036466adea360111aa28563bfd556b5fba:timer', 'i:1737530714;', 1737530714);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demo1s`
--

CREATE TABLE `demo1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `age` varchar(20) NOT NULL,
  `name_demo_1` varchar(255) NOT NULL,
  `addres` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demo1s`
--

INSERT INTO `demo1s` (`id`, `age`, `name_demo_1`, `addres`, `created_at`, `updated_at`) VALUES
(1, '11', 'Cristal Hudson', '4744 Weber Mills Suite 605\nNew Devontefort, UT 49356', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(2, '12', 'Graham Abshire MD', '6106 Emelie Passage\nStonetown, NY 19553', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(3, '13', 'Dr. Adelia Renner', '2670 Otilia Cape\nOdiehaven, KS 05792-8773', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(4, '14', 'Percival McClure', '4325 Brett Heights\nRutherfordburgh, NV 15681', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(5, '15', 'Iva Mraz', '6960 Madalyn Rapid Suite 102\nJonborough, MA 77609', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(6, '16', 'Enos Buckridge', '18379 Auer Mill Apt. 543\nLennaburgh, NV 37303', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(7, '17', 'Prof. Theodore Ziemann', '2264 Hettinger Ramp Suite 051\nLake Rebeccaland, NJ 55684-8065', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(8, '18', 'Carlie Abbott', '6089 Welch Parkway Apt. 508\nKeelingside, KS 76229-3860', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(9, '19', 'Amos Boehm', '95466 Bergnaum Ports\nWest Eloyfurt, VA 36490-9277', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(10, '20', 'Josianne Toy', '914 Kendra Islands Suite 316\nJordynmouth, CA 85622', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(11, '21', 'Ellen Boyer', '80843 Lucie Stream\nNorth Donaldview, WI 53815', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(12, '22', 'Jayme Fisher', '918 Weldon Terrace Suite 509\nLake Javier, VT 89971-7218', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(13, '', 'Dr. Hazel Lueilwitz IV', '32153 Heathcote Track Suite 912\nWest Aldenview, IA 90669-3172', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(14, '', 'Dr. Arlene Rutherford', '5442 Schneider Dam Suite 439\nWilkinsonmouth, MO 92777-4920', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(15, '', 'Laurie Ortiz', '74225 Bahringer Mission\nEast Johnsonberg, UT 39563-6200', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(16, '', 'Prof. Orville Deckow', '18127 Beahan Tunnel Suite 931\nRashawnton, IL 53464', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(17, '', 'Mrs. Genoveva Kuvalis', '807 Renner Unions\nWest Merlin, VT 96180-3247', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(18, '', 'Dr. Cheyanne Roberts II', '14629 Nolan Canyon Suite 621\nLake Jasonton, TX 74893', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(19, '', 'Laurie Torphy', '38466 Kris Stravenue\nNew Obieside, CO 85326-3216', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(20, '', 'Prof. Devante Satterfield', '165 Lillie Isle\nMarquardtland, GA 26175-5947', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(21, '', 'Destiney Hettinger', '94154 Bernhard Curve Apt. 228\nJerdefort, MN 44214-1250', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(22, '', 'Susanna Breitenberg', '206 Stanton Vista\nMarianaburgh, SD 86624-6916', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(23, '', 'Mrs. Kacie Hauck', '63691 Nader Burgs\nWiegandburgh, DE 20731', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(24, '', 'Janessa Ferry', '43610 Bosco Locks\nAdamsport, NM 91742', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(25, '', 'Mrs. Ardith Feest Jr.', '64683 Murphy Valley\nEast Albamouth, MT 75845-4063', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(26, '', 'Dr. Aron Weissnat DDS', '7828 Kreiger Flat\nWest Joetown, MN 53998-5036', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(27, '', 'Miss Vincenza Towne', '267 Cremin Avenue\nSigmundshire, PA 41257', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(28, '', 'Dustin Kris', '5486 Carlie Village Suite 161\nBergstromstad, SD 09877', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(29, '', 'Prof. Rita McLaughlin', '41526 Asa Meadows Suite 999\nMarksstad, MT 07699', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(30, '', 'Mariah Gutkowski Jr.', '87885 Miracle Throughway Apt. 123\nEast Fritzview, LA 40586-6438', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(31, '', 'Hellen Brakus', '143 Schmidt Burg Apt. 975\nAdolfomouth, TN 82798-3759', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(32, '', 'Mr. Jake Walker I', '247 Lexie Plains Suite 818\nPort Jaydonborough, WY 40512', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(33, '', 'Silas Carter', '1570 Eulalia Loop Apt. 482\nNew Prestonchester, MI 78571', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(34, '', 'Melissa Wunsch', '29055 Telly Brooks\nEast Marquesmouth, OK 96005', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(35, '', 'Mr. Shad Wisoky Sr.', '46699 Luettgen Knoll\nEthylhaven, IN 45796-8128', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(36, '', 'Rylee Lowe', '19418 Hettie Fall\nSouth Torrance, KY 57845-8731', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(37, '', 'Mrs. Emely Hills PhD', '8510 Schmitt Burgs\nWisozkburgh, OR 79437', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(38, '', 'Dr. Meaghan Lynch', '78092 Donna Glen Suite 490\nWalterside, IA 96521-5041', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(39, '', 'Mr. Otho Grimes IV', '77275 Corine Locks Suite 665\nKossborough, ME 47096', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(40, '', 'Ross Schmitt', '11131 Reagan Square Apt. 893\nNorth Selmershire, TN 87951', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(41, '', 'Brendon Parisian', '5880 Cummings Prairie Apt. 345\nFelipaton, AZ 45519-8501', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(42, '', 'Kurt Quitzon', '61595 Thiel Field\nHahnchester, KS 84024-7537', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(43, '', 'Kaleigh Torphy', '361 Beatty Knoll Apt. 193\nSouth Orlandoport, MA 37616', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(44, '', 'Doug Hagenes', '398 Cameron Trafficway Apt. 489\nEast Cassandreport, KY 17190', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(45, '', 'Hailey Cartwright PhD', '722 White Lake Apt. 698\nTurnerchester, WI 09287', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(46, '', 'Eda Heathcote', '36492 Joelle Brooks\nMacyland, UT 90416-9228', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(47, '', 'Jeramie Kihn', '87872 Dedrick Plains Suite 481\nNew Ethel, NC 66100-7388', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(48, '', 'Aliza Brakus', '589 Bruen Bypass Apt. 460\nPort Nikkoborough, TX 06604', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(49, '', 'Dr. Eleanore Monahan IV', '253 Casper Inlet Apt. 857\nSouth Mckenzie, MD 03041', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(50, '', 'Gwen Fadel II', '60002 Itzel Skyway\nNew Addiemouth, NY 18373-2815', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(51, '', 'Ignatius Bogan IV', '235 Maggio Island\nSallyfurt, MO 09698', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(52, '', 'Raphaelle Moore', '92727 Stamm Crescent\nRoobfort, VA 62541-9332', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(53, '', 'Amani Casper', '2347 Noel Pine\nKesslerfort, OK 01161', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(54, '', 'Octavia Crooks', '38423 Wendy Club\nZboncakbury, HI 19999-7884', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(55, '', 'Seth Kirlin', '44583 Sadie Street\nNorth Sean, KY 83555-7110', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(56, '', 'Rafael Sporer', '2346 Wilderman Village Suite 346\nElwinhaven, OR 90179', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(57, '', 'Ms. Hulda Ondricka MD', '77129 Mekhi Plains\nNorth Angelitaland, OH 20073', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(58, '', 'Mr. Mike Hudson', '4902 Orn Meadow Suite 583\nRowestad, CO 55751-3209', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(59, '', 'Kennedy Sauer', '15661 Mann Field\nEast Destineyland, DE 65179', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(60, '', 'Demond Bergnaum', '112 Effie Heights\nErnserberg, MI 28224', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(61, '', 'Geovany Hudson I', '4174 Isobel Grove Suite 946\nStanmouth, DE 94575', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(62, '', 'Abraham Kessler', '21109 Kassandra Expressway\nColleenmouth, VT 22031-4060', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(63, '', 'Nona Auer', '1355 Joyce Freeway\nDamarisland, DC 55008', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(64, '', 'Kasey Grady', '5648 Langworth Plains\nMafaldafort, NM 68084-4247', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(65, '', 'Brennan Davis', '5144 Wolf Flat Apt. 615\nNorth Laney, AR 06514', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(66, '', 'Mr. Bertram Konopelski I', '647 Pascale Key Apt. 286\nGleasonfurt, VT 00265-1621', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(67, '', 'Wilma Jacobs', '24712 Emerald Mall\nHarveyville, RI 26731-1229', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(68, '', 'Tracey Hegmann V', '27836 Casper Meadows Apt. 556\nSouth Nora, TN 02914', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(69, '', 'Leopold Hills', '42686 Huel Village Apt. 753\nEast Alexaneville, NY 60507', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(70, '', 'Cora Cartwright', '63961 Evangeline Valley Suite 617\nSouth Blakeberg, NC 02003', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(71, '', 'Shemar Becker Sr.', '702 Celestine Unions\nSouth Andresland, NH 61815-9479', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(72, '', 'Khalid Smitham', '6515 Jason Shores Suite 488\nWest Darbyview, WV 48528', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(73, '', 'Mohammad Luettgen', '77950 King Squares\nBrownstad, VA 43728-3431', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(74, '', 'Elijah Fahey', '2250 Prudence Mountains\nWest Jettie, NJ 57007-6669', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(75, '', 'Melyssa Reinger DVM', '62336 Schaden Bridge\nWest Mabelleside, AR 22204', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(76, '', 'Dr. Terry O\'Keefe', '62711 Schoen Circle\nSchoenhaven, TN 37188-7033', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(77, '', 'Prof. Trevor Orn', '56062 Kennedy Place Suite 380\nPort Emma, GA 02455', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(78, '', 'Savanah Jenkins', '4198 Mohr Via Suite 285\nWest Maximilliahaven, MS 29619', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(79, '', 'Ottilie Lehner', '53471 Muriel Forks\nSawaynport, FL 78747', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(80, '', 'Mr. Jedidiah Kozey', '125 Jefferey Islands\nPort Hazelborough, DE 80646', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(81, '', 'Ronny Huel', '324 Lempi Springs\nMcCulloughfort, PA 43464-9969', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(82, '', 'Isaias Cole Jr.', '9719 Gulgowski Branch Suite 244\nSharonberg, MT 19626-6247', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(83, '', 'Velva Wisozk II', '964 Blanda Brook\nNorth Justicemouth, UT 09471', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(84, '', 'Judge Wilkinson', '93131 Moore Trail\nSouth Katlynn, FL 19868', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(85, '', 'Kraig Schumm DVM', '2922 Pearl Estate Apt. 796\nPollichchester, OR 28208', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(86, '', 'Demarcus Heidenreich', '755 Earlene Mission\nRoslynfurt, NV 60441-0486', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(87, '', 'Joesph Mayert', '583 Aliyah Grove\nMannside, UT 77403', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(88, '', 'Dr. Jadyn Moen', '74463 Kunde Key\nNorth Alenachester, WY 44387', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(89, '', 'Cassandra Bauch', '9872 Beatty Harbor\nNorth Tanya, AK 89478', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(90, '', 'Arlene Abernathy', '9135 Rowe Flats Suite 457\nWest Nigelside, CA 22915', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(91, '', 'Jess Doyle Jr.', '71220 Sauer Row Suite 265\nMatildeport, HI 94925-3740', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(92, '', 'Johnnie Reynolds', '3068 Zack Street\nMichelberg, HI 16701', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(93, '', 'Mr. Christop Emard III', '95491 Murazik Islands Suite 782\nTrompmouth, ID 76695', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(94, '', 'Bonita Stracke DDS', '98216 Chelsie Brook Apt. 393\nSouth Jacklyn, NE 75330', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(95, '', 'Lora Lubowitz', '3229 Batz Spur\nLake Liliane, DE 48494-3908', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(96, '', 'Ms. Mittie Kessler Jr.', '2120 Christiansen Village\nAlfonzohaven, AR 48100', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(97, '', 'Celestino Jerde', '69831 Ova Island Apt. 163\nMarquiseshire, ND 07483-1740', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(98, '', 'Gianni Runolfsdottir', '803 Botsford Stravenue\nColbytown, OK 88820-9689', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(99, '', 'Samantha Friesen', '66777 Spencer Ports Suite 124\nLake Jalynmouth, NH 96513-0313', '2025-01-18 07:51:15', '2025-01-18 07:51:15'),
(100, '', 'Emmanuel Gaylord', '413 Harrison Field\nElliotttown, SD 08001', '2025-01-18 07:51:15', '2025-01-18 07:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `demo2s`
--

CREATE TABLE `demo2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `my_image` varchar(255) NOT NULL,
  `name_demo_2` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demo2s`
--

INSERT INTO `demo2s` (`id`, `my_image`, `name_demo_2`, `addres`, `created_at`, `updated_at`) VALUES
(1, 'a', 'Donna Block IV', '3045 Micah Mountain\nRaheemshire, CO 84974', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(2, 'ab', 'Clair Crist', '533 Lincoln Skyway\nBeatriceburgh, IN 21754', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(3, 'abc', 'Raina Buckridge Jr.', '24858 Ford Crossroad Apt. 129\nCartwrightberg, CA 13794', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(4, 'abcd', 'Ethan Trantow II', '15999 Kailyn Fall\nBilliefort, OH 96430', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(5, 'abcde', 'Prof. Audie Moen PhD', '984 Green Causeway Apt. 412\nMantebury, GA 61689-1059', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(6, 'abcdef', 'Mr. Nicklaus Botsford DDS', '654 Cremin Rest Apt. 934\nPort Kaycee, PA 70641', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(7, 'aabcdefg', 'Verona Wilderman', '3566 Warren Lights Apt. 331\nWest Aniyaborough, OK 50916', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(8, 'abcdefgh', 'Beulah Bogisich', '9607 DuBuque Cove Suite 346\nLebsackville, OK 69379', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(9, 'abcdefghi', 'Bradford Kris I', '628 Schaefer Forks\nNew Tate, AL 49741-9558', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(10, 'abcdefghij', 'Chaya Smitham', '12035 Thad Knolls\nLake Asha, CO 25965-9936', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(11, 'abcdefghijk', 'Prof. Johathan Towne I', '52043 Jacinto Park Apt. 431\nLake Elyssaview, MN 34654', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(12, 'abcdefghijkl', 'Gavin Schumm', '8078 Ruthie Neck Apt. 298\nStuartfurt, IL 21880', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(13, '', 'Lora Willms', '200 Herman Forks\nWest Maxwelltown, AR 01917', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(14, '', 'Dr. Justus Hilpert', '13784 Gusikowski Manor Suite 970\nJustineton, AL 92320-2554', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(15, '', 'Kyleigh Luettgen', '18990 Esmeralda Skyway\nNicoleland, ND 39204-6264', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(16, '', 'Mrs. Elza Runte DDS', '516 Herta Summit\nWest Russelstad, AK 15872', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(17, '', 'Dannie Miller', '1185 Maxie Village Apt. 045\nWest Dorisshire, ME 43306', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(18, '', 'Dr. Ewell Wolf I', '863 Johann Radial\nWest Ludwig, WA 52209-4710', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(19, '', 'Eula Auer MD', '254 Napoleon Harbors\nLake Arielletown, AZ 92575-0606', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(20, '', 'Gwendolyn Gottlieb', '7939 Erna Drive Suite 706\nJulieport, WV 96644', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(21, '', 'Sanford Satterfield', '16671 Gerhold Brook Suite 553\nAmyhaven, NE 02592-6092', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(22, '', 'Camron Heaney', '218 Marty Viaduct Apt. 264\nEast Rafaelaville, TN 26984-9457', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(23, '', 'Connor Anderson', '1808 Jesus Loop Apt. 340\nNorth Newtonview, LA 58697-3520', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(24, '', 'Tony Moore', '88038 Bechtelar Manors Suite 600\nRonview, KY 97871-9849', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(25, '', 'Darrell Halvorson', '9424 Aric Drive Suite 326\nBartolettistad, IL 88455-5086', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(26, '', 'Rachel Quigley DDS', '11012 Reichert Cape Suite 710\nIgnacioton, MI 54855-5295', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(27, '', 'Isabella Roberts II', '97606 Lemke Mews\nGorczanymouth, AK 97908', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(28, '', 'Maci Lemke', '895 Thiel Spring\nSouth Otiliamouth, WY 87781-8342', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(29, '', 'Miss Maureen Hegmann', '5956 Rahul Course Apt. 602\nRodmouth, ME 83956', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(30, '', 'Mrs. Citlalli Swaniawski Jr.', '32528 Rossie Estate Suite 627\nEast Eldon, WA 85592', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(31, '', 'Brook Lehner', '155 Keira Hollow Suite 566\nHillsmouth, NH 41414-1977', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(32, '', 'Dangelo Jakubowski II', '2441 Steuber Loaf Apt. 759\nHerzogton, WV 74661-6231', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(33, '', 'Mrs. Delores Dibbert', '28107 Kerluke Via\nEast Nico, WI 51839', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(34, '', 'Cornell Thompson', '70641 Savanna Centers\nRahsaanland, MN 88972', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(35, '', 'Frances Carter', '14722 Drew Crest Suite 638\nGinaport, MN 98477', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(36, '', 'Jennie Brekke', '7345 Antonio Shoals\nGarrickland, LA 71440-1179', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(37, '', 'Deontae McKenzie DVM', '826 Jerel Course Suite 777\nDeltaton, LA 53449', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(38, '', 'Kristy Mosciski', '94831 Jerrell Crescent Suite 277\nNew Sid, FL 41088', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(39, '', 'Alfreda Connelly DDS', '8636 Malika Forest\nArlieside, WI 30957-6686', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(40, '', 'Juliana Hahn', '443 Phoebe Meadow Suite 199\nNew Kyleigh, ND 47955-8460', '2025-01-18 07:53:06', '2025-01-18 07:53:06'),
(41, '', 'Anderson Hudson', '5741 Purdy Isle\nDenismouth, MT 87822', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(42, '', 'Mr. Gustave Hudson IV', '4069 Lemke Keys Apt. 964\nMaryville, IL 46427-9046', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(43, '', 'Mr. Jamal Kilback', '51836 Wilma Roads Suite 877\nBergeberg, WI 44304', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(44, '', 'Cathryn O\'Connell', '63281 Roob Viaduct Apt. 959\nWest Elizashire, GA 75867', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(45, '', 'Dr. Amani Prosacco', '18643 Jaskolski Wall\nNorth Tanner, MS 53193', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(46, '', 'Albin Crooks', '85113 Modesta Roads Apt. 057\nLake Letitiamouth, NE 46350-4501', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(47, '', 'Prof. Lucinda Pagac', '1711 Volkman Field Apt. 402\nGleichnerburgh, SC 89748-7575', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(48, '', 'Mrs. Esther Auer Sr.', '81374 Watsica Branch\nFreedafort, NY 19525', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(49, '', 'Zoe Kuphal', '981 Kilback Walks\nNorth Ned, IL 85265-8951', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(50, '', 'Emmitt Anderson', '63669 Claudine Street\nWest Christopher, DC 78967-8093', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(51, '', 'Adriana Bosco', '12404 Rey Estates\nReichelberg, ID 35505-3265', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(52, '', 'Kevon Skiles', '3271 Purdy Estate Apt. 492\nSouth Jovanton, TX 36755', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(53, '', 'Miss Daphnee Jast', '9560 Denis Greens\nJakubowskiborough, SC 77545-4596', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(54, '', 'Camron Schmeler', '1012 Windler Port\nNorth Margret, WI 69122', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(55, '', 'Carolyn Bogisich', '97704 Littel Greens\nNorth Vernborough, LA 22485', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(56, '', 'Prof. Katarina Collier', '88230 Elenor Neck\nPort Natalialand, IN 64419', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(57, '', 'Mr. Brendon Williamson DVM', '56134 Euna Lakes\nNew Malvinashire, TN 40127-1924', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(58, '', 'Kaelyn Kshlerin', '922 Borer Course Apt. 711\nNew Henriettefurt, WA 57156-1912', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(59, '', 'Nettie Rohan MD', '587 Emmy Shoal\nDelilahberg, MI 47564', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(60, '', 'Paul McCullough IV', '52491 Nikolaus Burgs\nDareland, MT 59697', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(61, '', 'Prof. Katrine Brakus III', '6747 Gina Stravenue\nFlatleystad, MI 71283-5172', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(62, '', 'Nelle Klein', '6311 Mertz Falls\nPricefort, AR 54677', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(63, '', 'Wilfred Pollich', '942 Mina Landing Suite 108\nNew Jayson, MN 03377-2563', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(64, '', 'Evans Kilback', '555 Kohler Stravenue Suite 819\nNadertown, CT 00617', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(65, '', 'Mrs. Onie D\'Amore PhD', '73320 Schuster Forges\nAudreanneton, KY 14357', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(66, '', 'Mr. Koby Conn Jr.', '97280 Nikki Course\nJovanyville, WA 26945', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(67, '', 'Flavie Koepp IV', '3510 Giuseppe Plain Apt. 404\nKayceeburgh, CO 32133-7265', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(68, '', 'Jennings Greenholt', '336 Becker Cove\nKonopelskihaven, TN 16415', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(69, '', 'Angel Von', '822 Neha Ridge Apt. 363\nNorth Juniusland, TX 66731', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(70, '', 'Andre Nader', '3130 Renner Terrace\nNew Bettystad, NV 42479', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(71, '', 'Ernestina Prosacco', '4315 Kailee Vista Suite 567\nQuitzonhaven, NC 60912-4946', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(72, '', 'Prof. Hoyt Hessel', '9358 Schimmel Mount\nWest Jaron, SC 13391-4640', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(73, '', 'Caden Bechtelar', '687 Lubowitz Divide Suite 267\nMullertown, MD 51863', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(74, '', 'Alford Bosco', '51671 Paucek Harbors\nWilsonburgh, WI 78823-0211', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(75, '', 'Felicity Sauer', '94033 Kuhlman Shoal Suite 562\nSouth Mertie, DE 59514-5533', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(76, '', 'Shayne Kilback', '33332 Hessel Fields\nWest Merl, OR 51754-3562', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(77, '', 'Helga Thiel', '567 Jonatan Valleys Suite 402\nNew Horaceton, CT 36783', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(78, '', 'Johnnie Mante', '11764 Metz Street Suite 981\nLake Sheila, ME 84261', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(79, '', 'Nikko Becker', '36893 Kassulke Fort Suite 406\nNew Stevie, WI 10341-4811', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(80, '', 'Dr. Maximus Pacocha Jr.', '592 Enrico Rue\nNorth Marquis, MO 71204-3841', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(81, '', 'Jimmy Schulist II', '140 Kris Village Apt. 809\nPort Aubrey, GA 97823', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(82, '', 'Justice Moore', '340 Wolff Stream\nNorth Buck, HI 41163-3626', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(83, '', 'Dr. Laurence Johns III', '378 Brakus Inlet\nJarrettmouth, NY 54008', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(84, '', 'Eliseo O\'Reilly', '49252 Heathcote Turnpike Apt. 119\nBarrowsmouth, NE 98983', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(85, '', 'Beaulah Stamm MD', '380 Smith Glen Apt. 203\nSouth Princessshire, WY 90155-4882', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(86, '', 'Miss Lauriane Koelpin', '87418 Feil Creek Apt. 152\nEast Laverne, NY 27196-0474', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(87, '', 'Erling Donnelly', '2002 Sage Inlet\nTiatown, WA 08209', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(88, '', 'Erwin Rowe', '16076 Ayla Path Suite 630\nPort Kellytown, ND 77011', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(89, '', 'Toby Goyette', '572 Ana Knoll Suite 645\nNew Domingostad, VT 64539-1870', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(90, '', 'Miller Wolff', '14132 Rosella Plain\nEast Darian, CO 57761-2893', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(91, '', 'Nikolas Hayes', '6413 Corkery Plain\nLake Armani, NC 96523', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(92, '', 'Mr. Davin Jenkins', '80718 Lindgren Loop Apt. 734\nLelahfort, MT 26646-7729', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(93, '', 'Carrie Klein', '92586 Kayleigh Estates Suite 935\nEast Constantintown, WY 04542', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(94, '', 'Flavio Hartmann', '7453 Bauch Island Suite 612\nHudsonville, MD 43899', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(95, '', 'Ms. Violette Ullrich IV', '92877 Delphia Mews\nFunkhaven, FL 46143', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(96, '', 'Dannie Mante PhD', '90514 Fleta Course Apt. 061\nValliestad, NE 19513-9057', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(97, '', 'Dr. Prudence Corwin Jr.', '21229 Rebeca Knoll\nWest Olenmouth, TN 53440-3584', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(98, '', 'Angus Hintz', '52226 Orie Ford\nJazminport, MA 19128-9496', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(99, '', 'Jovan Beer', '36591 Violette Cove Suite 044\nLake Whitneyburgh, ID 69246', '2025-01-18 07:53:07', '2025-01-18 07:53:07'),
(100, '', 'Romaine Ratke', '92785 Kaylee Spurs Suite 294\nBogisichton, IL 10495-4860', '2025-01-18 07:53:07', '2025-01-18 07:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `demo3s`
--

CREATE TABLE `demo3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `demo1_id` bigint(20) UNSIGNED NOT NULL,
  `demo2_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demo3s`
--

INSERT INTO `demo3s` (`id`, `demo1_id`, `demo2_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 5, NULL, NULL),
(5, 2, 10, NULL, NULL),
(6, 11, 2, NULL, NULL),
(7, 10, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `custom_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `user_id`, `amount`, `category`, `custom_date`, `created_at`, `updated_at`) VALUES
(1, 2, 1111.00, 'food', '2025-01-18', '2025-01-18 12:53:15', '2025-01-18 12:53:15'),
(2, 2, 200.00, 'education', '2025-01-09', '2025-01-18 12:53:47', '2025-01-18 12:53:47'),
(3, 3, 122.00, 'education', '2025-01-04', '2025-01-18 13:01:04', '2025-01-18 13:01:04'),
(4, 2, 2777.00, 'others', '2025-01-09', '2025-01-19 06:45:53', '2025-01-19 06:45:53'),
(5, 2, 111.00, 'food', '2025-01-19', '2025-01-19 06:52:36', '2025-01-19 06:52:36'),
(6, 2, 111.00, 'food', '2025-01-02', '2025-01-19 09:14:46', '2025-01-19 09:14:46'),
(7, 2, 23.00, 'transport', '2025-01-19', '2025-01-19 09:15:00', '2025-01-19 09:15:00'),
(8, 2, 500.00, 'bills', '2025-01-19', '2025-01-19 09:25:18', '2025-01-19 09:25:18'),
(9, 2, 500.00, 'food', '2025-01-19', '2025-01-19 09:26:07', '2025-01-19 09:26:07'),
(10, 2, 100.00, 'food', '2024-12-31', '2025-01-19 09:29:31', '2025-01-19 09:29:31'),
(13, 4, 500.00, 'food', '2025-01-11', '2025-01-21 00:22:58', '2025-01-21 00:22:58'),
(14, 2, 44.00, 'education', '2025-01-22', '2025-01-22 02:29:26', '2025-01-22 02:29:26'),
(15, 2, 65.00, 'food', '2025-01-22', '2025-01-22 02:29:36', '2025-01-22 02:29:36'),
(16, 2, 343.00, 'bills', '2025-01-22', '2025-01-22 02:29:45', '2025-01-22 02:29:45'),
(17, 2, 44.00, 'transport', '2025-01-22', '2025-01-22 05:55:22', '2025-01-22 05:55:22'),
(18, 2, 77.00, 'food', '2025-01-22', '2025-01-22 05:55:30', '2025-01-22 05:55:30'),
(19, 2, 1000.00, 'bills', '2025-01-22', '2025-01-22 05:55:39', '2025-01-22 05:55:39'),
(20, 2, 777.00, 'others', '2025-01-22', '2025-01-22 05:55:53', '2025-01-22 05:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `category` varchar(255) NOT NULL,
  `custom_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `user_id`, `amount`, `category`, `custom_date`, `created_at`, `updated_at`) VALUES
(1, 2, 333.00, 'salary', '2025-01-18', '2025-01-18 12:28:55', '2025-01-18 12:28:55'),
(2, 2, 1000.00, 'savings', '2025-01-03', '2025-01-18 12:43:12', '2025-01-18 12:43:12'),
(4, 3, 1234.00, 'salary', '2025-01-01', '2025-01-18 13:00:20', '2025-01-18 13:00:20'),
(5, 3, 121.00, 'salary', '2025-01-14', '2025-01-18 13:00:33', '2025-01-18 13:00:33'),
(6, 3, 2000.00, 'deposits', '2025-01-18', '2025-01-18 13:07:56', '2025-01-18 13:07:56'),
(7, 3, 111.00, 'deposits', '2025-01-18', '2025-01-18 13:08:33', '2025-01-18 13:08:33'),
(8, 2, 500.00, 'deposits', '2024-09-30', '2025-01-19 01:24:39', '2025-01-19 01:24:39'),
(9, 2, 3000.00, 'deposits', '2024-12-29', '2025-01-19 01:24:55', '2025-01-19 01:24:55'),
(10, 2, 355.00, 'salary', '2024-12-31', '2025-01-19 01:25:12', '2025-01-19 01:25:12'),
(11, 2, 33.00, 'salary', '2025-01-19', '2025-01-19 07:12:25', '2025-01-19 07:12:25'),
(12, 2, 555.00, 'salary', '2025-01-19', '2025-01-19 07:12:55', '2025-01-19 07:12:55'),
(13, 2, 111.00, 'deposits', '2025-01-19', '2025-01-19 09:14:22', '2025-01-19 09:14:22'),
(14, 2, 100.00, 'savings', '2025-01-10', '2025-01-19 09:14:34', '2025-01-19 09:14:34'),
(15, 2, 10000.00, 'salary', '2025-01-19', '2025-01-19 09:25:05', '2025-01-19 09:25:05'),
(16, 2, 1000.00, 'salary', '2025-01-19', '2025-01-19 09:25:59', '2025-01-19 09:25:59'),
(17, 4, 1000.00, 'deposits', '2025-01-20', '2025-01-20 15:08:52', '2025-01-20 15:08:52'),
(18, 4, 2000.00, 'savings', '2025-01-11', '2025-01-20 15:09:06', '2025-01-20 15:09:06'),
(19, 4, 111.00, 'salary', '2025-01-17', '2025-01-21 23:49:12', '2025-01-21 23:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '0001_01_01_000000_create_users_table', 1),
(10, '0001_01_01_000001_create_cache_table', 1),
(11, '0001_01_01_000002_create_jobs_table', 1),
(12, '2025_01_10_182310_create_incomes', 2),
(13, '2025_01_10_182402_create_expenses', 3),
(14, '2025_01_15_070402_create_quick_notes_table', 3),
(15, '2025_01_17_203835_create_demo1s_table', 3),
(16, '2025_01_18_115736_create_demo2s_table', 3),
(17, '2025_01_18_115812_create_demo3s_table', 4),
(18, '2025_01_19_124019_create_reports_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quick_notes`
--

CREATE TABLE `quick_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('D3oGtPI3yphpchnpHxXomvxjzbSgF5XkVOw6OlEw', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6InJlallJSjFpUkZwdmYzeU8wWVRwdThYSThHTFVqTDBuejFkQ3NUakgiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1737547152);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `otp`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Azharul Islam', 'arefinmojumder825@gmail.com', NULL, 1640764896, '$2y$12$wOLOQfVA0RdMuFhtXq9xoep.tCPzZWT2XX.FMrp0dBRwRfwR6Kz3i', 0, 'db2oEPi0wLQWNdluuYawzzkj0ckkGF8NLiiKoEHGrIGZv4XCKIdqFu4Eil7R', '2025-01-18 11:13:36', '2025-01-18 11:13:36'),
(3, 'Azharul Islam', 'Light@adminhasan', NULL, 1640764896, '$2y$12$8FguSts3I5IUB2lyw8cGEeL6w3i4YO2LyMjv295DN6hSkhFoo4b6u', 0, 'HzZndUS3nw0WObjoWryE2iwoUFV6LhZqWfloP6YaFMZPEq8U5Li3OpB4CS6p', '2025-01-18 11:13:51', '2025-01-18 11:13:51'),
(4, 'Azharul Arefin', 'arefinmojumder@gmail.com', NULL, 1640764896, '$2y$12$netbHvHp9Gex/J6Nm4k5.e4USKBJcGpRQl/UH72TXmiXCfDYNfoHq', 0, 'b5PxGVrqiyCXtk7Y1CARtUjdlJT6Fq2Ix9qwPI6MB7IoVKDbSJ2BQDfqsVrR', '2025-01-20 15:08:33', '2025-01-20 15:08:33'),
(5, 'Azharul Islam', 'arefinmojumder82@gmail.com', NULL, 1640764896, '$2y$12$YrLgGqEMS0FGSB/NZuBZ9uQMJBU0vV21FTAcrn.QZoFdW4Pvc0BWe', 0, NULL, '2025-01-22 00:24:10', '2025-01-22 00:24:10'),
(6, 'Azharul Islam', 'arefinmojumder5@gmail.com', NULL, 1640764896, '$2y$12$SNmQ0ilV7xUKSVwhm5bPEut1VhwcKGQD8WpxwOL2E6K.TrYhSSO0C', 0, NULL, '2025-01-22 00:53:51', '2025-01-22 00:53:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `demo1s`
--
ALTER TABLE `demo1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo2s`
--
ALTER TABLE `demo2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo3s`
--
ALTER TABLE `demo3s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demo3s_demo1_id_foreign` (`demo1_id`),
  ADD KEY `demo3s_demo2_id_foreign` (`demo2_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incomes_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `quick_notes`
--
ALTER TABLE `quick_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo1s`
--
ALTER TABLE `demo1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `demo2s`
--
ALTER TABLE `demo2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `demo3s`
--
ALTER TABLE `demo3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quick_notes`
--
ALTER TABLE `quick_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demo3s`
--
ALTER TABLE `demo3s`
  ADD CONSTRAINT `demo3s_demo1_id_foreign` FOREIGN KEY (`demo1_id`) REFERENCES `demo1s` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `demo3s_demo2_id_foreign` FOREIGN KEY (`demo2_id`) REFERENCES `demo2s` (`id`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `incomes`
--
ALTER TABLE `incomes`
  ADD CONSTRAINT `incomes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
