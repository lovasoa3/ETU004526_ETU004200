create table exam_membre(
    id_membre int AUTO_INCREMENT primary key,
    nom varchar(200),
    date_naissance datetime not null,
    genre varchar(30) not null,
    email varchar(200) not null,
    ville varchar(100),
    mdp varchar(200) not null,
    image_profile varchar(200) not null
);
create table exam_categorie_object(
    id_categorie int AUTO_INCREMENT primary key,
    nom_categorie varchar(100) not null

);

create table exam_object(
    id_object int AUTO_INCREMENT primary key,
    nom_object varchar(100),
    idCategorie int,
    idMembre int,
    foreign key (idCategorie) references exam_categorie_object(id_categorie),
    foreign key (idMembre) references exam_membre(id_membre)
);
create table exam_image_object(
    id_image int AUTO_INCREMENT primary key,
    idObject int,
    nom_image varchar(200),
    foreign key (idObject) references exam_object(id_object)
);
create table exam_emprunt(
    id_emprunt int AUTO_INCREMENT primary key,
    idObject int ,
    idMembre int,
    date_emprunt datetime not null,
    date_retour datetime not null,
    foreign key (idObject) references exam_object(id_object),
    foreign key (idMembre) references exam_membre(id_membre)
);
INSERT INTO `exam_membre`(`nom`, `date_naissance`, `genre`, `email`, `ville`, `mdp`, `image_profile`) 
VALUES ('Alice','2000-05-12','femme','alice@gmail.com','antananarivo','1234','null'),
('Bob','1898-02-23','homme','bob@gmail.com','toamasina','1234','null'),
('claire','2001-05-11','femme','claire@gmail.com','fianarantsoa','4321','null'),
('davida','2007-03-18','homme','davida@gmail.com','mahajanga','4321','null');

INSERT INTO `exam_categorie_object`(`nom_categorie`)
 VALUES ('esthetique'),('bricolage'),('mecanique'),('cuisine');


INSERT INTO `exam_object`(`nom_object`, `idCategorie`, `idMembre`) VALUES
('Objet_1_1', 1, 1), ('Objet_1_2', 2, 1), ('Objet_1_3', 3, 1), ('Objet_1_4', 4, 1),
('Objet_1_5', 1, 1), ('Objet_1_6', 2, 1), ('Objet_1_7', 3, 1), ('Objet_1_8', 4, 1),
('Objet_1_9', 1, 1), ('Objet_1_10', 2, 1);

INSERT INTO `exam_object`(`nom_object`, `idCategorie`, `idMembre`) VALUES
('Objet_2_1', 3, 2), ('Objet_2_2', 4, 2), ('Objet_2_3', 1, 2), ('Objet_2_4', 2, 2),
('Objet_2_5', 3, 2), ('Objet_2_6', 4, 2), ('Objet_2_7', 1, 2), ('Objet_2_8', 2, 2),
('Objet_2_9', 3, 2), ('Objet_2_10', 4, 2);
INSERT INTO `exam_object`(`nom_object`, `idCategorie`, `idMembre`) VALUES
('Objet_3_1', 1, 3), ('Objet_3_2', 2, 3), ('Objet_3_3', 3, 3), ('Objet_3_4', 4, 3),
('Objet_3_5', 1, 3), ('Objet_3_6', 2, 3), ('Objet_3_7', 3, 3), ('Objet_3_8', 4, 3),
('Objet_3_9', 1, 3), ('Objet_3_10', 2, 3);

INSERT INTO `exam_object`(`nom_object`, `idCategorie`, `idMembre`) VALUES
('Objet_4_1', 3, 4), ('Objet_4_2', 4, 4), ('Objet_4_3', 1, 4), ('Objet_4_4', 2, 4),
('Objet_4_5', 3, 4), ('Objet_4_6', 4, 4), ('Objet_4_7', 1, 4), ('Objet_4_8', 2, 4),
('Objet_4_9', 3, 4), ('Objet_4_10', 4, 4);


INSERT INTO `exam_emprunt`( `idObject`, `idMembre`, `date_emprunt`, `date_retour`) VALUES
(1, 2, '2025-07-05', '2025-07-12'),
(2, 3, '2025-07-06', '2025-07-13'),
(3, 1, '2025-07-07', '2025-07-14'),
(4, 4, '2025-07-08', '2025-07-15'),
(5, 2, '2025-07-09', '2025-07-16'),
(6, 3, '2025-07-09', '2025-07-16'),
(7, 1, '2025-07-10', '2025-07-17'),
(8, 4, '2025-07-10', '2025-07-17'),
(9, 2, '2025-07-11', '2025-07-18'),
(10, 3, '2025-07-11', '2025-07-18');


SELECT 
    exam_menbre.nom, 
    exam_object.nom_object, 
    exam_emprunt.date_emprunt, 
    exam_emprunt.date_retour
FROM exam_emprunt
JOIN exam_object 
    ON exam_object.id_object = exam_emprunt.idObject
JOIN exam_menbre 
    ON exam_menbre.id_membre = exam_emprunt.idMembre
WHERE exam_emprunt.date_retour > NOW();
