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
                <a class="btn btn-sm btn-warning" href="{{ route('contact.edit', ['id' => $contact->id]) }}"> Edit </a>
                <a class="btn btn-sm btn-danger" href="{{ route('contact.delete', ['id' => $contact->id ]) }}">Delete</a>
            </td>
        </tr>
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
