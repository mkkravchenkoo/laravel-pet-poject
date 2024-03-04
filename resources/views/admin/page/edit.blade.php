@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Page')">
        <x-page-form-update :page="$page"/>
    </x-admin-content>
@endsection
