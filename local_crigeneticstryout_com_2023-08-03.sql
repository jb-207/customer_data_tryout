# ************************************************************
# Sequel Ace SQL dump
# Version 20050
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 5.7.39)
# Database: local_crigeneticstryout_com
# Generation Time: 2023-08-04 06:03:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tryout_cust
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tryout_cust`;

CREATE TABLE `tryout_cust` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kit_id` int(11) unsigned NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tryout_cust_kit` (`kit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tryout_cust` WRITE;
/*!40000 ALTER TABLE `tryout_cust` DISABLE KEYS */;

INSERT INTO `tryout_cust` (`id`, `kit_id`, `customer_name`)
VALUES
	(11,34,'Kevin'),
	(12,35,'Nancy'),
	(13,36,'Deborah'),
	(14,22,'Amanda'),
	(15,24,'Joshua'),
	(16,3,'Betty'),
	(18,11,'Matthew'),
	(19,17,'Karen'),
	(20,18,'Sarah'),
	(21,23,'Jessica'),
	(22,27,'Susan'),
	(23,38,'Barbara'),
	(24,21,'Elizabeth'),
	(25,25,'Linda'),
	(26,8,'Jennifer'),
	(27,1,'Patricia'),
	(28,32,'Mary'),
	(29,30,'Sharon'),
	(30,19,'Emma'),
	(31,15,'Jacob'),
	(32,29,'Cynthia'),
	(33,20,'Laura'),
	(34,6,'Jason'),
	(35,7,'Ryan'),
	(36,10,'Nicholas'),
	(37,2,'Edward'),
	(38,13,'Ronald'),
	(39,39,'Shirley');

/*!40000 ALTER TABLE `tryout_cust` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tryout_cust_desc
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tryout_cust_desc`;

CREATE TABLE `tryout_cust_desc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tryout_cust_desc_customer` (`customer_id`),
  CONSTRAINT `fk_tryout_cust_desc_customer` FOREIGN KEY (`customer_id`) REFERENCES `tryout_cust` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tryout_cust_desc` WRITE;
/*!40000 ALTER TABLE `tryout_cust_desc` DISABLE KEYS */;

INSERT INTO `tryout_cust_desc` (`id`, `customer_id`, `description`)
VALUES
	(1,28,'Sed ante. Vivamus tortor. Duis mattis egëstas metus. Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.'),
	(2,14,'Cuim sociis natoque penatibus et magnệis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cuim sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.'),
	(4,16,'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum. In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.'),
	(5,12,'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.'),
	(7,26,'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.'),
	(8,37,'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus. Cuim sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cuim sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'),
	(9,31,'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.'),
	(10,33,'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.'),
	(11,34,'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.'),
	(12,35,'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus acCuimsan odio. Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel acCuimsan tellus nisi eu orci. Mauris lacinia sapien quis libero.'),
	(13,36,'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse acCuimsan tortor quis turpis. Sed ante. Vivamus tortor. Duis mattis egestas metus. Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.'),
	(14,22,'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse acCuimsan tortor quis turpis. Sed ante. Vivamus tortor. Duis mattis egestas metus.'),
	(15,24,'Fusce consequat. Nulla nisl. Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.'),
	(18,11,'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.'),
	(20,18,'Phasellus sit amet erat. Nulla tempus. Vivamus in felis Εu sapien cursus vestibulum. Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.'),
	(21,23,'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.'),
	(22,27,'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl. Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.'),
	(23,38,'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl. Nunc nisl.'),
	(24,21,'Suspendisse potenti. In eleifóend quam a odio. In hac habitassệe platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat. Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.'),
	(25,25,'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.'),
	(28,32,'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.'),
	(29,30,'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.'),
	(30,19,'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque. Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.'),
	(31,15,'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.'),
	(32,29,'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.'),
	(33,20,'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus. Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.'),
	(38,13,'Fusce consequat. Nulla nisl. Nunc nisl.'),
	(39,39,'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.'),
	(40,28,'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus acCuimsan odio. Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel acCuimsan tellus nisi eu orci. Mauris lacinia sapien quis libero.'),
	(41,14,'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum. In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse acCuimsan tortor quis turpis.'),
	(43,16,'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.'),
	(44,12,'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed acCuimsan felis. Ut at dolor quis odio consequat varius.'),
	(46,26,'Cuim sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cuim sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.'),
	(47,37,'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed acCuimsan felis. Ut at dolor quis odio consequat varius.'),
	(48,31,'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.'),
	(49,33,'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed acCuimsan felis. Ut at dolor quis odio consequat varius.'),
	(50,34,'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum. Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.'),
	(51,35,'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl. Nunc nisl.');

/*!40000 ALTER TABLE `tryout_cust_desc` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tryout_cust_kits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tryout_cust_kits`;

CREATE TABLE `tryout_cust_kits` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kit_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kit_id` (`kit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tryout_cust_kits` WRITE;
/*!40000 ALTER TABLE `tryout_cust_kits` DISABLE KEYS */;

INSERT INTO `tryout_cust_kits` (`id`, `kit_id`)
VALUES
	(1,'DE567234'),
	(4,'DE567235'),
	(7,'DE567236'),
	(10,'DE567237'),
	(13,'DE567238'),
	(16,'DE567239'),
	(19,'DE567240'),
	(22,'DE567241'),
	(25,'DE567242'),
	(28,'DE567243'),
	(31,'DE567244'),
	(34,'DE567245'),
	(37,'DE567246'),
	(2,'GE123543'),
	(5,'GE123544'),
	(8,'GE123545'),
	(11,'GE123546'),
	(14,'GE123547'),
	(17,'GE123548'),
	(20,'GE123549'),
	(23,'GE123550'),
	(26,'GE123551'),
	(29,'GE123552'),
	(32,'GE123553'),
	(35,'GE123554'),
	(38,'GE123555'),
	(3,'HJ786345'),
	(6,'HJ786346'),
	(9,'HJ786347'),
	(12,'HJ786348'),
	(15,'HJ786349'),
	(18,'HJ786350'),
	(21,'HJ786351'),
	(24,'HJ786352'),
	(27,'HJ786353'),
	(30,'HJ786354'),
	(33,'HJ786355'),
	(36,'HJ786356'),
	(39,'HJ786357');

/*!40000 ALTER TABLE `tryout_cust_kits` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
