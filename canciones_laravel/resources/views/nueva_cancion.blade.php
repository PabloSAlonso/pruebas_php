@extends('principal')
@section('titulo', 'Formulario de nuevas canciones')
@section('contenido')
    <h1>Formulario de nueva cancion</h1>
    <form action="{{ route('agregarCancion') }}" method="POST">
        @csrf{{-- Cross Site Request Forgery --}}
        <table>
            <tr>
                <th>Título</th>
                <th>Álbum</th>
                <th>Grupo</th>
                <th>Año</th>
            </tr>
            <tr>
                <td><input type="text" name="titulo" id="titulo"></td>
                <td> <input type="text" name="album" id="album"></td>
                <td><input type="text" name="grupo" id="grupo"></td>
                <td><input type="number" name="anio" id="anio"></td>
            </tr>
        </table>
        <input type="submit" name="guardar" id="guardar">
    </form>
@endsection