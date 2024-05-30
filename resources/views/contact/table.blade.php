<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date Naissance</th>
            <th>Sexe</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($contacts ?? [] as $contact)
         <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->nom }}</td>
            <td>{{ $contact->prenom }}</td>
            <td>{{ $contact->date_naissance }}</td>
            <td>{{ $contact->sexe }}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal{{$contact->id}}"> Edit </a>
                <a class="btn btn-sm btn-danger" href="{{ route('contact.delete', ['id' => $contact->id ]) }}">Delete</a>
            </td>
        </tr>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabe{{$contact->id}}" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('contact.update', $contact->id)}}" class="row g-3">
                        @csrf
                            <div class="col-md-6">
                                <label for="inputNom" class="form-label">Nom</label>
                                <input type="text" value="{{$contact->nom}}" class="form-control" name="nom" id="inputNom">
                            </div>
                            <div class="col-md-6">
                                <label for="inputprenom" class="form-label">Prenom</label>
                                <input type="text"  value="{{$contact->prenom}}" class="form-control" name="prenom" id="inputprenom">
                            </div>
                            <div class="col-md-6">
                                <label for="inputDateNaissance" class="form-label">Date Naissance</label>
                                <input type="date" value="{{$contact->date_naissance}}"  class="form-control" name="date_naissance" id="inputDateNaissance">
                            </div>
                            <div class="col-md-6">
                                <label for="inputSexe" class="form-label">Sexe</label>
                                <select id="inputSexe" name="sexe" class="form-select">
                                    <option value="masculin" {{ ($contact->sexe=="masculin")? "selected" : ""}}  >Masculin</option>
                                    <option value="feminin" {{ ($contact->sexe=="feminin")? "selected" : ""}} >Feminin</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <button type="reset" class="btn btn-warning">Annuler</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Mise à jour</button>
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

    @endforeach

    </tbody>
    <tfoot>
       <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date Naissance</th>
            <th>Sexe</th>
            <th>Actions</th>
        </tr>
    </tfoot>
</table>
