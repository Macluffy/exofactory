@extends('template/welcome')

@section('content')



<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Show</th>
        </tr>
    </thead>

    <tbody>

@foreach ($data as $value)

    
        <tr>
            <th scope="row">{{$value->id}} </th>
                <td>{{$value->nom}}</td>
                <td>{{$value->description}}</td>
                <td>
                    <a href="{{route('show2', $value->id)}} " class="btn btn-info">SHOW</a>

                </td>
        </tr>

@endforeach


    </tbody>
</table>





<a href="/create2" class="btn btn-secondary">Create New Element</a>

@endsection