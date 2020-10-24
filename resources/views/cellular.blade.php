@extends('layouts.app')
@section('title','Celular')

@section('content')
    <div class="container" style="margin-top: 7%;">

        <h3 class="my-5">Registro de los celulares</h3>

        <form action="" method="" class="form-group col-lg-12">
            @csrf
            <div class="row">
                <div class="row col-lg-6">
                    <div class="col-lg-2">
                        <label for="" class="py-2">Marca</label>
                        <label for="" class="py-2">Modelo</label>
                        <label for="" class="py-2">Procesador</label>
                        <label for="" class="py-2">Memoria Interna</label>
                        <label for="" class="py-2">RAM</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" placeholder="Marca">
                        <input type="text" class="form-control my-3" placeholder="Modelo">
                        <input type="text" class="form-control my-3" placeholder="Procesador">
                        <input type="text" class="form-control my-3" placeholder="Memoria Interna">
                        <input type="text" class="form-control my-3" placeholder="RAM">
                    </div>
                </div>
                <div class="col-lg-4">
                <img src="{{ asset('img/user.png') }}" alt="" style=" width:100%; height:30vh">
                <input type="file" class="mt-3">
                </div>
            </div>
            <div class="col-lg-6 mt-5">
                <button type="submit" class="btn btn-outline-success btn-block"><b>Enviar</b></button>
            </div>
        </form>

    </div>
</body>
</html>
@endsection
