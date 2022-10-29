/*
int(nro. de cifras)                 ENTERO
integer(nro de cifras)              ENTERO (maximo 255, 4294967295)
varchar(nro. de caracteres)         STRING / ALFANUMÉRICO (máximo 255)
char(nro. de caracteres)            STRING / ALFANUMÉRICO
float(nro de cifras, nro decimal)   DECIMAL / COMA FLOTANTE
date, time, timestamp

// STRING MAS GRANDE
TEXT 65535 caracteres
MEDIUMTEXT 16 millones caracteres
LONGTEXT 4 billones de caracteres

// ENTEROS MAS GRANDES
MEDIUMINT
BIGINT
 */


-- Crear una tabla
CREATE TABLE usuarios(
    id int (11) not null auto_increment,
    nombre varchar (100) not null ,
    apellidos varchar (255) default 'Hola que tal',
    email varchar (100)  not null ,
    password varchar (255),
    CONSTRAINT pk_usuarios PRIMARY KEY (id)
);

-- Borrar una tabla
drop table usuarios;

-- Describir tabla
describe usuarios_renom;

-- Mostrar tablas
show tables;

