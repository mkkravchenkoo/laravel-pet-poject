@extends('layouts.admin')
@section('content')

    @php
        $menuItems = [
            ['text' => 'item1', 'link' => '', 'children' => []],
            ['text' => 'item2', 'link' => '', 'children' => [
                    ['text' => 'item1-1', 'link' => ''],
                    ['text' => 'item1-2', 'link' => ''],
                ]
            ],
            ['text' => 'item3', 'link' => '', 'children' => []],
            ['text' => 'item4', 'link' => '', 'children' => [
                  ['text' => 'item4-1', 'link' => ''],
                  ['text' => 'item4-2', 'link' => ''],
            ]],
        ]
    @endphp

    <x-admin-content :title="__('Edit menu')">
        <ul class="list-disc list-outside main-menu-items">
        @foreach($menuItems as $menuItem)
                <li class=" p-3 border border-indigo-400">
                    {{$menuItem['text']}}
                    {{$menuItem['link']}}
                    @if (!empty($menuItem['children']))
                        <ul class="list-disc main-menu-items">
                            @foreach($menuItem['children'] as $child)
                                <li class="border border-slate-700">
                                    {{$child['text']}}
                                    {{$child['link']}}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
        @endforeach
        </ul>

    </x-admin-content>
@endsection
