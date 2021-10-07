-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2021 pada 20.01
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_weblanjut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(9) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `no_hp`, `alamat`, `gender`) VALUES
(2, 'Blanca Conroy', '+628217852490', 'Jln. Sengon No.D2-01', 'Pria'),
(3, 'Dejuan Koch PhD', '179925', '696 Katelynn Fork Apt. 083\nSouth Dejachester, CA 86359-4584', 'fugit'),
(4, 'Dr. Morris Schmidt V', '1', '323 Berge Parkways\nBarrowsfurt, WI 89348', 'sed'),
(5, 'Gwendolyn Kessler', '433', '115 Quigley Crescent Apt. 711\nEltonfort, AK 95803-2449', 'magnam'),
(7, 'Everett Hilpert Jr.', '235369', '665 Veum Ford\nKreigerville, TX 60877-8975', 'eligendi'),
(8, 'Alda Parker', '999111', '68718 Keshaun Stravenue\nNorth Reynoldbury, MN 70388-8393', 'aut'),
(9, 'Mikel Walter', '425', '842 Towne Way Apt. 621\nJacobsborough, AR 65270-0408', 'perspiciatis'),
(11, 'Pinkie Huels', '49669', '9121 Jude Crossing Apt. 754\nAnkundingborough, AK 51368-3143', 'tenetur'),
(14, 'Maybelle Little', '503', '554 Gabriel Corner\nBreannafort, NC 90612', 'aperiam'),
(15, 'Prof. Dalton Wolff IV', '1', '29800 Garett Estate Apt. 114\nDanielfurt, SD 15710', 'ad'),
(16, 'Lexi Bailey II', '407916', '1305 Adell Unions Apt. 309\nCaesarside, DE 47815-3090', 'consequuntur'),
(17, 'Melvina Pacocha', '952176', '12174 Stoltenberg Heights\nMckennaborough, MN 91681', 'ab'),
(18, 'Frances Robel', '477', '495 Lavonne Fall Apt. 807\nLake Jayden, SD 10115', 'consectetur'),
(19, 'Otis Sipes', '529', '47387 Fletcher Greens Suite 942\nFlatleyland, DC 66464-5468', 'mollitia'),
(20, 'Elinor Mraz', '394', '6511 Amira Ford Suite 055\nNorth Colleen, NE 57558', 'debitis'),
(21, 'Sabina Pagac Jr.', '160', '49830 Zulauf Stream\nWest Anjali, AR 10133', 'est'),
(22, 'Dr. Antonio Borer DDS', '394', '93690 Kody Fords Suite 375\nGottliebfort, KY 90264-3712', 'quia'),
(23, 'Isabelle Wisoky', '62', '09348 Emmerich Mount Apt. 952\nCassinfort, NC 92053', 'omnis'),
(27, 'Joanie Bechtelar', '7253', '2573 Malcolm Locks\nPort Porter, MN 78622', 'aut'),
(28, 'Wilhelm Wehner', '435', '38656 Bradley Streets\nCarloton, UT 04607-6631', 'numquam'),
(30, 'Cordie Nienow', '1', '2467 Bartoletti Flats Suite 145\nWest Al, WV 74183', 'illo'),
(32, 'Jeanne Nicolas', '270', '13207 Williamson Parkway Suite 702\nMarcellushaven, AK 40970-5603', 'velit'),
(33, 'Antonio Macejkovic', '1', '81423 Breanne Vista Apt. 454\nAudrafort, OR 60462', 'praesentium'),
(34, 'Prof. Kaela Murazik', '1', '207 Christina Dam Apt. 633\nSouth Twilafort, AK 90508-8444', 'sed'),
(37, 'Foster Jakubowski II', '857370', '6552 Krystel Rest Suite 840\nGleichnerview, IL 67608', 'quis'),
(38, 'Camryn Harber', '1', '1256 Hoeger Well Apt. 647\nGoldnerburgh, HI 01826', 'ipsum'),
(39, 'Eve Dicki', '1', '78381 Bud Trace\nHermanstad, TN 13460', 'a'),
(40, 'Harmon Purdy Jr.', '9', '4087 Jennifer Squares Suite 825\nLake Alexys, MI 14979-9946', 'rerum'),
(41, 'Elena Batz II', '2147483647', '7370 Kuphal Extensions Apt. 213\nEast Ruthetown, HI 91202-6123', 'sunt'),
(42, 'Jordan Hintz', '1', '8731 Sandy Shore\nDenesiktown, MI 42486', 'tempora'),
(43, 'Prof. Jaycee Kuhlman Sr.', '769955', '4324 Richard Alley\nYostshire, WV 90061', 'quam'),
(44, 'Eugenia Heaney', '1', '984 Beer Ville\nStehrport, CT 10659', 'incidunt'),
(45, 'Sadie Gutkowski', '1', '869 Stamm Court Apt. 086\nSouth Demarcusbury, MS 26306', 'non'),
(46, 'Rickie Mills', '97', '64303 Johnson Grove Apt. 075\nWest Francescoville, KY 77838', 'sunt'),
(47, 'Jettie Lindgren', '1', '2017 Rodriguez Squares Apt. 374\nWest Deontae, IN 02490', 'vel'),
(48, 'Walter Zboncak', '452', '3282 Adalberto Passage Apt. 260\nEast Breannamouth, MN 30144', 'nemo'),
(49, 'Mr. Francesco Barton Sr.', '1', '827 Rutherford Oval Apt. 169\nSchadenfurt, IN 28358-5083', 'voluptatem'),
(50, 'Armando Olson', '1', '707 Delia Shoals Apt. 178\nPort August, UT 58518-5663', 'itaque'),
(51, 'Falahyan', '2147483647', 'Jln. Sengon No.D2-01\r\nWay Halim, Lampung, Indonesia', 'Pria'),
(54, 'Mohammed', '2147483647', 'Universitas Lampung', 'Pria'),
(58, 'Tammy Abraham', '082832457864', 'London, United Kingdom', 'Pria'),
(61, 'Vira Verina', '089476238943', 'Bandar Lampung, Indonesia', 'Wanita');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
