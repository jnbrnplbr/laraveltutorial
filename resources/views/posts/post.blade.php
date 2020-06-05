@extends('layouts.master')


@section('content')

                  <h1>{{ $title }}</h1>
        
                  @foreach($posts as $post)   
                        <h2> <a href="/posts/{{ $post->id }}"> {{ $post->title }} </a> </h2>      
                  @endforeach

@endsection
