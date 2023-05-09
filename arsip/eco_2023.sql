-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 06:23 AM
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
-- Database: `eco_2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `downpour_users`
--

CREATE TABLE `downpour_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generation` int(11) NOT NULL,
  `instagram_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_booth_1` int(11) DEFAULT NULL,
  `activity_booth_2` int(11) DEFAULT NULL,
  `activity_booth_3` int(11) DEFAULT NULL,
  `activity_booth_4` int(11) DEFAULT NULL,
  `activity_booth_additional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seminar_ticket` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drought_bingos`
--

CREATE TABLE `drought_bingos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drought_registrations`
--

CREATE TABLE `drought_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` int(11) NOT NULL,
  `username_instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_01_12_114700_create_recruitments_table', 1),
(5, '2022_01_13_075632_create_teams_table', 1),
(6, '2022_01_31_090512_create_team2021s_table', 1),
(7, '2022_04_05_191912_create_drought_registrations_table', 1),
(8, '2022_04_15_191749_create_drought_bingos_table', 1),
(9, '2022_05_05_111734_create_settings_table', 1),
(10, '2022_09_27_220136_create_verification_timers_table', 1),
(11, '2022_09_27_220352_create_downpour_users_table', 1),
(12, '2022_10_21_204059_create_jobs_table', 1),
(13, '2022_10_23_125009_create_verifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `recruitments`
--

CREATE TABLE `recruitments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subdivisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Angkatan` year(4) NOT NULL,
  `Jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instagram_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Line_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pengetahuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kesibukan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Experience` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alasan1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alternative` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alasan2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pengalaman_dokum` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LinkDrive` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team2021s`
--

CREATE TABLE `team2021s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team2021s`
--

INSERT INTO `team2021s` (`id`, `name`, `team`, `jabatan`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Agnes Viriana', 'JAGAT', 'Supervisi', 'Foto2021/JAGAT/JAGAT_Agnes Viriana_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(2, 'Caristheo Bonancy', 'JAGAT', 'Ketua', 'Foto2021/JAGAT/JAGAT_Caristheo Bonancy_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(3, 'Putu Pricilia', 'JAGAT', 'Wakil Ketua', 'Foto2021/JAGAT/JAGAT_Putu Pricilia_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(4, 'Jovita Christie', 'JAGAT', 'Sekretaris 1', 'Foto2021/JAGAT/JAGAT_Jovita Christie_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(5, 'Fransiskus Juan', 'JAGAT', 'Sekretaris 2', 'Foto2021/JAGAT/JAGAT_Fransiskus Juan_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(6, 'Lucya Mawar', 'JAGAT', 'Sekretaris 1', 'Foto2021/JAGAT/JAGAT_Lucya Mawar_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(7, 'Luis Centuri', 'ANTA', 'Koordinator', 'Foto2021/ANTA/ANTA_Luis Centuri_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(8, 'Veronika Debora', 'ANTA', 'Koordinator', 'Foto2021/ANTA/ANTA_Veronika Debora_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(9, 'Mikyal Saputra', 'ANTA', 'Anggota', 'Foto2021/ANTA/ANTA_Mikyal Saputra_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(10, 'Giany Caroline', 'ANTA', 'Anggota', 'Foto2021/ANTA/ANTA_Giany Caroline_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(11, 'Zaky Syarafy', 'ANTA', 'Anggota', 'Foto2021/ANTA/ANTA_Zaky Syarafy_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(12, 'Jesslyn Anggreani', 'ANTA', 'Anggota', 'Foto2021/ANTA/ANTA_Jesslyn Anggreani_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(13, 'Priscilla Agatha', 'ARTO', 'Koordinator', 'Foto2021/ARTO/ARTO_Priscilla Agatha_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(14, 'Angela Artashevia', 'ARTO', 'Koordinator', 'Foto2021/ARTO/ARTO_Angela Artashevia_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(15, 'Kenneth William', 'ARTO', 'Anggota', 'Foto2021/ARTO/ARTO_Kenneth William_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(16, 'Nicolas Wibowo', 'ARTO', 'Anggota', 'Foto2021/ARTO/ARTO_Nicolas Wibowo_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(17, 'Eunice Angelie', 'ARTO', 'Anggota', 'Foto2021/ARTO/ARTO_Eunice Angelie_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(18, 'Evelyn Farencia', 'ARTO', 'Anggota', 'Foto2021/ARTO/ARTO_Evelyn Farencia_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(19, 'Caterine', 'ARTO', 'Anggota', 'Foto2021/ARTO/ARTO_Caterine_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(20, 'Fiezra', 'BACARITA', 'Koordinator', 'Foto2021/BACARITA/BACARITA_Fiezra_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(21, 'Cindy Buntoro', 'BACARITA', 'Koordinator', 'Foto2021/BACARITA/BACARITA_Cindy Buntoro_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(22, 'Jason Julian', 'BACARITA', 'Anggota', 'Foto2021/BACARITA/BACARITA_Jason Julian_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(23, 'Dicky Wijaya', 'BACARITA', 'Anggota', 'Foto2021/BACARITA/BACARITA_Dicky Wijaya_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(24, 'Muhammad Radifan', 'BACARITA', 'Anggota', 'Foto2021/BACARITA/BACARITA_Muhammad Radifan_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(25, 'Rakha Adhyasta', 'BACARITA', 'Anggota', 'Foto2021/BACARITA/BACARITA_Rakha Adhyasta_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(26, 'Michael Andrian', 'BACARITA', 'Anggota', 'Foto2021/BACARITA/BACARITA_Michael Andrian_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(27, 'Lexy Jeremy', 'BACARITA', 'Anggota', 'Foto2021/BACARITA/BACARITA_Lexy Jeremy_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(28, 'Alpin Santoso', 'BACARITA', 'Anggota', 'Foto2021/BACARITA/BACARITA_Alpin Santoso_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(29, 'Melvin Dwi Rangga', 'GANTAR', 'Koordinator', 'Foto2021/GANTAR/GANTAR_Melvin Dwi Rangga_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(30, 'Valerie Wijaya', 'GANTAR', 'Koordinator', 'Foto2021/GANTAR/GANTAR_Valerie Wijaya_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(31, 'Christopher Louis', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Christopher Louis_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(32, 'Angeline Christian', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Angeline Christian_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(33, 'Jennifer Claudya', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Jennifer Claudya_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(34, 'Aloysius Theodore', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Aloysius Theodore_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(35, 'Grafviella Fransisca', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Grafviella Fransisca_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(36, 'Luther', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Luther_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(37, 'Jesslyn Hartania', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Jesslyn Hartania_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(38, 'Saretta Raissa', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Saretta Raissa_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(39, 'Elizabeth Clarissa', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Elizabeth Clarissa_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(40, 'Survina', 'GANTAR', 'Anggota', 'Foto2021/GANTAR/GANTAR_Survina_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(41, 'Laurensius Dimas', 'GENTA', 'Koordinator', 'Foto2021/GENTA/GENTA_Laurensius Dimas_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(42, 'Nikolas Nathan', 'GENTA', 'Koordinator', 'Foto2021/GENTA/GENTA_Nikolas Nathan_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(43, 'Sheren Nathalie', 'GENTA', 'Koordinator', 'Foto2021/GENTA/GENTA_Sheren Nathalie_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(44, 'Michiko Mora', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Michiko Mora_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(45, 'Kenly Jonathan', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Kenly Jonathan_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(46, 'Lidia Yamin', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Lidia Yamin_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(47, 'Vincentius Christian', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Vincentius Christian_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(48, 'Nathaniel Lucas', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Nathaniel Lucas_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(49, 'Salsabila Zahra', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Salsabila Zahra_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(50, 'Tirza Rephaelica', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Tirza Rephaelica_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(51, 'Nikolaus Andre', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Nikolaus Andre_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(52, 'Dwi Sita Sari', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Dwi Sita Sari_1.jpg', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(53, 'Vireen Ernestine', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Vireen Ernestine_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(54, 'Priscilla Brenda', 'GENTA', 'Anggota', 'Foto2021/GENTA/GENTA_Priscilla Brenda_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(55, 'Steven', 'LAWANG', 'Koordinator', 'Foto2021/LAWANG/LAWANG_Steven_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(56, 'Jocelyn Helena', 'LAWANG', 'Koordinator', 'Foto2021/LAWANG/LAWANG_Jocelyn Helena_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(57, 'Dorthy Beatrice', 'LAWANG', 'Anggota', 'Foto2021/LAWANG/LAWANG_Dorthy Beatrice_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(58, 'Audrey Natasha', 'LAWANG', 'Anggota', 'Foto2021/LAWANG/LAWANG_Audrey Natasha_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(59, 'Nicky Tan', 'LAWANG', 'Anggota', 'Foto2021/LAWANG/LAWANG_Nicky Tan_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(60, 'Arvan Fernando', 'LAWANG', 'Anggota', 'Foto2021/LAWANG/LAWANG_Arvan Fernando_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(61, 'Winona Maria', 'LAWANG', 'Anggota', 'Foto2021/LAWANG/LAWANG_Winona Maria_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(62, 'Verllencia', 'LAWANG', 'Anggota', 'Foto2021/LAWANG/LAWANG_Verllencia_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(63, 'Andrea', 'LAWANG', 'Anggota', 'Foto2021/LAWANG/LAWANG_Andrea_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(64, 'Jesslyn', 'LIKU', 'Koordinator', 'Foto2021/LIKU/LIKU_Jesslyn_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(65, 'Ramadhani Putri', 'LIKU', 'Anggota', 'Foto2021/LIKU/LIKU_Ramadhani Putri_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(66, 'Naila Medita', 'LIKU', 'Anggota', 'Foto2021/LIKU/LIKU_Naila Medita_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(67, 'Nur Fadillah', 'LIKU', 'Anggota', 'Foto2021/LIKU/LIKU_Nur Fadillah_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(68, 'Eleonora Axcel', 'LIKU', 'Anggota', 'Foto2021/LIKU/LIKU_Eleonora Axcel_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(69, 'Cecillia Angelica', 'LIKU', 'Anggota', 'Foto2021/LIKU/LIKU_Cecillia Angelica_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(70, 'Ariella Dwiputri', 'LIKU', 'Anggota', 'Foto2021/LIKU/LIKU_Ariella Dwiputri_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(71, 'Madala Fandrimira', 'LIKU', 'Anggota', 'Foto2021/LIKU/LIKU_Madala Fandrimira_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(72, 'Nadia Noor', 'LIKU', 'Anggota', 'Foto2021/LIKU/LIKU_Nadia Noor_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(73, 'Sandyka Ari Kurniawan', 'LUA', 'Koordinator', 'Foto2021/LUA/LUA_Sandyka Ari Kurniawan_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(74, 'Albertus Jovann N', 'LUA', 'Koordinator', 'Foto2021/LUA/LUA_Albertus Jovann N_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(75, 'Afreza Danang Fathoni', 'LUA', 'Anggota', 'Foto2021/LUA/LUA_Afreza Danang Fathoni_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(76, 'Adipta Muhammad', 'LUA', 'Anggota', 'Foto2021/LUA/LUA_Adipta Muhammad_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(77, 'Felix Laynardi', 'ORTA', 'Koordinator', 'Foto2021/ORTA/ORTA_Felix Laynardi_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(78, 'Delvin Chiandardi', 'ORTA', 'Koordinator', 'Foto2021/ORTA/ORTA_Delvin Chiandardi_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(79, 'Lifosmin Simon', 'ORTA', 'Anggota', 'Foto2021/ORTA/ORTA_Lifosmin Simon_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(80, 'Frans Imanuel', 'ORTA', 'Anggota', 'Foto2021/ORTA/ORTA_Frans Imanuel_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(81, 'Kevin Jonathan Kristianto', 'ORTA', 'Anggota', 'Foto2021/ORTA/ORTA_Kevin Jonathan Kristianto_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(82, 'Alexander Moya Hin', 'ORTA', 'Anggota', 'Foto2021/ORTA/ORTA_Alexander Moya Hin_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(83, 'Chotiwut', 'ORTA', 'Anggota', 'Foto2021/ORTA/ORTA_Chotiwut_1.png', '2023-05-06 04:20:15', '2023-05-06 04:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdivisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articolor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `subdivisi`, `alias`, `language`, `arti`, `logo`, `color`, `articolor`, `desc`, `jobdesc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'JAGAT', NULL, 'Badan Pengurus Harian', 'Indonesia', 'Alam Semesta', 'Alam Semesta', 'Biru Laut', 'Merepresentasikan karakter yang dapat dipercaya, unggul dan komunikatif.', 'Sama halnya dengan alam semesta yang mempersatukan seluruh unsur dalam dunia, Tim JAGAT siap untuk membaurkan seluruh tim UMN ECO menjadi sebuah kesatuan yang dinamis.', 'Tim JAGAT memiliki tanggung jawab untuk mengawasi tiap-tiap tim dalam UMN ECO 2023. Tidak hanya itu, tim JAGAT pun berperan sebagai jembatan antar tim satu dengan yang lainnya agar dapat bekerja sama dengan lebih baik. ', 0, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(2, 'ANTA', NULL, 'Creative', 'Sanskerta', 'Penjaga Alam, Matahari', 'Matahari', 'Merah', 'Merepresentasikan antusias dalam brainstorming, bersemangat, serta menarik perhatian.', 'Seperti matahari yang menjadi penerang dan pemberi kehidupan bagi alam semesta, tim Anta juga berperan untuk menyinari dan memberi kehidupan dalam pelaksanaan UMN ECO melalui konten-konten yang menarik serta berkualitas.', 'Tim Anta memiliki tanggung jawab untuk menciptakan konsep serta memberikan konten kreatif selama keberlangsungan kegiatan UMN ECO 2023.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(3, 'GANTAR', NULL, 'Insurer', 'Batak Simalungun', 'Perisai', 'Perisai', 'Abu-abu', 'Merepresentasikan keseriusan, kestabilan, kemandirian, dan tanggung jawab.', 'Seperti perisai yang merupakan alat pertahanan dan perlindungan, tim Gantar siap menjadi benteng terdepan untuk menjaga kelancaran serta keamanan dari berlangsungnya kegiatan UMN ECO 2023.', 'Tim Gantar berperan dalam menjaga ketertiban dan kelancaran berlangsungnya kegiatan UMN ECO 2023 dari awal hingga akhir, sesuai dengan regulasi yang berlaku.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(4, 'LIKU', 'Media Partner', 'Sponsorship & Media Partner', 'Sumba Timur', 'Ikatan', 'Tali yang terikat', 'Merah Muda', 'Merepresentasikan sifat yang kalem dan lembut.', 'DDalam hal mempersatukan dan memperkuat suatu hal, diperlukanlah tali yang mengikat dengan erat. Begitu pula dengan tim Liku yang mempersatukan dan menghubungkan berbagai pihak dengan UMN ECO.', 'Tim Liku sendiri merupakan gabungan dari Tim Sponsorship dan Tim Media Partner, dimana berperan untuk mencari sponsor dan media partner dari berbagai pihak agar kerja sama dapat terjalin dengan UMN ECO 2023.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(5, 'LIKU', 'Sponsorship', 'Sponsorship & Media Partner', 'Sumba Timur', 'Ikatan', 'Tali yang terikat', 'Merah Muda', 'Merepresentasikan sifat yang kalem dan lembut.', 'DDalam hal mempersatukan dan memperkuat suatu hal, diperlukanlah tali yang mengikat dengan erat. Begitu pula dengan tim Liku yang mempersatukan dan menghubungkan berbagai pihak dengan UMN ECO.', 'Tim Liku sendiri merupakan gabungan dari Tim Sponsorship dan Tim Media Partner, dimana berperan untuk mencari sponsor dan media partner dari berbagai pihak agar kerja sama dapat terjalin dengan UMN ECO 2023.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(6, 'LUA', NULL, 'Logistic', 'Bengkulu', 'Gerobak', 'Gerobak', 'Ungu Violet', 'Merepresentasikan keseimbangan fisik, mental dan perhatian terhadap sesama.', 'Sama seperti gerobak yang berfungsi membawakan berbagai macam barang kebutuhan, tim Lua juga berperan sebagai penampung segala keperluan kegiatan UMN ECO 2023.', 'Tim Lua memiliki tanggung jawab untuk menyediakan dan menampung segala keperluan fisik yang akan digunakan selama kegiatan UMN ECO 2023 berlangsung.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(7, 'LAWANG', NULL, 'Registration', 'Banjar', 'Pintu', 'Lubang kunci', 'Cokelat', 'Merepresentasikan kehangatan, rasa nyaman, kepercayaan, dan ketabahan.', 'Pintu merupakan simbol dari awal untuk memulai segalanya, begitu juga dengan tim Lawang yang menjadi pintu masuk bagi ECO Friends untuk ikut serta dalam kegiatan UMN ECO.', 'Tim Lawang berperan mengurus registrasi terkait pendataan ECO Friends dalam kegiatan UMN ECO 2023.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(8, 'ORTA', NULL, 'Website', 'Bali', 'Banyak berita', 'Koran yang digulung', 'Jingga', 'Merepresentasikan sisi yang segar dan aktif.', 'Bagaikan koran yang menyuguhkan berbagai macam berita, tim Orta siap menyediakan platform sebagai tempat dimuatnya informasi seputar UMN ECO 2023.', 'Tim Orta bertanggung jawab dalam pengelolaan website resmi UMN ECO 2023, mencakup pemaparan informasi yang lengkap dan aktual di dalamnya.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(9, 'ARTO', NULL, 'Finance', 'Jawa Krama Inggil (Halus/Keraton)', 'Uang', 'Huruf \'S\' yang seringkali diidentikkan dengan uang', 'Hijau', 'Merepresentasikan ambisi dan kekayaan yang berlimpah.', 'Selaras dengan logonya,  tim Arto mengelola segala hal yang berkaitan dengan uang. Penggunaan bahasa Jawa halus memiliki keterkaitan dengan tim Arto yang memecahkan permasalahan dengan lembut.', 'Tim Arto berperan dalam menyusun strategi untuk pencarian dana demi pelaksanaan kegiatan UMN ECO 2023.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(10, 'GENTA', 'Public Relation', 'Publication & Visual', 'Kutai (Kalimantan Timur)', 'Bel yang besar', 'Bel', 'Kuning', 'Merepresentasikan karakter yang positif dan optimis.', 'Bagaikan bel yang bunyinya dapat didengar oleh banyak orang, tim GENTA siap untuk menjadi sumber informasi bagi para ECO Friends.', 'Tim Genta terbagi menjadi dua yaitu tim Public Relations dan tim Visual. Tim Public Relations berperan mempublikasikan informasi serta merancang ide-ide konten sosial media dari UMN ECO 2023. Sedangkan, tim Visual bertugas membuat visualisasi dari berbagai konten yang sesuai dengan tema dan konsep UMN ECO 2023.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(11, 'GENTA', 'Visual', 'Publication & Visual', 'Kutai (Kalimantan Timur)', 'Bel yang besar', 'Bel', 'Kuning', 'Merepresentasikan karakter yang positif dan optimis.', 'Bagaikan bel yang bunyinya dapat didengar oleh banyak orang, tim GENTA siap untuk menjadi sumber informasi bagi para ECO Friends.', 'Tim Genta terbagi menjadi dua yaitu tim Public Relations dan tim Visual. Tim Public Relations berperan mempublikasikan informasi serta merancang ide-ide konten sosial media dari UMN ECO 2023. Sedangkan, tim Visual bertugas membuat visualisasi dari berbagai konten yang sesuai dengan tema dan konsep UMN ECO 2023.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(12, 'BACARITA', 'Foto', 'Documentation', 'Manado', 'Bercerita, Banyak cerita', 'Setengah buku, setengah kamera', 'Hitam', 'Merepresentasikan kanvas kosong akan dipenuhi dengan berbagai warna dan gambar  yang menyimpan kisah UMN ECO.', 'Seperti kamera berfungsi untuk menangkap momen, dan buku sebagai media menyampaikan cerita, tim Bacarita juga berperan untuk menangkap dan menceritakan momen-momen UMN ECO.', 'Tim Bacarita berperan untuk mengabadikan serta menyampaikan seluruh cerita yang berkaitan kegiatan UMN ECO 2023, baik melalui foto maupun video yang sudah diabadikan.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(13, 'BACARITA', 'Video', 'Documentation', 'Manado', 'Bercerita, Banyak cerita', 'Setengah buku, setengah kamera', 'Hitam', 'Merepresentasikan kanvas kosong akan dipenuhi dengan berbagai warna dan gambar  yang menyimpan kisah UMN ECO.', 'Seperti kamera berfungsi untuk menangkap momen, dan buku sebagai media menyampaikan cerita, tim Bacarita juga berperan untuk menangkap dan menceritakan momen-momen UMN ECO.', 'Tim Bacarita berperan untuk mengabadikan serta menyampaikan seluruh cerita yang berkaitan kegiatan UMN ECO 2023, baik melalui foto maupun video yang sudah diabadikan.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15'),
(14, 'GERHA', NULL, 'Decoration', 'Sansekerta', 'Bangunan', 'Ukiran', 'Hijau Toska', 'Merepresentasikan ketenangan, kesan professional dan handal.', 'Bangunan dan ukiran selalu menjadi satu kesatuan. Dimana ukiran selalu diibaratkan sebagai hal indah yang menghiasi bangunan, sama seperti tim Gerha yang memperindah latar dan mengukir makna di setiap kegiatan UMN ECO.', 'Tim Gerha berperan mempercantik latar dari setiap lokasi pelaksanaan kegiatan UMN ECO 2023, dengan tujuan untuk memperkuat suasana acara serta menarik perhatian audiens.', 1, '2023-05-06 04:20:15', '2023-05-06 04:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Coordinator', 'admin@umn.ac.id', NULL, '$2y$10$ttA4nds/RBdQUdWF/c0BeeXCsTsBsRpo34hlDjQF.G3ncJBUxREaS', NULL, '2023-05-06 04:20:15', '2023-05-06 04:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verification_timers`
--

CREATE TABLE `verification_timers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid_until` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downpour_users`
--
ALTER TABLE `downpour_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `downpour_users_username_student_email_unique` (`username_student_email`);

--
-- Indexes for table `drought_bingos`
--
ALTER TABLE `drought_bingos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drought_registrations`
--
ALTER TABLE `drought_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recruitments`
--
ALTER TABLE `recruitments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team2021s`
--
ALTER TABLE `team2021s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `verifications_token_unique` (`token`),
  ADD KEY `verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `verification_timers`
--
ALTER TABLE `verification_timers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `downpour_users`
--
ALTER TABLE `downpour_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drought_bingos`
--
ALTER TABLE `drought_bingos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drought_registrations`
--
ALTER TABLE `drought_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recruitments`
--
ALTER TABLE `recruitments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team2021s`
--
ALTER TABLE `team2021s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verification_timers`
--
ALTER TABLE `verification_timers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `verifications`
--
ALTER TABLE `verifications`
  ADD CONSTRAINT `verifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `downpour_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
