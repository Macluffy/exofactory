@extends('template/welcome')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error  )
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/NewEleves" method="post">
@csrf
Nom : <input type="text" name="nom" value="{{old('nom')}} ">
Prenom : <input type="text" name="prenom" value="{{old('prenom')}} ">
Age: <input type="text" name="age" value="{{old('age')}} ">
Etat: <input type="text" name="etat" value="{{old('etat')}}"  >
<button type="submit" class="btn btn-info">CREATE</button>
</form>

@endsection