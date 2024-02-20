@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Config')">

        <x-config-form :config="$config" :fields="$configFields"/>

    </x-admin-content>
@endsection
