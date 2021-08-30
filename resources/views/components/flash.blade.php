@if (session()->has('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 5000)"
        x-show="show"
        class="fixed bottom-4 right-4 p-4 rounded-xl bg-blue-400 text-white"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif
