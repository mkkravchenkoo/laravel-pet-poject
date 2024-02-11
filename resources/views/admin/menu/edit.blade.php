@extends('layouts.admin')
@section('content')

    <x-admin-content :title="__('Edit menu')">
        <form action="{{ route('admin.menu.store') }}" method="POST" class="mb-5">
            @csrf
            <div class="flex mb-5">
                <div class="mr-1">
                    <x-text-input name="link" placeholder="link" type="text" class="mt-1 block w-full" :value="old('link', '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('link')" />
                </div>
                <div>
                    <x-text-input name="text" placeholder="text" type="text" class="mt-1 block w-full" :value="old('text', '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('text')" />
                </div>
            </div>
            <x-primary-button>{{ __('add new item') }}</x-primary-button>
        </form>

        <div id="nested-sort-wrap" data-menu="{{json_encode($mainMenuItems)}}"></div>
    </x-admin-content>

    <style>
        .nested-sort {
            padding: 0;
        }

        .nested-sort--enabled li {
            cursor: move;
        }

        .nested-sort li {
            list-style: none;
            margin: 0 0 5px;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
        }

        .nested-sort li ol {
            padding: 0;
            margin-top: 10px;
            margin-bottom: -5px;
        }

        .nested-sort .ns-dragged {
            border: 1px solid red;
        }

        .nested-sort .ns-targeted {
            border: 1px solid green;
        }
    </style>

@endsection
