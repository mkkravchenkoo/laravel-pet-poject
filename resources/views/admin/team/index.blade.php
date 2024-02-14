@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Team')">
        <div class="pb-5">
            <a href="{{route('admin.team.create')}}">
                <x-primary-button type="button">{{__('Create new')}}</x-primary-button>
            </a>
        </div>
        <hr class="mb-5">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left">
                        Postion
                    </th>
                    <th scope="col" class="px-6 py-3 text-left">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($teams as $team)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">
                            {{$team->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$team->position}}
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex mr-5">
                                <a href="{{route('admin.team.edit', $team->id )}}"
                                   class="text-blue-500 hover:text-blue-600">Edit</a>
                            </div>
                            <div class="inline-flex">
                                <form action="{{ route('admin.team.destroy', $team->id)}}" method="post">
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
        {{ $teams->links() }}
    </x-admin-content>
@endsection
