-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2020 at 05:37 PM
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
(1, 'disinfecting-fabrics-thumbnail.jpg', '2020-06-25', 'Sambit Satpathy', 'Furniture', 'THE SOLUTION TO DISINFECTING FABRICS!', 'With new facts coming out on how to stay safe during a pandemic, one thing remains the same: personal hygiene. A virus does not remain on soft surfaces as much as it will on harder surfaces such as wood, metal plastics and laminates.', 'Personal Hygiene\r\nWith new facts coming out on how to stay safe during a pandemic, one thing remains the same: personal hygiene. A virus does not remain on soft surfaces as much as it will on harder surfaces such as wood, metal plastics and laminates.\r\n\r\nWe highly recommend washing your hands for approximately 20 seconds to ensure no spreading of the virus. That is the first of many steps to ensure your furniture is virus free!\r\n\r\nMaintaining the Fabrics\r\nAs people have their different techniques on how to clean furniture, there are four different methods to always remember!\r\nThese methods may vary depending on the type of fabric…\r\n\r\n1.Regular cleaning: This provides a daily cleaning that will remove any dust and/or debris that could damage the fabrics. This ensures that your furniture will look good for much longer.\r\n2.Vacuum Fabrics: Vacuuming provides a deeper clean to ensure that no dirt is left on the furniture that could slowly damage the furniture over time. Continue to do this and your furniture will remain better for longer!\r\n3.Removing stains: Stains by far are one thing to fear when it comes to your beautiful furniture. However, by using the right techniques to remove the stains, it will help provide a cleaner look to your fabrics. More details coming up!\r\n4.Deep Cleaning: Finally, depending on your fabrics, it is important to provide a deep clean to remove any build up of dirt. Methods may include steaming the fabrics, if removable, placing them in a washer or using other cleaners.', 'furniture,indoor'),
(4, 'choose-curtains-thumbnail.jpg', '2020-11-30', 'Sambit Satpathy', 'Curtains', 'Tips to choose the right curtains\r\n', 'Many times, it is very difficult to choose correct fabric, so Estetica offer few familiar window treatment situations and recommendations for picking the right fabric.', '<p class=\"p1\">Many times, it is very difficult to choose correct fabric, so Estetica offer few familiar window treatment situations and recommendations for picking the right fabric:</p>\r\n<ul class=\"ul1\">\r\n<li class=\"li2\"><span class=\"s2\"><strong>A wide, long window that need plenty of coverage:</strong>&nbsp;Fabrics with some heft to them will meet your coverage needs. Make simple floor-to-ceiling panel draperies in a heavier-weight fabric, such as velvet, chenille, or a blended fabric that limit the light. An alternative is to line your draperies with lining.</span></li>\r\n<li class=\"li2\"><span class=\"s2\"><strong>A wide, long window where not much coverage is needed:&nbsp;</strong>A swag and cascade (made out of a non-sheer fabric with great drapability, such as a silk or blended cotton) that frames the top and sides of a bank of windows is a perfect treatment to provide some dress-up without much coverage. If you want to use a sheer fabric to diffuse the light, choose panels in organza, chiffon, or even lace.</span></li>\r\n<li class=\"li2\"><span class=\"s2\"><strong>A room with a small window:&nbsp;</strong>Think about adding a drapery that covers the window entirely. Measure your drapery so that it extends well past the window&rsquo;s trim molding. Then choose a heavier fabric, such as damask, in a colour that matches (or closely matches) the room&rsquo;s paint colour. The window treatment helps block air. Matching the fabric with the room&rsquo;s walls gives the room-enlarging illusion of unbroken wall space.</span></li>\r\n<li class=\"li2\"><span class=\"s2\"><strong>A very low-ceilinged room:</strong>&nbsp;Measure your draperies so they extend from the floor to the ceiling and match their colour to the wall colour. Be sure to install the curtain rod nearly flush with the ceiling. If you want to let in light, choose a fabric whose texture is very light yet crisp, such as sheer and if you like coverage, choose a tightly woven cotton. Using a fabric that features vertical stripes is another nice way you can create a feeling of length and height in a low-ceilinged room.</span></li>\r\n<li class=\"li2\"><span class=\"s2\"><strong>A small window, the only source of light in a small kitchen:</strong>&nbsp;If you have a small kitchen with only a tiny window, you want to maximize the window as much as possible.<strong><em>&nbsp;</em></strong>Consider adding a vertical blind, or if you have the ceiling height, an pleated curtain in the medium weight fabric of your choice.<span class=\"Apple-converted-space\">&nbsp;</span></span></li>\r\n<li class=\"li2\"><span class=\"s2\"><strong>A windows in a formal living room: </strong>Pleated curtains look great over sheers in dining rooms, and this treatment lets in adequate light for dining, working, or studying. Choose a fabric with a tight weave and even a bit of stiffness, so that they&rsquo;ll keep their shape.</span></li>\r\n<li class=\"li2\"><span class=\"s2\"><strong>A bathroom window that needs privacy but still needs natural light:&nbsp;</strong>Try a heavier voile, which give a bit of coverage, yet let in some light. Create a simple curtain panel with this fabric, and your problems are solved.<span class=\"Apple-converted-space\">&nbsp;</span></span></li>\r\n</ul>', 'curtains'),
(5, 'right-upholstery-thumbnail.jpg', '2020-11-30', 'Sambit Satpathy', 'Upholstery', 'Finding the right upholstery fit\r\n', 'Although we all jump at the chance to replace furniture with newer, but sometimes a good-quality sofa or chair just needs a fabric revamp. The right upholstery can easily transform the look and feel of your dining room, living room or home office furniture.', '<p class=\"p1\">Although we all jump at the chance to replace furniture with newer, but sometimes a good-quality sofa or chair just needs a fabric revamp. The right upholstery can easily transform the look and feel of your dining room, living room or home office furniture. There are many different textures, colours and patterns to choose from, so be sure to consider what makes sense for your family, as well as what complements your room\'s decor. If you\'re on the verge of making a new furniture or re-upholstering your furniture, do consider the following factors to make sure you pick the right material for your furniture -<span class=\"Apple-converted-space\">&nbsp;</span></p>\r\n<p class=\"p2\"><strong>Fabric Durability</strong></p>\r\n<ul class=\"ul1\">\r\n<li class=\"li3\"><span class=\"s2\">Choose a fabric based on its uses like, who will be using your sofa. If your pets will also be sharing your sofa with you, consider a microfiber fabric or leather as they can withstand heavy use.</span></li>\r\n<li class=\"li3\"><span class=\"s2\">Consider fabric durability if your sofa or chair will be placed in a high-traffic area of the home.</span></li>\r\n<li class=\"li4\"><span class=\"s2\">Woven patterns hold up longer than printed ones, as do higher thread counts. Thread count refers to the number of threads per square inch of fabric, and denser fabric lasts longer.</span></li>\r\n</ul>\r\n<p class=\"p5\"><strong>Fabric Design / Pattern</strong></p>\r\n<ul class=\"ul1\">\r\n<li class=\"li6\"><span class=\"s2\">Your fabric choice should approximate the style and character of the piece it is covering. For example, a traditional fabric would look better on a traditional style of frame.</span></li>\r\n<li class=\"li6\"><span class=\"s2\">Some fabrics appear casual, while others might look more formal. Choose a fabric to echo your own style or theme that you have established throughout the home.</span></li>\r\n<li class=\"li7\"><span class=\"s2\">Consider the scale of the design repeat. It should be appropriate to the size of the furniture it is covering, as well as the room size. A large bold, pattern might work better in a larger room, while a more muted or smaller one might be a better choice for a smaller space.</span></li>\r\n</ul>\r\n<p class=\"p5\"><strong>Fabric Colour </strong></p>\r\n<ul class=\"ul1\">\r\n<li class=\"li6\"><span class=\"s2\">Colour is the most important reason people choose a fabric, so make sure your colour choice is appropriate. For instance, it may be best to avoid a very bold colour for a smaller room, especially if your sofa is also large.</span></li>\r\n<li class=\"li6\"><span class=\"s2\">Avoid delicately coloured fabrics around children and pets.</span></li>\r\n<li class=\"li6\"><span class=\"s2\">To strike the right mood, consider the colour temperature. Since warm and cool colours affect the mood of the room, make sure you&rsquo;re choosing the right fabric for the right mood.</span></li>\r\n<li class=\"li7\"><span class=\"s2\">Avoid trendy colours unless you happen to really like them. Colour trends come and go so be careful. What if you don&rsquo;t consider eggplant attractive in the first place? Will you be able to live with a colour even when its popularity wanes?</span></li>\r\n</ul>\r\n<p class=\"p5\"><strong>Special Considerations</strong></p>\r\n<ul class=\"ul1\">\r\n<li class=\"li6\"><span class=\"s2\">Fade Resistance: Consider if your fabric is fade resistant especially if it will be placed in a room that gets plenty of sunlight or will be placed close to a window.</span></li>\r\n<li class=\"li6\"><span class=\"s2\">Mildew Resistance: Look for fabric that is mildew resistant if you live in a humid climate that fosters mildew.</span></li>\r\n<li class=\"li6\"><span class=\"s2\">Allergies: Consider fabric such as microfiber for certain allergies because it is lint free and does not attract dust.</span></li>\r\n<li class=\"li6\"><span class=\"s2\">Pets: If you have pets avoid using delicate fabric such as silk, or any fabric with lots of texture. Select pet-friendly upholstery instead.</span></li>\r\n</ul>', 'upholstery');

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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `img`) VALUES
(1, 'Picture1.png'),
(2, 'Picture2.png'),
(3, 'Picture3.png'),
(4, 'Picture4.png'),
(5, 'Picture5.png'),
(6, 'Picture6.png'),
(7, 'Picture7.png'),
(8, 'Picture8.png'),
(9, 'Picture9.png'),
(10, 'Picture11.png'),
(11, 'Picture13.png'),
(12, 'Picture15.png'),
(13, 'Picture16.png');

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
-- Table structure for table `partner_brands`
--

