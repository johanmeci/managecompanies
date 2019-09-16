-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2019 a las 02:02:40
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_manage_companies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `created_at`, `updated_at`, `name`, `email`, `logo`, `website`) VALUES
(2, NULL, '2019-09-15 20:46:57', 'Apple Inc', 'apple@apple.com', 'uploads/zwZ7INqKyp2GKCirSX2Cu6I2ztxXCodABiVsabZi.png', 'https://www.apple.com'),
(4, NULL, '2019-09-15 03:09:00', 'Motorola', 'moto@moto.com', 'uploads/tS6vXyLLBAanBMByn6TYDuLUoTD5Sisp63vYrPYt.jpeg', 'https://www.moto.com'),
(17, NULL, NULL, 'Sony', 'sony@sony.com', 'uploads/dTy5lwxU969i9gCSHTds0HoZu8oCn2vby0Ss64qK.jpeg', 'https://www.sony.com'),
(18, NULL, NULL, 'Company New', 'company@comp.com', 'uploads/iO3FfnZamFwgH855jcT98m6veXEdn69D86nZqF7H.jpeg', 'https://www.company.com'),
(19, NULL, NULL, 'DB Company', 'dbcom@comp.com', 'uploads/P9bVmdTOgj5gImqdGMt0LPCXsxsRnSrDFEK6rurB.png', 'https://www.dbcomp.com'),
(20, NULL, NULL, 'Wabisabi', 'wabi@wabi.com', 'uploads/faGBwsso0dypQCyjt38etYyTf0bnjFwKhNdfMjY7.png', 'https://www.wabi.com'),
(21, NULL, NULL, 'Mejuri', 'mejuri@mej.com', 'uploads/LOYvF5kTcmuodG5mIqHvnZhDyqNNREdfHo337Fd5.png', 'https://www.mejuri.com'),
(22, NULL, NULL, 'Google', 'goog@goo.com', 'uploads/oh4aw31PUfO5PuFR3nzrR1yaNa4svqA7nrr2B3W6.png', 'https://www.google.com'),
(23, NULL, NULL, 'ASUS', 'asus@asus.com', 'uploads/7eHgbvT6KfGnNpJ4LN52l2lyGQ4yzuLsGmIvD8Om.png', 'https://www.asus.com'),
(24, NULL, NULL, 'acer', 'acer@acer.com', 'uploads/Dbx81rpWP7PrvWgB0FAMLutH8pzVwFXWjwoJl597.png', 'https://www.acer.com'),
(25, NULL, NULL, 'LG', 'lg@lg.com', 'uploads/EIHd4bcen6V3diBf0CgVuwnQWRlU7WbPkNUQSgQ0.png', 'https://www.lg.com'),
(26, NULL, NULL, 'Hewlett-Packard', 'hp@hp.com', 'uploads/gV4yZ7V1QdEEg4FUzS1WnEgUzsUFctQoULiRug2D.png', 'https://www.hp.com'),
(27, NULL, NULL, 'Reebok', 'reebok@reebok.com', 'uploads/yeJa9LpgHc6rWQCAZBjWXd38FUwgZtwozacQghad.png', 'https://www.reebok.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` int(10) UNSIGNED NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `company`, `email`, `phone`) VALUES
(3, NULL, NULL, 'Camilo', 'Meneses', 4, 'camilo@camilo.com', '1234567890'),
(4, NULL, '2019-09-16 02:44:47', 'Johan', 'Meneses 2', 4, 'johan@johan.com', '1234567890'),
(5, NULL, NULL, 'Pepe', 'Perez', 2, 'pepe@perez.com', '1234567890'),
(7, NULL, NULL, 'Camila', 'Torres', 17, 'camila@camila.com', '1234567890'),
(8, NULL, NULL, 'Luisa', 'Coronel', 27, 'luisa@email.com', '1122334455'),
(9, NULL, NULL, 'Jorge', 'Rojas', 19, 'jorge@mail.com', '1234567890'),
(10, NULL, NULL, 'Lina', 'Delgado', 22, 'lina@email.com', '33433444'),
(11, NULL, NULL, 'Daniela', 'Diaz', 21, 'daniela@mail.com', '888'),
(12, NULL, NULL, 'David', 'Ortiz', 23, 'david@mail.com', '123'),
(13, NULL, NULL, 'Tatiana', 'Davalos', 26, 'tatiana@email.com', '9090909'),
(14, NULL, NULL, 'Pamela', 'León', 22, 'pamela@email.com', '38383838');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_14_163935_create_companies_table', 1),
(4, '2019_09_14_211605_create_employees_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Johan', 'johanmeci03@gmail.com', NULL, '$2y$10$q0uRcIQ4XtlJ194aYLYq7OCm6.bjuAzKH7nWLDhY9ju2Z1U1uQat.', '5qUVUmNpojq4ll2RQRVb8QgnF7fvmEizyEDqX6j5d1fsnsUAKFoWRRXxpa9b', '2019-09-15 01:43:23', '2019-09-15 01:43:23'),
(2, 'User Seeds', 'admin@admin.com', NULL, '$2y$10$atb9qygl3PUoUqLpl4aqVe8w.3m63RQUlpTzo9oysPLjzdL9hxG2q', 'O7zjkQtMzRkC4XF7jYe4xSQbx1TToItt3Tcd4BzBlaMc3qLpKCmm9VDQowEe', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_company_foreign` (`company`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_foreign` FOREIGN KEY (`company`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
