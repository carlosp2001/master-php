/*
18. Listar los clientes que han hecho algun encargo del coche "Mercedes Ranchero"
 */
use concesionario;
select *
from clientes
where id in
      (select cliente_id
       from encargos
       where coche_id in (select id from coches where modelo like '%Mercedes Ranchera%'));

select * from encargos