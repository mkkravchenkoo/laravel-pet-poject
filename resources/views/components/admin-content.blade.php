@props(['title' => ''])
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$title}}
        </h2>
    </div>
</header>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="w-full flex flex-col sm:flex-row flex-grow overflow-hidden">
            <div class="sm:w-1/3 md:1/4 w-full flex-shrink flex-grow-0 p-4">

                <div class="w-full bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <a href="{{route('admin.menu.edit')}}" class="block w-full px-4 py-2 rounded-t-lg cursor-pointer">
                        Main menu
                    </a>
                    <a href="{{route('slider.index')}}" class="block w-full px-4 py-2 rounded-t-lg cursor-pointer">
                        Slider
                    </a>
                    <a href="{{route('service.index')}}" class="block w-full px-4 py-2 rounded-t-lg cursor-pointer">
                        Services
                    </a>
                    <a href="{{route('admin.team.index')}}" class="block w-full px-4 py-2 rounded-t-lg cursor-pointer">
                        Team
                    </a>
                    <a href="{{route('admin.config.index')}}" class="block w-full px-4 py-2 rounded-t-lg cursor-pointer">
                        Config
                    </a>
                </div>

            </div>
            <main role="main" class="w-full h-full flex-grow p-3 overflow-auto">
                <!-- content area -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
