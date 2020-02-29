use examen;
drop table if exists acceso;

CREATE TABLE `acceso` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL UNIQUE ,
  `apellidos` varchar(100) ,
  `clave` varchar(150),

  PRIMARY KEY (`idUsuario` )
) ;

insert into acceso (login, apellidos, clave) values ('pepe', 'ruiz ros', '$2y$10$HffBbZL1LFuhJ.s8FwTZQ.tpTLRevFqa2BtQ0TjkEuprJnYhW2pX.'),
('lola','lozano lis', '$2y$10$HffBbZL1LFuhJ.s8FwTZQ.tpTLRevFqa2BtQ0TjkEuprJnYhW2pX.');



drop table if exists evento;

CREATE TABLE `evento` (
  `idEvento` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) ,
  `nomEvento` varchar(50) NOT NULL,
  `descEvento` varchar(200),
  `fechaEvento` date ,
  `horaEvento` time ,
  `lugarEvento` varchar(50),

  PRIMARY KEY (`idEvento` )
) ;
