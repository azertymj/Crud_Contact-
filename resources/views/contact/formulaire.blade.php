<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Ajout d'un nv contact
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
