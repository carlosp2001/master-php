/*
16. Sacar los vendedores que tienen jefe y sacar el nombre del jefe
 */

select v1.nombre as 'Vendedor', v2.nombre as 'Jefe' from vendedores v1
inner join vendedores v2 on v1.jefe = v2.id;