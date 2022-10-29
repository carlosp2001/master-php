-- Renombrar una tabla
alter table usuarios RENAME TO usuarios_renom;

-- Cambiar nombre de una columna
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

-- Modificar columna sin cambiar nombre
ALTER TABLE usuarios_renom MODIFY apellido char(40) not null ;

-- Añadir columna
ALTER TABLE usuarios_renom ADD website varchar(100) null;

-- Añadir restricción solo a columna
ALTER TABLE usuarios_renom add constraint uq_email UNIQUE(email);

-- Borrar una columna
ALTER TABLE usuarios_renom drop website;

