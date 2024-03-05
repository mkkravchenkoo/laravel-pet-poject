@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Create team')">
        <x-team-form-create :services="$services" />
    </x-admin-content>
@endsection
