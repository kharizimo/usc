insert into user(nom,email,pwd) 
values('Maestro meus','kharizimo@gmail.com','1234');
insert into client(nom,email,pwd) 
values('Maestro meus','kharizimo@gmail.com','1234');

insert into categorie(lib) values
('Informatique'),
('Bureautique'),
('Programmation Desktop'),
('Programmation Web'),
('Autres');

insert into formation(lib,categorie_id) values
('Initiation à l''informatique',1),
('Excel',2),
('Word',2),
('Java',3),
('Javascript',4),
('PHP',4),
('Secrétariat',5);

insert into session(lib,formation_id) values
('Initiation à L''informatique Edition 1',1),
('Excel Débutant',2),
('Excel Avancé',2);

insert into classe(session_id,client_id,etat) values
(1,1,true),
(2,1,true),
(3,1,true);

-- page
insert into blog(titre) values('Lancement de la formation du React Native')

