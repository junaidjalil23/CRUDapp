@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users and Profiles</h1>

    @foreach ($users as $user)
        <h2>{{ $user->name }}</h2>
        <p>Email: {{ $user->email }}</p>
        @if ($user->profile)
            <p>Bio: {{ $user->profile->bio }}</p>
        @else
            <p>No profile found.</p>
        @endif
    @endforeach
</div>
@endsection
