-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 01:34 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `envato`
--

CREATE TABLE `envato` (
  `envato_id` int(11) NOT NULL,
  `envato_images` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `envato_action` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `envato_remove` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `envato`
--

INSERT INTO `envato` (`envato_id`, `envato_images`, `envato_action`, `envato_remove`) VALUES
(1, 'Envato Market', 'Buy now', 'Remove Frame'),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(11) NOT NULL,
  `footer_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_images` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_menu` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_icon` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_ic` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_title`, `footer_name`, `footer_images`, `footer_menu`, `footer_icon`, `footer_ic`) VALUES
(1, 'ADDRESS', '15 Beaufain Street Charleston, SC 29401', 'images/logo.png', 'HOME', 'fa fa-facebook', 'Facebook'),
(2, 'FOLLOW US', '© 2017 Made by WiTheme', '', 'ABOUT', 'fa fa-twitter', 'Twitter'),
(3, 'CONTACT US', 'info@domain.com 843-212-0920', '', 'MENU', 'fa fa-pinterest-p', 'Pinterest-p'),
(4, '', '', '', 'RESERVATION', 'fa fa-instagram', 'Instagram'),
(5, '', '', '', 'CONTACT', 'fa fa-envelope', 'Envelope'),
(6, '', '', '', 'BUY', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` int(11) NOT NULL,
  `form_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_sb` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `form_name`, `form_email`, `form_sb`, `form_message`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(10, 'manh', 'manh10', 'khongdsads', 'toi can ban'),
(9, 'dhs', 'dohuuson10@gmail.com', 'toi khong biet', 'thank');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `image_title`) VALUES
(1, 'Lunch'),
(2, 'Dinner'),
(3, ''),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_images` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_dropdown` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_icon` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_bigic` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_condd` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_images`, `menu_dropdown`, `menu_icon`, `menu_bigic`, `menu_condd`) VALUES
(1, 'images/logo1.png', 'Home', 'fa fa-twitter', 'Book a', 'Header Center'),
(2, '', 'About', 'fa fa-facebook', 'Table', 'Header Dark'),
(3, '', 'Menu', 'fa fa-tripadvisor', '', 'Typography'),
(4, '', 'Reservation', '', '', 'Elements 1'),
(5, '', 'Blog', '', '', 'Elements 2'),
(6, '', 'Elements', '', '', ''),
(7, '', 'Contact', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `thucan`
--

CREATE TABLE `thucan` (
  `thucan_id` int(11) NOT NULL,
  `thucan_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thucan_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thucan_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thucan_desc` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thucan`
--

INSERT INTO `thucan` (`thucan_id`, `thucan_title`, `thucan_name`, `thucan_price`, `thucan_desc`) VALUES
(1, 'DESSERTS', 'CALAMARI FRA DIAVOLO', '$11.95', 'Our Fried Calamari Sauteed with Hot & Sweet Vinegar Peppers in Our Marinara Sauce'),
(2, 'LUNCH', 'OLD FASHIONED RICE BALLS', '$6.95', 'Homemade Rice Balls Made with an Italian Cheese Blend then Lightly Breaded and Fried. Topped with Mozzarella and Marinara'),
(3, 'DINNER', 'STEAK STROGANOFF', '$12.5', 'Served in a Creamy Gorgonzola Sauce with Crostini Toast'),
(6, '', 'Mussels or Clams Italiano', '$10.95', 'New Zealand Mussels or Little Neck Clams Served in a Garlic Wine Broth or Plum Tomato Sauce'),
(7, '', 'FRIED ZUCCHINI', '$7.95', 'Lightly Breaded and Fried'),
(8, '', 'EGGPLANT ROLLANTINE', '$9.95', 'Rolled with Ricotta and Lightly Baked with Marinara and Mozzarella'),
(9, '', 'CLAMS CASINO', '$12.50', 'Little Neck Clams with Bacon, Vinegar Peppers and Italian Herbs'),
(10, '', 'BEEF SKEWERS', '$12.00', 'Marinated Steak Skewers Flame Grilled and Served Over a Pineapple Bruschetta'),
(11, '', 'WARM ARTICHOKE AND SPINACH DIP', '$8.95', 'Served in a Tortilla Bowl with Crispy Chips'),
(12, '', 'SLIDERS', '$8.95', 'Our Miniature Homemade Burgers with Cheddar Cheese and Crispy Onion Swirls Served on Tasty Focaccia'),
(13, '', 'BLACKENED CHICKEN QUESADILLA', '$8.5', 'A Blend of Cajun Chicken, Crispy Bacon and Cheddar Cheese, Complemented with Sour Cream Add Guacamole for $3.00 additional'),
(14, '', 'POTATO CROQUETTES', '$6.95', 'Deep Fried Mashed Potato topped with Mozzarella and Brown Gravy'),
(15, '', 'FRIED RIGATONI', '$8.5', 'Stuffed with Ricotta & Mozzarella and Served with Vodka Dipping Sauce'),
(16, '', 'CHICKEN TENDERS', '$7.5', 'Boneless Breaded Chicken Served with Waffle Fries & Honey Mustard'),
(17, '', 'FRIED RAVIOLI', '$7.5', 'Breaded Cheese Ravioli Baked Until Golden in Our Pizza Oven and Served with Marinara Dipping Sauce'),
(18, '', 'BAKED CLAMS', '$9.95', 'Chopped and Served in a Garlic Wine Sauce'),
(19, '', 'BBQ SHRIMP', '$12.5', 'Jumbo Shrimp Wrapped in Bacon Served in a Sweet BBQ Sauce'),
(20, '', 'FRITTO SAMPLER', '$14.5', 'Fried Ravioli, Fried Calamari, Mozzarella in Carozza and Fried Rigatoni. Served with Marinara and Alla Vodka Dipping Sauces'),
(21, '', 'GARLIC BREAD', '$4.00', 'A Full Loaf of Italian Bread Baked with a Garlic Butter Spread'),
(22, '', 'FRIED CALAMAR', '$10.95', 'Lightly Fried in Our Chef’s Special Batter and Served with Marinara Sauce'),
(23, '', 'ITALIAN TASTING PLATTER', '$15.5', 'Three Italian Favorites: Baked Clams, Fried Calamari and Stuffed Shrimp');

-- --------------------------------------------------------

--
-- Table structure for table `thucdon`
--

CREATE TABLE `thucdon` (
  `thucdon_id` int(11) NOT NULL,
  `thucdon_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thucdon_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thucdon_price` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thucdon_desc` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thucdon`
--

INSERT INTO `thucdon` (`thucdon_id`, `thucdon_title`, `thucdon_name`, `thucdon_price`, `thucdon_desc`) VALUES
(1, 'BREAKFAST', 'CALAMARI FRA DIAVOLO', '$11.95', 'Our Fried Calamari Sauteed with Hot & Sweet Vinegar Peppers in Our Marinara Sauce'),
(2, '', 'MUSSELS OR CLAMS ITALIANO', '$10.95', 'New Zealand Mussels or Little Neck Clams Served in a Garlic Wine Broth or Plum Tomato Sauce'),
(3, '', 'FRIED ZUCCHINI', '$7.95', 'Lightly Breaded and Fried'),
(4, '', 'EGGPLANT ROLLANTINE', '$9.95', 'Rolled with Ricotta and Lightly Baked with Marinara and Mozzarella');

-- --------------------------------------------------------

--
-- Table structure for table `tieude`
--

CREATE TABLE `tieude` (
  `tieude_id` int(11) NOT NULL,
  `tieude_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude_subtitle` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tieude`
--

INSERT INTO `tieude` (`tieude_id`, `tieude_title`, `tieude_subtitle`) VALUES
(1, 'Menu', 'Replace the rigid PDF file');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `envato`
--
ALTER TABLE `envato`
  ADD PRIMARY KEY (`envato_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `thucan`
--
ALTER TABLE `thucan`
  ADD PRIMARY KEY (`thucan_id`);

--
-- Indexes for table `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`thucdon_id`);

--
-- Indexes for table `tieude`
--
ALTER TABLE `tieude`
  ADD PRIMARY KEY (`tieude_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `envato`
--
ALTER TABLE `envato`
  MODIFY `envato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `thucan`
--
ALTER TABLE `thucan`
  MODIFY `thucan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `thucdon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tieude`
--
ALTER TABLE `tieude`
  MODIFY `tieude_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
