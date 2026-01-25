create view v_client as 
select c.*,
(select count(*) from formation_client f where f.client_id=c.id) nbr
from client c;

create view v_blog as
    select b.id, b.titre, b.texte, b.img, b.visible, b.create_at, 
    u.nom as auteur
    from blog b
    join user u on b.user_id = u.id
    order by b.create_at desc;

create view v_formation as 
select f.* ,c.lib categorie_lib
from formation f 
join categorie c on f.categorie_id=c.id;

