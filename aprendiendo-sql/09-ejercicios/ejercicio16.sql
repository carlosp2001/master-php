/*
16. Obtener listado de clientes atendidos por el vendedor 'David Lopez'
 */
use concesionario;
select *
from clientes
where clientes.vendedor_id in (select id from vendedores where nombre = 'David' and apellidos = 'Lopez');