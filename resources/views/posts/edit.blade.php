@component('layouts.elements.body')
    @slot('title') Edição @endslot
    @slot('description') de registro @endslot

    <form action="{{route('posts.update',$post->id)}}"  method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('layouts.edit')

    </form>

<a href="{{route('posts.show',$post->id)}}" class="btn btn-xs btn-default">Voltar</a>


@endcomponent