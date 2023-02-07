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

insert into user values (null, 'Jean Michel', 'jean');
insert into user values (null, 'Jeanne Amandine','jeanne');
insert into user values (null, 'Rabe Jaonea', 'rabe');
insert into user values (null, 'Rakoto Malala', 'rakoto');
insert into user values (null, 'John Stones', 'john');
insert into user values (null,'Jane Eyre', 'jane');
insert into user values (null, 'Francesco Fognini', 'francesco');
insert into user values (null, 'Sarah Oliveira', 'sarah');



