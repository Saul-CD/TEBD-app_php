-- Equipo: los_sql_itos

USE prueba20271;

DELIMITER $$
CREATE PROCEDURE ValidarUsuario(
	IN nombre_usuario varchar(20),
	IN hash_contrasena varchar(255)
)
BEGIN
    SELECT id_usu
    FROM prueba20271.usuario 
    WHERE 
		usuario = nombre_usuario 
		AND usu_pass = hash_contrasena;
END$$
DELIMITER ;
