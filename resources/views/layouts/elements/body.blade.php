@component('layouts.default')

<h3 style="color: white;">{{$title}} <small style="color: white;">{{$description}}</small></h3>


<div class="panel panel-default">
    <div class="panel-body">
        {{$slot}}
    </div>
</div>
@endcomponent