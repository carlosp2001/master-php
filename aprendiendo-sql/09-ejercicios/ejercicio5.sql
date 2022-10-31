/*
5. Mostrar todos los vendedores con sus nombre y el numero de dias que
llevan trabajando en el concesionario
 */

select concat(nombre,' ', apellidos) as 'Nombre', datediff(curdate(),fecha) as 'Dias' from vendedores;