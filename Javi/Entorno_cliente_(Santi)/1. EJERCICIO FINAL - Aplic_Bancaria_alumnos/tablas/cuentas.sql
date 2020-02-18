CREATE TABLE cuentas (
  cu_ncu VARCHAR(10) NOT NULL,
  cu_dn1 VARCHAR(9) NOT NULL,
  cu_dn2 VARCHAR(9),
  cu_sal INT(8) NOT NULL,
  PRIMARY KEY (cu_ncu),
  FOREIGN KEY (cu_dn1, cu_dn2) REFERENCES clientes(cl_dni, cl_dni)
) ENGINE = MYISAM;
