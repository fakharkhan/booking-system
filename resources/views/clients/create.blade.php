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
    <div style="padding: 20px;">
        <form action="/clients" method="POST">
            {{ csrf_field() }}
            {{--<input type="text" name="name">--}}
            {{--<input type="text" name="phone">--}}


            {{--<div class="form-group">--}}
            {{--<label>Email address</label>--}}
            {{--<input type="text" class="form-control"  name="{{ isset($name) ? $name : '' }}" >--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
            {{--<label>Email address</label>--}}
            {{--<input type="text" class="form-control"  name="{{ isset($name) ? $name : '' }}" >--}}
            {{--</div>--}}


            {{--@include('controls.text',['name'=>'name','label'=>'Client Name','placeholder'=>'Enter client name'])--}}
            {{--@include('controls.text',['name'=>'phone','label'=>'Client Phone'])--}}

            @text('name')
            @text('phone')


            <input type="submit" value="Save">
        </form>
    </div>

@endsection