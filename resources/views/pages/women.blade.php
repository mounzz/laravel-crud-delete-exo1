@extends('layout.layout')

@section('content')
@foreach ($women as $membre)
{{$membre -> nom}} {{$membre -> genre}} {{$membre -> age}}
<form action="/users/{{$membre->id}}/delete" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">delete</button>
    </form>
    <br>
@endforeach
@endsection
