use accidentsdb;
DROP procedure IF EXISTS addLocation;
DROP procedure IF EXISTS addDate;
DROP procedure IF EXISTS addDaytoTable;
DROP procedure IF EXISTS addWarunkiPogodowe;
DROP procedure IF EXISTS addGodzina;
DROP procedure IF EXISTS addManewr;
DROP procedure IF EXISTS addGrupaWiekowa;
DROP procedure IF EXISTS addUsterka;


DELIMITER //
CREATE Procedure addLocation (count INT, location  VARCHAR(100) )

BEGIN

   DECLARE i INT;

   SET i = 1;

   label1: WHILE i <= count DO
	insert INTO wypadek(lokalizacja) values(location);
     SET i = i + 1;
   END WHILE label1;
END; //

DELIMITER ;

DELIMITER //
CREATE Procedure addDate (count INT, dat date)

BEGIN

   DECLARE i INT;

   SET i = 1;

   label1: WHILE i <= count DO
	insert INTO wypadek(data) values(dat);
     SET i = i + 1;
   END WHILE label1;
END; //

DELIMITER ;

DELIMITER //
CREATE Procedure addDaytoTable (count INT, day VARCHAR(100))

BEGIN

   DECLARE i INT;

   SET i = 1;

   label1: WHILE i <= count DO
	insert INTO wypadek(dzienTygodnia) values(day);
     SET i = i + 1;
   END WHILE label1;
END; //

DELIMITER ;

DELIMITER //
CREATE Procedure addWarunkiPogodowe (count INT, warunkiIndex INT)

BEGIN

   DECLARE i INT;

   SET i = 1;

   label1: WHILE i <= count DO
	insert INTO wypadek(idWarunkiPogodowe) values(warunkiIndex);
     SET i = i + 1;
   END WHILE label1;
END; //

DELIMITER ;

DELIMITER //
CREATE Procedure addGodzina (count INT, godzina INT)

BEGIN

   DECLARE i INT;

   SET i = 1;

   label1: WHILE i <= count DO
	insert INTO wypadek(godzina) values(godzina);
     SET i = i + 1;
   END WHILE label1;
END; //

DELIMITER ;

DELIMITER //
CREATE Procedure addManewr (count INT, man INT)

BEGIN

   DECLARE i INT;

   SET i = 1;

   label1: WHILE i <= count DO
	insert INTO wypadek(idManewr) values(man);
     SET i = i + 1;
   END WHILE label1;
END; //

DELIMITER ;

DELIMITER //
CREATE Procedure addGrupaWiekowa (count INT, grupa  VARCHAR(100))

BEGIN

   DECLARE i INT;

   SET i = 1;

   label1: WHILE i <= count DO
	insert INTO wypadek(grupaWieokowaSprawcy) values(grupa);
     SET i = i + 1;
   END WHILE label1;
END; //

DELIMITER ;


DELIMITER //
CREATE Procedure addUsterka (count INT, ust  VARCHAR(100))

BEGIN

   DECLARE i INT;

   SET i = 1;

   label1: WHILE i <= count DO
	insert INTO wypadek(usterka) values(ust);
     SET i = i + 1;
   END WHILE label1;
END; //

DELIMITER ;