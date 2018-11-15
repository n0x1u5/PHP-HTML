create database frutas;

use frutas;

create table catalogo (
nombre varchar(30) primary key,
pesomedio float(8,3),
valorenergetico float(8,3));

insert into catalogo values
('naranja',70.6,17),
('manzana',60.3,20),
('platano',50.2,17),
('pera',65.9,22),
('uva',5,16.2),
('mandarina',29,30.7),
('sandia',3000.5,20.3),
('kiwi',30.4,25),
('melocoton',90.5,34.6),
('cereza',10.2,15.6);