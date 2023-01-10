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