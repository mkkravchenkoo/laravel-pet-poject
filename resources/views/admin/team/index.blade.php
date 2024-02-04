@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Team')">
        @foreach($teams as $team)
            {{$team->name}} <a href="/admin/teams/{{ $team->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a> <br>
        @endforeach
        {{ $teams->links() }}
    </x-admin-content>
@endsection
