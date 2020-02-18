CREATE TABLE movimientos (
  mo_ncu VARCHAR(10) NOT NULL,
  mo_fec DATE NOT NULL,
  mo_hor VARCHAR(6) NOT NULL,
  mo_des VARCHAR(80) NOT NULL,
  mo_imp INT(8) NOT NULL,
  PRIMARY KEY (mo_ncu, mo_fec, mo_hor)
) ENGINE = MYISAM;
