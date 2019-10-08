INSERT INTO 'films' ('code_film', 'titre_original', 'titre_francais', 'pays', 'date', 'duree', 'couleur', 'realisateur', 'image') VALUES
    (001(193), 'One, Two, Three                                   ', 'Un, deux, trois                                   ', 'USA                 ', 1961, 115, 'NB        ', 010, '1_2_3.gif           '),
    (002(190), 'Caro diario                                       ', 'Journal intime                                    ', 'Italie              ', 1994, 100, 'couleur   ', 394, 'journal_intime.gif  '),
    (003(328), 'Little Big Man                                    ', 'Little Big Man                                    ', 'USA                 ', 1970, 139, 'couleur   ', 607, 'little_big_man.jpg  '),
    (004(248), 'Blind Husbands                                    ', 'Maris aveugles                                    ', 'USA                 ', 1919, 068, 'NB        ', 279, 'maris_aveugles.jpg  '),
    (005(530), 'E.T.: The Extra-Terrestrial                       ', 'E.T. : L''Extra-Terrestre                         ', 'USA                 ', 1982, 115, 'couleur   ', 203, 'E_T.jpeg            '),
    (006(202), 'Rio Bravo                                         ', 'Rio Bravo                                         ', 'USA                 ', 1959, 141, 'couleur   ', 112, 'rio_bravo.gif       '),
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