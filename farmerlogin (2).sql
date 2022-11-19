-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 08:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmerlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoryadd`
--

CREATE TABLE `categoryadd` (
  `id` int(20) NOT NULL,
  `categoryimage` varchar(500) NOT NULL,
  `cityname` varchar(255) NOT NULL,
  `harvest` int(150) NOT NULL,
  `demand` int(150) NOT NULL,
  `difference` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoryadd`
--

INSERT INTO `categoryadd` (`id`, `categoryimage`, `cityname`, `harvest`, `demand`, `difference`) VALUES
(1, 'api.txt', 'Mumbai', 50000, 49000, 1000),
(2, 'okra-isolated-on-white-background-600w-1935628345.webp', 'Pune', 18500, 17500, 1000),
(3, 'fresh-okra-fruits-basket-isolated-600w-1819361507.webp', 'Pune', 20500, 19500, 1000),
(4, 'okra-isolated-on-white-background-600w-1935628345.webp', 'Satara', 50000, 49000, 1000),
(5, 'okra-isolated-on-white-background-600w-1935628345.webp', 'Nagpur', 18500, 17500, 1000),
(6, 'fresh-okralady-finger-full-frame-600w-1218957616.webp', 'Nashik', 24500, 23500, 1000),
(7, 'fresh-okra-fruits-basket-isolated-600w-1819361507.webp', 'Ratanagiri', 23000, 23500, 500);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `famer_item_quantity`
--

