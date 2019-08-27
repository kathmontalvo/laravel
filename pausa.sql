-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2019 a las 11:45:11
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pausa`
--
CREATE DATABASE IF NOT EXISTS `pausa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pausa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Costa', 'Ballenas, Paseo en lancha, Aves, Paisajes naturales', NULL, '2019-08-26 00:47:11', '2019-08-26 00:47:11'),
(2, 'Sierra', 'Paisajes naturales, Trekking, Actividades de conservación, Convivencia con locales', NULL, '2019-08-26 00:47:11', '2019-08-26 00:47:11'),
(3, 'Selva', 'Tiro de arco y flecha, Trekking, Búsqueda de caimanes, Flora Paseo en bote, Caminatas nocturnas, Avistamiento de gallito de las rocas, Avistamiento de animales salvajes, Paisajes naturales', NULL, '2019-08-26 00:47:11', '2019-08-26 00:47:11');

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
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(62, '2014_10_12_000000_create_users_table', 1),
(63, '2014_10_12_100000_create_password_resets_table', 1),
(64, '2019_08_25_161107_create_categories_table', 1),
(65, '2019_08_25_162453_create_products_table', 1),
(66, '2019_08_25_184012_create_product_images_table', 1),
(67, '2019_08_26_025648_verification_users', 2),
(68, '2019_08_26_030857_validate_users', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `long_description`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Surf, Barrio y Morro', 'Chorrillos - Lima - Full Day ', 'Chorrillos no es sólo un lugar de paso más. El Proyecto Alto Perú y sus vecinos han hecho posible que sea atractivo para el turismo urbano, cambiando la errónea imagen que muchos tienen sobre este distrito, rico en historia y cultura. Con esta experiencia, pasarás un día diferente con su gente. Por la mañana, date un chapuzón en el mar y aprende a correr tabla con ayuda de excelentes profesores. Por la tarde, conoce la historia, arte popular, y proyectos comunitarios de Chorrillos, mientras recorres su balneario, el barrio Alto Perú y el Morro solar.', 70.00, 1, '2019-08-26 00:47:11', '2019-08-26 00:47:11'),
(3, 'Soqtapata: La Selva Virgen de Cusco', 'Hospedaje| Alimentación| Actividades| Traslados| Guía', 'Acampa en Soqtapata y se parte del equipo de conservación mientras conoces la belleza que ofrece este increíble bosque virgen de más de 15 mil hectáreas. Caminarás por sus interminables senderos mientras avistas los animales salvajes que viven aquí, y encontrarás aguas cristalinas para llenar de energía el cuerpo y conectarte con la naturaleza.', 1350.00, 2, '2019-08-26 00:47:11', '2019-08-26 04:22:04'),
(4, 'Llama Trek en Valle Sagrado', 'Actividades |Guía | Snacks', 'Descubre las estaciones y las comunidades alto andinas que forman parte del Proyecto Llamapack y aprende acerca de la biodiversidad local, el estilo de vida andino y las oportunidades y desafíos que viven estas familias dejadas de lado por el turismo, mientras disfrutas de la compañía de los anfitriones, intérpretes y llamas eco-amigables.', 130.00, 2, '2019-08-26 00:47:11', '2019-08-26 00:47:11'),
(5, 'Naturaleza en Ñape Lodge', 'Tambopata: Madre de Dios', '¡Visita el lodge de la comunidad nativa Infierno! Conoce la diversidad de especies botánicas y zoológicas, los majestuosos paisajes y la oportunidad de vivir una experiencia única en lo más profundo de la naturaleza a orillas del río Tambopata.', 930.00, 3, '2019-08-26 00:47:11', '2019-08-26 00:47:11'),
(6, 'El Bosque Nublado', 'Bagua Grande - Amazonas', 'En Amazonas se encuentra un paraíso que todos debemos visitar: Bosque de Berlín. La familia Rimarachín vive rodeada de 100 hectáreas de bosque nublado privilegiado por ríos y naturaleza ¡Verás árboles de cientos de años de antigüedad!. \r\n\r\nRelájate al máximo en su refugio, escucha sus historias, recorre sus senderos ¡Visitarás el hábitat de los monos choros de cola amarilla!, bañate en sus quebradas, prueba comida sana ¡Podrás elaborar tu propia panela orgánica! y más.', 690.00, 3, '2019-08-26 00:47:11', '2019-08-26 00:47:11'),
(7, 'Sandboard en Ancón', 'Ancón - Lima', 'No hay mejor forma de disfrutar nuestros desiertos que deslizándote en una tabla de sandboard, y pasando en una 4x4 por las mejores dunas de Lima ubicadas en la Zona Reservada Lomas de Ancón. Siéntete un verdadero snowboarder con una lección privada en un escenario único, donde además aprenderás sobre el desierto y aportarás a su conservación a través del turismo.', 340.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_images_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `featured`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'https://pausa.la/img/fotos_ruta/AltoPeru01.png', 0, 2, NULL, NULL),
(2, 'https://pausa.la/img/fotos_ruta/AltoPeru02.png', 0, 2, NULL, NULL),
(3, 'https://pausa.la/img/fotos_ruta/Soqtapata02.jpg', 0, 3, NULL, NULL),
(4, 'https://pausa.la/img/fotos_ruta/Soqtapata04.jpg', 0, 3, NULL, NULL),
(5, 'https://pausa.la/img/fotos_ruta/llamapack02.jpg', 0, 4, NULL, NULL),
(6, 'https://pausa.la/img/fotos_ruta/llamapack03.jpg', 0, 4, NULL, NULL),
(7, 'https://pausa.la/img/fotos_ruta/Nape01.png', 0, 5, NULL, NULL),
(8, 'https://pausa.la/img/fotos_ruta/Nape02.png', 0, 5, NULL, NULL),
(9, 'https://pausa.la/img/fotos_ruta/Dulzura03.jpg', 0, 6, NULL, NULL),
(10, 'https://pausa.la/img/fotos_ruta/Dulzura11.jpg', 0, 6, NULL, NULL),
(11, 'https://pausa.la/img/fotos_ruta/Ancon01.png', 0, 7, NULL, NULL),
(12, 'https://pausa.la/img/fotos_ruta/Ancon08.png', 0, 7, NULL, NULL),
(13, 'https://pausa.la/img/fotos_ruta/Dulzura06.jpg', 0, 6, NULL, NULL),
(14, 'https://pausa.la/img/fotos_ruta/Dulzura12.jpg', 0, 6, NULL, NULL),
(15, 'https://pausa.la/img/fotos_ruta/llamapack01.jpg', 0, 4, NULL, NULL),
(16, 'https://pausa.la/img/fotos_ruta/llamapack04.jpg', 0, 4, NULL, NULL),
(17, 'https://pausa.la/img/fotos_ruta/Nape05.png', 0, 5, NULL, NULL),
(18, 'https://pausa.la/img/fotos_ruta/Nape11.png', 0, 5, NULL, NULL),
(19, 'https://pausa.la/img/fotos_ruta/Ancon07.png', 0, 7, NULL, NULL),
(20, 'https://pausa.la/img/fotos_ruta/Ancon02.png', 0, 7, NULL, NULL),
(21, 'https://pausa.la/img/fotos_ruta/Soqtapata03.jpg', 0, 3, NULL, NULL),
(22, 'https://pausa.la/img/fotos_ruta/Soqtapata06.jpg', 0, 3, NULL, NULL),
(23, 'https://pausa.la/img/fotos_ruta/AltoPeru04.png', 0, 2, NULL, NULL),
(24, 'https://pausa.la/img/fotos_ruta/AltoPeru06.png', 0, 2, NULL, NULL),
(25, '5d63718adb627Nape03.png', 0, 5, '2019-08-26 10:43:38', '2019-08-26 10:43:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kathlen Montalvo', 'kathmontalvo123@gmail.com', NULL, '$2y$10$xVv.NxZ9iHEREkWM2b4huOzZK6Z2H0qayoV9u5JY/vfLFGP7J3O1i', 1, NULL, '2019-08-26 08:29:56', '2019-08-26 08:29:56'),
(2, 'Daiana Campos', 'daiana.campos04@gmail.com', NULL, '$2y$10$kMaz3nIoC7EgHfK1dwip8.6VjWS7bg7JWgCPONsrF2paxByyVM7aC', 1, NULL, '2019-08-26 10:45:03', '2019-08-26 10:45:03'),
(3, 'Nikole Panebra', 'nikoleux@gmail.com', NULL, '$2y$10$WSNEP/PDLjMEUt3JzONy4.mVP16pVsGfv8qdrW6Is0ASi/SMg5H0a', 0, NULL, '2019-08-26 08:43:30', '2019-08-26 08:43:30');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
