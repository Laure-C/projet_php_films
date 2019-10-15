-- trigger insertIndividu

DROP TRIGGER IF EXISTS insertIndividu;

DELIMITER |

CREATE TRIGGER insertIndividu BEFORE INSERT ON individus FOR EACH ROW
BEGIN
	-- verif id
	IF new.idOb < 0 THEN
		SET new.idOb = (SELECT max(idOb) FROM OBJET)+1;
	END IF;
END|

DELIMITER ;