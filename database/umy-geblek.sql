-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2024 pada 03.35
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umy-geblek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(3, 'Menu Original', '2023-11-29 08:13:18', '2023-11-29 09:28:02'),
(5, 'Menu Pedas', '2023-12-02 04:32:18', '2023-12-02 04:32:18'),
(6, 'Menu Spesial', '2023-12-02 04:32:25', '2023-12-02 04:32:25'),
(7, 'Menu Bakar', '2023-12-02 04:32:42', '2023-12-02 04:32:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_25_124018_create_user_table', 1),
(3, '2023_11_29_141038_create_category_table', 2),
(4, '2023_11_30_014703_create_post_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(100) NOT NULL DEFAULT 0,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `category_id`, `title`, `harga`, `thumbnail`, `body`, `created_at`, `updated_at`) VALUES
(2, 3, 'Ayam Goreng', 20000, 'post/1701319575_0eb0e022-22c1-44ab-9375-8db75b7d6143.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio provident reprehenderit illo modi ratione nostrum inventore quae voluptas. Impedit modi accusantium nostrum libero architecto dicta error delectus eveniet eaque sequi.', '2023-11-29 21:46:15', '2023-12-02 05:38:42'),
(3, 3, 'Ayam Gurih', 20000, 'post/1701518013_download.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio provident reprehenderit illo modi ratione nostrum inventore quae voluptas. Impedit modi accusantium nostrum libero architecto dicta error delectus eveniet eaque sequi.', '2023-12-02 04:53:33', '2023-12-02 05:38:34'),
(4, 7, 'Bebek Taliwang', 70000, 'post/1701518295_image-9500133166ca8fd66bfda087f5035dab.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio provident reprehenderit illo modi ratione nostrum inventore quae voluptas. Impedit modi accusantium nostrum libero architecto dicta error delectus eveniet eaque sequi.', '2023-12-02 04:58:15', '2023-12-02 05:38:23'),
(5, 6, 'Geblek Saus Kacang', 15000, 'post/1701520759_de0769a0-55b7-49c3-86b2-f040b28c82b1_43.jpeg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio provident reprehenderit illo modi ratione nostrum inventore quae voluptas. Impedit modi accusantium nostrum libero architecto dicta error delectus eveniet eaque sequi.', '2023-12-02 05:39:19', '2023-12-02 05:43:29'),
(6, 5, 'Geblek Saus Pedas', 15000, 'post/1701520782_Camilan-Geblek-dari-Purworejo-dan-Kulon-Progo.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio provident reprehenderit illo modi ratione nostrum inventore quae voluptas. Impedit modi accusantium nostrum libero architecto dicta error delectus eveniet eaque sequi.', '2023-12-02 05:39:42', '2023-12-02 05:43:21'),
(7, 3, 'Geblek Original', 15000, 'post/1701520808_geblek_kulonprogo_18_10_2017_15_55_27_753.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio provident reprehenderit illo modi ratione nostrum inventore quae voluptas. Impedit modi accusantium nostrum libero architecto dicta error delectus eveniet eaque sequi.', '2023-12-02 05:40:08', '2023-12-02 05:42:55'),
(8, 3, 'Geblek Originial Kulon Progo', 15000, 'post/1701521164_geblek (1).jpg', '<p>ldwajh aoiahw oiawh oawh oiawha woi hwaoiawh oaiwh oiawdh oiawhd oiahwdoihaw oiahwdioh oawaw</p><p>awd</p><p>aw</p><p>awaw</p>', '2023-12-02 05:46:04', '2023-12-02 07:41:48'),
(9, 6, 'Geblek Spesial Kulonprogo', 15000, 'post/1701521285_7.-Harga-Tiket-Masuk-Geblek-Pari-Resto-Tempat-Makan-Bernuansa-Alam.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio provident reprehenderit illo modi ratione nostrum inventore quae voluptas. Impedit modi accusantium nostrum libero architecto dicta error delectus eveniet eaque sequi.', '2023-12-02 05:48:05', '2023-12-02 07:41:43'),
(13, 3, 'Geblek Mentah', 15000, 'post/1701521489_Geblek_Mentah_Asli_Purworejo.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio provident reprehenderit illo modi ratione nostrum inventore quae voluptas. Impedit modi accusantium nostrum libero architecto dicta error delectus eveniet eaque sequi.', '2023-12-02 05:51:29', '2023-12-02 05:51:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Marzuki', 'marzuki@gmail.com', '$2y$10$MWaYbb/LbEIWKcHssxyTAe7ApYCLLlNlOFl2IVqngF00JylD3gEeu', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
