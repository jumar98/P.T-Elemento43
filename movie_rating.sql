-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-10-2018 a las 04:16:42
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movie_rating`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_10_15_194555_create_theaters_table', 1),
(9, '2018_10_15_194957_create_movies_table', 1),
(10, '2018_10_15_195356_create_scores_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `theater_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movies_theater_id_foreign` (`theater_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `theater_id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jurassic World: El Reino Caído', 'Action\r\n', '2018-10-19 03:40:33', '2018-10-19 03:40:33'),
(2, 1, 'Avengers: Infinity War', 'Action', '2018-10-19 03:40:33', '2018-10-19 03:40:33'),
(3, 2, 'Los Increíbles 2', 'Animation', '2018-10-19 03:40:33', '2018-10-19 03:40:33'),
(4, 2, 'Coco', 'Animation', '2018-10-19 03:40:33', '2018-10-19 03:40:33'),
(5, 3, 'Mamma Mia! Una y Otra Vez', 'Comedy', '2018-10-19 03:40:33', '2018-10-19 03:40:33'),
(6, 3, 'Guerra de Papás 2', 'Comedy', '2018-10-19 03:40:33', '2018-10-19 03:40:33'),
(7, 4, 'Anabelle 2 La Creación', 'Suspense', '2018-10-19 03:40:33', '2018-10-19 03:40:33'),
(8, 4, 'En la Mira del Francotirador', 'Suspense', '2018-10-19 03:40:33', '2018-10-19 03:40:33'),
(9, 5, 'Ready Player One: Comienza el Juego', 'Science fiction', '2018-10-19 03:40:33', '2018-10-19 03:40:33'),
(10, 5, 'Transformers El Último Caballero', 'Science fiction', '2018-10-19 03:40:33', '2018-10-19 03:40:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`movie_id`),
  KEY `scores_movie_id_foreign` (`movie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `scores`
--

INSERT INTO `scores` (`user_id`, `movie_id`, `rating`, `created_at`, `updated_at`) VALUES
(2, 1, 4, '2018-10-19 08:47:28', '2018-10-19 08:47:28'),
(2, 10, 1, '2018-10-19 08:49:10', '2018-10-19 08:49:10'),
(2, 6, 3, '2018-10-19 08:49:32', '2018-10-19 08:49:32'),
(1, 1, 3, '2018-10-19 08:53:28', '2018-10-19 08:53:28'),
(1, 10, 2, '2018-10-19 08:53:53', '2018-10-19 08:53:53'),
(1, 6, 3, '2018-10-19 08:54:13', '2018-10-19 08:54:13'),
(1, 4, 5, '2018-10-19 08:54:30', '2018-10-19 08:54:30'),
(1, 7, 2, '2018-10-19 08:54:46', '2018-10-19 08:54:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `theaters`
--

DROP TABLE IF EXISTS `theaters`;
CREATE TABLE IF NOT EXISTS `theaters` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `theaters`
--

INSERT INTO `theaters` (`id`, `name`, `full_address`, `created_at`, `updated_at`) VALUES
(1, 'Cine Colombia', 'La Castellana Dg. 30 #30-31, Cartagena, Bolívar', '2018-10-19 03:25:11', '2018-10-19 03:25:11'),
(2, 'Procinal', 'Multicentro la Plazuela Santa Mónica Diag. 31 # 71 - 130', '2018-10-19 03:25:11', '2018-10-19 03:25:11'),
(3, 'Cine Colombia', 'Centro Comercial Plaza Bocagrande, Carrera 1 # 12-118, Cartagena, Bolívar', '2018-10-19 03:25:11', '2018-10-19 03:25:11'),
(4, 'Cine Colombia', 'Centro Comercial Caribe Plaza, Calle 29 # 22-108, Cartagena, Bolívar', '2018-10-19 03:25:11', '2018-10-19 03:25:11'),
(5, 'Royal Films', 'Centro Comercial San Fernando #83B, Av. Pedro De Heredia, Cartagena, Bolívar\r\n', '2018-10-19 03:25:11', '2018-10-19 03:25:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `age`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pedro', 'Perez', '21', 'pedrop@hotmail.com', NULL, '$2y$10$qSTtGtf7Gbi/IsXj.sqhKeQlps4pF2lsvVmglaUK8yXcBgJwaSXqu', '2IHjUgya2jXZooIxoFFzh2t8Kwz0XeUMtRVfnPbza9JL4mu6mMq2P9ITaqRU', '2018-10-19 08:43:58', '2018-10-19 08:43:58'),
(2, 'Andres', 'Gomez', '19', 'andresg@hotmail.com', NULL, '$2y$10$5HrO.w6ZSZbdsaRtpQt.Wea2BSKCMx.pBQZ5.gpEGwYOkcaoZPjlO', 'DwUTo2sMAJCdGhBxq0dD5HsVYKi3XNC3nkNNg5I0wXEm4eHnX1kbP0zNYAV2', '2018-10-19 08:45:55', '2018-10-19 08:45:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
