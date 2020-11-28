-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2020 at 08:57 PM
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
(1, 'upholstery'),
(2, 'curtain'),
(3, 'blinds'),
(4, 'wall coverings'),
(5, 'carpets'),
(6, 'flooring'),
(7, 'bed linen'),
(8, 'cushions'),
(9, 'artifacts'),
(10, 'hospitality'),
(11, 'custom');

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
(13, 1, 3, 'Acrylic Upholstery Fabric(1).jpg', 'Acrylic Upholstery'),
(14, 1, 3, 'Acrylic Upholstery Fabric.jpg', 'Acrylic Upholstery'),
(15, 1, 1, 'Cotton Upholstery.JPG', 'Cotton Upholstery'),
(16, 1, 1, 'Cotton Upholsytery Fabric.JPG', 'Cotton Upholstery'),
(17, 1, 4, 'Mixed Blend Upholstery Fabric.JPG', 'Mixed Blend Upholstery'),
(18, 1, 4, 'Mixed Blend Upholstery Fabric(1).JPG', 'Mixed Blend Upholstery'),
(19, 1, 2, 'Polyester Upholstery Fabric(1).JPG', 'Polyester Upholstery'),
(20, 1, 2, 'Polyester Upholstery Fabric.JPG', 'Polyester Upholstery'),
(21, 1, 5, 'PVC Upholstery Fabric(1).JPG', 'PVC Upholstery'),
(22, 1, 5, 'PVC Upholstery Fabric.JPG', 'PVC Upholstery'),
(23, 2, 6, 'Main Curtains.JPG', 'Main Curatins'),
(24, 2, 6, 'Main Curtains(1).JPG', 'Main Curatins'),
(25, 2, 7, 'Sheer Curtains.JPG', 'Sheer Curtains'),
(26, 2, 7, 'Sheer Curtains(1).JPG', 'Sheer Curtains'),
(27, 3, 8, 'Roman Blinds.jpg', 'Roman Blinds'),
(28, 3, 8, 'Roman Blinds(1).jpg', 'Roman Blinds'),
(29, 3, 9, 'Roller Blinds.jpg', 'Roller Blinds'),
(30, 3, 9, 'Roller Blinds(1).jpg', 'Roller Blinds'),
(31, 3, 10, 'Vertical Blinds.jpg', 'Vertical Blinds'),
(32, 3, 10, 'Vertical Blinds(1).jpg', 'Vertical Blinds'),
(33, 3, 11, 'Venetian Blinds.jpg', 'Venetian Blinds'),
(34, 3, 11, 'Venetian Blinds(1).jpg', 'Venetian Blinds'),
(35, 3, 12, 'Luzon Blinds.jpg', 'Luzon Blinds'),
(36, 3, 12, 'Luzon Blinds(1).jpg', 'Luzon Blinds'),
(37, 4, 13, 'Wallpaper.JPG', 'Wallpapers'),
(38, 4, 13, 'Wallpaper(1).jpg', 'Wallpapers'),
(39, 4, 14, 'Poster.jpg', 'Poster & Stickers'),
(40, 4, 14, 'Poster(1).jpg', 'Poster & Stickers'),
(41, 5, 15, 'wall to wall carpet.jpg', 'Wall to Wall Carpet'),
(42, 5, 15, 'wall to wall carpet(1).jpg', 'Wall to Wall Carpet'),
(43, 5, 16, 'machine made carpet.jpg', 'Machine Made Carpet'),
(44, 5, 16, 'machine made carpet(1).jpg', 'Machine Made Carpet'),
(45, 5, 17, 'hand crafted carpets.jpg', 'Hand Crafted Carpet'),
(46, 5, 17, 'hand crafted carpets(1).jpg', 'Hand Crafted Carpet'),
(47, 5, 18, 'grass carpet.jpg', 'Grass Carpet'),
(48, 5, 18, 'grass carpet(1).jpg', 'Grass Carpet'),
(49, 6, 19, 'Wooden Flooring.jpg', 'Wooden Flooring'),
(50, 6, 19, 'Wooden Flooring(1).jpg', 'Wooden Flooring'),
(51, 6, 20, 'laminated flooring.jpg', 'Laminated Flooring'),
(52, 6, 20, 'laminated flooring(1).jpg', 'Laminated Flooring'),
(53, 6, 21, 'engineered wood flooring.jpg', 'Engineered Wood Flooring'),
(54, 6, 21, 'engineered wood flooring(1).jpg', 'Engineered Wood Flooring'),
(55, 6, 22, 'vinyl flooring.jpg', 'Vinyl Flooring'),
(56, 6, 22, 'vinyl flooring(1).jpg', 'Vinyl Flooring'),
(57, 6, 23, 'outdoor deck.jpg', 'Outdoor Deck'),
(58, 6, 23, 'outdoor deck(1).jpg', 'Outdoor Deck'),
(59, 8, 30, 'cushion fillers.jpg', 'Cushion Fillers'),
(60, 8, 30, 'cushion fillers(1).jpg', 'Cushion Fillers'),
(61, 8, 31, 'Cushion Covers.JPG', 'Cushion Covers'),
(62, 8, 31, 'Cushion Covers(1).JPG', 'Cushion Covers'),
(63, 9, 32, 'Ceramic.JPG', 'Ceramic Artifact'),
(64, 9, 32, 'Ceramic(1).JPG', 'Ceramic Artifact'),
(65, 9, 33, 'Wooden.jpg', 'Wooden Artifact'),
(66, 9, 33, 'Wooden(1).JPG', 'Wooden Artifact'),
(67, 9, 34, 'Painting.JPG', 'Painting'),
(68, 9, 34, 'Painting(1).JPG', 'Painting'),
(69, 9, 35, 'Metallic.JPG', 'Metallic Artifact'),
(70, 9, 35, 'Metallic(1).JPG', 'Metallic Artifact'),
(71, 10, 36, 'Bedsheet with Pillow Cover.jpg', 'Bedsheet with Pillow Cover'),
(72, 10, 36, 'Bedsheet with Pillow Cover(1).jpg', 'Bedsheet with Pillow Cover'),
(73, 10, 37, 'pillows.jpg', 'Pillows'),
(74, 10, 37, 'pillows(1).jpg', 'Pillows'),
(75, 10, 38, 'mattress.jpg', 'Mattress'),
(76, 10, 38, 'mattress(1).jpg', 'Mattress'),
(77, 10, 39, 'towels.jpg', 'Towels'),
(78, 10, 39, 'towels(1).jpg', 'Towels'),
(79, 10, 40, 'mattress protector.jpg', 'Mattress Protector'),
(80, 10, 40, 'mattress protector(1).jpg', 'Mattress Protector'),
(81, 10, 42, 'bath mat.jpg', 'Bath Mat'),
(82, 10, 42, 'bath mat(1).jpg', 'Bath Mat'),
(83, 11, 43, 'Custom cushion fillers_1.jpg', 'custom cushion fillers'),
(84, 11, 43, 'Custom cushion fillers_2.jpg', 'custom cushion fillers'),
(85, 11, 44, 'Custom Curtain Fabric.JPG', 'Custom Curtain Fabric'),
(86, 11, 44, 'Custom Curtain Fabric(1).JPG', 'Custom Curtain Fabric'),
(87, 11, 45, 'Custom Upholstery Fabric_1.jpg', 'Custom Upholstery Fabric'),
(88, 11, 45, 'Custom Upholstery Fabric_2.jpg', 'Custom Upholstery Fabric'),
(89, 11, 46, 'Custom Special Finishes_1.jpg', 'Special Finished Fabric'),
(90, 11, 46, 'Custom Special Finishes_3.jpg', 'Special Finished Fabric'),
(91, 11, 47, 'Custom Blinds_1.jpg', 'Custom Blinds'),
(92, 11, 47, 'Custom Blinds_2.jpg', 'Custom Blinds'),
(93, 11, 48, 'Custom Wallpaper_1.jpg', 'Custom Wallpaper'),
(94, 11, 48, 'Custom Wallpaper_2.jpg', 'Custom Wallpaper'),
(95, 11, 49, 'Custom Rugs_1.jpg', 'Custom Rugs'),
(96, 11, 49, 'Custom Rugs_2.jpg', 'Custom Rugs'),
(97, 5, 15, 'wall to wall carpet 1.jpg', 'Wall to Wall Carpet'),
(98, 5, 15, 'wall to wall carpet 2.jpg', 'Wall to Wall Carpet'),
(99, 10, 36, 'bedsheet with pillow 1.jpg', 'Bedsheet with pillow cover'),
(100, 10, 36, 'bedsheet with pillow 2.jpg', 'Bedsheet with pillow cover'),
(101, 10, 36, 'bedsheet with pillow 3.jpg', 'Bedsheet with pillow cover');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `p_cat`
--
ALTER TABLE `p_cat`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
