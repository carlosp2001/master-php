create table usuarios
(
    id        int(255) auto_increment not null,
    nombre    varchar(100)            not null,
    apellidos varchar(100)            not null,
    email     varchar(255)            not null,
    password  varchar(255)            not null,
    fecha     date                    not null,
    constraint pk_usuarios primary key (id),
    constraint uq_email unique (email)
)ENGINE = InnoDb;

create table categorias
(
    id     int(255) auto_increment not null,
    nombre varchar(100),
    constraint pk_categorias primary key (id)
)ENGINE = InnoDb;

create table entradas
(
    id           int(255) auto_increment not null,
    usuario_id   int(255)                not null,
    categoria_id int(255)                not null,
    titulo       varchar(255)            not null,
    descripcion  mediumtext,
    fecha        date                    not null,
    constraint pk_entradas primary key (id),
    constraint fk_entrada_usuario foreign key (usuario_id) references usuarios (id),
    constraint fk_entrada_categoria foreign key (categoria_id) references categorias (id)
)ENGINE = InnoDb;

# drop table usuarios_renom;
# show tables;

describe usuarios;

-- CASCADE

-- constraint fk_entrada_usuario foreign key (usuario_id) references usuarios (id) on update cascade
-- constraint fk_entrada_usuario foreign key (usuario_id) references usuarios (id) on delete set null
-- constraint fk_entrada_usuario foreign key (usuario_id) references usuarios (id) on delete set default
-- constraint fk_entrada_usuario foreign key (usuario_id) references usuarios (id) on delete set default
-- constraint fk_entrada_usuario foreign key (usuario_id) references usuarios (id) on delete no actiion

