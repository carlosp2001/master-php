/*
Subconsultas:
- Son consultas que se ejecutan dentro de otras.
- Consisten en utilizar los resultados de la subconsulta para operar en la consulta principal
- Jugando con las claves ajenas / foráneas.
 */

insert into usuarios
values (null, 'admin', 'admin', 'admin1@admin.com', 'admin', curdate());

-- Mostrar solo usuarios que han ingresado entradas.
select *
from usuarios
where id in (select usuario_id from entradas);

-- Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA
select nombre, apellidos
from usuarios
where id in (select usuario_id from entradas where titulo like '%GTA%');

-- Sacar todas las entradas de la categoría acción utilizando su nombre
select titulo
from entradas
where categoria_id in (select id from categorias where nombre = 'Accion');

-- Mostrar las categorías con mas de 2 entradas
select nombre
from categorias
where id in (select categoria_id
             from entradas
             group by categoria_id
             having count(categoria_id) >= 3);

-- Mostrar los usuarios que crearon una entrada un Sábado
select *
from usuarios
where id in (select usuario_id from entradas where dayofweek(fecha) = 7);

-- Mostrar nombre del usuario con mas entradas
select nombre
from usuarios
where id = (select usuario_id from entradas group by usuario_id order by count(id) desc limit 1);

-- Mostrar las categorias sin entrada
select *
from categorias
where id in (select categoria_id from entradas);