
CREATE DATABASE IF NOT EXISTS base_usuarios;
CREATE TABLE IF NOT EXISTS base_usuarios.usuario (
  id INT(11) NOT NULL AUTO_INCREMENT,
  primer_nombre VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  contraseña VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO base_usuarios.usuario( primer_nombre, email, contraseña) VALUES ('Pepe','pepe@gmail.com','12345678');


