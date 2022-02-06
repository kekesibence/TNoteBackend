@extends('layout')

@section('title', 'Welcome')

@section('content')
    <body class="bg-dark text-white">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4 mx-auto">
                    <h1>Welcome to TNote</h1>
                    <p>Current users: {{ $usercount }}</p>
                    <p>Notes created: {{ $notecount }}</p>
                </div>
            </div>
        </div>
    </body>
@stop