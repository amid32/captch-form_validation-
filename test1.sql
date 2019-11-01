-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Kas 2019, 03:29:13
-- Sunucu sürümü: 10.1.40-MariaDB
-- PHP Sürümü: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_login`
--

CREATE TABLE `user_login` (
  `istif_id` int(11) NOT NULL,
  `istif_ad_soyad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `user_login`
--

INSERT INTO `user_login` (`istif_id`, `istif_ad_soyad`, `username`, `password`) VALUES
(1, 'Amid Mirzeyev', 'amid@gmail.com', 'fe01ce2a7fbac8fafaed7c982a04e229');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`istif_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `user_login`
--
ALTER TABLE `user_login`
  MODIFY `istif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
