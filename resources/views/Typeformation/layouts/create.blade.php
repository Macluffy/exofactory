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
<form action="/NewTypeformations" method="post">
@csrf
Nom : <input type="text" name="nom" value="{{old('nom')}} ">
<button type="submit" class="btn btn-info">CREATE</button>
</form>

@endsection