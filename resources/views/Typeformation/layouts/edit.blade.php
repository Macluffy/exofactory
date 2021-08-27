@extends('template/welcome')

@section('content')
<form action="{{route('update3',$data->id)}} " method="post">
@csrf
@method('PUT')


Nom : <input type="text" value="{{$data->nom}}"  name="nom">
<button type="submit" class="btn btn-info">SAVE</button>
</form>

@endsection