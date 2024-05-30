<form method="post" action="{{ isset ($contact)?route('contact.update', $contact->id): route('contact.save') }}" class="row g-3">
@csrf
    <div class="col-md-6">
        <label for="inputNom" class="form-label">Nom</label>
        <input type="text" value="{{isset ($contact)?$contact->nom:""}}" class="form-control" name="nom" id="inputNom">
    </div>
    <div class="col-md-6">
        <label for="inputprenom" class="form-label">Prenom</label>
        <input type="text"  value="{{isset ($contact)?$contact->prenom:""}}" class="form-control" name="prenom" id="inputprenom">
    </div>
    <div class="col-md-6">
        <label for="inputDateNaissance" class="form-label">Date Naissance</label>
        <input type="date" value="{{isset ($contact)?$contact->date_naissance:""}}"  class="form-control" name="date_naissance" id="inputDateNaissance">
    </div>
    <div class="col-md-6">
        <label for="inputSexe" class="form-label">Sexe</label>
        <select id="inputSexe" name="sexe" class="form-select">
            <option value="masculin" {{isset ($contact)?( ($contact->sexe=="masculin")? "selected":"") : ""}}  >Masculin</option>
            <option value="feminin" {{isset ($contact)?( ($contact->sexe=="feminin")? "selected": "") : ""}} >Feminin</option>
        </select>
    </div>

    <div class="col-6">
        <button type="reset" class="btn btn-warning">Annuler</button>
    </div>
    <div class="col-6">
        <button type="submit" class="btn btn-primary">{{isset ($contact)?"Mise à jour": "Enregistrer"}}</button>
    </div>
</form>
