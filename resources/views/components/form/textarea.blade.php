@props(['name'])

<div class="mt-6">
    <x-form.label name="{{ $name }}" />

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        class="w-full text-xs mt-1 border focus:outline-none focus:ring rounded-xl p-3"
        rows="5"
        placeholder="Quick, thing of something to say!"
        required
    >{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</div>
