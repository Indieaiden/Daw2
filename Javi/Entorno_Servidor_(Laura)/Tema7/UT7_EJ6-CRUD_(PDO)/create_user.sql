CREATE USER manager@localhost IDENTIFIED BY Nohay2sin3;
GRANT CREATE ON test.aficiones TO manager@localhost;
GRANT UPDATE ON test.aficiones TO manager@localhost;
GRANT SELECT ON test.aficiones TO manager@localhost;
GRANT DELETE ON test.aficiones TO manager@localhost;
FLUSH PRIVILEGES;