@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Team')">
        {{$team->name}}
    </x-admin-content>
@endsection
