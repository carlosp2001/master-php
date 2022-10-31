/*
19. Obtener los vendedores con dos o mas clientes.
 */
use concesionario;
select *
from vendedores
where id in (select vendedor_id from clientes group by vendedor_id having count(id) >= 2);

select * from clientes

