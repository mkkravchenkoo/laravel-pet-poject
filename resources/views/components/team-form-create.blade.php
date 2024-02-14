<form method="post" enctype="multipart/form-data" action="{{ route('admin.team.store' ) }}" class="mt-6 space-y-6">
    @csrf
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>
    <div>
        <x-input-label for="avatar" :value="__('Avatar')" />
        <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar')" />
        <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
    </div>
    <div>
        <x-input-label for="position" :value="__('Position')" />
        <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" :value="old('position')" />
        <x-input-error class="mt-2" :messages="$errors->get('position')" />
    </div>
    <div>
        <x-input-label for="social_fb" :value="__('social fb')" />
        <x-text-input id="social_fb" name="social_fb" type="text" class="mt-1 block w-full" :value="old('social_fb')" />
        <x-input-error class="mt-2" :messages="$errors->get('social_fb')" />
    </div>
    <div>
        <x-input-label for="social_inst" :value="__('social inst')" />
        <x-text-input id="social_inst" name="social_inst" type="text" class="mt-1 block w-full" :value="old('social_inst')" />
        <x-input-error class="mt-2" :messages="$errors->get('social_inst')" />
    </div>
    <div>
        <x-input-label for="social_tw" :value="__('social tw')" />
        <x-text-input id="social_tw" name="social_tw" type="text" class="mt-1 block w-full" :value="old('social_tw')" />
        <x-input-error class="mt-2" :messages="$errors->get('social_tw')" />
    </div>

    <x-primary-button>{{ __('Create') }}</x-primary-button>

</form>

