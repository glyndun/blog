@props(['name', 'type' => 'text'])

<div class="mt-6">
    <x-form.label name="{{ $name }}" />

    <input
        name="{{ $name }}"
        id="{{ $name }}"
        type="{{ $type }}"
        class="w-full text-xs mt-1 border focus:outline-none focus:ring rounded-xl p-3"
        placeholder="Quick, thing of something to say!"
        {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}" />
</div>
