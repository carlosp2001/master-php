/*
17. Obtener un listado con los encargos realizados por el cliente 'Futeria Antonia Inc.'
 */
use concesionario;
select e.id as 'Numero Encargo', cantidad, c.nombre, co.modelo
from encargos e
         inner join clientes c on c.id = e.cliente_id
         inner join coches co on co.id = e.coche_id
where e.cliente_id in (select id from clientes where clientes.nombre = 'Fruteria Antonia Inc');

