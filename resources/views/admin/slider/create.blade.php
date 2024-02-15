@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Create slider')">
        <x-slide-form-create/>
    </x-admin-content>
@endsection
