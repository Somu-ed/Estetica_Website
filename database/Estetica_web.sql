-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2020 at 10:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
(2, 'post-thumbnail.png', '2020-06-24', 'Aditya Attri', 'Furniture', 'MODERN FURNITURE IN HEALTH FACILITIES', 'Whether it’s a doctor’s office or at the dentist, what is it that most patients hope to see once they enter through the door? A Beautiful seating area, an elegant but organized reception desk, and different accessories to make them feel comfortable.\r\n\r\n', 'What Look Are You Looking For?\r\nThe first things clients, patients and customers look at are the things that leave the biggest impression. Here at SohoConcept, modern furniture helps bring the whole room together. As explained before, we want to make the patient feel at home, feel comfortable and most importantly confident in the healthcare facility.\r\n\r\nLet’s start off with the variety of chairs SohoConcept has to offer. From the Soho wood chair that will look perfect in a pediatrician’s office to the Crescent wire chair suitable for every waiting room. There is a chair ready for every healthcare facility. The variety of chairs is endless and will without a doubt impress the patients and/or clients.\r\n\r\nSohoConcept doesn’t only offer the best appearance of modern furniture but ensures the greatest quality as well. Patients are in and out of healthcare facilities every day, which means the quality of modern furniture is crucial to ensure it being long lasting. The maintenance of the modern furniture we have to offer are a few quick easy steps to make certain that it stays in the best conditions for years to come.\r\n\r\nModern Furniture is sweeping the nation, and SohoConcept is ready to bring the right energy needed for your location. From homes, to Healthcare Facilities, we are ready!', 'furniture,estetica');

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
  `time` time NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `address`, `msg`, `time`, `date`) VALUES
