SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- DROP TABLE IF EXISTS acteurs;
-- DROP TABLE IF EXISTS classification;
-- DROP TABLE IF EXISTS films;
-- DROP TABLE IF EXISTS genres;
-- DROP TABLE IF EXISTS individus;



CREATE TABLE IF NOT EXISTS acteurs (
  ref_code_film int(11),
  ref_code_acteur int(11)
);



CREATE TABLE IF NOT EXISTS classification (
  ref_code_film int(11),
  ref_code_genre int(11) 
);



CREATE TABLE IF NOT EXISTS films (
  code_film int(11),
  titre_original varchar(50),
  titre_francais varchar(50),
  pays varchar(20),
  date1 int(11),
  duree int(11),
  couleur varchar(10),
  realisateur int(11),
  image varchar(500)
);


CREATE TABLE IF NOT EXISTS genres (
  code_genre int(11),
  nom_genre varchar(50)
);



CREATE TABLE IF NOT EXISTS individus (
  code_indiv int(11),
  nom varchar(20),
  prenom varchar(20),
  nationalite varchar(20),
  date_naiss int(11),
  date_mort int(11)
);


ALTER TABLE films ADD PRIMARY KEY (code_film);
ALTER TABLE genres ADD PRIMARY KEY (code_genre);
ALTER TABLE individus ADD PRIMARY KEY (code_indiv);

ALTER TABLE films ADD FOREIGN KEY (realisateur) REFERENCES individus (code_indiv);

ALTER TABLE classification ADD FOREIGN KEY (ref_code_film) REFERENCES films (code_film);
ALTER TABLE classification ADD FOREIGN KEY (ref_code_genre) REFERENCES genres (code_genre);

ALTER TABLE acteurs ADD FOREIGN KEY (ref_code_film) REFERENCES films (code_film);
ALTER TABLE acteurs ADD FOREIGN KEY (ref_code_acteur) REFERENCES individus (code_indiv);
