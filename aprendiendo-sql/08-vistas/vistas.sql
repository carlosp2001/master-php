/*
Vistas:
Las podemos definir como una consulta almacenada en la base de datos que se utiliza como una tabla virtual.
No almacena datos sino que utiliza asociaciones y los datos originales de las tablas, de forma que siempre se mantiene
actualizada
*/

-- Crear vista
create view entradas_con_nombres as
select e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoria'
from entradas e
         inner join usuarios u on e.usuario_id = u.id
         inner join categorias c on e.categoria_id = c.id;

-- Mostrar vistas existente
show create view entradas_con_nombres;

select * from entradas_con_nombres;

-- Eliminar vistas
drop view entradas_con_nombres;
