-- Mostrar todos los registros de una tabla
select email, nombre, apellidos from usuarios;

-- Mostrar todos los campos
select * from usuarios;

-- Operadores aritméticos
select email, (4+7) as 'Operación' from usuarios;
select id, email, (id+7) as 'Operación' from usuarios order by id desc ;
-- Orden alfabético o asce
select id, email, (4+7) as 'Operación' from usuarios order by id desc ;

-- Funciones matemáticas
-- Valor absoluto
select abs(7) as 'Operacion' from usuarios;

-- Redondeo al numero mayor cercano
select ceil(7.34) as 'Operacion' from usuarios;

-- Redonde al numero menor cercano
select floor(7.34) as 'Operacion' from usuarios;

select round(7.34, 2) as 'Operacion' from usuarios;

-- Numero Pi
select pi() as 'Operacion' from usuarios;

-- Numero aleatorio
select rand() as 'Operacion' from usuarios;

-- Raiz cuadrada
select sqrt(7.34) as 'Operacion' from usuarios;


-- Funciones para texto
-- Textos en mayúsculas
select UPPER(nombre) from usuarios;

-- Textos en minúsculas
select lower(nombre) from usuarios;

-- Concatenar cadenas
select upper(concat(nombre, ' ', apellidos)) as CONVERSION from usuarios;

-- Longitud de cadena de caracteres
select email, length(upper(concat(nombre, ' ', apellidos))) as CONVERSION from usuarios;

-- Quitar espacios trim
select trim(concat('    ',nombre, ' ', apellidos, '    ')) as CONVERSION from usuarios;

-- Funciones para fechas
select email, fecha from usuarios;

-- Mostrar fecha actual
select email, fecha, curdate() as 'Fecha Actual' from usuarios;

-- Diferencia de fecha
select email, datediff(fecha, curdate()) as 'Fecha Diferencia' from usuarios;

-- Nombre del día
select email, dayname(fecha) as 'Nombre del día' from usuarios;

-- Dia del mes
select email, dayofmonth(fecha) as 'Dia del mes' from usuarios;

-- Dia de la semana
select dayofweek(fecha) as 'Dia de la semana' from usuarios;

-- Dia del año
select dayofyear(fecha) as 'Dia del año' from usuarios;

-- Conseguir dia, año, mes
select month(fecha) as 'Mes' from usuarios;
select day(fecha) as 'Dia' from usuarios;
select year(fecha) as 'Año' from usuarios;
select hour(fecha) as 'Hora' from usuarios;

-- Hora actual
select curtime() as 'Hora actual' from usuarios;
select sysdate() as 'Hora actual' from usuarios;

-- Formatear fecha
select date_format(fecha, '%d-%m-%Y') from usuarios;

-- Funciones generales
-- Comprobar si es null
select email, isnull(apellidos) from usuarios;

-- Compara si son iguales dos valores
select email, strcmp('hola', 'hola') from usuarios;

-- Saber versión de MySQL
select version() from usuarios;

-- Mostrar registros que son diferentes
select distinct nombre from usuarios;

-- If null
select ifnull(apellidos, 'Este campo esta vacio') from usuarios;


