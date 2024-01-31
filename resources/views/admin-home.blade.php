@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Welcome')">
        {{ __("You're logged in!") }}
    </x-admin-content>
@endsection
