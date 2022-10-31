/*
6. Visualizar el nombre y los apellidos de los vendedores en una misma columna, su fecha de registro el
dia de la semana que se registraron.
 */

select concat(nombre, ' ', apellidos) as 'Nombre y Apellido', fecha, dayname(fecha) from vendedores;