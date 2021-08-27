@extends('template/welcome')

@section('content')
<div class="card" style="width: 18rem; margin: auto;" >
    <div class="card-body">
        <h5 class="card-title">{{$data->nom}}</h5>
    </div>
    <form action="{{route('delete3',$data->id)}} "
        method="post">
        @csrf
        @method('delete')
        <a href="{{route('edit3', $data->id)}} " class="btn btn-secondary">EDIT</a>
        <button class="btn btn-danger" type="submit">DELETE</button>
    </form>
</div>
@endsection