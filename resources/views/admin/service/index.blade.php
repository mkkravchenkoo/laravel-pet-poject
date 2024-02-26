@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Services')">
        <div class="pb-5">
            <a href="{{route('service.create')}}">
                <x-primary-button type="button">{{__('Create new')}}</x-primary-button>
            </a>
        </div>
        <hr class="mb-5">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3 text-left">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">
                            {{$service->title}}
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex mr-5">
                                <a href="{{route('service.edit', $service->id )}}"
                                   class="text-blue-500 hover:text-blue-600">Edit</a>
                            </div>
                            <div class="inline-flex">
                                <form action="{{ route('service.destroy', $service->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button onclick="return confirm('Are you sure?')">
                                        Delete
                                    </x-danger-button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $services->links() }}

    </x-admin-content>
@endsection
