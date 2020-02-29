CREATE USER 'gestor'@'localhost' IDENTIFIED BY 'Nohay2sin3';
GRANT INSERT ON examen.acceso TO gestor@localhost;
GRANT SELECT ON examen.acceso TO gestor@localhost;
GRANT INSERT ON examen.evento TO gestor@localhost;
GRANT SELECT ON examen.evento TO gestor@localhost;
FLUSH PRIVILEGES;
