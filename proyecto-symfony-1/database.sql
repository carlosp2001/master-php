create database if not exists symfony_master;

use symfony_master;

create table if not exists users
(
    id         int(255) auto_increment not null,
    role       varchar(50),
    name       varchar(100),
    surname    varchar(200),
    email      varchar(255),
    password   varchar(255),
    created_at datetime,
    constraint pk_users primary key (id)
) engine = InnoDb;

insert into users values (null, 'ROLE_USER', 'Victor', 'Robles', 'victor@victor.com', 'password', CURTIME());
insert into users values (null, 'ROLE_USER', 'Manolo', 'Perez', 'manolo@manolo.com', 'password', CURTIME());
insert into users values (null, 'ROLE_USER', 'Carlos', 'Sanchez', 'carlos@carlos.com', 'password', CURTIME());


create table if not exists tasks
(
    id         int(255) auto_increment not null,
    user_id    int(255)                not null,
    title      varchar(255),
    content    text,
    priority   varchar(20),
    hours      int(100),
    created_at datetime,
    constraint pk_task primary key (id),
    constraint fk_task_user foreign key (user_id) references users(id)

) engine = InnoDb;

insert into tasks values (null, 1, 'Tarea 1', 'Contenido de prueba 1', 'high', 40, CURTIME());
insert into tasks values (null, 1, 'Tarea 2', 'Contenido de prueba 2', 'low', 20, CURTIME());
insert into tasks values (null, 2, 'Tarea 3', 'Contenido de prueba 3', 'medium', 10, CURTIME());
insert into tasks values (null, 3, 'Tarea 4', 'Contenido de prueba 4', 'high', 50, CURTIME());


