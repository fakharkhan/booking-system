@extends('layouts.app')

@section('title','Clients')

@section('content')
    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td>Phone</td>
        </tr>

        @foreach($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone }}</td>
            </tr>
        @endforeach
    </table>
    <a href="/clients/create">Create</a>
@endsection

