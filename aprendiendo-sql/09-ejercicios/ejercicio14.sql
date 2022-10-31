/*
14. Visualizar las unidades totales vendidas de cada coche a cada cliente.
Mostrando el nombre del producto, numero de cliente y la suma de unidades.
 */

select co.modelo as 'Coche', cl.nombre, sum(e.cantidad) as 'Unidades'
from encargos e
         inner join coches co on co.id = e.coche_id
         inner join clientes cl on cl.id = e.cliente_id group by e.coche_id, e.cliente_id;