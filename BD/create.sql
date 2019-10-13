SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS acteurs;
DROP TABLE IF EXISTS classification;
DROP TABLE IF EXISTS films;
DROP TABLE IF EXISTS genres;
DROP TABLE IF EXISTS individus;



CREATE TABLE IF NOT EXISTS acteurs (
  ref_code_film int(11) DEFAULT NULL,
  ref_code_acteur int(11) DEFAULT NULL
);



CREATE TABLE IF NOT EXISTS classification (
  ref_code_film int(11) DEFAULT NULL,
  ref_code_genre int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS films (
  code_film int(11) NOT NULL,
  titre_original varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  titre_francais varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  pays varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  date1 int(11) DEFAULT NULL,
  duree int(11) DEFAULT NULL,
  couleur varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  realisateur int(11) DEFAULT NULL,
  image varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=569 DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS genres (
  code_genre int(11) NOT NULL,
  nom_genre varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;



CREATE TABLE IF NOT EXISTS individus (
  code_indiv int(11) NOT NULL,
  nom varchar(20) DEFAULT NULL,
  prenom varchar(20) DEFAULT NULL,
  nationalite varchar(20) DEFAULT NULL,
  date_naiss int(11) DEFAULT NULL,
  date_mort int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=892 DEFAULT CHARSET=utf8;


ALTER TABLE films
  ADD PRIMARY KEY (code_film);
ALTER TABLE films
  MODIFY code_film int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=569;


ALTER TABLE genres
  ADD PRIMARY KEY (code_genre);

ALTER TABLE genres
  MODIFY code_genre int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;

ALTER TABLE individus
  ADD PRIMARY KEY (code_indiv);

ALTER TABLE individus
  MODIFY code_indiv int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=892;
