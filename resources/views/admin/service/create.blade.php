@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Create service')">
        <x-service-form-create/>
    </x-admin-content>
@endsection
