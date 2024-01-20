-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 20 Oca 2024, 22:47:52
-- Sunucu sürümü: 8.2.0
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `firma`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

DROP TABLE IF EXISTS `ayar`;
CREATE TABLE IF NOT EXISTS `ayar` (
  `ayar_id` int NOT NULL DEFAULT '0',
  `ayar_logo` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_siteurl` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_title` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_description` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_keywords` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_autor` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_tel` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_gsm` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_faks` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_adres` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_mail` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_il` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_ilce` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_mesai` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_recaptha` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_googlemap` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_analystic` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_facebook` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_twitter` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_youtube` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_google` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_smtphost` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_smtpuser` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_smtppassword` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ayar_smtpport` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`ayar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_siteurl`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_autor`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_adres`, `ayar_mail`, `ayar_il`, `ayar_ilce`, `ayar_mesai`, `ayar_recaptha`, `ayar_googlemap`, `ayar_analystic`, `ayar_facebook`, `ayar_twitter`, `ayar_youtube`, `ayar_google`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`) VALUES
(0, 'dmg/25090237643136822896ddd.png', 'http://localhost/porto/', 'deneme', 'Sitemiz 2018 Yılındada istanbulda Kurulmuş ve insaat alanında hizmet vermektedir', 'Mimarlık insaat', 'deneme', '05554443322', '05554443322', '05554443322', 'deneme', 'deneme@outlook.com', 'deneme', 'deneme', 'deneme', '1', '1', '1', '1https://www.facebook.com/', '1https://www.twitter.com/', '1https://www.youtube.com/', '1https://www.google.com/', '1mail.siteadresi.com', '1eposta@siteadresiniz.com', '11234', '1255');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dokuman`
--

DROP TABLE IF EXISTS `dokuman`;
CREATE TABLE IF NOT EXISTS `dokuman` (
  `dokuman_id` int NOT NULL AUTO_INCREMENT,
  `dokuman_ad` varchar(250) NOT NULL,
  `dokuman_yol` varchar(250) NOT NULL,
  PRIMARY KEY (`dokuman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `hakkimizda_id` int NOT NULL,
  `hakkimizda_baslik` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `hakkimizda_icerik` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `hakkimizda_misyon` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`hakkimizda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Hakkimizda Mali', '<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida leo ac massa cursus aliquam. Nunc dignissim, leo non fringilla rutrum, quam nulla efficitur orci, id pharetra dolor lacus vel quam. Proin lectus ante, consectetur sed lacinia quis, ultrices id urna. Sed id condimentum sem. Sed euismod eros id lorem mattis, vel venenatis augue vestibulum. Nunc ac mi et libero mattis ullamcorper sed quis justo. Suspendisse condimentum mi ut diam finibus, quis elementum tellus laoreet. Nam sed libero a nisi cursus tincidunt. Aenean auctor ipsum id mi faucibus lacinia quis sed justo. Fusce elementum hendrerit nibh, id ornare velit mattis eu. Nam id semper lacus.</p>\r\n</blockquote>\r\n\r\n<p>Suspendisse et tempor nibh, vel malesuada dui. Pellentesque dignissim lacinia enim. Nam mattis turpis id lacus <img alt=\"\" src=\"https://i1.wp.com/www.kerimusta.com/wp-content/uploads/2017/01/at-resimleri_184984.jpg\" style=\"float:right; height:188px; width:300px\" />elementum, ac fringilla orci eleifend. Fusce lacinia mi mi, et eleifend felis blandit et. Proin iaculis egestas metus, ut tincidunt leo interdum non. Nulla sapien diam, porta non arcu ac, pellentesque bibendum tortor. Sed lobortis molestie orci, a vehicula odio convallis ac. Fusce vitae ex sed mauris pharetra congue eget in lorem. Ut vehicula orci non augue egestas, sed cursus arcu sodales. Proin ultrices tristique velit, vel tincidunt arcu lacinia quis. Duis sed nibh eget massa elementum malesuada non eu elit. Cras erat justo, cursus porttitor iaculis bibendum, vehicula in nisi. Quisque tincidunt, dolor sit amet rutrum venenatis, ipsum nulla ullamcorper sem, nec facilisis est metus vel magna. Vestibulum posuere, arcu ac suscipit malesuada, nulla turpis pellentesque mauris, ut consequat nulla ante sed ipsum. Nullam eu est nibh. Mauris eu tincidunt mi, ut suscipit diam.</p>\r\n\r\n<p>Aenean fermentum orci dolor, et tristique mi tempus at. Nulla augue sem, iaculis eu aliquet a, vulputate id nunc. Quisque tincidunt pretium aliquam. Pellentesque orci magna, ultrices eu turpis auctor, elementum tincidunt enim. Aenean ac lectus in felis fermentum elementum quis sit amet massa. Integer efficitur finibus magna vitae sollicitudin. Vestibulum et nunc ex. Donec iaculis vestibulum suscipit. Duis auctor nibh et nibh laoreet, quis tristique metus ornare. Aenean tristique quam nulla, id ornare libero posuere in. Cras gravida a mauris sit amet semper. Phasellus tristique purus sit amet ante rhoncus imperdiet in quis urna. Vestibulum malesuada, est sed venenatis porttitor, orci purus ultricies lacus, id facilisis ante nibh vel ligula. Duis dignissim mauris a augue molestie tincidunt. Vivamus vulputate condimentum elit id iaculis. Vivamus in ultrices sem.</p>\r\n\r\n<p>Vivamus condimentum, ex in fermentum mollis, tortor nibh tempor risus, ut faucibus dolor arcu ac tortor. Maecenas lorem arcu, hendrerit tempor lorem at, efficitur posuere ante. Cras justo ex, rutrum sed mauris id, elementum ultricies nisi. Quisque lacinia libero ut nisl rutrum, sit amet feugiat libero gravida. Sed et orci in diam pellentesque mattis sit amet eu velit. Aliquam dignissim porttitor erat, at ullamcorper felis ornare non. Mauris tincidunt magna a molestie iaculis. Vestibulum in venenatis est, feugiat molestie risus. Duis eros purus, dictum sit amet ante eget, facilisis luctus enim. Morbi in mattis lacus, quis placerat sapien. Ut ut quam pretium, tempor arcu in, aliquet lacus.</p>\r\n\r\n<p>Aenean suscipit felis mi, non ullamcorper nisl suscipit quis. Integer auctor augue eu dignissim semper. Sed ornare a nisl quis volutpat. Vivamus nec imperdiet tellus. Maecenas et tempus ante, in eleifend ex. Aenean convallis dui scelerisque, vestibulum ipsum eu, ultrices sapien. Proin consequat sapien vel elit feugiat ornare. Pellentesque leo urna, lobortis ornare luctus eget, aliquet vel ante. In id felis dolor. Sed sit amet efficitur tortor.</p>\r\n\r\n<p>Quisque bibendum semper erat, eu venenatis purus consequat at. Praesent egestas laoreet velit, vel dapibus velit bibendum eleifend. Donec neque orci, scelerisque nec pellentesque nec, placerat ac purus. Donec elementum porttitor arcu sit amet consequat. Ut semper id elit a dapibus. Aliquam rhoncus erat eget tortor fringilla, quis feugiat dolor cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec mi mollis libero egestas commodo. In hac habitasse platea dictumst. Etiam vitae sodales lorem. Mauris sit amet mi mi. Nulla facilisi. Aliquam laoreet convallis purus, nec volutpat elit accumsan in.</p>\r\n', 'W9BM5PJ25YM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida leo ac massa cursus aliquam. Nunc dignissim, leo non fringilla rutrum, quam nulla efficitur orci, id pharetra dolor lacus vel quam. Proin lectus ante, consectetur sed lacinia quis, ultrices id urna. Sed id condimentum sem. Sed euismod eros id lorem mattis, vel venenatis augue vestibulum. Nunc ac mi et libero mattis ullamcorper sed quis justo. Suspendisse condimentum mi ut diam finibus, quis elementum tellus laoreet. Nam sed libero a nisi cursus tincidunt. Aenean auctor ipsum id mi faucibus lacinia quis sed justo. Fusce elementum hendrerit nibh, id ornare velit mattis eu. Nam id semper lacus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida leo ac massa cursus aliquam. Nunc dignissim, leo non fringilla rutrum, quam nulla efficitur orci, id pharetra dolor lacus vel quam. Proin lectus ante, consectetur sed lacinia quis, ultrices id urna. Sed id condimentum sem. Sed euismod eros id lorem mattis, vel venenatis augue vestibulum. Nunc ac mi et libero mattis ullamcorper sed quis justo. Suspendisse condimentum mi ut diam finibus, quis elementum tellus laoreet. Nam sed libero a nisi cursus tincidunt. Aenean auctor ipsum id mi faucibus lacinia quis sed justo. Fusce elementum hendrerit nibh, id ornare velit mattis eu. Nam id semper lacus.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

DROP TABLE IF EXISTS `icerik`;
CREATE TABLE IF NOT EXISTS `icerik` (
  `icerik_id` int NOT NULL AUTO_INCREMENT,
  `icerik_zaman` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `icerik_resimyol` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_ad` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_detay` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_keyword` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `icerik_durum` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`icerik_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_id` int NOT NULL AUTO_INCREMENT,
  `kullanici_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) NOT NULL,
  `kullanici_ad` varchar(50) NOT NULL,
  `kullanici_password` varchar(50) NOT NULL,
  `kullanici_adsoyad` varchar(50) NOT NULL,
  `yetki` varchar(50) NOT NULL,
  `durum` int NOT NULL,
  PRIMARY KEY (`kullanici_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_ad`, `kullanici_password`, `kullanici_adsoyad`, `yetki`, `durum`) VALUES
(1, '2018-10-09 11:31:41', '', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'kadir baba', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int NOT NULL AUTO_INCREMENT,
  `kategor_id` int DEFAULT NULL,
  `menu_ust` int DEFAULT '0',
  `menu_ad` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `menu_icon` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `menu_url` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `menu_detay` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci,
  `menu_sira` int DEFAULT NULL,
  `menu_durum` int DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `kategor_id`, `menu_ust`, `menu_ad`, `menu_icon`, `menu_url`, `menu_detay`, `menu_sira`, `menu_durum`) VALUES
(35, NULL, 0, 'anasayfa', NULL, 'index.php', '', 1, 1),
(40, NULL, 0, 'Hakkımızda', NULL, 'hakkimizda', '', 2, 1),
(37, NULL, 0, 'Haberler', NULL, 'haberler', '', 3, 1),
(41, NULL, 0, 'iletişim', NULL, 'bize-ulasin', '', 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int NOT NULL AUTO_INCREMENT,
  `slider_ad` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `slider_resimyol` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `slider_link` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `slider_sira` int NOT NULL,
  `slider_durum` varchar(1) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_link`, `slider_sira`, `slider_durum`) VALUES
(23, 'Toplu konut Awm', 'dmg/slider/200872974925861279551.jpg', '', 0, '1'),
(24, 'Toplu konut', 'dmg/slider/257232074125813294362.jpg', '', 1, '1'),
(25, 'Rezidans', 'dmg/slider/270952289524730249863.jpg', '', 2, '1'),
(26, 'Daire', 'dmg/slider/310312667320263309094.jpg', '', 3, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int NOT NULL AUTO_INCREMENT,
  `ticket_baslik` varchar(250) DEFAULT NULL,
  `ticket_aciklama` text,
  `ticket_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ticket_kullanici` int DEFAULT NULL,
  `ticket_durum` int DEFAULT NULL,
  `ticket_yuzde` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
