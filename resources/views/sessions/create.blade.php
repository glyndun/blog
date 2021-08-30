<x-layout>
    <section class="px-6 py-8">
        <main class="mt-10 max-w-lg mx-auto bg-gray-100 rounded-xl p-6 border">
            <h1 class="text-center text-xl font-bold">Log In</h1>
            <form action="/login" method="POST" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input
                        class="border border-gray-300 rounded-lg p-2 w-full"
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        required
                    />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input
                        class="border border-gray-300 rounded-lg p-2 w-full"
                        type="password"
                        name="password"
                        autocomplete="password"
                        id="password"
                        required
                    />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">log In</button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
