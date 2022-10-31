/*
30. Mostrar los datos del vendedor con mas antiguedad en el concesionario
 */

select *
from vendedores
order by fecha
limit 1;

-- 30 + Obtener los coches con mas unidades vendidas

select *
from coches
where id in (select coche_id from encargos where cantidad in (select max(cantidad) from encargos));