-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2020 at 03:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 1, 6, 'Bombay Dyeing 136 TC Polyester Double Abstract Bedsheet (Pack of 1, Black, White)', 'bd_abstract.jpg', 'Bedsheets', 'Bombay Dyeing', 'Flat (L x W): 218 cm x 218 cm\r\nMaterial: Polyester\r\nIncludes: Number of Bedsheets: 1, Number of Pillow Covers: 2\r\nThread Count: 136\r\nColor: Black, White'),
(2, 1, 6, 'Bombay Dyeing 136 TC Polyester Double Motifs Bedsheet  (Pack of 1, Blue, Grey)', 'bd_motifs.jpg', 'Bedsheets', 'Bombay Dyeing', 'Flat (L x W): 218 cm x 218 cm\r\nMaterial: Polyester\r\nIncludes: Number of Bedsheets: 1, Number of Pillow Covers: 2\r\nThread Count: 136\r\nColor: Blue, Grey'),
(3, 1, 1, 'D\'Decor 136 TC Cotton Double King Floral Bedsheet (Pack of 1, Orange)', 'dd_floral.png', 'Bedsheets', 'D\'DECOR', 'Material: Cotton\r\nIncludes: Number of Bedsheets: 1\r\nThread Count: 136\r\nColor: Orange'),
(4, 1, 1, 'D\'Decor 136 TC Cotton Double King Floral Bedsheet (Pack of 1, Blue)', 'dd_floral2.png', 'Bedsheets', 'D\'DECOR', 'Material: Cotton\r\nIncludes: Number of Bedsheets: 1\r\nThread Count: 136\r\nColor: Blue'),
(5, 1, 3, 'Portico New York 144 TC Cotton Double Printed Bedsheet (Pack of 1, Multicolor)', 'portico_ny.jpg', 'Bedsheets', 'PORTICO', 'Flat (L x W): 254 cm x 224 cm\r\nMaterial: Cotton\r\nIncludes: Number of Bedsheets: 1\r\nThread Count: 144\r\nColor: Multicolor'),
(6, 1, 3, 'Portico New York 144 TC Cotton Double Printed Bedsheet (Pack of 1, Beige, Black, White, Grey)', 'portico_ny2.jpg', 'Bedsheets', 'PORTICO', 'Flat (L x W): 254 cm x 224 cm\r\nMaterial: Cotton\r\nIncludes: Number of Bedsheets: 1\r\nThread Count: 144\r\nColor: Beige, Black, White, Grey');

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
('Nishant Narayan Rout', 'nishant@perfectshades.in', 'nishant1999', 'nishant.png'),
('Soumyajeet Satpathy', 'soumyajeet@perfectshades.in', 'somu1999', '');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
