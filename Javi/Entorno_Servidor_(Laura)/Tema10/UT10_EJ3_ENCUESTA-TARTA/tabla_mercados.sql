CREATE DATABASE mercados;
USE mercados;
CREATE TABLE votos ( votos1 integer, votos2 integer);
insert into votos values(0,0);

CREATE USER 'encuesta'@'localhost' IDENTIFIED BY '1234';

GRANT SELECT, UPDATE ON mercados.votos TO 'encuesta'@'localhost';
