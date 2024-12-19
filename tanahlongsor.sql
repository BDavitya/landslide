-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 19, 2024 at 03:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanahlongsor`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `posisi` enum('UI/UX Designer','Front-End Developer','Back-End Developer') NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `nim`, `posisi`, `img`) VALUES
(1, 'barita', 'barita', 'Barita Davitya Setiawati', 124230073, 'UI/UX Designer', 'barita.png'),
(2, 'ailsa', 'ailsa', 'Ailsa Putri Riyanto', 124230063, 'Front-End Developer', 'ailsa.jpg'),
(3, 'jenri', 'jenri', 'Archangela Girlani Adobiandi Jenrijualita Santosaa', 124230064, 'Back-End Developer', 'jenri.jpg'),
(4, 'rizal', 'rizal', 'Akhmad Rizal Wahyuddin', 124230080, 'UI/UX Designer', 'rizal.jpg'),
(5, 'zahra', 'zahra', 'Zahratun Nafi Ah', 124230083, 'Front-End Developer', 'zahra.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ciri_oranghilang`
--

CREATE TABLE `ciri_oranghilang` (
  `id` int(11) NOT NULL,
  `id_orang` int(11) NOT NULL,
  `ciri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ciri_oranghilang`
--

INSERT INTO `ciri_oranghilang` (`id`, `id_orang`, `ciri`) VALUES
(1, 1, 'Bernafas'),
(2, 2, 'Rambut Hitam'),
(3, 1, 'haii'),
(4, 2, 'hola');

-- --------------------------------------------------------

--
-- Table structure for table `dampak`
--

CREATE TABLE `dampak` (
  `id` int(11) NOT NULL,
  `status` enum('Positif','Negatif','','') NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dampak`
--

INSERT INTO `dampak` (`id`, `status`, `judul`, `isi`) VALUES
(1, 'Negatif', 'Menelan Banyak Korban Jiwa', 'Tanah longsor sering kali menyebabkan kematian bagi mereka yang terperangkap di bawah reruntuhan atau tertimpa material longsoran.'),
(2, 'Negatif', 'Kerusakan Infrastruktur Publik', 'Jalan raya, jembatan, dan infrastruktur penting lainnya seperti saluran listrik dan air bisa rusak parah atau bahkan hancur.'),
(3, 'Negatif', 'Kerusakan Bangunan', 'Gedung perkantoran, perumahan, dan tempat ibadah bisa mengalami kerusakan serius atau hancur, mengakibatkan banyak orang kehilangan tempat tinggal dan pekerjaan.'),
(4, 'Negatif', 'Kerugian Ekonomi', 'Tanah longsor bisa menimbulkan kerugian besar secara ekonomi, baik dari biaya perbaikan infrastruktur hingga kerugian dalam aktivitas ekonomi lokal. Dampaknya juga bisa dirasakan dalam jangka panjang karena proses pemulihan yang lambat.'),
(5, 'Negatif', 'Dampak Sosial dan Psikologis', 'Bencana ini bisa meninggalkan trauma mendalam bagi korban yang selamat, mengganggu kesejahteraan mental dan memicu ketakutan akan terjadinya longsor di masa depan.'),
(6, 'Negatif', 'Kerusakan Lahan dan Hilangnya Vegetasi', 'Tanah longsor bisa menghancurkan vegetasi yang ada, menyebabkan lahan menjadi gundul dan rawan terhadap erosi lebih lanjut.'),
(7, 'Negatif', 'Terganggunya Keseimbangan Ekosistem', 'Longsor dapat mengganggu ekosistem setempat, merusak habitat hewan dan tumbuhan, serta mengurangi keanekaragaman hayati.'),
(8, 'Negatif', 'Lahan Kritis dan Menipisnya Cadangan Air', 'Lahan yang terdampak longsor menjadi kritis dan tidak dapat mendukung vegetasi baru. Hal ini juga menyebabkan menipisnya cadangan air tanah di daerah tersebut.'),
(9, 'Negatif', 'Menutup Lahan Produktif', 'Lahan pertanian seperti sawah dan kebun yang tertutup oleh material longsor tidak dapat lagi digunakan, mengganggu produksi pangan dan pendapatan petani.'),
(10, 'Positif', 'Peningkatan Kesuburan Tanah', 'Material yang terlepas dari lereng dapat membawa mineral dan bahan organik yang memperkaya tanah di daerah baru, meningkatkan kesuburan tanah yang terkena.'),
(11, 'Positif', 'Pembentukan Habitat Baru', 'Longsoran dapat menciptakan area baru bagi tumbuhan dan hewan, yang dapat meningkatkan keanekaragaman hayati di suatu kawasan.'),
(12, 'Positif', 'Pengendalian Erosi', 'Dalam beberapa kasus, tanah longsor dapat mengubah alur sungai atau bentang alam sehingga mengurangi potensi erosi lebih lanjut di daerah lereng.'),
(13, 'Positif', 'Rejuvenasi Lanskap', 'Beberapa daerah dapat mengalami pemulihan dan revitalisasi setelah longsor, yang dapat membawa peluang bagi pertumbuhan tanaman baru dan perbaikan ekosistem.'),
(14, 'Positif', 'Sumber Daya Alam', 'Longsor dapat memaparkan deposit mineral atau sumber daya alam lainnya yang sebelumnya terpendam, memberikan peluang untuk eksplorasi dan pemanfaatan yang lebih baik.'),
(15, 'Positif', 'Peningkatan Kesadaran dan Penelitian', 'Peristiwa tanah longsor dapat meningkatkan kesadaran akan risiko geologi, mendorong penelitian dan pengembangan teknik mitigasi yang lebih baik di masa depan.');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `judul`, `isi`, `img`) VALUES
(1, 'Longsoran Translasi', 'Bergeraknya massa tanah dan batuan pada bidang gelincir berbentuk rata atau menggelombang landai.', '16.svg'),
(2, 'Longsoran Rotasi', 'Bergeraknya massa tanah dan batuan pada bidang gelincir berbentuk cekung.', '17.svg'),
(3, 'Pergerakan Blok', 'Perpindahan batuan yang bergerak pada bidang gelincir berbentuk rata.', '18.svg'),
(4, 'Runtuhan Batu', 'Terjadi ketika sejumlah besar batuan atau material lain bergerak ke bawah dengan cara jatuh bebas. Umumnya terjadi pada lereng yang terjal hingga menggantung terutama di daerah pantai.', '19.svg'),
(5, 'Rayapan Tanah', 'Jenis longsor yang bergerak lambat. Setelah waktu yang cukup lama, longsor jenis rayapan ini bisa menyebabkan tiang-tiang telepon, pohon, atau rumah miring ke bawah.', '20.svg'),
(6, 'Aliran Bahan Rombakan', 'Jenis tanah longsor ini terjadi ketika massa tanah bergerak didorong oleh air. Kecepatan aliran tergantung pada kemiringan lereng, volume dan tekanan air, dan jenis materialnya.', '21.svg');

-- --------------------------------------------------------

--
-- Table structure for table `mitigasi`
--

CREATE TABLE `mitigasi` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `isi` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitigasi`
--

INSERT INTO `mitigasi` (`id`, `nama`, `isi`, `img`) VALUES
(1, 'Hindari Membuat Sawah Di Atas Lereng', 'Membangun sawah atau kolam di atas lereng hanya akan semakin meningkatkan potensi terjadinya tanah longsor. Hal tersebut karena permukaan lereng akan penuh dengan air, sehingga tanah rentan untuk bergerser dan menyebabkan terjadinya bencana tanah longsor.', '1.png'),
(2, 'Tidak membangun Rumah Di Bawah Tebing', 'Tidak di anjurkan untuk mendirikan bangunan di bawah tebing, hal tersebut karena mendirikan bangunan di bawah tebing memiliki ancaman besar terkena bencana tanah longsor. Jika tinggi tebing 100 meter maka usahakan lokasi rumah atau bangunan berjarak minimal 250 meter dari kaki lereng. Sehingga apabila terjadi tanah longsor tidak akan mencapai bangunan tersebut.', '2.png'),
(3, 'Hindari menebang Pohon di Sekitar Lereng', 'Pohon yang berada di sekitar lereng menjadi pencegah terjadinya tanah longsor karena akar-akar dari pohon-pohon tersebut menyebar dan saling bersinggungan sehingga bisa membantu tanah tidak mudah longsor karena akan menjadi penahan tanah. Tentu kita perlu menghindari menebang pohon di sekitar lereng.', '3.png'),
(4, 'Jangan Mendirikan Bangunan Di Sekitar Sungai', 'Semakin tinggi jarak antara bibir tebing terhadap sungai maka akan semakin besar peluang terjadinya longsor.  Terjadinya erosi tanah tidak langsung namun tanah yang terus tergerus oleh erosi tanah akan menyebabkan semakin habisnya tanah ada di sekitar sungai.', '4.png'),
(5, 'Membuat Terasering', 'Jika suatu lahan miring terpaksa digunakan untuk membuat sawah atau ladang maka sebaiknya buatlah sistem bertingkat sehingga akan memperlambat run off (aliran permukaan) ketika hujan.', '5.png');

-- --------------------------------------------------------

--
-- Table structure for table `oranghilang`
--

CREATE TABLE `oranghilang` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `usia` int(11) NOT NULL,
  `img` text NOT NULL,
  `sejak` date NOT NULL,
  `status` enum('Masih Dalam Pencarian','Sudah Ditemukan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oranghilang`
--

INSERT INTO `oranghilang` (`id`, `nama`, `usia`, `img`, `sejak`, `status`) VALUES
(1, 'Barita Davitya Setiawati', 18, '1.png', '2022-12-20', 'Masih Dalam Pencarian'),
(2, 'Davitya Barita', 20, '2.png', '2020-12-02', 'Sudah Ditemukan'),
(3, 'Nurul Putri', 32, '3.png', '2024-11-25', 'Masih Dalam Pencarian'),
(4, 'Desti amel', 45, '4.png', '2024-11-09', ''),
(5, 'Jenirryy Ambarukmo', 30, '5.png', '2017-12-13', '');

-- --------------------------------------------------------

--
-- Table structure for table `penanggulangan`
--

CREATE TABLE `penanggulangan` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `status` enum('bencana','pasca') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penanggulangan`
--

INSERT INTO `penanggulangan` (`id`, `judul`, `status`) VALUES
(2, 'Menyelamatkan warga yang terdampak bencana.', 'bencana'),
(3, 'Pembentukan pusat pengendalian atau crisis center.', 'bencana'),
(4, 'Evakuasi korban ke tempat yang lebih aman.', 'bencana'),
(5, 'Pendirian dapur umum, pos-pos kesehatan, dan penyediaan air bersih.', 'bencana'),
(6, 'Pencegahan berjangkitnya wabah penyakit', 'bencana'),
(7, 'Mengupayakan mengembalikan fungsi hutan lindung seperti sediakala.', 'pasca'),
(8, 'Mengevaluasi dan memperketat studi Amdal pada kawasan vital yang berpotensi menyebabkan bencana.', 'pasca'),
(9, 'Penyediaan lahan relokasi penduduk yang bermukim di daerah bencana, dan di sepanjang bantaran sungai.', 'pasca'),
(10, 'Rehabilitasi sarana dan prasarana pendukung kehidupan masyarakat yang terkena bencana alam secara permanen.', 'pasca');

-- --------------------------------------------------------

--
-- Table structure for table `penyebab`
--

CREATE TABLE `penyebab` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyebab`
--

INSERT INTO `penyebab` (`id`, `judul`, `deskripsi`, `img`) VALUES
(1, 'Tingginya Curah Hujan', 'Tanah yang kering membentuk retakan. Saat hujan datang, air mengisi retakan dan mengalir ke dasar lereng, menyebabkan tanah bergerak.', '3.svg'),
(2, 'Erosi Tanah', 'Pengikisan oleh air sungai dan penggundulan hutan menyebabkan tebing menjadi terjal. Ini memudahkan terjadinya pergerakan tanah longsor.', '4.svg'),
(3, 'Tanah Kurang Padat dan Tebal', 'Tanah lempung/liat mudah longsor saat hujan. Tanah tersebut menjadi lembek jika basah dan pecah jika kering.', '5.svg'),
(4, 'Jenis Tata Lahan', 'Pada lahan seperti sawah dan ladang, akar tanaman kurang kuat, membuat tanah lembek dan mudah longsor, terutama di lereng curam.', '6.svg'),
(5, 'Material Timbunan pada Tebing', 'Penimbunan tanah di lereng yang belum terpadatkan sempurna membuat tanah menjadi rentan longsor saat hujan.', '7.svg'),
(6, 'Penggundulan Hutan', 'Hutan yang ditebang mengurangi kemampuan tanah untuk menyerap air, sehingga meningkatkan risiko longsor.', '8.svg');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `jenis` enum('Korban','Kerusakan') NOT NULL,
  `label` varchar(255) NOT NULL,
  `banyak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `jenis`, `label`, `banyak`) VALUES
(1, 'Korban', 'Meninggal', 3224),
(2, 'Korban', 'Hilang', 388),
(3, 'Korban', 'Terluka', 3346),
(4, 'Korban', 'Menderita', 209392),
(5, 'Korban', 'Mengungsi', 152618),
(6, 'Kerusakan', 'Rumah', 57493),
(7, 'Kerusakan', 'Rumah', 57493),
(8, 'Kerusakan', 'Fasilitas Pendidikan', 356),
(9, 'Kerusakan', 'Fasilitas Kesehatan', 50),
(10, 'Kerusakan', 'Fasilitas Peribadahan', 464),
(11, 'Kerusakan', 'Fasilitas Umum', 255),
(12, 'Kerusakan', 'Perkantoran', 48),
(13, 'Kerusakan', 'Jembatan', 552),
(14, 'Kerusakan', 'Pabrik', 14),
(15, 'Kerusakan', 'Kios', 195);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ciri_oranghilang`
--
ALTER TABLE `ciri_oranghilang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_orang` (`id_orang`),
  ADD KEY `id_orang_2` (`id_orang`);

--
-- Indexes for table `dampak`
--
ALTER TABLE `dampak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitigasi`
--
ALTER TABLE `mitigasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oranghilang`
--
ALTER TABLE `oranghilang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penanggulangan`
--
ALTER TABLE `penanggulangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyebab`
--
ALTER TABLE `penyebab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ciri_oranghilang`
--
ALTER TABLE `ciri_oranghilang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dampak`
--
ALTER TABLE `dampak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mitigasi`
--
ALTER TABLE `mitigasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oranghilang`
--
ALTER TABLE `oranghilang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penanggulangan`
--
ALTER TABLE `penanggulangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penyebab`
--
ALTER TABLE `penyebab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ciri_oranghilang`
--
ALTER TABLE `ciri_oranghilang`
  ADD CONSTRAINT `ciri_oranghilang_ibfk_1` FOREIGN KEY (`id_orang`) REFERENCES `oranghilang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
