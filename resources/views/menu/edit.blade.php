@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Edit menu')">

        <ul id="items">
            <li>item 1</li>
            <li>item 2</li>
            <li>item 3</li>
        </ul>

    </x-admin-content>
@endsection
