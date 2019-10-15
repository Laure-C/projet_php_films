-- tous les filtres
-- voir les maquettes
-- afficher toutes les infos d'un film


SELECT * FROM films;

-- tous les films triés par titre_francais
SELECT * FROM films ORDER BY titre_francais;
-- tous les films triés par titre_original
SELECT * FROM films ORDER BY titre_original;

--tous les films où le titre_français commence par la lettre A
SELECT * FROM films WHERE titre_francais LIKE "A%";

-- tous les films où le genre correspond à celui indiqué
SELECT * FROM films NATURAL JOIN classification NATURAL JOIN genres WHERE genres.nom_genre = "nom_du_genre";
-- tous les films où le genre correspond à l'un de ceux indiqués
SELECT * FROM films NATURAL JOIN classification NATURAL JOIN genres WHERE genres.nom_genre = "nom_du_genre1" OR genres.nom_genre = "nom_du_genre2";

-- tous les films en couleur
SELECT * FROM films WHERE couleur = "couleur";



-- tous les genres de film
SELECT * FROM genres;

-- toutes les informations d'un film selon code_film
SELECT * FROM films WHERE code_film = 1234567890;






-- INSERTS

-- ajouter un genre
INSERT INTO genres (nom_genre) VALUES
    (nom_du_genre)

-- ajouter un individu
INSERT INTO individus (nom, prenom, nationalite, date_naiss, date_mort) VALUES
    (nom, prenom, nationalite, date_naiss, date_mort)

-- ajouter un film
INSERT INTO films (titre_original, titre_francais, pays, date, duree, couleur, realisateur, image) VALUES
    (titre_original, titre_francais, pays, date, duree, couleur, realisateur, image)
