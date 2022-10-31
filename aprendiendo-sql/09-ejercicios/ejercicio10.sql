/*
10. Visualizar los apellidos de los vendedores, su fecha y su numero de grupo, ordenado por fecha descendente,
mostrar los 4 ultimos
 */

select apellidos, fecha, id from vendedores order by fecha DESC limit 4;