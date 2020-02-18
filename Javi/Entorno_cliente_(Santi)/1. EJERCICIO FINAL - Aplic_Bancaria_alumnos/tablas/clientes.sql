drop table if exists clientes;

CREATE TABLE clientes (
  cl_dni VARCHAR(9) PRIMARY KEY,
  cl_nom VARCHAR(50) NOT NULL,
  cl_dir VARCHAR(60) NOT NULL,
  cl_tel VARCHAR(9) NOT NULL,
  cl_ema VARCHAR(65) NOT NULL,
  cl_fna DATE,
  cl_fcl DATE NOT NULL,
  cl_ncu TINYINT(2) NOT NULL,
  cl_sal INT(8) NOT NULL,
) ENGINE = MYISAM;
