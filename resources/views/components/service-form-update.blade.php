@props(['service' => null, ])
<form method="post" enctype="multipart/form-data" action="{{ route('service.update', $service->id ) }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')
    <div>
        <x-input-label for="title" :value="__('title')" />
        <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $service->title)" />
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>
    <div>
        <x-input-label for="sub_title" :value="__('sub title')" />
        <x-text-input id="sub_title" name="sub_title" type="text" class="mt-1 block w-full" :value="old('sub_title', $service->sub_title)" />
        <x-input-error class="mt-2" :messages="$errors->get('sub_title')" />
    </div>
    <div>
        <x-input-label for="image" :value="__('image')" />
        <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" :value="old('image', $service->image)" />
        <x-input-error class="mt-2" :messages="$errors->get('image')" />
        <img src="{{ asset('storage/' . $service?->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
    </div>
    <div>
        <x-input-label for="slug" :value="__('slug')" />
        <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug', $service->slug)" />
        <x-input-error class="mt-2" :messages="$errors->get('slug')" />
    </div>
    <div>
        <x-input-label for="excerpt" :value="__('excerpt')" />
        <x-text-input id="excerpt" name="excerpt" type="text" class="mt-1 block w-full" :value="old('excerpt', $service->excerpt)" />
        <x-input-error class="mt-2" :messages="$errors->get('excerpt')" />
    </div>
    <div>
        <x-input-label for="body" :value="__('Body')" />
        <x-textarea id="body" name="body" type="text" class="mt-1 block w-full" :value="old('body', $service->body)" />
        <x-input-error class="mt-2" :messages="$errors->get('body')" />
    </div>
    <div>
        <x-input-label for="icon" :value="__('Icon')" />
        <x-select :options="getIconList()" :value="old('icon',  $service->icon)" name="icon"/>
        <x-input-error class="mt-2" :messages="$errors->get('icon')" />
    </div>
    <x-primary-button>{{ __('Update') }}</x-primary-button>
</form>
