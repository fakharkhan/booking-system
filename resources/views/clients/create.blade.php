@extends('layouts.app')

@section('title','New Client')

@section('content')
    <form action="/clients" method="POST">
        {{ csrf_field() }}
        <input type="text" name="name">
        <input type="text" name="phone">
        <input type="submit" value="Save">
    </form>
@endsection