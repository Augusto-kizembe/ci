-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04-Ago-2021 às 14:21
-- Versão do servidor: 10.2.39-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eduibaco_eduiba`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(3, 'Bernardo Issenguel', 'beissenguel12@gmail.com', '937393877', NULL, NULL),
(4, 'Au', '', '', NULL, NULL),
(5, 'Augusto', 'augusto@gmail.com', '456346', NULL, NULL),
(6, 'Bernardo Augusto K', 'beissen12@gmail.com', '937393877', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_11_202007_create_roles_table', 1),
(4, '2020_08_11_202030_create_permissions_table', 1),
(5, '2020_08_12_112425_create_clients_table', 1),
(6, '2020_08_12_112549_create_services_table', 1),
(7, '2020_08_12_112636_create_contacts_table', 1),
(8, '2020_08_12_112656_create_requests_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `tipo_negocio` varchar(255) DEFAULT NULL,
  `objectivo` varchar(255) DEFAULT NULL,
  `produto` varchar(255) DEFAULT NULL,
  `qtd_produto` int(11) DEFAULT NULL,
  `preco` double(8,2) DEFAULT NULL,
  `localizacao` varchar(255) DEFAULT NULL,
  `fazenda_empresa` varchar(255) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `requests`
--

INSERT INTO `requests` (`id`, `service_id`, `client_id`, `user_id`, `pais`, `tipo_negocio`, `objectivo`, `produto`, `qtd_produto`, `preco`, `localizacao`, `fazenda_empresa`, `estado`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 8, 'Angola', 'TI', 'sjsjsjsjsj', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(3, 1, 3, 8, 'Angola', 'TI', 'jdfjdj mdldko ', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(7, 2, 5, 8, 'Angola', NULL, NULL, 'Batata ', 4, NULL, NULL, NULL, 2, NULL, NULL),
(8, 4, 3, 8, NULL, NULL, NULL, 'Batata ', 5, 20.00, 'Luanda', 'PKS', 2, NULL, NULL),
(9, 1, 3, 8, 'Angola', 'Saúde', 'Bmmdmddm dmdmd', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(10, 1, 3, 8, 'Angola', 'Inteligência', 'Jjsksks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 1, 3, 8, 'Angola', 'gGGGGGGG', 'hgjkhj', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(12, 1, 3, 8, 'Angola', 'TITGGTRGH', 'DRYTE45Y5E4YERYTRYU57U45 5YT5Y45Y453', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(13, 1, 3, 8, 'Angola', 'Inteligência', 'sdgrgtrtyjkyitkghkghklvhmkvggbg  htrhjtrjutr', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(14, 1, 3, 8, 'Angola', 'Inteligência', 'c vgnhgfnjghmghmg', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(15, 1, 3, 8, 'Angola', 'Inteligência', 'E45TYER', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(16, 1, 6, 8, 'Angola', 'TITGGTRGH', 'yugyigyugyuigigugyugjy', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(17, 2, 3, 8, 'Angola', NULL, NULL, 'Batata', 65, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `services`
--

INSERT INTO `services` (`id`, `titulo`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Consultoria', 'A Consultoria representante do comandante na ponte', '2020-08-21 20:31:12', '2020-08-21 20:31:12'),
(2, 'Exportação', 'A Exportação poderes que lhe tenham sido delegados', '2020-08-21 20:31:12', '2020-08-21 20:31:12'),
(3, 'Importação', 'A Importação tem sido delegados. Em particular, é-lhe delegada a', '2020-08-21 20:31:12', '2020-08-21 20:31:12'),
(4, 'Escoamento de produtos Nacionais', 'O Escoamento é tido como perante ele pelo exercício dos poderes sido delegados.', '2020-08-21 20:31:12', '2020-08-21 20:31:12'),
(5, 'Licenciamento de Importações', 'Tratamos do licenciamento de todos tipos de importações, bens e produtos aufandegarios', '2021-08-02 16:39:07', '2021-08-01 16:39:07'),
(6, 'Transporte & logística.', 'Planear e controlar os sistemas de transporte e distribuição; gerir as atividades logísticas de carga, armazenagem e transporte; conceber e propor novas ', '2021-08-02 16:41:25', '2021-08-02 16:41:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 1,
  `isactivo` tinyint(1) NOT NULL DEFAULT 0,
  `isadmin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `online`, `isactivo`, `isadmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Bernardo Issenguel', 'beissenguel12@gmail.com', '937393877', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 1, 1, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Índices para tabela `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_service_id_foreign` (`service_id`),
  ADD KEY `requests_client_id_foreign` (`client_id`),
  ADD KEY `requests_user_id_foreign` (`user_id`);

--
-- Índices para tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Índices para tabela `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
