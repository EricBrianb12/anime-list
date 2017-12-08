{!! csrf_field() !!}



<div class="form-group ">
    <label for="nome" class="col-2 col-form-label">Nome</label>
    <div class="col-10">
        <input name="nome"  class="form-control" type="text" id="nome" value="{{$post->nome ?? ''}}">
    </div>
</div>



<div class="form-group">
    <label for="example-number-input" class="col-2 col-form-label">Ep. que parou</label>
    <div class="col-10">
        <input name="parou" class="form-control" type="number" value="{{$post->parou ?? ''}}" id="parou">
    </div>


    <div class="form-group">
        <label for="example-number-input" class="col-2 col-form-label">assistir</label>
        <div class="col-10">
            <input name="assistir" class="form-control" type="number" value="{{$post->assistir ?? ''}}" id="assistir" disabled>
        </div><br>
        <div class="container">
            <label class="col-2 col-form-label" >Capa do anime</label>
            <input  type="file" id="capa" name="imagem" value="{{$post->imagem ?? ''}}}">
        </div>
        <div class="form-group">
            <div class="col-sm-12 col-sm-offset-5"><br>
                <input type="submit" value="Salvar" class="btn btn-primary text-center">
            </div>
        </div>
</div>




