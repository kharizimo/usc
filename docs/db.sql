-- drop database if exists usc;
-- create database usc;
-- use usc;

create table client(
    id integer primary key autoincrement,
    nom varchar(100),
    telephone varchar(100),
    email varchar(100),
    pwd varchar(100),
    create_at datetime default current_timestamp,
    etat boolean default true
);
create table user(
    id integer primary key autoincrement,
    nom varchar(100),
    email varchar(100),
    pwd varchar(100),
    etat boolean default false
);
create table blog(
    id integer primary key autoincrement,
    titre varchar(100),
    texte text,
    img text,
    visible boolean default true, 
    user_id int references user(id) default 1,
    create_at datetime default current_timestamp
);
create view v_blog as
    select b.id, b.titre, b.texte, b.img, b.visible, b.create_at, 
    u.nom as auteur
    from blog b
    join user u on b.user_id = u.id
    where b.visible = true
    order by b.create_at desc;


create table categorie(
    id integer primary key autoincrement,
    lib varchar(100)
);
create table formation(
    id integer primary key autoincrement,
    categorie_id int references categorie(id),
    lib varchar(100),
    detail text,
    formation_date date default null,
    prix double default 0.0,
    etat varchar(100) default 'Disponible',
    create_at datetime default current_timestamp,
    visible boolean default true,
    img varchar(100) default 'formation.jpg',
    screenshot text
);
create view v_formation as 
select f.* ,c.lib categorie_lib
from formation f 
join categorie c on f.categorie_id=c.id;

create table formation_client(
    formation_id int references formation(id),
    client_id int references client(id),
    create_at datetime,
    suscribe boolean default false,
    confirm boolean default false
);

create table newsletters(
    email varchar(100) primary key,
    create_at datetime default current_timestamp
);