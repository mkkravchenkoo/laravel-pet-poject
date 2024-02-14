@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Create team')">
        <x-team-form-create />
    </x-admin-content>
@endsection
