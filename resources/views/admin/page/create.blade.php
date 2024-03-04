@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Create page')">
        <x-page-form-create/>
    </x-admin-content>
@endsection
