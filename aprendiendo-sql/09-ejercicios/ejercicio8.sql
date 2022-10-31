/*
8. Visualizar todos los coches en cuyo marca exista la letra "A" y cuyo modelo empiece por "F"
 */

select * from coches where marca like '%a%' and modelo like 'F%';