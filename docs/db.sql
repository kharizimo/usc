-- drop database if exists usc;
-- create database usc;
-- use usc;

create table client(
    id integer primary key autoincrement,
    nom varchar(100),
    prenom varchar(100),
    postnom varchar(100),
    sexe varchar(100),
    etat_civil varchar(100),
    telephone varchar(100),
    email varchar(100),
    img varchar(100) default 'avatar.png',
    pwd varchar(100),
    create_at datetime default current_timestamp,
    etat boolean default true
);

create table user(
    id integer primary key autoincrement,
    nom varchar(100),
    email varchar(100),
    pwd varchar(100),
    etat boolean default true
);
create table blog(
    id integer primary key autoincrement,
    titre varchar(100),
    texte text,
    img varchar(100) default 'blog.png',
    visible boolean default true, 
    user_id int references user(id) default 1,
    create_at datetime default current_timestamp
);

create table categorie(
    id integer primary key autoincrement,
    lib varchar(100)
);
create table formation(
    id integer primary key autoincrement,
    categorie_id int references categorie(id),
    lib varchar(100),
    texte text,
    formation_date date default null,
    prix double default 0.0,
    etat varchar(100) default 'Disponible',
    create_at datetime default current_timestamp,
    visible boolean default true,
    img varchar(100) default 'formation.png',
    screenshot text default ''
);

create table formation_client(
    formation_id int references formation(id),
    client_id int references client(id),
    create_at datetime default current_timestamp,
    confirm boolean default false
);

create table newsletters(
    email varchar(100) primary key,
    create_at datetime default current_timestamp
);

create table config(
    key varchar(100) primary key,
    value varchar(100)
);