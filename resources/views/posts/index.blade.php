@component('layouts.elements.body')
    @slot('title') Lista @endslot
    @slot('description') De Animes @endslot
    <div>
        <a href="{{route('posts.create',1)}}" class="btn btn-primary">Novo Anime</a>
    </div><br>
<table class="table table-bordered">
    <thead>
    <tr>
        <th></th>
        <th>nome</th>
        <th>Ep. parou</th>
        <th>Ep. assistir</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>

        @foreach($posts as $post)
            <tr>
                <td>{{$post->imagem}}</td>
                <td>{{$post->nome}}</td>
                <td>{{$post->parou}}</td>
                <td>{{$post->assistir}}</td>
                <td class="text-center">
                    <a href="{{route('posts.show', $post->id)}}" class="btn btn-default btn-xs"> <span class="glyphicon glyphicon-plus"></span> </a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
    <div class="text-center">
        {!! $posts->render() !!}
    </div>

@endcomponent