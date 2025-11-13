<h4>Liste des Commentaires</h4>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Contenu</th>
            <th>ID Post</th>
            <th>ID User</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($commentaires as $commentaire)
        <tr>
            <td>{{ $commentaire->id }}</td>
            <td>{{ $commentaire->content }}</td>
            <td>{{ $commentaire->id_post }}</td>
            <td>{{ $commentaire->id_user }}</td>
            <td>
                <a href="{{ route('commentaires.show', $commentaire->id) }}">Voir</a>
                <a href="{{ route('commentaires.edit', $commentaire->id) }}">Éditer</a>
                <form action="{{ route('commentaires.destroy', $commentaire->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('commentaire.create') }}" class="btn btn-primary">Ajouter un nouveau commentaire</a>