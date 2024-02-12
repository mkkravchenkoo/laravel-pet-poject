@if (session()->has('success'))
    <div
         class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl text-sm mx-auto sm:w-3/4 md:w-2/4 fixed inset-x-0 top-10"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif
