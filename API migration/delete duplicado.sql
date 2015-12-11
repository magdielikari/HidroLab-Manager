delete from prueba 
where id in(
    select a3.id from (
        SELECT a1.id, a1.nombre FROM prueba as a1 
        inner join prueba as a2 
        on a1.nombre=a2.nombre 
        and a1.id>a2.id
    ) as a3
);