@extends('template/welcome')

@section('content')
<form action="{{route('update4',$data->id)}} " method="post">
@csrf
@method('PUT')


Nom : <input type="text" value="{{$data->nom}}"  name="nom">
Prenom : <input type="text" name="prenom" value="{{$data->prenom}} ">
Age: <input type="text" name="age" value="{{$data->age}} ">
Etat: <input type="text" name="etat" value="{{$data->etat}} "  >
<button type="submit" class="btn btn-info">SAVE</button>
</form>

@endsection