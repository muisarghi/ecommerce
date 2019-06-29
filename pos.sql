-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 04:39 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `faktur` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL,
  `bkirim` double(10,0) NOT NULL,
  `status` int(2) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `idcustomer`, `faktur`, `tgl`, `bkirim`, `status`, `ket`) VALUES
(10, 10, '201905292036/10', '2019-05-29 00:00:00', 50000, 1, 'Checkout*2019-05-29 08:36#Terbayar*2019-05-30 07:18');

-- --------------------------------------------------------

--
-- Table structure for table `cartdetail`
--

CREATE TABLE `cartdetail` (
  `idcartdetail` int(11) NOT NULL,
  `faktur` varchar(255) NOT NULL,
  `kode` varchar(12) NOT NULL,
  `harga` double(10,0) NOT NULL,
  `jml` int(11) NOT NULL,
  `total` double(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartdetail`
--

INSERT INTO `cartdetail` (`idcartdetail`, `faktur`, `kode`, `harga`, `jml`, `total`) VALUES
(7, '201905292036/10', '04DOMPBTK', 32500, 1, 32500),
(8, '201905292036/10', '04SLNGBAG', 108000, 1, 108000);

-- --------------------------------------------------------

--
-- Table structure for table `cartv`
--

CREATE TABLE `cartv` (
  `id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `kode` varchar(50) NOT NULL,
  `harga` double(10,0) NOT NULL,
  `jml` int(11) NOT NULL,
  `total` double(10,0) NOT NULL,
  `session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartv`
--

INSERT INTO `cartv` (`id`, `tgl`, `kode`, `harga`, `jml`, `total`, `session`) VALUES
(1, '2019-05-30 07:56:00', '01160ABG25', 140000, 1, 140000, 'asl8moqkud70nm2fnuef6d4sff'),
(2, '2019-05-30 07:57:00', '03ALUSUS', 25500, 1, 25500, 'asl8moqkud70nm2fnuef6d4sff');

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `idconfirm` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `jmlrp` bigint(20) NOT NULL,
  `tglbyr` date NOT NULL,
  `norektuj` varchar(255) NOT NULL,
  `bankcus` varchar(255) NOT NULL,
  `namacus` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`idconfirm`, `nama`, `email`, `hp`, `invoice`, `jmlrp`, `tglbyr`, `norektuj`, `bankcus`, `namacus`, `note`) VALUES
(1, 'Roy', 'roy@gmail.com', '08986767', 'invbfbbcg4848', 1000000, '2019-05-22', 'ryu', 'Roy S', '00999000999', '-'),
(3, 'Rudi', 'ru@d.i', '086889', '20191919191', 100000, '2019-05-02', 'bca', 'mandiri', 'rudi', '-');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idcontact` int(11) NOT NULL,
  `tglcontact` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `masalah` varchar(255) NOT NULL,
  `tanya` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `dupdate` datetime NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `tgl`, `dupdate`, `judul`, `isi`, `ket`) VALUES
(1, '2019-05-21', '2019-05-23 06:49:29', 'About Us', '<p><strong>Goedang Oleh Oleh</strong>&nbsp;adalah tempat yang menyediakan berbagai macam oleh-oleh khas Indonesia terutama Malang. Kami bertempat di Jl. Simpang Tenaga II no 12 Malang yang memiliki lokasi strategis. Sebagai Pusat Jajanan Serba Ada disini menyediakan Ruang Retail sebagai toko Oleh-Oleh.</p>\r\n\r\n<p>Kami menyediakan banyak jajanan khas Malang dan Jawa Timur.</p>\r\n\r\n<p>Kenapa Anda Memilih Kami ???</p>\r\n\r\n<p><strong>PARKIR LUAS</strong></p>\r\n\r\n<p>Goedang Oleh Oleh memiliki area parkir yang luas dan aman. Mampu menampung banyak kendaraan mulai dari kendaraan pribadi maupun umum.&nbsp;<br />\r\n<br />\r\nDengan lokasi Goedang Oleh Oleh yang strategis berada di depan jalan raya.</p>\r\n\r\n<p><strong>MUSHOLA</strong></p>\r\n\r\n<p>Goedang Oleh Oleh juga menyediakan Mushola untuk tempat beribadah, dengan ruangan yang bersih dan nyaman untuk digunakan.</p>\r\n\r\n<p><strong>REST AREA</strong></p>\r\n\r\n<p>Goedang Oleh Oleh juga memberikan fasilitas tempat beristirahat yang dapat dinikmati oleh semua pengunjung.</p>\r\n', ''),
(7, '2019-05-27', '2019-05-27 02:31:17', 'FAQS', '<h3><span style=\"font-size:12px\"><span style=\"color:#e67e22\">Pertanyaan yang Sering Diajukan</span></span></h3>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:12px\"><span style=\"color:#2980b9\">Bagaimana cara melakukan order di toko Online ini?</span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-size:14px\">Untuk order Anda dapat melakukan dari halaman website, dengan memilih produk terlebih dahulu. Selanjutnya adalah proses ordering dan diakhiri dengan Proses Checkout.</span></p>\r\n\r\n<p style=\"margin-left:40px\">&nbsp;</p>\r\n\r\n<div>\r\n<ul>\r\n	<li><span style=\"font-size:12px\"><span style=\"color:#2980b9\">Bagaimana metode pembayaran di toko online ini?</span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px\"><span style=\"font-size:14px\">Pembayaran dapat anda lakukan dengan melakukan transfer ke nomor rekening yang kami tunjuk, selanjutnya konfirmasikan pembayaran anda kepada kami untuk kami validasi.</span></p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', ''),
(8, '2019-05-27', '2019-05-27 02:56:29', 'How To Shop', '<p style=\"text-align:center\"><span style=\"color:#2980b9\"><strong>6 Langkah mudah cara berbelanja di toko online kami:</strong></span></p>\r\n\r\n<p style=\"text-align:center\">Pilih Barang<br />\r\nCheck Out<br />\r\nTransfer pembayaran<br />\r\nKonfirmasi Pembayaran<br />\r\nBarang dikirim.<br />\r\nSelesai</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#2980b9\"><strong><u>Mohon Diperhatikan :</u></strong></span></p>\r\n\r\n<p>Harga dapat berubah sewaktu-waktu<br />\r\nTotal harga yang tertera belum termasuk ongkos kirim<br />\r\nBarang akan kami transaksikan setelah pembayaran masuk dalam rekening kami<br />\r\nSemua barang yang kami kirimkan dalam keadaan baik dan utuh<br />\r\nBila ada kerusakan maupun keterlambatan penerimaan barang bukan merupakan tanggung jawab kami</p>\r\n', ''),
(9, '2019-05-27', '2019-05-27 02:30:49', 'Peta Lokasi', '<center>\r\n<p><img alt=\"\" src=\"/baru/admin/kcfinder/upload/images/lokasigo.jpg\" style=\"height:1077px; width:760px\" /><img alt=\"\" src=\"/go/admin/kcfinder/upload/images/lokasigo.jpg\" style=\"height:1077px; text-align:center; width:760px\" /></p>\r\n</center>\r\n<p>&nbsp;</p>\r\n', ''),
(10, '2019-05-27', '2019-05-27 03:19:31', 'Bank Account', '<p><span style=\"background-color:#ffffff; color:#000000; font-family:Tahoma; font-size:14.4px\">Pembayaran bisa dilakukan dengan melakukan transfer ke rekening dibawah ini :</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nomer Rekening :</p>\r\n\r\n<p>Nama Pemilik Rekening:</p>\r\n', ''),
(13, '2019-05-29', '2019-05-29 09:09:44', 'DANGKE, KEJU BAKAR DARI ENREKANG', '<p style=\"text-align:start\">Hampir semua orang pasti sudah pernah menikmati kelezatan keju atau paling tidak mencicipinya. Bahan makanan yang berasal dari susu sapi ini kerap kali dimakan bersama roti, kue ataupun penambah variasi rasa bagi hidangan-hidangan lainnya.</p>\r\n\r\n<p style=\"text-align:start\">Selain terkenal dengan candu kopinya yang sudah menembus pasar mancanegara, Kabupaten Enrekang, Sulawesi Selatan, juga menjadi satu-satunya wilayah penghasil keju lokal yang disebut Dangke. Ini adalah makanan khas daerah tersebut, berbahan baku susu kerbau maupun sapi yang dibekukan.</p>\r\n\r\n<p style=\"text-align:start\">Jenis keju hasil fermentasi susu sapi yang sudah diproduksi semenjak tahun 1900-an ini mengingatkan pada &lsquo;Keseek&rsquo;, keju buatan Jerman dengan tekstur seperti tahu dan berwarna putih.</p>\r\n\r\n<p style=\"text-align:start\">Proses pengolahan susu sapi menjadi Dangke terbilang cukup unik. Sebelum memasuki proses fermentasi, susu sapi segar akan dipanaskan dengan suhu kurang lebih 70 derajat celcius. Adalah getah dari pepaya yang dijadikan pemisah susu dari kandungan air dan lemaknya.</p>\r\n\r\n<p style=\"text-align:start\">Getah pepaya ini pulalah yang memadatkan susu sapi menjadi bongkahan-bongkahan keju berwarna putih. Warga Enrekang juga menggunakan nenas untuk membuat rasanya menjadi agak masam dan berefek kekuningan pada bongkahannya. Satu bongkah Dangke kurang lebih setara dengan 2 liter susu segar. Setelah padat dan terfermentasi, bongkahan-bongkahan keju yang masuk dalam kategori &lsquo;Soft Cheese&rsquo; (keju lunak) ini kemudian diberi garam dan dicetak dengan tempurung-tempurung kelapa yang sudah dibersihkan sebelumnya untuk kemudian dibungkus dengan daun-daun pisang.</p>\r\n\r\n<p style=\"text-align:start\">Digoreng atau di panggang adalah cara penyajian yang paling sering sederhana dan paling sering sering ditemui untuk mempersiapkan bongkahan-bongkahan Dangke menjadi hidangan yang siap dinikmati. Sepiring nasi hangat dan sambal terasi adalah teman yang paling pas untuk menyantap potongan-potongan keju lokal ini.</p>\r\n\r\n<p style=\"text-align:start\">Para pendatang dan warga enrekang sendiri paling gemar menikmati Dangke dengan &lsquo;pulu mandoti&rsquo;. Beras yang bila ditanak aroma wanginya bisa tercium sampai di kejauhan ini adalah hasil bumi yang hanya bisa ditanam di persawahan Enrekang.</p>\r\n\r\n<p style=\"text-align:start\">Di Enrekang, keju yang juga dipercaya bisa memperbaiki kualitas sperma dan meningkatkan stamina.<br />\r\nDisebut Dangke karena pada masa pendudukan Belanda kata &lsquo;Danke&rsquo; yang berarti &lsquo;terima kasih&rsquo; kerap di ucapkan oleh para opsir Belanda, setelah disuguhi bongkahan susu (keju) hasil olahan tangan-tangan terampil warga Enrekang. Semenjak itulah keju putih ini berubah nama menjadi &lsquo;Dangke&rsquo;</p>\r\n', 'article'),
(14, '2019-05-29', '2019-05-29 09:12:36', 'RAINDROP CAKE', '<p><span style=\"background-color:#fffdfd; color:#606666; font-family:Lato,Helvetica,Arial,sans-serif; font-size:17.6px\">Raindrop Cake, dessert Bening Dari Jepang selalu ada saja tren kuliner terbaru, dan baru-baru ini Jepang memiliki tren dessert. Seorang warga Williamsburg bernama Darren Wong mempopulerkannya di New York,&nbsp;</span><span style=\"background-color:#fffdfd; color:#606666; font-family:Lato,Helvetica,Arial,sans-serif; font-size:17.6px\">Amerika.Jika</span><span style=\"background-color:#fffdfd; color:#606666; font-family:Lato,Helvetica,Arial,sans-serif; font-size:17.6px\">&nbsp;di Jepang dessert tetesan air bernama water cake, Darreng Wong menamakan kreasinya Raindrop Cake. Pria ini mengaku mengadaptasinya dari Mizu Shingen Mochi di Jepang. Wong&nbsp; berkesperimen selama 2 bulan untuk menemukan bahan dan cetakan Raindrop Cake yang tepat. Raindrop Cake pertama kali diperkenalkan Wong diWilliamsburg and Prospect Park Smorgasburg Market. Kue ini begitu lembut sehingga cocok disajikan bersama sirup brown sugar dan bubuk kedelai panggang di sisiannya. Dessert ini langsung menarik perhatian karena tampilannya unik dan mengandung 0 kalori. Sehingga bisa dikonsumsi siapapun. Tampilan dan tekstur (Raindrop Cake) akan menambah pengalaman makan dessert. Dessert bening ini telah menjadi begitu populer di Jepang yang sudah menyamai populernya Cronut. Sekarang, Raindrop Cake mulai mewabah di Amerika Serikat, dimulai dari New York.</span></p>\r\n', 'article'),
(16, '2019-05-29', '2019-05-29 09:19:57', 'NASI KUNING KHAS MANADO', '<p style=\"text-align:start\">Siapa tak kenal nasi kuning? Saya mengenal nasi kuning sejak masih kecil, karena bagi masyarakat di Jawa seperti saya, makanan yang terbuat dari beras dengan bumbu kunyit, santan, serta rempah-rempah itu, biasanya, menjadi hidangan spesial dalam acara pesta atau syukuran.</p>\r\n\r\n<p style=\"text-align:start\">Tapi, tahukah Anda, nasi kuning juga menjadi salah satu kuliner khas masyarakat di kota Manado? Jangan heran, jika berkunjung ke Ibukota Sulawesi Utara tersebut Anda bakal menemukan banyak rumah makan yang menjual nasi kuning.</p>\r\n\r\n<p style=\"text-align:start\">Dan&hellip;enak !</p>\r\n\r\n<p style=\"text-align:start\">Manado merupakan salah satu kota di Indonesia yang kaya akan kuliner. Selain Tinutuan, sarapan pagi lainnya adalah nasi kuning khas Manado. Nasi kuning khas Manado tidak hanya dinikmati pada momen-momen tertentu seperti pada beberapa daerah lainnya, misalnya nanti disajikan pada hari ulang tahun atau hari penting lainnya, namun di Manado nasi kuning merupakan menu setiap hari yang umumnya merupakan sarapan pada waktu pagi.</p>\r\n\r\n<p style=\"text-align:start\">Bahan dasarnya adalah beras, santan kelapa, air perasan kunyit parut, daun pandan, batang serai yang dimemarkan, daun jeruk, dan sejumlah bahan penyedap rasa lainnya. Nasi kuning khas Manado gurih dan mengundang selera.</p>\r\n\r\n<p style=\"text-align:start\">Santan kelapa sebagai salah satu bahan dasarnya membuat nasi kuning lebih enak dan gurih. Selain itu, santan kelapa sangat baik untuk pembentukan sistem imunitas atau kekebalan tubuh dan pertahanan kepada berbagai jenis penyakit.</p>\r\n\r\n<p style=\"text-align:start\">Bahan dasar lainnya , yaitu kunyit sebagai pewarna alaminya bersifat antiseptic dan anti bakteri; juga dapat berperan sebagai desinfektan untuk luka, keputihan, haid tidak lancar, diabetes melitus, meremajakan sel-sel tubuh, memperlancar atau memperbanyak ASI, mengobati batuk berlendir dan diare, mencegah tumor dan kanker, serta bermanfaat sebagai anti oksidan.</p>\r\n\r\n<p style=\"text-align:start\">Menu pelengkap sajian nasi kuning adalah cakalang fufu atau daging sapi tumis, ditambah telur rebus dandabu-dabu (sambal) yang rasanya bisa membuat tubuh berkeringat bahkan bisa membuat air mata tanpa disadari menetes; inilah salah satu kekhasan nasi kuning khas Manado, yaitu cita rasa sambalnya yang membuat mulut berkecap-kecap bagi yang tak biasa dengan rasa pedas. Bagi yang baru menikmatinya pasti akan berkata, &ldquo;Dabu-dabunya pedas<br />\r\nNasi kuning khas Manado bisa dimakan saat panas maupun dingin, dan bisa dibawa pulang ke rumah. Dabu-dabu dan lauknya diolah&nbsp; dari daging cincang yang ditumis.&nbsp; Nasi kuning yang dibawa pulang ke rumah biasanya dibungkus sama-sama dengan dabu-dabunya, namun ada juga penikmatnya menginginkan agar dabu-dabunya dibungkus terpisah.</p>\r\n\r\n<p style=\"text-align:start\">Jika suka pedas, Anda tinggal menaburkan sambal goreng khas Minahasa yang&hellip;.huh hah..pedas. Sambal ini akan semakin memperkuat ciri khas masakan bumi Minahasa itu. Begitu nasi kuning masuk mulut, niscaya lidah Anda terus bergoyang menikmati hidangan hingga suapan terakhir. Saya sudah membuktikan&hellip;dan&hellip;kini saya merindukannya.</p>\r\n\r\n<p style=\"text-align:start\">Kekhasan lainnya dari nasi kuning Manado tidak berbentuk kerucut seperti tumpeng. Juga tidak dibungkus dengan kertas atau daun pisang, tetapi dibungkus dengan daun woka (sejenis daun lontar) yang banyak tumbuh di daratan Sulawesi Utara.</p>\r\n\r\n<p style=\"text-align:start\">Hampir seluruh sudut kota Manado terdapat warung makanan yang menjual nasi kuning. Nasi kuning (yellow rice) merupakan makanan yang banyak digandrungi oleh warga Manado dan sekitarnya. Kampung Kodo di kelurahan Lawangirung dan Komo Luar adalah dua lokasi yang sudah familiar bagi masyarakat kota Manado sebagai lokasi untuk membeli nasi kuning.</p>\r\n', 'news'),
(17, '2019-05-29', '2019-05-29 09:20:31', 'SEJARAH HAMBURGER', '<p style=\"text-align:start\">HAMBURGER (atau seringkali disebut dengan<strong>&nbsp;burger</strong>) adalah sejenis makanan berupa roti berbentuk bundar yang diiris dua dan ditengahnya diisi dengan&nbsp;patty yang biasanya diambil dari&nbsp;daging, sayur-sayuran, tomat, bombay. Sebagai sausnya, burger diberi berbagai jenis saus&nbsp;seperti&nbsp;mayonaise, sous tomat. Beberapa varian burger juga dilengkapi keju, asinan, serta bahan pelengkap lain sosis dan ham.</p>\r\n\r\n<p style=\"text-align:start\">Banyak orang keliru dan mengira bahwa nama Hamburger berasal dari kata &ldquo;Ham&rdquo;, namun sebenarnya namanya berasal dari Hamburg, tempat makanan ini berasal. Dari kota kedua terbesar dijerman banyak penduduknya yang beremigrasi ke amerika menyebarkan pembuatan burger ke sana. Hanyalah sebuah kebetulan bahwa kata &ldquo;ham&rdquo; yang dalam inggris daging asap bunyi yang hampir serupa dengan&nbsp;<strong>Hamburger</strong>, faktanya hamburger tidak mengandung ham(meskipun ada juga restoran yang menambahkan irisan&nbsp;ham&nbsp;pada burger mereka untuk menambah cita rasa).</p>\r\n\r\n<p style=\"text-align:start\"><strong>Jadi secara harafiah dapat disimpulkan bahwa arti kata Hamburger berarti &ldquo;makanan yang berasal dari Hamburg&rdquo; dan bukan berarti &ldquo;makanan yang mengandung Ham&rdquo;. Namun pada praktiknya burger atau hamburger lebih sering diartikan sebagai sandwich&nbsp;atau jenis roti isi lainnya yang berbentuk bulat. Dalam masyarakat kata burger sudah lebih melekat sebagai jenis makanannya daripada asal muasal dan pencipta dari burger.</strong></p>\r\n\r\n<p style=\"text-align:start\">Ada beberapa versi dari sejarah penciptaan burger, penganan ini awalnya adalah makanan khas bangsa&nbsp;tartar, yaitu berupa daging cincang yang disantap mentah-mentah dengan perasan jeruk. Bangsa&nbsp;tartar merupakan bangsa nomaden yang sering melakukan perjalanan jauh menunggang kuda, sehingga daging yang mereka bawa sering menjadi keras dan tak layak konsumsi, maka merekapun mengakalinya dengan meletakkan daging di bawah sadel kuda mereka. setelah melakukan perjalanan jauh ternyata daging tersebut masih hangat dan tidak menjadi dingin, maka daging tersebut langsung disantap dengan tanpa dimasak dan hanya diberi sedikit perasan&nbsp;jeruk nipis.</p>\r\n\r\n<p style=\"text-align:start\"><strong>Hidangan yang terkenal lezat dari&nbsp;asia tengah &nbsp;ini kemudian dibawa oleh para pelaut Eropa ke negaranya, tepatnya ke kota hamburg&nbsp;karena masyarakat di sana pada umumnya mengganggap bahwa mereka adalah bangsa yang beradab, mereka menolak memakan daging yang tak dimasak, maka daging khas&nbsp;tartar&nbsp;tersebut mereka masak terlebih dahulu sebelum disantap dengan cara dibakar atau digoreng, ternyata masakan ini sangat disukai berbagai orang. Sampai saat ini sebagian orang tetap lebih menyenangi menyantapnya mentah-mentah. Inilah asal mula daging burger.</strong></p>\r\n\r\n<p style=\"text-align:start\">Sedangkan untuk hamburger yang kita kenal bentuknya sekarang, yaitu yang berupa daging yang disantap dengan roti, berasal dari&nbsp;amerika, para&nbsp;imigran&nbsp;dari&nbsp;Hamburg memperkenalkan daging burger mereka ke orang Amerika. Di sana daging ini diberi nama&nbsp;hamburg steak dan daging ini masih disantap seperti layaknya menyantap&nbsp;steak.</p>\r\n', 'news'),
(18, '2019-05-30', '2019-05-30 08:38:08', 'Virtual Tour 3D', '<p>Virtual Tour 3D</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcus` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `tgllhr` date NOT NULL,
  `member` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcus`, `nama`, `email`, `nohp`, `alamat`, `kota`, `tgllhr`, `member`) VALUES
(8, 'Robi', 'ro@b.i', '544444', 'Jl. Raya', 'Malang', '1990-05-09', 'n'),
(10, 'Andi', 'andi@gmail.com', '089969996', 'Jl. Raya', 'Malang', '1990-11-06', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `kode` char(10) NOT NULL DEFAULT '',
  `keterangan` varchar(30) DEFAULT NULL,
  `komisip` double(6,2) DEFAULT NULL,
  `komisi` double(7,0) DEFAULT NULL,
  `discount` double(7,0) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`kode`, `keterangan`, `komisip`, `komisi`, `discount`) VALUES
('01', 'SPREI', 0.00, NULL, 0),
('02', 'KAOS DAN BATIK', 0.00, NULL, 0),
('03', 'CAMILAN', 0.00, NULL, 0),
('04', 'HANDYCRAFT', 0.00, NULL, 0),
('05', 'PRODUK GO', 0.00, NULL, 0),
('06', 'WALIKAN', 0.00, NULL, 0),
('07', 'SUVENIR', 0.00, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `urut` int(5) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `nama`, `file`, `urut`, `ket`) VALUES
(1, 'Iklan Atas 1', 'advstop_20190531045518.png', 1, 'advstop'),
(2, 'Iklan Atas 2', 'advstop_20190531045800.png', 2, 'advstop'),
(4, 'Iklan 3', 'advstop_20190531053132.png', 3, 'advstop'),
(5, 'Bawah 1', 'advsbot_20190531054723.png', 1, 'advsbot'),
(6, 'Bawah 2', 'advsbot_20190531054735.png', 2, 'advsbot'),
(8, 'Slide 1', 'advsmain_20190531055702.png', 5, 'advsmain'),
(9, 'Slide 2', 'advsmain_20190531055716.png', 6, 'advsmain'),
(10, 'Slide 4', 'advsmain_20190531055726.png', 4, 'advsmain'),
(11, 'Slide 3', 'advsmain_20190531055748.png', 3, 'advsmain'),
(14, 'new 1', 'advsmain_20190531060901.png', 1, 'advsmain'),
(15, 'new 2', 'advsmain_20190531060912.png', 2, 'advsmain');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `tipe` char(1) DEFAULT NULL,
  `kode` varchar(21) NOT NULL DEFAULT '-',
  `kode1` varchar(21) DEFAULT '-',
  `barcode` varchar(21) DEFAULT '-',
  `barcode1` varchar(21) DEFAULT '-',
  `merk` varchar(20) DEFAULT '-',
  `golongan` varchar(20) DEFAULT '-',
  `jenis` varchar(20) DEFAULT '-',
  `pabrik` varchar(8) DEFAULT '-',
  `nama` varchar(100) DEFAULT '-',
  `nama2` varchar(40) DEFAULT NULL,
  `dos` double(1,0) DEFAULT '1',
  `satuan` varchar(6) DEFAULT NULL,
  `satuan2` varchar(6) DEFAULT NULL,
  `satuan3` varchar(6) DEFAULT NULL,
  `satuan4` varchar(6) DEFAULT '',
  `status` char(1) DEFAULT 'Y',
  `max` double(9,0) DEFAULT '0',
  `min` double(9,0) DEFAULT '0',
  `hj` double(10,0) DEFAULT '0',
  `hj2` double(10,0) DEFAULT '0',
  `hj3` double(10,0) DEFAULT '0',
  `hj4` double(10,0) DEFAULT '0',
  `hb` double(12,2) DEFAULT '0.00',
  `hb2` double(12,2) DEFAULT '0.00',
  `hb3` double(12,2) DEFAULT '0.00',
  `hb4` double(12,2) DEFAULT '0.00',
  `oldtgl` date DEFAULT '0000-00-00',
  `namabar` varchar(26) DEFAULT NULL,
  `shp` double(14,2) DEFAULT '0.00',
  `hp` double(14,2) DEFAULT '0.00',
  `hppmu` double(14,2) DEFAULT '0.00',
  `isi1` double(9,2) NOT NULL DEFAULT '0.00',
  `isi2` double(9,2) NOT NULL DEFAULT '0.00',
  `isi3` double(9,2) DEFAULT '0.00',
  `sk` char(1) DEFAULT NULL,
  `ppn` char(1) DEFAULT NULL,
  `disc` double(10,2) DEFAULT '0.00',
  `mini` double(10,0) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Data Stock';

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `idtesti` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `testi` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`idtesti`, `tgl`, `nama`, `email`, `testi`, `status`) VALUES
(1, '2019-05-27', 'Lina', 'lin@n.a', 'Barang bagus', 1),
(2, '2019-05-29', 'Rudi', 'ru@d.i', 'Barang sudah diterima. Terima Kasih', 1),
(3, '2019-05-29', 'ard', 'asd@gl.l', 'Terima kasih', 1);

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`id`, `user`, `password`, `ket`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `usercus`
--

CREATE TABLE `usercus` (
  `idusercus` int(11) NOT NULL,
  `idcus` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercus`
--

INSERT INTO `usercus` (`idusercus`, `idcus`, `user`, `pass`) VALUES
(1, 10, 'andi', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD PRIMARY KEY (`idcartdetail`);

--
-- Indexes for table `cartv`
--
ALTER TABLE `cartv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`idconfirm`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcus`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `merk` (`merk`,`kode`),
  ADD KEY `jenis` (`jenis`,`kode`),
  ADD KEY `kode` (`kode`),
  ADD KEY `nama` (`nama`,`kode`),
  ADD KEY `barcode` (`barcode`,`kode`),
  ADD KEY `pabrik` (`pabrik`,`kode`),
  ADD KEY `golongan` (`golongan`,`nama`,`kode`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`idtesti`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercus`
--
ALTER TABLE `usercus`
  ADD PRIMARY KEY (`idusercus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cartdetail`
--
ALTER TABLE `cartdetail`
  MODIFY `idcartdetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cartv`
--
ALTER TABLE `cartv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `idconfirm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idcontact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `idtesti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usercus`
--
ALTER TABLE `usercus`
  MODIFY `idusercus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
