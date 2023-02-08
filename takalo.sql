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
    idobjet int,
    photo VARCHAR(10),
    estimation int,
    FOREIGN KEY(idobjet) REFERENCES objet(idobjet)
);


insert into user values (null, 'Jean Michel', 'jean');
insert into user values (null, 'Jeanne Amandine','jeanne');
insert into user values (null, 'Rabe Jaonea', 'rabe');
insert into user values (null, 'Rakoto Malala', 'rakoto');
insert into user values (null, 'John Stones', 'john');
insert into user values (null,'Jane Eyre', 'jane');
insert into user values (null, 'Francesco Fognini', 'francesco');
insert into user values (null, 'Sarah Oliveira', 'sarah');

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

insert into objet values(null, 'Chaussures à talons', 2,'Chaussures\C1');
insert into objet values(null, 'Chaussures homme', 2,'Chaussures\C2');
insert into objet values(null, 'Chaussures marrons homme ', 2,'Chaussures\C3');
insert into objet values(null, 'Basket blanches Nike', 2,'Chaussures\C4');
insert into objet values(null, 'bottes transparentes à talons', 2,'Chaussures\C5');
insert into objet values(null, 'Chaussures à talons roses', 2,'Chaussures\C6');
insert into objet values(null, 'Basket blanches', 2,'Chaussures\C7');
insert into objet values(null, 'Bottines noires', 2,'Chaussures\C8');
insert into objet values(null, 'Chaussures enfants', 2,'Chaussures\C9');

insert into objet values(null, 'Cravate bleue', 3,'Accessoires\A1');
insert into objet values(null, 'Montre noire', 3,'Accessoires\A2');
insert into objet values(null, 'Montre sautoir', 3,'Accessoires\A3');

insert into objet values(null, 'Lunettes 0,1', 4,'Lunettes\G1');
insert into objet values(null, 'Lunettes 0,2', 4,'Lunettes\G2');
insert into objet values(null, 'Lunettes monture grise', 4,'Lunettes\G3');

insert into objet values(null, 'The passion', 5,'Livres\L1');
insert into objet values(null, 'Your soul is a river', 5,'Livres\L2');
insert into objet values(null, 'The catcher in the rye', 5,'Livres\L3');
insert into objet values(null, 'The sorrows of young werther', 5,'Livres\L4');

insert into objet values(null, 'Aqua Allegora Guerlain', 6,'Parfum\P1');
insert into objet values(null, 'Queen', 6,'Parfum\P2');
insert into objet values(null, ' Guerlain Aqua Allegora', 6,'Parfum\P3');



























