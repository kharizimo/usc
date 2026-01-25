insert into user(nom,email,pwd) 
values('Maestro meus','kharizimo@gmail.com','1234');
insert into client(nom,email,pwd) 
values('Maestro meus','kharizimo@gmail.com','1234');

insert into blog(titre) values
('Lorem ipsum dolor sit amet'),
('Eveniet praesentium earum expedita atque nesciunt'),
('Praesentium earum expedita atque');

update blog set
texte='Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, itaque iure! Deleniti vel eius corrupti nobis quo accusantium fuga molestiae debitis nam beatae. Recusandae consectetur tempora eius cumque ipsum enim.
Inventore suscipit aliquid sunt distinctio molestias ipsum non magni omnis explicabo doloribus, sapiente maxime dolor enim doloremque repellat deserunt cumque veritatis quis exercitationem fuga ea harum eaque dolores tenetur? Dignissimos?
Explicabo ipsum dignissimos iure quasi ducimus quidem voluptatum, et ex ea optio, in sapiente aliquid itaque! Perferendis minima quibusdam qui sit omnis excepturi animi? Sit dignissimos delectus corporis in quos.
Sint amet esse ad quidem at iusto quaerat culpa sit, vitae aliquam voluptatum commodi! Obcaecati repudiandae fugit, veniam a in velit necessitatibus cum veritatis quas nostrum nam aliquid dolor quidem!
Possimus, dolore porro distinctio voluptatibus tenetur quia asperiores eveniet cum corrupti! Ab modi minus quaerat quis! Architecto, hic quae numquam explicabo rerum inventore dolores odit adipisci distinctio odio, similique impedit?
Ut inventore iusto explicabo quidem! Minus, assumenda ipsum. Quaerat at nostrum nam, illum fugiat omnis magni vel. Commodi perspiciatis, fugit suscipit ad libero obcaecati quisquam voluptatum reprehenderit officiis error mollitia.
Laudantium, quae voluptate. Molestias id exercitationem, tempore fuga cupiditate cumque rem numquam inventore quis nulla sit. Ea praesentium, repellat officiis amet sit ipsum distinctio, sequi labore ipsa numquam enim accusantium.
Omnis, cumque officia obcaecati soluta magni in reprehenderit suscipit iure hic eligendi sed cum modi sequi, vero animi a ullam magnam quae laborum quasi. Quam molestias totam ipsam. Nulla, repellat.
Fugit praesentium dolor in voluptatem eligendi est esse voluptate. Eius mollitia aut fuga, optio doloribus, saepe nulla id maiores quaerat minus dolorem itaque, tempore consectetur nisi nam ullam impedit. Aut.
Amet corporis nobis maiores ad ex obcaecati, iure laborum harum in, dicta doloribus, consectetur exercitationem dolorum nesciunt veniam! Similique perferendis voluptatum, aspernatur veniam magni maiores laudantium itaque inventore enim asperiores?';

insert into categorie(lib) values
('Informatique'),
('Bureautique'),
('Programmation Desktop'),
('Programmation Web'),
('Autres');

insert into formation(lib,categorie_id,formation_date,prix) values
('Java SE débutant',3,'2025-01-30',50),
('Javascript débutant',4,'2025-02-15',70),
('Python',3,'2025-02-15',100),
('Management',3,'2025-02-15',50);

update formation set texte='
Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae amet nisi qui, quaerat sint tempora cum nobis, maxime nostrum fugit eligendi dolor magnam, ipsum iure quia cupiditate. Eligendi, vitae saepe.
Iusto ea sed possimus dignissimos ex quaerat! Id esse excepturi quod, eaque placeat repellendus soluta possimus illum consectetur iure nostrum veniam eum porro vero reprehenderit ducimus qui aspernatur quos neque.
Ullam, ex ab voluptate iste, eos eligendi placeat repellendus sequi nemo maiores deserunt cum, dicta eius veritatis quis non. Magni itaque praesentium, non iste ex alias ullam omnis voluptatum quia.
Itaque debitis sapiente quaerat, voluptatem eveniet dolorum necessitatibus laudantium, fugiat temporibus sint consequatur nostrum? Labore iste quod facilis, quasi, dolore quia quam fugit maiores repellendus, perferendis incidunt non nostrum nulla!
Dignissimos saepe, veniam recusandae quisquam nemo optio exercitationem fugit neque illum cum ipsam laudantium nostrum, architecto consequatur culpa reprehenderit corporis voluptatibus quaerat quod maxime ab quibusdam! Iusto rem placeat quidem?
Veniam blanditiis ut dolorem! Officia velit impedit est porro assumenda inventore, earum deserunt iusto doloremque hic repudiandae, sequi similique eaque quod placeat eligendi molestias dolorem explicabo. Cum ipsam id doloribus.
Sunt labore quisquam assumenda natus, quod vel, amet similique praesentium autem obcaecati necessitatibus odio quidem. Qui fuga in tempore, enim quibusdam praesentium aperiam quae reiciendis obcaecati hic recusandae soluta nulla?
Atque aspernatur eveniet veniam dicta. Similique reiciendis hic tempora accusantium iure recusandae labore excepturi, dicta quis consequatur eos, eveniet quia sunt sequi ullam eligendi neque eius dolor. Voluptatum, error iure?
Quos assumenda suscipit cum vero commodi nulla. Aspernatur omnis nesciunt quia, ullam dolore hic repellat inventore libero cum doloremque rerum iste vel iusto in. Perferendis praesentium voluptatibus alias porro iusto.
';

insert into config values
('email','me@gmail.com'),
('telephone','+243823455672'),
('adresse','123 Avenue des Champs, Kinshasa, RDC'),
('facebook','#'),
('x','#'),
('linkedin','#'),
('youtube','#'),
('master','kharizimo@gmail.com');