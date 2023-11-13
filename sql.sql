use laravelapp;
CREATE TABLE usuario(
    usuario varchar(30) PRIMARY KEY,
    clave varchar(50),
    metodo enum('texto', 'sha1', 'md5')
);

INSERT INTO `usuario` (`usuario`, `clave`, `metodo`) 
VALUES 
('fulanito', MD5('csas1234'), 'md5');
INSERT INTO `usuario` (`usuario`, `clave`, `metodo`) 
VALUES 
('periquito', SHA1('csas1234'), 'sha1');
INSERT INTO `usuario` (`usuario`, `clave`, `metodo`)
VALUES 
('profesor', 'csas1234', 'texto');
INSERT INTO `usuario` (`usuario`, `clave`, `metodo`)
VALUES 
('guirado', SHA1('csas1234'), 'sha1');