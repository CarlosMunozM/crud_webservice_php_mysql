create database tabla_dinamica;
use tabla_dinamica;

create table personas(
	id int auto_increment,
	nombre varchar(50),
	apellido varchar(50),
	email varchar(50),
	telefono varchar(50),
	primary key(id) 
);

INSERT INTO personas VALUES (NULL,'Carlos','Muñoz','correo@hotmail.com','091234567');

DELIMITER //
CREATE PROCEDURE mostrar_personas2()
   BEGIN
	 SELECT * FROM personas;
   END //
   
-- CALL mostrar_personas();

DELIMITER //   
CREATE PROCEDURE insertar_persona (
	IN p_nombre VARCHAR(50), 
    IN p_apellido VARCHAR(50), 
    IN p_email VARCHAR(50), 
    IN p_telefono VARCHAR(50) )
   BEGIN
	 INSERT INTO personas VALUES (NULL, p_nombre, p_apellido, p_email, p_telefono);
   END //
   
-- CALL insertar_persona('Sonia','Pincay','sonia@gmail.com','0915281725');

DELIMITER //
CREATE PROCEDURE modificar_persona(
	IN p_id INTEGER,
    IN p_nombre VARCHAR(50), 
    IN p_apellido VARCHAR(50), 
    IN p_email VARCHAR(50), 
    IN p_telefono VARCHAR(50))
   BEGIN
	 UPDATE personas SET nombre = p_nombre, apellido = p_apellido, email = p_email, telefono = p_telefono 
     WHERE id = p_id;
   END //

-- CALL modificar_persona(19,'Sonia','Pincay','sonia@gmail.com','0915281725');

DELIMITER //
CREATE PROCEDURE eliminar_persona (
	IN p_id INTEGER)
   BEGIN
	 DELETE FROM personas 
     WHERE id = p_id;
   END //