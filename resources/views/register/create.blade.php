<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
                <h1 class="text-center font-bold text-xl">Register!</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf
                    <label for="naame">Name</label>
                    <input class="border border-gray-200 p-2 w-full rounded"
                    name="name"
                    id="naame" value="{{ old('name') }}" type="text">

                    @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <label for="username">Username</label>
                    <input class="border border-gray-200 p-2 w-full rounded"
                    name="username"
                    id="username" value="{{ old('username') }}" type="text">

                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <label for="email">Email</label>
                    <input class="border border-gray-200 p-2 w-full rounded"
                    name="email"
                    id="email" value="{{ old('email') }}" type="text">

                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <label for="password">Password</label>
                    <input class="border border-gray-200 p-2 w-full rounded"
                    name="password"
                    id="password" type="password">

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <button type="submit"
                    class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                    Sign up
                    </button>
                    <x-flash />
                </form>
        </main>
    </section>
</x-layout>
