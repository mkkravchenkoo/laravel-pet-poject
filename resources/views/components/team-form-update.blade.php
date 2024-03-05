@props(['team' => null, 'services' => []])

<form method="post" enctype="multipart/form-data" action="{{ route('admin.team.update', $team?->id ) }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $team?->name)" />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>
    <div>
        <x-input-label for="avatar" :value="__('Avatar')" />
        <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $team?->avatar)" />
        <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        <img src="{{ asset('storage/' . $team?->avatar) }}" alt="" class="rounded-xl ml-6" width="100">
    </div>
    <div>
        <x-input-label for="service_id" :value="__('Service')" />
        <x-select :options="$services" :value="old('service_id',  $team?->service_id)" name="service_id" id="service_id"/>
        <x-input-error class="mt-2" :messages="$errors->get('service_id')" />
    </div>
    <div>
        <x-input-label for="position" :value="__('Position')" />
        <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" :value="old('position', $team?->position)" />
        <x-input-error class="mt-2" :messages="$errors->get('position')" />
    </div>
    <div>
        <x-input-label for="social_fb" :value="__('social fb')" />
        <x-text-input id="social_fb" name="social_fb" type="text" class="mt-1 block w-full" :value="old('social_fb', $team?->social_fb)" />
        <x-input-error class="mt-2" :messages="$errors->get('social_fb')" />
    </div>
    <div>
        <x-input-label for="social_inst" :value="__('social inst')" />
        <x-text-input id="social_inst" name="social_inst" type="text" class="mt-1 block w-full" :value="old('social_inst', $team?->social_inst)" />
        <x-input-error class="mt-2" :messages="$errors->get('social_inst')" />
    </div>
    <div>
        <x-input-label for="social_tw" :value="__('social tw')" />
        <x-text-input id="social_tw" name="social_tw" type="text" class="mt-1 block w-full" :value="old('social_tw', $team?->social_inst)" />
        <x-input-error class="mt-2" :messages="$errors->get('social_tw')" />
    </div>

    <x-primary-button>{{ __('Update') }}</x-primary-button>

</form>

