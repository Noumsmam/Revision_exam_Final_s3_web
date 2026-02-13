DROP DATABASE IF EXISTS takalo;
CREATE DATABASE takalo;
USE takalo;

DROP TABLE IF EXISTS takalo_users;
DROP TABLE IF EXISTS takalo_categorie;
DROP TABLE IF EXISTS takalo_objets;
DROP TABLE IF EXISTS takalo_echange;
DROP TABLE IF EXISTS takalo_histobjet;

CREATE TABLE takalo_users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    mode VARCHAR(10) NOT NULL   
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
    images VARCHAR(255),    
    etat VARCHAR(50),   
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
