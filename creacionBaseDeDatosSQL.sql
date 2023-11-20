drop DATABASE if EXISTS laravelDB;
create DATABASE laravelDB;

CREATE USER 'laravel'@'localhost' IDENTIFIED BY 'Csas1234';
GRANT ALL PRIVILEGES ON laravelDB.* TO 'laravel'@'localhost';
FLUSH PRIVILEGES;



use laravelDB;

create table usuarios(
    id int PRIMARY KEY,
    nombre VARCHAR(30),
    clave VARCHAR(30),
    admin BOOLEAN
);

insert into usuarios() values (0,"Daniel","Csas1234",1),
                                (1,"Pedro","Csas1234",1),
                                (2,"Aitziber","Csas1234",1),
                                (3,"Acaymo","Csas1234",1),
                                (4,"Alberto","Csas1234",1);