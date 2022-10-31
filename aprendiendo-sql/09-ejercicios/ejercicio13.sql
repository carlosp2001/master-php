/*
12. Sacar la media de sueldo entre todos los vendedores por grupo
 */

select avg(v.sueldo) as 'Masa salarial', g.nombre, g.ciudad from vendedores v inner join
    grupos g on g.id = v.grupo_id group by grupo_id;