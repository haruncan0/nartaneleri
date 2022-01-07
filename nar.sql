# Host: localhost  (Version 5.5.5-10.4.19-MariaDB)
# Date: 2022-01-07 18:01:37
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "about"
#

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(255) DEFAULT NULL,
  `about_text` text DEFAULT NULL,
  `why_title` varchar(255) DEFAULT NULL,
  `why_text` varchar(255) DEFAULT NULL,
  `comment_title` varchar(255) DEFAULT NULL,
  `comment_text` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "about"
#

INSERT INTO `about` VALUES (1,'Nar Taneleri','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil sed sint ad harum tempora ratione nostrum itaque nesciunt quis eligendi laboriosam consequatur dolore perferendis placeat delectus, nemo molestias repudiandae alias! Deleniti blanditiis distinctio praesentium cupiditate amet tempore optio molestias aperiam impedit dolorum dolorem soluta mollitia fugiat, in ea, laudantium possimus expedita fuga nisi voluptate. Reiciendis dignissimos, ut explicabo quam non fugit. Impedit illum quam dolor.','Neden Bizi Seçmelisiniz?','Çocuklarımızı 15 yıllık tecrübemizle doğayla iç içe büyütüyoruz.','Hakkımızdaki Yorumlar','Bizi velilerimizden dinleyin','2021-10-27 17:40:13');

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `name_surname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `deleted` int(11) DEFAULT 0,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `super_admin` int(11) DEFAULT 0,
  `profil_photo` varchar(255) DEFAULT 'assets/uploads/profil_photo.png',
  `limited` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'nartaneleri','Haruncan Sarı','$2y$10$IjVzuwK9tUSuTFmgCfNxM.7kwHyhPZhXO9X1Cz.UKzKPqzvBMzdUa',1,0,'2020-08-14 13:13:43','2020-08-14 15:58:14',1,'assets/uploads/564ee4cc7276967438257ee54e1a4213.jpg',0),(2,'devoloper','Semih Gündüz','$2y$10$CWnHInzPI07MZsIFk1f95OGOrV6oQogXlJchYUSobOHJWid9I5OEq',1,0,NULL,NULL,1,'assets/uploads/b135440e14dbf77302cd369ddf662b95.png',0);

#
# Structure for table "banner"
#

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_banner` varchar(255) DEFAULT NULL,
  `class_banner` varchar(255) DEFAULT NULL,
  `event_banner` varchar(255) DEFAULT NULL,
  `teacher_banner` varchar(255) DEFAULT NULL,
  `gallery_banner` varchar(255) DEFAULT NULL,
  `contact_banner` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "banner"
#

INSERT INTO `banner` VALUES (1,'Nar Taneleri Hakkında','Sınıflarımız','Etkinliklerimiz','Öğretmenlerimiz','Galeri','İletişim Bilgilerimiz','2021-11-01 09:06:01');

#
# Structure for table "class"
#

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `lesson_hours` varchar(255) DEFAULT NULL,
  `student` varchar(255) DEFAULT NULL,
  `age_range` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

#
# Data for table "class"
#

