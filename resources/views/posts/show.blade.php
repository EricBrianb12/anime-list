@component('layouts.elements.body')
    @slot('title') Ações @endslot
    @slot('description') o que você deseja fazer ? @endslot

    <h3>{!! $post->nome !!}</h3>

    <p>
        <small>
            criado em {{$post->created_at->format('d/m/Y H:i:s')}}
        </small>
    </p>

    {!! $post->imagem !!}<br>

    <a href="{{route('posts.index')}}" class="btn btn-xs btn-default">Voltar</a>
    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-xs btn-default">Editar</a>
    <form action="{{route('posts.destroy', $post->id)}}" class="form-horizontal" method="post" style="display: inline-block">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Excluir" class="btn btn-xs btn-danger">
    </form>

@endcomponent