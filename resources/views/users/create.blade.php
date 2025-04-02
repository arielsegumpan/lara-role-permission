<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700">Name:</label>
                    <input type="text" name="name" class="w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Email:</label>
                    <input type="email" name="email" class="w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Password:</label>
                    <input type="password" name="password" class="w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Roles:</label>
                    <select name="roles[]" class="w-full border-gray-300 rounded-md shadow-sm" multiple>
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                    Create User
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
