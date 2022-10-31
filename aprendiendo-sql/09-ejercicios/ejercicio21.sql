/*
21. Obtener los nombre y ciudades de los clientes con encargos de 3 unidades adelante
 */
use concesionario;
select nombre, ciudad from clientes
where id in (select cliente_id from encargos where cantidad >= 3);
