@props(['name'])

<label for="{{ $name }}" class="block font-semibold uppercase text-xs">
    {{  ucwords($name)}}
</label>
