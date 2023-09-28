@extends('layouts.layout')
@section('title', 'Welcome')
@section('content')
    <x-welcome/>
    <x-about-us/>

    @foreach($rooms as $room)
        <p>{{$room->name}}</p>
    @endforeach

    <div>
        {{auth()->user()->first_name}}
    </div>
@endsection
