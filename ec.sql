-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Haz 2021, 16:56:39
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ec`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `vision` varchar(250) NOT NULL,
  `mision` varchar(250) NOT NULL,
  `video` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `vision`, `mision`, `video`) VALUES
(1, 'E-Shoppinggfgh', '                                                                                        <b>Azad </b><u>efg</u>                                                                                ', 'visionfgd', 'misionfgfg', 'qRtJjabLi3M');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `set_id` int(11) NOT NULL,
  `set_site_name` varchar(100) NOT NULL,
  `set_logo` varchar(250) NOT NULL,
  `set_title` varchar(250) NOT NULL,
  `set_desc` varchar(250) NOT NULL,
  `set_footer` varchar(255) NOT NULL,
  `set_keywords` varchar(250) NOT NULL,
  `set_author` varchar(100) NOT NULL,
  `set_tel` varchar(100) NOT NULL,
  `set_mobile` varchar(50) NOT NULL,
  `set_fax` varchar(100) NOT NULL,
  `set_mail` varchar(100) NOT NULL,
  `set_city` varchar(250) NOT NULL,
  `set_district` varchar(250) NOT NULL,
  `set_address` varchar(250) NOT NULL,
  `set_shift` varchar(250) NOT NULL,
  `set_maps` varchar(250) NOT NULL,
  `set_analytics` varchar(250) NOT NULL,
  `set_zopim` varchar(250) NOT NULL,
  `set_fb` varchar(100) NOT NULL,
  `set_tw` varchar(100) NOT NULL,
  `set_yt` varchar(100) NOT NULL,
  `set_smtp_host` varchar(100) NOT NULL,
  `set_smtp_port` varchar(100) NOT NULL,
  `set_smtp_user` varchar(100) NOT NULL,
  `set_smtp_pass` varchar(100) NOT NULL,
  `set_maintance` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`set_id`, `set_site_name`, `set_logo`, `set_title`, `set_desc`, `set_footer`, `set_keywords`, `set_author`, `set_tel`, `set_mobile`, `set_fax`, `set_mail`, `set_city`, `set_district`, `set_address`, `set_shift`, `set_maps`, `set_analytics`, `set_zopim`, `set_fb`, `set_tw`, `set_yt`, `set_smtp_host`, `set_smtp_port`, `set_smtp_user`, `set_smtp_pass`, `set_maintance`) VALUES
(1, 'localhost', '', 'Azadghgf', 'Bu veb sayt Azad Eyvazov trəfindən hazırlanmışdır!vv', 'cfgg', 'Azad, Eyvazov, Azad Eyvazov, E-shopvv', 'Azad Eyvazovvvf', '+994 012 000 00 00ffff', '+994 55 938 54 89ff', 'yoxdurff', 'azad.eyvazov99@gmail.com', 'Bakuvv', 'Pirallahivv', 'Azerbaycan, Baku, Pirallahivv', '7/24vv', 'mapd', 'analytic', 'zopim', 'https://www.facebook.com/gffgg', 'https://www.facebook.com/f', 'https://www.facebook.com/', 'smtp hostdddfffff', 'smtp port', 'smtp user', 'dffg', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_time` datetime NOT NULL DEFAULT current_timestamp(),
  `user_photo` varchar(250) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_first_last_name` varchar(200) NOT NULL,
  `user_mail` varchar(200) NOT NULL,
  `user_gsm` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `user_city` varchar(250) NOT NULL,
  `user_district` varchar(250) NOT NULL,
  `user_unvan` varchar(250) NOT NULL,
  `user_permission` varchar(250) NOT NULL,
  `user_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_time`, `user_photo`, `user_name`, `user_first_last_name`, `user_mail`, `user_gsm`, `user_password`, `user_address`, `user_city`, `user_district`, `user_unvan`, `user_permission`, `user_status`) VALUES
(1, '2021-06-06 03:05:47', '', 'Azad', 'Azad Eyvazov', 'a@a.com', '45454', '698d51a19d8a121ce581499d7b701668', '', '', '', '', '17', 1),
(2, '2021-06-06 18:55:06', '', 'ikinci user', 'jkdvfvk dpflıpkldfgk', 'a@z.com', 'vcgfg', 'e3143f52da797b4874769bee38a43ec8', 'dffbvg', 'gffgb', 'fghg', 'fgff', '1', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`set_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
