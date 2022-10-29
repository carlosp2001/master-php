-- Consultas de agrupamiento
select categoria_id, count(titulo) as 'Numero de entradas' from entradas group by categoria_id;

-- Consultas de agrupamiento con condiciones, agrupamientos mayores a 4
select categoria_id, count(titulo) as 'Numero de entradas' from entradas group by categoria_id
having count(titulo) >= 2;

/*
 AVG    Sacar la media
 COUNT  Contar el numero de elementos
 MAX    Valor máximo
 MIN    Valor mínimo
 SUM    Sumar to/do el contenido del grupo
 */

-- Sacar media
select * from entradas;
select avg(id) as 'Media de entradas' from entradas;

-- MAX
select max(id) as 'Máximo ID', titulo from entradas;

-- MIN
select min(id) as 'Máximo ID', titulo from entradas;

-- SUM
select sum(id) as 'Suma de ID' from entradas;





