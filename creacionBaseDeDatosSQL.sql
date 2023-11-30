drop DATABASE if EXISTS laravelDB;
create DATABASE laravelDB;

CREATE USER 'laravel'@'localhost' IDENTIFIED BY 'Csas1234';
GRANT ALL PRIVILEGES ON laravelDB.* TO 'laravel'@'localhost';
FLUSH PRIVILEGES;



use laravelDB;

create table usuarios(
    id int PRIMARY KEY,
    nombre VARCHAR(30) UNIQUE,
    clave VARCHAR(30),
    admin BOOLEAN
);

insert into usuarios() values (0,"Daniel","Csas1234",1),
                                (1,"Pedro","Csas1234",1),
                                (2,"Aitziber","Csas1234",1),
                                (3,"Acaymo","Csas1234",1),
                                (4,"Alberto","Csas1234",1);



create table libros(
    id int PRIMARY KEY,
    nombre VARCHAR(30) UNIQUE,
    unidades INT
);

INSERT into libros() values(0,"cenicienta",5),
                            (1,"pocahontas",1),
                            (2,"El quijote",10),
                            (3, "Willy wonka",4);