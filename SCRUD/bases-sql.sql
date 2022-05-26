/* Creation de la base de données Magasin */
CREATE DATABASE IF NOT EXISTS magasin;

/* Utilisation de la BDD */
USE magasin;

/* Creation de la table client et article */
CREATE TABLE client(
    Id_Client INT NOT NULL,
    Nom VARCHAR(20) NOT NULL,
    Prenom VARCHAR(20) NOT NULL,
    Adresse VARCHAR(100) NOT NULL,
    Ville VARCHAR(25) NOT NULL,
    Age INT(2) NOT NULL,
    Mail VARCHAR(25) NOT NULL,
    PRIMARY KEY(Id_Client)
);

CREATE TABLE article(
    Id_Article INT NOT NULL,
    Designation VARCHAR(20) NOT NULL,
    Prix_Unitaire FLOAT(6) NOT NULL,
    Catégorie VARCHAR(25) NOT NULL,
    PRIMARY KEY(Id_Article)
);

/* Insertion des données dans la table client et article */

INSERT INTO client VALUES(1,'Python','Jonathan','25 rue georgejoune','Archèche',23,'python@gmail.com');
INSERT INTO article VALUES(100,'Resistance',0.5,'Passif');