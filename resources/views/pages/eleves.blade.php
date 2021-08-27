@extends('template/welcome')

@section('content')



<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Age</th>
            <th scope="col">etat</th>
            <th scope="col">Show</th>
        </tr>
    </thead>

@foreach ($data as $value)

    <tbody>
        <tr>
            <th scope="row">{{$value->id}} </th>
                <td>{{$value->nom}}</td>
                <td>{{$value->prenom}}</td>
                <td>{{$value->age}}</td>
                <td>{{$value->etat}}</td>
                <td>
                    <a href="" class="btn btn-info">SHOW</a>
                </td>
        </tr>
    </tbody>
</table>


@endforeach

<a href="" class="btn btn-secondary">Create New Element</a>

@endsection