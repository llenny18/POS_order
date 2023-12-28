-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 02:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `dID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `dCostumerNumber` varchar(250) NOT NULL,
  `dCostumerName` varchar(250) NOT NULL,
  `dPlace` varchar(250) NOT NULL,
  `dDate` date NOT NULL,
  `totalPrice` double(10,2) NOT NULL,
  `dType` int(11) NOT NULL,
  `d_uID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`dID`, `itemID`, `dCostumerNumber`, `dCostumerName`, `dPlace`, `dDate`, `totalPrice`, `dType`, `d_uID`) VALUES
(1, 1, '092342244222', 'Tanauan CLient', 'Tanauan Batangas', '2023-12-27', 34242.75, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `deliverytype`
--

CREATE TABLE `deliverytype` (
  `dtID` int(11) NOT NULL,
  `dtName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deliverytype`
--

INSERT INTO `deliverytype` (`dtID`, `dtName`) VALUES
(1, 'Shipment'),
(2, 'Pickup'),
(3, 'E-Cash');

-- --------------------------------------------------------

--
-- Stand-in structure for view `delivery_info`
-- (See below for the actual view)
--
CREATE TABLE `delivery_info` (
`dID` int(11)
,`itemID` int(11)
,`dCostumerNumber` varchar(250)
,`dCostumerName` varchar(250)
,`dPlace` varchar(250)
,`dDate` date
,`totalPrice` double(10,2)
,`dType` int(11)
,`d_uID` int(11)
,`dtID` int(11)
,`dtName` varchar(250)
);

-- --------------------------------------------------------

--
-- Table structure for table `iteminfo`
--

CREATE TABLE `iteminfo` (
  `item_iID` int(11) NOT NULL,
  `itemName` varchar(250) NOT NULL,
  `itemDescription` varchar(250) NOT NULL,
  `itemBrand` varchar(250) NOT NULL,
  `itemCategory` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iteminfo`
--

INSERT INTO `iteminfo` (`item_iID`, `itemName`, `itemDescription`, `itemBrand`, `itemCategory`) VALUES
(1, 'Gatorade', 'Drink based on electrolyte', 'Gatorade', 'Drinks'),
(2, 'Item 2', 'Item 2', 'Item 2 Brand', 'Item 2 Category');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemID` int(11) NOT NULL,
  `itemStock` int(11) NOT NULL,
  `itemPrice` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `itemStock`, `itemPrice`) VALUES
(1, 5, 100.54),
(2, 65, 43.53);

-- --------------------------------------------------------

--
-- Stand-in structure for view `item_view`
-- (See below for the actual view)
--
CREATE TABLE `item_view` (
`itemID` int(11)
,`itemStock` int(11)
,`itemPrice` double(10,2)
,`item_iID` int(11)
,`itemName` varchar(250)
,`itemDescription` varchar(250)
,`itemBrand` varchar(250)
,`itemCategory` varchar(250)
);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oID` int(11) NOT NULL,
  `o_iID` int(11) NOT NULL,
  `oQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oID`, `o_iID`, `oQuantity`) VALUES
(1, 2, 6),
(2, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `posorders`
--

CREATE TABLE `posorders` (
  `poID` int(11) NOT NULL,
  `poDate` date NOT NULL,
  `po_oID` int(11) NOT NULL,
  `potype` int(11) NOT NULL,
  `o_uID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posorders`
--

INSERT INTO `posorders` (`poID`, `poDate`, `po_oID`, `potype`, `o_uID`) VALUES
(1, '2023-12-28', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `uID` int(11) NOT NULL,
  `uUsername` varchar(250) NOT NULL,
  `uPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`uID`, `uUsername`, `uPassword`) VALUES
(1, 'Admin1', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `iID` int(11) NOT NULL,
  `i_uID` int(11) NOT NULL,
  `iFirstName` varchar(250) NOT NULL,
  `iLastName` varchar(250) NOT NULL,
  `iAge` int(250) NOT NULL,
  `iGender` varchar(250) NOT NULL,
  `iNumber` varchar(250) NOT NULL,
  `iEmail` varchar(250) NOT NULL,
  `iAddress` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`iID`, `i_uID`, `iFirstName`, `iLastName`, `iAge`, `iGender`, `iNumber`, `iEmail`, `iAddress`) VALUES
(1, 1, 'Admin', 'Admin', 23, 'Male', '09661231212', 'email@email.com', 'Admin address');

-- --------------------------------------------------------

--
-- Stand-in structure for view `users_info`
-- (See below for the actual view)
--
CREATE TABLE `users_info` (
`uID` int(11)
,`uUsername` varchar(250)
,`uPassword` varchar(250)
,`iID` int(11)
,`i_uID` int(11)
,`iFirstName` varchar(250)
,`iLastName` varchar(250)
,`iAge` int(250)
,`iGender` varchar(250)
,`iNumber` varchar(250)
,`iEmail` varchar(250)
,`iAddress` varchar(250)
);

-- --------------------------------------------------------

--
-- Structure for view `delivery_info`
--
DROP TABLE IF EXISTS `delivery_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `delivery_info`  AS SELECT `deliveries`.`dID` AS `dID`, `deliveries`.`itemID` AS `itemID`, `deliveries`.`dCostumerNumber` AS `dCostumerNumber`, `deliveries`.`dCostumerName` AS `dCostumerName`, `deliveries`.`dPlace` AS `dPlace`, `deliveries`.`dDate` AS `dDate`, `deliveries`.`totalPrice` AS `totalPrice`, `deliveries`.`dType` AS `dType`, `deliveries`.`d_uID` AS `d_uID`, `deliverytype`.`dtID` AS `dtID`, `deliverytype`.`dtName` AS `dtName` FROM (`deliveries` join `deliverytype` on(`deliverytype`.`dtID` = `deliveries`.`dType`)) ;

-- --------------------------------------------------------

--
-- Structure for view `item_view`
--
DROP TABLE IF EXISTS `item_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `item_view`  AS SELECT `items`.`itemID` AS `itemID`, `items`.`itemStock` AS `itemStock`, `items`.`itemPrice` AS `itemPrice`, `iteminfo`.`item_iID` AS `item_iID`, `iteminfo`.`itemName` AS `itemName`, `iteminfo`.`itemDescription` AS `itemDescription`, `iteminfo`.`itemBrand` AS `itemBrand`, `iteminfo`.`itemCategory` AS `itemCategory` FROM (`items` join `iteminfo` on(`iteminfo`.`item_iID` = `items`.`itemID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `users_info`
--
DROP TABLE IF EXISTS `users_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users_info`  AS SELECT `useraccounts`.`uID` AS `uID`, `useraccounts`.`uUsername` AS `uUsername`, `useraccounts`.`uPassword` AS `uPassword`, `userinfo`.`iID` AS `iID`, `userinfo`.`i_uID` AS `i_uID`, `userinfo`.`iFirstName` AS `iFirstName`, `userinfo`.`iLastName` AS `iLastName`, `userinfo`.`iAge` AS `iAge`, `userinfo`.`iGender` AS `iGender`, `userinfo`.`iNumber` AS `iNumber`, `userinfo`.`iEmail` AS `iEmail`, `userinfo`.`iAddress` AS `iAddress` FROM (`useraccounts` join `userinfo` on(`userinfo`.`i_uID` = `useraccounts`.`uID`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`dID`),
  ADD KEY `dtype` (`dType`),
  ADD KEY `uidd` (`d_uID`),
  ADD KEY `itemiddd` (`itemID`);

--
-- Indexes for table `deliverytype`
--
ALTER TABLE `deliverytype`
  ADD PRIMARY KEY (`dtID`);

--
-- Indexes for table `iteminfo`
--
ALTER TABLE `iteminfo`
  ADD PRIMARY KEY (`item_iID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oID`),
  ADD KEY `oprders` (`o_iID`);

--
-- Indexes for table `posorders`
--
ALTER TABLE `posorders`
  ADD PRIMARY KEY (`poID`),
  ADD KEY `orders` (`po_oID`),
  ADD KEY `uiod` (`o_uID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`uID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`iID`),
  ADD KEY `uid` (`i_uID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `dID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deliverytype`
--
ALTER TABLE `deliverytype`
  MODIFY `dtID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `iteminfo`
--
ALTER TABLE `iteminfo`
  MODIFY `item_iID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posorders`
--
ALTER TABLE `posorders`
  MODIFY `poID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `iID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `dtype` FOREIGN KEY (`dType`) REFERENCES `deliverytype` (`dtID`),
  ADD CONSTRAINT `itemiddd` FOREIGN KEY (`itemID`) REFERENCES `items` (`itemID`),
  ADD CONSTRAINT `uidd` FOREIGN KEY (`d_uID`) REFERENCES `useraccounts` (`uID`);

--
-- Constraints for table `iteminfo`
--
ALTER TABLE `iteminfo`
  ADD CONSTRAINT `item` FOREIGN KEY (`item_iID`) REFERENCES `items` (`itemID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `oprders` FOREIGN KEY (`o_iID`) REFERENCES `items` (`itemID`);

--
-- Constraints for table `posorders`
--
ALTER TABLE `posorders`
  ADD CONSTRAINT `orders` FOREIGN KEY (`po_oID`) REFERENCES `orders` (`oID`),
  ADD CONSTRAINT `uiod` FOREIGN KEY (`o_uID`) REFERENCES `useraccounts` (`uID`);

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `uid` FOREIGN KEY (`i_uID`) REFERENCES `useraccounts` (`uID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
