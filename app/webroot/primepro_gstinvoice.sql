-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2017 at 04:11 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primepro_gstinvoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `contact_number` varchar(300) DEFAULT NULL,
  `alternate_number` varchar(300) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `gstin` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `contact_number`, `alternate_number`, `address`, `gstin`) VALUES
(1, 'AMBEY INTERNATIONAL', 'dinesh@gmail.com', '9671237222', '9729340067', '#2557/4, Bangali Mohalla,\nNear Haryana Bakery\nHargolal Road,\nAmbala Cantt-133001\nHaryana\nIndia', '06AWVPK5463A1ZE'),
(2, 'AGARWAL TRADING CORPORATION', 'agarwaltrading.corporation@gmail.com', '9935979205', '', '151 &152, Lekhraj Market-3\r\n Indira Nagar, Faizabad Road\r\n Lucknow(Uttar Pradesh)\r\n India 226016', '09AGXPA1501H1ZK'),
(3, 'HARIT AGROVET INDIA', 'VIMAL_TRIPATHI2000@yahoo.com', '9838881177', '8601757644', '\r\nPLOT NO. 33, SECTOR 13,\r\nINDUSTRAIL AREA,\r\nJAGDISHPUR (BHEL),\r\nDIST: AMETHI(U.P)', '09AFQPT9198F1ZD'),
(4, 'NEELENDRAS CONSTRUCTION', 'shukla.samant0@gmail.com', '9554140700', '', '3/299, Sooraj Square, Vishal\r\nKhand, Gomti Nagar, Lucknow, U.P', ''),
(5, 'Elegance Jewels', 'elegance.jewels01@gmail.com', '7754955588', '', '3/2, Patrakar Puram, Gomti Nagar, Lucknow', '09A2PPC86791Z1'),
(6, 'Shri Nath Ji Jewellers', 'rastogineerajsnj9@gmail.com', '9415164891', '9452291175', 'Shri Nathji Jewellers,Aliganj Bazar(Raja Bhaiya),Uttar Pradesh', '09ACRPR6349C1Z3'),
(7, 'Limra Vacations', 'limravacations@gmail.com', '9235329844', '', 'Mariyam Plaza, Sec 23, Opp. City Center Amarpali Bazar Crossing, Indira Nagar Lucknow', '09AMPPA4633E1Z6'),
(8, 'RO World', 'rohitgunjan05@gmail.com', '9935560767', '', '	647/11/99, 60 FEET ROAD, JANKIPURAM EXTENTION, JANKIPURAM, Lucknow, Uttar Pradesh, 226021', '09EHKPS3803J2ZU'),
(9, 'DONZEL TECHNO LEGAL SOLUTIONS PRIVATE LIMITED', 'donzeltechno@gmail.com', '9473869634', '', 'JAGATPURA, RUDRAPUR, UDHAM SINGH NAGAR, Udham Singh Nagar, Uttarakhand, 263153', '05AAGCD2666Q1Z6');

-- --------------------------------------------------------

--
-- Table structure for table `debits`
--

