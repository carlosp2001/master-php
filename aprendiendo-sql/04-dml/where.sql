-- Consulta con una condición
select *
from usuarios
where email = 'carlos@carlos.com';

/*
Operadores de comparación
Igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
entre           between A and B
en              in
Es nulo         is null
No nulo         is not null
Como            like
No es como      not like
*/

/*
Operadores Lógicos
O   OR
Y   AND
No  NOT
*/

/*
Comodines
%   Cualquier cantidad de carateres
_   un caracter desconocido Mar_o = Marzo


 */



-- Ejemplos
-- 1.Mostrar nombres y apellidos de todos los usuarios registrados en 2022
select nombre, apellidos from usuarios where year(fecha)='2022';

-- 2.Mostrar nombres y apellidos de todos los usuarios que no se registraron en 2019
select nombre, apellidos from usuarios where year(fecha)!='2019' or ISNULL(fecha);

-- 3. Mostrar el email de los usuarios cuyo apellido contenga la letra a ya además su contrasena sea 1234
select email from usuarios where apellidos like '%a%' and password='1234';

-- 4. Sacar todos los registros de la tabla de usuarios cuyo año sea par
select * from usuarios where (year(fecha)%2 = 0);

-- 5. Sacar todos los registros de la tabla usuarios cuyo nombre tenga más de 5 letras y que se hayan registrado antes
-- de 2020 y mostrar el nombre en mayúsculas
select id, upper(nombre) as 'Nombre', apellidos from usuarios where (length(nombre) > 5) and (year(fecha) < 2023);

-- 6. Ordenar de mayor a menor
select * from usuarios order by id desc;

-- 7. Clausula limit, permite sacar determinado numero de registros.
select * from usuarios limit 1;