INSERT INTO `class` VALUES (4,'Şampiyonlar Sınıfı','sampiyonlar-sinifi','<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>\r\n\r\n<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>\r\n\r\n<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>','Admin','08.00 - 10.00','20','3 - 4','1500','#eaf518','assets/uploads/ad6cd31073d789067fd7065988c32eec.jpg','2021-10-29 09:19:37','2021-10-29 14:34:42',1,0),(5,'Dahiler Yeşil','dahiler-yesil','<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>\r\n\r\n<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>\r\n\r\n<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>','Admin','09.00 - 15.00','20','4 - 5','600','#3cff00','assets/uploads/1f8496dbe10a7cb9b3a557f9d672d293.jpg','2021-10-29 09:21:02','2021-10-29 14:34:52',1,0),(6,'Dahiler Pembe','dahiler-pembe','<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>\r\n\r\n<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>','Admin','08.00 - 10.00','25','5 - 6','400','#fa0dab','assets/uploads/4ee9c36277fd21f54e2efdeedce28964.jpg','2021-10-29 09:21:35','2021-10-29 14:35:05',1,0),(7,'Nar Çiçekleri Turuncu','nar-cicekleri-turuncu','<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>\r\n\r\n<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>\r\n\r\n<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>','Admin','09.00 - 12.00','35','6 - 7','650','#ffa600','assets/uploads/018259410f386b106eed378c9c0587a6.jpg','2021-10-29 09:22:28','2021-10-29 14:35:19',1,0),(8,'Nar Çiçekleri Mavi','nar-cicekleri-mavi','<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>\r\n\r\n<p>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</p>','Admin','09.00 - 15.00','15','3 - 4','1000','#0d00ff','assets/uploads/9ba271979358b5d1789510802ffe7b97.jpg','2021-10-29 09:22:59','2021-10-29 14:35:27',1,0),(9,'Tatlı Narlar Lila','tatli-narlar-lila','<h4>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</h4>','Admin','09.00 - 11.00','35','3 - 4','1000','#c8a2c8','assets/uploads/e230c07e8345cdf7b22e6933a3541533.jpg','2021-10-29 09:23:28','2021-10-29 14:35:49',1,0),(10,'Tatlı Narlar Mor','tatli-narlar-mor','<h4>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.</h4>\r\n\r\n<h4>Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.Progressively brand sticky whit without frctionless voritals vsualize coseffective networks is viralProgressively redefine efficient platforms cuttingedge business developed andexteinsive aservices Collaboratively conceptualize futureproof partnerships through holistic aproiided progreively brand sticky ROwithout frictionless vortals. Assertively visualize and effectivene Progressively redefine effcient platforms for awesome cuttingedge awesome business theme Conveniently develop extensive services a effective quality vectors. Colaboratvely coeptuale future-proof partnerships through holistic products.​​​​​​​</h4>','Admin','08.00 - 10.00','35','5 - 6','1200','#a600ff','assets/uploads/eb816e2aac72ee03e6a8c5ad822496ca.jpg','2021-10-29 09:24:01','2021-10-29 14:35:58',1,0),(21,'new class','new-class','<p>new class</p>','new class','new class','new class','new class','new class','#f01a26','assets/uploads/9793e556319dc268b98a862062ae30f9.jpg','2021-10-29 10:20:40',NULL,1,1),(22,'test','test','<p>class</p>','class','class','class','class','class','#f01a26','assets/uploads/bac4e58491b1600818ccfa7fe1bbdb37.jpg','2021-10-29 10:21:10',NULL,1,1),(23,'yeni sınıf','yeni-sinif','<p>yeni sınıf</p>','yeni sınıf','yeni sınıf','yeni sınıf','yeni sınıf','yeni sınıf','#918b8b','assets/uploads/3252f5125ea8737fcbed1015ddc0d0c6.jpg','2021-10-29 14:27:37','2021-10-29 14:28:39',1,0);

#
# Structure for table "class_ticket"
#

