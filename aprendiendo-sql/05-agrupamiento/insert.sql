-- Inserts para categorías
insert into categorias values( null, 'Acción') ;
insert into categorias values( null, 'Rol') ;
insert into categorias values( null, 'Deportes') ;

-- Inserts para entradas
insert into entradas values (null, 1, 1, 'Novedades del GTA V Online', 'Review del GTA V', curdate());
insert into entradas values (null, 1, 2, 'Review de LOL Online', 'Todo sobre el LOL', curdate());
insert into entradas values (null, 1, 3, 'Nuevos jugadores de FIFA 19', 'Review del FIFA 19 ', curdate());

insert into entradas values (null, 2, 1, 'Novedades de Assasins Online', 'Review del Assasins', curdate());
insert into entradas values (null, 2, 2, 'Review de WOW Online', 'Todo sobre el WOW', curdate());
insert into entradas values (null, 2, 3, 'Nuevos jugadores de PES', 'Review del PES ', curdate());

insert into entradas values (null, 3, 1, 'Novedades del GTA V Online', 'Review del GTA V', curdate());
insert into entradas values (null, 3, 2, 'Review de LOL Online', 'Todo sobre el LOL', curdate());
insert into entradas values (null, 3, 3, 'Nuevos jugadores de FIFA 19', 'Review del FIFA 19 ', curdate());

select * from entradas;
