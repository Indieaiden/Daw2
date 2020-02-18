
drop table if exists productos;

CREATE TABLE `productos` (
  `idFabricante` char(3) NOT NULL ,
  `idProducto` varchar(5) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `existencias` int NOT NULL,
  PRIMARY KEY (`idFabricante`,`idProducto` )
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into productos (idFabricante, idProducto, descripcion, precio, existencias)
values ('ACI','4100Y','Extractor', 2.750 ,25),
('QSA','XK47','Reductor',355, 38),
('BIC','41672','Plate',180, 0),
('IMM','779C','Riostra 2-Tm',1.875, 9),
('ACI','41003','Artículo Tipo 3',107, 207),
('ACI','41004','Artículo Tipo 4',117 ,139),
('BIC','41003','Manivela',652, 3),
('IMM','887P','Perno Riostra',250, 24),
('QSA','XK48','Reductor',134 ,203),
('REI','2A44L','Bisagra Izqda.',4.500 ,12),
('FEA','112','Cubierta', 148, 115),
('IMM','887H','Soporte Riostra', 54, 223),
('BIC','41089','Reten', 225 ,78),
('ACI','41001','Artículo Tipo 1', 55, 277),
('IMM','775C','Riostra 1-Tm', 1.425, 5),
('ACI','4100Z','Montador', 2.500, 28),
('QSA','XK48A','Reductor',117, 37),
('ACI','41002','Artículo Tipo 2', 76, 167),
('REI','2A44R','Bisagra Dcha.', 4.500, 12),
('IMM','773C','Riostra 1/2-Tm', 975, 28),
('ACI','4100X','Ajustador', 25, 37),
('FEA','114','Bancada Motor', 243, 15),
('IMM','887X','Retenedor Riostra', 475, 32),
('REI','2A44G','Pasador Bisagra', 350, 14);