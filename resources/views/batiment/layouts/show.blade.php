@extends('template/welcome')

@section('content')
<div class="card" style="width: 18rem; margin: auto;" >
    <div class="card-body">
        <h5 class="card-title">{{$data->nom}}</h5>
        <p class="card-text">{{$data->description}}</p>
    </div>
    <form action="{{route('delete',$data->id)}} "
        method="post">
        @csrf
        @method('delete')
        <a href="{{route('edit', $data->id)}} " class="btn btn-secondary">EDIT</a>
        <button class="btn btn-danger" type="submit">DELETE</button>
    </form>
</div>
@endsection