/*
28. Listar los vendedores y el numero de clientes que tienen tengan o no clientes.
 */

select v.nombre, v.apellidos, count(c.id) from vendedores v
left join clientes c on c.vendedor_id = v.id group by v.id;