DROP TABLE IF EXISTS `class_ticket`;
CREATE TABLE `class_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

#
# Data for table "class_ticket"
#

INSERT INTO `class_ticket` VALUES (25,20,4,0),(26,21,5,0),(27,22,5,0),(28,21,6,0),(29,23,6,0),(30,24,7,0),(31,25,7,0),(32,24,8,0),(33,26,8,0),(34,27,23,0);

#
# Structure for table "contact"
#

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_time` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `update_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "contact"
#

INSERT INTO `contact` VALUES (1,'7:00 - 18:00','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt.','0000 000 00 00','0000 000 00 00','info@test.com','#','#','#','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d374.5913969415078!2d36.2855427!3d41.3147114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408879bc3d3f603d:0xc47f33d3cab47ebd!2sSamsun Nar Taneleri Kreş ve Gündüz Bakım Evi Atakum!5e0!3m2!1sen!2s','2022-01-07 15:52:52');

#
# Structure for table "contract"
#

DROP TABLE IF EXISTS `contract`;
CREATE TABLE `contract` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "contract"
#

INSERT INTO `contract` VALUES (1,'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis placerat enim, non rutrum orci vehicula sed. Nam diam ipsum, varius ut auctor sit amet, hendrerit eu nulla. Nam euismod odio a ipsum fringilla scelerisque. Nunc suscipit, risus in tristique porttitor, libero ex pretium tellus, eu viverra justo ex sit amet lectus. Phasellus laoreet nec velit non euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ligula dui, commodo a mollis non, scelerisque nec eros. In aliquet lobortis congue. Nulla finibus in dui eu tempus. Nullam leo felis, lacinia eget nisl vel, porttitor ultrices risus. Sed nec.</p>');

#
# Structure for table "event"
#

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

#
# Data for table "event"
#

INSERT INTO `event` VALUES (2,'English Time','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>','#ffc000','english-time','assets/uploads/5eba3ff1cdfee170c329c215ac61222a.jpg','2021-11-01 09:57:08',NULL,1,0),(3,'Montessori','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>&nbsp;</p>','#f01a26','montessori','assets/uploads/1d9815889e7cadbd215492733e2ca93b.jpg','2021-10-29 17:28:58',NULL,1,0),(4,'Cimnastik','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>','#fc7f0c','cimnastik','assets/uploads/3b3b13574e7856b13257a8611034894e.jpg','2021-10-29 16:57:03',NULL,1,0),(5,'Segni Mossi','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae doloremque veritatis ipsa non, architecto consequatur tempore aut numquam nulla maiores nisi modi labore! Consectetur, incidunt maiores! Quae eius commodi quod, non iste maiores odit quo nihil velit eveniet doloremque possimus dolores fugit explicabo, accusantium aperiam similique porro dolorum architecto earum. Molestiae pariatur voluptatum laborum, praesentium voluptatem at iusto tenetur animi.</p>','#ff00cc','segni-mossi','assets/uploads/61cf26fa0571949859088b59bebde33c.jpg','2021-10-29 16:57:24',NULL,1,0);

#
# Structure for table "facility"
#

DROP TABLE IF EXISTS `facility`;
CREATE TABLE `facility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title1` varchar(255) DEFAULT NULL,
  `text1` varchar(255) DEFAULT NULL,
  `image_path1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `text2` varchar(255) DEFAULT NULL,
  `image_path2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `text3` varchar(255) DEFAULT NULL,
  `image_path3` varchar(255) DEFAULT NULL,
  `title4` varchar(255) DEFAULT NULL,
  `text4` varchar(255) DEFAULT NULL,
  `image_path4` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "facility"
#

INSERT INTO `facility` VALUES (1,'Aktif Öğrenme','En sevdikleri şey olan oyunlarla becerilerini geliştiriyoruz.','assets/uploads/5ced63f63c3ce95d01ff9c9f0dcb00fc.png','Uzman Öğretmenler','Çocuklarımız için alanında uzman, deneyimli öğretmenlerimizi tercih ediyoruz.','assets/uploads/2847814ae1b96a14fc72e037b212f685.png','Stratejik konum','Bulunduğu lokasyonda en çok tercih edilen kurum olma özelliğini taşıyoruz.','assets/uploads/fe54d404853314df8fa071833f68c383.png','Spor Aktiviteleri','Düzenli olarak eğitimlerini destekleyecek nitelikte aktiviteler tercih ediyoruz.','assets/uploads/306387ee4d4d8ca4a2a37c70c432b848.png','2022-01-07 15:47:42');

#
# Structure for table "gallery"
#

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

#
# Data for table "gallery"
#

INSERT INTO `gallery` VALUES (1,'assets/uploads/b423187f2945dd5aa0bd27be9f41c7aa.jpg','14','2021-10-28 13:09:43','2021-10-28 14:40:06',1,1),(2,'assets/uploads/ba9d9c5ac27cb234175f63632387066f.jpg','13','2021-10-28 13:29:57',NULL,1,1),(3,'assets/uploads/bd3cadcc89cb3082930502e8fefcbdfb.jpg','15','2021-10-28 13:51:49',NULL,1,1),(4,'assets/uploads/458441a5c886ec4b09a72fad23d694b2.jpg','24','2021-10-28 13:56:28',NULL,1,0),(5,'assets/uploads/f078b550fd6cc0143a40f5eef2b875f6.jpg','24','2021-10-28 13:56:37',NULL,1,0),(6,'assets/uploads/0f9e81f7d97a035efdee25d8236b3d58.jpg','13','2021-10-28 15:00:29',NULL,1,0),(7,'assets/uploads/959f8fd40a23998c3bb5e9d2daaa0060.jpg','13','2021-10-28 15:00:36',NULL,1,0),(8,'assets/uploads/bd6304a046aacd7f6d35a52309794281.jpg','14','2021-10-28 15:00:41',NULL,1,0),(9,'assets/uploads/c91eaa6736810c75d37a29162428d7c6.jpg','14','2021-10-28 15:00:46','2021-10-29 15:58:01',1,0),(10,'assets/uploads/98303a3bfb18fa6cf97890435e7088df.jpg','15','2021-10-28 15:00:51',NULL,1,0),(11,'assets/uploads/8cf395bf73718da013a24ec5ff9d5d56.jpg','15','2021-10-28 15:01:01',NULL,1,0),(12,'assets/uploads/ad1b4205f13eef77e146db2f923088a7.jpg','25','2021-10-28 15:01:05',NULL,1,0),(13,'assets/uploads/9ae2b9795b170198b7bb62c148eecf9e.jpg','25','2021-10-28 15:01:10',NULL,1,0),(14,'assets/uploads/7356bb27a5ac335c48a75607808d0047.jpg','13','2021-10-28 15:01:20',NULL,1,0);

#
# Structure for table "gallery_group"
#

DROP TABLE IF EXISTS `gallery_group`;
CREATE TABLE `gallery_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

