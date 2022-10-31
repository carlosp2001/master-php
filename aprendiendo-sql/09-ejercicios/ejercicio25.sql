/*
25. Obtener una lista de los nombres de los clientes con el importe
de sus encargos acumulados
 */

select ci.nombre, sum(precio*cantidad) as 'Importe' from clientes ci
inner join encargos en on ci.id = en.cliente_id
inner join coches co on en.coche_id = co.id group by ci.nombre order by ci.nombre;