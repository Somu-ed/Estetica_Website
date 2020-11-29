-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2020 at 04:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Estetica_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `short` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `date`, `author`, `category`, `heading`, `short`, `description`, `keywords`) VALUES
(1, 'post-thumbnail.png', '2020-06-25', 'Amit Ranjan Jena', 'Furniture', 'THE SOLUTION TO DISINFECTING FABRICS!', 'With new facts coming out on how to stay safe during a pandemic, one thing remains the same: personal hygiene. A virus does not remain on soft surfaces as much as it will on harder surfaces such as wood, metal plastics and laminates.', 'Personal Hygiene\r\nWith new facts coming out on how to stay safe during a pandemic, one thing remains the same: personal hygiene. A virus does not remain on soft surfaces as much as it will on harder surfaces such as wood, metal plastics and laminates.\r\n\r\nWe highly recommend washing your hands for approximately 20 seconds to ensure no spreading of the virus. That is the first of many steps to ensure your furniture is virus free!\r\n\r\nMaintaining the Fabrics\r\nAs people have their different techniques on how to clean furniture, there are four different methods to always remember!\r\nThese methods may vary depending on the type of fabric…\r\n\r\n1.Regular cleaning: This provides a daily cleaning that will remove any dust and/or debris that could damage the fabrics. This ensures that your furniture will look good for much longer.\r\n2.Vacuum Fabrics: Vacuuming provides a deeper clean to ensure that no dirt is left on the furniture that could slowly damage the furniture over time. Continue to do this and your furniture will remain better for longer!\r\n3.Removing stains: Stains by far are one thing to fear when it comes to your beautiful furniture. However, by using the right techniques to remove the stains, it will help provide a cleaner look to your fabrics. More details coming up!\r\n4.Deep Cleaning: Finally, depending on your fabrics, it is important to provide a deep clean to remove any build up of dirt. Methods may include steaming the fabrics, if removable, placing them in a washer or using other cleaners.', 'furniture,indoor'),
(2, 'post-thumbnail-6.png', '2020-06-24', 'Aditya Attri', 'Furniture', 'MODERN FURNITURE IN HEALTH FACILITIES', 'Whether it’s a doctor’s office or at the dentist, what is it that most patients hope to see once they enter through the door? A Beautiful seating area, an elegant but organized reception desk, and different accessories to make them feel comfortable.\r\n\r\n', 'What Look Are You Looking For?\r\nThe first things clients, patients and customers look at are the things that leave the biggest impression. Here at SohoConcept, modern furniture helps bring the whole room together. As explained before, we want to make the patient feel at home, feel comfortable and most importantly confident in the healthcare facility.\r\n\r\nLet’s start off with the variety of chairs SohoConcept has to offer. From the Soho wood chair that will look perfect in a pediatrician’s office to the Crescent wire chair suitable for every waiting room. There is a chair ready for every healthcare facility. The variety of chairs is endless and will without a doubt impress the patients and/or clients.\r\n\r\nSohoConcept doesn’t only offer the best appearance of modern furniture but ensures the greatest quality as well. Patients are in and out of healthcare facilities every day, which means the quality of modern furniture is crucial to ensure it being long lasting. The maintenance of the modern furniture we have to offer are a few quick easy steps to make certain that it stays in the best conditions for years to come.\r\n\r\nModern Furniture is sweeping the nation, and SohoConcept is ready to bring the right energy needed for your location. From homes, to Healthcare Facilities, we are ready!', 'furniture,estetica');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Upholstery'),
(2, 'Curtains'),
(3, 'Blinds'),
(4, 'Wall Coverings'),
(5, 'Carpets'),
(6, 'Flooring'),
(7, 'Bed Linen'),
(8, 'Cushions'),
(9, 'Artefacts'),
(10, 'Hospitality'),
(11, 'Customised');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `msg` varchar(2048) NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp(),
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `address`, `msg`, `time`, `date`) VALUES
(1, 'Nishant Narayan Rout', 'nishantnarayanrout@gmail.com', '+9163700171707', 'SRM IST, Kattankulathur, Room No 212, Nelson Mandela', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.', '2020-11-25 22:33:08', '2020-07-09'),
(2, 'Aditya Attri', 'aditya@gmail.com', '+918939353326', 'SRM IST, Kattankulathur, Room No 215, Nelson Mandela', 'Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.', '2020-11-25 22:38:28', '2020-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'nishantnarayanrout@gmail.com'),
(4, 'nishantnarayanrout@gmail.com'),
(5, 'ps@gmail.com'),
(6, 'psnew@gmail.com'),
(7, 'new@gmail.com'),
(8, 'final@gmail.com'),
(9, 'nishant@perfectshades.in');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `cat_id` int(50) NOT NULL,
  `subcat_id` int(50) NOT NULL,
  `p_img` text NOT NULL,
  `p_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `subcat_id`, `p_img`, `p_cat`) VALUES
(1, 7, 29, 'Pillow covers_1.jpg', 'Pillow Covers'),
(2, 7, 29, 'Pillow covers_2.jpg', 'Pillow Covers'),
(3, 7, 27, 'Dohar_1.jpg', 'Dohar'),
(4, 7, 27, 'Dohar_2.jpg', 'Dohar'),
(5, 7, 24, 'Bedsheet with Pillow Cover_1.jpg', 'Bedsheet with Pillow Cover'),
(6, 7, 24, 'Bedsheet with Pillow Cover_2.jpg', 'Bedsheet with Pillow Cover'),
(7, 7, 25, 'Bed cover_1.jpg', 'Bed Cover'),
(8, 7, 25, 'Bed cover_2.jpg', 'Bed Cover'),
(9, 7, 28, 'Bed runner_1.jpg', 'Bed Runner'),
(10, 7, 28, 'Bed runner_2.jpg', 'Bed Runner'),
(11, 7, 26, 'Comforter_1.jpg', 'Comforter'),
(12, 7, 26, 'Comforter_2.jpg', 'Comforter'),
(13, 3, 8, 'Roman Blinds.jpg', 'Roman Blinds'),
(14, 3, 8, 'Roman Blinds(1).jpg', 'Roman Blinds'),
(15, 3, 9, 'Roller Blinds.jpg', 'Roller Blinds'),
(16, 3, 9, 'Roller Blinds(1).jpg', 'Roller Blinds'),
(17, 3, 10, 'Vertical Blinds.jpg', 'Vertical Blinds'),
(18, 3, 10, 'Vertical Blinds(1).jpg', 'Vertical Blinds'),
(19, 3, 11, 'Venetian Blinds.jpg', 'Venetian Blinds'),
(20, 3, 11, 'Venetian Blinds(1).jpg', 'Venetian Blinds'),
(21, 3, 12, 'Luzon Blinds.jpg', 'Luzon Blinds'),
(22, 3, 12, 'Luzon Blinds(1).jpg', 'Luzon Blinds'),
(23, 5, 15, 'wall to wall carpet.jpg', 'Wall to Wall Carpet'),
(24, 5, 15, 'wall to wall carpet(1).jpg', 'Wall to Wall Carpet'),
(25, 5, 16, 'machine made carpet.jpg', 'Machine Made Carpet'),
(26, 5, 16, 'machine made carpet(1).jpg', 'Machine Made Carpet'),
(27, 5, 17, 'hand crafted carpets.jpg', 'Hand Crafted Carpet'),
(28, 5, 17, 'hand crafted carpets(1).jpg', 'Hand Crafted Carpet'),
(29, 5, 18, 'grass carpet.jpg', 'Grass Carpet'),
(30, 5, 18, 'grass carpet(1).jpg', 'Grass Carpet'),
(31, 6, 19, 'Wooden Flooring.jpg', 'Wooden Flooring'),
(32, 6, 19, 'Wooden Flooring(1).jpg', 'Wooden Flooring'),
(33, 6, 20, 'laminated flooring.jpg', 'Laminated Flooring'),
(34, 6, 20, 'laminated flooring(1).jpg', 'Laminated Flooring'),
(35, 6, 21, 'engineered wood flooring.jpg', 'Engineered Wood Flooring'),
(36, 6, 21, 'engineered wood flooring(1).jpg', 'Engineered Wood Flooring'),
(37, 6, 22, 'Vinyl Flooring_1.jpg', 'Vinyl Flooring'),
(38, 6, 22, 'Vinyl Flooring_2.jpg', 'Vinyl Flooring'),
(39, 6, 23, 'outdoor deck.jpg', 'Outdoor Deck'),
(40, 6, 23, 'outdoor deck(1).jpg', 'Outdoor Deck'),
(43, 9, 33, 'Wooden.jpg', 'Wooden Artifact'),
(44, 9, 33, 'Wooden(1).JPG', 'Wooden Artifact'),
(48, 9, 35, 'Metallic(1).JPG', 'Metallic Artifact'),
(49, 11, 43, 'Custom cushion fillers_1.jpg', 'custom cushion fillers'),
(50, 11, 43, 'Custom cushion fillers_2.jpg', 'custom cushion fillers'),
(51, 11, 44, 'Custom Curtain Fabric.JPG', 'Custom Curtain Fabric'),
(52, 11, 44, 'Custom Curtain Fabric(1).JPG', 'Custom Curtain Fabric'),
(53, 11, 45, 'Custom Upholstery Fabric_1.jpg', 'Custom Upholstery Fabric'),
(54, 11, 45, 'Custom Upholstery Fabric_2.jpg', 'Custom Upholstery Fabric'),
(55, 11, 46, 'Custom Special Finishes_1.jpg', 'Special Finished Fabric'),
(56, 11, 46, 'Custom Special Finishes_3.jpg', 'Special Finished Fabric'),
(57, 11, 47, 'Custom Blinds_1.jpg', 'Custom Blinds'),
(58, 11, 47, 'Custom Blinds_2.jpg', 'Custom Blinds'),
(59, 11, 49, 'Custom Rugs_1.jpg', 'Custom Rugs'),
(60, 11, 49, 'Custom Rugs_2.jpg', 'Custom Rugs'),
(61, 5, 15, 'wall to wall carpet 1.jpg', 'Wall to Wall Carpet'),
(62, 5, 15, 'wall to wall carpet 2.jpg', 'Wall to Wall Carpet'),
(63, 10, 36, 'bedsheet with pillow 1.jpg', 'Bedsheet with pillow cover'),
(64, 10, 36, 'bedsheet with pillow 2.jpg', 'Bedsheet with pillow cover'),
(65, 10, 36, 'bedsheet with pillow 3.jpg', 'Bedsheet with pillow cover'),
(66, 4, 13, 'Wall Coverings_1.jpg', 'Wallpapers'),
(67, 4, 13, 'Wall Coverings_2.jpg', 'Wallpapers'),
(68, 4, 13, 'Wall Coverings_3.jpg', 'Wallpapers'),
(69, 4, 13, 'Wall Coverings_4.jpg', 'Wallpapers'),
(70, 4, 13, 'Wall Coverings_5.jpg', 'Wallpapers'),
(71, 4, 13, 'Wall Coverings_6.jpg', 'Wallpapers'),
(72, 4, 13, 'Wall Coverings_7.jpg', 'Wallpapers'),
(73, 4, 13, 'Wall Coverings_8.jpg', 'Wallpapers'),
(74, 4, 13, 'Wall Coverings_9.jpg', 'Wallpapers'),
(75, 4, 13, 'Wall Coverings_10.jpg', 'Wallpapers'),
(76, 4, 14, 'Poster_1.jpg', 'Posters'),
(77, 4, 14, 'Poster_2.jpg', 'Posters'),
(78, 10, 37, 'Pillows_1.jpg', 'Pillows'),
(79, 10, 37, 'Pillows_2.jpg', 'Pillows'),
(80, 10, 38, 'mattress.jpg', 'Mattress'),
(81, 10, 38, 'mattress(1).jpg', 'Mattress'),
(82, 10, 39, 'Towels_1.jpg', 'Towels'),
(83, 10, 39, 'Towels_2.jpg', 'Towels'),
(84, 10, 40, 'Mattress Protector_1.jpg', 'Mattress Protector'),
(85, 10, 40, 'Mattress Protector_2.jpg', 'Mattress Protector'),
(86, 10, 42, 'bath mat.jpg', 'Bath Mat'),
(87, 10, 42, 'bath mat(1).jpg', 'Bath Mat'),
(88, 11, 48, 'Custom Wallpaper_1.jpg', 'Custom Wallpaper'),
(89, 11, 48, 'Custom Wallpaper_2.jpg', 'Custom Wallpaper'),
(90, 11, 48, 'Custom Wallpaper_3.jpg', 'Custom Wallpaper'),
(91, 11, 48, 'Custom Wallpaper_4.jpg', 'Custom Wallpaper'),
(92, 11, 48, 'Custom Wallpaper_5.jpg', 'Custom Wallpaper'),
(93, 11, 48, 'Custom Wallpaper_6.jpg', 'Custom Wallpaper'),
(94, 11, 48, 'Custom Wallpaper_7.jpg', 'Custom Wallpaper'),
(95, 11, 48, 'Custom Wallpaper_8.jpg', 'Custom Wallpaper'),
(96, 11, 46, 'Fire retardant fabric.jpg', 'Fire Retardant Fabric'),
(97, 11, 46, 'Water repellant fabric.jpg', 'Water Repellant Fabric'),
(98, 7, 25, 'Bed cover_3.jpg', 'Bed Cover'),
(99, 7, 28, 'Bed runner_3.jpg', 'Bed Runner'),
(100, 7, 24, 'Bedsheet with Pillow Cover_3.jpg', 'Bedsheet with Pillow Cover'),
(101, 7, 26, 'Comforter_3.jpg', 'Comforter'),
(102, 7, 26, 'Comforter_3.jpg', 'Comforter'),
(103, 7, 27, 'Dohar_3.jpg', 'Dohar'),
(104, 7, 27, 'Dohar_4.jpg', 'Dohar'),
(105, 7, 27, 'Dohar_5.jpg', 'Dohar'),
(106, 8, 30, 'Cushion-1.jpg', 'Cushion'),
(107, 8, 30, 'Cushion-2.jpg', 'Cushion'),
(108, 8, 30, 'Cushion-3.jpg', 'Cushion'),
(109, 8, 30, 'Cushion-4.jpg', 'Cushion'),
(110, 8, 30, 'Cushion-5.jpg', 'Cushion'),
(111, 8, 30, 'Cushion-6.jpg', 'Cushion'),
(112, 8, 30, 'Cushion-7.jpg', 'Cushion'),
(113, 8, 30, 'Cushion-8.jpg', 'Cushion'),
(114, 8, 30, 'Cushion-9.jpg', 'Cushion'),
(115, 8, 30, 'Cushion-10.jpg', 'Cushion'),
(116, 8, 30, 'Cushion-11.jpg', 'Cushion'),
(117, 6, 22, 'Vinyl Flooring_3.jpg', 'Vinyl Flooring'),
(118, 6, 22, 'Vinyl Flooring_4.jpg', 'Vinyl Flooring'),
(119, 2, 6, 'Curtains_1.jpg', 'Curtains'),
(120, 2, 6, 'Curtains_2.jpg', 'Curtains'),
(121, 2, 6, 'Curtains_3.jpg', 'Curtains'),
(122, 2, 6, 'Curtains_4.jpg', 'Curtains'),
(123, 2, 6, 'Curtains_5.jpg', 'Curtains'),
(124, 2, 6, 'Curtains_6.jpg', 'Curtains'),
(125, 1, 1, 'Upholstery-1.jpg', 'Upholstery'),
(126, 1, 1, 'Upholstery-2.jpg', 'Upholstery'),
(127, 1, 1, 'Upholstery-3.jpg', 'Upholstery'),
(128, 1, 1, 'Upholstery-4.jpg', 'Upholstery'),
(129, 1, 1, 'Upholstery-5.jpg', 'Upholstery'),
(130, 1, 1, 'Upholstery-6.jpg', 'Upholstery'),
(131, 1, 1, 'Upholstery-7.jpg', 'Upholstery'),
(132, 1, 1, 'Upholstery-8.jpg', 'Upholstery'),
(133, 1, 1, 'Upholstery-9.jpg', 'Upholstery'),
(134, 1, 1, 'Upholstery-10.jpg', 'Upholstery'),
(135, 1, 1, 'Upholstery-11.jpg', 'Upholstery'),
(136, 1, 1, 'Upholstery-12.jpg', 'Upholstery'),
(137, 1, 1, 'Upholstery-13.jpg', 'Upholstery'),
(138, 1, 1, 'Upholstery-14.jpg', 'Upholstery'),
(139, 1, 1, 'Upholstery-15.jpg', 'Upholstery'),
(140, 9, 35, 'Artefact_1.jpg', 'Artefact'),
(141, 9, 35, 'Artefact_2.jpg', 'Artefact'),
(142, 9, 35, 'Artefact_3.jpg', 'Artefact'),
(143, 9, 35, 'Artefact_4.jpg', 'Artefact'),
(144, 9, 35, 'Artefact_5.jpg', 'Artefact'),
(145, 9, 35, 'Artefact_6.jpg', 'Artefact'),
(146, 9, 35, 'Artefact_7.jpg', 'Artefact'),
(147, 9, 35, 'Artefact_8.jpg', 'Artefact'),
(148, 9, 35, 'Artefact_9.jpg', 'Artefact'),
(149, 9, 34, 'Painting.JPG', 'Painting'),
(150, 9, 34, 'Painting(1).JPG', 'Painting');

-- --------------------------------------------------------

--
-- Table structure for table `p_cat`
--

CREATE TABLE `p_cat` (
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_cat`
--

INSERT INTO `p_cat` (`cat_id`, `cat_name`) VALUES
(1, 'Bed Linen    '),
(2, 'Curtains                      '),
(3, 'Wallpapers     '),
(4, 'Blinds'),
(5, 'Upholstery');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `subcat_id` int(50) NOT NULL,
  `subcat_name` varchar(100) NOT NULL,
  `cat_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subcat_id`, `subcat_name`, `cat_id`) VALUES
(1, 'cotton', 1),
(2, 'polyester', 1),
(3, 'acrylic', 1),
(4, 'mixed blend', 1),
(5, 'PVC', 1),
(6, 'main', 2),
(7, 'sheer', 2),
(8, 'roman', 3),
(9, 'roller', 3),
(10, 'vertical', 3),
(11, 'venetian', 3),
(12, 'luzon', 3),
(13, 'wallpaper', 4),
(14, 'poster & sticker', 4),
(15, 'wall to wall & tile', 5),
(16, 'machine made', 5),
(17, 'hand crafted', 5),
(18, 'grass carpet', 5),
(19, 'wooden', 6),
(20, 'laminated', 6),
(21, 'engineered wood', 6),
(22, 'vinyl', 6),
(23, 'outdoor deck', 6),
(24, 'bed sheet', 7),
(25, 'bed cover', 7),
(26, 'comforter', 7),
(27, 'dohar', 7),
(28, 'bed runner', 7),
(29, 'pillow covers', 7),
(30, 'fillers', 8),
(31, 'cushion covers', 8),
(32, 'ceramics', 9),
(33, 'wooden', 9),
(34, 'painting', 9),
(35, 'metallics', 9),
(36, 'bed sheet', 10),
(37, 'pillow & pillow cover', 10),
(38, 'mattress', 10),
(39, 'towels', 10),
(40, 'mattress protector', 10),
(41, 'bed runners', 10),
(42, 'bath mats', 10),
(43, 'cushion fillers', 11),
(44, 'curtain fabric', 11),
(45, 'upholstery fabric', 11),
(46, 'special finished fabric', 11),
(47, 'blinds', 11),
(48, 'wallpapers', 11),
(49, 'rugs', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `pwd`, `img`) VALUES
('Nishant Narayan Rout', 'nishant@perfectshades.in', 'nishant1999', 'nishant.jpg'),
('Soumyajeet Satpathy', 'soumyajeet@perfectshades.in', 'somu1999', 'somu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_cat`
--
ALTER TABLE `p_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `p_cat`
--
ALTER TABLE `p_cat`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
