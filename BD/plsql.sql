-- trigger insertIndividu

DROP TRIGGER IF EXISTS insertIndividu;

DELIMITER |

CREATE TRIGGER insertIndividu BEFORE INSERT ON individus FOR EACH ROW
BEGIN
	IF new.code_indiv < 0 THEN
		SET new.code_indiv = (SELECT max(code_indiv) FROM individus)+1;
	END IF;
END|

DELIMITER ;

-- trigger insertFIlm

DROP TRIGGER IF EXISTS insertFilm;

DELIMITER |

CREATE TRIGGER insertFilm BEFORE INSERT ON films FOR EACH ROW
BEGIN
	IF new.code_film < 0 THEN
		SET new.code_film = (SELECT max(code_film) FROM films)+1;
	END IF;
END|

DELIMITER ;

-- trigger insertGenre

DROP TRIGGER IF EXISTS insertGenre;

DELIMITER |

CREATE TRIGGER insertGenre BEFORE INSERT ON genres FOR EACH ROW
BEGIN
	IF new.code_genre < 0 THEN
		SET new.code_genre = (SELECT max(code_genre) FROM genres)+1;
	END IF;
END|

DELIMITER ;