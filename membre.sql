create table exam_menbre(
    id_membre int AUTO_INCREMENT primary key,
    nom varchar(200),
    date_naissance datetime not null,
    genre varchar(30) not null,
    email varchar(200) not null,
    ville varchar(100),
    mdp varchar(200) not null,
    image_profile varchar(200) not null
)
create table exam_categorie_object(
    id_categorie int AUTO_INCREMENT primary key,
    nom_categorie varchar(100) not null

)

create table exam_object(
    id_object int AUTO_INCREMENT primary key,
    nom_object varchar(100),
    idCategorie int,
    idMembre int,
    foreign key (idCategorie) references exam_categorie_object(id_categorie),
    foreign key (idMembre) references exam_categorie_object(id_membre)

)
create table exam_image_object(
    id_image int AUTO_INCREMENT primary key,
    idObject int,
    nom_image varchar(200),
    foreign key (idObject) references exam_object(id_object)
)
create table exam_emprunt(
    id_emprunt int AUTO_INCREMENT primary key,
    idObject int ,
    idMembre int,
    date_emprunt datetime not null,
    date_retour datetime not null,
    foreign key (idObject) references exam_object(id_object),
    foreign key (idMembre) references exam_categorie_object(id_membre)
)
INSERT INTO `exam_menbre`(`nom`, `date_naissance`, `genre`, `email`, `ville`, `mdp`, `image_profile`) 
VALUES ('Alice','2000-05-12','femme','alice@gmail.com','antananarivo','1234','null'),
('Bob','1898-02-23','homme','bob@gmail.com','toamasina','1234','null'),
('claire','2001-05-11','femme','claire@gmail.com','fianarantsoa','4321','null'),
('davida','2007-03-18','homme','davida@gmail.com','mahajanga','4321','null')

INSERT INTO `exam_categorie_object`(`nom_categorie`)
 VALUES ('esthetique'),('bricolage'),('mecanique'),('cuisine')