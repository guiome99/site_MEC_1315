-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2021 at 08:18 AM
-- Server version: 10.3.17-MariaDB
-- PHP Version: 7.2.24

DROP TABLE IF EXISTS Personnes;
DROP TABLE IF EXISTS Reservations;
DROP TABLE IF EXISTS Transaction_personnes;
DROP TABLE IF EXISTS Choix;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

SET character_set_client = utf8;
SET character_set_results = utf8;
SET character_set_connection = utf8;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--
-- Table structure for table Personnes
--

CREATE TABLE Personnes (
  idPersonne int(5) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  prenom varchar(25) NOT NULL,
  nom varchar(25) NOT NULL,
  courriel varchar(40) NOT NULL,
  tsxxx int(2) UNSIGNED NOT NULL,
  mdp varchar(8) NOT NULL
) ;

INSERT INTO Personnes VALUES(NULL, "Richard Phat The", "Nguyen", 
"richard-phat-the.nguyen@polymtl.ca","777","MEC1315");
INSERT INTO Personnes VALUES(NULL, "Luc", "Baron", 
"luc.baron.ca","778","Poly");
INSERT INTO Personnes VALUES(NULL, "Hassan", "Bensalah", 
"h.bensalah.ca","779","Robotique");
-- --------------------------------------------------------


CREATE TABLE Reservations (
  idReservation int(4) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  ref_Personne int(4) UNSIGNED NOT NULL,
  ref_Choix int(4) UNSIGNED NOT NULL,
  Quantite float NOT NULL,
  noperiode int(3) UNSIGNED NOT NULL,
  noSemaine int(3) UNSIGNED NOT NULL,
  dateTransaction date DEFAULT current_timestamp(),
  dateReservation date DEFAULT NULL,
  extraReservation1 float,
  extraReservation2 varchar(24)
);

INSERT INTO Reservations VALUES(NULL,1,1,1,10,1,NULL,NULL,NULL,NULL);
INSERT INTO Reservations VALUES(NULL,1,1,1,11,1,NULL,NULL,NULL,NULL);

CREATE TABLE Choix (
  idChoix int(3) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  intitule varchar(40) NOT NULL,
  ref_Tsxxx int(3) NOT NULL,
  valeur float NOT NULL DEFAULT 1,
  Description text DEFAULT NULL,
  extraChoix1 float,
  extraChoix2 varchar(24)
);

INSERT INTO Choix VALUES(NULL, "Consultation TS1", 207, 5, "Periode pour poser vos question sur le TS1",NULL,NULL);
INSERT INTO Choix VALUES(NULL, "Consultation TS2", 207, 5, "Periode pour poser vos question sur le TS2",NULL,NULL);
INSERT INTO Choix VALUES(NULL, "Consultation TD", 207, 5, "Periode pour poser vos question sur le TD",NULL,NULL);
INSERT INTO Choix VALUES(NULL, "Demo TS2", 207, 5, "Periode pour poser vos question sur le TD",NULL,NULL);
