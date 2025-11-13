<h4>Liste des posts</h4>

@foreach ($posts as $post)
    <li>{{ $post->title }}</li>
    <li>{{$post->content}}</li>


    <a href="{{route('posts.create')}}">Ajouter Votre commentaire</a>
@endforeach
