/*
Consulta multitarea:
Son consultas que sirven para consultar varias tablas en una sola sentencia

inner join es más óptimo que la selección multitabla
*/

-- Mostrar las entradas con el nombre del autor y el nombre de la categoría
select e.titulo, u.nombre as 'Autor', c.nombre as 'Categoria'
from entradas e,
     usuarios u,
     categorias c
where e.usuario_id = u.id
  and e.categoria_id = c.id;

-- Inner join
select e.id, e.titulo, u.nombre as 'Autor', c.nombre as 'Categoria'
from entradas e
         inner join usuarios u on e.usuario_id = u.id
         inner join categorias c on e.categoria_id = c.id;

-- Mostrar el nombre de las categoría y al lado cuantas entradas tienen.
select c.nombre, count(e.id)
from categorias c,
     entradas e
where e.categoria_id = c.id
group by e.categoria_id;

-- left join, se mantienen todos los datos de la izquierda
select c.nombre, count(e.id)
from categorias c
         right join entradas e on e.categoria_id = c.id
group by e.categoria_id;

-- right join
select c.nombre, count(e.id)
from entradas e
         right join categorias c on c.id = e.categoria_id
group by e.categoria_id;

-- Mostrar el email de los usuarios y al lado cuantas entradas tienen.
select u.email, count(titulo)
from usuarios u,
     entradas e
where e.usuario_id = u.id
group by e.usuario_id;

