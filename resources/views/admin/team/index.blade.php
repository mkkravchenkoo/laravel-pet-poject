@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Team')">
        @foreach($teams as $team)
            {{$team->name}} <br>
        @endforeach
        {{ $teams->links() }}
    </x-admin-content>
@endsection
