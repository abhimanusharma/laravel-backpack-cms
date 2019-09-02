@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <h1> {{$page->title}} </h1>
    <p class="lead"> {!! $page->content !!} </p>
@endsection