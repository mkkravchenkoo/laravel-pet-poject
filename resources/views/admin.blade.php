<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="w-full flex flex-col sm:flex-row flex-grow overflow-hidden">
                <div class="sm:w-1/3 md:1/4 w-full flex-shrink flex-grow-0 p-4">
                    <div class="sticky top-0 p-4 w-full">
                        <ul class="flex sm:flex-col overflow-hidden content-center justify-between">
                            <!-- nav goes here -->
                        </ul>
                    </div>
                </div>
                <main role="main" class="w-full h-full flex-grow p-3 overflow-auto">
                    <!-- content area -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            {{ __("You're logged in!") }}
                        </div>
                    </div>
                </main>
            </div>

        </div>
    </div>


</x-app-layout>