#
# Data for table "gallery_group"
#

INSERT INTO `gallery_group` VALUES (13,'Şampiyonlar Sınıfı',NULL,'2021-10-28 12:49:34',NULL,1,0),(14,'Dahiler Sınıfları',NULL,'2021-10-28 12:49:39',NULL,1,0),(15,'Nar Çiçekleri Sınıfları',NULL,'2021-10-28 12:49:44',NULL,1,0),(17,'Tatlı Narlar Sınıfları',NULL,'2021-10-28 12:50:30',NULL,1,1),(23,'a',NULL,'2021-10-28 13:01:04',NULL,1,1),(24,'test',NULL,'2021-10-28 13:52:29',NULL,1,1),(25,'Tatlı Narlar Sınıfları',NULL,'2021-10-28 14:59:42',NULL,1,0);

#
# Structure for table "homepage"
#

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE `homepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(255) DEFAULT NULL,
  `about_text` varchar(1000) DEFAULT NULL,
  `about_button` varchar(255) DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `gallery_title` varchar(255) DEFAULT NULL,
  `gallery_text` varchar(255) DEFAULT NULL,
  `gallery_button` varchar(255) DEFAULT NULL,
  `class_title` varchar(255) DEFAULT NULL,
  `class_text` varchar(255) DEFAULT NULL,
  `class_button` varchar(255) DEFAULT NULL,
  `teacher_title` varchar(255) DEFAULT NULL,
  `teacher_text` varchar(255) DEFAULT NULL,
  `teacher_button` varchar(255) DEFAULT NULL,
  `why_title` varchar(255) DEFAULT NULL,
  `why_text` varchar(255) DEFAULT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `event_text` varchar(255) DEFAULT NULL,
  `event_button` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "homepage"
#

INSERT INTO `homepage` VALUES (1,'Nar Taneleri','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil sed sint ad harum tempora ratione nostrum itaque nesciunt quis eligendi laboriosam consequatur dolore perferendis placeat delectus, nemo molestias repudiandae alias! Deleniti blanditiis distinctio praesentium cupiditate amet tempore optio molestias aperiam impedit dolorum dolorem soluta mollitia fugiat, in ea, laudantium possimus expedita fuga nisi voluptate. Reiciendis ignissimos, ut explicabo quam non fugit. Impedit illum quam dolor.','Devamını Oku','assets/uploads/35fab5a166de9a4e48f9887e96be2456.png','Galeri','Çocuklarımızla yaptığımız etkinliklerden birkaç anı...','Daha Fazlasını Gör','Sınıflarımız','Sınıflarımız güvenlik standartlarına uygundur ve okul yönetimi tarafından kontrol edilmektedir.','Tüm Sınıfları Gör','Öğretmenlerimiz','Deneyimli Eğitmen Kadromuz.','Daha Fazlasını Gör','Neden Bizi Seçmelisiniz?','Çocuklarımızı 15 yıllık tecrübemizle doğayla iç içe büyütüyoruz.','Etkinliklerimiz','Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, consequuntur?','Daha Fazlasını Gör','2021-10-27 15:22:24');

#
# Structure for table "messages"
#

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `seen` tinyint(1) DEFAULT 0,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

#
# Data for table "messages"
#

INSERT INTO `messages` VALUES (1,'Haruncan','haruncan_sari@hotmail.com','asd','2021-10-30 14:09:10',1,1),(2,'Haruncan','haruncan_sari@hotmail.com','asd','2021-10-30 14:10:24',1,0),(3,'deneme','haruncan_sari@hotmail.com','asd','2021-10-30 14:12:27',1,0),(4,'Haruncan','haruncan_sari@hotmail.com','asd','2021-10-30 16:10:30',1,0);

#
# Structure for table "preference"
#

DROP TABLE IF EXISTS `preference`;
CREATE TABLE `preference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

#
# Data for table "preference"
#

