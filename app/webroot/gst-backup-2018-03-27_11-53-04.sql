-- Database: `gst`
-- Generation time: Tue 27th Mar 2018 11:53:04


DROP TABLE IF EXISTS companies;

CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(111) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `contact_number` varchar(300) DEFAULT NULL,
  `alternate_number` varchar(300) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `gstin` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO companies VALUES('13','9','google','google@gmail.com','8004387168','3232352352','asasa','2783hhhh');



DROP TABLE IF EXISTS debits;

CREATE TABLE `debits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(111) NOT NULL,
  `service_id` int(111) NOT NULL,
  `vendor_id` int(111) NOT NULL,
  `vendor_name` varchar(300) DEFAULT NULL,
  `service_name` varchar(300) DEFAULT NULL,
  `amount` decimal(10,4) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `document` varchar(300) DEFAULT NULL,
  `is_deleted` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS increments;

CREATE TABLE `increments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(111) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=458 DEFAULT CHARSET=latin1;

INSERT INTO increments VALUES('418','0','1');
INSERT INTO increments VALUES('419','0','2');
INSERT INTO increments VALUES('420','0','3');
INSERT INTO increments VALUES('421','0','4');
INSERT INTO increments VALUES('422','0','5');
INSERT INTO increments VALUES('423','0','6');
INSERT INTO increments VALUES('424','0','7');
INSERT INTO increments VALUES('425','0','8');
INSERT INTO increments VALUES('426','0','9');
INSERT INTO increments VALUES('427','0','10');
INSERT INTO increments VALUES('428','0','11');
INSERT INTO increments VALUES('429','0','0');
INSERT INTO increments VALUES('430','0','1');
INSERT INTO increments VALUES('431','0','2');
INSERT INTO increments VALUES('432','0','2');
INSERT INTO increments VALUES('433','0','2');
INSERT INTO increments VALUES('434','0','3');
INSERT INTO increments VALUES('435','0','4');
INSERT INTO increments VALUES('436','0','4');
INSERT INTO increments VALUES('437','0','5');
INSERT INTO increments VALUES('438','0','5');
INSERT INTO increments VALUES('439','0','6');
INSERT INTO increments VALUES('440','0','6');
INSERT INTO increments VALUES('441','0','6');
INSERT INTO increments VALUES('442','0','6');
INSERT INTO increments VALUES('443','0','6');
INSERT INTO increments VALUES('444','0','6');
INSERT INTO increments VALUES('445','0','6');
INSERT INTO increments VALUES('446','0','7');
INSERT INTO increments VALUES('447','0','7');
INSERT INTO increments VALUES('448','0','7');
INSERT INTO increments VALUES('449','0','7');
INSERT INTO increments VALUES('450','0','7');
INSERT INTO increments VALUES('451','0','7');
INSERT INTO increments VALUES('452','0','7');
INSERT INTO increments VALUES('453','0','7');
INSERT INTO increments VALUES('454','0','7');
INSERT INTO increments VALUES('455','0','7');
INSERT INTO increments VALUES('456','0','7');
INSERT INTO increments VALUES('457','0','7');



