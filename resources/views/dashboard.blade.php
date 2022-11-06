<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>

            

            <!-- component -->
            <div class="flex flex-col">
            <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                <div class="ml-4">
                    <h2 class="font-semibold">--- Chirps</h2>
                </div>
                </div>

                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                
                <div class="ml-4">
                    <h2 class="font-semibold">--- Prattles</h2>
                </div>
                </div>
                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                

                <div class="ml-4">
                    <h2 class="font-semibold">--- Playlist</h2>
                </div>
                </div>
                <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                

                <div class="ml-4">
                    <h2 class="font-semibold">--- Following</h2>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
