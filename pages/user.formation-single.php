<form>
    <div class="row g-3">
        <div class="col-md-6"><div class="form-floating">
            <img src="img/team-3.jpg" style="max-height: 200px;" alt="">
        </div></div>
        <div class="col-12">
            <div class="form-floating">
                <button class="btn btn-primary">Charger la photo</button>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <select name="" id="" class="form-control bg-secondary border-0">
                    
                </select>
                <label for="subject">Catégorie</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control bg-secondary border-0" id="subject"
                    placeholder="Sujet">
                <label for="subject">Titre</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control bg-secondary border-0"
                    placeholder="Laissez un message" id="message"
                    style="height: 150px"></textarea>
                <label for="message">Contenu</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <select name="" id="" class="form-control bg-secondary border-0">
                    <option>En attente</option>
                    <option>En cours</option>
                    <option>Terminé</option>
                    <option>Annulé</option>
                </select>
                <label for="subject">Etat</label>
            </div>
        </div>
        <div class="col-md-6">
            <button class="btn btn-outline-primary border-2 w-100" type="submit">Supprimer</button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary border-2 w-100" type="submit">Publier</button>
        </div>
    </div>
</form>