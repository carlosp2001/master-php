/*
27. Visualizar el nombre de los clientes y la cantidad de encargos realizados,
incluyendo los que no hayan realizado encargos
 */
-- INSERT INTO clientes VALUES(NULL, 5, 'Tienda Organica Inc', 'Murcia', 0, CURDATE());

select c.nombre, count(e.id) from clientes c
left join encargos e on c.id = e.cliente_id group by 1;

