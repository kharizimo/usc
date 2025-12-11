drop database if exists usc;
create database usc;
use usc;

create table client(
    id serial primary key,
    nom varchar(100),
    email varchar(100),
    pwd varchar(100),
    create_at datetime default current_timestamp,
    etat boolean default true
);
create table user(
    id serial primary key,
    nom varchar(100),
    email varchar(100),
    pwd varchar(100),
    etat boolean default false
);
create table blog(
    id serial primary key,
    titre varchar(100),
    extrait text,
    texte text,
    visible boolean default true, 
    user_id int references user(id),
    create_at datetime default current_timestamp
);
create table newsletters(
    id serial primary key,
    email varchar(100)
);
create table categorie(
    id serial primary key,
    lib varchar(100),
);
create table slide(
    id serial primary key,
    titre varchar(100),
    surtitre varchar(100),
    texte varchar(100),
    img varchar(100),
    lien_url varchar(100),
    lien_text varchar(100)
);
create table formation(
    id serial primary key,
    categorie_id int references categorie(id),
    lib varchar(100),
    lancement date default null,
    prix double default 0.0,
    etat varchar(100) default 'En attente',
    visible boolean default true,
    subscribe boolean default true,
    create_at datetime default current_timestamp
);