SELECT p.nacionalidad, count(*) as NumTrabajadores 
FROM empleados as e 
inner join paises as p on e.nacionalidad = p.id 
group by p.nacionalidad
having NumTrabajadores > 1

Select e.nombre, e.apellidos, e.salario, p.nacionalidad, c.nombre, d.nombre 
from empleados as e
inner join paises as p on e.nacionalidad = p.id
inner join departamentos as d on e.departamento = d.id
inner join centros as c on d.centro = c.id
where e.salario BETWEEN 20000 and 25000