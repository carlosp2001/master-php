/*
1. Diseñar y crear la base de datos de un concesionario.
*/
create database if not exists concesionario;
use concesionario;

create table coches
(
    id     int(10) auto_increment,
    modelo varchar(100) not null,
    marca  varchar(50),
    precio int(20)      not null,
    stock  int(255)     not null,
    constraint pk_coches primary key (id)
) engine = InnoDb;

create table grupos
(
    id     int(10) auto_increment not null,
    nombre varchar(100)           not null,
    ciudad varchar(100),
    constraint pk_grupos primary key (id)
) engine = InnoDb;


-- Clave reflexiva: Apunta a un registro de la misma tabla
create table vendedores
(
    id        int(10) auto_increment not null,
    grupo_id  int(10)                not null,
    jefe      int(10),
    nombre    varchar(100)           not null,
    apellidos varchar(150),
    cargo     varchar(50),
    fecha     date,
    sueldo    float(20, 2),
    comision  float(10, 2),
    constraint pk_vendedores primary key (id),
    constraint fk_vendedor_grupo foreign key (grupo_id) references grupos (id),
    constraint fk_vendedor_jefe foreign key (jefe) references vendedores (id)
) engine = InnoDb;

create table clientes
(
    id          int(10) auto_increment not null,
    vendedor_id int(10),
    nombre      varchar(150)           not null,
    ciudad      varchar(100),
    gastado     float(50, 2),
    fecha       date,
    constraint pk_clientes primary key (id),
    constraint fk_cliente_vendedor foreign key (vendedor_id) references vendedores (id)
) engine = InnoDb;

create table encargos
(
    id         int(10) auto_increment not null,
    cliente_id int(10)                not null,
    coche_id   int(10)                not null,
    cantidad   int(100),
    fecha      date,
    constraint pk_encargos primary key (id),
    constraint fk_encargo_cliente foreign key (cliente_id) references clientes (id),
    constraint fk_encargo_coche foreign key (coche_id) references coches (id)
) engine = InnoDb;

-- Rellenar la base de datos con información - inserts

-- Coches
insert into coches
values (null, 'Renault Clio', 'Renault', 1200, 13);
insert into coches
values (null, 'Seat Panda', 'Seat', 10000, 10);
insert into coches
values (null, 'Mercedes Ranchera', 'Mercedes Benz', 32000, 24);
insert into coches
values (null, 'Porche Cayene', 'Porche', 65000, 5);
insert into coches
values (null, 'Lambo Aventador', 'Lamborghini', 170000, 2);
insert into coches
values (null, 'Ferrari Spider', 'Ferrari', 24500, 80);

-- Grupos
insert into grupos
values (null, 'Vendedores A', 'Madrid');
insert into grupos
values (null, 'Vendedores B', 'Madrid');
insert into grupos
values (null, 'Directores Mecánicos', 'Madrid');
insert into grupos
values (null, 'Vendedores A', 'Barcelona');
insert into grupos
values (null, 'Vendedores B', 'Barcelona');
insert into grupos
values (null, 'Vendedores C', 'Valencia');
insert into grupos
values (null, 'Vendedores A', 'Bilbao');
insert into grupos
values (null, 'Vendedores B', 'Pamplona');
insert into grupos
values (null, 'Vendedores C', 'Santiago de Compostela');

-- Vendedores
insert into vendedores
values (null, 1, null, 'David', 'Lopez', 'Responsable de tienda', curdate(), 30000, 4);
insert into vendedores
values (null, 1, 1, 'Fran', 'Martinez', 'Ayudante en tienda', curdate(), 23000, 2);
insert into vendedores
values (null, 2, null, 'Nelson', 'Sanchez', 'Responsable en tienda', curdate(), 38000, 5);
insert into vendedores
values (null, 2, 3, 'Jesus', 'Lopez', 'Ayudante en tienda', curdate(), 12000, 6);
insert into vendedores
values (null, 3, null, 'Victor', 'Lopez', 'Mecanico Jefe', curdate(), 50000, 2);
insert into vendedores
values (null, 4, null, 'Antonio', 'Lopez', 'Vendedor de recambios', curdate(), 13000, 8);
insert into vendedores
values (null, 5, null, 'Salvador', 'Lopez', 'Vendedor experto', curdate(), 60000, 2);
insert into vendedores
values (null, 6, null, 'Joaquin', 'Lopez', 'Ejecutivo de cuentas', curdate(), 80000, 1);
insert into vendedores
values (null, 6, 8, 'Luis', 'Lopez', 'Ayudante en tienda', curdate(), 10000, 10);

-- Clientes
INSERT INTO clientes VALUES(NULL, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Fruteria Antonia Inc', 'Fuenlabrada', 40000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Imprenta martinez Inc', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Jesus Colchones Inc', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());

-- Encargos
INSERT INTO encargos VALUES(NULL, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES(NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES(NULL, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES(NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 6, 6, 1, CURDATE());
