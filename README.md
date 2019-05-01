# simplenoticiaphp
Bueno esto fue un proyecto para una pesona que esta iniciando en el mundo de la programacion
Base de datos


-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 01, 2019 at 05:49 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `noticias`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `contenido` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `contenido`) VALUES
(10, '#Acto1DeMayoMisiones: Passalacqua anunció un “Procrear provincial”, ratificó las políticas para amortiguar la crisis nacional y exigió más equidad en la distribución de fondos federales', 'El gobernador anunció el programa “Construyo mi Casa” que ofrecerá financiamiento a través del Banco Macro para construir 1.500 viviendas a través de créditos UVA subsidiados por la Provincia. Está destinado a quienes ya posean un terreno. Desde mañana se podrá tramitar en el acceso al plan a través del Iprodha.'),
(11, 'Sorpresiva protesta obligó a la cancelación de los vuelos de cabotaje en el Aeropuerto de Buenos Aires', 'Al menos cuatro vuelos de Aerolíneas Argentinas y Austral fueron cancelados por una medida de fuerza sorpresiva de la Asociación Argentina de Aeronavegantes. Se trata de vuelos a Corrientes, Paraná, Tucumán y Mar del Plata.'),
(12, 'El fundador de Wikileaks Julian Assange fue condenado a un año de prisión', 'Un tribunal londinense falló en contra del fundador de WikiLeaks por violar en 2012 las condiciones de libertad condicional impuestas por la Justicia británica.'),
(13, '“Misiones, a través de sus políticas fiscales ordenadas, hace que salud siga siendo una prioridad”, dijo Martín Cesino', 'El diputado provincial destacó la labor del Gobernador Hugo Passalacqua en marco de la apertura de las sesiones en Legislatura provincial. “Estar cerca de la gente es lo que nos marca el camino”, manifestó. Además resaltó las políticas públicas implementadas en un tiempo “difícil y complejo”.'),
(35, 'amiraa', 'asdasdadasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
