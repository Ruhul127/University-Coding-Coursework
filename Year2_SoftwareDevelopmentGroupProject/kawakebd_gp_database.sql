-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 22 juin 2023 à 07:15
-- Version du serveur : 5.7.23-23
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kawakebd_gp_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `nhs_number` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `nhs_number`, `name`, `dob`, `address`, `mobile_phone`, `username`, `password`) VALUES
(1, 212121, 'ZAK', '2006-02-16', 'SALE', '3233232', 'maisrezkyoussef', '$2y$10$oIi2ShaEgWN16/VQohXN6.cagBPJqcrNEZ.3cCfNVoLNzaFdXkuB6'),
(2, 21212132, 'ZAK', '2006-02-26', 'SALE', '3233232', 'maisrezkyoussef', '$2y$10$45YJ6x1NCqvO3dJ7tXEk5u6pX4PpWUpYEjXUAgi6JILMQvKgC.Ex.'),
(3, 21212132, 'ZAK', '2006-02-26', 'SALE', '3233232', 'maisrezkyoussef', '$2y$10$IGH8GO9PGQ4Q70L6CaHA2umchpP.2LfOY2Gv6SV1brgzkGLGMrNGC'),
(4, 21212132, 'ZAKz', '2006-02-26', 'SALE', '3233232', 'maisrezkyoussef', '$2y$10$L5r1ZJwx.ZP/a1Jb7pBbReNAueazRcny3jvmjz8MADQ37pBUpMZQS'),
(5, 19, 'DDDDDD', '2023-06-16', '1331', '32313123', 'maisrezkyoussef', '$2y$10$/qVHCM22IFjMMPT/MBZ7ReKw2ibuMqTrMWhV98Kbsq3s1R.jHlWP.'),
(6, 21, 'DDDDDD', '2023-06-16', '1331', '32313123', 'maisrezkyoussef', '$2y$10$e0gGSFm9PQrJCuhu/5y2F.n9hXLUm5GnTPsWEA2Gy2tUmrLwRH2Ku'),
(7, 28, 'DDDDDD', '2023-06-16', '1331', '32313123', 'maisrezkyoussef', '$2y$10$JWvNFNDILc0XTAm6mdCRG.HvMV3yzjLAR2.IIHmYqgdJ8o1/TkZxq'),
(8, 77, 'YSF', '2011-03-04', 'SALE', '321414234242', 'admin@youssef.kawakebdesigns.com', '$2y$10$GxpElNFTkmMytpjHoZP0UOVUCNkdZEQQ.Qtl/uhUOGNjxBcnHwA.a'),
(9, 3819318, 'TEST', '2023-06-17', 'SALE', '553535353', '3819318', '$2y$10$Dj6ZZRg0KJEpwd.UQROh/Os9Ly7zofBe7.90a.boahUMJmO.5/cda'),
(10, 2147483647, 'WILLIAM ', '1990-09-21', 'UK ROAD STREET', '3019301301', '39300319030', '$2y$10$dnbCeZYP29BYi.p.leKjz.ZF4E67lNd4kVM3Ptw1i2rywIL52u1NG'),
(11, 2147483647, 'JHONY', '1989-09-09', 'UKW', '0183901391', '39300319030', '$2y$10$8QnWLs7ATZpB22SjngKv/O47lEoOawA7SfjGcUAIeZzNjw.boRKhW'),
(12, 3131313, 'TEST', '2023-06-15', 'TEST', '32424242', '39300319030', '$2y$10$5aipdfSAUOvgH2CBbkZyg.5.XWxCpJOPlO/X7UcSyTrA8hh7EZ.6C'),
(13, 656565, 'HFHFH', '2023-06-09', 'FHFHFH', '66565', '656565', '$2y$10$Knyx0jtEMRo4.bc2ePOlIee/wk3GB24Q1TC5cKiB/uktDdYqFemIC'),
(14, 999999, 'UIUIU', '2023-06-17', 'IUIU', '78878', '999999', '$2y$10$UiYXaDbMh/RIUbSFCouF9.m6NzOvUGgO0yxD3cijmc/Xxfm6Xc7tC'),
(15, 4242, '4242', '2023-06-11', '2424', '42424242', '3434344343', '$2y$10$Y1Vovwkn6nLGkEqFLtFnleEg2xRiVRMXskw0mURdBbNQGF.BHVe9W'),
(16, 424242, 'SFFSFS', '2023-06-09', 'ZRZRZ', '3424242', '3424242', '$2y$10$X85f1GKzh1TD7XVVXBqr1u1QkCTJuVPlkFbgRC4OvBifbRjUwCvti'),
(17, 9999, 'OOOOOOOOO', '2023-06-13', 'OOOOOOO', '99999999999999999', '99999999999999999', '$2y$10$yp7A/wFUf7z6OVIHBSGGY.2IMoaP0qFvF6GEzBPSfU/7Dhtwu7AXy'),
(18, 79999, 'LJLJLJL', '2023-06-15', 'LJLJL', '98989898', '98989898', '$2y$10$iFYX4h34ISflvTpbouAeTOOFurf6qI3R/IzvgUP.Rf7QBexXqwC9u'),
(19, 31313131, 'RRRR', '2023-06-21', 'DDD', '32323232', '32323232Z', '$2y$10$OGYTsnQpRv1AJDRKMobBs.6Egm4xWSOvaYONZGBP45O6/PtbMYBmi'),
(20, 2147483647, 'ZEAEA', '2023-06-09', 'EAEA', '424242', '31313131', '$2y$10$gVs/9AC1iMBgw7dwlddUf.rvpNVmEVItTwlFcpZL83Iym39OOO3kW'),
(21, 1331313222, '1331313222', '2023-06-16', 'D', '1331313222', '1331313222', '$2y$10$C0hDqUnqYv16PrmI75LI/O5NdL22ab1rK7zD5Qk/1Bum43Zenwszq'),
(22, 8891091, 'ZAKARIA', '1990-09-21', 'JJJ', '8891091', '8891091', '$2y$10$PUhEEHbNL2bNseQPoiaX6.3MDwtfnd3yA49S8uizlepe0M8C1YgZ2'),
(23, 2233311, 'Youssef', '2023-06-23', 'test', '3323232323', '2233311', '$2y$10$EUbfuqGh0vPDFwPhdsajIe/8Bwu30Z5Y8RLHH8rhDKkKm1joe5cxy');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `phone`, `username`, `password`, `role`) VALUES
(1, 'Zaka', 'farouk', '9313810', 'Zaka31', '$2y$10$QyMXOhiYgKiPCYakmXxoY.OLhTuunkvCPjf4QFg3ECBamqNhM2a8K', 'doctor'),
(2, 'John', 'Doe', '123456789', 'johndoe', '$2y$10$QyMXOhiYgKiPCYakmXxoY.OLhTuunkvCPjf4QFg3ECBamqNhM2a8K', 'staff'),
(3, 'WILLAM', 'SMITH', '03910313', 'DA212121', '$2y$10$Qsu0uMIvVID6kszWVBJ3kelpUcJvIzV0tGZA4EdOIB9QKM9FC98GS', 'doctor'),
(4, 'will', 'smith', '03810318', 'smith222', '$2y$10$KEVASziMOsLbNPxmhXPjRuF7jeTUnt1TmMnXF.0h3UvQuW9Y5yHeO', 'doctor'),
(5, 'Youssef', 'Trichi', '02830381031', 'Youssef22', '$2y$10$BU4UqT06X5rpV2tfDEnfQ.vWXTZAgMqvxhzryLZ6OBCiClvquzXce', 'doctor'),
(6, 'YOUSSEF', 'TRICHI', '1832392832', 'YOUSSEF', '$2y$10$GTNus2J4Vdy/GY2MDA/a9eYpxubtuzKsNSHJtlhAvjc3kT891MwfW', 'doctor'),
(7, 'zakaria', 'farouki', '90131031931', '90131031931', '$2y$10$zZLRzyzF6w9FKbnpA9ywuem4UD57uWAbQ5VveG3O5xuEr8RWJXxh.', 'doctor'),
(8, 'youssef', 'trichi', '1030139103', '1030139103', '$2y$10$PlsBmWY/BBu4IWi8Pzn3r.XN1878VlXBX5NdxPLB0orpaoIW0PgMW', 'staff'),
(9, 'koko', 'koko', '93013901931', '93013901931', '$2y$10$7fZ9y6ZlZv9YkCHqTVC3RuxIVGc7zFzo3QV7TAFbWMi6eoyiY7LCS', 'staff'),
(10, 'FZFZ', 'RZRZRZRZRZ', '4343434343', '4343434343', '$2y$10$ukEB3tv1hwMgMRljZurJHeYa0ww/WzAf.Eh05nOOOCoDnd8PcBQYu', 'staff'),
(11, 'eaeaea', 'eaeaea', '1313131', '1313131', '$2y$10$6jvQdD8Be0Ein2TO1KRMl.7ES0eku.hZuRndMktPa0qqxi5D/54XW', 'staff'),
(12, 'zazaza', 'zazaza', '13131312', '13131312', '$2y$10$GwzItvk19bfLNBOFWFOb0e57WeR63vlBbHsAy6E1TBamVnGwnpvYu', 'doctor'),
(13, 'EAEAEA', 'EAEAEA', '342421141', '342421141', '$2y$10$/dWFaNuU2CaZYNVxCSqC.uRHMBI4QMQuL8OVp.HDTpIU2UbKmqcPK', 'staff'),
(14, 'EAEA', 'EAEAE', '424242424', '424242424', '$2y$10$2nOTZdOD8/4v5YFjI2V8v.TY.lkEWsllooj0AxwVmDM0pX8JTYdbW', 'doctor'),
(15, 'EAEAE', 'EAEAEAE', 'EAEAEA', '4242424244444', '$2y$10$kBiKLeF0vq.eATOHZvZP1eVGPyGirTjQzWc18nL4wCJTcLqTL9tm.', 'staff'),
(16, 'KIKA', 'OKIP', '090139131391', 'KIKA', '$2y$10$Hu6FRi7rmWIWFjhiK5COVOVAWD95fVOb65kLlkPvd99d0QgVuT5Qy', 'doctor'),
(17, 'AR', 'DA', 'EAEA', 'KIKAEAEA', '$2y$10$ZHxzUfP3zuMV245Hg6OvwOlWfSu9aK/CTLXdscZM2Gmwfj1tAz8rK', 'staff'),
(18, 'Youssef', 'far', '2222222', 'Youssef2233', '$2y$10$ZwBFSJrTCDSK/NWPLeZ20eSUhPFQj5PqZA1iRpdZtwwkMXeSszGFG', 'staff'),
(19, 'HAMID', 'IKO', '98392328', 'DOC2233', '$2y$10$M8L2SVpJgeaQANa36gMkhuC0Vq1Oxgc4t1q8aiYnH0w5xg/ynvCui', 'doctor');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
