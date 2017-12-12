@component('layouts.elements.body')
    @slot('title') Ações @endslot
    @slot('description') o que você deseja fazer ? @endslot

    <h3>{!! $post->nome !!}</h3>

    <p>
        <small>
            criado em {{$post->created_at->format('d/m/Y')}}
        </small>
    </p>

    <table>

        <td>
            <img src="{!! asset('imagem-post/'.$post->imagem) !!}" style="widows: 250px; height: 300px;">
        </td>
    </table><br>

    <a href="{{route('posts.index')}}" class="btn btn-xs btn-default"><i class="fa fa-arrow-left "> Voltar</i></a>
    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-xs btn-default">Editar <i class="fa fa-pencil"></i></a>
    <form action="{{route('posts.destroy', $post->id)}}" class="form-horizontal" method="post" style="display: inline-block">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Excluir" class="btn btn-xs btn-danger">
    </form>

@endcomponent