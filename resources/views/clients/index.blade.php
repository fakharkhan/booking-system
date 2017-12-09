@extends('layouts.app')

@section('title','Clients')

@section('content')
    <h2>
        {{ session()->has('status') ? session()->get('status') : '' }}
    </h2>
    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td>Phone</td>
            <td>Download</td>
        </tr>

        @foreach($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone }}</td>
                <td><a href="{{ url('download') }}">Download</a></td>
            </tr>
        @endforeach
    </table>
    <a href="/clients/create">Create</a>
@endsection

