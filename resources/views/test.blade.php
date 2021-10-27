@extends('layouts.layouts')

@section('content')
    <div class="jumbotron">
        <h1>PHP Graph Tutorial</h1>
        <p class="lead">This sample app shows how to use the Microsoft Graph API to access a user's data from PHP</p>
        @if(session('userEmail'))
            <h4>Welcome {{ session('userEmail') }}!</h4>
            <p>Use the navigation bar at the top of the page to get started.</p>

            <a href="{{ route('send') }}">Send message</a>
        @else
            <a href="{{ route('oauth.login') }}" class="btn btn-primary btn-large">Click here to sign in</a>
        @endif
    </div>
@endsection