(1, 'Nishant Narayan Rout', 'nishantnarayanrout@gmail.com', '+9163700171707', 'SRM IST, Kattankulathur, Room No 212, Nelson Mandela', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.', '15:33:08', '2020-07-09'),
(2, 'Aditya Attri', 'aditya@gmail.com', '+918939353326', 'SRM IST, Kattankulathur, Room No 215, Nelson Mandela', 'Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.', '15:38:28', '2020-07-09');

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
(8, 'final@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `prd_temp`
--

CREATE TABLE `prd_temp` (
  `id` int(50) NOT NULL,
  `cat_id` int(50) NOT NULL,
  `p_img` text NOT NULL,
  `p_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `cat_id` int(50) NOT NULL,
  `brand_id` int(50) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_img` text NOT NULL,
  `p_cat` varchar(100) NOT NULL,
  `p_brand` varchar(100) NOT NULL,
  `p_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `brand_id`, `p_name`, `p_img`, `p_cat`, `p_brand`, `p_desc`) VALUES
(1, 1, 1, 'N/A', 'Artifact 01.jpg', 'Artifact', 'Estetica', 'N/A'),
(2, 1, 1, 'N/A', 'Artifact 02.JPG', 'Artifact', 'Estetica', 'N/A'),
(3, 1, 1, 'N/A', 'Artificial Grass 01.jpg', 'Artificial Grass', 'Estetica', 'N/A'),
(4, 1, 1, 'N/A', 'Artificial Grass 02.jpg', 'Artificial Grass', 'Estetica', 'N/A'),
(5, 1, 1, 'N/A', 'Awning 01.jpg', 'Awning', 'Estetica', 'N/A'),
(6, 1, 1, 'N/A', 'Awning 02.jpg', 'Awning', 'Estetica', 'N/A'),
(7, 1, 1, 'N/A', 'Bed Linen 01.jpg', 'Bed Linen', 'Estetica', 'N/A'),
(8, 1, 1, 'N/A', 'Bed Linen 02.jpg', 'Bed Linen', 'Estetica', 'N/A'),
(9, 1, 1, 'N/A', 'Blind 01.jpg', 'Blind', 'Estetica', 'N/A'),
(10, 1, 1, 'N/A', 'Blind 02.jpg', 'Blind', 'Estetica', 'N/A'),
(11, 1, 1, 'N/A', 'Blinds shankarjee.jpeg', 'Blind', 'Estetica', 'N/A'),
(12, 1, 1, 'N/A', 'Carpet 01.jpg', 'Carpet', 'Estetica', 'N/A'),
(13, 1, 1, 'N/A', 'Carpet 02.jpg', 'Carpet', 'Estetica', 'N/A'),
(14, 1, 1, 'N/A', 'Curtain 01.jpg', 'Curtain', 'Estetica', 'N/A'),
(15, 1, 1, 'N/A', 'Curtain 02.jpg', 'Curtain', 'Estetica', 'N/A'),
(16, 1, 1, 'N/A', 'Customised fabric design with Matty Weave.jpg', 'Custom', 'Estetica', 'N/A'),
(17, 1, 1, 'N/A', 'Customised Furniture.jpg', 'Custom', 'Estetica', 'N/A'),
(18, 1, 1, 'N/A', 'Extra 01.JPG', 'Interior Solutions', 'Estetica', 'N/A'),
(19, 1, 1, 'N/A', 'Extra 02.jpg', 'Cushion', 'Estetica', 'N/A'),
(20, 1, 1, 'N/A', 'Extra 03.jpg', 'Interior Solutions', 'Estetica', 'N/A'),
(21, 1, 1, 'N/A', 'Flooring 01.jpg', 'Flooring', 'Estetica', 'N/A'),
(22, 1, 1, 'N/A', 'Flooring 2.jpg', 'Flooring', 'Estetica', 'N/A'),
(23, 1, 1, 'N/A', 'Government Guest House 01.jpg', 'Interior Solutions', 'Estetica', 'N/A'),
(24, 1, 1, 'N/A', 'Government Guest House 02.jpg', 'Interior Solutions', 'Estetica', 'N/A'),
(25, 1, 1, 'N/A', 'Hand Painted Wall.jpg', 'Wall Painting', 'Estetica', 'N/A'),
(26, 1, 1, 'N/A', 'Institutional 01.jpg', 'Institutional', 'Estetica', 'N/A'),
(27, 1, 1, 'N/A', 'Institutional 02.jpg', 'Institutional', 'Estetica', 'N/A'),
(28, 1, 1, 'N/A', 'Institutional 03.jpg', 'Institutional', 'Estetica', 'N/A'),
(29, 1, 1, 'N/A', 'Rugs 01.jpg', 'Rugs', 'Estetica', 'N/A'),
(30, 1, 1, 'N/A', 'Rugs 02.jpg', 'Rugs', 'Estetica', 'N/A'),
(31, 1, 1, 'N/A', 'Upholstery 01.jpg', 'Upholstery', 'Estetica', 'N/A'),
(32, 1, 1, 'N/A', 'Upholstery 02.JPG', 'Upholstery', 'Estetica', 'N/A'),
(33, 1, 1, 'N/A', 'Wall Coverings 01.jpg', 'Wall Coverings', 'Estetica', 'N/A'),
(34, 1, 1, 'N/A', 'Wall Coverings 02.jpg', 'Wall Coverings', 'Estetica', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `p_brand`
--

CREATE TABLE `p_brand` (
  `brand_id` int(50) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_brand`
--

INSERT INTO `p_brand` (`brand_id`, `brand_name`) VALUES
(1, 'D\'DECOR'),
(2, 'KALAGYA'),
(3, 'PORTICO'),
(4, 'MASPAR'),
(5, 'SAROM'),
(6, 'BOMBAY DYEING'),
(7, 'WALL KING'),
(8, 'PURE'),
(9, 'RUMORS');

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
(1, 'Bedsheets        '),
(2, 'Curtains                      '),
(3, 'Wallpapers     '),
(4, 'Blinds'),
(5, 'Upholstery');

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
-- Indexes for table `prd_temp`
--
ALTER TABLE `prd_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_brand`
--
ALTER TABLE `p_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `p_cat`
--
ALTER TABLE `p_cat`
  ADD PRIMARY KEY (`cat_id`);

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prd_temp`
--
ALTER TABLE `prd_temp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `p_brand`
--
ALTER TABLE `p_brand`
  MODIFY `brand_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `p_cat`
--
ALTER TABLE `p_cat`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
