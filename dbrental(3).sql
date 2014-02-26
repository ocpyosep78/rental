-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2014 at 10:52 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `beritaid` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` datetime DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `paragraf` text,
  `fullparagraf` text,
  `gambar` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`beritaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`beritaid`, `waktu`, `judul`, `paragraf`, `fullparagraf`, `gambar`) VALUES
(2, '2012-07-11 22:36:51', 'The Power of One Seminar, Medan', 'Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan, acara ini diselenggarakan pada tanggal 14 Maret 2012. ', 'Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan, acara ini diselenggarakan pada tanggal 14 Maret 2012. Seminar yang dihadiri oleh berbagai pelaku bisnis dari industri properti, sektor pertanian, pertambangan dan segmen bisnis lainnya. Peserta seminar akan mendapatkan informasi yang berguna dan update terkini mengenai generator set Cummins.\r\nSeminar dimulai dengan diawali pembukaan oleh MC sekaligus memperkenalkan para tim Cummins Powergen dari Altrak 1978 Medan, Bpk. Harry Tirto selaku Powergen Dept. Head dan juga principaldari Cummins Mr Anderson Lim.\r\nPada seminar tersebut Bpk. Harry Tirto menjelaskan mengenai keunggulan, kapabilitas dan dukungan cabang- cabang Altrak 1978 yang terbesar di Indonesia terhadap product Cummins genset yang mempunyai berbagai kelebihan salah satunya yaitu dengan Single Source Supply dimana berbagai alat pendukung yang tertanam pada genset Cummins seperti engine, alternator, filter ataupun turbocharger berasal dari satu perusahaan yang terdaftar dalam satu perusahaan yang terdaftar dalam salah satu dari 500 perusahaan terbesar di dunia versi majalah Fortune yaitu Cummins Inc. Cummins adalah perusahaan yang mendesain, membuat dan mendistribusikan engine dan teknologi yang terkait termasuk fuel system, control air handling, filtrasi, control emisi dan system generator listrik. Dengan Single Source Supply ini tentunya memberikan kemudahan dalam maintenance dan support karena hamper seluruh spare part berasal dari satu sumber.\r\nDengan Altrak 1978 sebagai distributor resmi dari product Cummins yang sudah terjalin lebih dari 25 tahun maka totalitas Altrak 1978 untuk memberikan dukungan dan layanan penuh kepada pengguna genset Cummins di seluruh Indonesia adalah komitmen utama kami kepada seluruh customer.\r\nAntusias peserta seminar terlihat dari banyaknya peserta dan undangan yang hadir, keingintahuan peserta terlihat pada sesi tanya jawab yang diberikan setelah pembicara mempresentasikan materi-materi seminar. Para peserta juga diajak untuk melihat demo unit genset yang telah dipersiapkan oleh panitia.\r\n', ''),
(3, '2012-07-12 03:13:55', 'International Conference on Oil Palm and Environment 2012', 'Smart Tbk berkerja sama dengan CIRAD sebuah badan riset agricultural dari Negara Perancis dan juga organisasi dunia WWF menyelenggarakan kembali International Conference on Oil Palm and Environment (ICOPE) yang ketiga kalinya bertempat di Nusa Dua, Bali pada 22 -24 Februari 2012 dengan tema â€œBagaimana meningkatkan produksi minyak sawit dengan tetap menjaga kelestarian hutanâ€.', 'Smart Tbk berkerja sama dengan CIRAD sebuah badan riset agricultural dari Negara Perancis dan juga organisasi dunia WWF menyelenggarakan kembali International Conference on Oil Palm and Environment (ICOPE) yang ketiga kalinya bertempat di Nusa Dua, Bali pada 22 -24 Februari 2012 dengan tema â€œBagaimana meningkatkan produksi minyak sawit dengan tetap menjaga kelestarian hutanâ€.\r\n\r\nKonferensi yang membahas praktik perkebunan yang berkelanjutan dan tidak mengancam lingkungan ini diselenggarakan dengan partisipasi dari 400 praktisi perkebunan dan lingkungan hidup dari 14 negara.\r\n\r\nâ€œProduksi kelapa sawit harus bisa seimbang dengan pelestarian lingkungan karena minyak sawit harus bisa memenuhi kebutuhan pangan dan bahan bakar dunia,â€ ujar Suswono, Menteri Pertanian saat membuka konferensi ini. ', ''),
(4, '2012-07-12 03:35:32', 'Altrak 1978 hadir di kongres IKAGI 2012', 'Altrak 1978 pada tahun ini berkesempatan mengikuti Kongres Nasional Ikatan Ahli Gula Indonesia (IKAGI) yang berlangsung di Grand City Surabaya pada tanggal 08 februari lalu. ', 'Altrak 1978 pada tahun ini berkesempatan mengikuti Kongres Nasional Ikatan Ahli Gula Indonesia (IKAGI) yang berlangsung di Grand City Surabaya pada tanggal 08 februari lalu. Event yang diadakan setiap 2 tahun sekali ini memilih tempat yang berbeda-beda dari tahun ke tahun. Organisasi IKAGI sendiri adalah wadah dari para ahli dan pemilik perkebunan tebu dan pabrik gula baik pemerintah maupun swasta yang berjumlah sekitar 450 anggota dari seluruh wilayah Indonesia.\r\n\r\nIsi kongres tersebut adalah pembentukan kepengurusan panitia yang baru untuk periode 2012 -2015 yang sekarang diketahui subiyono. Dalam seminar itu subiyono membahas tentang industri gula dan masalah-masalahnya. Selain itu dalam seminar selalu dilakukan tukar pengalaman dengan memberikan presentasi masing-masing kelompok anggota, misalnya pabrik gula dengan segala keberhasilan dan kendala yang dialaminya dipaparkan dan didiskusikan untuk dicariakan solusinya.', ''),
(5, '2012-07-12 03:41:59', 'JCB Lighting Tower LT9', 'Lighting tower: The LT9 is a compact, dedicated road\r\ntowable lighting tower.', 'Lighting tower: The LT9 is a compact, dedicated road\r\ntowable lighting tower. Featuring a 9m hydraulically\r\nactivated mast which can rotate 360deg to ensure\r\noptimum light positioning, which supports 4 metal halide\r\nspotlights of 1000 watts and 90,000 lumens per spotlight.\r\nThe mast incorporates a safety feature that the mast\r\ncannot be raised unless the handbrake is on and if the\r\nhandbrake is released the mast will automatically lower to\r\nthe travel position. It has four stabilisers to ensure stability\r\non all terrains.\r\nControl is with the KS1 control panel and the LT9 comes\r\ncomplete with outlet and inlet sockets giving the ability to\r\npower additional external equipment, or to power from\r\nother external sources of power as required. All making\r\nthe LT9 perfect for rental fleets and individual users alike.', ''),
(6, '2012-07-16 04:41:24', 'The Power of One Seminar, Medan', 'Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan, acara ini diselenggarakan pada tanggal 14 Maret 2012.', 'Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan, acara ini diselenggarakan pada tanggal 14 Maret 2012. Seminar yang dihadiri oleh berbagai pelaku bisnis dari industri properti, sektor pertanian, pertambangan dan segmen bisnis lainnya. Peserta seminar akan mendapatkan informasi yang berguna dan update terkini mengenai generator set Cummins. Seminar dimulai dengan diawali pembukaan oleh MC sekaligus memperkenalkan para tim Cummins Powergen dari Altrak 1978 Medan, Bpk. Harry Tirto selaku Powergen Dept. Head dan juga principaldari Cummins Mr Anderson Lim. Pada seminar tersebut Bpk. Harry Tirto menjelaskan mengenai keunggulan, kapabilitas dan dukungan cabang- cabang Altrak 1978 yang terbesar di Indonesia terhadap product Cummins genset yang mempunyai berbagai kelebihan salah satunya yaitu dengan Single Source Supply dimana berbagai alat pendukung yang tertanam pada genset Cummins seperti engine, alternator, filter ataupun turbocharger berasal dari satu perusahaan yang terdaftar dalam satu perusahaan yang terdaftar dalam salah satu dari 500 perusahaan terbesar di dunia versi majalah Fortune yaitu Cummins Inc. Cummins adalah perusahaan yang mendesain, membuat dan mendistribusikan engine dan teknologi yang terkait termasuk fuel system, control air handling, filtrasi, control emisi dan system generator listrik. Dengan Single Source Supply ini tentunya memberikan kemudahan dalam maintenance dan support karena hamper seluruh spare part berasal dari satu sumber. Dengan Altrak 1978 sebagai distributor resmi dari product Cummins yang sudah terjalin lebih dari 25 tahun maka totalitas Altrak 1978 untuk memberikan dukungan dan layanan penuh kepada pengguna genset Cummins di seluruh Indonesia adalah komitmen utama kami kepada seluruh customer. Antusias peserta seminar terlihat dari banyaknya peserta dan undangan yang hadir, keingintahuan peserta terlihat pada sesi tanya jawab yang diberikan setelah pembicara mempresentasikan materi-materi seminar. Para peserta juga diajak untuk melihat demo unit genset yang telah dipersiapkan oleh panitia. ', NULL),
(7, '2012-07-20 05:38:11', 'Our Valued Customers', 'In anticipation of the ever growing demand for Material Handling Equipment, we have decided to relocate our lift truck business to PT. Berca Mandiri Perkasa, subsidiary company of PT. Altrak 1978 Group.', '<p>\r\n	Our Valued Customers,<br />\r\n	<br />\r\n	In anticipation of the ever growing demand for Material Handling Equipment, we have decided to relocate our lift truck business to PT. Berca Mandiri Perkasa, subsidiary company of PT. Altrak 1978 Group. This relocation will also make our services to you become more focused.<br />\r\n	<br />\r\n	As of 1 February 2011, PT Berca Mandiri Perkasa will be officially appointed as Authorized Distributor of&nbsp; Mitsubishi Forklifts and Nichiyu Electric Lift Trucks.&nbsp; We take this opportunity to encourage you to direct future inquiries and orders to PT. Berca Mandiri Perkasa.<br />\r\n	<br />\r\n	We thank you for your past business and hope that we may continue to serve your material handling equipment<br />\r\n	and logistics via the new company.<br />\r\n	<br />\r\n	&nbsp;</p>\r\n', NULL),
(8, '2012-07-20 05:46:27', 'The Power of One Seminar, Medan', 'Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan', '<p>Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan, acara ini diselenggarakan pada tanggal 14 Maret 2012. Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan, acara ini diselenggarakan pada tanggal 14 Maret 2012. Seminar yang dihadiri oleh berbagai pelaku bisnis dari industri properti, sektor pertanian, pertambangan dan segmen bisnis lainnya. Peserta seminar akan mendapatkan informasi yang berguna dan update terkini mengenai generator set Cummins. <br><br>\r\nSeminar dimulai dengan diawali pembukaan oleh MC sekaligus memperkenalkan para tim Cummins Powergen dari Altrak 1978 Medan, Bpk. Harry Tirto selaku Powergen Dept. Head dan juga principaldari Cummins Mr Anderson Lim. Pada seminar tersebut Bpk. Harry Tirto menjelaskan mengenai keunggulan, kapabilitas dan dukungan cabang- cabang Altrak 1978 yang terbesar di Indonesia terhadap product Cummins genset yang mempunyai berbagai kelebihan salah satunya yaitu dengan Single Source Supply dimana berbagai alat pendukung yang tertanam pada genset Cummins seperti engine, alternator, filter ataupun turbocharger berasal dari satu perusahaan yang terdaftar dalam satu perusahaan yang terdaftar dalam salah satu dari 500 perusahaan terbesar di dunia versi majalah Fortune yaitu Cummins Inc.<br><br>\r\nCummins adalah perusahaan yang mendesain, membuat dan mendistribusikan engine dan teknologi yang terkait termasuk fuel system, control air handling, filtrasi, control emisi dan system generator listrik. Dengan Single Source Supply ini tentunya memberikan kemudahan dalam maintenance dan support karena hamper seluruh spare part berasal dari satu sumber. Dengan Altrak 1978 sebagai distributor resmi dari product Cummins yang sudah terjalin lebih dari 25 tahun maka totalitas Altrak 1978 untuk memberikan dukungan dan layanan penuh kepada pengguna genset Cummins di seluruh Indonesia adalah komitmen utama kami kepada seluruh customer. Antusias peserta seminar terlihat dari banyaknya peserta dan undangan yang hadir, keingintahuan peserta terlihat pada sesi tanya jawab yang diberikan setelah pembicara mempresentasikan materi-materi seminar. Para peserta juga diajak untuk melihat demo unit genset yang telah dipersiapkan oleh panitia. </p>', NULL),
(9, '2012-07-20 06:03:27', 'JCB Lighting Tower LT9', 'Lighting tower: The LT9 is a compact, dedicated road towable lighting tower.', '<p align=\\"justify\\">Lighting tower: The LT9 is a compact, dedicated road towable lighting tower. Lighting tower: The LT9 is a compact, dedicated road towable lighting tower. Featuring a 9m hydraulically activated mast which can rotate 360deg to ensure optimum light positioning, which supports 4 metal halide spotlights of 1000 watts and 90,000 lumens per spotlight. <br><br>\r\nThe mast incorporates a safety feature that the mast cannot be raised unless the handbrake is on and if the handbrake is released the mast will automatically lower to the travel position. It has four stabilisers to ensure stability on all terrains. Control is with the KS1 control panel and the LT9 comes complete with outlet and inlet sockets giving the ability to power additional external equipment, or to power from other external sources of power as required. All making the LT9 perfect for rental fleets and individual users alike.\r\n</p>', NULL),
(10, '2012-07-22 22:03:18', 'JCB Lighting Tower LT9', 'Lighting tower: The LT9 is a compact, dedicated road towable lighting tower.', '<p align=justify>Lighting tower: The LT9 is a compact, dedicated road towable lighting tower. Lighting tower: The LT9 is a compact, dedicated road towable lighting tower. Featuring a 9m hydraulically activated mast which can rotate 360deg to ensure optimum light positioning, which supports 4 metal halide spotlights of 1000 watts and 90,000 lumens per spotlight. <br><br>\r\nThe mast incorporates a safety feature that the mast cannot be raised unless the handbrake is on and if the handbrake is released the mast will automatically lower to the travel position. It has four stabilisers to ensure stability on all terrains. Control is with the KS1 control panel and the LT9 comes complete with outlet and inlet sockets giving the ability to power additional external equipment, or to power from other external sources of power as required. All making the LT9 perfect for rental fleets and individual users alike. \r\n </p>', 'gambar'),
(12, '2012-07-23 22:42:52', 'The Power of One Seminar, Medan', 'Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan', '<p align=justify>Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan, acara ini diselenggarakan pada tanggal 14 Maret 2012. Seminar The Power of One kali ini diadakan di kota ketiga terbesar di Indonesia yaitu kota Medan bertempat di gedung Altrak 1978 Medan, acara ini diselenggarakan pada tanggal 14 Maret 2012. Seminar yang dihadiri oleh berbagai pelaku bisnis dari industri properti, sektor pertanian, pertambangan dan segmen bisnis lainnya. Peserta seminar akan mendapatkan informasi yang berguna dan update terkini mengenai generator set Cummins.<br><br>\r\nSeminar dimulai dengan diawali pembukaan oleh MC sekaligus memperkenalkan para tim Cummins Powergen dari Altrak 1978 Medan, Bpk. Harry Tirto selaku Powergen Dept. Head dan juga principaldari Cummins Mr Anderson Lim. Pada seminar tersebut Bpk. Harry Tirto menjelaskan mengenai keunggulan, kapabilitas dan dukungan cabang- cabang Altrak 1978 yang terbesar di Indonesia terhadap product Cummins genset yang mempunyai berbagai kelebihan salah satunya yaitu dengan Single Source Supply dimana berbagai alat pendukung yang tertanam pada genset Cummins seperti engine, alternator, filter ataupun turbocharger berasal dari satu perusahaan yang terdaftar dalam satu perusahaan yang terdaftar dalam salah satu dari 500 perusahaan terbesar di dunia versi majalah Fortune yaitu Cummins Inc.<br><br>\r\nCummins adalah perusahaan yang mendesain, membuat dan mendistribusikan engine dan teknologi yang terkait termasuk fuel system, control air handling, filtrasi, control emisi dan system generator listrik. Dengan Single Source Supply ini tentunya memberikan kemudahan dalam maintenance dan support karena hamper seluruh spare part berasal dari satu sumber. Dengan Altrak 1978 sebagai distributor resmi dari product Cummins yang sudah terjalin lebih dari 25 tahun maka totalitas Altrak 1978 untuk memberikan dukungan dan layanan penuh kepada pengguna genset Cummins di seluruh Indonesia adalah komitmen utama kami kepada seluruh customer. Antusias peserta seminar terlihat dari banyaknya peserta dan undangan yang hadir, keingintahuan peserta terlihat pada sesi tanya jawab yang diberikan setelah pembicara mempresentasikan materi-materi seminar. Para peserta juga diajak untuk melihat demo unit genset yang telah dipersiapkan oleh panitia. \r\n</p>', NULL),
(13, '2012-07-23 22:52:39', 'Altrak 1978 hadir di kongres IKAGI 2012', 'Altrak 1978 pada tahun ini berkesempatan mengikuti Kongres Nasional Ikatan Ahli Gula Indonesia (IKAGI) yang berlangsung di Grand City Surabaya pada tanggal 08 februari lalu.', '<p align=justify>Altrak 1978 pada tahun ini berkesempatan mengikuti Kongres Nasional Ikatan Ahli Gula Indonesia (IKAGI) yang berlangsung di Grand City Surabaya pada tanggal 08 februari lalu. Altrak 1978 pada tahun ini berkesempatan mengikuti Kongres Nasional Ikatan Ahli Gula Indonesia (IKAGI) yang berlangsung di Grand City Surabaya pada tanggal 08 februari lalu. Event yang diadakan setiap 2 tahun sekali ini memilih tempat yang berbeda-beda dari tahun ke tahun. Organisasi IKAGI sendiri adalah wadah dari para ahli dan pemilik perkebunan tebu dan pabrik gula baik pemerintah maupun swasta yang berjumlah sekitar 450 anggota dari seluruh wilayah Indonesia.<br><br>\r\nIsi kongres tersebut adalah pembentukan kepengurusan panitia yang baru untuk periode 2012 -2015 yang sekarang diketahui subiyono. Dalam seminar itu subiyono membahas tentang industri gula dan masalah-masalahnya. Selain itu dalam seminar selalu dilakukan tukar pengalaman dengan memberikan presentasi masing-masing kelompok anggota, misalnya pabrik gula dengan segala keberhasilan dan kendala yang dialaminya dipaparkan dan didiskusikan untuk dicariakan solusinya.\r\n</p>', NULL),
(14, '2012-07-23 22:58:17', 'International Conference on Oil Palm and Environment 2012', 'Smart Tbk berkerja sama dengan CIRAD sebuah badan riset agricultural dari Negara Perancis dan juga organisasi dunia WWF.', '<p align=justify>Smart Tbk berkerja sama dengan CIRAD sebuah badan riset agricultural dari Negara Perancis dan juga organisasi dunia WWF menyelenggarakan kembali International Conference on Oil Palm and Environment (ICOPE) yang ketiga kalinya bertempat di Nusa Dua, Bali pada 22 -24 Februari 2012 dengan tema Bagaimana meningkatkan produksi minyak sawit dengan tetap menjaga kelestarian hutan. Smart Tbk berkerja sama dengan CIRAD sebuah badan riset agricultural dari Negara Perancis dan juga organisasi dunia WWF menyelenggarakan kembali International Conference on Oil Palm and Environment (ICOPE) yang ketiga kalinya bertempat di Nusa Dua, Bali pada 22 -24 Februari 2012 dengan tema <br><br>\r\nBagaimana meningkatkan produksi minyak sawit dengan tetap menjaga kelestarian hutan. Konferensi yang membahas praktik perkebunan yang berkelanjutan dan tidak mengancam lingkungan ini diselenggarakan dengan partisipasi dari 400 praktisi perkebunan dan lingkungan hidup dari 14 negara. Produksi kelapa sawit harus bisa seimbang dengan pelestarian lingkungan karena minyak sawit harus bisa memenuhi kebutuhan pangan dan bahan bakar dunia, ujar Suswono, Menteri Pertanian saat membuka konferensi ini. \r\n\r\n</p>', NULL),
(15, '2012-08-09 13:26:01', 'JCB Lighting Tower LT9', 'The LT9 is a dedicated Lighting Tower, with an integral chassis and a 9 meters hydraulically activated telescopic mast.\r\n', '<p align=justify>\r\nThe LT9 is a dedicated Lighting Tower, with an integral chassis and a 9 meters hydraulically activated telescopic mast . LT9 carrying four metal halide spotlight, 4 X 1000 watt provides 360,000 lumens of white light for all night working.\r\n<br><br>\r\nThe LT9 powered by dependable 3 Cylinder Yanmar Engine 3TNV76, Direct Injection, Water Cooled, 1500 RPM, 6.4 kW. LT9 has excellent fuel economy, just requires an average of 1.06 liter per hour fuel when powering the light. \r\n<br><br>\r\nThe LT9 uses JCB KS1 key start control panel which is simple and intuitive to use and completely water-tight. Come with all industry–standard alarm and shutdown; low oil pressure, engine temperature and emergency stop shutdown. The analogue meters and gauges are separated on the controller, they monitor fuel, voltage and frequency. \r\n<br><br>\r\n</p>', 'lighttower-1.jpg'),
(17, '2012-10-05 11:24:16', 'Altrak 1978 & Manitowc Cranes Seminar', 'PT. Altrak 1978 & Manitowoc Cranes Seminar in Hotel Mulia Senayan, Jakarta ', '<p align=\\"justify\\">PT. Altrak 1978 as distributor of Manitowoc Grove mobile cranes organized a Altrak 1978 & Manitowoc Cranes Seminar in Hotel Mulia Senayan, Jakarta which was held on 16 September 2012 focusing on customer from various industries that using cranes on running their business. <br><br> The seminar was well received as the attendees learn the advantages of Manitowoc cranes that committed to providing the most innovative, advance and comprehensive range of lifting solution and outstanding support service through PT. Altrak 1978 and Manitowoc Crane Care. <br><br> A total more than 70 attendees gained a deeper understanding of Manitowoc Cranes product value and discussed some of the latest technology that were implemented on mobile cranes. Both representation from Manitowc and PT. Altrak 1978 were here to address question from the audience.\r\n</p>', 'manitowccraneseminar.jpg'),
(18, '2012-10-22 11:00:59', 'The Power on One Seminar, Jakarta', 'Cummins Power Generation’s The Power of One Seminar recently concluded on 16 October 2012 in Hotel Mulia Senayan, Jakarta.', '<p align=\\"justify\\"> Cummins Power Generation’s The Power of One Seminar recently concluded on 16 October 2012 in Hotel Mulia Senayan, Jakarta. As Cummins distributor for Indonesia, PT. Altrak 1978 organized the half-day event which hosted more than 100 participants ranging from contractor, consultants and business owners from industrial, manufacturing and agricultural sectors that relied heavily on generator sets for providing prime power support for heavy duty usage over long operation hours.<br><br> During the seminar Mr. Jeffery Koh (Sales & Marketing Director, SE Asia) from Cummins Power Generation addressed the audience on importance of utilizing authorized and legitimate distributor for products and after market support.</p>\r\n', 'PoweronOne2.jpg'),
(21, '2012-11-09 14:06:32', 'BALIKPAPAN EXPO 2012 (Info Altrak Edisi 27)', 'Pada tahun ini PT. Altrak 1978 telah ikut berpartisipasi lagi sebagai peserta pameran Balikpapan Expo 2012 ', '<p align=\\"justify\\">Pada tahun ini PT. Altrak 1978 telah ikut berpartisipasi lagi sebagai peserta pameran Balikpapan Expo 2012 yang diselenggarakan di Balikpapan International Sports & Convention Center. Acara ini berjalan dengan baik karena diperkirakan total pengunjung yang datang 7269 orang, diikuti oleh 252 perusahaan yang terdiri dari 147 stand. Acara ini memamerkan berbagai produk dan jasa dalam berbagai bidang peralatan dan penyediaan layanan energy, konstruksi, transportasi, lingkungan, layanan biofuel & keamanan untuk industry pertambangan minyak , dan gas.<br><br>\r\nPameran ini diharapkan dapat memberikan dampak pada industri minyak dan gas di Kalimantan dan daerah sekitarnya, para pengusaha juga tidak perlu repot pergi ke luar negeri untuk membandingkan harga atau mencari kebutuhan spesifik untuk bisnis mereka karena pameran dihadiri oleh banyak perusahaan internasional.<br><br>\r\nPada event ini PT. Altrak 1978 ikut serta untuk kesekian kalinya dengan mengusung lebih dari 10 unit yang ditampilkan dia area booth mulai dari engine, generating sets dengan merk Cummins hingga alat-alat berat dari JCB, Kawasaki, Grove dan juga traktor pertanian dari New Holland.<br><br>\r\nAnimo pengunjung yang cukup besar untuk berkunjung dan melihat produk yang dipamerkan memberi kebanggaan tersendiri bagi seluruh pendukung acara. Kesuksesan dalam mengikuti event ini tak lain karena dukungan dari tim Altrak 1978 Balikpapan dan kantor pusat Jakarta.<br><br>\r\nUntuk terus memberikan kualitas yang lebih baik dan kenyamanan, PT. Sinar Expo Prima juga akan mengadakan acara tambahan beberapa termasuk sebuah turnamen golf, peluncuran produk, door prize, pemilihan stan terbaik serta beasiswa bagi siswa yang diperoleh dari keuntungan turnamen golf. Sampai jumpa di Balikpapan Expo 2013.<br><br>\r\nBaca Juga selengkap nya di Info Altrak Edisi 27 dapat di\r\n<a href=downloads/news/Info_Altrak_edisi_27.pdf>Download (klik)</a> \r\n</p> ', 'balikpapanexpo.jpg'),
(23, '2012-11-09 14:18:00', 'ALTRAK CUMMINS REBUILD INDONESIA (Info Altrak Edisi 27)', 'Seiring perkembangan populasi engine Cummins di Indonesia yang disebabkan permintaan yang tinggi ', '<p align=\\"justify\\">\r\nSeiring perkembangan populasi engine Cummins di Indonesia yang disebabkan permintaan yang tinggi dari sektor industri mining, oil and gas, marine dan sektor industri lainnya maka untuk terus memberikan pelayanan akan engine berkualitas dan meminimalisir terjadinya down time terhadap engine milik customer diperlukan suatu fasilitas dan sarana Rebuild Center yang difokuskan untuk membangun kembali engine dari Cummins.<br><br>\r\nUntuk mendukung hal tersebut, maka pada tanggal 23 Agustus 2012 kemarin telah ditandatangani persetujuan untuk mendirikan perusahaan joint venture antara PT. Altrak 1978 dengan Cummins South Pasifi c / Cummins Asia Pasifi c Pte. Ltd yang bernama PT. Altrak-Cummins Rebuild Indonesia. Penandatanganan kerjasama ini dilaksanakan di gedung CCM Jakarta oleh Bapak Murdaya Widyawimarta Po dan Mr. Gino Butera sebagai Executive Managing Director Asia Pasifi c.<br><br>\r\nPerusahaan yang dimana Altrak 1978 adalah pemegang saham mayoritas ini akan fokus untuk Rebuild Engine HPP. Dengan adanya joint venture ini diharapkan akan semakin mempererat kerjasama antara Altrak 1978 dengan Cummins sebagai principal terbesar diperusahaan yang bergerak dibidang heavy equipment ini.<br><br>\r\nRebuild operation pada cabang Altrak 1978 di Balikpapan dan Samarinda sebelumnya telah mendapatkan setifi kasi ISO 9001:2008 untuk memberikan jaminan kualitas kepada konsumen akan engine rebuild yang dilakukan oleh Altrak 1978.<br><br>\r\nDengan didirikannya PT. ACRI ini diharapkan akan memberikan kontribusi yang positif pada bisnis heavy equipment yang dijalankan Altrak 1978 khususnya pada segmen engine rebuild di Indonesia.<br><br>\r\nBaca Juga selengkap nya di Info Altrak Edisi 27 dapat di\r\n<a href=downloads/news/Info_Altrak_edisi_27.pdf>Download (klik)</a> \r\n</p>', 'altrakcumminreb.jpg'),
(24, '2012-11-12 09:55:17', 'The Power of One Seminar - Banjarmasin', 'PT. Altrak 1978 as authorized distributor of Cummins power Generation ', '<p align=\\"justify\\">\r\nPT. Altrak 1978 as authorized distributor of Cummins power Generation recently organized a Power of One seminar for an estimated more than 80 participant from contractor, engineer and business owners from various industries was held at Rattan Inn Hotel, Banjarmasin on 6th November 2012.\r\n<br><br>\r\nThe seminar provided a comprehensive business overview where attendees learned the advantage of the Power of One and how seamless integration ensure fail-safe performance and high uptime. The Power of One is all about providing customers with a one stop source for accountability, service and support.\r\n<br><br>\r\nAside from learning about the Power of One value package, attendees gained a deeper understanding of paralleling compatibility, application and benefits, and also learned the features of PowerCommand® controls and Digital Master Control paralleling system.  Up to date information on emission standards and gas generator set operation and maintenance also received in the seminar.  Member of PT. Altrak 1978 and Cummins Power Generation Asia Pacific teams presented on these topics.\r\n<br><br>\r\n</p>', 'thepowerofonebanjarmasin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `talatberat`
--

CREATE TABLE IF NOT EXISTS `talatberat` (
  `kodealat` varchar(12) NOT NULL DEFAULT '',
  `namaalat` varchar(25) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `merk` varchar(20) NOT NULL DEFAULT '',
  `tahunbeli` varchar(20) NOT NULL DEFAULT '',
  `jumlah` int(11) NOT NULL,
  `hargasewa` int(12) NOT NULL,
  PRIMARY KEY (`kodealat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talatberat`
--

INSERT INTO `talatberat` (`kodealat`, `namaalat`, `type`, `merk`, `tahunbeli`, `jumlah`, `hargasewa`) VALUES
('A00001', 'JCB JS206', 'JS206', 'JCB', '2014', 13, 5000000),
('A00002', 'JCB JS207', 'JS207', 'JCB', '2014', 14, 5000000),
('A00005', 'JCB JS205', 'JS205', 'JCB', '2012', 12, 4500000);

-- --------------------------------------------------------

--
-- Table structure for table `tcustomer`
--

CREATE TABLE IF NOT EXISTS `tcustomer` (
  `kodecust` int(12) NOT NULL AUTO_INCREMENT,
  `nik` varchar(12) NOT NULL,
  `namacust` char(60) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telprumah` varchar(20) NOT NULL,
  `telphp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `person` varchar(50) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `salesman` varchar(50) NOT NULL,
  PRIMARY KEY (`kodecust`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tcustomer`
--

INSERT INTO `tcustomer` (`kodecust`, `nik`, `namacust`, `alamat`, `telprumah`, `telphp`, `email`, `person`, `npwp`, `salesman`) VALUES
(5, 'A001', 'PT Alam Sutera', 'jl serpong', '021-123456', '0812222222', 'test@gmail.com', 'roma', '22223333333', 'riko'),
(6, 'A002', 'a2', 'pamulang', '021', '0123456', 'abc@gmail.com', 'andi', '22222222', 'hadi'),
(7, 'A003', 'a4', 'test', '021-123456', '0123456', 'test@gmail.com', 'andi', '22223333333', 'hadi');

-- --------------------------------------------------------

--
-- Table structure for table `trkontrak`
--

CREATE TABLE IF NOT EXISTS `trkontrak` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kodekontrak` varchar(12) DEFAULT NULL,
  `tglkontrak` varchar(12) DEFAULT NULL,
  `kodeorder` varchar(12) DEFAULT NULL,
  `kodecust` varchar(12) DEFAULT NULL,
  `namacust` varchar(55) NOT NULL,
  `namaalat` varchar(50) NOT NULL,
  `hargasewa` int(12) NOT NULL,
  `lamasewa` int(12) NOT NULL,
  `jmlbiaya` int(12) NOT NULL,
  `totalbiaya` int(11) NOT NULL,
  `kodeuser` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `trkontrak`
--

INSERT INTO `trkontrak` (`Id`, `kodekontrak`, `tglkontrak`, `kodeorder`, `kodecust`, `namacust`, `namaalat`, `hargasewa`, `lamasewa`, `jmlbiaya`, `totalbiaya`, `kodeuser`) VALUES
(4, '000003', '25-12-2013', '0001', 'A001', 'PT Alam Sutera', 'TRACKET EXCAVATOR', 5000000, 10, 50000000, 55000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `trkwitansi`
--

CREATE TABLE IF NOT EXISTS `trkwitansi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kodekwitansi` varchar(12) DEFAULT NULL,
  `tglkwitansi` varchar(12) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `kodekontrak` varchar(255) DEFAULT NULL,
  `kodecust` varchar(255) DEFAULT NULL,
  `namacust` varchar(50) NOT NULL,
  `jumlahbayar` int(11) DEFAULT NULL,
  `kodeuser` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `kodekwitansi` (`kodekwitansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trorder`
--

CREATE TABLE IF NOT EXISTS `trorder` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kodeorder` varchar(12) DEFAULT NULL,
  `tglorder` varchar(12) DEFAULT NULL,
  `kodecust` varchar(20) DEFAULT NULL,
  `namacust` varchar(50) NOT NULL,
  `namaalat` varchar(50) NOT NULL,
  `tglsewa` varchar(12) DEFAULT NULL,
  `tglkembali` varchar(12) DEFAULT NULL,
  `ketlokasi` varchar(50) DEFAULT NULL,
  `kodeuser` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `trorder`
--

INSERT INTO `trorder` (`Id`, `kodeorder`, `tglorder`, `kodecust`, `namacust`, `namaalat`, `tglsewa`, `tglkembali`, `ketlokasi`, `kodeuser`) VALUES
(1, '0001', '01-01-2014', 'A001', 'PT Alam Sutera', 'JCB JS205', '04-01-2014', '31-01-2014', 'jl serpong', ''),
(2, '0002', '01-01-2014', 'A002', 'PT Sinar Mas', 'JCB JS205', '04-01-2014', '31-01-2014', 'jl serpong', ''),
(3, '0003', '20-02-2014', 'A002', 'PT Alam Sutera', 'JCB JS206', '25-02-2014', '24-03-2014', 'jl serpong', '');

-- --------------------------------------------------------

--
-- Table structure for table `trpenawaran`
--

CREATE TABLE IF NOT EXISTS `trpenawaran` (
  `kodetawar` int(12) NOT NULL,
  `tgltawar` varchar(12) NOT NULL,
  `kodeorder` varchar(11) NOT NULL,
  `kodecust` int(12) NOT NULL,
  `namacust` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `namaalat` varchar(50) NOT NULL,
  `hargasewa` int(12) NOT NULL,
  `lamasewa` int(12) NOT NULL,
  `jmlbiaya` int(12) NOT NULL,
  `totalbiaya` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trsuratjln`
--

CREATE TABLE IF NOT EXISTS `trsuratjln` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kodesuratjln` varchar(255) DEFAULT NULL,
  `tglsuratjln` varchar(255) DEFAULT NULL,
  `kodekontrak` varchar(255) DEFAULT NULL,
  `kodeoperator` varchar(255) DEFAULT NULL,
  `kodecust` varchar(255) DEFAULT NULL,
  `namacust` varchar(50) NOT NULL,
  `alamatcust` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `person` varchar(50) NOT NULL,
  `kodealat` int(12) NOT NULL,
  `namaalat` varchar(50) NOT NULL,
  `qty` int(12) NOT NULL,
  `kodeuser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trsuratjln`
--

INSERT INTO `trsuratjln` (`Id`, `kodesuratjln`, `tglsuratjln`, `kodekontrak`, `kodeoperator`, `kodecust`, `namacust`, `alamatcust`, `telp`, `person`, `kodealat`, `namaalat`, `qty`, `kodeuser`) VALUES
(1, '002', '05-01-2014', '0001', '01', 'A001', 'PT Alam Sutera', '', '', '', 0, 'JCB JS205', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(13, 'dedi', 'dedi'),
(6, 'admin', 'admin'),
(12, 'yosep', 'yosep'),
(11, 'arif', 'arif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
