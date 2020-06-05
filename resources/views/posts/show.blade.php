@extends('layouts.master')

@section('content')

               <h1> {{ $post->title }} ID: {{ $post->id }} </h1>
               <p> {{ $post->body }} </p>

@endsection