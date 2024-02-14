@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Team')">
        <x-team-form-update :team="$team" />
    </x-admin-content>
@endsection
