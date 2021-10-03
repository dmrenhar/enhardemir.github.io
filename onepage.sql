-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Eyl 2021, 20:09:00
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `onepage`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'cyanid', 'fa1d878a86eaad6945d3e06f341b3538');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `field_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `theme`
--

INSERT INTO `theme` (`id`, `field_name`, `name`, `value`, `type`) VALUES
(1, 'Site Başlık', 'site_title', 'Samed Tanrıöver-Sr.C# Developer', 'text'),
(2, 'Değişen Yazı', 'top_title', 'Sr. C# Developer, Php Developer, Full-Stack Developer', 'text'),
(3, 'Üstsöz', 'top_article', 'Para todos todo,para nosrotos nada!!', 'text'),
(4, 'Anasayfa Resim', 'top_image', 'images/avatar-1.png', 'image'),
(5, 'Hakkımda Resim', 'about_image', 'images/avatar-1.png', 'image'),
(6, 'Üstsöz Açıklama', 'about_title_1', '(Herkes için her şey kendimiz için hiçbir şey!!)', 'text'),
(7, 'Anasayfa Söz', 'about_article_1', 'Nie wszystko złoto, co sie świeci!', 'text'),
(8, 'Anasayfa Söz Açıklama', 'about_title_2', '(Parlayan her şey,altın değildir!)', 'text'),
(9, 'Özgeçmiş', 'about_article_2', '11.05.2000 tarihinde kayserinin bünyan ilçesinde doğdum annem ev hanımıdır.2 kardeşiz.Araştırmayı çok seven bir insanım.Bilgisayara olan merakım 14 yaşında başladı bu yaşlarda bilgisayar ile haşır neşir olmaya başladım.Ülkeme ve ülkemde bulunan vatandaşlara yararlı olabilecek her türlü yazılımsal projeye destek vermeye ve sizlerle birlikte çalışmaya hazırım.', 'text'),
(10, 'İlgi Alanı 1', 'about_title_3', 'Mix & Mastering', 'text'),
(11, 'İlgi Alanı 2', 'about_article_3', 'Kodlama Yapmak', 'text'),
(12, 'İlgi Alanı 3', 'about_title_4', 'Makale Okumak', 'text'),
(13, 'İlgi Alanı 4', 'about_article_4', 'Araba Sürmek', 'text'),
(14, 'İlgi Alanı 5', 'footer_title', 'Şiir Okumak & Yazmak', 'text'),
(16, 'İletişim Opsiyon 1', 'contact_title_1', 'Çekinmeden Yazabilirsiniz', 'text'),
(17, 'İletişim Opsiyon 1 Değer', 'contact_mail', 'info@samedtanriover.tech\r\n', 'text'),
(18, 'İletişim Opsiyon 2', 'contact_title_2', 'Eğre Yazmak istemiyosanız aşağıdaki mail adresine mail Atabilirsiniz', 'text'),
(21, 'Copyrgiht Yazı', 'copyright', '© Copyright 2021 Samed Tanrıöver', 'text');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
