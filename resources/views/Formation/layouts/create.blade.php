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
<form action="/NewFormations" method="post">
@csrf
Nom : <input type="text" name="nom" value="{{old('nom')}} ">
description: <input type="text" name="description" value="{{old('description')}}"  >
<button type="submit" class="btn btn-info">CREATE</button>
</form>

@endsection