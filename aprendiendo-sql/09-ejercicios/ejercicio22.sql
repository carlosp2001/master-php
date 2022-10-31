/*
22. Mostrar listado de clientes (numero de cliente y el nombre)
mostrar también el número de vendedor y su nombre.
 */

select c.id, c.nombre, v.id, concat(v.nombre, ' ', v.apellidos)
from clientes c,
     vendedores v
where c.vendedor_id = v.id;

