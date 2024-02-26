@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Service')">
        <x-service-form-update :service="$service"/>
    </x-admin-content>
@endsection
