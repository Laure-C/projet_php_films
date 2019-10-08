INSERT INTO 'films' ('code_film', 'titre_original', 'titre_francais', 'pays', 'date', 'duree', 'couleur', 'realisateur', 'image') VALUES
    (193, 'One, Two, Three                                   ', 'Un, deux, trois                                   ', 'USA                 ', 1961, 115, 'NB        ', 010, '1_2_3.gif           '),
    (190, 'Caro diario                                       ', 'Journal intime                                    ', 'Italie              ', 1994, 100, 'couleur   ', 394, 'journal_intime.gif  '),
    (328, 'Little Big Man                                    ', 'Little Big Man                                    ', 'USA                 ', 1970, 139, 'couleur   ', 607, 'little_big_man.jpg  '),
    (248, 'Blind Husbands                                    ', 'Maris aveugles                                    ', 'USA                 ', 1919, 068, 'NB        ', 279, 'maris_aveugles.jpg  '),
    (530, 'E.T.: The Extra-Terrestrial                       ', 'E.T. : L''Extra-Terrestre                         ', 'USA                 ', 1982, 115, 'couleur   ', 203, 'E_T.jpeg            '),
    (202, 'Rio Bravo                                         ', 'Rio Bravo                                         ', 'USA                 ', 1959, 141, 'couleur   ', 112, 'rio_bravo.gif       '),
;

INSERT INTO 'individus' ('code_indiv', 'nom', 'prenom', 'nationalite', 'date_naiss', 'date_mort') VALUES
    (400, 'Cagney              ', 'James               ', 'américaine          ', 1899, 1986),
    (394, 'Moretti             ', 'Nanni               ', 'italienne           ', 1953, 0),
    (608, 'Hoffman             ', 'Dustin              ', 'américaine          ', 1937, 0),
    (370, 'Dunaway             ', 'Faye                ', 'américaine          ', 1941, 0),
    (279, 'von Stroheim        ', 'Erich               ', 'autrichienne        ', 1885, 1957),
    (417, 'Dickinson           ', 'Angie               ', 'américaine          ', 1931, 0),
    (418, 'Nelson              ', 'Ricky               ', 'américaine          ', 1940, 0),
    (419, 'Martin              ', 'Dean                ', 'américaine          ', 1917, 1995),
    (402, 'Wayne               ', 'John                ', 'américaine          ', 1907, 1979),
    (563, 'Brennan             ', 'Walter              ', 'américaine          ', 1894, 1974),
;

INSERT INTO 'acteurs' ('ref_code_film', 'ref_code_acteur') VALUES
    (193, 400),

    (190, 394),

    (328, 608),
    (328, 370),

    (248, 279),

    (202, 417),
    (202, 418),
    (202, 419),
    (202, 402),
    (202, 563),
;


INSERT INTO 'genres' ('code_genre', 'nom_genre') VALUES
    (26, 'à l''antique                                       '),
    (4, 'c''était demain                                    '),
    (5, 'pas drôle mais beau                               '),
    (6, 'pauvre espèce humaine                             '),
    (10, 'jeu dans le jeu                                   '),
    (15, 'poésie en image                                   '),
    (11, 'en France profonde                                '),
    (7, 'du rire aux larmes (et retour)                    '),
    (28, 'docu                                              '),
    (17, 'les chocottes à zéro                              '),
    (19, 'la parole est d''or                                '),
    (20, 'Paris                                             '),
    (14, 'culte ou my(s)tique                               '),
    (13, 'pour petits et grands enfants                     '),
    (9, 'en avant la musique                               '),
    (23, 'Los Angeles & Hollywood                           '),
    (3, 'cadavre(s) dans le(s) placard(s)                  '),
    (21, 'vive la (critique) sociale !                      '),
    (22, 'épique pas toc                                    '),
    (27, 'du Moyen-Age à 1914                               '),
    (12, 'New-York                                          '),
    (1, 'heurs et malheurs à deux                          '),
    (30, 'Bollywooderie                                     '),
    (16, 'conte de fées relooké                             '),
    (25, 'entre Berlin et Moscou                            '),
    (8, 'portrait d''époque (après 1914)                    '),
    (2, 'carrément à l''ouest                               '),
    (29, 'vers le soleil levant                             '),
    (24, 'perle de nanard                                   '),
;

INSERT INTO 'classification' ('ref_code_film', 'ref_code_genre') VALUES
    (193, 7),
    (190, 7),
    (328, 2),
    (248, 6),
    (530, 16),
    (202, 2),
;