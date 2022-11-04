CREATE DATABASE IF NOT EXISTS sistema;

USE sistema;

CREATE TABLE datos 
( 
    id int(10) not null,
    nombre varchar (25),
    direccion varchar(25),
    telefono varchar(15),
    correo varchar(40),
    PRIMARY KEY (id) 
) Engine=InnoDB default charset=latin1; 