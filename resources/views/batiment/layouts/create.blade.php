@extends('template/welcome')

@section('content')
<form action="/Newcompagnie" method="post">
@csrf
Nom : <input type="text" name="nom">
description: <input type="text" name="description">
<button type="submit" class="btn btn-info">CREATE</button>
</form>

@endsection