/*
23. Listar todos los encargos realizados con la marca del coche y el nombre del cliente
 */

select e.id, co.marca, c.nombre from encargos e
inner join coches co on co.id = e.coche_id
inner join clientes c on c.id = e.cliente_id