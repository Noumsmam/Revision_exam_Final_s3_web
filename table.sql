DROP DATABASE IF EXISTS takalo;
CREATE DATABASE takalo;
USE takalo;

CREATE TABLE takalo_users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    mode VARCHAR(10) NOT NULL   -- ADMIN ou USER
);

CREATE TABLE takalo_categorie (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE takalo_objets(
    id_objet INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    prix DOUBLE,
    images VARCHAR(255),    --FORMAT: /img1/img2/img3/
    etat VARCHAR(50),   -- POUR LES PROPOSITIONS D' ECHANGE: V pour selectionné, R pour le contraire
    id_proprietaire INT,
    id_categorie INT
);

CREATE TABLE takalo_echange (
    id_echange INT AUTO_INCREMENT PRIMARY KEY,
    id_objet1 INT,
    id_objet2 INT,
    id_user1 INT,
    id_user2 INT,
    date_echange DATE
);

CREATE TABLE takalo_histobjet (
    id_histobjet INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    id_user INT,
    date_ajout DATE
);