CREATE TABLE `debits` (
  `id` int(11) NOT NULL,
  `vendor_name` varchar(300) DEFAULT NULL,
  `service_name` varchar(300) DEFAULT NULL,
  `amount` decimal(10,4) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `document` varchar(300) DEFAULT NULL,
  `is_deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `increments`
--

CREATE TABLE `increments` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `increments`
--

INSERT INTO `increments` (`id`, `number`) VALUES
(63, 369),
(402, 370),
(403, 371),
(404, 355),
(405, 356),
(406, 372),
(407, 373),
(408, 374),
(409, 375),
(410, 376);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `address` text,
  `invoiceno` varchar(25) DEFAULT NULL,
  `payment_type` enum('Cash','Cheque','NEFT','RTGS','Demand Draft') DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `bank` varchar(300) DEFAULT NULL,
  `cheque_date` datetime DEFAULT NULL,
  `cheque_status` varchar(500) DEFAULT NULL,
  `cheque_number` varchar(500) DEFAULT NULL,
  `cheque_clear_date` datetime DEFAULT NULL,
  `remarks` text,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `transaction_id` varchar(200) DEFAULT NULL,
  `amount_rec_bank` varchar(300) DEFAULT NULL,
  `gstin` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `company_name`, `address`, `invoiceno`, `payment_type`, `payment_status`, `bank`, `cheque_date`, `cheque_status`, `cheque_number`, `cheque_clear_date`, `remarks`, `created`, `modified`, `status`, `transaction_id`, `amount_rec_bank`, `gstin`) VALUES
(122, NULL, 'SETH M.R. JAIPURIA SCHOOL BARABANKI', 'Faizabad  Road,  Barabanki, Uttar Pradesh,', 'PPMJ0357', 'Cheque', NULL, 'BOI', '2017-08-29 16:20:00', NULL, NULL, NULL, NULL, '2017-08-29 00:00:00', '2017-08-29 04:31:17', 'Paid', NULL, NULL, NULL),
(128, NULL, 'NEELENDRAS\r\nCONSTRUCTION', '-3/299, Sooraj Square, Vishal\r\nKhand Gomti Nagar Lucknow, U.P', 'PPJM0358', 'Cheque', NULL, 'Corporation Bank', '2017-07-25 00:00:00', 'Paid', NULL, '2017-09-04 00:00:00', NULL, '2017-09-05 00:00:00', NULL, 'Paid', NULL, NULL, NULL),
(130, NULL, 'Limra Vacations', 'Mariyam Plaza, Sec 23, Opp. City Center Amarpali Bazar Crossing, Indira Nagar Lucknow ', 'PPJM0359', 'NEFT', NULL, '', NULL, NULL, NULL, NULL, NULL, '2017-09-06 00:00:00', '2017-09-21 03:58:40', 'Paid', NULL, NULL, NULL),
(173, NULL, 'NOOR BHARAT GAS SERVICE', 'KURSI, NINDURA, BARABANK, UTTAR PRADESH', 'PPJM0360', 'NEFT', NULL, '', NULL, NULL, NULL, NULL, NULL, '2017-09-19 12:07:37', '2017-10-06 06:23:48', 'Paid', NULL, '', '09ADTPT1124C1ZI'),
(174, NULL, 'Limra Vacations', 'Mariyam Plaza, Sec 23, Opp.\r\nCity Center Amarpali Bazar Crossing, Indira\r\nNagar Lucknow', 'PPJM0361', 'NEFT', NULL, '', NULL, NULL, NULL, NULL, NULL, '2017-09-19 12:49:30', '2017-09-19 07:19:30', 'Paid', NULL, '', '09AMPPA4633E1Z6'),
(176, NULL, 'AMBEY INTERNATIONAL', '#2557/4, Bangali Mohalla, Near Haryana Bakery Hargolal Road, Ambala Cantt-133001 Haryana India', 'PPJM0362', 'NEFT', NULL, '', NULL, NULL, NULL, NULL, NULL, '2017-09-20 07:44:28', '2017-09-20 02:14:28', 'Paid', NULL, 'Yes Bank', '06AWVPK5463A1ZE'),
(190, NULL, 'AMBEY INTERNATIONAL', '#2557/4, Bangali Mohalla,\r\nNear Haryana Bakery\r\nHargolal Road,\r\nAmbala Cantt-133001\r\nHaryana\r\nIndia', 'PPJM0323', 'NEFT', 'Paid', '', NULL, NULL, NULL, NULL, NULL, '2017-05-13 10:32:59', '2017-10-25 06:01:53', 'Paid', 'Trf from XX0445/RRN : 729811101103', 'Yes Bank', '06AWVPK5463A1ZE'),
(196, NULL, 'AGARWAL TRADING CORPORATION', '151 &amp;152, Lekhraj Market-3\r\n Indira Nagar, Faizabad Road\r\n Lucknow(Uttar Pradesh)\r\n India 226016', 'PPJM0363', 'Cheque', NULL, 'Indian Bank', '2017-09-18 00:00:00', NULL, NULL, '2017-09-19 00:00:00', NULL, '2017-09-21 08:15:51', '2017-09-21 02:45:51', 'Paid', NULL, 'Yes Bank', '09AGXPA1501H1ZK'),
(197, NULL, 'HARIT AGROVET INDIA', '\r\nPLOT NO. 33, SECTOR 13,\r\nINDUSTRAIL AREA,\r\nJAGDISHPUR (BHEL),\r\nDIST: AMETHI(U.P)', 'PPJM0364', 'NEFT', NULL, '', NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:05:33', '2017-09-21 04:35:33', 'Paid', NULL, 'Allahabad Bank', '09AFQPT9198F1ZD'),
(198, NULL, 'HARIT AGROVET INDIA', '\r\nPLOT NO. 33, SECTOR 13,\r\nINDUSTRAIL AREA,\r\nJAGDISHPUR (BHEL),\r\nDIST: AMETHI(U.P)', 'PPJM0365', 'NEFT', NULL, '', NULL, NULL, NULL, NULL, NULL, '2017-09-21 10:30:50', '2017-09-21 05:00:50', 'Paid', NULL, 'Allahabad Bank', '09AFQPT9198F1ZD'),
(199, NULL, 'NEELENDRAS CONSTRUCTION', '3/299, Sooraj Square, Vishal\r\nKhand, Gomti Nagar, Lucknow, U.P', 'PPJM0366', 'Cheque', NULL, 'Corporation Bank', '2017-09-27 00:00:00', 'Paid', NULL, '2017-09-28 00:00:00', NULL, '2017-09-28 15:28:40', '2017-10-06 06:31:13', 'Paid', NULL, 'Yes Bank', ''),
(202, NULL, 'Elegance Jewels', '3/2, Patrakar Puram, Gomti Nagar, Lucknow', 'PPJM0367', 'Cheque', NULL, 'State Bank Of India', '2017-10-05 00:00:00', NULL, NULL, '2017-10-07 00:00:00', NULL, '2017-10-09 13:16:51', '2017-10-09 07:46:51', 'Paid', '000000719209', '', '09A2PPC86791Z1'),
(203, NULL, 'AGARWAL TRADING CORPORATION', '151 &amp;152, Lekhraj Market-3\r\n Indira Nagar, Faizabad Road\r\n Lucknow(Uttar Pradesh)\r\n India 226016', 'PPJM0368', 'NEFT', NULL, '', NULL, NULL, NULL, NULL, NULL, '2017-10-09 07:59:15', '2017-10-09 02:29:15', 'Paid', 'IBKL171010179175', 'Yes Bank', '09AGXPA1501H1ZK'),
(204, NULL, 'Neha Sharma', 'H.No.225, Sector 10C, Vasundhara, Ghaziabad(U.P)', 'PPJM0369', 'NEFT', NULL, '', NULL, NULL, NULL, NULL, NULL, '2017-10-09 09:06:30', '2017-10-09 07:00:58', 'Paid', NULL, 'Yes Bank', ''),
(236, NULL, 'Donzel Techno Legal Solutions PVT LTD', 'Jagatpura, Rudrapur, Udham Singh Nagar,Uttarakhand- 263153', 'PPJM0370', 'Cheque', 'Paid', 'Bank Of Baroda', '2017-10-12 00:00:00', NULL, '00002', '2017-10-14 00:00:00', NULL, '2017-10-12 06:23:50', '2017-10-12 07:23:50', 'Paid', NULL, '', '05AAGCD2666Q1Z6'),
(237, NULL, 'Shri Nath Ji Jewellers', 'Shri Nathji Jewellers,Aliganj Bazar(Raja Bhaiya),Uttar Pradesh', 'PPJM0371', 'Cash', 'Paid', '', NULL, NULL, '', NULL, NULL, '2017-10-16 01:02:36', '2017-10-16 02:02:36', 'Paid', NULL, '', '09ACRPR6349C1Z3'),
(238, NULL, 'HARIT AGROVET INDIA', '\r\nPLOT NO. 33, SECTOR 13,\r\nINDUSTRAIL AREA,\r\nJAGDISHPUR (BHEL),\r\nDIST: AMETHI(U.P)', 'PPJM0355', 'NEFT', 'Paid', '', NULL, NULL, '', NULL, NULL, '2017-08-24 12:01:32', '2017-08-24 01:01:32', 'Paid', 'HARIT AGROVET INDIA  TRN-P17081856241031', 'Allahabad Bank', '09AFQPT9198F1ZD'),
(239, NULL, 'NEELENDRAS CONSTRUCTION', '3/299, Sooraj Square, Vishal\r\nKhand, Gomti Nagar, Lucknow, U.P', 'PPJM0356', 'Cheque', 'Paid', 'Corporation Bank', '2017-08-18 00:00:00', NULL, '976798', '2017-08-24 00:00:00', NULL, '2017-08-24 12:10:05', '2017-08-24 01:10:05', 'Paid', NULL, '', ''),
(240, NULL, 'HARIT AGROVET INDIA', 'PLOT NO. 33, SECTOR 13,\r\nINDUSTRAIL AREA,\r\nJAGDISHPUR (BHEL),\r\nDIST: AMETHI(U.P)', 'PPJM0372', 'NEFT', 'Paid', '', NULL, NULL, '', NULL, NULL, '2017-10-17 03:07:33', '2017-10-22 20:31:38', 'Paid', 'HARIT AGROVET INDIA  TRN-P17102313642296', 'Allahabad Bank', '09AFQPT9198F1ZD'),
(241, NULL, 'Limra Vacations', 'Mariyam Plaza, Sec 23, Opp. City Center Amarpali Bazar Crossing, Indira Nagar Lucknow', 'PPJM0373', 'NEFT', 'Paid', '', NULL, NULL, '', NULL, NULL, '2017-10-27 04:17:51', '2017-10-27 05:17:51', 'Paid', NULL, 'Allahabad Bank', '09AMPPA4633E1Z6'),
(242, NULL, 'RO World', '	647/11/99, 60 FEET ROAD, JANKIPURAM EXTENTION, JANKIPURAM, Lucknow, Uttar Pradesh, 226021', 'PPJM0374', 'Cash', 'Paid', '', NULL, NULL, '', NULL, NULL, '2017-10-30 04:50:27', '2017-10-29 23:23:12', 'Paid', NULL, '', '09EHKPS3803J2ZU'),
(243, NULL, 'RO World', '	647/11/99, 60 FEET ROAD, JANKIPURAM EXTENTION, JANKIPURAM, Lucknow, Uttar Pradesh, 226021', 'PPJM0375', 'Cash', 'Paid', '', NULL, NULL, '', NULL, NULL, '2017-10-30 05:18:17', '2017-10-30 06:18:17', 'Paid', NULL, '', '09EHKPS3803J2ZU'),
(244, NULL, 'R S Enterprises', 'G 20, Jankiplaza, Ring Road, Near Tedhipuliya Chauraha, Lucknow', 'PPJM0376', 'Cash', 'Paid', '', NULL, NULL, '', NULL, NULL, '2017-10-31 09:30:15', '2017-10-30 22:30:15', 'Paid', NULL, '', 'BUHPS3853H');

-- --------------------------------------------------------

--
-- Table structure for table `invservices`
--

CREATE TABLE `invservices` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `service_detail` text,
  `unit` enum('kg','ltr','sqft','qty') DEFAULT NULL,
  `quantity` bigint(15) NOT NULL,
  `price` float NOT NULL,
  `taxable_amt` float NOT NULL,
  `total_amt` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `cgst` int(11) NOT NULL,
  `sgst` int(11) NOT NULL,
  `igst` int(11) NOT NULL,
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invservices`
--

INSERT INTO `invservices` (`id`, `invoice_id`, `service_detail`, `unit`, `quantity`, `price`, `taxable_amt`, `total_amt`, `created`, `modified`, `is_deleted`, `cgst`, `sgst`, `igst`, `discount`) VALUES
(155, 122, 'BULKSMS Service', 'kg', 100000, 0.131356, 2364.41, 15500, '2017-08-29 10:01:17', '2017-10-05 15:33:56', 1, 9, 9, 0, '0.00'),
(223, 176, 'Integrated  to add other company products in admin and shows in front panel in website', 'kg', 1, 1077.97, 194.04, 1272, '2017-09-20 07:44:30', '2017-10-13 08:45:40', 1, 9, 0, 9, '0.00'),
(222, 176, 'Theme changes in front end of website', 'kg', 1, 475, 85.5, 560.5, '2017-09-20 07:44:30', '2017-10-05 08:39:05', 1, 9, 0, 9, '0.00'),
(221, 176, 'Integrated New Admin panel with existing feature', 'kg', 1, 1145, 206.1, 1351.1, '2017-09-20 07:44:30', '2017-10-05 08:40:15', 1, 9, 0, 9, '0.00'),
(219, 174, 'Website Design & Development', 'kg', 1, 5932.2, 1067.8, 7000, '2017-09-19 12:49:31', '2017-10-05 08:41:02', 1, 9, 9, 0, '0.00'),
(218, 173, 'BULKSMS Service', 'kg', 23000, 0.16, 662.49, 4342.49, '2017-09-19 12:07:37', '2017-10-13 09:01:03', 1, 9, 9, 0, '0.00'),
(244, 196, 'Product add and edit functionality in admin of agarwaltc.com website', 'kg', 1, 465, 83.7, 548.7, '2017-09-21 08:15:51', '2017-10-10 13:07:31', 1, 9, 9, 0, '0.00'),
(238, 190, 'Web Hosting 1 GB space', 'kg', 1, 1835, 330.3, 2165.3, '2017-09-20 10:56:59', '2017-10-25 00:31:53', 1, 9, 0, 9, '0.00'),
(237, 190, 'Domain Registration', 'kg', 1, 725, 130, 855.5, '2017-09-20 10:56:59', '2017-10-25 00:31:53', 1, 9, 0, 9, '0.00'),
(246, 197, 'Promotional SMS service', 'kg', 10000, 0.145, 261, 1711, '2017-09-21 10:05:33', '2017-10-13 08:40:24', 1, 9, 9, 0, '0.00'),
(245, 196, 'Update Import email address plugin using csv file', 'kg', 1, 687, 123.66, 810.66, '2017-09-21 08:15:51', '2017-10-05 08:46:37', 1, 9, 9, 0, '0.00'),
(247, 198, 'Promotional SMS Service', 'kg', 5000, 0.15, 135, 855.5, '2017-09-21 10:30:50', '2017-10-12 06:01:34', 1, 9, 9, 0, '0.00'),
(248, 199, 'Bulksms Service', 'kg', 50000, 0.14, 1260, 8260, '2017-09-28 15:28:40', '2017-10-05 15:55:51', 1, 9, 9, 0, '0.00'),
(250, 128, 'Software Cost', 'qty', 1, 17796.6, 3203.39, 21000, '2017-09-05 15:30:00', '2017-10-12 04:59:18', 1, 9, 9, 0, '0.00'),
(252, 130, 'Website Design\r\n& Development', 'qty', 1, 4237.29, 762.72, 5000, '2017-09-06 12:30:00', '2017-10-13 09:06:00', 1, 9, 9, 0, '0.00'),
(274, 204, 'Domain Renewal Charges(www.creditdesign.in)', 'kg', 1, 725.42, 130.58, 856, '2017-10-09 09:06:31', '2017-10-09 03:36:31', 0, 0, 0, 18, '0.00'),
(273, 203, 'Add new feature in admin panel of agarwaltc.com website', 'kg', 1, 1420, 255.6, 1675.6, '2017-10-09 07:59:15', '2017-10-09 02:29:15', 0, 9, 9, 0, '0.00'),
(272, 202, 'Bulksms Service', 'kg', 50000, 0.14, 1235.59, 8100, '2017-10-09 13:16:51', '2017-10-09 07:47:41', 0, 9, 9, 0, '0.00'),
(309, 236, 'Bulksms Service', 'kg', 10000, 0.1483, 266.95, 1750, '2017-10-12 12:53:51', '2017-10-12 12:59:13', 0, 9, 9, 0, '0.00'),
(310, 237, 'Bulksms Service', 'kg', 10000, 0.1483, 266.95, 1750, '2017-10-16 07:32:36', '2017-10-27 07:41:15', 0, 9, 9, 0, '0.00'),
(311, 238, 'Bulksms Service', 'kg', 15000, 0.1375, 371.29, 2434, '2017-08-24 06:31:32', '2017-08-24 01:01:32', 0, 9, 9, 0, '0.00'),
(312, 239, 'Software Project', 'kg', 1, 10593.2, 1906.78, 12500, '2017-08-24 06:40:05', '2017-08-24 01:10:05', 0, 9, 9, 0, '0.00'),
(313, 240, 'Bulksms Service', 'kg', 10000, 0.145, 261, 1711, '2017-10-17 09:37:33', '2017-10-23 03:01:38', 0, 9, 9, 0, '0.00'),
(314, 241, 'Website Design & Development', 'kg', 1, 4237.29, 762.71, 5000, '2017-10-27 10:47:51', '2017-10-27 05:17:51', 0, 9, 9, 0, '0.00'),
(315, 242, 'Bulksms Service', 'kg', 5000, 0.1694, 152.54, 1000, '2017-10-30 11:20:27', '2017-10-30 11:43:33', 0, 9, 9, 0, '0.00'),
(316, 243, 'Bulksms Service', 'kg', 5000, 0.1694, 152.54, 1000, '2017-10-30 11:48:17', '2017-10-30 11:49:48', 0, 9, 9, 0, '0.00'),
(317, 244, 'Website Renewal', 'kg', 1, 932.2, 167.8, 1100, '2017-10-31 04:00:15', '2017-10-30 22:30:15', 0, 9, 9, 0, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `is_deleted` int(10) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `office_address` text,
  `cgst` float DEFAULT NULL,
  `sgst` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `contact_number` varchar(12) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive') NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `contact_number`, `role`, `created`, `modified`, `status`, `is_deleted`) VALUES
(1, 'Admin', 'primeprogrammers@gmail.com', 'admin', '171d6c368fad53da68e64eba38e0ff1ecebe0c2c', NULL, 'king', '2016-09-01 08:01:30', '2017-10-27 02:49:00', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `gstin` varchar(300) DEFAULT NULL,
  `is_deleted` int(2) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debits`
--
ALTER TABLE `debits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `increments`
--
ALTER TABLE `increments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invservices`
--
ALTER TABLE `invservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `debits`
--
ALTER TABLE `debits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `increments`
--
ALTER TABLE `increments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
--
-- AUTO_INCREMENT for table `invservices`
--
ALTER TABLE `invservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
