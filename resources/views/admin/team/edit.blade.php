@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Team')">
        <x-team-form-update :team="$team" :services="$services" />
    </x-admin-content>
@endsection