INSERT INTO `preference` VALUES (1,'Uzman Öğretmenler','Çocuklarımız için alanında uzman, deneyimli öğretmenlerimizi tercih ediyoruz.','assets/uploads/9cf5b729ef981684dbfa221e2da5083b.png','2021-10-28 10:07:06'),(2,'Eğlenceli Aktiviteler','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, accusamus.','assets/uploads/b3e8688cce58488a8960549d5431594f.png','2021-10-28 10:08:49'),(3,'Güvenlikli Sınıflar','Zemin kattaki sınıflarımızla ve doğa içindeki konumumuzla güvenliğimiz üst düzeydedir.','assets/uploads/eee14daa4365963e3231342142aba9f1.png','2021-10-28 10:09:30'),(4,'Mobil Kreş','Mobil Kreş uygulamasından çocuğunuzun gelişimini takip edebilirsiniz.','assets/uploads/d078d5f50a58a2efc80f0492af63c375.png','2021-10-28 10:12:15'),(5,'Profesyonel Eğitim Programları','Doğayı kullanarak çocuklarımızın eğitimini sağlıyoruz.','assets/uploads/84fc9552fec221405dbc92c43b919aed.png','2021-10-28 10:12:59'),(6,'Doğayla İç İçe','Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo','assets/uploads/4bddc7619587616c18130293f3bff95c.png','2021-10-28 10:13:14');

#
# Structure for table "slider"
#

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `text3` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

#
# Data for table "slider"
#

INSERT INTO `slider` VALUES (8,'Nar Taneleri','Çocuklarımızı parlak bir geleceğe hazırlıyoruz','Çatısı gökyüzü olan sınıflarda, doğa temelli yaklaşımla özgür ve mutlu çocuklar...','assets/uploads/bc95172c24a25eb9e849dadc30df65f8.jpg','2021-10-27 11:33:36',NULL,1,0),(9,'Nar Taneleri','Çocuklarımızı parlak bir geleceğe hazırlıyoruz','Çatısı gökyüzü olan sınıflarda, doğa temelli yaklaşımla özgür ve mutlu çocuklar...','assets/uploads/3340190963b610a724df355c8b75a0b6.jpg','2021-10-27 11:47:26',NULL,1,0),(10,'Nar Taneleri','Çocuklarımızı parlak bir geleceğe hazırlıyoruz','Çatısı gökyüzü olan sınıflarda, doğa temelli yaklaşımla özgür ve mutlu çocuklar...','assets/uploads/5bbe978c97d7a6854322f62bbdf23e00.jpg','2021-10-27 11:47:45',NULL,1,0);

#
# Structure for table "teachers"
#

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# Data for table "teachers"
#

INSERT INTO `teachers` VALUES (1,'Smith Jhonson','smith-jhonson','Project Manajer','<p>Enersticaly actualize mission critical opportunities onetoone ecommerce. Holisticly cocate bleeding edge PSD coordin content rather than platform eservices. Conveniently utilize diverse leadership skills whereas states the awesomthe. Continually coordinate flexble nnovation after webenabled is theme customer Synergistically optimize resource maximizing data and if efficient an methods Distinctively one action.</p>','assets/uploads/6e7cff9c494ebc992885182414f476f4.jpg','2021-11-01 09:48:07','2021-11-01 11:31:12',1,0),(2,'Broklyn Doel','broklyn-doel','Fen Bilgisi Öğretmeni','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ornare eros. Cras vitae pretium risus. Integer aliquam, est quis sagittis laoreet, odio arcu dignissim arcu, sit amet placerat nunc diam ut tortor. Mauris molestie odio vel condimentum accumsan. Morbi mi urna, egestas sed ex nec, malesuada auctor ex. Vivamus eu pretium libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum pretium fermentum erat vel fermentum. Sed quis accumsan nibh. Vivamus ullamcorper dignissim arcu ut commodo. Aliquam sit amet tincidunt arcu, at tempus quam. Ut eu justo fringilla, finibus sem ac, blandit ligula. Ut.</p>','assets/uploads/0b96e51e39bc28023caaffdad446f71d.jpg','2021-11-01 10:58:13','2021-11-01 11:30:59',1,0);

#
# Structure for table "ticket"
#

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

#
# Data for table "ticket"
#

INSERT INTO `ticket` VALUES (20,'şampiyonlar','sampiyonlar'),(21,'dahiler','dahiler'),(22,'yeşil','yesil'),(23,'pembe','pembe'),(24,'nar çiçekleri','nar-cicekleri'),(25,'turuncu','turuncu'),(26,'mavi','mavi'),(27,'color','color');
