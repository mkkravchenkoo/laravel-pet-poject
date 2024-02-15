@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Slide')">
        <x-slide-form-update :slide="$slider"/>
    </x-admin-content>
@endsection
