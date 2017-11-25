-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 Kas 2017, 18:22:43
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `voguish`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_parola` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_yetki` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_parola`, `admin_yetki`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_footer` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_telefon` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_footer`, `ayar_adres`, `ayar_mail`, `ayar_telefon`) VALUES
(0, 'images/logo.png', 'Feke Blog', 'Yönetim panelli site', 'Copyrights © 2017 FEKE A.Ş. | Template by KASIM FEKE', 'Fatih/İstanbul', 'kasimfeke@gmail.com', '0212 585 95 55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_yazi` mediumtext CHARACTER SET utf32 COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_yazi`) VALUES
(0, 'Hakkımızda', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet tincidunt felis. Donec faucibus ante venenatis nunc hendrerit, quis accumsan lectus placerat. Morbi mauris libero, sodales vitae laoreet eget, tristique vitae turpis. Integer rutrum sit amet sem in porta. Etiam tristique venenatis enim, eu consequat orci porta nec. Cras non volutpat arcu, ut fringilla libero. Morbi in lectus facilisis, posuere massa quis, maximus odio. Vivamus metus est, rutrum a nibh et, auctor vestibulum ipsum. Pellentesque rutrum et ligula nec blandit. Nam laoreet convallis nulla quis tincidunt. Proin malesuada condimentum porta.</p>\r\n\r\n<p>Ut sed rhoncus diam. Aliquam scelerisque elit et eros malesuada faucibus nec quis elit. Donec porttitor, lorem quis volutpat interdum, felis purus faucibus sem, sed luctus ligula orci et libero. Integer ut sodales risus. Vivamus quam ex, euismod vitae vehicula vel, consectetur id lectus. Aliquam leo dui, porta vitae dapibus aliquet, ullamcorper non mi. Ut at ultricies velit. Phasellus dui ex, lobortis id mi in, eleifend placerat lorem. Vivamus at luctus augue. Maecenas vehicula eu augue id auctor. Aliquam semper, magna sit amet tempor semper, est diam consequat nisi, non fringilla neque augue in magna. Vestibulum aliquam eu tortor a iaculis. Mauris et tortor orci. Nulla dignissim sapien tellus, in pharetra dolor consequat id. Aenean ac suscipit eros. Nullam malesuada libero vel commodo mollis.</p>\r\n\r\n<p>Etiam tempus lectus convallis interdum aliquam. Fusce lacinia a nibh ac commodo. Vivamus ut quam non ex euismod pulvinar. Nulla cursus semper orci, at lobortis lorem malesuada tempor. Praesent ante dui, iaculis eget posuere non, eleifend id libero. Aliquam mattis nibh ut ex euismod, nec semper nisl laoreet. Sed at sodales ipsum. Nullam arcu tellus, sodales eget dolor a, condimentum pellentesque mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sodales ullamcorper dolor, in dapibus nulla varius at.</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmetler_id` int(11) NOT NULL,
  `hizmetler_baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hizmetler_yazi` mediumtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmetler_id`, `hizmetler_baslik`, `hizmetler_yazi`) VALUES
(0, 'Hizmetler', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet tincidunt felis. Donec faucibus ante venenatis nunc hendrerit, quis accumsan lectus placerat. Morbi mauris libero, sodales vitae laoreet eget, tristique vitae turpis. Integer rutrum sit amet sem in porta. Etiam tristique venenatis enim, eu consequat orci porta nec. Cras non volutpat arcu, ut fringilla libero. Morbi in lectus facilisis, posuere massa quis, maximus odio. Vivamus metus est, rutrum a nibh et, auctor vestibulum ipsum. Pellentesque rutrum et ligula nec blandit. Nam laoreet convallis nulla quis tincidunt. Proin malesuada condimentum porta.</p>\r\n\r\n<p>Ut sed rhoncus diam. Aliquam scelerisque elit et eros malesuada faucibus nec quis elit. Donec porttitor, lorem quis volutpat interdum, felis purus faucibus sem, sed luctus ligula orci et libero. Integer ut sodales risus. Vivamus quam ex, euismod vitae vehicula vel, consectetur id lectus. Aliquam leo dui, porta vitae dapibus aliquet, ullamcorper non mi. Ut at ultricies velit. Phasellus dui ex, lobortis id mi in, eleifend placerat lorem. Vivamus at luctus augue. Maecenas vehicula eu augue id auctor. Aliquam semper, magna sit amet tempor semper, est diam consequat nisi, non fringilla neque augue in magna. Vestibulum aliquam eu tortor a iaculis. Mauris et tortor orci. Nulla dignissim sapien tellus, in pharetra dolor consequat id. Aenean ac suscipit eros. Nullam malesuada libero vel commodo mollis.</p>\r\n\r\n<p>Etiam tempus lectus convallis interdum aliquam. Fusce lacinia a nibh ac commodo. Vivamus ut quam non ex euismod pulvinar. Nulla cursus semper orci, at lobortis lorem malesuada tempor. Praesent ante dui, iaculis eget posuere non, eleifend id libero. Aliquam mattis nibh ut ex euismod, nec semper nisl laoreet. Sed at sodales ipsum. Nullam arcu tellus, sodales eget dolor a, condimentum pellentesque mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sodales ullamcorper dolor, in dapibus nulla varius at.</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `menu_id` int(11) NOT NULL,
  `menu_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`menu_id`, `menu_ad`, `menu_url`, `menu_sira`) VALUES
(1, 'Ana Sayfa', 'index.php', '0'),
(2, 'Hakkımızda', 'about.php', '1'),
(3, 'Hizmetler', 'services.php', '2'),
(6, 'İletişim', 'contact.php', '5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `sayfa_tarih` datetime NOT NULL,
  `sayfa_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_yazi` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_sira` int(50) NOT NULL,
  `sayfa_anasayfa` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_tarih`, `sayfa_ad`, `sayfa_yazi`, `sayfa_sira`, `sayfa_anasayfa`) VALUES
(3, '2017-10-15 12:15:00', 'Deneme', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis congue velit. Phasellus auctor convallis nibh, vel ullamcorper tortor tempor nec. Vivamus vitae justo sit amet lectus rhoncus gravida non nec velit. Nunc sodales ut lectus vitae luctus. Praesent tortor nisl, ultrices id aliquet quis, facilisis vel odio. Nullam commodo libero quis interdum varius. Nulla facilisi. Mauris ac commodo turpis, vitae porta mauris. Duis volutpat lacinia nisi, at aliquam purus consectetur vitae. Donec sed massa quis nisi auctor hendrerit eget a ipsum. Vivamus aliquam, nisl at imperdiet tempor, eros felis condimentum augue, a varius enim ex id diam. Fusce dignissim metus eget tempus vulputate. Nulla commodo augue id est eleifend, et pulvinar purus commodo.</p>\r\n\r\n<p>Duis quis purus vel odio molestie faucibus sollicitudin dictum odio. Praesent gravida mauris dui, vitae feugiat tellus euismod et. Suspendisse leo justo, tempus sit amet risus et, mollis varius sapien. Nam feugiat leo id ante ultrices ullamcorper. Ut sit amet nulla vel nisi molestie efficitur. Nullam libero enim, commodo vel vulputate ut, vestibulum eget risus. Ut sapien magna, bibendum ac velit laoreet, hendrerit pellentesque eros. Sed at venenatis dui, ut iaculis felis. Nunc enim metus, sodales sed nibh vitae, interdum pharetra lectus. Pellentesque sit amet imperdiet est, vitae maximus felis.</p>\r\n\r\n<p>Vivamus porta elementum lorem a elementum. Nulla pellentesque lorem at justo vulputate, fermentum scelerisque ante laoreet. Proin ultricies tristique tellus eu commodo. Sed eget dignissim quam. Donec id diam nisi. Fusce vitae eleifend lacus. Curabitur non dui nisi. Aenean condimentum lectus tempus interdum ullamcorper. Mauris non metus risus. Sed in magna tortor. Fusce dui magna, tincidunt vitae vestibulum eget, tempus in odio.</p>\r\n\r\n<p>Suspendisse congue eget dolor sed posuere. Nunc pretium, urna placerat rhoncus semper, metus tortor cursus lorem, eu fermentum eros urna eget metus. Aliquam lobortis velit nec nisi facilisis consequat. Aliquam mattis, turpis vitae egestas maximus, orci magna pharetra sapien, eget porta eros risus in ante. Nam vel neque ut metus faucibus lacinia. Maecenas tellus quam, pretium quis nulla eget, malesuada mollis dui. Cras et porttitor est. Vestibulum euismod ornare eros id ultricies. Maecenas eros odio, fermentum non eros ac, auctor venenatis ligula. Nam accumsan, ex vitae viverra mattis, dui orci egestas est, ac semper purus risus sit amet sapien. Curabitur vitae imperdiet est, ullamcorper posuere neque. Aliquam erat volutpat.</p>\r\n', 1, '1'),
(7, '2017-10-15 20:41:00', 'Deneme 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id facilisis libero. Duis vel elit a tellus suscipit fermentum. Aliquam quis felis leo. Vestibulum ligula augue, tempus quis blandit ut, fermentum eget nisl. Nunc porta velit in finibus faucibus. Aliquam cursus quis turpis eu luctus. Pellentesque non viverra arcu, nec tristique tellus. Fusce quis augue vel ipsum porta tincidunt. Ut massa tortor, rutrum at nulla vel, malesuada euismod lectus.</p>\r\n\r\n<p>Vestibulum scelerisque massa sed libero semper, eget consequat tortor viverra. Integer egestas magna sed nisl blandit, at finibus nibh rhoncus. Nullam luctus tortor nec ultrices imperdiet. Integer dignissim mauris ut bibendum tempor. Quisque luctus dapibus neque nec dapibus. Vivamus enim mauris, laoreet eu dolor sit amet, tincidunt luctus tellus. Phasellus magna mi, venenatis ut ante nec, feugiat bibendum dui. Mauris volutpat dui semper pulvinar euismod. Vivamus quis sem ut velit ornare placerat ut quis turpis. Quisque est nulla, interdum a elementum vitae, interdum sagittis odio. Nam a quam tempor, tincidunt quam a, eleifend leo.</p>\r\n\r\n<p>Pellentesque sed urna sit amet elit sollicitudin commodo. Etiam libero neque, tincidunt a feugiat vitae, molestie a quam. Quisque nibh felis, feugiat sed suscipit quis, auctor venenatis ex. Nullam auctor neque eget bibendum efficitur. Vestibulum molestie laoreet dolor id fringilla. Cras efficitur lectus eget mi mollis varius. Donec sagittis risus in magna viverra, ut tristique lacus faucibus. Vestibulum mattis, quam et porta mollis, enim orci aliquet lectus, ornare ornare velit ipsum sed felis. Suspendisse potenti. Nunc auctor nisi eu nisi egestas sagittis. In a tortor turpis. Integer placerat diam mauris, vitae varius nisl dignissim vel. Sed eget magna in purus auctor accumsan ac non lacus. Nulla mi eros, ornare sit amet lorem eu, finibus dignissim nulla. Ut nisi arcu, placerat id sapien nec, pellentesque facilisis libero.</p>\r\n', 0, '1'),
(12, '2017-10-16 18:02:00', 'Deneme3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque massa tellus, aliquet quis dolor ac, sagittis cursus nisi. Vestibulum vehicula vitae nibh non malesuada. Praesent laoreet, sem in porta mollis, dui dolor maximus ex, in scelerisque libero lacus a risus. Vivamus mollis massa semper nisi bibendum, sit amet semper lacus pulvinar. Phasellus laoreet finibus volutpat. Curabitur tristique fringilla lobortis. Integer vel rhoncus metus, et vehicula sapien. Vivamus vehicula odio nec erat laoreet, quis pharetra justo pellentesque.</p>\r\n\r\n<p>Ut pretium pretium velit, faucibus euismod magna luctus ut. Duis pharetra, dolor eget fringilla faucibus, odio orci scelerisque nisi, at interdum arcu dui et justo. Mauris dapibus cursus quam id condimentum. Donec dui diam, dictum et laoreet vel, laoreet imperdiet urna. Aliquam blandit efficitur ipsum sit amet posuere. In id pulvinar tortor. Curabitur pellentesque magna nisi, quis volutpat odio ultrices quis. Maecenas posuere nunc at volutpat consequat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis at commodo arcu. Sed varius sodales augue, vel auctor erat accumsan eget. Sed congue, diam nec ultricies pretium, risus enim rhoncus urna, in dapibus felis tellus vitae diam. Morbi a ultricies felis, id molestie nisi. Phasellus quis risus est. Vestibulum gravida leo commodo sapien accumsan commodo.</p>\r\n\r\n<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam rhoncus enim nec congue placerat. Integer malesuada arcu ex, ac pretium purus cursus sit amet. Sed dapibus lobortis purus, nec accumsan nibh imperdiet id. Proin id elementum felis. In nec euismod diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum vestibulum metus in neque cursus, nec accumsan nunc rhoncus. Maecenas dapibus dui eget semper tincidunt. Quisque dapibus arcu id blandit congue.</p>\r\n', 0, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resim_yol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resim_yol`, `slider_url`, `slider_sira`) VALUES
(10, 'Slider', '../uploads/26714219522215028583slider1.jpeg', '', '0'),
(11, 'Slider2', '../uploads/25797264022401621400slider2.jpg', '', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmetler_id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
