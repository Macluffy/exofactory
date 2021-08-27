@extends('template/welcome')

@section('content')
<form action="{{route('update',$data->id)}} " method="post">
@csrf
@method('PUT')


Nom : <input type="text" value="{{$data->nom}}"  name="nom">
Description : <input type="text" value="{{$data->description}}" name="description">
<button type="submit" class="btn btn-info">SAVE</button>
</form>

@endsection