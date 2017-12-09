@extends('layouts.app')

@section('title','New Client')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/clients" method="POST">
        {{ csrf_field() }}
        <input type="text" name="name">
        <input type="text" name="phone">
        <input type="submit" value="Save">
    </form>
@endsection