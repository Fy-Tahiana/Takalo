create database takalo;
use takalo;

create table user
(
    idUser int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    mdp VARCHAR(30)
);

create table categorie
(
    idCategorie int AUTO_INCREMENT PRIMARY KEY,
    nomCategorie VARCHAR(30)
);

create table objet
(
    idObjet int AUTO_INCREMENT PRIMARY KEY,
    nomObjet VARCHAR(30),
    idCategorie int,
    FOREIGN KEY(idCategorie) REFERENCES categorie(idCategorie)
);

create table information
(
    idInformation int AUTO_INCREMENT PRIMARY KEY,
    descriptions VARCHAR(70),
    photo VARCHAR(30),
    idObjet int,
    FOREIGN KEY(idObjet) REFERENCES objet(idObjet)
);