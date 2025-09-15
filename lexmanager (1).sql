-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2025 a las 18:09:13
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lexmanager`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `curp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `created_at`, `updated_at`, `curp`) VALUES
(1, 'Jorge', 'Gutierrez', 'cliente.pruba1@gmail.com', '321351354', NULL, '2025-05-12 17:26:37', 'asdasxaad'),
(2, 'Israel', 'Gomez', 'prueba.post1@gmail.com', '3365481351', '2025-04-17 03:14:31', '2025-05-13 04:02:25', 'GACS101228MNTGPX28'),
(3, 'Maria', 'Perez', 'admi1@admin1.com', '3315496829', '2025-04-17 03:15:31', '2025-05-13 04:03:07', 'COKX090110HTLBZC96');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentocliente`
--

CREATE TABLE `documentocliente` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCliente` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentocliente`
--

INSERT INTO `documentocliente` (`id`, `nombre`, `ruta`, `idCliente`, `created_at`, `updated_at`) VALUES
(1, 'descarga.jpeg', '/storage/app/public/descarga.jpeg', 1, '2025-05-12 14:15:10', '2025-05-12 14:15:10'),
(2, 'Aceptación empresa Joel Adrian Garcia Soto.docx.pdf', '/storage/app/public/Aceptación empresa Joel Adrian Garcia Soto.docx.pdf', 1, '2025-05-12 17:25:25', '2025-05-12 17:25:25'),
(3, 'Joel Adrián Garcia Soto.pdf', '/storage/app/public/Joel Adrián Garcia Soto.pdf', 1, '2025-05-12 17:29:32', '2025-05-12 17:29:32'),
(4, 'curp_prueba.pdf', '/storage/app/public/curp_prueba.pdf', 3, '2025-05-13 04:05:39', '2025-05-13 04:05:39'),
(5, 'acta de nacimiento.pdf', '/storage/app/public/acta de nacimiento.pdf', 10, '2025-05-14 22:37:24', '2025-05-14 22:37:24'),
(6, 'documento 3.pdf', '/storage/app/public/documento 3.pdf', 10, '2025-05-14 22:37:29', '2025-05-14 22:37:29'),
(7, 'curp.pdf', '/storage/app/public/curp.pdf', 10, '2025-05-21 21:29:13', '2025-05-21 21:29:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentotarea`
--

CREATE TABLE `documentotarea` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTarea` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentotarea`
--

