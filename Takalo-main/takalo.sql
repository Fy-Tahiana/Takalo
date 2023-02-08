create database takalo;
use takalo;

create table user
(
    idUser int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(30),
    mail VARCHAR(60),
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
    idUser int,
    photo VARCHAR(10),
    estimation int,
    FOREIGN KEY(idUser) REFERENCES objet(idUser)
);

create table demande 
(
    idDemande int PRIMARY KEY AUTO_INCREMENT,
    dateDemande datetime,
    idUser int,
    idobjet int,
    FOREIGN KEY(idUser) REFERENCES user(idUser),
    FOREIGN KEY(idobjet) REFERENCES objet(idobjet)
);


insert into user values (null, 'Jean', 'Michel','jean@gmail.com', 'jean');
insert into user values (null, 'Jeanne', 'Amandine','jeanne@gmail.com','jeanne');
insert into user values (null, 'Rabe ', 'Jaona','Jaona@gmail.com', 'rabe');
insert into user values (null, 'Rakoto', 'Malala','Rakoto@gmail.com', 'rakoto');
insert into user values (null, 'John', 'Stones','John@gmail.com', 'john');
insert into user values (null,'Jane','Eyre','Jane@gmail.com','jane');
insert into user values (null, 'Francesco','Fognini','Francesco@gmail.com', 'francesco');
insert into user values (null, 'Sarah' ,'Oliveira','Sarah@gmail.com', 'sarah');

insert into categorie values(null, 'Vetements');
insert into categorie values(null, 'Chaussures');
insert into categorie values(null, 'Accessoires');
insert into categorie values(null, 'Lunettes');
insert into categorie values(null, 'Livres');
insert into categorie values(null, 'Parfums');

insert into objet values(null, 'Sweet-shirt noir', 1,'Vetements\V1',25);
insert into objet values(null, 'Manteau beige', 1,'Vetements\V2',47);
insert into objet values(null, 'Manteau royaute', 1,'Vetements\V3',78);
insert into objet values(null, 'Robe et chemise', 1,'Vetements\V4',43);
insert into objet values(null, 'Ensemble blazer short rouge', 1,'Vetements\V4',49);
insert into objet values(null, 'Ensemble blazer pantalon', 1,'Vetements\V5',56);
insert into objet values(null, 'T-shirt noir', 1,'Vetements\V7',12);
insert into objet values(null, 'Robe jaune', 1,'Vetements\V8 ',66);

insert into objet values(null, 'Chaussures à talons', 2,'Chaussures\C1',34);
insert into objet values(null, 'Chaussures homme', 2,'Chaussures\C2',38);
insert into objet values(null, 'Chaussures marrons homme ', 2,'Chaussures\C3',42);
insert into objet values(null, 'Basket blanches Nike', 2,'Chaussures\C4',67);
insert into objet values(null, 'bottes transparentes à talons', 2,'Chaussures\C5',77);
insert into objet values(null, 'Chaussures à talons roses', 2,'Chaussures\C6',43);
insert into objet values(null, 'Basket blanches', 2,'Chaussures\C7',50);
insert into objet values(null, 'Bottines noires', 2,'Chaussures\C8',34);
insert into objet values(null, 'Chaussures enfants', 2,'Chaussures\C9',22);

insert into objet values(null, 'Cravate bleue', 3,'Accessoires\A1',20);
insert into objet values(null, 'Montre noire', 3,'Accessoires\A2',44);
insert into objet values(null, 'Montre sautoir', 3,'Accessoires\A3'?42);

insert into objet values(null, 'Lunettes 0,1', 4,'Lunettes\G1',45);
insert into objet values(null, 'Lunettes 0,2', 4,'Lunettes\G2',37);
insert into objet values(null, 'Lunettes monture grise', 4,'Lunettes\G3',35);

insert into objet values(null, 'The passion', 5,'Livres\L1',15);
insert into objet values(null, 'Your soul is a river', 5,'Livres\L2',17);
insert into objet values(null, 'The catcher in the rye', 5,'Livres\L3',20);
insert into objet values(null, 'The sorrows of young werther', 5,'Livres\L4',19);

insert into objet values(null, 'Aqua Allegora Guerlain', 6,'Parfum\P1',70);
insert into objet values(null, 'Queen', 6,'Parfum\P2',64);
insert into objet values(null, ' Guerlain Aqua Allegora', 6,'Parfum\P3',80);



























