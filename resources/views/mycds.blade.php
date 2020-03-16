
@extends('layout.pagina')
@section('content') 
@foreach ($cd as $dischi)
<div class="cd">
    <img src="{{$dischi['poster']}}" alt="">

    <h3>{{$dischi['title']}}</h3>
    <small>{{$dischi['author']}}</small>
    <strong>{{$dischi['year']}}</strong>
</div>
@endforeach
    @endsection