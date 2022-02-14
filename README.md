Es wurde eine MySQL-Tabelle erstellt und diese mit PDO als Schnittstelle im HTML-Code abgefragt.

Es wurde ein Apache-Server über XAMPP eingebunden und die MySQL-Tabelle mit phpAdmin verwaltet.
Das soll als anfängliches Beispiel dienen und in naher Zukunft eventuell erweitert werden.
Die Tabelle im MySQL Server wurde so angelegt:

CREATE TABLE 'personenTest' (
  'personenID' INTEGER PRIMARY KEY,
  'nachname' TEXT NOT NULL,
  'vorname' TEXT NOT NULL,
  'stadt' TEXT NOT NULL,
  'plz' integer
  );

INSERT INTO personenTest(personenID, Nachname, Vorname, Stadt, PLZ) VALUES(122, "Hinz", "Adam", "Hamburg", 22335);
INSERT INTO personenTest(personenID, Nachname, Vorname, Stadt, PLZ) VALUES(123, "Kunz", "Helga", "Hannover", 30457);