DROP TABLE IF EXISTS invoices;

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `address` text,
  `invoiceno` varchar(25) DEFAULT NULL,
  `payment_type` enum('Cash','Cheque','NEFT','RTGS','Demand Draft') DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `bank` varchar(300) DEFAULT NULL,
  `cheque_date` datetime DEFAULT NULL,
  `cheque_status` varchar(500) DEFAULT NULL,
  `cheque_number` varchar(500) DEFAULT NULL,
  `cheque_clear_date` datetime DEFAULT NULL,
  `remarks` text,
  `consignee_mo_no` varchar(15) NOT NULL,
  `consignee_gstin` varchar(50) NOT NULL,
  `consignee_state` varchar(100) NOT NULL,
  `Consignee_if_other` varchar(50) NOT NULL,
  `other_company_name` text NOT NULL,
  `other_company_address` text NOT NULL,
  `other_company_mo_no` varchar(15) NOT NULL,
  `other_company_gstin` varchar(100) NOT NULL,
  `other_company_state` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `transaction_id` varchar(200) DEFAULT NULL,
  `amount_rec_bank` varchar(300) DEFAULT NULL,
  `gstin` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO invoices VALUES('1','9','AK Enterprises','Lucknow','PPJM09','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'','','','','','','','','','2018-03-15 03:04:28','2018-03-15 15:04:28','Paid',NULL,'','09ASVPM872723iZF');
INSERT INTO invoices VALUES('2','9','asdasd','UGF-6,Sai Plaza, Kanchana Bihari Marg, Kalyanpur Lucknow','PPJM010','Cash',NULL,'Paid','',NULL,NULL,'',NULL,NULL,'879593','029102312','123123','same','','','','','','2018-03-15 04:22:19','2018-03-18 16:54:06','cancel',NULL,'','09AAGFA4653B1ZR');
INSERT INTO invoices VALUES('3','9','google','asasa','PPJM011','Cash',NULL,'Paid','',NULL,NULL,'',NULL,NULL,'','','','same','','','','','','2018-03-24 08:06:11','2018-03-24 02:36:11','Paid',NULL,'','2783hhhh');
INSERT INTO invoices VALUES('4','9','google','asasa','PPJM012','Cash','2018-03-25 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'','','','same','','','','','','2018-03-26 04:56:26','2018-03-26 11:26:26',NULL,NULL,'','2783hhhh');
INSERT INTO invoices VALUES('5','9','Prime Programmer','UGF 6, Sai Plaza, Kanchana Bihari Marg, Kalyanpur, Near SBI ATM,Lucknow Uttar Pradesh-226022','1','Cash','2018-03-22 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','qweqweqwe','qweqweqwe','same','','','','','','2018-03-26 05:05:12','2018-03-26 11:35:12',NULL,NULL,'','asdasd');
INSERT INTO invoices VALUES('6','9','Prime Programmer','UGF 6, Sai Plaza, Kanchana Bihari Marg, Kalyanpur, Near SBI ATM,Lucknow Uttar Pradesh-226022','2','Cash','2018-03-22 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','qweqweqwe','qweqweqwe','same','','','','','','2018-03-26 05:08:44','2018-03-26 11:38:44',NULL,NULL,'','asdasd');
INSERT INTO invoices VALUES('7','9','Prime Programmer','UGF 6, Sai Plaza, Kanchana Bihari Marg, Kalyanpur, Near SBI ATM,Lucknow Uttar Pradesh-226022','2','Cash','2018-03-22 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','qweqweqwe','qweqweqwe','same','','','','','','2018-03-26 05:11:10','2018-03-26 11:41:10',NULL,NULL,'','asdasd');
INSERT INTO invoices VALUES('8','9','Prime Programmer','UGF 6, Sai Plaza, Kanchana Bihari Marg, Kalyanpur, Near SBI ATM,Lucknow Uttar Pradesh-226022','2','Cash','2018-03-22 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','qweqweqwe','qweqweqwe','same','','','','','','2018-03-26 05:18:46','2018-03-26 11:48:46',NULL,NULL,'','asdasd');
INSERT INTO invoices VALUES('9','9','asdasd','asdas','3','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','q','w','same','','','','','','2018-03-26 05:23:22','2018-03-26 11:53:22',NULL,NULL,'','xsada');
INSERT INTO invoices VALUES('10','9','Prime Programmer','UGF 6, Sai Plaza, Kanchana Bihari Marg, Kalyanpur, Near SBI ATM,Lucknow Uttar Pradesh-226022','4','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','q','w','same','','','','','','2018-03-26 05:24:25','2018-03-26 11:54:25',NULL,NULL,'','aAs');
INSERT INTO invoices VALUES('11','9','Prime Programmer','UGF 6, Sai Plaza, Kanchana Bihari Marg, Kalyanpur, Near SBI ATM,Lucknow Uttar Pradesh-226022','4','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','q','w','same','','','','','','2018-03-26 05:24:58','2018-03-26 11:54:58',NULL,NULL,'','aAs');
INSERT INTO invoices VALUES('12','9','','','5','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8795202855','','','same','','','','','','2018-03-27 04:15:38','2018-03-27 10:45:38',NULL,NULL,'','');
INSERT INTO invoices VALUES('13','9','','','5','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8795202855','','','same','','','','','','2018-03-27 04:23:43','2018-03-27 10:53:43',NULL,NULL,'','');
INSERT INTO invoices VALUES('14','9','','','6','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8795202855','','','same','','','','','','2018-03-27 04:24:35','2018-03-27 10:54:35',NULL,NULL,'','');
INSERT INTO invoices VALUES('15','9','','','6','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8795202855','','','same','','','','','','2018-03-27 04:25:06','2018-03-27 10:55:06',NULL,NULL,'','');
INSERT INTO invoices VALUES('16','9','','','6','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8795202855','','','same','','','','','','2018-03-27 04:28:32','2018-03-27 10:58:32',NULL,NULL,'','');
INSERT INTO invoices VALUES('17','9','','','6','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8795202855','','','same','','','','','','2018-03-27 04:31:26','2018-03-27 11:01:26',NULL,NULL,'','');
INSERT INTO invoices VALUES('18','9','','','6','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8795202855','','','same','','','','','','2018-03-27 04:35:50','2018-03-27 11:05:50',NULL,NULL,'','');
INSERT INTO invoices VALUES('19','9','','','6','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8795202855','','','same','','','','','','2018-03-27 04:38:42','2018-03-27 11:08:42',NULL,NULL,'','');
INSERT INTO invoices VALUES('20','9','','','6','Cash','2018-03-26 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8795202855','','','same','','','','','','2018-03-27 04:39:46','2018-03-27 11:09:46',NULL,NULL,'','');
INSERT INTO invoices VALUES('21','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:42:51','2018-03-27 11:12:51',NULL,NULL,'','');
INSERT INTO invoices VALUES('22','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:45:37','2018-03-27 11:15:37',NULL,NULL,'','');
INSERT INTO invoices VALUES('23','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:50:14','2018-03-27 11:20:14',NULL,NULL,'','');
INSERT INTO invoices VALUES('24','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:50:55','2018-03-27 11:20:55',NULL,NULL,'','');
INSERT INTO invoices VALUES('25','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:51:08','2018-03-27 11:21:08',NULL,NULL,'','');
INSERT INTO invoices VALUES('26','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:51:33','2018-03-27 11:21:33',NULL,NULL,'','');
INSERT INTO invoices VALUES('27','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:52:56','2018-03-27 11:22:56',NULL,NULL,'','');
INSERT INTO invoices VALUES('28','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:54:07','2018-03-27 11:24:07',NULL,NULL,'','');
INSERT INTO invoices VALUES('29','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:54:43','2018-03-27 11:24:43',NULL,NULL,'','');
INSERT INTO invoices VALUES('30','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:55:32','2018-03-27 11:25:32',NULL,NULL,'','');
INSERT INTO invoices VALUES('31','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:56:27','2018-03-27 11:26:27',NULL,NULL,'','');
INSERT INTO invoices VALUES('32','9','asdasd','','7','Cash','2018-03-27 00:00:00','Paid','',NULL,NULL,'',NULL,NULL,'8004387168','','','same','','','','','','2018-03-27 04:58:11','2018-03-27 11:28:11',NULL,NULL,'','');



DROP TABLE IF EXISTS invservices;

CREATE TABLE `invservices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(111) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `service_detail` text,
  `serial_number` varchar(100) NOT NULL,
  `hsn_sac` varchar(30) NOT NULL,
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
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO invservices VALUES('1','0','1','RO','','3213123','kg','1','8474.58','1525.42','10000','2018-03-15 15:04:28','2018-03-15 15:04:28','0','9','9','0','0.00');
INSERT INTO invservices VALUES('2','0','2','R O','','sdfas21312','kg','5','1400','1260','8260','2018-03-15 16:22:19','2018-03-15 16:22:19','0','9','9','0','0.00');
INSERT INTO invservices VALUES('3','0','3','Domain registration','3242342342','2343121','kg','19','1900','342','2242','2018-03-24 02:36:12','2018-03-24 02:36:12','0','9','9','0','0.00');
INSERT INTO invservices VALUES('4','0','3','Web Hosting','435345','324234','kg','5','6000','1080','7080','2018-03-24 02:36:12','2018-03-24 02:36:12','0','9','9','0','0.00');
INSERT INTO invservices VALUES('5','0','4','Bulksms','123123','1231231','kg','1','10','1.8','11.8','2018-03-26 11:26:26','2018-03-26 11:26:26','0','9','9','0','0.00');
INSERT INTO invservices VALUES('6','0','5','Bulksms ','asdasdas','asdasdas','kg','1000','10000','1800','11800','2018-03-26 11:35:12','2018-03-26 11:35:12','0','9','9','0','0.00');
INSERT INTO invservices VALUES('7','0','6','Bulksms ','asdasdas','asdasdas','kg','1000','10000','1800','11800','2018-03-26 11:38:44','2018-03-26 11:38:44','0','9','9','0','0.00');
INSERT INTO invservices VALUES('8','0','7','Bulksms ','asdasdas','asdasdas','kg','1000','10000','1800','11800','2018-03-26 11:41:10','2018-03-26 11:41:10','0','9','9','0','0.00');
INSERT INTO invservices VALUES('9','0','8','Bulksms ','asdasdas','asdasdas','kg','1000','10000','1800','11800','2018-03-26 11:48:46','2018-03-26 11:48:46','0','9','9','0','0.00');
INSERT INTO invservices VALUES('10','0','9','sadas','435345','asdas','kg','100','10000','1800','11800','2018-03-26 11:53:23','2018-03-26 11:53:23','0','9','9','0','0.00');
INSERT INTO invservices VALUES('11','0','10','sadas','435345','asdas','kg','100','10000','1800','11800','2018-03-26 11:54:25','2018-03-26 11:54:25','0','9','9','0','0.00');
INSERT INTO invservices VALUES('12','0','11','sadas','435345','asdas','kg','100','10000','1800','11800','2018-03-26 11:54:59','2018-03-26 11:54:59','0','9','9','0','0.00');
INSERT INTO invservices VALUES('13','0','12','adasda','123123','dasd','kg','1','10','1.8','11.8','2018-03-27 10:45:38','2018-03-27 10:45:38','0','9','9','0','0.00');
INSERT INTO invservices VALUES('14','0','13','adasda','123123','dasd','kg','1','10','1.8','11.8','2018-03-27 10:53:44','2018-03-27 10:53:44','0','9','9','0','0.00');
INSERT INTO invservices VALUES('15','0','14','adasda','123123','dasd','kg','1','10','1.8','11.8','2018-03-27 10:54:35','2018-03-27 10:54:35','0','9','9','0','0.00');
INSERT INTO invservices VALUES('16','0','15','adasda','123123','dasd','kg','1','10','1.8','11.8','2018-03-27 10:55:06','2018-03-27 10:55:06','0','9','9','0','0.00');
INSERT INTO invservices VALUES('17','0','16','adasda','123123','dasd','kg','1','10','1.8','11.8','2018-03-27 10:58:32','2018-03-27 10:58:32','0','9','9','0','0.00');
INSERT INTO invservices VALUES('18','0','17','adasda','123123','dasd','kg','1','10','1.8','11.8','2018-03-27 11:01:26','2018-03-27 11:01:26','0','9','9','0','0.00');
INSERT INTO invservices VALUES('19','0','18','adasda','123123','dasd','kg','1','10','1.8','11.8','2018-03-27 11:05:50','2018-03-27 11:05:50','0','9','9','0','0.00');
INSERT INTO invservices VALUES('20','0','19','adasda','123123','dasd','kg','1','10','1.8','11.8','2018-03-27 11:08:42','2018-03-27 11:08:42','0','9','9','0','0.00');
INSERT INTO invservices VALUES('21','0','20','adasda','123123','dasd','kg','1','10','1.8','11.8','2018-03-27 11:09:46','2018-03-27 11:09:46','0','9','9','0','0.00');
INSERT INTO invservices VALUES('22','0','21','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:12:52','2018-03-27 11:12:52','0','9','9','0','0.00');
INSERT INTO invservices VALUES('23','0','22','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:15:37','2018-03-27 11:15:37','0','9','9','0','0.00');
INSERT INTO invservices VALUES('24','0','23','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:20:15','2018-03-27 11:20:15','0','9','9','0','0.00');
INSERT INTO invservices VALUES('25','0','24','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:20:55','2018-03-27 11:20:55','0','9','9','0','0.00');
INSERT INTO invservices VALUES('26','0','25','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:21:09','2018-03-27 11:21:09','0','9','9','0','0.00');
INSERT INTO invservices VALUES('27','0','26','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:21:33','2018-03-27 11:21:33','0','9','9','0','0.00');
INSERT INTO invservices VALUES('28','0','27','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:22:56','2018-03-27 11:22:56','0','9','9','0','0.00');
INSERT INTO invservices VALUES('29','0','28','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:24:07','2018-03-27 11:24:07','0','9','9','0','0.00');
INSERT INTO invservices VALUES('30','0','29','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:24:43','2018-03-27 11:24:43','0','9','9','0','0.00');
INSERT INTO invservices VALUES('31','0','30','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:25:32','2018-03-27 11:25:32','0','9','9','0','0.00');
INSERT INTO invservices VALUES('32','0','31','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:26:28','2018-03-27 11:26:28','0','9','9','0','0.00');
INSERT INTO invservices VALUES('33','0','32','asdasda','123123','wqdqweqw','kg','1','100','18','118','2018-03-27 11:28:11','2018-03-27 11:28:11','0','9','9','0','0.00');



DROP TABLE IF EXISTS services;

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(111) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `is_deleted` int(10) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO services VALUES('9','9','product','0','2018-03-24 03:21:12','2018-03-24 03:23:48');



DROP TABLE IF EXISTS settings;

CREATE TABLE `settings` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(30) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `gstin` varchar(15) NOT NULL,
  `pan_number` varchar(20) NOT NULL,
  `address` varchar(70) NOT NULL,
  `term_condition` varchar(500) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bank_name` text NOT NULL,
  `account_no` varchar(200) NOT NULL,
  `branch_ifs` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO settings VALUES('1','9','A K Enterprises','','09ASVPM6216D','ASVPM6213D','Aliganj, Lucknow','1. To be made payable to Prime Programmer\r\n2. Payment should be advance.\r\n3. Charges and any other fees for the use of\r\n     our services are described above.','8795202855','mkm@gmail.com','Allahabad bank','891273981237912','Jankipuram, Lucknow','2018-03-15 16:24:58','0000-00-00 00:00:00');



DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(111) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `contact_number` varchar(12) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive') NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES('5','5','admin','admin@gmail.com','admin','7632539bbc275598de281898add43bbf77e55ee6','8181939017','admin','2017-11-27 09:34:34','2017-11-27 15:05:33','Active','');
INSERT INTO users VALUES('9','5',NULL,'admin1@gmail.com','admin1','7632539bbc275598de281898add43bbf77e55ee6',NULL,'c_admin','2017-11-27 09:55:23','2017-11-27 09:55:23','Active','');
INSERT INTO users VALUES('10','9',NULL,'acc@gmail.com','accountant','7632539bbc275598de281898add43bbf77e55ee6',NULL,'accountant_invoice','2017-11-27 09:58:12','2017-11-27 09:58:12','Active','');
INSERT INTO users VALUES('11','5',NULL,'admin11@gmail.com','admin11','384404d4526ed1a6865654a0cb4782cd07c61243',NULL,'c_admin','2017-11-27 10:25:24','2017-11-27 10:25:24','Active','');
INSERT INTO users VALUES('12','11',NULL,'admin12@gmail.com','admin12','70644edb48a24b10b8ccc36ca9d7d026e0117db8',NULL,'accountant_invoice','2017-11-27 10:26:32','2017-11-27 10:26:32','Active','');
INSERT INTO users VALUES('13','5',NULL,'admin2@gmail.com','admin2','7632539bbc275598de281898add43bbf77e55ee6',NULL,'c_admin','2017-11-27 18:33:17','2017-11-27 18:33:17','Active','');
INSERT INTO users VALUES('14','13',NULL,'a1cc@gmail.com','accountant1','7632539bbc275598de281898add43bbf77e55ee6',NULL,'accountant_invoice','2017-11-27 18:33:57','2017-11-27 18:33:57','Active','');
INSERT INTO users VALUES('15','5',NULL,'admin10@gmail.com','admin10','7632539bbc275598de281898add43bbf77e55ee6',NULL,'c_admin','2018-03-10 11:52:58','2018-03-10 11:52:58','Active','');



DROP TABLE IF EXISTS vendors;

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(111) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `gstin` varchar(300) DEFAULT NULL,
  `is_deleted` int(2) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




