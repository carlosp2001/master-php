/*
15. Mostrar los clientes que mas pedidos han hecho y mostrar cuantos hicieron
 */

select e.cliente_id, c.nombre, count(e.id)
from encargos e
inner join clientes c on e.cliente_id = c.id
group by e.cliente_id
order by 2 desc
limit 2;