/*
11. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo
 */

select cargo, count(id) from vendedores group by cargo order by count(id) desc;

