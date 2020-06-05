@extends('layouts.master')

@section('content')
   
      <h1>Room Page</h1>

      @foreach($rooms as $room) 

         <h1><a href="/rooms/{{ $room->id }}" >{{ $room->title }} </a> </h1>

      @endforeach

@endsection