CREATE TABLE `famer_item_quantity` (
  `id` int(15) NOT NULL,
  `categoryname` varchar(15) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `famer_item_quantity`
--

INSERT INTO `famer_item_quantity` (`id`, `categoryname`, `quantity`) VALUES
(1, '', '0'),
(4, '', '0'),
(5, '', '100kg'),
(6, '', '1000kg'),
(7, '', '1000kg'),
(8, '', '1000kg'),
(9, NULL, NULL),
(10, 'onion', '1000kg'),
(11, NULL, NULL),
(12, NULL, NULL),
(13, NULL, NULL),
(14, NULL, NULL),
(15, NULL, NULL),
(16, 'onion', '1000'),
(17, 'Okara', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_group`
--

CREATE TABLE `farmer_group` (
  `id` int(15) NOT NULL,
  `name` varchar(155) NOT NULL,
  `villagename` varchar(150) NOT NULL,
  `piname` varchar(50) NOT NULL,
  `piemail` varchar(50) NOT NULL,
  `icontactnumber` text NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer_group`
--

INSERT INTO `farmer_group` (`id`, `name`, `villagename`, `piname`, `piemail`, `icontactnumber`, `photo`) VALUES
(1, 'salvi', 'asad', 'sadasd', 'kkkk7@gmail.com', '8465455223', 'salad-onions-500x500.jpg');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_06_094254_create_tb_user_table', 1),
(6, '2022_10_12_155116_create_traders_table', 1),
(7, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(8, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(9, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(10, '2016_06_01_000004_create_oauth_clients_table', 2),
(11, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `procurement_sender`
--

CREATE TABLE `procurement_sender` (
  `id` int(15) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `phonenumber` text DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `emailid` text DEFAULT NULL,
  `photofile` varchar(500) DEFAULT NULL,
  `presidentname` varchar(50) DEFAULT NULL,
  `presidentphonenumber` text DEFAULT NULL,
  `presidentaddress` varchar(150) DEFAULT NULL,
  `registration_number` varchar(50) DEFAULT NULL,
  `pemailid` varchar(20) DEFAULT NULL,
  `padharnumber` text DEFAULT NULL,
  `secretaryname` varchar(20) DEFAULT NULL,
  `sphonenumber` text DEFAULT NULL,
  `secretaryaddress` varchar(50) DEFAULT NULL,
  `semailid` varchar(20) DEFAULT NULL,
  `sadharnumber` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procurement_sender`
--

INSERT INTO `procurement_sender` (`id`, `name`, `lastname`, `phonenumber`, `address`, `emailid`, `photofile`, `presidentname`, `presidentphonenumber`, `presidentaddress`, `registration_number`, `pemailid`, `padharnumber`, `secretaryname`, `sphonenumber`, `secretaryaddress`, `semailid`, `sadharnumber`) VALUES
(2, 'purva', 'ads', '9125456525', 'Shiv Marble', 'purvasalvi3@gmail.com', 'simplifyagri.postman_collection.json', 'sasa', '', 'Shiv Marble', '8596320120', 'purv1@gmail.com', '8596325', 'asdd', '8596968574', 'Shiv Marble', 'sal2@gmail.com', '895623'),
(3, 'purva', 'salvi', '859674566', 'dsdds', 'asdf1@gmail.com', 'C:\\xampp\\tmp\\php54ED.tmp', 'ddcsd', '', 'sdcfdscs', '654513132123', 'dfff1@gmail.com', '465431313', 'sdscdc', '56532323', 'ededewde', 'ewwe2@gmail.com', '84654132131132'),
(4, 'apurv', 'Rao', '8956522002', '8596741236', 'purvsal3@gmail.com', 'C:\\xampp\\tmp\\php899E.tmp', 'shiv', '', 'Lote', '23652K52M2', 'shiv@gmail.com', '7896852200', 'siddhu', '7798522020', 'kapsal', 'siddhu34@gmail.com', '202020202020'),
(5, 'apurv', 'Rao', '8956522002', 'kherdi', 'purvsal3@gmail.com', 'C:\\xampp\\tmp\\php681E.tmp', 'shiv', '', 'Lote', '23652K52M2', 'shiv@gmail.com', '7896852200', 'siddhu', '7798522020', 'kapsal', 'siddhu34@gmail.com', '202020202020'),
(6, 'apurv', 'Rao', '8956522002', 'kherdi', 'purvsal3@gmail.com', 'C:\\xampp\\tmp\\phpA77A.tmp', 'shiv', '', 'Lote', '23652K52M2', 'shiv@gmail.com', '7896852200', 'siddhu', '7798522020', 'kapsal', 'siddhu34@gmail.com', '202020202020'),
(7, 'apurv', 'Rao', '8956522002', 'kherdi', 'purvsal3@gmail.com', 'C:\\xampp\\tmp\\php4BE9.tmp', 'shiv', '', 'Lote', '23652K52M2', 'shiv@gmail.com', '7896852200', 'siddhu', '7798522020', 'kapsal', 'siddhu34@gmail.com', '202020202020'),
(8, 'apurv', 'Rao', '8956522002', 'kherdi', 'purvsal3@gmail.com', 'C:\\xampp\\tmp\\phpED62.tmp', 'shiv', '7896857412', 'Lote', '23652K52M2', 'shiv@gmail.com', '7896852200', 'siddhu', '7798522020', 'kapsal', 'siddhu34@gmail.com', '202020202020'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shgname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adharnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_confirm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `lastname`, `phonenumber`, `email`, `address`, `village`, `district`, `pincode`, `state`, `shgname`, `photo`, `adharnumber`, `username`, `password`, `password_confirm`, `created_at`, `updated_at`) VALUES
(1, 'chief', 'asssd', '9125456525', 'purvasalvi7@gmail.com', 'Shiv Marble', 'dcxdffdxf', 'szxzsx', '415605', 'Maharastra', 'shiv', 'fresh-okra-fruits-basket-isolated-600w-1819361507.webp', '2313200', '', '$2y$10$OJX8/7wVZi1auwCdzx9OT.gTT7pwdq9Gt15fnX8OOTailHekSZ11G', '$2y$10$7AjUkuDLeyFZ.lH8.AAXDeH6gjKaYmTy/ZL5kFHKuzY2TsbwJiFFG', NULL, NULL),
(2, 'purv', 'salvi', '9125456525', 'purvasalvi7@gmail.com', 'Shiv Marble', 'dcxdffdxf', 'szxzsx', '415605', 'Maharastra', 'shiv', 'Cisco_WebEx_Add-On.exe', '4654131', '', '$2y$10$EahKZ2EbivWtwvgqzNBsLeUE1MpnJAx1EQim43k4dQ./.chfV76iG', '$2y$10$eKklTN9Dv5LTwjF67cBDiuwrINYoiEEVt/Pjw3h5s0Oij4t78y.vO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `traders`
--

CREATE TABLE `traders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adhar_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photofile` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traders`
--

INSERT INTO `traders` (`id`, `name`, `lastname`, `address`, `district`, `state`, `emailid`, `phone_number`, `gst_number`, `adhar_number`, `photo`, `photofile`, `created_at`, `updated_at`) VALUES
(1, 'purv', 'salvi', 'kapsal', 'ratanagiri', 'maharastra', 'purvsalvi4@gmail.com', NULL, '2541K20Z22', '859674566', 'https://www.google.com/url?sa=i&url=https://pnghunter.com/png/okra/&psig=AOvVaw3YXQuDzBRN0EfvfJQQNujm&ust=1668790588017000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCIDrjsTXtfsCFQAAAAAdAAAAABAE', 'https://www.google.com/url?sa=i&url=https://www.moneytap.com/blog/download-masked-aadhaar-card/&psig=AOvVaw3HrDfoseh3GzyubpQBudvY&ust=1668790671919000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCICZ2OzXtfsCFQAAAAAdAAAAABAJ', NULL, NULL),
(2, 'purv', 'salvi', 'kapsal', 'ratanagiri', 'maharastra', 'purvsalvi4@gmail.com', '', '2541K20Z22', '859674566', 'https://www.google.com/url?sa=i&url=https://pnghunter.com/png/okra/&psig=AOvVaw3YXQuDzBRN0EfvfJQQNujm&ust=1668790588017000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCIDrjsTXtfsCFQAAAAAdAAAAABAE', 'https://www.google.com/url?sa=i&url=https://www.moneytap.com/blog/download-masked-aadhaar-card/&psig=AOvVaw3HrDfoseh3GzyubpQBudvY&ust=1668790671919000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCICZ2OzXtfsCFQAAAAAdAAAAABAJ', NULL, NULL),
(3, 'anil', 'kumar', 'chiplun', 'ratanagiri', 'maharastra', 'anilkumar3@gmail.com', '', '2542F52h20', '7896968552', 'C:\\xampp\\tmp\\php4E89.tmp', 'C:\\xampp\\tmp\\php4E8A.tmp', NULL, NULL),
(4, 'anil', 'kumar', 'chiplun', 'ratanagiri', 'maharastra', 'anilkumar3@gmail.com', '', '2542F52h20', '7896968552', 'C:\\xampp\\tmp\\php5817.tmp', 'C:\\xampp\\tmp\\php5818.tmp', NULL, NULL),
(6, 'anil', 'kumar', 'chiplun', 'ratanagiri', 'maharastra', 'anilkumar3@gmail.com', '7896857412', '2542F52h20', '7896968552', 'C:\\xampp\\tmp\\phpCB21.tmp', 'C:\\xampp\\tmp\\phpCB22.tmp', NULL, NULL),
(7, 'anil', 'kumar', 'chiplun', 'ratanagiri', 'maharastra', 'anilkumar3@gmail.com', '7896857412', '2542F52h20', '7896968552', 'C:\\xampp\\tmp\\phpAEAD.tmp', 'C:\\xampp\\tmp\\phpAEAE.tmp', NULL, NULL),
(8, 'anil', 'kumar', 'chiplun', 'ratanagiri', 'maharastra', 'anilkumar3@gmail.com', '7896857412', '2542F52h20', '7896968552', 'C:\\xampp\\tmp\\php9711.tmp', 'C:\\xampp\\tmp\\php9712.tmp', NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vfpck_trader`
--

CREATE TABLE `vfpck_trader` (
  `id` int(20) NOT NULL,
  `phonenumber` varchar(11) DEFAULT NULL,
  `password` text NOT NULL,
  `password_confirm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vfpck_trader`
--

INSERT INTO `vfpck_trader` (`id`, `phonenumber`, `password`, `password_confirm`) VALUES
(1, '8596852520', 'abc', 'abc'),
(3, '0', '$2y$10$NzHD4YFjYxKC8eXsjUer3.5LOX0jAtuzAd6EL1Ljm08Si5DC/I0/2', '$2y$10$QYPB/VQsQPSJ/fqd4WiqtuKbm9g2r59KVMPw34/rIEfLmPXegXnaC'),
(4, '0', '$2y$10$U.AWCyoupdkakFM1fOKz/OBVhNnqnsVCAtc8BDzrTGW1zU2a2EmhC', '$2y$10$Jz5.yl/PBslbxqJ2xPEcie9yUM1pGIRsCN81AtjzUdN871xVX45xy'),
(5, '0', '$2y$10$bE1PLkOoTg/7K.mSDTH3YePjqgtDRbzEjtG4xogaHk3MxXdRE90Fu', '$2y$10$Hiw85d/7SXTV6Soy3wWrne/8Br8j7f/e6o8us6ErV80K.ySEGwujW'),
(6, '0', '$2y$10$wvxCV1efa/eefJUJriQCquSrT2lMWFdNNwJz5x79K7Hzs0h15FTPC', '$2y$10$F0NJkTcGOkknsRWJqDV3QuzgQZ5GrhBH2ky75r9TUsDLm2w5kDGNW'),
(7, NULL, '$2y$10$H1oNezWYn9coFWls6EJfMupjwG9pa2NJ2kkT2/nF2tQ3n2UufLQC2', '$2y$10$UAcNWD28.dAr1Dyg6M5mHeAiLj2mW9SDcemYr1Nd9hfdBcSt2mSPi'),
(8, '9158456352', '$2y$10$Yr5li7En4Vlrj7arUMqd/.S/AN9LjZ6PUMhXlM/fuZLjb5ItXR5Uq', '$2y$10$KYKl.UnwOKx.gSeKc/8iKe6BribRWXJZfctZMTIUNDvFYa1STRWZa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoryadd`
--
ALTER TABLE `categoryadd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `famer_item_quantity`
--
ALTER TABLE `famer_item_quantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_group`
--
ALTER TABLE `farmer_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `procurement_sender`
--
ALTER TABLE `procurement_sender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traders`
--
ALTER TABLE `traders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vfpck_trader`
--
ALTER TABLE `vfpck_trader`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoryadd`
--
ALTER TABLE `categoryadd`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `famer_item_quantity`
--
ALTER TABLE `famer_item_quantity`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `farmer_group`
--
ALTER TABLE `farmer_group`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `procurement_sender`
--
ALTER TABLE `procurement_sender`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `traders`
--
ALTER TABLE `traders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vfpck_trader`
--
ALTER TABLE `vfpck_trader`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