CREATE TABLE `partner_brands` (
  `id` int(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_brands`
--

INSERT INTO `partner_brands` (`id`, `img`) VALUES
(1, 'Ddecor.png'),
(2, 'Rumors.png'),
(3, 'Pure.png'),
(4, 'Sarom.png'),
(5, 'Pluche.png'),
(6, 'Sleepwell.png'),
(7, 'Maspar.png'),
(8, 'Recron.png'),
(9, 'India_handloom.png'),
(10, 'Karpets.png'),
(11, 'Mac.png'),
(12, 'Malhar.png'),
(13, 'Marvel.png'),
(14, 'Portico.png'),
(15, 'Sky_homes.png'),
(16, 'Square_foot.png'),
(17, 'Tarkett.png'),
(18, 'True_colors.png'),
(19, 'WK.png'),
(20, 'Indocount.png'),
(21, 'Tesa.png'),
(22, 'Heritage.png'),
(23, 'Indiacraft.png');

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
(3, 7, 27, 'Dohar_1.jpg', 'Dohar'),
(4, 7, 27, 'Dohar_2.jpg', 'Dohar'),
(5, 7, 24, 'Bedsheet with Pillow Cover_1.jpg', 'Bedsheet with Pillow Cover'),
(6, 7, 24, 'Bedsheet with Pillow Cover_2.jpg', 'Bedsheet with Pillow Cover'),
(7, 7, 25, 'Bed cover_1.jpg', 'Bed Cover'),
(8, 7, 25, 'Bed cover_2.jpg', 'Bed Cover'),
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
(102, 7, 26, 'Comforter_4.jpg', 'Comforter'),
(103, 7, 27, 'Dohar_3.jpg', 'Dohar'),
(104, 7, 27, 'Dohar_4.jpg', 'Dohar'),
(106, 8, 30, 'Cushion-1.jpg', 'Cushion'),
(107, 8, 30, 'Cushion-2.jpg', 'Cushion'),
(108, 8, 30, 'Cushion-3.jpg', 'Cushion'),
(109, 8, 30, 'Cushion-4.jpg', 'Cushion'),
(110, 8, 30, 'Cushion-5.jpg', 'Cushion'),
(111, 8, 30, 'Cushion-6.jpg', 'Cushion'),
(112, 8, 30, 'Cushion-7.jpg', 'Cushion'),
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
(151, 2, 6, 'Curtains_7.jpg', 'Curtains'),
(152, 2, 6, 'Curtains_8.jpg', 'Curtains'),
(153, 2, 6, 'Curtains_9.jpg', 'Curtains'),
(154, 2, 6, 'Curtains_10.jpg', 'Curtains');

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
-- Indexes for table `clients`
--
ALTER TABLE `clients`
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
-- Indexes for table `partner_brands`
--
ALTER TABLE `partner_brands`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `partner_brands`
--
ALTER TABLE `partner_brands`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `p_cat`
--
ALTER TABLE `p_cat`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
