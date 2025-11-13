Creation du forrmuliaire de creation d'un post
<h4>Créer un nouveau post</h4>
<form action="{{route('post.store')}}" method="POST">
    @csrf

    <div>
    <label for="title">Titre :</label>
    <input type="text" id="title" name="title" required>
    <div>
    
    <div>
    <label for="content">Contenu :</label>
    <textarea id="content" name="content" required></textarea>
    </div>
    
    <div>
    <label for="id_user">ID de l'utilisateur :</label>
    <input type="number" id="id_user" name="id_user" required>
    </div>
    <button type="submit">Créer le Poste</button>
</form>