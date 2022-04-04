@extends('layouts.app')

@section('content')
    <h1>LISTES DES ARTICLES</h1>
    @foreach($posts as $post)
        <a href=""><h2>{{ $post }}</h2></a>
    @endforeach
 
 @endsection