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
    extrait text,
    texte text,
    visible boolean default true, 
    user_id int references user(id),
    create_at datetime default current_timestamp
);
create table service(
    id integer primary key autoincrement,
    lib varchar(100),
    content text,
    img varchar(100) default 'img/service.jpg'
);
create table categorie(
    id integer primary key autoincrement,
    lib varchar(100),
    content text,
    img varchar(100) default 'img/categorie.jpg'
);
create table formation(
    id integer primary key autoincrement,
    categorie_id int references categorie(id),
    lib varchar(100),
    img varchar(100) default 'formation.jpg'
);
create table session(
    id integer primary key autoincrement,
    formation_id int references formation(id),
    lib varchar(100),
    lancement date default null,
    prix double default 0.0,
    etat varchar(100) default 'En attente',
    detail text,
    img varchar(100) default 'session.jpg',
    screenshots text,
    visible boolean default true,
    subscribe boolean default true,
    create_at datetime default current_timestamp
);
create table classe(
    session_id int references session(id),
    client_id int references client(id),
    create_at datetime default current_timestamp,
    etat boolean default false
);

create table newsletters(
    email varchar(100) primary key,
    create_at datetime default current_timestamp
);