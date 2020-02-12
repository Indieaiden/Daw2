CREATE USER 'manager'@'localhost' IDENTIFIED BY 'Nohay2sin3';
GRANT INSERT ON dwes.salario TO manager@localhost;
GRANT UPDATE ON dwes.salario TO manager@localhost;
GRANT SELECT ON dwes.salario TO manager@localhost;
GRANT DELETE ON dwes.salario TO manager@localhost;
FLUSH PRIVILEGES;