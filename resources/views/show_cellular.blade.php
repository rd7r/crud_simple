@extends('layouts.app')
@section('title','show cellular')

@section('content')

    <h3 class="center" style="margin-top: 7%;">lista de Celulares</h3>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>N°</th>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Procesador</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td><img src="{{ asset('img/user.png') }}" alt="" style="width: 60px;height:60px;"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

@endsection