INSERT INTO `documentotarea` (`id`, `nombre`, `ruta`, `idTarea`, `created_at`, `updated_at`) VALUES
(2, 'descarga.jpeg', '/storage/app/public/descarga.jpeg', 7, '2025-05-12 14:15:10', '2025-05-12 14:15:10'),
(3, 'images.jpeg', '/storage/app/public/images.jpeg', 7, '2025-05-12 14:22:08', '2025-05-12 14:22:08'),
(4, '2-2.jpg', '/storage/app/public/2-2.jpg', 7, '2025-05-12 14:22:58', '2025-05-12 14:22:58'),
(8, 'Graficación - Tarea 3 Joel Adrian Garcia Soto.pdf', '/storage/app/public/Graficación - Tarea 3 Joel Adrian Garcia Soto.pdf', 10, '2025-05-13 03:59:38', '2025-05-13 03:59:38'),
(10, 'Anteproyecto2 .pdf', '/storage/app/public/Anteproyecto2 .pdf', 11, '2025-05-13 04:00:44', '2025-05-13 04:00:44'),
(12, 'Estructura de Documento de residencia (2).doc', '/storage/app/public/Estructura de Documento de residencia (2).doc', 5, '2025-05-14 13:20:14', '2025-05-14 13:20:14'),
(13, 'documento 1.pdf', '/storage/app/public/documento 1.pdf', 15, '2025-05-14 22:35:51', '2025-05-14 22:35:51'),
(14, 'curp.pdf', '/storage/app/public/curp.pdf', 16, '2025-05-14 22:36:09', '2025-05-14 22:36:09'),
(15, 'acta de nacimiento.pdf', '/storage/app/public/acta de nacimiento.pdf', 17, '2025-05-21 13:00:46', '2025-05-21 13:00:46'),
(16, 'documento 1.pdf', '/storage/app/public/documento 1.pdf', 18, '2025-05-21 21:28:14', '2025-05-21 21:28:14'),
(17, 'documento 2.pdf', '/storage/app/public/documento 2.pdf', 19, '2025-05-21 21:28:25', '2025-05-21 21:28:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoproyecto`
--

CREATE TABLE `estadoproyecto` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estadoproyecto`
--

INSERT INTO `estadoproyecto` (`id`, `nombre`, `decripcion`, `created_at`, `updated_at`) VALUES
(1, 'Activo', '', NULL, NULL),
(2, 'Pendiente', '', NULL, NULL),
(3, 'Completado', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadotarea`
--

CREATE TABLE `estadotarea` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estadotarea`
--

INSERT INTO `estadotarea` (`id`, `nombre`, `decripcion`, `created_at`, `updated_at`) VALUES
(1, 'Creado', '', NULL, NULL),
(2, 'Asignado', '', NULL, NULL),
(3, 'Pendiente', '', NULL, NULL),
(4, 'Completado', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(64, '2014_10_12_000000_create_usuarios_table', 1),
(65, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(66, '2019_08_19_000000_create_failed_jobs_table', 1),
(67, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(68, '2025_03_10_011834_proyectos', 1),
(69, '2025_03_10_012107_clientes', 1),
(70, '2025_03_10_013634_tareas_proyecto', 1),
(71, '2025_03_10_013905_documento_cliente', 1),
(72, '2025_03_10_014024_estado_tarea', 1),
(73, '2025_03_10_014030_estado_proyecto', 1),
(74, '2025_03_21_043147_create_rol_usaurio_table', 2),
(75, '2025_03_21_043210_create_documento_tarea_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

CREATE TABLE `prioridad` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prioridad`
--

INSERT INTO `prioridad` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Alta', 'Prioridad alta'),
(2, 'Media', 'Prioridad media'),
(3, 'Baja', 'Prioridad baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCliente` int NOT NULL,
  `estado` int NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `idCliente`, `estado`, `fechaInicio`, `fechaFin`, `descripcion`, `created_at`, `updated_at`) VALUES
(2, 'prueba 2', 1, 1, '2025-04-02', '2025-04-02', 'prueba 2 del proyecto_____________', '2025-04-03 00:00:59', '2025-05-11 13:47:56'),
(4, 'prueba post', 1, 1, '2025-04-16', '2025-04-29', 'asdad', '2025-04-03 11:09:14', '2025-05-10 13:34:03'),
(5, 'prueba post 2', 1, 1, '2025-04-24', '2025-04-30', 'asdad', '2025-04-03 11:10:45', '2025-04-03 11:10:45'),
(6, 'prueba proyecto 4', 1, 1, '2025-04-03', '2025-09-25', 'descripción descriptiva', '2025-04-05 10:34:55', '2025-04-05 10:34:55'),
(7, 'asdad', 2, 1, '2025-04-22', '2025-04-08', 'asdad', '2025-04-06 14:07:22', '2025-05-14 13:15:03'),
(8, 'prueba api 1', 1, 1, '2025-04-01', '2025-04-30', 'descriptiva', '2025-04-06 14:17:46', '2025-04-06 14:17:46'),
(9, 'prueba post', 1, 3, '2025-04-01', '2025-04-30', 'asdadad', '2025-04-06 14:18:34', '2025-05-13 04:38:27'),
(10, 'prueba post', 1, 3, '2025-04-01', '2025-04-30', 'asdadad', '2025-04-06 14:18:49', '2025-05-13 04:38:20'),
(28, 'prueba 12/05/25 1', 3, 1, '2025-05-01', '2025-05-31', 'Este proyecto es la primera prueba', '2025-05-13 03:55:39', '2025-05-13 04:01:20'),
(29, 'Verificacion imss', 2, 1, '2025-05-14', '2025-06-18', 'Conseguir documentos para dar de alta en el imss', '2025-05-14 22:31:22', '2025-05-21 12:06:44'),
(30, '21/05/25', 3, 1, '2025-05-21', '2025-07-01', 'ayuda a tratamiento contra la obesidad', '2025-05-21 21:23:33', '2025-05-21 21:23:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

CREATE TABLE `rolusuario` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rolusuario`
--

INSERT INTO `rolusuario` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '', NULL, NULL),
(2, 'Empleado', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareasproyecto`
--

CREATE TABLE `tareasproyecto` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` int NOT NULL,
  `idUsuario` int NOT NULL,
  `idProyecto` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `caducidad` date DEFAULT NULL,
  `prioridad` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tareasproyecto`
--

INSERT INTO `tareasproyecto` (`id`, `nombre`, `descripcion`, `estado`, `idUsuario`, `idProyecto`, `created_at`, `updated_at`, `caducidad`, `prioridad`) VALUES
(5, 'prueba proyecto 10', 'asdad', 4, 2, 10, '2025-04-21 13:12:44', '2025-05-14 13:20:05', '2025-04-30', 2),
(7, 'prueba 10/05/25 1', 'prueba 1', 4, 1, 2, '2025-05-11 10:11:27', '2025-05-14 13:02:27', '2025-05-15', 1),
(10, 'tarea 1', 'conseguir acta de algo', 4, 1, 28, '2025-05-13 03:57:00', '2025-05-21 12:08:39', '2025-05-30', 2),
(11, 'tarea 2', 'dar de alta a cliente', 4, 2, 28, '2025-05-13 03:59:16', '2025-05-21 12:07:28', '2025-05-29', 1),
(12, '14-05-25 1', 'asdada', 2, 2, 7, '2025-05-14 12:59:51', '2025-05-14 13:14:21', '2025-05-22', 2),
(13, '14-05-25 2', 'asdad', 2, 2, 7, '2025-05-14 13:00:28', '2025-05-14 13:14:31', '2025-05-26', 2),
(14, '14-05-25 2', 'asdad', 2, 2, 7, '2025-05-14 13:01:03', '2025-05-14 13:14:36', '2025-05-26', 1),
(15, 'num de seguridad social', 'Conseguir el num de seguridad social', 2, 1, 29, '2025-05-14 22:32:13', '2025-05-21 12:08:25', '2025-05-23', 2),
(16, 'conseguir curp', 'Conseguir  la curp del beneficiario', 2, 1, 29, '2025-05-14 22:32:59', '2025-05-21 12:08:18', '2025-05-29', 1),
(17, '21-05-25', 'asdad', 4, 2, 29, '2025-05-21 12:59:51', '2025-05-21 13:00:51', '2025-05-22', 2),
(18, 'tarea 1', 'conseguir curp', 4, 9, 30, '2025-05-21 21:25:32', '2025-05-21 21:28:30', '2025-05-24', 2),
(19, 'tarea 2', 'conseguir acta de nacimiento', 1, 9, 30, '2025-05-21 21:25:54', '2025-05-21 21:25:54', '2025-05-31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contraseña` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoUsuario` int DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `contraseña`, `tipoUsuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joel Adrian', 'Garcia Soto', 'admin@admin.com', '$2y$12$zEJ3PaJ76pRLd4W/b0BfCeJ3z7YBTYz32iXfQb3nP.s31lH4noUuW', 1, NULL, NULL, '2025-04-10 10:19:09'),
(2, 'Joel', 'Escuela', 'za19011239@zapopan.tecmm.edu.mx', '$2y$12$3tIMFrFaDHNi4XQsYzu39.fuA0fCZ9oPoX.mk9wkYqZ1fBxfsnEwe', 2, NULL, '2025-04-03 22:00:03', '2025-05-11 12:57:17'),
(9, 'Jose de Jesus', 'Garcia', 'joel.garcia1545@gmail.com', '$2y$12$iVpVP2SvIQyKedngFV65nekYO358SWsJyJ7LlzxHEigTyCamPDBOO', 2, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_correo_unique` (`correo`);

--
-- Indices de la tabla `documentocliente`
--
ALTER TABLE `documentocliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentotarea`
--
ALTER TABLE `documentotarea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadoproyecto`
--
ALTER TABLE `estadoproyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadotarea`
--
ALTER TABLE `estadotarea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareasproyecto`
--
ALTER TABLE `tareasproyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_correo_unique` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `documentocliente`
--
ALTER TABLE `documentocliente`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `documentotarea`
--
ALTER TABLE `documentotarea`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `estadoproyecto`
--
ALTER TABLE `estadoproyecto`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estadotarea`
--
ALTER TABLE `estadotarea`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tareasproyecto`
--
ALTER TABLE `tareasproyecto`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
