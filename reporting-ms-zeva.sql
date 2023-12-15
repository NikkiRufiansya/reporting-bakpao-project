-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Des 2023 pada 07.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reporting-ms-zeva`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `reporting`
--

CREATE TABLE `reporting` (
  `id` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `santri_name` varchar(50) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `pertemuan` varchar(10) NOT NULL,
  `study_priode` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `subject_matter` longtext NOT NULL,
  `general_comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reporting`
--

INSERT INTO `reporting` (`id`, `term`, `santri_name`, `teacher_name`, `level`, `pertemuan`, `study_priode`, `foto`, `subject_matter`, `general_comment`) VALUES
(18, 1, 'Bomboloni', 'Ms. Bakpaooo', 'Bee', '(7/24)', '2023-09-12', '6528bd2260605_virtual.png', '<ul>\r\n	<li>nasdasdas</li>\r\n	<li>dsa</li>\r\n	<li>das</li>\r\n	<li>d</li>\r\n	<li>asd</li>\r\n	<li>a</li>\r\n	<li>s</li>\r\n</ul>\r\n\r\n<p>conba taess</p>\r\n', '<ul>\r\n	<li>sdsadas</li>\r\n	<li>sdas</li>\r\n	<li>dasas</li>\r\n	<li>d</li>\r\n	<li>asd</li>\r\n	<li>asd</li>\r\n	<li>as</li>\r\n	<li>da</li>\r\n</ul>\r\n'),
(24, 2, 'nikki', 'Ms. Zeva', 'Bee', '12/3', '2023-10-13', '6528bbf4bc908_virtual.png', '<p>coba edt subjec matter</p>\r\n', '<p>okkk oke di testing</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'nikki', 'nikkirufiansya2@gmail.com', '$2y$10$7OdJBGwbQd/j09y6pYpNm.fbe9e37BmkA5al7/Jc57ua1lwChqFiC'),
(3, 'Ms Zeva', 'zeva@mail.com', '$2y$10$9rTuJCFXbYl79/V7kTE/QuDjdNeR/7UyBbpjETzX3YwRlXnvG17w.'),
(4, 'admin', 'admin@admin.com', '$2y$10$3aROaxOydaUDF9SKYJUImuVwvunqJXbgaK3c9kkaI8wrfN2HV11SS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `reporting`
--
ALTER TABLE `reporting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `reporting`
--
ALTER TABLE `reporting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
