@extends('layouts.admin')
@section('content')
    <x-admin-content :title="__('Profile')">
        <div class="max-w-7xl mx-auto">
            <div class="p-4 pb-8 pt-0">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </x-admin-content>
@endsection
