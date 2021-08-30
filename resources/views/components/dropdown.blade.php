@props(['trigger'])

<div x-data="{show: false}" @click.away="show = false" class="relative">
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    <div
        x-show="show"
        class="absolute mt-2 py-2 bg-gray-100 rounded-xl w-full z-50 overflow-y-auto max-h-52"
        style="display: none;"
    >
        {{ $slot }}
    </div>
</div>
