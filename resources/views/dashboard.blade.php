<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="px-6 py-6">
                    <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-3">
                        <div class="p-6 bg-white rounded shadow">
                            <h3 class="text-xl font-semibold">Total Posts</h3>
                            <p class="text-2xl">1000</p>
                        </div>
                        <div class="p-6 bg-white rounded shadow">
                            <h3 class="text-xl font-semibold">Published Posts</h3>
                            <p class="text-2xl">1000</p>
                        </div>
                        <div class="p-6 bg-white rounded shadow">
                            <h3 class="text-xl font-semibold">Unpublished Posts</h3>
                            <p class="text-2xl">500</p>
                        </div>
                    </div>

                    <div class="p-6 bg-white rounded shadow">
                        <h3 class="mb-4 text-xl font-semibold">Posts Per Category</h3>
                    </div>

                    <div class="p-6 bg-white rounded shadow">
                        <h3 class="mb-4 text-xl font-semibold">Posts Per Month</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
