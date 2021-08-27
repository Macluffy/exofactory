@extends('template/welcome')

@section('content')
<div class="card" style="width: 18rem; margin: auto;" >
    <div class="card-body">
        <h5 class="card-title">{{$data->nom}}</h5>
        <p class="card-text">{{$data->prenom}}</p>
        <p class="card-text">{{$data->age}}</p>
        <p class="card-text">{{$data->etat}}</p>
    </div>
    <form action="{{route('delete4',$data->id)}} "
        method="post">
        @csrf
        @method('delete')
        <a href="{{route('edit4', $data->id)}} " class="btn btn-secondary">EDIT</a>
        <button class="btn btn-danger" type="submit">DELETE</button>
    </form>
</div>
@endsection